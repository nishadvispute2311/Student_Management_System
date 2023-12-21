<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SmsController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});
Route::view('fee_receipt','fee_receipt_pdf');



// USER AUTHENTICATION ROUTES
Route::view('login','auth.login');
Route::view('register','auth.register');
Route::view('forgot-password','auth.forget_password');
Route::post('user_register',[SmsController::class,'user_registration'])->name('user_registration');
Route::post('user_login',[SmsController::class,'login_user'])->name('user_login');
Route::get('user_details',[SmsController::class,'enter_user_details']);
Route::post('fp_getemail',[SmsController::class,'get_email_for_forget_password']);
Route::get('newpassword/{token}/{id}',[SmsController::class,'password_update_page']);
Route::post('updatepdindb',[SmsController::class,'update_password_in_db']);

// USER DETAILS ROUTES
Route::view('user_profile','user_profile_details');
Route::post('submit_details',[SmsController::class,'submit_user_details']);
Route::get('u_profile',[SmsController::class,'user_profile']);
Route::post('profile_update_password',[SmsController::class,'update_password_from_profile']);
Route::post('update_user_info',[SmsController::class,'update_user_profile_info_in_db']);

// STUDENT DETAILS ROUTES
Route::get('add_student',[SmsController::class,'student_fill_details_page']);
Route::post('add_details_of_student',[SmsController::class,'add_details_of_student_in_db']);
Route::get('edit_student',[SmsController::class,'student_edit_details_page']);
Route::post('edit_details_of_student',[SmsController::class,'edit_details_of_student_in_db']);
Route::get('dashboard',[SmsController::class,'show_my_dashboard']);
Route::get('connect_list',[SmsController::class,'go_to_student_connections_page']);
Route::get('exam_schedule',[SmsController::class,'go_to_student_exam_schedule_page']);
Route::get('student_result',[SmsController::class,'go_to_user_student_result_page']);
Route::get('download_result',[SmsController::class,'download_student_result']);
Route::get('placement_drive',[SmsController::class,'show_placement_drive_details']);
Route::get('placed_students_details',[SmsController::class,'show_placed_students_placement_details_page']);
Route::get('fee_payment',[SmsController::class,'go_to_fee_payment_page']);
Route::post('send_payment',[SmsController::class,'send_payment_through_stripe']);

// SKILL & CERTIFICATION ROUTES
Route::post('add_skill',[SmsController::class,'add_skills_in_db']);
Route::get('editskilldata/{id}',[SmsController::class,'get_skill_data_from_db']);
Route::post('update_skill',[SmsController::class,'update_skill_in_db']);
Route::post('add_certification',[SmsController::class,'add_certification_in_db']);
Route::get('getcertificatedata/{id}',[SmsController::class,'get_certificate_data_from_db']);
Route::post('update_certification',[SmsController::class,'update_certificate_in_db']);
Route::get('delete_certificate/{id}',[SmsController::class,'delete_certificate_from_db']);
Route::get('delete_skill/{id}',[SmsController::class,'delete_skill_from_db']);

// CONNECTION ROUTES 
Route::get('suggestion',[SmsController::class,'open_suggestion_page']);
Route::get('getstudentdata/{id}',[SmsController::class,'send_student_skill_certificate_data_to_view']);
Route::get('send_request/{id}',[SmsController::class,'add_request_in_db_and_notify_receiver']);
Route::get('accept_request/{id}',[SmsController::class,'add_to_friend_list']);
Route::get('decline_request/{id}',[SmsController::class,'decline_friend_request']);

// STUDENT WORK ROUTES
Route::view('student_projects','student_projects');
Route::get('student_work',[SmsController::class,'go_to_student_project_page']);
Route::post('add_project',[SmsController::class,'add_project_in_db']);
Route::get('get_project_data/{id}',[SmsController::class,'send_project_details_to_view']);
Route::post('update_project',[SmsController::class,'update_project_data_in_db']);
Route::get('delete_project/{id}',[SmsController::class,'delete_project_from_db']);
Route::post('add_work',[SmsController::class,'add_experience_in_db']);
Route::get('get_work_data/{id}',[SmsController::class,'send_work_details_to_view']);
Route::post('update_work',[SmsController::class,'update_work_details_in_db']);
Route::get('delete_work/{id}',[SmsController::class,'delete_work_from_in_db']);
Route::get('download_resume',[SmsController::class,'display_data_in_resume_format']);

// SKILL BADGE AND RANK ROUTES
Route::get('student_skill_badge_page',[SmsController::class,'go_to_skill_test_page']);
Route::post('go_to_skill_test',[SmsController::class,'take_a_skill_test']);
Route::get('send_result_data_to_controller/{skill}/{score}',[SmsController::class,'add_score_skill_in_db']);
Route::get('new_student_skill_badge_page/{score}',[SmsController::class,'new_go_to_skill_test_page']);
Route::get('student_rank_page',[SmsController::class,'go_to_student_rank_page']);

// STAFF DETAILS AND STUDENT RESULT ROUTES
Route::get('staff_dashboard',[SmsController::class,'go_to_staff_dashboard']);
Route::get('add_staff',[SmsController::class,'go_to_add_staff_page']);
Route::post('add_details_of_staff',[SmsController::class,'add_staff_details_in_db']);
Route::get('edit_staff',[SmsController::class,'go_to_edit_staff_page']);
Route::post('edit_details_of_staff',[SmsController::class,'edit_details_of_staff_in_db']);
Route::get('student_list',[SmsController::class,'go_to_student_list_page']);
Route::get('exam_result',[SmsController::class,'go_to_student_result_page']);
Route::post('add_result_data_of_student',[SmsController::class,'add_result_of_student_in_db']);
Route::post('add_total_result_of_student',[SmsController::class,'add_total_result_of_student_in_db']);
Route::get('result_record',[SmsController::class,'get_result_record_from_db']);


// EXAM CO-ORDINATOR & EXAM SCHEDULE ROUTES
Route::post('exam_coordinator_branch',[SmsController::class,'add_exam_coordinator_branch_in_db']);
Route::get('exam_schedule_page',[SmsController::class,'go_to_exam_schedule_page']);
Route::post('add_exam_schedule',[SmsController::class,'add_exam_schedule_in_db']);
Route::get('staff_st_exam_schedule',[SmsController::class,'go_to_staff_st_exam_schedule_page']);


// PLACEMENT DETAILS ROUTES
Route::get('placement_drive_details',[SmsController::class,'add_placement_drive_details_page']);
Route::post('add_drive_details',[SmsController::class,'add_drive_details_in_db']);
Route::get('drive_details_table',[SmsController::class,'show_pvg_drive_details_table']);
Route::get('get_drive_data/{id}',[SmsController::class,'send_drive_details_to_view']);
Route::post('update_drive_details',[SmsController::class,'update_drive_details_in_db']);
Route::get('delete_drive/{id}',[SmsController::class,'delete_drive_details_from_db']);
Route::get('rank_table',[SmsController::class,'show_rank_table_page']);
Route::post('students_placed_details',[SmsController::class,'store_placed_students_details_in_db']);
Route::get('placed_students_record',[SmsController::class,'show_placed_students_record_page']);

// LOGOUT ROUTES
Route::get('logout',[SmsController::class,'logout']);
