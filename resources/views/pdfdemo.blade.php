<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>{{$student_data->student_name}}</title>

   <style>
      *{
         padding: 0px;
         margin: 0px;
      }
      .outer{
         width: 700px;
         height: 800px;
         margin: 0px auto;
      }
      .outer h1{
         text-align: center;
      }
      p{
         font-size: 20px;
      }
      .border{
         width: 100%;
         padding: 5px;
         background-color: #9ea5a5;
         border: 1px solid black;
         font-weight: bold;

      }
      ul{
         font-size: 20px;
         margin-left: 50px;

      }

   </style>
</head>
<body>
   <div class="outer">
      <br>
      <br>
      <h1>RESUME</h1>
      <br>
      <p>
         <b>{{$student_data->student_name}}</b><br>
         {{$student_data->linkedin_link}} <br>
         {{$student_data->github_link}} <br>
         <b>Mob</b> : {{$student_data->student_number}} <br>
         <b>Email</b> : {{$student_data->student_email}}
      </p>
      <br>
      <hr>
      <hr>
      <br>
      <div class="border">
         <i>CAREER OBJECTIVE</i>
      </div><br>
      <p>{{$student_data->summary}}</p><br>

      <div class="border">
         <i>TECHNICAL SKILLS</i>
      </div>
      <br>
      <ul>
         @foreach ($skill_data as $s_data)
            <li>{{$s_data->skill}}</li>
         @endforeach
         {{-- <li>Laravel</li>
         <li>Database Management System</li>
         <li>PHP, Jquery</li>
         <li>Object Oriented Programming</li>
         <li>Data Structures and Algorithms</li>
         <li>Node.JS</li> --}}
      </ul><br>

      {{-- <div class="border">
         <i>EDUCATIONAL QUALIFICATIONS</i>
      </div>
      <br>
      <ul>
         <li><b>SSC</b> | Nav Rachna English Medium School | Grade : 92%</li>
         <li><b>HSC</b> | HPT Arts and RYK Science College | Grade : 78.15%</li>
         <li><b>BE (E&TC)</b> | PVG College Of Engineering, Nashik | Grade : 9.29</li>

      </ul>
      <br> --}}

      <div class="border">
         <i>EXPERIENCE</i>
      </div>
      <br>
      <ul>
         @foreach ($work_data as $w_data)
             
            <li>
               <h3 style="margin-bottom: 5px">{{$w_data->company_name}}</h3>
               <p style="margin-bottom: 5px"><b>Job Role :</b> {{$w_data->job_role}}</p>
               <p><b>Description : </b>{{$w_data->job_description}}</p>
               
            </li>
            <br>
            <hr>
            <hr>
            <br>

         @endforeach
      </ul>
      <br>

      <div class="border">
         <i>CERTIFICATIONS</i>
      </div>
      <br>
      <ul>
         @foreach ($certificate_data as $c_data)
             
            <li>
               <h3 style="margin-bottom: 5px">{{$c_data->certificate_name}}</h3>
               <p style="margin-bottom: 5px">{{$c_data->issued_by}}</p>
               <p><b>Issued on : </b>{{$c_data->issued_date}}</p>
            </li>
            <br>
            <hr>
            <hr>
            <br>

         @endforeach

      </ul>
      <br>

      <div class="border">
         <i>PROJECTS</i>
      </div>
      <br>
      <ul>
         @foreach ($project_data as $p_data)
         
            <li>
               <h3 style="margin-bottom: 5px">{{$p_data->project_name}}</h3>
               <p style="margin-bottom: 5px"><b>Technology Used :</b> {{$p_data->project_technology}}</p>
               <p><b>Description : </b>{{$p_data->project_description}}</p>
               
            </li>
            <br>
            <hr>
            <hr>
            <br>

         @endforeach
        
      </ul>
      <br>
      










   </div>
</body>
</html>