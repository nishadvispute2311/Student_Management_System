<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Carbon;
use App\Models\RegisterUserModel;
use App\Models\UserDetailsModel;
use App\Models\ResetLinkModel;
use App\Models\StudentDetailsModel;
use App\Models\StudentSkillsModel;
use App\Models\StudentAchievementModel;
use App\Models\StudentProjectsModel;
use App\Models\ConnectionRequestModel;
use App\Models\FriendsModel;
use App\Models\StudentWorkModel;
use App\Models\SkillBadgeModel;
use App\Models\StudentSkillRankingModel;
use App\Models\StaffDetailsModel;
use App\Models\EcBranchModel;
use App\Models\ExamScheduleModel;
use App\Models\StudentResultModel;
use App\Models\StudentTotalResultModel;
use App\Models\PlacementDriveDetailsModel;
use App\Models\PlacedStudentsDetailsModel;
use App\Models\FeePaymentDetailsModel;
use Hash;
use Session;
use PDF;
use Stripe;


class SmsController extends Controller
{
    public function user_registration(Request $request){
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5|max:12|confirmed'
        ]);
        
        $data = new RegisterUserModel();
        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=Hash::make($request->password);
        $data->save();
        return redirect('login')->with("success",'You are successfully registered');
    }



    public function login_user(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:5|max:12'
        ]);

        $data=RegisterUserModel::where('email',$request->email)->first();
        if($data){
            if(Hash::check($request->password,$data->password)){
                Session::put('loginid',$data->id);
                $user_data = UserDetailsModel::where('email',$data->email)->first();
                if($user_data){
                    $id=$user_data->user_id;
                    if($id[1]=='S'){
                        $student_data=StudentDetailsModel::where('student_email',$data->email)->first();
                        if($student_data){
                            Session::put('complete',1);
                            return redirect('dashboard');
                        }else{
                            Session::put("incomplete_student_profile",1);
                            return redirect('dashboard');
                        }
                    }elseif($id[1]=='T'){
                        $staff_data=StaffDetailsModel::where('staff_email',$data->email)->first();
                        if($staff_data){
                            Session::put('staff_complete',1);
                            return redirect('dashboard');
                        }else{
                            Session::put('staff_incomplete',1);
                            return redirect('dashboard');
                        }
                    }elseif($id[1]=='E'){
                        $ec_data=EcBranchModel::where('ec_email',$data->email)->first();
                        if($ec_data){
                            return redirect('exam_schedule_page');
                        }else{
                            return redirect('dashboard');
                        }
                    }else{
                        return redirect('dashboard');
                    }
                    
                }else{
                    return redirect('user_details');
                }
            }
            else{
                return redirect('login')->with('fail','Password is incorrect !!');
            }
        }else{
            return redirect('login')->with('fail','Email id is not regitered !!');
        } 
    }


    public function enter_user_details(){
        if(Session::has('loginid')){
            $data = RegisterUserModel::find(Session::get('loginid'));
            return view('user_profile_details',compact('data'));
        }
    }


    public function user_profile(){
        if(Session::has('loginid')){
            $data = RegisterUserModel::find(Session::get('loginid'));
            $user_data = UserDetailsModel::where('email',$data->email)->first();
            return view('user_profile',compact('user_data'));
        }
    }


    public function show_my_dashboard(){
        if(Session::has('loginid')){
            $data = RegisterUserModel::find(Session::get('loginid'));
            $user_data1 = UserDetailsModel::where('email',$data->email)->first();
            $id=$user_data1->user_id;

            if($id[1]=="S"){
                $student_data=StudentDetailsModel::where('student_email',$data->email)->first();

                $skill_data = StudentSkillsModel::where('student_email',$data->email)->get();

                $certificate_data = StudentAchievementModel::where('student_email',$data->email)->get();

                $request_data = ConnectionRequestModel::where('receiver_email',$data->email)->where('progress','sent')->get();

                $followers_data = FriendsModel::where('user_email',$data->email)->get();

                $following_data = FriendsModel::where('friend_email',$data->email)->get();

                $friends_data = FriendsModel::where('user_email',$data->email)->orWhere('friend_email',$data->email)->get();

                return view('student_details',compact(['user_data1','student_data','skill_data','certificate_data','request_data','friends_data','following_data','followers_data']));
            }elseif($id[1]=="T"){
                $staff_data=StaffDetailsModel::where('staff_email',$data->email)->first();

                return view('staff.staff_details',compact(['user_data1','staff_data']));
            }elseif($id[1]=="E"){
                return view('staff.exam_coordinator_details',compact(['user_data1']));

            }else{
                $placed_data=PlacedStudentsDetailsModel::all();
                return view('tpo.pvgcoe_placement_dashboard',compact(['user_data1','placed_data']));
            }
        }
    }

    

    public function student_fill_details_page(){
        if(Session::has('loginid')){
            $data = RegisterUserModel::find(Session::get('loginid'));
            $user_data1 = UserDetailsModel::where('email',$data->email)->first();
            return view('add_student_details',compact('user_data1'));
        }
    }


    public function student_edit_details_page(){
        if(Session::has('loginid')){
            $data = RegisterUserModel::find(Session::get('loginid'));
            $user_data1 = UserDetailsModel::where('email',$data->email)->first();
            $student_data = StudentDetailsModel::where('student_email',$data->email)->first();

            return view('student_details_edit',compact(['user_data1','student_data']));
        }
    }


    public function submit_user_details(Request $request){
        $request->validate([
            'first_name'=>'required',
            'last_name'=>'required',
            'gender'=>'required',
            'date_of_birth'=>'required',
            'number'=>'required|min:10|max:10',
            'designation'=>'required',
            'about'=>'required',
            'user_image'=>'required',
            'address'=>'required'
        ]);

        if($request->designation == "Student at PVGCOE"){
            $fname=$request->first_name;
            $lname=$request->last_name;
            $user_id = $fname[0].'S'.time().''.$lname[0];
    
        }elseif($request->designation == "Staff member at PVGCOE"){
            $fname=$request->first_name;
            $lname=$request->last_name;
            $user_id = $fname[0].'T'.time().''.$lname[0];
        }elseif($request->designation == "Exam Co-ordinator at PVGCOE"){
            $fname=$request->first_name;
            $lname=$request->last_name;
            $user_id = $fname[0].'E'.time().''.$lname[0];
        }else{
            $fname=$request->first_name;
            $lname=$request->last_name;
            $user_id = $fname[0].'P'.time().''.$lname[0];
        }

        if(Session::has('loginid')){
            $get_data=RegisterUserModel::find(Session::get('loginid'));
            $email=$get_data->email;

            $image=$request->file('user_image');
            $image_name=$request->first_name.'_'.$request->last_name.'_'.time().'.'.$image->extension();
            $image->move(public_path('all_users_profile_images'),$image_name);

            $data = new UserDetailsModel();
            $data->user_id=$user_id;
            $data->fname=$request->first_name;
            $data->lname=$request->last_name;
            $data->email=$email;
            $data->gender=$request->gender;
            $data->dob=$request->date_of_birth;
            $data->number=$request->number;
            $data->designation=$request->designation;
            $data->about=$request->about;
            $data->image=$image_name;
            $data->address=$request->address;
            $data->save();

            return redirect('u_profile');
        }
    }


    public function get_email_for_forget_password(Request $request){
        $request->validate([
            'email'=>'required|email'
        ]);
        $data=RegisterUserModel::where('email',$request->email)->first();
        if($data){
            $user_email = $request->email;
            $user_name = $data->name;
            $unique_token = time();
            $link = "http://localhost/iotsms/public/newpassword/".$unique_token."/".$data->id;

            $send_email_array=array(
                'name'=>$user_name,
                'email'=>$user_email,
                'link'=>$link
            );

            Mail::send('emails.send_reset_link',
                        $send_email_array,
                        function($message) use ($user_name, $user_email){
                            $message->to($user_email,$user_name)
                                    ->subject('Password reset link from MyEduPortal');
                        }
                    );
            
            $user_data_in_reset_link = ResetLinkModel::where('user_email',$user_email)->first();

            if($user_data_in_reset_link){
                $link_sent_time=date('Y-m-d H:i:s');
                $link_data=ResetLinkModel::find($user_data_in_reset_link->id);
                $link_data->link=$link;
                $link_data->token=$unique_token;
                $link_data->sent_time=$link_sent_time;
                $link_data->save();
            }else{
                $link_sent_time=date('Y-m-d H:i:s');
                $link_data = new ResetLinkModel();
                $link_data->user_email=$user_email;
                $link_data->link=$link;
                $link_data->token=$unique_token;
                $link_data->sent_time=$link_sent_time;
                $link_data->save();
            }
            return redirect('forgot-password')->with('success','Reset link sent successfully');
        }else{
            return redirect('forgot-password')->with('fail','This email is not registered');
        }
    }


    public function password_update_page($token,$id){
        $user_id=$id;
        $user_data=RegisterUserModel::find($id);
        $link_data=ResetLinkModel::where('user_email',$user_data->email)->first();
        if($link_data){
            if($link_data->token==$token){
                $sent_time=Carbon::parse($link_data->sent_time);
                $end_time=Carbon::parse(date('Y-m-d H:i:s'));
                $duration=$end_time->diffInSeconds($sent_time);
                if($duration<=600){
                    return view('auth.new_password',compact('user_id'));
                }else{
                    return view('auth.link_expiry');
                }
            }else{
                return view('auth.invalid_link');
            }
        }else{
            return view('auth.invalid_link');
        }
    }


    public function update_password_in_db(Request $request){
        $request->validate([
            'password'=>'required|max:12|min:5|confirmed'
        ]);
        $id=$request->id;
        $data=RegisterUserModel::find($id);
        $data->password=Hash::make($request->password);
        $data->save();
        $link_data=ResetLinkModel::where('user_email',$data->email)->first();
        $link_data->delete();

        return redirect('login')->with('success','Password reset successful');
    }


    public function update_password_from_profile(Request $request){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            if(Hash::check($request->old_password,$data->password)){
                $data->password=Hash::make($request->new_password);
                $data->save();
                return response()->json([
                    'status'=>1
                ]);
            }else{
                return response()->json([
                    'status'=>0
                ]);
            }
        }       
    }

    public function update_user_profile_info_in_db(Request $request){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));

            if(!($request->has('user_image'))){
                $user_data=UserDetailsModel::where('email',$data->email)->first();
                $user_data->fname=$request->fname;
                $user_data->lname=$request->lname;
                $user_data->dob=$request->date_of_birth;
                $user_data->number=$request->number;
                $user_data->address=$request->address;
                $user_data->about=$request->about;
                $user_data->save();
                return redirect('u_profile')->with('success','Profile Updated Successfully'); 
            }else{
                $user_data=UserDetailsModel::where('email',$data->email)->first();
                $image=$request->file('user_image');
                $image_name=$request->fname.'_'.$request->lname.'_'.time().'.'.$image->extension();
                $image->move(public_path('all_users_profile_images'),$image_name);

                $user_data->fname=$request->fname;
                $user_data->lname=$request->lname;
                $user_data->dob=$request->date_of_birth;
                $user_data->number=$request->number;
                $user_data->address=$request->address;
                $user_data->about=$request->about;
                $user_data->image=$image_name;
                $user_data->save();
                return redirect('u_profile')->with('success','Profile Updated Successfully');
            }            
        }
    }

    public function add_details_of_student_in_db(Request $request){
        $request->validate([
            'date_of_birth'=>'required',
            'class'=>'required',
            'gender'=>'required',
            'department'=>'required',
            'date_of_admission'=>'required',
            'number'=>'required|max:10',
            'image'=>'required',
            'linkedin_link'=>'required|url',
            'github_link'=>'required|url',
            'summary'=>'required',
            'present_address'=>'required',
            'permanent_address'=>'required',
            'father_name'=>'required',
            'father_occupation'=>'required',
            'father_number'=>'required|max:10',
            'father_email'=>'required|email'
        ]);
        
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
        }

        $image=$request->file('image');
        $image_name=$request->student_id.'_'.time().'.'.$image->extension();
        $image->move(public_path('all_students_profile_images'),$image_name);


        $std_data = new StudentDetailsModel();
        $std_data->student_name=$request->name;
        $std_data->student_email=$data->email;
        $std_data->student_number=$request->number;
        $std_data->department=$request->department;
        $std_data->date_of_admission=$request->date_of_admission;
        $std_data->student_about=$request->student_about;
        $std_data->student_id=$request->student_id;
        $std_data->gender=$request->gender;
        $std_data->dob=$request->date_of_birth;
        $std_data->class=$request->class;
        $std_data->student_image=$image_name;
        $std_data->linkedin_link=$request->linkedin_link;
        $std_data->github_link=$request->github_link;
        $std_data->permanent_address=$request->permanent_address;
        $std_data->present_address=$request->present_address;
        $std_data->summary=$request->summary;
        $std_data->father_name=$request->father_name;
        $std_data->father_occupation=$request->father_occupation;
        $std_data->father_number=$request->father_number;
        $std_data->father_email=$request->father_email;
        $std_data->save();
        Session::pull('incomplete_student_profile');
        Session::put('complete',1);
        return redirect('dashboard');
    }


    public function edit_details_of_student_in_db(Request $request){
        $request->validate([
            'date_of_birth'=>'required',
            'class'=>'required',
            'gender'=>'required',
            'department'=>'required',
            'date_of_admission'=>'required',
            'number'=>'required|max:10',
            'linkedin_link'=>'required|url',
            'github_link'=>'required|url',
            'summary'=>'required',
            'present_address'=>'required',
            'permanent_address'=>'required',
            'father_name'=>'required',
            'father_occupation'=>'required',
            'father_number'=>'required|max:10',
            'father_email'=>'required|email'
        ]);

        if(!($request->has('image'))){
            $std_data = StudentDetailsModel::where('student_id',$request->student_id)->first();
            $std_data->student_number=$request->number;
            $std_data->department=$request->department;
            $std_data->date_of_admission=$request->date_of_admission;
            $std_data->student_about=$request->student_about;
            $std_data->gender=$request->gender;
            $std_data->dob=$request->date_of_birth;
            $std_data->class=$request->class;
            $std_data->linkedin_link=$request->linkedin_link;
            $std_data->github_link=$request->github_link;
            $std_data->permanent_address=$request->permanent_address;
            $std_data->present_address=$request->present_address;
            $std_data->summary=$request->summary;
            $std_data->father_name=$request->father_name;
            $std_data->father_occupation=$request->father_occupation;
            $std_data->father_number=$request->father_number;
            $std_data->father_email=$request->father_email;
            $std_data->save();
            
            return redirect('dashboard')->with('success_detials_edit','Student details updated successfully');

        }else{
            $image=$request->file('image');
            $image_name=$request->student_id.'_'.time().'.'.$image->extension();
            $image->move(public_path('all_students_profile_images'),$image_name);

            $std_data = StudentDetailsModel::where('student_id',$request->student_id)->first();
            $std_data->student_number=$request->number;
            $std_data->department=$request->department;
            $std_data->date_of_admission=$request->date_of_admission;
            $std_data->student_about=$request->student_about;
            $std_data->gender=$request->gender;
            $std_data->dob=$request->date_of_birth;
            $std_data->class=$request->class;
            $std_data->student_image=$image_name;
            $std_data->linkedin_link=$request->linkedin_link;
            $std_data->github_link=$request->github_link;    
            $std_data->permanent_address=$request->permanent_address;
            $std_data->present_address=$request->present_address;
            $std_data->summary=$request->summary;
            $std_data->father_name=$request->father_name;
            $std_data->father_occupation=$request->father_occupation;
            $std_data->father_number=$request->father_number;
            $std_data->father_email=$request->father_email;
            $std_data->save();
            
            return redirect('dashboard')->with('success_detials_edit','Student details updated successfully');
            
        }
    }


    public function add_skills_in_db(Request $request){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            if($request->proficiency=='Beginner'){
                $percent=25;
            }elseif($request->proficiency=='Intermediate'){
                $percent=50;
            }elseif($request->proficiency=='Advance'){
                $percent=75;
            }else{
                $percent=100;
            }
            $skill_data=new StudentSkillsModel();
            $skill_data->student_email=$data->email;
            $skill_data->skill=$request->skill;
            $skill_data->proficiency=$request->proficiency;
            $skill_data->percent=$percent;
            $skill_data->save();
        }
        return redirect('dashboard')->with('success_skill','Skill added successfully');
    }


    public function get_skill_data_from_db($id){
        $particular_skill_data = StudentSkillsModel::find($id);
        return response()->json([
            'skill'=>$particular_skill_data
        ]);
    }


    public function update_skill_in_db(Request $request){
        if($request->proficiency=='Beginner'){
            $percent=25;
        }elseif($request->proficiency=='Intermediate'){
            $percent=50;
        }elseif($request->proficiency=='Advance'){
            $percent=75;
        }else{
            $percent=100;
        }
        $skill_data = StudentSkillsModel::find($request->id);
        $skill_data->skill=$request->skill;
        $skill_data->proficiency=$request->proficiency;
        $skill_data->percent=$percent;
        $skill_data->save();

        return redirect('dashboard')->with('success_skill_update','Skill updated successfully');
    }


    public function add_certification_in_db(Request $request){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));

            $certificate_data = new StudentAchievementModel();
            $certificate_data->student_email=$data->email;
            $certificate_data->certificate_name=$request->certificate_name;
            $certificate_data->issued_by=$request->organization_name;
            $certificate_data->issued_date=$request->certificate_date;
            $certificate_data->certificate_link=$request->certificate_link;
            $certificate_data->save();
        }
        return redirect('dashboard')->with('success_certificate_add','Certification added successfully');
    }


    public function get_certificate_data_from_db($id){
        $particular_certificate_data = StudentAchievementModel::find($id);
        return response()->json([
            'certificate_data'=>$particular_certificate_data
        ]);
    }

    public function update_certificate_in_db(Request $request){
        $cert_data = StudentAchievementModel::find($request->id);
        $cert_data->certificate_name=$request->update_certificate_name;
        $cert_data->issued_by=$request->update_organization_name;
        $cert_data->issued_date=$request->update_certificate_date;
        $cert_data->certificate_link=$request->update_certificate_link;
        $cert_data->save();

        return redirect('dashboard')->with('success_certificate_update','Certification updated successfully');
    }

    public function delete_certificate_from_db($id){
        $cert_data = StudentAchievementModel::find($id);
        $cert_data->delete();

        return redirect('dashboard')->with('success_certificate_delete','Certification deleted successfully');
    }

    public function delete_skill_from_db($id){
        $skill_data = StudentSkillsModel::find($id);
        $skill_data->delete();

        return redirect('dashboard')->with('success_skill_delete','Skill deleted successfully');
    }

    public function open_suggestion_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $student_data=StudentDetailsModel::where('student_email','!=',$data->email)->get();

            $request_data=ConnectionRequestModel::where('sender_email',$data->email)->get();
            foreach ($request_data as $req_data) {
                if($req_data->progress=="sent"){
                    Session::put($req_data->receiver_email,'Pending');
                }else{
                    Session::put($req_data->receiver_email,'Accepted');
                }
            }

            return view('suggestion',compact(['user_data1','student_data']));
        }
    }

    public function send_student_skill_certificate_data_to_view($id){
        $student_id=$id;
        $stud_data = StudentDetailsModel::find($student_id);
        $skill_data = StudentSkillsModel::where('student_email',$stud_data->student_email)->get();
        $cert1_data = StudentAchievementModel::where('student_email',$stud_data->student_email)->get();
        return response()->json([
            'message'=>'link success',
            'skills'=>$skill_data,
            'certificates'=>$cert1_data,
            'student_data'=>$stud_data
        ]);
    }

    public function add_request_in_db_and_notify_receiver($id){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $sender_data=StudentDetailsModel::where('student_email',$data->email)->first();
            $receiver_data=StudentDetailsModel::find($id);
            
            $sender_name=$sender_data->student_name;
            $sender_email=$sender_data->student_email;
            $sender_image=$sender_data->student_image;
            $receiver_email=$receiver_data->student_email;

            $request_data = ConnectionRequestModel::where('receiver_email',$receiver_email)->where('sender_email',$sender_email)->first();
            if($request_data){
                return response()->json([
                    'message'=>'Request already sent',
                    'status'=>1
                ]);
            }else{
                $connect_data = new ConnectionRequestModel();
                $connect_data->sender_name=$sender_name;
                $connect_data->sender_email=$sender_email;
                $connect_data->sender_image=$sender_image;
                $connect_data->receiver_email=$receiver_email;
                $connect_data->save();
    
                return response()->json([
                    'message'=>'request sent successfully',
                    'status'=>0
                ]);
            }
        }
    }


    public function add_to_friend_list($id){
        $request_data = ConnectionRequestModel::find($id);
        
        $friend = new FriendsModel();
        $friend->user_email=$request_data->receiver_email;
        $friend->friend_name=$request_data->sender_name;
        $friend->friend_image=$request_data->sender_image;
        $friend->friend_email=$request_data->sender_email;
        $friend->save();

        $request_data->progress='accept';
        $request_data->save();
        
        return "friend add ho gaya bhai";  
    }


    public function decline_friend_request($id){
        $request_data=ConnectionRequestModel::find($id);
        $request_data->delete();
        return "bhai reject kar diya";
    }

    public function go_to_student_project_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $student_data=StudentDetailsModel::where('student_email','!=',$data->email)->get();
            $student_project=StudentProjectsModel::where('student_email',$data->email)->get();
            $student_work=StudentWorkModel::where('student_email',$data->email)->get();

            return view('student_projects',compact(['user_data1','student_data','student_project','student_work']));
        }
    }


    public function add_project_in_db(Request $request){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));

            $project_data = new StudentProjectsModel();
            $project_data->student_email=$data->email;
            $project_data->project_name=$request->project_name;
            $project_data->project_technology=$request->project_technology;
            $project_data->project_description=$request->project_description;
            $project_data->project_link=$request->project_link;
            $project_data->save();

            return redirect('student_work')->with('success_add',"Project added successfully");
        }
    }

    public function send_project_details_to_view($id){
        $project_id = $id;
        $project_data = StudentProjectsModel::find($project_id);
        return $project_data;
    }

    public function update_project_data_in_db(Request $request){
        $project_data=StudentProjectsModel::find($request->project_id);
        $project_data->project_name=$request->project_name;
        $project_data->project_technology=$request->project_technology;
        $project_data->project_description=$request->project_description;
        $project_data->project_link=$request->project_link;
        $project_data->save();

        return redirect('student_work')->with('success_edit',"Project updated successfully");

    }


    public function delete_project_from_db($id){
        $project_data=StudentProjectsModel::find($id);
        $project_data->delete();
        return redirect('student_work')->with('success_delete',"Project deleted successfully");
    }


    public function add_experience_in_db(Request $request){
        if(Session::has('loginid')){
            $data = RegisterUserModel::find(Session::get('loginid'));
            $work_data = new StudentWorkModel();
            $work_data->student_email=$data->email;
            $work_data->company_name=$request->company_name;
            $work_data->job_role=$request->job_role;
            $work_data->job_description=$request->job_description;
            $work_data->save();
            return redirect('student_work')->with('success_add_work',"Experience added successfully");
        }
    }


    public function send_work_details_to_view($id){
        $work_data = StudentWorkModel::find($id);
        return $work_data;
    }

    public function update_work_details_in_db(Request $request){
        $work_id = $request->id;
        $work_data = StudentWorkModel::find($work_id);
        $work_data->company_name=$request->company_name;
        $work_data->job_role=$request->job_role;
        $work_data->job_description=$request->job_description;
        $work_data->save();

        return redirect('student_work')->with('success_edit_work',"Experience updated successfully");
    }


    public function delete_work_from_in_db($id){
        $work_data = StudentWorkModel::find($id);
        $work_data->delete();

        return redirect('student_work')->with('success_delete_work',"Experience deleted successfully");
    }


    public function display_data_in_resume_format(){
        if(Session::has('loginid')){
            $user_data=RegisterUserModel::find(Session::get('loginid'));
            $student_data=StudentDetailsModel::where("student_email",$user_data->email)->first();
            $skill_data=StudentSkillsModel::where("student_email",$user_data->email)->get();
            $certificate_data=StudentAchievementModel::where("student_email",$user_data->email)->get();
            $project_data=StudentProjectsModel::where("student_email",$user_data->email)->get();
            $work_data=StudentWorkModel::where("student_email",$user_data->email)->get();

            $data = [
                'student_data'=>$student_data,
                'skill_data'=>$skill_data,
                'certificate_data'=>$certificate_data,
                'project_data'=>$project_data,
                'work_data'=>$work_data
            ];
            $pdf = PDF::loadView('pdfdemo',$data);
            // return $pdf->download($student_data->student_name.'_resume.pdf');
            return $pdf->stream($student_data->student_name.'_resume.pdf');

        }
    }


    public function go_to_skill_test_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $student_data=StudentDetailsModel::where('student_email',$data->email)->first();
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $skill_badge_data=SkillBadgeModel::where('student_email',$data->email)->get();

            $my_score = 0;
            foreach ($skill_badge_data as $skill_data) {
                $my_score = $my_score + $skill_data->score;
            }

            $badge_data=SkillBadgeModel::where('student_email',$data->email)->get();
            $total_badges=$badge_data->count();


            $rank_data=StudentSkillRankingModel::where('student_id',$student_data->student_id)->first();
            if(!($rank_data) && $my_score>0){
                if($student_data->department=="Electronics and Telecommunications"){
                    $branch="E&TC";
                }elseif($student_data->department=="Information Technology"){
                    $branch="IT";
                }elseif($student_data->department=="Computer"){
                    $branch="Computer";
                }elseif($student_data->department=="Artificial Intelligence and Data Science"){
                    $branch="AI&DS";
                }else{
                    $branch="Mechanical";
                }
                $std_rank_data=new StudentSkillRankingModel();
                $std_rank_data->student_id=$student_data->student_id;
                $std_rank_data->student_name=$student_data->student_name;
                $std_rank_data->Branch=$branch;
                $std_rank_data->skill_score=$my_score;
                $std_rank_data->badges=$total_badges;
                $std_rank_data->student_image=$student_data->student_image;
                $std_rank_data->save();
            }
            
           

            return view('skill_test',compact(['user_data1','student_data','skill_badge_data','my_score']));
        }
    }


    public function take_a_skill_test(Request $request){
        $request->validate([
            'skill_test'=>'required'
        ]);
        if($request->skill_test == "Javascript"){
            $skill = "javascript";
            $current_skill = "Javascript";
        }elseif ($request->skill_test == "Python") {
            $skill = "python";
            $current_skill = "Python 3.0";
        }elseif ($request->skill_test == "Angular.Js"){
            $skill = "angularjs";
            $current_skill = "Angular.Js";
        }elseif ($request->skill_test == "C Language"){
            $skill = "c";
            $current_skill = "C Language";
        }elseif ($request->skill_test == "C++"){
            $skill = "cpp";
            $current_skill = "C++";
        }elseif ($request->skill_test == "CSS 3"){
            $skill = "css3";
            $current_skill = "CSS 3";
        }elseif ($request->skill_test == "Flutter"){
            $skill = "flutter";
            $current_skill = "Flutter";
        }elseif ($request->skill_test == "HTML 5"){
            $skill = "html5";
            $current_skill = "HTML 5";
        }elseif ($request->skill_test == "Core Java"){
            $skill = "java";
            $current_skill = "Core Java";
        }elseif ($request->skill_test == "MongoDB"){
            $skill = "mongodb";
            $current_skill = "MongoDB";
        }elseif ($request->skill_test == "Node.js"){
            $skill = "nodejs";
            $current_skill = "Node.Js";
        }elseif ($request->skill_test == "PHP"){
            $skill = "php";
            $current_skill = "PHP";
        }elseif ($request->skill_test == "React.Js"){
            $skill = "reactjs";
            $current_skill = "React.Js";
        }elseif ($request->skill_test == "SQL"){
            $skill = "sql";
            $current_skill = "SQL";
        }


        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $skill_badge_data=SkillBadgeModel::where('student_email',$data->email)->where('skill_name',$skill)->first();
            if($skill_badge_data){
                return redirect('student_skill_badge_page')->with('warning','You have already completed '.$request->skill_test.' test');
            }else{
                return view('test_of_skill',compact(['skill','current_skill']));

            }
        }
    }

    public function add_score_skill_in_db($score, $skill){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $student_data=StudentDetailsModel::where('student_email',$data->email)->first();
            if($score >= 7){
                $date = Carbon::now()->format('d.m.Y');
                $skill_badge_data = new SkillBadgeModel();
                $skill_badge_data->student_email=$data->email;
                $skill_badge_data->skill_name=$skill;
                $skill_badge_data->score=$score;
                $skill_badge_data->skill_date=$date;
                $skill_badge_data->save();
                
                $my_badge_data= StudentSkillRankingModel::where('student_id',$student_data->student_id)->first();
                $new_skill_score=$my_badge_data->skill_score + $score;
                $no_of_badges=$my_badge_data->badges + 1;
                
                $my_badge_data->skill_score=$new_skill_score;
                $my_badge_data->badges=$no_of_badges;
                $my_badge_data->save();

                return "data mil gaya bhai score ke sath || ".$skill." || ".$score." || Data DB me add ho gaya || Ranking data bhi update ho gaya";
            }
        }
    }

    public function new_go_to_skill_test_page($score){
        if($score>=7){
            return redirect('student_skill_badge_page')->with('success','You have earned a new Badge');
        }else{
            return redirect('student_skill_badge_page')->with('info','Perform well next time');

        }
    }


    public function go_to_student_rank_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $rank_data=StudentSkillRankingModel::orderBy('skill_score','DESC')->get();

            return view('student_rank',compact(['user_data1','rank_data']));
        }
    }


    public function go_to_student_connections_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $followers_data=FriendsModel::where('user_email',$data->email)->get();
            

            return view('connect_list',compact(['user_data1','followers_data']));
        }
    }


    public function go_to_add_staff_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            
            return view('staff.add_staff_details',compact(['user_data1']));
        }
    }


    public function add_staff_details_in_db(Request $request){
        $request->validate([
            'gender'=>'required',
            'date_of_birth'=>'required',
            'class_incharge'=>'required',
            'department'=>'required',
            'qualification'=>'required',
            'number'=>'required|max:10',
            'image'=>'required',
            'linkedin_link'=>'required|url'
        ]);
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $image=$request->file('image');
            $image_name=$request->staff_id.'_'.time().'.'.$image->extension();
            $image->move(public_path('all_staff_profile_images'),$image_name);
            
            $staff_data = new StaffDetailsModel();
            $staff_data->staff_name=$request->name;
            $staff_data->staff_email=$data->email;
            $staff_data->staff_id=$request->staff_id;
            $staff_data->gender=$request->gender;
            $staff_data->dob=$request->date_of_birth;
            $staff_data->qualification=$request->qualification;
            $staff_data->department=$request->department;
            $staff_data->class_incharge=$request->class_incharge;
            $staff_data->mobile=$request->number;
            $staff_data->linkedin_link=$request->linkedin_link;
            $staff_data->image=$image_name;
            $staff_data->save();

            Session::pull('staff_incomplete');
            Session::put('staff_complete',1);
            return redirect('dashboard');
        }
    }


    public function go_to_edit_staff_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $staff_data=StaffDetailsModel::where('staff_email',$data->email)->first();
            
            return view('staff.edit_staff_details',compact(['user_data1','staff_data']));
        }
    }


    public function edit_details_of_staff_in_db(Request $request){
        $request->validate([
            'gender'=>'required',
            'date_of_birth'=>'required',
            'class_incharge'=>'required',
            'department'=>'required',
            'qualification'=>'required',
            'number'=>'required|max:10',
            'linkedin_link'=>'required|url'
        ]);
        if(!($request->has('image'))){
            $staff_data=StaffDetailsModel::where('staff_id',$request->staff_id)->first();
            $staff_data->gender=$request->gender;
            $staff_data->dob=$request->date_of_birth;
            $staff_data->qualification=$request->qualification;
            $staff_data->department=$request->department;
            $staff_data->class_incharge=$request->class_incharge;
            $staff_data->mobile=$request->number;
            $staff_data->linkedin_link=$request->linkedin_link;
            $staff_data->save();
            return redirect('dashboard')->with('edit_success','Profile updated successfully');
        }else{
            $image=$request->file('image');
            $image_name=$request->staff_id.'_'.time().'.'.$image->extension();
            $image->move(public_path('all_staff_profile_images'),$image_name);

            $staff_data=StaffDetailsModel::where('staff_id',$request->staff_id)->first();
            $staff_data->gender=$request->gender;
            $staff_data->dob=$request->date_of_birth;
            $staff_data->qualification=$request->qualification;
            $staff_data->department=$request->department;
            $staff_data->class_incharge=$request->class_incharge;
            $staff_data->mobile=$request->number;
            $staff_data->linkedin_link=$request->linkedin_link;
            $staff_data->image=$image_name;
            $staff_data->save();
            return redirect('dashboard')->with('edit_success','Profile updated successfully');

        }
    }


    public function go_to_student_list_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $staff_data=StaffDetailsModel::where('staff_email',$data->email)->first();
            $student_data=StudentDetailsModel::where('class',$staff_data->class_incharge)->where('department',$staff_data->department)->get();
            $branch=$staff_data->department;
            $class=$staff_data->class_incharge;
            

            return view('staff.student_list',compact(['user_data1','student_data','class','branch']));
        }
    }


    public function add_exam_coordinator_branch_in_db(Request $request){
        $request->validate([
            'department'=>'required'
        ]);
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data=UserDetailsModel::where('email',$data->email)->first();

            $ec_data=new EcBranchModel();
            $ec_data->ec_name=$data->name;
            $ec_data->ec_email=$data->email;
            $ec_data->ec_id=$user_data->user_id;
            $ec_data->ec_department=$request->department;
            $ec_data->save();
            
        }
        return redirect('exam_schedule_page');
    }

    public function go_to_exam_schedule_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $ec_data=EcBranchModel::where('ec_email',$data->email)->first();

            return view('staff.add_exam_schedule',compact(['user_data1','ec_data']));
        }
    }


    public function add_exam_schedule_in_db(Request $request){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $ec_data=EcBranchModel::where('ec_email',$data->email)->first();

            $es_data = new ExamScheduleModel();
            $es_data->test_name=$request->exam_name;
            $es_data->class=$request->class;
            $es_data->branch=$request->branch;
            $es_data->marks=$request->marks;
            $es_data->date=$request->date;
            $es_data->subject=$request->subject;
            $es_data->save();
            return "db me store ho gaya bhai";
        }
        
    }

    public function go_to_student_exam_schedule_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $student_details=StudentDetailsModel::where('student_email',$data->email)->first();
            $exam_tt=ExamScheduleModel::where('class',$student_details->class)->where('branch',$student_details->department)->get();
            $exam_details=ExamScheduleModel::where('class',$student_details->class)->where('branch',$student_details->department)->first();

            return view('student_exam_schedule',compact(['user_data1','exam_tt','exam_details']));
        }
    }


    public function go_to_staff_st_exam_schedule_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $staff_details=StaffDetailsModel::where('staff_email',$data->email)->first();
            $exam_tt=ExamScheduleModel::where('class',$staff_details->class_incharge)->where('branch',$staff_details->department)->get();
            $exam_details=ExamScheduleModel::where('class',$staff_details->class_incharge)->where('branch',$staff_details->department)->first();


            return view('staff.staff_st_exam_schedule',compact(['user_data1','exam_tt','exam_details']));
        }
    }


    public function go_to_student_result_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $staff_data=StaffDetailsModel::where('staff_email',$data->email)->first();
            $student_data=StudentDetailsModel::where('class',$staff_data->class_incharge)->where('department',$staff_data->department)->get();
            $branch=$staff_data->department;
            $class=$staff_data->class_incharge;
            

            return view('staff.add_result',compact(['user_data1','student_data','class','branch']));
        }
    }

    public function add_result_of_student_in_db(Request $request){
        // return $request->student_id;
        if(Session::has('loginid')){
            $std_res_data = new StudentResultModel();
            $std_res_data->student_id=$request->student_id;
            $std_res_data->exam_name=$request->exam_name;
            $std_res_data->max_marks=$request->max_marks;
            $std_res_data->subject=$request->subject;
            $std_res_data->marks=$request->marks;
            $std_res_data->save();
            return "db me store ho gaya bhai";


        }
    }

    public function go_to_user_student_result_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $student_details=StudentDetailsModel::where('student_email',$data->email)->first();
            $result_data=StudentResultModel::where('student_id',$student_details->student_id)->get();
            
            $result_particular_data=StudentResultModel::where('student_id',$student_details->student_id)->first();
            if($result_particular_data){
                $total_obtained_marks=0;
                $total_marks=0;
                foreach ($result_data as $res_data) {
                    $total_obtained_marks = $total_obtained_marks + $res_data->marks;
                    $total_marks = $total_marks + $res_data->max_marks;
    
                }
                $percent1=($total_obtained_marks/$total_marks)*100;
                $percent=(int)$percent1;

                if($percent>=40 && $percent<65){
                    $status="Pass";
                }elseif($percent>=65 && $percent<=75){
                    $status="First Class";
                }elseif($percent>=75){
                    $status="Distinction";
                }else{
                    $status="Fail";
                }
    
                return view('user_student_result',compact(['user_data1','student_details','result_data','total_obtained_marks','total_marks','percent','status','result_particular_data']));

            }else{
                return view('student_result_2',compact(['user_data1','student_details']));
            }

            
        }
    }


    public function download_student_result(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $student_details=StudentDetailsModel::where('student_email',$data->email)->first();
            $result_data=StudentResultModel::where('student_id',$student_details->student_id)->get();
            $result_particular_data=StudentResultModel::where('student_id',$student_details->student_id)->first();

            $total_obtained_marks=0;
            $total_marks=0;
            foreach ($result_data as $res_data) {
                $total_obtained_marks = $total_obtained_marks + $res_data->marks;
                $total_marks = $total_marks + $res_data->max_marks;

            }
            $percent1=($total_obtained_marks/$total_marks)*100;
            $percent=(int)$percent1;

            if($percent>=40 && $percent<65){
                $status="Pass";
            }elseif($percent>=65 && $percent<=75){
                $status="First Class";
            }elseif($percent>=75){
                $status="Distinction";
            }else{
                $status="Fail";
            }

            $new_data = [
                'student_details'=>$student_details,
                'result_data'=>$result_data,
                'result_particular_data'=>$result_particular_data,
                'total_marks'=>$total_marks,
                'total_obtained_marks'=>$total_obtained_marks,
                'percent'=>$percent,
                'status'=>$status
            ];

            $pdf = PDF::loadView('download_result',$new_data);
    //      return $pdf->download($student_data->student_name.'_resume.pdf');
            return $pdf->stream($student_details->student_id.'_'.$result_particular_data->exam_name.'_Result.pdf');

        }
    }


    public function add_total_result_of_student_in_db(Request $request){
        if(Session::has('loginid')){
            $student_data = StudentDetailsModel::where('student_id',$request->my_student_id)->first();
            
            $mks_obt=$request->marks_obtained;
            $tot_mks=$request->total_marks;
            $percent_ini = ($mks_obt/$tot_mks)*100;
            $percent=(int)$percent_ini;

            if($percent>=40 && $percent<65){
                $status="Pass";
            }elseif($percent>=65 && $percent<=75){
                $status="First Class";
            }elseif($percent>=75){
                $status="Distinction";
            }else{
                $status="Fail";
            }

            $total_result_data = new StudentTotalResultModel();
            $total_result_data->student_name=$student_data->student_name;
            $total_result_data->student_id=$request->my_student_id;
            $total_result_data->class=$student_data->class;
            $total_result_data->department=$student_data->department;
            $total_result_data->exam_name=$request->exam_name2;
            $total_result_data->marks_obtained=$request->marks_obtained;
            $total_result_data->total_marks=$request->total_marks;
            $total_result_data->percentage=$percent;
            $total_result_data->status=$status;
            $total_result_data->save();

            return redirect('exam_result')->with('success','Result added successfully');
        }
    }


    public function get_result_record_from_db(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $staff_data=StaffDetailsModel::where('staff_email',$data->email)->first();
            $student_result_data=StudentTotalResultModel::where('class',$staff_data->class_incharge)->where('department',$staff_data->department)->orderBy('percentage','DESC')->get();
            return view('staff.student_total_result',compact(['user_data1','student_result_data','staff_data']));
        }
    }


    public function add_placement_drive_details_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            return view('tpo.placement_drive_details',compact(['user_data1']));

        }
    }


    public function show_placement_drive_details(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $drive_data=PlacementDriveDetailsModel::all();
            return view('placement_drive_table',compact(['user_data1','drive_data']));

        }
    }


    public function add_drive_details_in_db(Request $request){
        $drive_data = new PlacementDriveDetailsModel();
        $drive_data->company_name=$request->company_name;
        $drive_data->job_role=$request->job_role;
        $drive_data->salary=$request->salary;
        $drive_data->batch=$request->batch;
        $drive_data->apply_link=$request->apply_link;
        $drive_data->last_date=$request->last_date;
        $drive_data->save();

        return redirect('placement_drive_details')->with('success','Placement drive details added successfully');

    }


    public function show_pvg_drive_details_table(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $drive_data=PlacementDriveDetailsModel::all();
            return view('tpo.placement_details_page',compact(['user_data1','drive_data']));

        }
    }


    public function send_drive_details_to_view($id){
        $drive_data=PlacementDriveDetailsModel::find($id);
        return response()->json([
            'p_drive'=>$drive_data
        ]);
    }


    public function update_drive_details_in_db(Request $request){
        $drive_data = PlacementDriveDetailsModel::find($request->id);
        $drive_data->company_name=$request->company_name;
        $drive_data->job_role=$request->job_role;
        $drive_data->salary=$request->salary;
        $drive_data->batch=$request->batch;
        $drive_data->apply_link=$request->apply_link;
        $drive_data->last_date=$request->last_date;
        $drive_data->save();

        return redirect('drive_details_table')->with('success','Drive details updated successfully');
    }


    public function delete_drive_details_from_db($id){
        $drive_data = PlacementDriveDetailsModel::find($id);
        $drive_data->delete();

        return redirect('drive_details_table')->with('success','Drive details deleted successfully');

    }


    public function show_rank_table_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $rank_data=StudentSkillRankingModel::orderBy('skill_score','DESC')->get();

            return view('tpo.rank_table_page',compact(['user_data1','rank_data']));

        }
    }


    public function show_placed_students_placement_details_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $student_data=StudentDetailsModel::where('student_email',$data->email)->first();
            $your_placement_data=PlacedStudentsDetailsModel::where('student_id',$student_data->student_id)->get();
            return view('add_student_placement_details',compact(['user_data1','your_placement_data']));

        }
    }


    public function store_placed_students_details_in_db(Request $request){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $student_data=StudentDetailsModel::where('student_email',$data->email)->first();

            $image=$request->file('student_image');
            $image_name=$student_data->student_id.'_placed_'.$request->batch.'_'.time().'.'.$image->extension();
            $image->move(public_path('placed_students_images'),$image_name);

            if($student_data->department=="Electronics and Telecommunications"){
                $branch="E&TC";
            }elseif($student_data->department=="Information Technology"){
                $branch="IT";
            }elseif($student_data->department=="Computer"){
                $branch="Computer";
            }elseif($student_data->department=="Artificial Intelligence and Data Science"){
                $branch="AI&DS";
            }else{
                $branch="Mechanical";
            }
            
            $placed_std_data = new PlacedStudentsDetailsModel();
            $placed_std_data->student_name=$student_data->student_name;
            $placed_std_data->student_id=$student_data->student_id;
            $placed_std_data->branch=$branch;
            $placed_std_data->company_name=$request->company_name;
            $placed_std_data->job_role=$request->job_role;
            $placed_std_data->salary=$request->salary;
            $placed_std_data->batch=$request->batch;
            $placed_std_data->date_of_selection=$request->date_of_selection;
            $placed_std_data->student_image=$image_name;
            $placed_std_data->proof=$request->proof;
            $placed_std_data->save();

            return redirect('placed_students_details')->with('success','Placement details uploaded successfully');


        }
    }


    public function show_placed_students_record_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $placed_data=PlacedStudentsDetailsModel::all();
            return view('tpo.placed_students_record',compact(['user_data1','placed_data']));

        }
    }


    public function go_to_fee_payment_page(){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $student_data=StudentDetailsModel::where('student_email',$data->email)->first();
            $student_fee_data=FeePaymentDetailsModel::where('student_email',$data->email)->first();
            if($student_fee_data){
                return view('already_fee_paid',compact(['user_data1','student_data']));
            }else{
                return view('fees_page',compact(['user_data1','student_data']));
            }

        }
    }


    public function send_payment_through_stripe(Request $request){
        if(Session::has('loginid')){
            $data=RegisterUserModel::find(Session::get('loginid'));
            $user_data1=UserDetailsModel::where('email',$data->email)->first();
            $student_data=StudentDetailsModel::where('student_email',$data->email)->first();
        }

        $invoice_number = random_int(100, 99999);
        
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create ([
            "amount" => ($request->total_amount) * 100,
            "currency" => "inr",
            "source" => $request->stripeToken,
            "description" => $student_data->student_id." : Academic fees for 2023-24 " 
        ]);

        

        $date_of_fee_payment = Carbon::today()->toDateString();
        $time_of_fee_payment = date('H:i:s', time());

        $fee_payment_data = new FeePaymentDetailsModel();
        $fee_payment_data->student_id=$student_data->student_id;
        $fee_payment_data->student_name=$student_data->student_name;
        $fee_payment_data->student_email=$student_data->student_email;
        $fee_payment_data->class=$student_data->class;
        $fee_payment_data->department=$student_data->department;
        $fee_payment_data->category=$request->category;
        $fee_payment_data->fee_amount=$request->total_amount;
        $fee_payment_data->academic_year=$request->academic_year1;
        $fee_payment_data->e_invoice_num="R".$invoice_number;
        $fee_payment_data->date=$date_of_fee_payment;
        $fee_payment_data->time=$time_of_fee_payment;
        $fee_payment_data->save();


        if($request->category == "OBC"){
            $tution_fee = "29,017";
            $development_fee = "6,966";
            $exam_fee = "2,000";
            $university_fee = "1,500";
            $extra_curricular = "3,000";
            $total_fee = "44,483";
        }elseif($request->category == "Open"){
            $tution_fee = "61,017";
            $development_fee = "6,966";
            $exam_fee = "2,000";
            $university_fee = "1,500";
            $extra_curricular = "3,000";
            $total_fee = "74,483";
        }elseif($request->category == "SC"){
            $tution_fee = "13,017";
            $development_fee = "6,966";
            $exam_fee = "2,000";
            $university_fee = "1,500";
            $extra_curricular = "2,000";
            $total_fee = "25,483";
        }else{
            $tution_fee = "7,017";
            $development_fee = "3,966";
            $exam_fee = "2,000";
            $university_fee = "1,500";
            $extra_curricular = "1,000";
            $total_fee = "15,483";
        }

        $new_data = [
                'student_details'=>$student_data,
                'category'=>$request->category,
                'tuition_fee'=>$tution_fee,
                'development_fee'=>$development_fee,
                'exam_fee'=>$exam_fee,
                'university_fee'=>$university_fee,
                'extra_curricular'=>$extra_curricular,
                'total_fee'=>$total_fee,
                'invoice_number'=>$invoice_number,
                'date_of_fee_payment'=>$date_of_fee_payment,
                'time_of_fee_payment'=>$time_of_fee_payment

            ];
        $pdf = PDF::loadView('fee_receipt_pdf',$new_data);

        $send_email_array=array(
            'name'=>$student_data->student_name,
            'email'=>$student_data->student_email,
            'amount'=>$request->total_amount
        );
        $student_email = $student_data->student_email;

        Mail::send('emails.fee_payment_receipt_mail',
                    $send_email_array, 
                    function($message) use ($student_email,$pdf){
                        $message->to($student_email)
                                ->subject("MyEdyPortal : Fee payment E-Receipt")
                                ->attachData($pdf->output(),"E-Receipt.pdf");
                    });


        
        
        Session::flash('success', 'Payment successfull!');
        
        
          
        return back();
    }



    public function logout(){
        if(Session::has('loginid')){
            if(Session::has('incomplete_student_profile')){
                Session::pull('incomplete_student_profile');
            }
            if(Session::has('complete')){
                Session::pull('complete');
            }
            $request_data = ConnectionRequestModel::all();
            foreach ($request_data as $req_data) {
                if(Session::has($req_data->receiver_email)){
                    Session::pull($req_data->receiver_email);
                }
            }
            if(Session::has('staff_complete')){
                Session::pull('staff_complete');
            }
            if(Session::has('staff_incomplete')){
                Session::pull('staff_incomplete');
            }
            Session::pull('loginid');
            return redirect('login')->with('success','You are Logged Out Successfully');
        }
    }

}
