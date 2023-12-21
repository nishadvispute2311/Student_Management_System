<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Fee Payment E-Receipt</title>
    <style>
        p{
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    {{-- <div class="container"> --}}
        <div class="card" style="    margin-top: 20px;">
            {{-- <div class="card-header">
                <center><h2>Pune Vidyarthi Griha's College of Engineering, Nashik</h2></center>
            </div> --}}
            <div class="card-body">
                <center><h4>Academic Year 2023-24 Fee Receipt</h4></center>

                <p>Invoice No : <b>R{{$invoice_number}}</b></p>
                <p>Name : <b>{{$student_details->student_name}}</b></p>
                <p>ID : <b>{{$student_details->student_id}}</b></p>
                <p>Class : <b>{{$student_details->class}}</b></p>
                <p>Branch : <b>{{$student_details->department}}</b></p>
                <p>Category : <b>{{$category}}</b></p><br>
                


                 <table class="table">
                     <thead>
                       <tr>
                         <th scope="col"><center>Sr. No.</center></th>
                         <th scope="col"><center>Particular</center></th>
                         <th scope="col"><center>Amount (in Rs)</center></th>
                       </tr>
                     </thead>
                     <tbody>
                      
                               <tr>
                                  <td><center>1</center></td>
                                  <td><center>Tuition Fees</center></td>
                                  <td><center>{{$tuition_fee}}</center></td>                                  
                               </tr>

                               <tr>
                                <td><center>2</center></td>
                                <td><center>Development Fees</center></td>
                                <td><center>{{$development_fee}}</center></td>                                  
                               </tr>

                                <tr>
                                  <td><center>3</center></td>
                                  <td><center>Examination Fee</center></td>
                                  <td><center>{{$exam_fee}}</center></td>                                  
                              </tr>

                              <tr>
                                <td><center>4</center></td>
                                <td><center>University Charges</center></td>
                                <td><center>{{$university_fee}}</center></td>                                  
                            </tr>

                            <tr>
                              <td><center>5</center></td>
                              <td><center>Extra Curricular</center></td>
                              <td><center>{{$extra_curricular}}</center></td>                                  
                          </tr>
                            
                       <tfoot>
                         <td><center></center></td>
                         <td><center><b>Total</b></center></td>
                         <td><center><b>{{$total_fee}}</b></center></td>
                       </tfoot>
                       
                       
                     </tbody>
                   </table><br>
                   <h6>Date : <b>{{$date_of_fee_payment}}</b></h6>
                   <h6>Time : <b>{{$time_of_fee_payment}}</b></h6>

               
             </div>
        </div>
    {{-- </div> --}}
</body>
</html>