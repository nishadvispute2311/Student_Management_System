<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>PVGCOE - Student Add Details</title>
      <link rel="shortcut icon" href="assets/img/pvg_logo.jpg">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="assets/css/style.css">
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
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Dashboard</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="index.html">Admin Dashboard</a></li>
                           <li><a href="teacher-dashboard.html">Teacher Dashboard</a></li>
                           <li><a href="student-dashboard.html">Student Dashboard</a></li>
                        </ul>
                     </li> --}}
                     <li class="submenu active">
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                        <ul>
                           {{-- <li><a href="students.html">Student List</a></li> --}}
                           <li><a href="dashboard">Student View</a></li>
                           <li><a href="add_student" class="active">Student Add</a></li>
                        </ul>
                     </li>
                     {{-- <li class="submenu">
                        <a href="#"><i class="fas fa-chalkboard-teacher"></i> <span> Teachers</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="teachers.html">Teacher List</a></li>
                           <li><a href="teacher-details.html">Teacher View</a></li>
                           <li><a href="add-teacher.html">Teacher Add</a></li>
                           <li><a href="edit-teacher.html">Teacher Edit</a></li>
                        </ul>
                     </li> --}}
                     {{-- <li class="submenu">
                        <a href="#"><i class="fas fa-building"></i> <span> Departments</span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="departments.html">Department List</a></li>
                           <li><a href="add-department.html">Department Add</a></li>
                           <li><a href="edit-department.html">Department Edit</a></li>
                        </ul>
                     </li> --}}
                     {{-- <li class="submenu">
                        <a href="#"><i class="fas fa-book-reader"></i> <span> Subjects</span> <span class="menu-arrow"></span></a>
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
                        <a href="#"><i class="fas fa-file-invoice-dollar"></i> <span> Accounts</span> <span class="menu-arrow"></span></a>
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
                        <a href="holiday.html"><i class="fas fa-holly-berry"></i> <span>Holiday</span></a>
                     </li>
                     {{-- <li>
                        <a href="fees.html"><i class="fas fa-comment-dollar"></i> <span>Fees</span></a>
                     </li> --}}
                     <li>
                        <a href="exam.html"><i class="fas fa-clipboard-list"></i> <span>Exam list</span></a>
                     </li>
                     <li>
                        <a href="event.html"><i class="fas fa-calendar-day"></i> <span>Events</span></a>
                     </li>
                     <li>
                        <a href="time-table.html"><i class="fas fa-table"></i> <span>Time Table</span></a>
                     </li>
                     {{-- <li>
                        <a href="library.html"><i class="fas fa-book"></i> <span>Library</span></a>
                     </li> --}}
                     {{-- <li class="menu-title">
                        <span>Pages</span>
                     </li> --}}
                     {{-- <li class="submenu">
                        <a href="#"><i class="fas fa-shield-alt"></i> <span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="login.html">Login</a></li>
                           <li><a href="register.html">Register</a></li>
                           <li><a href="forgot-password.html">Forgot Password</a></li>
                           <li><a href="error-404.html">Error Page</a></li>
                        </ul>
                     </li> --}}
                     {{-- <li>
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
                     </li> --}}
                     {{-- <li class="submenu">
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
                     </li> --}}
                  </ul>
               </div>
            </div>
         </div>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Add Students</h3>
                        <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="students.html">Students</a></li>
                           <li class="breadcrumb-item active">Add Students</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-body">
                           <form action="add_details_of_student" method="post" enctype="multipart/form-data">
                              @csrf
                              <div class="row">
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Student Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Student Name</label>
                                       <input type="text" name="name" class="form-control" value="{{$user_data1->fname}} {{$user_data1->lname}}" readonly>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Student Id</label>
                                       <input type="text" class="form-control" name="student_id" value="{{$user_data1->user_id}}" readonly>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Gender</label>
                                       <select class="form-control" name="gender" id="gender">
                                          <option value="">Select Gender</option>
                                          <option>Female</option>
                                          <option>Male</option>
                                       </select>
                                       <span class="text-danger">
                                          @error('gender')
                                             {{$message}}
                                          @enderror
                                       </span>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Date of Birth</label>
                                       <div>
                                          <input type="date" class="form-control" name="date_of_birth">
                                          <span class="text-danger">
                                             @error('date_of_birth')
                                                 {{$message}}
                                             @enderror
                                         </span>
                                       </div>
                                    </div>
                                    
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Class</label>
                                       <select class="form-control" name="class">
                                          <option value="">Select Class</option>
                                          <option>FE</option>
                                          <option>SE</option>
                                          <option>TE</option>
                                          <option>BE</option>
                                       </select>
                                       <span class="text-danger">
                                          @error('class')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                    
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Department</label>
                                       <select class="form-control" name="department">
                                          <option value="">Select Department</option>
                                          <option>Computer</option>
                                          <option>Information Technology</option>
                                          <option>Electronics and Telecommunications</option>
                                          <option>Artificial Intelligence and Data Science</option>
                                          <option>Mechanical</option>
                                       </select>
                                       <span class="text-danger">
                                          @error('department')
                                              {{$message}}
                                          @enderror
                                       </span>
                                    </div>
                                    
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Admission Date</label>
                                       <div>
                                          <input type="date" class="form-control" name="date_of_admission">
                                          <span class="text-danger">
                                             @error('date_of_admission')
                                                 {{$message}}
                                             @enderror
                                         </span>
                                       </div>
                                    </div>        
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Profile Header</label>
                                       <input type="text" class="form-control" name="student_about" placeholder="Add some short desription for profile header">
                                    </div>                                    
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Mobile Number</label>
                                       <input type="text" class="form-control" name="number">
                                       <span class="text-danger">
                                          @error('number')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>                                    
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Student Image</label>
                                       <input type="file" class="form-control" name="image">
                                       <span class="text-danger">
                                          @error('image')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>

                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Linkedin Link</label>
                                       <input type="text" class="form-control" name="linkedin_link">
                                       <span class="text-danger">
                                          @error('linkedin_link')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Github Link</label>
                                       <input type="text" class="form-control" name="github_link">
                                       <span class="text-danger">
                                          @error('github_link')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>

                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Summary</label>
                                       <textarea class="form-control" style="height: 60px;" name="summary"></textarea>
                                       <span class="text-danger">
                                          @error('summary')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Present Address</label>
                                       <textarea class="form-control" name="present_address"></textarea>
                                       <span class="text-danger">
                                          @error('present_address')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Permanent Address</label>
                                       <textarea class="form-control" name="permanent_address"></textarea>
                                       <span class="text-danger">
                                          @error('permanent_address')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>
                                 <div class="col-12">
                                    <h5 class="form-title"><span>Parent Information</span></h5>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Name</label>
                                       <input type="text" class="form-control" name="father_name">
                                       <span class="text-danger">
                                          @error('father_name')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Occupation</label>
                                       <input type="text" class="form-control" name="father_occupation">
                                       <span class="text-danger">
                                          @error('father_occupation')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Mobile</label>
                                       <input type="text" class="form-control" name="father_number">
                                       <span class="text-danger">
                                          @error('father_number')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>
                                 <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                       <label>Father's Email</label>
                                       <input type="email" class="form-control" name="father_email">
                                       <span class="text-danger">
                                          @error('father_email')
                                              {{$message}}
                                          @enderror
                                      </span>
                                    </div>
                                 </div>
                                 

                                 <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="assets/js/jquery-3.6.0.min.js"></script>
      <script src="assets/js/popper.min.js"></script>
      <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>
      <script src="assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>