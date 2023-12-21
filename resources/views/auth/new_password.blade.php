<!DOCTYPE html>
<html lang="en">
   <!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:39 GMT -->
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
      <title>PVGCOE - New Password</title>
      <link rel="shortcut icon" href="/iotsms/public/assets/img/pvg_logo.jpg">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <link rel="stylesheet" href="/iotsms/public/assets/plugins/bootstrap/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
      <link rel="stylesheet" href="/iotsms/public/assets/plugins/fontawesome/css/fontawesome.min.css">
      <link rel="stylesheet" href="/iotsms/public/assets/plugins/fontawesome/css/all.min.css">
      <link rel="stylesheet" href="/iotsms/public/assets/css/style.css">
      
   </head>
   <body>
      <div class="main-wrapper login-body">
         <div class="login-wrapper">
            <div class="container">
               <div class="loginbox">
                  <div class="login-left">
                     {{-- <img class="img-fluid" src="assets/img/pvgcoen-logo.jpeg" alt="Logo"> --}}
                  </div>
                  <div class="login-right">
                     <div class="login-right-wrap">
                        <h1>New Password</h1>
                        <p class="account-subtitle">Set new password for account</p>
                        <form action="/iotsms/public/updatepdindb" method="post">
                           @csrf
                           <input type="hidden" value="{{$user_id}}" name="id">
                           <div class="form-group">
                              <input class="form-control" type="password" placeholder="New Password" name="password">
                              <span class="text-danger">
                                 @error('password')
                                     {{$message}}
                                 @enderror
                             </span>
                           </div>
                           <div class="form-group">
                              <input class="form-control" type="password" placeholder="Confirm Password" name="password_confirmation">
                           </div>
                           <div class="form-group">
                              <button class="btn btn-primary btn-block" type="submit">Submit</button>
                           </div>
                        </form>
                        {{-- <div class="text-center forgotpass"><a href="forgot-password">Forgot Password?</a></div> --}}
                        <div class="login-or">
                           <span class="or-line"></span>
                           {{-- <span class="span-or">or</span> --}}
                        </div>
                        {{-- <div class="social-login">
                           <span>Login with</span>
                           <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a><a href="#" class="google"><i class="fab fa-google"></i></a>
                        </div> --}}
                        <div class="text-center dont-have">Back to Login Page? <a href="login">Login</a></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <script src="/iotsms/public/assets/js/jquery-3.6.0.min.js"></script>
      <script src="/iotsms/public/assets/js/popper.min.js"></script>
      <script src="/iotsms/public/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="/iotsms/public/assets/js/script.js"></script>
   </body>
   <!-- Mirrored from preschool.dreamguystech.com/html-template/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:40 GMT -->

   @if (Session::has('success'))
   <script>
       toastr.success(("{!! Session::get('success') !!}"));
   </script>
   @endif

   @if (Session::has('fail'))
   <script>
       toastr.error(("{!! Session::get('fail') !!}"));
   </script>
   @endif

</html>