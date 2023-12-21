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
    <title>{{$student_details->student_name}} Result</title>
    <style>
        p{
            margin-bottom: 0px;
        }
    </style>
</head>
<body>
    {{-- <div class="container"> --}}
        <div class="card" style="    margin-top: 20px;">
            <div class="card-header">
                <center><h3>Pune Vidyarthi Griha's College of Engineering, Nashik</h3></center>
            </div>
            <div class="card-body">
                {{-- <h6>Name : <b>{{$student_details->student_name}}</b></h6>
                <h6>Student ID : <b>{{$student_details->student_id}}</b></h6>
                <h6>Class : <b>{{$student_details->class}}</b></h6>
                <h6>Branch : <b>{{$student_details->department}}</b></h6>
                <h6>Exam Name : <b>{{$result_particular_data->exam_name}}</b></h6>
                <h6>Marks : <b>{{$result_particular_data->max_marks}}</b></h6><br> --}}
                {{-- <h6>Name : <b>Nishad Vispute</b></h6>
                <h6>Student ID : <b>NS653723V</b></h6>
                <h6>Class : <b>BE</b></h6>
                <h6>Branch : <b>E&TC</b></h6>
                <h6>Exam Name : <b>Insem</b></h6>
                <h6>Marks : <b>30</b></h6><br> --}}

                <p>Name : <b>{{$student_details->student_name}}</b></p>
                <p>ID : <b>{{$student_details->student_id}}</b></p>
                <p>Class : <b>{{$student_details->class}}</b></p>
                <p>Branch : <b>{{$student_details->department}}</b></p>
                <p>Exam Name : <b>{{$result_particular_data->exam_name}}</b></p>
                <p>Marks : <b>{{$result_particular_data->max_marks}}</b></p><br>


                {{-- Student ID : <b>NS653723V</b>
                Class : <b>BE</b>
                Branch : <b>E&TC</b>
                Exam Name : <b>Insem</b>
                Marks : <b>30</b> --}}
                



                 <table class="table">
                     <thead>
                       <tr>
                         <th scope="col"><center>Sr. No.</center></th>
                         <th scope="col"><center>Subject</center></th>
                         <th scope="col"><center>Marks Obtained</center></th>
                         <th scope="col"><center>Total Marks</center></th>
                       </tr>
                     </thead>
                     <tbody>
                       <?php $i = 0 ?>
                       @foreach ($result_data as $res_data)
                         <?php $i++ ?>
                               <tr>
                                  <td><center>{{$i}}</center></td>
                                  <td><center>{{$res_data->subject}}</center></td>
                                  <td><center>{{$res_data->marks}}</center></td>
                                  <td><center>{{$res_data->max_marks}}</center></td>
                                  

                               </tr>
                            
                       @endforeach
                       <tfoot>
                         <td><center></center></td>
                         <td><center><b>Total</b></center></td>
                         <td><center><b>{{$total_obtained_marks}}</b></center></td>
                         <td><center><b>{{$total_marks}}</b></center></td>



                       </tfoot>
                       
                       
                     </tbody>
                   </table><br>
                   <h6>Percentage : <b>{{$percent}}%</b></h6>
                   <h6>Result : <b>{{$status}}</b></h6>

               
             </div>
        </div>
    {{-- </div> --}}
</body>
</html>