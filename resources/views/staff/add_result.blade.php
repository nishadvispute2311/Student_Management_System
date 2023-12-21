<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>PVGCOE - Add Student Result</title>
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
                        <a href="#"><i class="fas fa-user-graduate"></i> <span> Staff Members</span> <span class="menu-arrow"></span></a>
                        <ul>
                           {{-- <li><a href="students.html">Student List</a></li> --}}
                           <li><a href="dashboard">Staff Profile</a></li>
                           <li><a href="edit_staff">Staff Edit</a></li>
                           <li><a href="student_list">Student List</a></li>
                        </ul>
                     </li>
                     
                     <li class="menu-title">
                        <span>Management</span>
                     </li>
                     
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
                    
                     
                  </ul>
               </div>
            </div>
         </div>
         <div class="page-wrapper">
            <div class="content container-fluid">
               <div class="page-header">
                  <div class="row align-items-center">
                     <div class="col">
                        <h3 class="page-title">Exam Result Data</h3>
                        <ul class="breadcrumb">
                           {{-- <li class="breadcrumb-item"><a href="dashboard">Students</a></li> --}}
                           {{-- <li class="breadcrumb-item"><a href="#">{{$class}} , {{$branch}}</a></li> --}}
                        </ul>
                     </div>
                     <div class="col-auto text-right float-right ml-auto">
                        {{-- <a href="javascript:void(0);" target="_blank" class="btn btn-outline-primary mr-2">Class Result</a> --}}
                        {{-- <a href="add-student.html" class="btn btn-primary"><i class="fas fa-plus"></i></a> --}}
                    </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-sm-12">
                     <div class="card">
                        
                        <div class="card-body">
                            <table class="table  table-striped">
                                <thead>
                                  <tr>
                                    <th scope="col"><center>Student ID</center></th>
                                    <th scope="col"><center>Name</center></th>
                                    <th scope="col"><center>Email</center></th>
                                    <th scope="col"><center>Mob. Number</center></th>
                                    <th scope="col"><center>Action</center></th>
                                    

                                  </tr>
                                </thead>
                                <tbody>
                                  
                                  @foreach ($student_data as $std_data)
                                    
                                          <tr>
                                             <th scope="row"><center>{{$std_data->student_id}}</center></th>
                                             <td><center>{{$std_data->student_name}}</center></td>
                                             {{-- <td><center>{{$std_data->class}}</center></td> --}}
                                             <td><center>{{$std_data->student_email}}</center></td>
                                             <td><center>{{$std_data->student_number}}</center></td>
                                             <td>
                                                <a href="javascript:void(0)" onclick="get_student_data('{{$std_data->student_id}}')" class="btn btn-primary">Add Marks</a>
                                                <a href="javascript:void(0)" onclick="get_student_data2('{{$std_data->student_id}}','{{$std_data->student_name}}')" class="btn btn-primary">Add Result</a></center>
                                             </td>
                                             <td>
                                             </td>
                                             
                                          </tr>
                                       
                                  @endforeach
                                  
                                  
                                </tbody>
                              </table>
                          
                        </div>
                     </div>

                  </div>
               </div>
            </div>
               

              

               
              
         </div>
      </div>

      <div class="modal fade" id="result_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
         <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 {{-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> --}}
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
               </div>
             
             <div class="modal-body">
                 <div class="card">
                     <div class="card-header">
                         <center>Add Student Marks</center>
                     </div>                                
                     <div class="card-body">
                         
                         <form action="" method="post" id="result_data">
                             @csrf
                             
                             <div class="form-group">
                                 <input class="form-control" type="text" name="student_id" id="student_id" disabled>
                             </div>
                             <div class="form-group">
                                 <input class="form-control" type="text" name="exam_name" id="exam_name" placeholder="Exam Name">
                             </div>
                             <div class="form-group">
                                    <input class="form-control" type="text" name="max_marks" id="max_marks" placeholder="Maximum Marks">
                              </div>
                    
                             <div class="form-group">
                                 <input class="form-control" type="text" name="subject" id="subject" placeholder="Subject">
                             </div>

                             <div class="form-group">
                              <input class="form-control" type="text" name="marks" id="marks" placeholder="Marks">
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


     <div class="modal fade" id="total_result_modal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              {{-- <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5> --}}
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
            </div>
          
          <div class="modal-body">
              <div class="card">
                  <div class="card-header">
                      <center>Add Total Result</center>
                  </div>                                
                  <div class="card-body">
                      
                      <form action="add_total_result_of_student" method="post" id="result_data2">
                          @csrf
                          
                          <div class="form-group">
                              <input class="form-control" type="hidden" name="my_student_id" id="student_id2">
                          </div>
                          <div class="form-group">
                              <input class="form-control" type="text" name="my_student_name" id="my_student_name" disabled>
                          </div>
                          <div class="form-group">
                              <input class="form-control" type="text" name="exam_name2" id="exam_name2" placeholder="Exam Name">
                          </div>
                          
                          <div class="form-group">
                              <input class="form-control" type="text" name="marks_obtained" id="marks_obtained" placeholder="Marks Obtained">
                          </div>

                          <div class="form-group">
                           <input class="form-control" type="text" name="total_marks" id="total_marks" placeholder="Total Marks">
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
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      
      <script>
         function get_student_data(id){
            console.log(id);
            $("#student_id").val(id)
            $("#result_modal").modal('show');
         }


         $("#result_data").validate({
            rules:{
               subject:'required',
               marks:'required',
               exam_name:'required',
               max_marks:'required'
            },
            messages:{
                subject:'Please enter subject',
                marks:'Please enter marks',
                max_marks:'Please enter maximum marks',
                exam_name:'Please enter exam name'
            },
            submitHandler:function(form){
               let mydata = {
                    student_id:$("#student_id").val(),
                    subject:$("#subject").val(),
                    marks:$("#marks").val(),
                    max_marks:$("#max_marks").val(),
                    exam_name:$("#exam_name").val(),
                    _token:'{{csrf_token()}}'
                }
                console.log(mydata);
                $.ajax({
                type: "POST",             
                url: "add_result_data_of_student",
                data: mydata,
                  
                success: function(response) {
                    console.log(response);
                    $("#subject").val("");
                    $("#marks").val("");
                }
            });
            }
        });


        function get_student_data2(id,name){
         console.log(id);
         $("#student_id2").val(id);
         $("#my_student_name").val(name);
         $("#total_result_modal").modal('show');
         
        }

        $("#result_data2").validate({
         rules:{
               exam_name2:'required',
               marks_obtained:'required',
               total_marks:'required'
            },
            messages:{
               exam_name2:'Please enter exam name',
               marks_obtained:'Please enter total obtained marks',
               total_marks:'Please enter total marks'
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
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>
{{-- rules:{
   exam_name2:'required',
   marks_obtained:'required',
   total_marks:'required'
},
messages:{
   exam_name2:'Please enter exam name',
   marks_obtained:'Please enter total obtained marks',
   total_marks:'Please enter total marks'
}, --}}


{{-- 
   let mydata = {
                    student_id:$("#student_id").val(),
                    subject:$("#subject").val(),
                    marks:$("#marks").val(),
                    max_marks:$("#max_marks").val(),
                    exam_name:$("#exam_name").val(),
                    _token:'{{csrf_token()}}'
                }
                console.log(mydata);
                $.ajax({
                type: "POST",             
                url: "add_result_data_of_student",
                data: mydata,
                  
                success: function(response) {
                    console.log(response);
                    $("#subject").val("");
                    $("#marks").val("");
                }
            });
   --}}