<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:38 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>PVGCOE - User Profile</title>
      <link rel="shortcut icon" href="assets/img/pvg_logo.jpg">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      {{-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> --}}
      {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> --}}
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script> --}}
      
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">

      <style>
         .error{
	            color:red;
               width:100%;
               margin-top:10px;
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
               <img src="assets/img/logo-small.png" alt="Logo" width="30" height="30">
               </a>
            </div>
            {{-- <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
            </a> --}}
            {{-- <div class="top-nav-search">
               <form>
                  <input type="text" class="form-control" placeholder="Search here">
                  <button class="btn" type="submit"><i class="fas fa-search"></i></button>
               </form>
            </div> --}}
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
                                       <p class="noti-details"><span class="noti-title">Carlson Tech</span> has approved <span class="noti-title">your estimate</span></p>
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
                  <span class="user-img"><img class="rounded-circle" src="{{asset('all_users_profile_images')}}/{{$user_data->image}}" style="height: 40px;
                     width: 40px;" alt="Ryan Taylor"></span>
                  </a>
                  <div class="dropdown-menu">
                     <div class="user-header">
                        <div class="avatar avatar-sm">
                           <img src="{{asset('all_users_profile_images')}}/{{$user_data->image}}" alt="User Image" class="avatar-img rounded-circle" style="height: 40px;
                           width: 40px;">
                        </div>
                        <div class="user-text">
                           <h6>{{$user_data->fname}} {{$user_data->lname}}</h6>
                           <p class="text-muted mb-0" style="font-size: 12px;">{{$user_data->designation}}</p>
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
         {{-- <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
               <div id="sidebar-menu" class="sidebar-menu">
                  <ul>
                     <li class="menu-title">
                        <span>Main Menu</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="index.html">Admin Dashboard</a></li>
                           <li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
                           <li><a href="student-dashboard.html">Student Dashboard</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="students.html">Student List</a></li>
                           <li><a href="student-details.html">Student View</a></li>
                           <li><a href="add-student.html">Student Add</a></li>
                           <li><a href="edit-student.html">Student Edit</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="teachers.html">Teacher List</a></li>
                           <li><a href="teacher-details.html">Teacher View</a></li>
                           <li><a href="add-teacher.html">Teacher Add</a></li>
                           <li><a href="edit-teacher.html">Teacher Edit</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="departments.html">Department List</a></li>
                           <li><a href="add-department.html">Department Add</a></li>
                           <li><a href="edit-department.html">Department Edit</a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="subjects.html">Subject List</a></li>
                           <li><a href="add-subject.html">Subject Add</a></li>
                           <li><a href="edit-subject.html">Subject Edit</a></li>
                        </ul>
                     </li>
                     <li class="menu-title">
                        <span>Management</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="fees-collections.html">Fees Collection</a></li>
                           <li><a href="expenses.html">Expenses</a></li>
                           <li><a href="salary.html">Salary</a></li>
                           <li><a href="add-fees-collection.html">Add Fees</a></li>
                           <li><a href="add-expenses.html">Add Expenses</a></li>
                           <li><a href="add-salary.html">Add Salary</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                     </li>
                     <li>
                        <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                     </li>
                     <li>
                        <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                     </li>
                     <li>
                        <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                     </li>
                     <li>
                        <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                     </li>
                     <li>
                        <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                     </li>
                     <li class="menu-title">
                        <span>Pages</span>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="login.html">Login</a></li>
                           <li><a href="register.html">Register</a></li>
                           <li><a href="forgot-password.html">Forgot Password</a></li>
                           <li><a href="error-404.html">Error Page</a></li>
                        </ul>
                     </li>
                     <li>
                        <a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                     </li>
                     <li class="menu-title">
                        <span>Others</span>
                     </li>
                     <li>
                        <a href="sports.html"><i class="fas fa-baseball-ball"></i> <span>Sports</span></a>
                     </li>
                     <li>
                        <a href="hostel.html"><i class="fas fa-hotel"></i> <span>Hostel</span></a>
                     </li>
                     <li>
                        <a href="transport.html"><i class="fas fa-bus"></i> <span>Transport</span></a>
                     </li>
                     <li class="menu-title">
                        <span>UI Interface</span>
                     </li>
                     <li>
                        <a href="components.html"><i class="fas fa-vector-square"></i> <span>Components</span></a>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                           <li><a href="form-input-groups.html">Input Groups </a></li>
                           <li><a href="form-horizontal.html">Horizontal Form </a></li>
                           <li><a href="form-vertical.html"> Vertical Form </a></li>
                           <li><a href="form-mask.html"> Form Mask </a></li>
                           <li><a href="form-validation.html"> Form Validation </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="tables-basic.html">Basic Tables </a></li>
                           <li><a href="data-tables.html">Data Table </a></li>
                        </ul>
                     </li>
                     <li class="submenu">
                        <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li class="submenu">
                              <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                              <ul>
                                 <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                 <li class="submenu">
                                    <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                    <ul>
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                       <li><a href="javascript:void(0);">Level 3</a></li>
                                    </ul>
                                 </li>
                                 <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                              </ul>
                           </li>
                           <li>
                              <a href="javascript:void(0);"> <span>Level 1</span></a>
                           </li>
                        </ul>
                     </li>
                  </ul>
               </div>
            </div>
         </div> --}}
         <div class="page-wrapper" style="margin-left: 100px">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row">
                     <div class="col">
                        <h3 class="page-title">Profile</h3>
                        {{-- <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
                           <li class="breadcrumb-item active">Profile</li>
                        </ul> --}}
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-12">
                     <div class="profile-header">
                        <div class="row align-items-center">
                           <div class="col-auto profile-image">
                              <a href="#">
                              <img class="rounded-circle" alt="User Image" src="{{asset('all_users_profile_images')}}/{{$user_data->image}}" style="height: 120px; width: 120px;">
                              </a>
                           </div>
                           <div class="col ml-md-n2 profile-user-info">
                              <h4 class="user-name mb-0">{{$user_data->fname}} {{$user_data->lname}}</h4>
                              <h6 class="text-muted">{{$user_data->designation}}</h6>
                              <div class="user-Location"><i class="fas fa-map-marker-alt"></i> {{$user_data->address}}</div>
                              <div class="about-text"><i class="fas fa-id-badge"></i> {{$user_data->about}}</div>
                              
                           </div>
                           {{-- <div class="col-auto profile-btn">
                              <a href="#" class="btn btn-primary">
                              Edit
                              </a>
                           </div> --}}
                        </div>
                     </div>
                     <div class="profile-menu">
                        <ul class="nav nav-tabs nav-tabs-solid">
                           <li class="nav-item">
                              <a class="nav-link active" data-toggle="tab" href="#per_details_tab">About</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#password_tab">Password</a>
                           </li>
                           <li class="nav-item">
                              <a class="nav-link" data-toggle="tab" href="#update_tab">Update</a>
                           </li>
                        </ul>
                     </div>
                     <div class="tab-content profile-tab-cont">
                        <div class="tab-pane fade show active" id="per_details_tab">
                           <div class="row">
                              <div class="col-lg-9">
                                 <div class="card" style="height: 295px;">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Personal Details</span>
                                          {{-- <a class="edit-link" data-toggle="modal" href="#edit_personal_details"><i class="far fa-edit mr-1"></i>Edit</a> --}}
                                       </h5>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Name</p>
                                          <p class="col-sm-9">{{$user_data->fname}} {{$user_data->lname}}</p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Date of Birth</p>
                                          <p class="col-sm-9">{{$user_data->dob}}</p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Email ID</p>
                                          <p class="col-sm-9">{{$user_data->email}}</p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0 mb-sm-3">Mobile</p>
                                          <p class="col-sm-9">{{$user_data->number}}</p>
                                       </div>
                                       <div class="row">
                                          <p class="col-sm-3 text-muted text-sm-right mb-0">Address</p>
                                          <p class="col-sm-9 mb-0">{{$user_data->address}}
                                          </p>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-lg-3">
                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Account ID</span>
                                          {{-- <a class="edit-link" href="#"><i class="far fa-edit mr-1"></i> Edit</a> --}}
                                       </h5>
                                       <p style="font-size: 25px;">{{$user_data->user_id}}</p>
                                       {{-- <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button> --}}
                                       
                                    </div>
                                 </div>

                                 <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Account Status</span>
                                          {{-- <a class="edit-link" href="#"><i class="far fa-edit mr-1"></i> Edit</a> --}}
                                       </h5>
                                       {{-- <p style="font-size: 25px;">Active</p> --}}
                                       <button class="btn btn-success">Active</button>
                                       {{-- <button class="btn btn-success" type="button"><i class="fe fe-check-verified"></i> Active</button> --}}
                                       
                                    </div>
                                 </div>
                                 {{-- <div class="card">
                                    <div class="card-body">
                                       <h5 class="card-title d-flex justify-content-between">
                                          <span>Skills </span>
                                          <a class="edit-link" href="#"><i class="far fa-edit mr-1"></i> Edit</a>
                                       </h5>
                                       <div class="skill-tags">
                                          <span>Html5</span>
                                          <span>CSS3</span>
                                          <span>WordPress</span>
                                          <span>Javascript</span>
                                          <span>Android</span>
                                          <span>iOS</span>
                                          <span>Angular</span>
                                          <span>PHP</span>
                                       </div>
                                    </div>
                                 </div> --}}
                              </div>
                           </div>
                        </div>
                        <div id="password_tab" class="tab-pane fade">
                           <div class="card">
                              <div class="card-body">
                                 <h5 class="card-title">Change Password</h5>
                                 <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                       <form action="" id="update_pd_form" method="post">
                                          @csrf
                                          <div class="form-group">
                                             <label>Old Password</label>
                                             <input type="password" class="form-control" name="old_password" id="old_password" value="">
                                          </div>
                                          <div class="form-group">
                                             <label>New Password</label>
                                             <input type="password" class="form-control" name="new_password" id="new_password">
                                          </div>
                                          <div class="form-group">
                                             <label>Confirm Password</label>
                                             <input type="password" class="form-control" name="confirmpd" id="confirmpd">
                                          </div>
                                          <button class="btn btn-primary" type="submit" id="pd_btn_submit">Save Changes</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div id="update_tab" class="tab-pane fade">
                           <div class="card">
                              <div class="card-body">
                                 <h5 class="card-title">Update Profile</h5>
                                 <div class="row">
                                    <div class="col-md-10 col-lg-6">
                                       <form action="update_user_info" id="update_user_info_form" method="post" enctype="multipart/form-data">
                                          @csrf
                                          <div class="row">
                                             <div class="col-md-6 mt-md-0 mt-3">
                                                 <label>First Name</label>
                                                 <input type="text" class="form-control" name="fname" id="fname" value="{{$user_data->fname}}">
                                             </div>
                                             <div class="col-md-6 mt-md-0 mt-3">
                                                 <label>Last Name</label>
                                                 <input type="text" class="form-control" name="lname" id="lname"  value="{{$user_data->lname}}">
                                             </div>
                                          </div><br>
                                          <div class="row">
                                             <div class="col-md-6 mt-md-0 mt-3">
                                                 <label>Date of Birth</label>
                                                 <input type="date" class="form-control" name="date_of_birth" id="dob"  value="{{$user_data->dob}}">
                                             </div>
                                             <div class="col-md-6 mt-md-0 mt-3">
                                                 <label>Mobile Number</label>
                                                 <input type="text" class="form-control" name="number" id="number" value="{{$user_data->number}}">
                                             </div>
                                          </div><br>
                                          <div class="row">
                                             <div class="col-md-6 mt-md-0 mt-3">
                                                 <label>Address</label>
                                                 <input type="text" class="form-control" name="address" id="address"  value="{{$user_data->address}}">
                                             </div>
                                             <div class="col-md-6 mt-md-0 mt-3">
                                                 <label>About</label>
                                                 <input type="text" class="form-control" name="about" id="about" value="{{$user_data->about}}">
                                             </div>
                                          </div><br>
                                          <div class="form-group">
                                             <label>User Image</label>
                                             <input type="file" class="form-control" name="user_image" id="user_image">
                                          </div>
                                          <img id="preview" style="width:15%; margin-bottom: 20px;"><br>
                                          <button class="btn btn-primary" type="submit" id="update_btn_submit">Save Changes</button>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/js/script.js"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
      {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      
      

      {{-- Script for password update --}}
      <script>
               $("#update_pd_form").validate({
                  rules: {
                     old_password:{
                        required: true,
                        minlength: 5,
                        maxlength: 12
                     },
                     new_password:{
                        required: true,
                        minlength:5,
                        maxlength:12
                     },
                     confirmpd:{
                        required: true,
                        equalTo: '[name="new_password"]'
                     }
                  },
                  messages: {
                     old_password:{
                        required:"Please enter your old password",
                        minlength:"Password must contain atleast 5 characters",
                        maxlength:"Password must not exceed 12 characters"
                     },
                     new_password:{
                        required:"Please enter new password",
                        minlength:"Password must contain atleast 5 characters",
                        maxlength:"Password must not exceed 12 characters"
                     },
                     confirmpd:{
                        required:"Please re-enter your new password",
                        equalTo:"Password does not match"
                     }
                  },
                  submitHandler:function(form){
		                  $.ajax({
                           type:"POST",
                           url:"profile_update_password",
                           data:$("#update_pd_form").serialize(),
                           success: function(response){
                              console.log(response);
                              console.log(response.status);
                              if(!(response.status==1)){
                                 toastr.error("The old password does not match");
                                 $("#update_pd_form").trigger("reset");
                              }else{
                                 toastr.success("Password updated successfully");
                                 $("#update_pd_form").trigger("reset");
                              }
                           }
                        });
	               }
               });
      </script>
      {{-- Script for password update end--}}

      {{-- Script for user information update --}}
      <script>
         $("#update_user_info_form").validate({
            rules:{
               fname:"required",
               lname:"required",
               date_of_birth:"required",
               number:"required",
               address:"required",
               about:"required"
            },
            messages:{
               fname:"First name field cannot be empty",
               lname:"Last name field cannot be empty",
               date_of_birth:"Date of birth field cannot be empty",
               number:"Mobile number field cannot be empty",
               address:"Address field cannot be empty",
               about:"About field cannot be empty"

            },
            submitHandler:function(form){
               form.submit();
            }
         });
      </script>
      {{-- Script for user information update end--}}

      {{-- Script for image preview --}}
      <script>
         $(document).ready(() => {
                $("#user_image").change(function () {
                    const file = this.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function (event) {
                            $("#preview")
                              .attr("src", event.target.result);
                        };
                        reader.readAsDataURL(file);
                    }
                });
            });
      </script>
      {{-- Script for image preview end --}}

   @if (Session::has('success'))
   <script>
       toastr.success(("{!! Session::get('success') !!}"));
   </script>
   @endif


   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:39 GMT -->
</html>