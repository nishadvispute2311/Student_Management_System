<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>MyEduPortal - Student Dashboard</title>

    <link rel="shortcut icon" href="assets/img/pvg_logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">

    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <style>
        .error{
               color:red;
               width:100%;
              }
     </style>
    
</head>

<body>

    <div class="main-wrapper">

        <div class="header">

            <div class="header-left">
                <a href="index.html" class="logo">
                    <img src="assets/img/pvg_logo.jpg" alt="Logo" style="border-radius: 100%"> <span>MyEduPortal</span>
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
                        <i class="far fa-bell"></i> <span id="noti_count_text" class="badge badge-pill">{{count($request_data)}}</span>
                    </a>
                    @if (count($request_data)>0)
                        
                        <div class="dropdown-menu notifications">
                            <div class="topnav-dropdown-header">
                                <span class="notification-title">Notifications</span>
                                <a href="javascript:void(0)" onclick="clear_notification()" class="clear-noti"> Clear All </a>
                            </div>
                            <div class="noti-content" id="notification_content">
                                <ul class="notification-list">

                                    @foreach ($request_data as $req_data)
                                        @if ($req_data->progress=='sent')
                                            
                                            <li class="notification-message" id="request_id_{{$req_data->id}}">
                                                <a href="#">
                                                    <div class="media">
                                                        <span class="avatar avatar-sm">
                                                            <img class="avatar-img rounded-circle" alt="User Image"
                                                                src="{{asset('all_students_profile_images')}}/{{$req_data->sender_image}}">
                                                        </span>
                                                        <div class="media-body">
                                                            <p class="noti-details"><span class="noti-title">{{$req_data->sender_name}}</span> has sent <span class="noti-title">connection request</span></p>
                                                            <p><span style="margin-right: 10px"><i onclick="accept_request({{$req_data->id}})" class="far fa-thumbs-up">Accept</i></span> <span><i class="far fa-thumbs-down" onclick="decline_request({{$req_data->id}})" > Decline</i></span></p>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endif
                                        

                                    @endforeach

                                    {{-- <li class="notification-message">
                                        <a href="#">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image"
                                                        src="assets/img/profiles/avatar-11.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">International Software
                                                            Inc</span> has sent you a invoice in the amount of <span
                                                            class="noti-title">$218</span></p>
                                                    <p class="noti-time"><span class="notification-time">6 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image"
                                                        src="assets/img/profiles/avatar-17.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">John Hendry</span> sent
                                                        a cancellation request <span class="noti-title">Apple iPhone
                                                            XR</span></p>
                                                    <p class="noti-time"><span class="notification-time">8 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li class="notification-message">
                                        <a href="#">
                                            <div class="media">
                                                <span class="avatar avatar-sm">
                                                    <img class="avatar-img rounded-circle" alt="User Image"
                                                        src="assets/img/profiles/avatar-13.jpg">
                                                </span>
                                                <div class="media-body">
                                                    <p class="noti-details"><span class="noti-title">Mercury Software
                                                            Inc</span> added a new product <span class="noti-title">Apple
                                                            MacBook Pro</span></p>
                                                    <p class="noti-time"><span class="notification-time">12 mins ago</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                            {{-- <div class="topnav-dropdown-footer">
                                <a href="#">View all Notifications</a>
                            </div> --}}
                        </div>
                    @endif
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
                        {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="index.html">Admin Dashboard</a></li>
                                <li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
                                <li><a href="student-dashboard.html">Student Dashboard</a></li>
                            </ul>
                        </li> --}}
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                {{-- <li><a href="students.html">Student List</a></li> --}}
                                <li><a href="dashboard">Student View</a></li>

                                @if (!Session::has('complete'))        
                                    <li><a href="add_student">Student Add</a></li>
                                @endif

                                @if (Session::has('complete'))      
                                    <li><a href="edit_student">Student Edit</a></li>
                                    <li><a href="suggestion">Student Connect</a></li>
                                    <li><a href="connect_list">Student Connections</a></li>
                                    <li><a href="student_work">Student Work</a></li>
                                    <li><a href="student_skill_badge_page">Student Skill Badge</a></li>
                                    <li><a href="student_rank_page">Student Rank</a></li>

                                @endif
                            </ul>
                        </li>
                        {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="teachers.html">Teacher List</a></li>
                                <li><a href="teacher-details.html">Teacher View</a></li>
                                <li><a href="add-teacher.html">Teacher Add</a></li>
                                <li><a href="edit-teacher.html">Teacher Edit</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="departments.html">Department List</a></li>
                                <li><a href="add-department.html">Department Add</a></li>
                                <li><a href="edit-department.html">Department Edit</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="subjects.html">Subject List</a></li>
                                <li><a href="add-subject.html">Subject Add</a></li>
                                <li><a href="edit-subject.html">Subject Edit</a></li>
                            </ul>
                        </li> --}}
                        <li class="menu-title">
                            <span>Management</span>
                        </li>
                        {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="fees-collections.html">Fees Collection</a></li>
                                <li><a href="expenses.html">Expenses</a></li>
                                <li><a href="salary.html">Salary</a></li>
                                <li><a href="add-fees-collection.html">Add Fees</a></li>
                                <li><a href="add-expenses.html">Add Expenses</a></li>
                                <li><a href="add-salary.html">Add Salary</a></li>
                            </ul>
                        </li> --}}
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
                        {{-- <li>
                            <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                        </li> --}}
                        {{-- <li class="menu-title">
                            <span>Pages</span>
                        </li> --}}
                        {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="login.html">Login</a></li>
                                <li><a href="register.html">Register</a></li>
                                <li><a href="forgot-password.html">Forgot Password</a></li>
                                <li><a href="error-404.html">Error Page</a></li>
                            </ul>
                        </li> --}}
                        {{-- <li>
                            <a href="blank-page.html"><i class="fas fa-file"></i> <span>Blank Page</span></a>
                        </li> --}}
                        {{-- <li class="menu-title">
                            <span>Others</span>
                        </li> --}}
                        {{-- <li>
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
                        </li> --}}
                        {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-columns"></i> <span> Forms </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="form-basic-inputs.html">Basic Inputs </a></li>
                                <li><a href="form-input-groups.html">Input Groups </a></li>
                                <li><a href="form-horizontal.html">Horizontal Form </a></li>
                                <li><a href="form-vertical.html"> Vertical Form </a></li>
                                <li><a href="form-mask.html"> Form Mask </a></li>
                                <li><a href="form-validation.html"> Form Validation </a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="submenu">
                            <a href="#"><i class="fas fa-table"></i> <span> Tables </span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li><a href="tables-basic.html">Basic Tables </a></li>
                                <li><a href="data-tables.html">Data Table </a></li>
                            </ul>
                        </li> --}}
                        {{-- <li class="submenu">
                            <a href="javascript:void(0);"><i class="fas fa-code"></i> <span>Multi Level</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                <li class="submenu">
                                    <a href="javascript:void(0);"> <span>Level 1</span> <span
                                            class="menu-arrow"></span></a>
                                    <ul>
                                        <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                        <li class="submenu">
                                            <a href="javascript:void(0);"> <span> Level 2</span> <span
                                                    class="menu-arrow"></span></a>
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
                        </li> --}}
                    </ul>
                </div>
            </div>
        </div>


        <div class="page-wrapper">
            <div class="content container-fluid">
                <div class="page-header">
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title">Student Details</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Student</a></li>
                                <li class="breadcrumb-item active">Student Details</li>
                            </ul>
                        </div>
                        @if (Session::has('complete'))      
                            <div class="col-auto text-right float-right ml-auto">
                                <a href="download_resume" target="_blank" class="btn btn-outline-primary mr-2"><i class="fas fa-download"></i> Download Resume</a>
                                {{-- <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a> --}}
                            </div>
                        @endif
                    </div>
                </div>

                @if (Session::has('incomplete_student_profile'))
                
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-info">
                                            <center><h4>It seems that your student profile is not yet completed.</h4>
                                                <h6>To complete your profle : <a href="add_student">Click Here</a></h6></center>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                @else
                        {{-- The Main Student View Card Start --}}
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-info">
                                            <h4>About Me</h4>
                                            {{-- <h5>Python Developer | Cloud Enthusiast | Computer Engineer'2022</h5> --}}
                                            <div class="media mt-3">
                                                <img src="{{asset('all_students_profile_images')}}/{{$student_data->student_image}}" class="mr-3" alt="..." height="250px">
                                                <div class="media-body">
                                                    <ul>
                                                        <li>
                                                            <span class="title-span">Full Name : </span>
                                                            <span class="info-span">{{$student_data->student_name}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Class : </span>
                                                            <span class="info-span">{{$student_data->class}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Department : </span>
                                                            <span class="info-span">{{$student_data->department}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Mobile : </span>
                                                            <span class="info-span">{{$student_data->student_number}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Email : </span>
                                                            <span class="info-span">{{$student_data->student_email}}</span>
                                                        </li>
                                                        {{-- <li>
                                                            <span class="title-span">Gender : </span>
                                                            <span class="info-span">{{$student_data->gender}}</span>
                                                        </li> --}}
                                                        <li>
                                                            <span class="title-span">DOB : </span>
                                                            <span class="info-span">{{$student_data->dob}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Social Links : </span>
                                                            <span class="info-span"><a href="{{$student_data->linkedin_link}}"  target="_blank" style="color: #5f550e"><i class="fab fa-linkedin" style="color:blue;"></i></a></span>
                                                            <span class="info-span" style="margin-left: 15px"><a href="{{$student_data->github_link}}"  target="_blank" style="color: #5f550e"><i class="fab fa-github" style="color:blue;"></i></a></span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <h5><i><b>{{$student_data->student_about}}</b></i></h5>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12">
                                                    <p>{{$student_data->summary}}</p>
                                                </div>
                                            </div>
                                            <div class="row follow-sec">
                                                <div class="col-md-4 mb-3">
                                                    <div class="blue-box">
                                                        <h3>{{count($followers_data)}}</h3>
                                                        <p>Followers</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="blue-box">
                                                        <h3>{{count($following_data)}}</h3>
                                                        <p>Following</p>
                                                    </div>
                                                </div>
                                                <div class="col-md-4 mb-3">
                                                    <div class="blue-box">
                                                        <h3>{{count($friends_data)}}</h3>
                                                        <p>Friends</p>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <h4>Permanent Address</h4>
                                                    <p>{{$student_data->permanent_address}}</p>
                                                </div>
                                            </div>
                                            <div class="row mt-2">
                                                <div class="col-md-12">
                                                    <h4>Present Address</h4>
                                                    <p>{{$student_data->present_address}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="skill-info">

                                            {{-- CARD FOR SKILLS STARTS --}}
                                                <div class="card" style="padding: 10px">
                                                    <div class="card-header">
                                                        <p class="text-dark" style="margin-bottom:5px">
                                                            <span style="font-size: 1.25rem;margin-left: 40%;">Skills</span>
                                                            <span style="float:right">
                                                                <a id="add_skill" href="javascript:void(0)" style="color: #5f550e;"><i class="fas fa-plus"></i> Add</a>
                                                            </span>
                                                        </p>  
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row follow-sec">
                                                            @foreach ($skill_data as $s_data)
                                                                <div class="col-md-4 mb-3">
                                                                    <p class="text-dark" style="margin-bottom:5px"><span>{{$s_data->skill}}</span><span style="float:right"><a id="edit_skill_{{$s_data->id}}" href="javascript:void(0)" style="color: #5f550e; font-size:16px;" onclick="editskill({{$s_data->id}})"><i class="far fa-edit mr-1" style="font-size: 15px;"></i></a></span></p>
                                                                    <div class="progress">
                                                                        <div class="progress-bar progress-bar-striped progress-bar-animated"
                                                                            role="progressbar" aria-valuenow="75" aria-valuemin="0"
                                                                            aria-valuemax="100" style="width: {{$s_data->percent}}%">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            @endforeach                                                           
                                                        </div>
                                                    </div>
                                                </div>
                                            {{-- CARD FOR SKILLS STARTS --}}

                                            {{-- CARD FOR CERTIFICATES STARTS --}}
                                            <div class="card">
                                                <div class="card-header">
                                                    <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;margin-left: 35%;">Achievements or Certifications</span><span style="float:right"><a id="add_certificate" href="javascript:void(0)" style="color: #5f550e;"><i class="fas fa-plus"></i> Add</a></span></p>
                                                </div>
                                                <div class="card-body">
                                                    @foreach ($certificate_data as $cert_data)
                                                        
                                                        <p class="text-dark" style="margin-bottom:5px">
                                                            <span style="font-size: 1.25rem;">{{$cert_data->certificate_name}}</span>
                                                            <span style="margin-left: 30px"><a href="javascript:void(0)" onclick="editcertificate({{$cert_data->id}})" style="color: #5f550e"><i class="far fa-edit mr-1"></i></a></span>
                                                            <span><a href="{{$cert_data->certificate_link}}" target="_blank" style="float: right"><i class="fas fa-external-link-alt"></i> View</a></span>
                                                        </p>
                                                        <p class="text-muted" style="margin-bottom:0px">{{$cert_data->issued_by}}</p>
                                                        <p class="text-muted">Issued on {{$cert_data->issued_date}}</p>
                                                        <hr>
                                                    @endforeach
                                                    {{-- <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;">1st Prise in Running Competition.</span><span><a href="#" style="float: right"><i class="fas fa-external-link-alt"></i> View</a></span></p>
                                                    <p class="text-muted" style="margin-bottom:0px">Microsoft</p>
                                                    <p class="text-muted">Issued Mar 2021</p> --}}
                                                </div>
                                            </div>
                                            {{-- CARD FOR CERTIFICATES STARTS --}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- The Main Student View Card End --}}
                    
                @endif

            </div>



            {{-- Modal for Skills Starts--}}
                    <div class="modal fade" id="Add_skill_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                            <div class="card">
                                <div class="card-header"><center>Add Skill</center></div>
                                <div class="card-body">
                                    <form action="add_skill" method="post" id="add_skills_form">
                                        @csrf
                                        <div class="form-group">
                                            <label>Skill Name</label>
                                            <input class="form-control" type="text" name="skill">
                                        </div>
                                        <div class="form-group">
                                            <label>Proficiency</label>
                                            <select class="form-control" name="proficiency" id="proficiency">
                                               <option value="">Select</option>
                                               <option>Beginner</option>
                                               <option>Intermediate</option>
                                               <option>Advance</option>
                                               <option>Master</option>
                                            </select>
                                         </div>
                                        <center><button type="submit" class="btn btn-primary" id="submit_skills">Submit</button></center>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
            {{-- Modal for Skills Ends--}}


            {{-- Modal for Skills Update Starts--}}
                    <div class="modal fade" id="Update_skill_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                            <div class="card">
                                <div class="card-header"><center>Update Skill</center></div>
                                <div class="card-body">
                                    <a id="del_skill" href="" style="float: right;color: #d01212;"><i class="fas fa-trash-alt"></i> Delete Skill</a>
                                    <form action="update_skill" method="post" id="update_skills_form">
                                        @csrf
                                        <input type="hidden" id="id" name="id">
                                        <div class="form-group">
                                            <label>Skill Name</label>
                                            <input class="form-control" type="text" name="skill" id="update_skill">
                                        </div>
                                        <div class="form-group">
                                            <label>Proficiency</label>
                                            <select class="form-control" name="proficiency" id="update_proficiency">
                                            <option value="">Select</option>
                                            <option>Beginner</option>
                                            <option>Intermediate</option>
                                            <option>Advance</option>
                                            <option>Master</option>
                                            </select>
                                        </div>
                                        <center><button type="submit" class="btn btn-primary" id="submit_skills">Save changes</button></center>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
            {{-- Modal for Skills Update Ends--}}


            {{-- Modal for Achievements Starts--}}
                    <div class="modal fade" id="Add_certification_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                            <div class="card">
                                <div class="card-header"><center>Add Achievements or Certifications</center></div>
                                <div class="card-body">
                                    <form action="add_certification" method="post" id="add_certification_form">
                                        @csrf
                                        <div class="form-group">
                                            <label>Certification Name</label>
                                            <input class="form-control" type="text" name="certificate_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Issuing Organization</label>
                                            <input class="form-control" type="text" name="organization_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Issued Date</label>
                                            <input class="form-control" type="date" name="certificate_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Certificate Link</label>
                                            <input class="form-control" type="url" name="certificate_link">
                                        </div>
                                        
                                        <center><button type="submit" class="btn btn-primary" id="submit_skills">Submit</button></center>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
            {{-- Modal for Achievements Ends--}}


            {{-- Modal for Achievements Starts--}}
                    <div class="modal fade" id="Update_certification_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                            <div class="card">
                                <div class="card-header">
                                    <center>Update Achievements or Certifications</center>
                                </div>                                
                                <div class="card-body">
                                    <a id="del_cert" href="" style="float: right;color: #d01212;"><i class="fas fa-trash-alt"></i> Delete Certificate</a>
                                    <form action="update_certification" method="post" id="update_certification_form">
                                        @csrf
                                        <input type="hidden" name="id" id="cert_id">
                                        <div class="form-group">
                                            <label>Certification Name</label>
                                            <input class="form-control" type="text" name="update_certificate_name" id="update_certificate_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Issuing Organization</label>
                                            <input class="form-control" type="text" name="update_organization_name" id="update_organization_name">
                                        </div>
                                        <div class="form-group">
                                            <label>Issued Date</label>
                                            <input class="form-control" type="date" name="update_certificate_date" id="update_certificate_date">
                                        </div>
                                        <div class="form-group">
                                            <label>Certificate Link</label>
                                            <input class="form-control" type="url" name="update_certificate_link" id="update_certificate_link">
                                        </div>
                                        
                                        <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
            {{-- Modal for Achievements Ends--}}

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
        $("#add_skill").click(function(){
                console.log("Click ho gaya bhai");
                $("#Add_skill_modal").modal("show");
            });
        
        $("#add_skills_form").validate({
            rules:{
                skill:'required',
                proficiency:'required'
            },
            messages:{
                skill:'Please enter skill',
                proficiency:'Please select proficiency'
            },
            submitHandler:function(form){
               form.submit();
            }
        });
    </script>

    <script>
        function editskill(id){
            console.log(id);
            $.get("editskilldata/" + id, function (response){
                $("#id").val(response.skill.id);
                $("#del_skill").attr('href','delete_skill/'+id);
                $("#update_skill").val(response.skill.skill);
                $("#update_proficiency").val(response.skill.proficiency);
                $("#Update_skill_modal").modal('toggle');
            });
        }

        $("#update_skills_form").validate({
            rules:{
                skill:'required',
                proficiency:'required'
            },
            messages:{
                skill:'Please enter skill',
                proficiency:'Please select proficiency'
            },
            submitHandler:function(form){
               form.submit();
            }
        });
    </script>

    <script>
        $("#add_certificate").click(function(){
            $("#Add_certification_modal").modal('show');
        });

        $("#add_certification_form").validate({
            rules:{
                certificate_name:'required',
                organization_name:'required',
                certificate_date:'required',
                certificate_link:{
                    required:true,
                    url:true
                }
            },
            messages:{
                certificate_name:"Please enter certification name",
                organization_name:'Please enter issuing organization name',
                certificate_date:'Please specify certification date',
                certificate_link:{
                    required:"Please provide the link for certificate",
                    url:"Please enter valid url"
                }
            },
            submitHandler:function(form){
               form.submit();
            }
        });
    </script>

    <script>
        function editcertificate(id){
            $.get("getcertificatedata/"+ id , function(response){
                console.log(response);
                $("#cert_id").val(response.certificate_data.id);
                $("#del_cert").attr("href",'delete_certificate/'+id);
                $("#update_certificate_name").val(response.certificate_data.certificate_name);
                $("#update_organization_name").val(response.certificate_data.issued_by);
                $("#update_certificate_date").val(response.certificate_data.issued_date);
                $("#update_certificate_link").val(response.certificate_data.certificate_link);
                $("#Update_certification_modal").modal('toggle');

            });
        }
    </script>

    <script>
        function clear_notification(){
            console.log('clear kar denge');
            $(".notification-list").remove();
            $("#noti_count_text").text('0');
        }

        function accept_request(id){
            $.get('accept_request/'+id, function(response){
                console.log(response);
                $("#request_id_"+id).remove();
                var new_count = $("#noti_count_text").text()-1;
                $("#noti_count_text").text(new_count);


            });
        }

        function decline_request(id){
            console.log(id);
            $.get('decline_request/'+id, function(response){
                console.log(response);
                $("#request_id_"+id).remove();
                var new_count = $("#noti_count_text").text()-1;
                $("#noti_count_text").text(new_count);
            });
        }
    </script>





    @if (Session::has('success_skill'))
    <script>
        toastr.success(("{!! Session::get('success_skill') !!}"));
    </script>
    @endif

    @if (Session::has('success_skill_update'))
    <script>
        toastr.success(("{!! Session::get('success_skill_update') !!}"));
    </script>
    @endif

    @if (Session::has('success_certificate_add'))
    <script>
        toastr.success(("{!! Session::get('success_certificate_add') !!}"));
    </script>
    @endif

    @if (Session::has('success_certificate_update'))
    <script>
        toastr.success(("{!! Session::get('success_certificate_update') !!}"));
    </script>
    @endif

    @if (Session::has('success_certificate_delete'))
    <script>
        toastr.success(("{!! Session::get('success_certificate_delete') !!}"));
    </script>
    @endif

    @if (Session::has('success_skill_delete'))
    <script>
        toastr.success(("{!! Session::get('success_skill_delete') !!}"));
    </script>
    @endif

    @if (Session::has('success_detials_edit'))
    <script>
        toastr.success(("{!! Session::get('success_detials_edit') !!}"));
    </script>
    @endif
    
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>