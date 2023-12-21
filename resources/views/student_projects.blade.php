<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>PVGCOE - Student Experience</title>
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
                           <li class="breadcrumb-item active">Student Projects</li>
                        </ul>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        <div class="card-header">
                            <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;margin-left: 45%;">Projects</span><span style="float:right"><a id="add_project" href="javascript:void(0)" style="color: #5f550e;"><i class="fas fa-plus"></i> Add</a></span></p>
                        </div>
                        <div class="card-body">

                           @foreach ($student_project as $std_project)

                                 <p class="text-dark" style="margin-bottom:5px">
                                    <span style="font-size: 1.25rem;"><b>{{$std_project->project_name}}</b></span>
                                    <span style="margin-left: 50px"><a href="javascript:void(0)" onclick="editproject({{$std_project->id}})" style="color: #5f550e"><i class="far fa-edit mr-1"></i></a></span>
                                 </p>
                                 <p>Technology Used : <span class="text-muted">{{$std_project->project_technology}}</span></p>
                                 <p >Description : <span class="text-muted">{{$std_project->project_description}}</span></p>
                                 <p><span>View Project : </span><span style="margin-left: 10px"><a href="{{$std_project->project_link}}" target="_blank" style="color: #5f550e"><i class="fab fa-github" style="color:blue;"></i></a></span></p>
                                 <hr>
                               
                           @endforeach
                          
                        </div>
                     </div>

                     <div class="card">
                        <div class="card-header">
                            <p class="text-dark" style="margin-bottom:5px"><span style="font-size: 1.25rem;margin-left: 45%;">Work Experience</span><span style="float:right"><a id="add_experience" href="javascript:void(0)" style="color: #5f550e;"><i class="fas fa-plus"></i> Add</a></span></p>
                        </div>
                        <div class="card-body">

                              @foreach ($student_work as $std_work)
                                  
                                 <p class="text-dark" style="margin-bottom:5px">
                                    <span style="font-size: 1.25rem;"><b>{{$std_work->company_name}}</b></span>
                                    <span style="margin-left: 50px"><a href="javascript:void(0)" onclick="editwork({{$std_work->id}})" style="color: #5f550e"><i class="far fa-edit mr-1"></i></a></span>
                                 </p>
                                 <p>Job Role : <span class="text-muted">{{$std_work->job_role}}</span></p>
                                 <p >Description : <span class="text-muted">{{$std_work->job_description}}</span></p>
                                 <hr>

                              @endforeach


                               
                          
                        </div>
                     </div>
                  </div>
               </div>
            </div>
               {{-- Modal for Project Add Starts--}}
                     <div class="modal fade" id="Add_project_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-body">
                           <div class="card">
                              <div class="card-header"><center>Add Project</center></div>
                              <div class="card-body">
                                    <form action="add_project" method="post" id="add_project_form">
                                       @csrf
                                       <div class="form-group">
                                          <label>Project Name</label>
                                          <input class="form-control" type="text" name="project_name">
                                       </div>
                                       <div class="form-group">
                                          <label>Technology Used</label>
                                          <input class="form-control" type="text" name="project_technology" placeholder="Ex : Python, MySQL, HTML, etc">
                                       </div>
                                       <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" name="project_description" style="height:120px"></textarea>
                                       </div>
                                       <div class="form-group">
                                          <label>Project Github Link</label>
                                          <input class="form-control" type="url" name="project_link">
                                       </div>
                                       
                                       <center><button type="submit" class="btn btn-primary" id="submit_project">Submit</button></center>
                                    </form>
                              </div>
                           </div>
                           </div>
                        </div>
                        </div>
                     </div>
               {{-- Modal for Project Add Ends--}}

               {{-- Modal for Project Edit Starts--}}
                     <div class="modal fade" id="Update_project_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-body">
                           <div class="card">
                              <div class="card-header">
                                    <center>Update Projects</center>
                              </div>                                
                              <div class="card-body">
                                    <a id="del_project" href="" style="float: right;color: #d01212;"><i class="fas fa-trash-alt"></i> Delete Project</a>
                                    <form action="update_project" method="post" id="update_project_form">
                                       @csrf
                                       <input type="hidden" id="project_id" name="project_id">
                                       <div class="form-group">
                                          <label>Project Name</label>
                                          <input class="form-control" type="text" name="project_name" id="project_name">
                                       </div>
                                       <div class="form-group">
                                          <label>Technology Used</label>
                                          <input class="form-control" type="text" name="project_technology" id="project_technology" placeholder="Ex : Python, MySQL, HTML, etc">
                                       </div>
                                       <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" name="project_description" id="project_description" style="height:120px"></textarea>
                                       </div>
                                       <div class="form-group">
                                          <label>Project Github Link</label>
                                          <input class="form-control" type="url" name="project_link" id="project_link">
                                       </div>
                                       
                                       
                                       <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                    </form>
                              </div>
                           </div>
                           </div>
                        </div>
                        </div>
                     </div>   
               {{-- Modal for Projec Edit Ends--}}

               {{-- Modal for Experience Add Starts--}}
                     <div class="modal fade" id="Add_experience_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-body">
                           <div class="card">
                              <div class="card-header"><center>Add Experience</center></div>
                              <div class="card-body">
                                    <form action="add_work" method="post" id="add_experience_form">
                                       @csrf
                                       <div class="form-group">
                                          <label>Company Name</label>
                                          <input class="form-control" type="text" name="company_name">
                                       </div>
                                       <div class="form-group">
                                          <label>Job Role</label>
                                          <input class="form-control" type="text" name="job_role">
                                       </div>
                                       <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" name="job_description" style="height:120px"></textarea>
                                       </div>
                                       
                                       <center><button type="submit" class="btn btn-primary" id="submit_project">Submit</button></center>
                                    </form>
                              </div>
                           </div>
                           </div>
                        </div>
                        </div>
                     </div>
               {{-- Modal for Experience Add Ends--}}

               {{-- Modal for Experience Edit Starts--}}
                     <div class="modal fade" id="Update_experience_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                           <div class="modal-body">
                           <div class="card">
                              <div class="card-header"><center>Add Experience</center></div>
                              <div class="card-body">
                                 <a id="del_work" href="" style="float: right;color: #d01212;"><i class="fas fa-trash-alt"></i> Delete Experience</a>
                                    <form action="update_work" method="post" id="update_experience_form">
                                       @csrf
                                       <input type="hidden" id="id" name="id">
                                       <div class="form-group">
                                          <label>Company Name</label>
                                          <input class="form-control" type="text" name="company_name" id="company_name">
                                       </div>
                                       <div class="form-group">
                                          <label>Job Role</label>
                                          <input class="form-control" type="text" name="job_role" id="job_role">
                                       </div>
                                       <div class="form-group">
                                          <label>Description</label>
                                          <textarea class="form-control" name="job_description" id="job_description" style="height:120px"></textarea>
                                       </div>
                                       
                                       <center><button type="submit" class="btn btn-primary" id="submit_project">Submit</button></center>
                                    </form>
                              </div>
                           </div>
                           </div>
                        </div>
                        </div>
                     </div>
               {{-- Modal for Experience Add Ends--}}
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
         $("#add_project").click(function(){
            $("#Add_project_modal").modal("show");
         });

         $("#add_project_form").validate({
            rules:{
               project_name:"required",
               project_technology:"required",
               project_description:"required",
               project_link:{
                  required:true,
                  url:true
               }
            },
            messages:{
               project_name:"Please enter project name",
               project_technology:"Please enter the technologies used",
               project_description:"Please enter short description for project",
               project_link:{
                  required:"Please provide the link for project",
                  url:"Please enter valid URL"
               }
            },
            submitHandler:function(form){
               form.submit();
            }
         });

         function editproject(id){
            $.get('get_project_data/'+id, function(response){
               console.log(response.project_name);
               $("#project_id").val(response.id);
               $("#project_name").val(response.project_name);
               $("#project_technology").val(response.project_technology);
               $("#project_description").val(response.project_description);
               $("#project_link").val(response.project_link);
               $("#del_project").attr('href','delete_project/'+id);
               $("#Update_project_modal").modal('toggle');
            });
         }

         $("#update_project_form").validate({
               rules:{
                  project_name:"required",
                  project_technology:"required",
                  project_description:"required",
                  project_link:{
                     required:true,
                     url:true
                  }
               },
               messages:{
                  project_name:"Please enter project name",
                  project_technology:"Please enter the technologies used",
                  project_description:"Please enter short description for project",
                  project_link:{
                     required:"Please provide the link for project",
                     url:"Please enter valid URL"
                  }
               },
               submitHandler:function(form){
                  form.submit();
               }
         });
      </script>

      <script>
         $("#add_experience").click(function(){
            $("#Add_experience_modal").modal("show");
         });

         $("#add_experience_form").validate({
            rules:{
                  company_name:"required",
                  job_role:"required",
                  job_description:"required"
               },
               messages:{
                  company_name:"Please enter the company name",
                  job_role:"Please enter the job role",
                  job_description:"Please enter job description"
               },
               submitHandler:function(form){
                  form.submit();
               }
         });

         function editwork(id){
            $.get('get_work_data/'+id, function(response){
               console.log(response);
               $("#id").val(response.id);
               $("#company_name").val(response.company_name);
               $("#job_role").val(response.job_role);
               $("#job_description").val(response.job_description);
               $("#del_work").attr('href','delete_work/'+id);
               $("#Update_experience_modal").modal("toggle");
            });
         }
      </script>


      @if (Session::has('success_add'))
      <script>
         toastr.success(("{!! Session::get('success_add') !!}"));
      </script>
      @endif
      
      @if (Session::has('success_edit'))
      <script>
         toastr.success(("{!! Session::get('success_edit') !!}"));
      </script>
      @endif

      @if (Session::has('success_delete'))
      <script>
         toastr.success(("{!! Session::get('success_delete') !!}"));
      </script>
      @endif

      @if (Session::has('success_add_work'))
      <script>
         toastr.success(("{!! Session::get('success_add_work') !!}"));
      </script>
      @endif

      @if (Session::has('success_edit_work'))
      <script>
         toastr.success(("{!! Session::get('success_edit_work') !!}"));
      </script>
      @endif

      @if (Session::has('success_delete_work'))
      <script>
         toastr.success(("{!! Session::get('success_delete_work') !!}"));
      </script>
      @endif

   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>