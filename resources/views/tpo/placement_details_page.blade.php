<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>PVGCOE - Placement Details</title>
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
                        <a href="#"><i class="fas fa-user-graduate"></i> <span>PVGCOE Placement</span> <span
                            class="menu-arrow"></span></a>
                        <ul>
                           <li><a href="dashboard">Dashboard</a></li>
                            <li><a href="placement_drive_details">Placement Drive Details</a></li>
                            <li><a href="drive_details_table">Drive Details Table</a></li>
                            <li><a href="rank_table">PVG Rank Table</a></li>
                            <li><a href="placed_students_record">Placed Students Record</a></li>


                        </ul>
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
                        <h3 class="page-title">Placement Drive Details</h3>
                        {{-- <ul class="breadcrumb">
                           <li class="breadcrumb-item"><a href="dashboard">Students</a></li>
                           <li class="breadcrumb-item active">Student Connections</li>
                        </ul> --}}
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
                                    <th scope="col"><center>Company Name</center></th>
                                    <th scope="col"><center>Job Role</center></th>
                                    <th scope="col"><center>Salary</center></th>
                                    <th scope="col"><center>Batch</center></th>
                                    <th scope="col"><center>Last Date</center></th>
                                    <th scope="col"><center>Apply Link</center></th>
                                    <th scope="col"><center>Action</center></th>


                                  </tr>
                                </thead>
                                <tbody>
                                    @foreach ($drive_data as $d_data)
                                            <tr>
                                                <td><center>{{$d_data->company_name}}</center></td>
                                                <td><center>{{$d_data->job_role}}</center></td>
                                                <td><center>{{$d_data->salary}}</center></td>
                                                <td><center>{{$d_data->batch}}</center></td>
                                                <td><center>{{$d_data->last_date}}</center></td>
                                                <td><center><a href="{{$d_data->apply_link}}" target="_blank">Apply</a></center></td>
                                                <td>
                                                    <a href="javascript:void(0)" onclick="get_drive_data({{$d_data->id}})" class="btn btn-primary">Edit</a>
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
               

              
                {{-- Modal for Achievements Starts--}}
                <div class="modal fade" id="Update_drive_details_modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-body">
                        <div class="card">
                            <div class="card-header">
                                <center>Update Placement Drive Details</center>
                            </div>                                
                            <div class="card-body">
                                <a id="del_drive" href="#" style="float: right;color: #d01212;"><i class="fas fa-trash-alt"></i> Delete Drive</a>
                                <form action="update_drive_details" method="post" id="update_drive_details">
                                    @csrf
                                    <input type="hidden" name="id" id="drive_id">
                                    <div class="form-group">
                                        <label>Company Name</label>
                                        <input class="form-control" type="text" name="company_name" id="company_name">
                                    </div>
                                    <div class="form-group">
                                        <label>Job Role</label>
                                        <input class="form-control" type="text" name="job_role" id="job_role">
                                    </div>
                                    <div class="form-group">
                                        <label>Salary</label>
                                        <input class="form-control" type="text" name="salary" id="salary">
                                    </div>
                                    <div class="form-group">
                                        <label>Batch</label>
                                        <input class="form-control" type="text" name="batch" id="batch">
                                    </div>
                                    <div class="form-group">
                                        <label>Last Date</label>
                                        <input class="form-control" type="date" name="last_date" id="last_date">
                                    </div>
                                    <div class="form-group">
                                        <label>Apply Link</label>
                                        <input class="form-control" type="url" name="apply_link" id="apply_link">
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
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
      
      <script>
        function get_drive_data(id){
            console.log(id);
            $.get('get_drive_data/'+id , function(response){
                console.log(response);
                $("#drive_id").val(response.p_drive.id);
                $("#company_name").val(response.p_drive.company_name);
                $("#job_role").val(response.p_drive.job_role);
                $("#salary").val(response.p_drive.salary);
                $("#batch").val(response.p_drive.batch);
                $("#last_date").val(response.p_drive.last_date);
                $("#apply_link").val(response.p_drive.apply_link);
                $("#del_drive").attr('href','delete_drive/'+id);
                $("#Update_drive_details_modal").modal('show');
            });
        }
      </script>

    @if (Session::has('success'))
    <script>
        toastr.success(("{!! Session::get('success') !!}"));
    </script>
    @endif

   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/add-student.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->
</html>
