<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>PVGCOE - Add Exam Schedule</title>

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
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Staff Members</span> <span
                                    class="menu-arrow"></span></a>
                            <ul>
                                
                                    {{-- <li><a href="dashboard">Staff Profile</a></li>

                                    <li><a href="edit_staff">Staff Edit</a></li> --}}
                                    {{-- <li><a href="#">Exam Time Table</a></li> --}}
                                    
                                    
                                    {{-- <li><a href="add_staff">Staff Add</a></li> --}}

                               

                            </ul>
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
                            <h3 class="page-title" style="margin-bottom: 15px">Exam Schedule</h3>
                            <ul >
                                {{-- <li class="breadcrumb-item"><a href="javascript:void(0)">Staff</a></li> --}}
                                <li class="">Department : {{$ec_data->ec_department}}</li>
                                <li class="">Exam Co-ordinator : {{$ec_data->ec_name}}</li>
                                <li class="">Co-ordinator ID : {{$ec_data->ec_id}}</li>


                            </ul>
                        </div>
                       
                    </div>
                </div>
            

                
                
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="about-info">
                                            
                                                
                                                <div class="row">
                                                   <div class="col-12 col-sm-6">
                                                      <div class="form-group">
                                                         <label>Exam Name</label>
                                                         <input type="text" name="exam_name" id="exam_name" class="form-control">
                                                      </div>
                                                   </div>
                                                   
                                                   <div class="col-12 col-sm-6">
                                                      <div class="form-group">
                                                         <label>Class</label>
                                                         <select class="form-control" name="class" id="class">
                                                            <option value="">Select Class</option>
                                                            <option>SE</option>
                                                            <option>TE</option>
                                                            <option>BE</option>
                                                         </select>
                                                      </div>
                                                   </div>

                                                   <div class="col-12 col-sm-6">
                                                    <div class="form-group">
                                                       <label>Maximum Marks</label>
                                                       <input type="text" class="form-control" name="marks" id="marks">
                                                       
                                                    </div>                                    
                                                 </div>

                                                   
                                                   
                                                   <div class="col-12 col-sm-6">
                                                      <div class="form-group">
                                                         <label>Department</label>
                                                         <div>
                                                            <input type="text" class="form-control" name="department" id="department" value="{{$ec_data->ec_department}}" readonly>
                                                            
                                                         </div>
                                                      </div>        
                                                   </div>
                                                   
                                                   
                                                   
                                                   <div class="col-12">
                                                      <center><button type="submit" onclick="create_schedule()" class="btn btn-primary">Submit</button></center>
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

    {{-- Modal for Exam Scedule Starts--}}
  
  
        <div class="modal fade" id="exam_schedule_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    {{-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> --}}
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                
                <div class="modal-body">
                    <div class="card">
                        <div class="card-header">
                            <center>Add Exam Schedule</center>
                        </div>                                
                        <div class="card-body">
                            
                            <form action="" method="post" id="exam_details">
                                @csrf
                                
                                <div class="form-group">
                                    {{-- <label>Certification Name</label> --}}
                                    <input class="form-control" type="hidden" name="test_name" id="test_name">
                                </div>
                                <div class="form-group">
                                    {{-- <label>Issuing Organization</label> --}}
                                    <input class="form-control" type="hidden" name="class" id="e_class">
                                </div>
                                <div class="form-group">
                                    {{-- <label>Issued Date</label> --}}
                                    <input class="form-control" type="hidden" name="branch" id="e_branch">
                                </div>
                                <div class="form-group">
                                    {{-- <label>Issued Date</label> --}}
                                    <input class="form-control" type="hidden" name="marks" id="e_marks">
                                </div>
                                <div class="form-group">
                                    {{-- <label>Certificate Link</label> --}}
                                    <input class="form-control" type="date" name="date" id="date">
                                </div>
                                <div class="form-group">
                                    {{-- <label>Certificate Link</label> --}}
                                    <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
                                </div>
                                
                                <center><button type="submit" class="btn btn-primary">Save</button></center>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
                </div> --}}
            </div>
            </div>
        </div>
    {{-- Modal for Exam Scedule ends--}}


    


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
        function create_schedule(){
            console.log("clicked");
            $("#test_name").val($("#exam_name").val());
            $("#e_class").val($("#class").val());
            $("#e_branch").val($("#department").val());
            $("#e_marks").val($("#marks").val());
            $("#exam_schedule_modal").modal('show');
        }
        

        $("#exam_details").validate({
            rules:{
                date:'required',
                subject:'required'
            },
            messages:{
                date:'Please enter date',
                subject:'Please enter subject'
            },
            submitHandler:function(form){
                let mydata = {
                    date:$("#date").val(),
                    subject:$("#subject").val(),
                    exam_name:$("#test_name").val(),
                    class:$("#e_class").val(),
                    branch:$("#e_branch").val(),
                    marks:$("#e_marks").val(),
                    _token:'{{csrf_token()}}'
                }
                $.ajax({
                type: "POST",             
                url: "add_exam_schedule", 
                data: mydata,
                  
                success: function(response) {
                    console.log(response);
                    $("#date").val("");
                    $("#subject").val("");
                }
            });
            }
        });
    </script>
   
    


    
</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>