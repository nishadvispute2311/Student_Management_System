<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>PVGCOE - Skill Test</title>
      <link rel="shortcut icon" href="assets/img/pvg_logo.jpg">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" rel="stylesheet">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/suggestion.css">
      <style>
         .error{
                color:red;
                width:100%;
               /* margin-top:10px; */
               /* padding-left:105px; */
               }
      </style>
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
                     {{-- <div class="noti-content">
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
                     </div> --}}
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
                        <h3 class="page-title">Student Projects</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="dashboard">Students</a></li>
                           <li class="breadcrumb-item active">Student Skill Badges</li>
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        <a href="javascript:void(0)" class="btn btn-primary mr-2" style="color:black">Skill Score : <b>{{$my_score}}</b></a>
                        {{-- <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a> --}}
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        {{-- <div class="card-header">
                            <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;margin-left: 45%;">Skill Test</span></p>
                        </div> --}}
                        <div class="card-body">
                            <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;margin-left: 45%;">Skill Test</span></p><br>
                           <form action="go_to_skill_test" method="post">
                            @csrf
                            <div class="form-group">
                                {{-- <label>Select Skill</label> --}}
                                <select class="form-control" name="skill_test" id="skill_test">
                                   <option value="">Select Skill</option>
                                   <option>Angular.Js</option>
                                   <option>C Language</option>
                                   <option>C++</option>
                                   <option>CSS 3</option>
                                   <option>Flutter</option>
                                   <option>HTML 5</option>
                                   <option>Core Java</option>
                                   <option>Javascript</option>
                                   <option>MongoDB</option>
                                   <option>Node.js</option>
                                   <option>PHP</option>
                                   <option>Python</option>
                                   <option>React.Js</option>
                                   <option>SQL</option>
                                </select>
                                <span class="text-danger">
                                 @error('skill_test')
                                     {{$message}}
                                 @enderror
                              </span>
                             </div>
                             <div class="col-12">
                                <center><button type="submit" class="btn btn-primary">Take Test</button></center>
                             </div>
                           </form>
                        </div>
                     </div>

                     <div class="card">
                        <div class="card-header">
                            <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;margin-left: 45%;">Skill Badge</span></p>
                        </div>
                        <div class="card-body">
                            <div class="row follow-sec">
                                @foreach ($skill_badge_data as $my_skill_data)
                                    <div class="col-md-4 mb-3">
                                        <center><img src="{{asset('skill_badges')}}/{{$my_skill_data->skill_name}}.jpg" alt="" width="200px" height="200px" style="border-radius:50%; margin-bottom:20px;"></center>
                                        <center><p>{{$my_skill_data->skill_date}}</p></center>
                                    </div>

                                    
                                    
                                @endforeach                                                           
                            </div>
                          
                        </div>
                     </div>

                  </div>
               </div>
            </div>
               

              

               
              
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

      {{-- @if (Session::has('warning'))
      <script>
          toastr.info(("{!! Session::get('warning') !!}"));
      </script>
      @endif --}}

      @if (Session::has("warning"))
      <script>
         swal("Sorry", "{!! Session::get("warning") !!}", "warning", {
            button: "OK"
         });
      </script>
      @endif

      @if (Session::has("success"))
      <script>
         swal("Congratulations", "{!! Session::get("success") !!}", "success", {
            button: "OK"
         });
      </script>
      @endif

      @if (Session::has("info"))
      <script>
         swal("Oops!", "{!! Session::get("info") !!}", "info", {
            button: "OK"
         });
      </script>
      @endif
      
      

      

   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>
{{-- 
   <div class="col-md-4 mb-3">
                                        <center><img src="{{asset('skill_badges')}}/angularjs.jpg" alt="" width="200px" height="200px" style="border-radius:50%"></center>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <center><img src="{{asset('skill_badges')}}/cpp.jpg" alt="" width="200px" height="200px" style="border-radius:50%"></center>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <center><img src="{{asset('skill_badges')}}/php.jpg" alt="" width="200px" height="200px" style="border-radius:50%"></center>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <center><img src="{{asset('skill_badges')}}/git&github.jpg" alt="" width="200px" height="200px" style="border-radius:50%"></center>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <center><img src="{{asset('skill_badges')}}/git&github.jpg" alt="" width="200px" height="200px" style="border-radius:50%"></center>
                                    </div>

                                    <div class="col-md-4 mb-3">
                                        <center><img src="{{asset('skill_badges')}}/git&github.jpg" alt="" width="200px" height="200px" style="border-radius:50%"></center>
                                    </div> --}}