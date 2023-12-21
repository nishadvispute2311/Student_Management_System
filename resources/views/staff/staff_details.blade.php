<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>PVGCOE - Staff Dashboard</title>

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
                        <i class="far fa-bell"></i> <span id="noti_count_text" class="badge badge-pill">0</span>
                    </a>
                   
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
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Staff Members</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                {{-- <li><a href="students.html">Student List</a></li> --}}
                                    <li><a href="dashboard">Staff Profile</a></li>
                                @if (Session::has('staff_complete'))

                                    <li><a href="edit_staff">Staff Edit</a></li>
                                    <li><a href="student_list">Student List</a></li>
                                    
                                @else
                                    
                                    <li><a href="add_staff">Staff Add</a></li>

                                @endif
                                    {{-- <li><a href="connect_list">Exam Timetable</a></li>
                                    <li><a href="student_work">Student Work</a></li>
                                    <li><a href="student_skill_badge_page">Student Skill Badge</a></li>
                                    <li><a href="student_rank_page">Student Rank</a></li> --}}

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
                            <a href="https://docs.google.com/spreadsheets/d/1Tk8DbslV_3iplorFCsVBHLHJDIdOTjeEfFM-aEfvICs/edit#gid=0" target="_blank"><i class="fas fa-holly-berry"></i> <span>Attendance</span></a>
                        </li>
                        <li>
                            <a href="staff_st_exam_schedule"><i class="fas fa-clipboard-list"></i> <span>Exam Schedule</span></a>
                        </li>
                        <li>
                            <a href="exam_result"><i class="fas fa-clipboard-list"></i> <span>Exam Result</span></a>
                        </li>
                        <li>
                            <a href="result_record"><i class="fas fa-clipboard-list"></i> <span>Result Record</span></a>
                        </li>
                        
                        {{-- <li>
                            <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                        </li> --}}
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
                            <h3 class="page-title">Staff Details</h3>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li>
                                <li class="breadcrumb-item active">Staff Details</li>
                            </ul>
                        </div>
                       
                    </div>
                </div>
            

                @if (Session::has('staff_incomplete'))
                
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-info">
                                            <center><h4>It seems that your staff profile is not yet completed.</h4>
                                                <h6>To complete your profle : <a href="add_staff">Click Here</a></h6></center>
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

                                            <div class="media mt-3">
                                                <img src="{{asset('all_staff_profile_images')}}/{{$staff_data->image}}" class="mr-3" alt="..." height="250px">
                                                <div class="media-body">
                                                    <ul>
                                                        <li>
                                                            <span class="title-span">Full Name : </span>
                                                            <span class="info-span">{{$staff_data->staff_name}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Incharge : </span>
                                                            <span class="info-span">{{$staff_data->class_incharge}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Department : </span>
                                                            <span class="info-span">{{$staff_data->department}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Qualification : </span>
                                                            <span class="info-span">{{$staff_data->qualification}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Mobile : </span>
                                                            <span class="info-span">{{$staff_data->mobile}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Email : </span>
                                                            <span class="info-span">{{$staff_data->staff_email}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Gender : </span>
                                                            <span class="info-span">{{$staff_data->gender}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">DOB : </span>
                                                            <span class="info-span">{{$staff_data->dob}}</span>
                                                        </li>
                                                        <li>
                                                            <span class="title-span">Social Links : </span>
                                                            <span class="info-span"><a href="{{$staff_data->linkedin_link}}"  target="_blank" style="color: #5f550e"><i class="fab fa-linkedin" style="color:blue;"></i></a></span>
                                                            {{-- <span class="info-span" style="margin-left: 15px"><a href="{{$student_data->github_link}}"  target="_blank" style="color: #5f550e"><i class="fab fa-github" style="color:blue;"></i></a></span> --}}
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            

                                            
                                            
                                            
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="row mt-2">
                                    <div class="col-md-12">
                                        <div class="skill-info">

                                            
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        {{-- The Main Student View Card End --}}
                    
                @endif

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


    @if (Session::has('edit_success'))
    <script>
        toastr.success(("{!! Session::get('edit_success') !!}"));
    </script>
    @endif
    


    
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>