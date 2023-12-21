<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>PVGCOE - Student Suggestions</title>
      <link rel="shortcut icon" href="assets/img/pvg_logo.jpg">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/suggestion.css">
   </head>
   <body>
      <div class="main-wrapper">
         <div class="header">
            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/pvg_logo.jpg" alt="Logo" style="border-radius: 100%"> <span>PVGCOE Nashik</span>
                </a>
                <a href="index.html" class="logo logo-small">
                    <img src="assets/img/pvg_logo.jpg" alt="Logo" width="30" height="30" style="border-radius: 100%">
                </a>
            </div>
            <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
            </a>
            <div class="top-nav-search">
               <form>
                  <input type="text" class="form-control" placeholder="Search here">
                  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
               </form>
            </div>
            <a class="mobile_btn" id="mobile_btn">
            <i class="fas fa-bars"></i>
            </a>
            <ul class="nav user-menu">
               <li class="nav-item dropdown noti-dropdown">
                  <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                  <i class="far fa-bell"></i> <span class="badge badge-pill">3</span>
                  </a>
                  <div class="dropdown-menu notifications">
                     <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                     </div>
                     <div class="noti-content">
                        <ul class="notification-list">
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-02.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">Nishad Vispute</span> has sent <span class="noti-title">connection request</span></p>
                                       <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-11.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">International Software Inc</span> has sent you a invoice in the amount of <span class="noti-title">$218</span></p>
                                       <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-17.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">John Hendry</span> sent a cancellation request <span class="noti-title">Apple iPhone XR</span></p>
                                       <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                           <li class="notification-message">
                              <a href="#">
                                 <div class="media">
                                    <span class="avatar avatar-sm">
                                    <img class="avatar-img rounded-circle" alt="User Image" src="assets/img/profiles/avatar-13.jpg">
                                    </span>
                                    <div class="media-body">
                                       <p class="noti-details"><span class="noti-title">Mercury Software Inc</span> added a new product <span class="noti-title">Apple MacBook Pro</span></p>
                                       <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                 </div>
                              </a>
                           </li>
                        </ul>
                     </div>
                     <div class="topnav-dropdown-footer">
                        <a href="#">View all Notifications</a>
                     </div>
                  </div>
               </li>
               <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><img class="rounded-circle" src="{{asset('all_users_profile_images')}}/{{$user_data1->image}}" style="height: 40px;
                        width: 40px;" alt="Ryan Taylor"></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <img src="{{asset('all_users_profile_images')}}/{{$user_data1->image}}" alt="User Image" class="avatar-img rounded-circle" style="height: 40px;
                       width: 40px;">
                        </div>
                        <div class="user-text">
                            <h6>{{$user_data1->fname}} {{$user_data1->lname}}</h6>
                            <p class="text-muted mb-0">{{$user_data1->designation}}</p>
                        </div>
                    </div>
                    <a class="dropdown-item" href="u_profile">My Profile</a>
                    <a class="dropdown-item" href="inbox.html">Inbox</a>
                    <a class="dropdown-item" href="dashboard">Dashboard</a>
                    <a class="dropdown-item" href="logout">Logout</a>
                </div>
            </li>
            </ul>
         </div>
         <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">
                        <span>Main Menu</span>
                     </li>
                     
                     <li class="submenu active">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                           {{-- <li><a href="students.html">Student List</a></li> --}}
                           <li><a href="dashboard">Student View</a></li>
                           <li><a href="edit_student">Student Edit</a></li>
                           <li><a href="suggestion">Student Connect</a></li>
                           <li><a href="connect_list">Student Connections</a></li>
                           <li><a href="student_work">Student Work</a></li>
                           <li><a href="student_skill_badge_page">Student Skill Badge</a></li>
                           <li><a href="student_rank_page">Student Rank</a></li>



                        </ul>
                     </li>
                     
                     <li class="menu-title">
                        <span>Management</span>
                     </li>
                     
                     <li>
                        <a href="fee_payment"><i class="fas fa-comment-dollar"></i> <span>Fees Payment</span></a>
                     </li>
                     
                     <li>
                        <a href="exam_schedule"><i class="fas fa-clipboard-list"></i> <span>Exam Time Table</span></a>
                     </li>
                     
                     <li>
                        <a href="student_result"><i class="fas fa-table"></i> <span>Results</span></a>
                     </li>

                     <li>
                        <a href="placement_drive"><i class="fas fa-calendar-day"></i> <span>Placement Drive</span></a>
                     </li>
                     <li>
                        <a href="placed_students_details"><i class="fas fa-calendar-day"></i> <span>Placement Details Upload</span></a>

                     </li>
                     
                  </ul>
               </div>
            </div>
         </div>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Student Connect</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="dashboard">Students</a></li>
                           <li class="breadcrumb-item active">Student Connect</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                            <div class="container">
                                <div class="row">

                                    @foreach ($student_data as $std_data)

                                       @if (!(Session::get($std_data->student_email)=="Accepted"))
                                           
                                          <div class="col-lg-3">
                                             <div class="card card-one">
                                                <div class="header">
                                                      <div class="avatar">
                                                         <img src="{{asset('all_students_profile_images')}}/{{$std_data->student_image}}" alt="">
                                                      </div>
                                                </div>
                                                <h3>{{$std_data->student_name}}</h3>
                                                <div style="max-height:200px ;overflow: auto;min-height: 150px;padding:10px">
                                                <center><p>{{$std_data->student_about}}</p></center>
                                                </div>
                                                <div>
                                                      <span style="float: left; margin-left: 5px;">
                                                      @if (Session::has($std_data->student_email))
                                                         <a href="javascript:void(0)" class="btn btn-primary">Pending</a>   
                                                      @else     
                                                         <a href="javascript:void(0)" id="send_connect_{{$std_data->id}}" onclick="connection_request({{$std_data->id}})" class="btn btn-primary">Connect</a>
                                                      @endif
                                                      </span>
                                                      <span style="float: right; margin-right: 5px;">
                                                         <a href="javascript:void(0)" onclick="view_profile({{$std_data->id}})" class="btn btn-primary">View Profile</a>
                                                      </span>
                                                </div>
                                             </div>
                                          </div>
                                       @endif


                                    @endforeach
                                    
                                </div>
                                
                                
                            </div>                                
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               {{-- Modal for Profile Starts--}}
                  <div class="modal fade" id="view_profile_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                     <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-body">
                        {{-- <div class="card"> --}}
                           <div class="card-body">
                                 <div class="row">
                                    <div class="col-md-12">
                                       <div class="media mt-3">
                                          <img id="std_image" src="" alt="" height="140px" width="140px" style="margin-right: 10px">
                                          <div class="media-body">
                                             <ul class="modal_li">
                                                <li>
                                                    <span class="title-span">Full Name : </span>
                                                    <span class="info-span" id="std_name">Nishad Vispute</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Class : </span>
                                                    <span class="info-span" id="std_class">BE</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Department : </span>
                                                    <span class="info-span" id="std_dept">Computer Science</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Mobile : </span>
                                                    <span class="info-span" id="std_number">9130048466</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">Email : </span>
                                                    <span class="info-span" id="std_email">abc@cc.com</span>
                                                </li>
                                                <li>
                                                    <span class="title-span">DOB : </span>
                                                    <span class="info-span" id="std_dob">23-11-2000</span>
                                                </li>
                                            </ul>
                                          </div>
                                       </div>
                                       <div class="row mt-3">
                                          <div class="col-md-12">
                                              <h5><i><b id="std_bio"></b></i></h5>
                                          </div>
                                      </div>
                                    </div>
                                 </div>
                                 <div class="row mt-2">
                                    <div class="col-md-12">
                                       <div class="skill-info">

                                          {{-- SKILL CARD STARTS --}}
                                             <div class="card" style="padding: 10px">
                                                <div class="card-header">
                                                   <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;margin-left: 40%;">Skills</span></p>
                                                </div>
                                                <div class="card-body">
                                                   <div class="row follow-sec" id="skill_div">                  
                                                   </div>
                                                </div>
                                             </div>
                                          {{-- SKILL CARD ENDS --}}


                                          {{-- CERTIFICATE CARD STARTS --}}
                                             <div class="card">
                                                <div class="card-header">
                                                   <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;margin-left: 35%;"><center>Achievements or Certifications</center></span></p>
                                                </div>
                                                <div class="card-body" id="certificate_main_div">                                               
                                                   {{-- <p class="text-dark" style="margin-bottom:5px">
                                                            <span style="font-size: 1.25rem;">Core Python Course</span>
                                                            <span><a href="" target="_blank" style="float: right"><i class="fas fa-external-link-alt"></i> View</a></span>
                                                         </p>
                                                         <p class="text-muted" style="margin-bottom:0px">Forsk Technologies</p>
                                                         <p class="text-muted">Issued on 27-11-2020</p>
                                                         <hr> --}}
                                                </div>
                                             </div>
                                          {{-- CERTIFICATE CARD ENDS --}}
                                          
                                       </div>
                                    </div>
                                 </div>           
                           </div>
                        {{-- </div> --}}
                        </div>
                     </div>
                     </div>
                  </div>
               {{-- Modal for Profile Ends--}}
         </div>
      </div>

      <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
      <script src="assets/js/jquery-3.6.0.min.js"></script>

      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

      <script src="assets/js/script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      <script>
         function connection_request(id,receiver_email){
            console.log(id);
            $.get('send_request/'+id, function(response){
               console.log(response);
               if(response.status==1){
                  $("#send_connect_"+id).text("Pending");
               }else{
                  $("#send_connect_"+id).text("Pending");
               }
            });
         }
      </script>

      <script>
         function view_profile(id){
            $.get('getstudentdata/'+id , function(response){
               console.log(response);
               var main_skill_div = $("#skill_div");
               var base_url = {!! json_encode(url('/')) !!};
               console.log(base_url);
               $.each(response.skills, function(key_of_skills, value_of_skills){
                     let s_class = document.createElement('div');
                     s_class.className="col-md-4 mb-3";
                     main_skill_div.append(s_class);
                     console.log("pahila div banla");

                     let skill_p_tag=document.createElement('p');
                     skill_p_tag.className="text-dark";
                     skill_p_tag.textContent=value_of_skills.skill;
                     skill_p_tag.style.fontSize="15px";
                     s_class.append(skill_p_tag);
               });

               var main_certificate_div = $("#certificate_main_div");
               $.each(response.certificates, function(key_of_certificates, value_of_certificates){
                     let first_p_tag = document.createElement('p');
                     first_p_tag.className="text-dark";
                     first_p_tag.style.marginBottom="0px";
                     main_certificate_div.append(first_p_tag);

                     let f_span_tag=document.createElement('span');
                     f_span_tag.style.fontSize="18px";
                     f_span_tag.textContent=value_of_certificates.certificate_name;
                     first_p_tag.append(f_span_tag);

                     let s_span_tag=document.createElement('span');
                     first_p_tag.append(s_span_tag);

                     let view_cert_tag=document.createElement('a');
                     view_cert_tag.style.cssFloat="right";
                     view_cert_tag.href=value_of_certificates.certificate_link;
                     view_cert_tag.target="_blank";
                     s_span_tag.append(view_cert_tag);

                     let view_icon_tag=document.createElement('i');
                     view_icon_tag.className="fas fa-external-link-alt";
                     view_cert_tag.append(view_icon_tag);

                     let second_p_tag=document.createElement('p');
                     second_p_tag.className="text-muted";
                     second_p_tag.style.marginBottom="0px";
                     second_p_tag.textContent=value_of_certificates.issued_by;
                     main_certificate_div.append(second_p_tag);

                     let third_p_tag=document.createElement('p');
                     third_p_tag.className="text-muted";
                     third_p_tag.textContent=value_of_certificates.issued_date;
                     main_certificate_div.append(third_p_tag);

                     let hr_tag=document.createElement('hr');
                     main_certificate_div.append(hr_tag);
               });
               $("#std_bio").text(response.student_data.student_about);
               $("#std_name").text(response.student_data.student_name);
               $("#std_class").text(response.student_data.class);
               $("#std_dept").text(response.student_data.department);
               $("#std_number").text(response.student_data.student_number);
               $("#std_email").text(response.student_data.student_email);
               $("#std_dob").text(response.student_data.dob);
               $("#std_image").attr('src',base_url+"/all_students_profile_images/"+response.student_data.student_image);
            });
            console.log(id);
            $("#view_profile_modal").modal('toggle');
            $("#skill_div").empty();
            $("#certificate_main_div").empty();
         }
      </script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>