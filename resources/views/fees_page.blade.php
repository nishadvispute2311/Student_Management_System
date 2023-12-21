<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:49 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>MyEduPortal - Fees Payment</title>

    <link rel="shortcut icon" href="assets/img/pvg_logo.jpg">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,600;0,700;1,400&amp;display=swap">


    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/plugins/fontawesome/css/all.min.css">

    <link rel="stylesheet" href="assets/plugins/datatables/datatables.min.css">

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/payment.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    {{-- <style>
        .error {
            color: red;
            width: 100%;
        }
    </style> --}}

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
                        <i class="far fa-bell"></i> <span id="noti_count_text" class="badge badge-pill">0</span>
                    </a>

                </li>


                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                        <span class="user-img"><img class="rounded-circle"
                                src="{{asset('all_users_profile_images')}}/{{$user_data1->image}}" style="height: 40px;
                            width: 40px;" alt="Ryan Taylor"></span>
                    </a>
                    <div class="dropdown-menu">
                        <div class="user-header">
                            <div class="avatar avatar-sm">
                                <img src="{{asset('all_users_profile_images')}}/{{$user_data1->image}}" alt="User Image"
                                    class="avatar-img rounded-circle" style="height: 40px;
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
                            <a href="#"><i class="fas fa-user-graduate"></i> <span> Students</span> <span
                                    class="menu-arrow"></span></a>
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
                            <a href="exam_schedule"><i class="fas fa-clipboard-list"></i> <span>Exam Time
                                    Table</span></a>
                        </li>

                        <li>
                            <a href="student_result"><i class="fas fa-table"></i> <span>Results</span></a>
                        </li>

                        <li>
                            <a href="placement_drive"><i class="fas fa-calendar-day"></i> <span>Placement
                                    Drive</span></a>
                        </li>
                        <li>
                            <a href="placed_students_details"><i class="fas fa-calendar-day"></i> <span>Placement
                                    Details Upload</span></a>

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
                            <h3 class="page-title" style="margin-bottom: 15px">Fee Payment</h3>
                            <ul>
                                {{-- <li>Training and Placement Officer : <b>{{$user_data1->fname}}
                                        {{$user_data1->lname}}</b></li>
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



                                    <div class="row">
                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Academic Year</label>
                                                <input type="text" name="academic_year" id="academic_year"
                                                    class="form-control" value="2023-24" readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Branch</label>
                                                <input type="text" name="branch" id="branch" class="form-control"
                                                    value="{{$student_data->department}}" readonly>
                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select class="form-control" name="category" id="category"
                                                    onchange="feesForCategory(this.value)" required>
                                                    <option value="">Select Category</option>
                                                    <option>Open</option>
                                                    <option>OBC</option>
                                                    <option>SC</option>
                                                    <option>ST</option>
                                                </select>

                                            </div>
                                        </div>

                                        <div class="col-12 col-sm-6">
                                            <div class="form-group">
                                                <label>Amount (INR)</label>
                                                <div>
                                                    <input type="text" class="form-control" name="fee" id="fee"
                                                        value="0.00" readonly>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <center><button id="payment_proceed_button" class="btn btn-primary">Proceed
                                                    To
                                                    Pay</button></center>
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


    {{-- Modal for Payment Starts--}}
    {{-- <div class="modal fade" id="Make_Payment_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-75">
                            <div class="container">
                                <form action="send_payment" method="post">

                                    <div class="row">

                                        <div class="col-50">
                                            <center>
                                                <h4>Accepted Cards</h4>
                                                <div class="icon-container">
                                                    <i class="fa fa-cc-visa" style="color:navy;"></i>
                                                    <i class="fa fa-cc-amex" style="color:blue;"></i>
                                                    <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                                    <i class="fa fa-cc-discover" style="color:orange;"></i>
                                                    <i class="fa fa-cc-paypal" style="color:rgb(115, 115, 182);"></i>

                                                </div>
                                            </center>
                                            <label for="cname">Cardholder Name</label>
                                            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
                                            <label for="ccnum">Card number</label>
                                            <input type="text" id="ccnum" name="cardnumber"
                                                placeholder="1111-2222-3333-4444">
                                            <label for="expmonth">Exp Month</label>
                                            <input type="text" id="expmonth" name="expmonth" placeholder="Eg : 11">
                                            <div class="row">
                                                <div class="col-50">
                                                    <label for="expyear">Exp Year</label>
                                                    <input type="text" id="expyear" name="expyear"
                                                        placeholder="Eg : 2018">
                                                </div>
                                                <div class="col-50">
                                                    <label for="cvv">CVV</label>
                                                    <input type="text" id="cvv" name="cvv" placeholder="Eg : 352">
                                                </div>
                                            </div>
                                            <label for="cname">Amount</label>
                                            <input type="text" id="final_amount" name="final_amount" value="" readonly>
                                        </div>

                                    </div>
                                    <input type="submit" id="final_payment_button" value="Continue to checkout"
                                        class="btn1">
                                </form>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div> --}}
    {{-- Modal for Payments Ends--}}

    <div class="modal fade" id="Make_Payment_modal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-75">
                            <div class="container">
                                <div class="panel-body">
    
                                    {{-- @if (Session::has('success'))
                                        <div class="alert alert-success text-center">
                                            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
                                            <p>{{ Session::get('success') }}</p>
                                        </div>
                                    @endif --}}
                                    <center>
                                        <h4>Accepted Cards</h4>
                                        <div class="icon-container">
                                            <i class="fa fa-cc-visa" style="color:navy;"></i>
                                            <i class="fa fa-cc-amex" style="color:blue;"></i>
                                            <i class="fa fa-cc-mastercard" style="color:red;"></i>
                                            <i class="fa fa-cc-discover" style="color:orange;"></i>
                                            <i class="fa fa-cc-paypal" style="color:rgb(115, 115, 182);"></i>

                                        </div>
                                    </center>
                    
                                    <form 
                                            role="form" 
                                            action="send_payment" 
                                            method="post" 
                                            class="require-validation"
                                            data-cc-on-file="false"
                                            data-stripe-publishable-key="{{ env('STRIPE_KEY') }}"
                                            id="payment-form">
                                        @csrf
                    
                                        <div class='form-row row'>
                                            <div class='col-xs-12 form-group required'>
                                                <label class='control-label'>Name on Card</label> <input
                                                    class='form-control' name="cardholder_name" size='4' type='text'>
                                                    
                                            </div>
                                        </div>
                    
                                        <div class='form-row row'>
                                            <div class='col-xs-12 form-group card1 required'>
                                                <label class='control-label'>Card Number</label> <input
                                                    autocomplete='off' class='form-control card-number' size='20'
                                                    type='text'>
                                                    
                                            </div>
                                        </div>

                                        <div class="form-row row">
                                            <div class='col-xs-12 form-group amount'>
                                                <label class='control-label'>Total Amount</label> <input
                                                    class='form-control total_amount' name="total_amount" size='4'
                                                    type='text' readonly>
                                            </div>
                                        </div>
                                        <input
                                                    class='form-control category' name="category" size='4'
                                                    type='hidden'>

                                                    <input
                                                    class='form-control academic_year1' name="academic_year1" size='4'
                                                    type='hidden'>

                                        
                    
                                        <div class='form-row row'>
                                            <div class='col-xs-12 col-md-4 form-group cvc required'>
                                                <label class='control-label'>CVC</label> <input autocomplete='off'
                                                    class='form-control card-cvc' placeholder='ex. 311' size='4'
                                                    type='text'>
                                            </div>
                                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Expiration Month</label> <input
                                                    class='form-control card-expiry-month' placeholder='MM' size='2'
                                                    type='text'>
                                            </div>
                                            <div class='col-xs-12 col-md-4 form-group expiration required'>
                                                <label class='control-label'>Expiration Year</label> <input
                                                    class='form-control card-expiry-year' placeholder='YYYY' size='4'
                                                    type='text'>
                                            </div>
                                            
                                        </div>
                    
                                        {{-- <div class='form-row row'>
                                            <div class='col-md-12 error form-group hide'>
                                                <div class='alert-danger alert'>Please correct the errors and try
                                                    again.</div>
                                            </div>
                                        </div> --}}
                    
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <button class="btn btn-primary btn-lg btn-block" type="submit">Pay Now</button>
                                            </div>
                                        </div>
                                            
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div>

                        <center style="margin-top: 10px;"><i>Payment Gateway is Powered By </i><a id="poweredby" href="#">NishPay</a></center>
                    </div>
                </div>
            </div>
        </div>
    </div>






    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <script src="assets/js/jquery-3.6.0.min.js"></script>

    <script src="assets/js/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

    <script src="assets/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <script src="assets/js/script.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    {{--
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"
        integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" src="https://js.stripe.com/v2/"></script>

    <script>
        $(function () {

            /*------------------------------------------
            --------------------------------------------
            Stripe Payment Code
            --------------------------------------------
            --------------------------------------------*/

            var $form = $(".require-validation");

            $('form.require-validation').bind('submit', function (e) {
                var $form = $(".require-validation"),
                inputSelector = ['input[type=email]', 'input[type=password]',
                        'input[type=text]', 'input[type=file]',
                        'textarea'].join(', '),
                $inputs = $form.find('.required').find(inputSelector),
                $errorMessage = $form.find('div.error'),
                valid = true;
                $errorMessage.addClass('hide');

                $('.has-error').removeClass('has-error');
                $inputs.each(function (i, el) {
                    var $input = $(el);
                    if ($input.val() === '') {
                        $input.parent().addClass('has-error');
                        $errorMessage.removeClass('hide');
                        e.preventDefault();
                    }
                });

                if (!$form.data('cc-on-file')) {
                    e.preventDefault();
                    Stripe.setPublishableKey($form.data('stripe-publishable-key'));
                    Stripe.createToken({
                        number: $('.card-number').val(),
                        cvc: $('.card-cvc').val(),
                        exp_month: $('.card-expiry-month').val(),
                        exp_year: $('.card-expiry-year').val()
                    }, stripeResponseHandler);
                }

            });

            /*------------------------------------------
            --------------------------------------------
            Stripe Response Handler
            --------------------------------------------
            --------------------------------------------*/
            function stripeResponseHandler(status, response) {
                if (response.error) {
                    $('.error')
                        .removeClass('hide')
                        .find('.alert')
                        .text(response.error.message);
                } else {
                    /* token contains id, last4, and card type */
                    var token = response['id'];

                    $form.find('input[type=text]').empty();
                    $form.append("<input type='hidden' name='stripeToken' value='" + token + "'/>");
                    $form.get(0).submit();
                }
            }

        });
    </script>
    <script>

        $("#payment_proceed_button").click(function () {
            var amount = $("#fee").val();
            var category = $("#category").val();
            var academic_year = $("#academic_year").val();

            console.log('click ho gaya bhai' + amount);

            $(".total_amount").val(amount);
            $(".category").val(category);
            $(".academic_year1").val(academic_year);
            $("#Make_Payment_modal").modal('show');
        });

        function feesForCategory(val) {
            console.log('change ho gaya bhai ' + val);
            if (val == "Open") {
                var tot_fee = "74483";
            }
            else if (val == "OBC") {
                var tot_fee = "44483";
            }
            else if (val == "SC") {
                var tot_fee = "25483";
            }
            else {
                var tot_fee = "15483";
            }
            $("#fee").val(tot_fee);
        }


        // $("#fee_details").validate({
        //     rules:{
        //         category:'required',
        //     },
        //     messages:{
        //         category:'Please select your category',
        //     },
        //     submitHandler:function(form){
        //         form.submit();
        //     }
        // });
    </script>

    @if (Session::has('success'))
    <script>
        toastr.success(("{!! Session::get('success') !!}"));
    </script>
    @endif





</body>

<!-- Mirrored from preschool.dreamguystech.com/html-template/student-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 28 Oct 2021 11:11:50 GMT -->

</html>