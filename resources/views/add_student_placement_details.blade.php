<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>PVGCOE - Student Add Placement Details</title>

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
                        
                        <li class="submenu active">
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span class="menu-arrow"></span></a>
                            <ul>
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
                    <div class="row">
                        <div class="col-sm-12">
                            <h3 class="page-title" style="margin-bottom: 15px">Placed Student Details</h3>
                            <ul>
                                {{-- <li>Training and Placement Officer : <b>{{$user_data1->fname}} {{$user_data1->lname}}</b></li>
                                <li>TPO ID : <b>{{$user_data1->user_id}}</b></li>

                                <li class="breadcrumb-item active">Staff Details</li> --}}
                            </ul>
                        </div>
                       
                    </div>
                </div>
            

                
                
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-info">
                                            
                                                <form action="students_placed_details" method="post" id="drive_details" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">
                                                       <div class="col-12 col-sm-6">
                                                          <div class="form-group">
                                                             <label>Company Name</label>
                                                             <input type="text" name="company_name" id="company_name" class="form-control">
                                                          </div>
                                                       </div>
                                                       
                                                       <div class="col-12 col-sm-6">
                                                          <div class="form-group">
                                                            <label>Job Role</label>
                                                            <input type="text" name="job_role" id="job_role" class="form-control">
                                                          </div>
                                                       </div>
    
                                                       <div class="col-12 col-sm-6">
                                                          <div class="form-group">
                                                             <label>Salary (CTC)</label>
                                                             <div>
                                                                <input type="text" class="form-control" name="salary" id="salary">
                                                             </div>
                                                          </div>        
                                                       </div>
    
                                                       <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Batch</label>
                                                                <input type="text" class="form-control" name="batch" id="batch">
                                                            
                                                            </div>                                    
                                                        </div>
    
                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Date of Selection</label>
                                                                <input type="date" class="form-control" name="date_of_selection" id="date_of_selection">
                                                            
                                                            </div>                                    
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Selection Proof</label>
                                                                <input type="text" class="form-control" name="proof" id="proof">
                                                            
                                                            </div>                                    
                                                        </div>

                                                        <div class="col-12 col-sm-6">
                                                            <div class="form-group">
                                                                <label>Photo</label>
                                                                <input type="file" class="form-control" name="student_image" id="student_image">   
                                                            </div>                                    
                                                        </div>
                                                       
                                                       
                                                       
                                                       <div class="col-12">
                                                          <center><button type="submit" class="btn btn-primary">Submit</button></center>
                                                       </div>
                                                    </div>

                                                </form>

                                            
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card">
                            <div class="card-header">
                                <h4><center>Your Placement Details</center></h4>
                            </div>
                            <div class="card-body">
                                <table class="table  table-striped">
                                    <thead>
                                      <tr>
                                        {{-- <th scope="col"><center>Student Name</center></th>
                                        <th scope="col"><center>Student ID</center></th>
                                        <th scope="col"><center>Branch</center></th> --}}
                                        <th scope="col"><center>Company Name</center></th>
                                        <th scope="col"><center>Job Role</center></th>
                                        <th scope="col"><center>Salary</center></th>
                                        {{-- <th scope="col"><center>Batch</center></th> --}}
                                        <th scope="col"><center>Date of Selection</center></th>
                                        <th scope="col"><center>Selection Proof</center></th>
    
    
                                      </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($your_placement_data as $d_data)
                                                <tr>
                                                    {{-- <td><center>{{$d_data->student_name}}</center></td>
                                                    <td><center>{{$d_data->student_id}}</center></td>
                                                    <td><center>{{$d_data->branch}}</center></td> --}}
                                                    <td><center>{{$d_data->company_name}}</center></td>
                                                    <td><center>{{$d_data->job_role}}</center></td>
                                                    <td><center>{{$d_data->salary}}</center></td>
                                                    {{-- <td><center>{{$d_data->batch}}</center></td> --}}
                                                    <td><center>{{$d_data->date_of_selection}}</center></td>
                                                    <td><center><a href="{{$d_data->proof}}" target="_blank"><i class="fas fa-external-link-alt"></i> View</a></center></td>
                                                    
                                                
                                                </tr>
                                        @endforeach
                                      
                                           
                                      
                                      
                                    </tbody>
                                  </table>
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


    <script>
        // function create_schedule(){
        //     console.log("clicked");
        //     $("#test_name").val($("#exam_name").val());
        //     $("#e_class").val($("#class").val());
        //     $("#e_branch").val($("#department").val());
        //     $("#e_marks").val($("#marks").val());
        //     $("#exam_schedule_modal").modal('show');
        // }
        

        $("#drive_details").validate({
            rules:{
                company_name:'required',
                job_role:'required',
                salary:'required',
                batch:'required',
                date_of_selection:'required',
                proof:{
                    required:true,
                    url: true
                },
                student_image:'required'
            },
            messages:{
                company_name:'Please enter company name',
                job_role:'Please enter job role',
                salary:'Please enter salary',
                batch:'Please enter batch',
                date_of_selection:'Please enter date of selection',
                proof:{
                    required:"Please enter the selection confirmation proof google drive link",
                    url:"Please enter valid link"
                },
                student_image:"Please upload your passport size photo"
            },
            submitHandler:function(form){
                form.submit();
            }
        });
    </script>

    @if (Session::has('success'))
    <script>
        toastr.success(("{!! Session::get('success') !!}"));
    </script>
    @endif
   
    


    
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>