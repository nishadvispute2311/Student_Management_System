<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$current_skill}} Quiz</title>
    <link rel="stylesheet" href="assets/css/test_style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
</head>

<body>
    <header class="header bg-primary">
        <div class="left-title">{{$current_skill}} Quiz</div>
        <div class="right-title">Total Questions: <span id="tque"></span></div>
        <div class="clearfix"></div>
    </header>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div id="result" class="quiz-body">
                        <form name="quizForm" onSubmit="">
                            <fieldset class="form-group">
                                <h4><span id="qid">1.</span> <span id="question"></span></h4>
                                <div class="option-block-container" id="question-options">
                                </div> <!-- End of option block -->
                            </fieldset>
                            <button name="previous" id="previous" class="btn btn-success">Previous</button>
                            &nbsp;
                            <button name="next" id="next" class="btn btn-success">Next</button>
                        </form>
                        {{-- <button class="btn btn-primary">Back to Skill Page</button>                         --}}
                    </div>
                </div> <!-- End of col-sm-12 -->
            </div> <!-- End of row -->
        </div> <!-- ENd of container fluid -->
    </div> <!-- End of content -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/js/bootstrap.min.js"></script>
    <script>
       var skill = '{{$skill}}';
    </script>
    <script src="assets/js/skill_test_js_files/{{$skill}}_ques.js"></script>
</body>

</html>

{{-- 
    // {
        //     "id": 3,
        //     "question": "What is the correct syntax for referring to an external script called 'xxx.js'?",
        //     "options": [
        //         {
        //             "a": "&ltscript href=&quot;xxx.js&quot;>",
        //             "b": "&lt;script name=&quot;xxx.js&quot;&gt;",
        //             "c": "&lt;script src=&quot;xxx.js&quot;&gt;"
        //         }
        //     ],
        //     "answer": "&lt;script src=&quot;xxx.js&quot;&gt;",
        //     "score": 0,
        //     "status": ""
        // },
        // {
        //     "id": 4,
        //     "question": "The external JavaScript file must contain the &lt;script&gt; tag.",
        //     "options": [
        //         {
        //             "a": "True",
        //             "b": "False"
        //         }
        //     ],
        //     "answer": "False",
        //     "score": 0,
        //     "status": ""
        // },
        // {
        //     "id": 5,
        //     "question": "How do you write &quot;Hello World&quot; in an alert box?",
        //     "options": [
        //         {
        //             "a": "alertBox(&quot;Hello World&quot;);",
        //             "b": "msg(&quot;Hello World&quot;);",
        //             "c": "alert(&quot;Hello World&quot;);",
        //             "d": "msgBox(&quot;Hello World&quot;);",
        //         }
        //     ],
        //     "answer": "alert(&quot;Hello World&quot;);",
        //     "score": 0,
        //     "status": ""
        // },
        // {
        //     "id": 6,
        //     "question": "How do you create a function in JavaScript?",
        //     "options": [
        //         {
        //             "a": "function myFunction()",
        //             "b": "function:myFunction()",
        //             "c": "function = myFunction()",
        //         }
        //     ],
        //     "answer": "function myFunction()",
        //     "score": 0,
        //     "status": ""
        // },
        // {
        //     "id": 7,
        //     "question": "How do you call a function named &quot;myFunction&quot;?",
        //     "options": [
        //         {
        //             "a": "call function myFunction()",
        //             "b": "call myFunction()",
        //             "c": "myFunction()",
        //         }
        //     ],
        //     "answer": "myFunction()",
        //     "score": 0,
        //     "status": ""
        // },
        // {
        //     "id": 8,
        //     "question": "How to write an IF statement in JavaScript?",
        //     "options": [
        //         {
        //             "a": "if i = 5 then",
        //             "b": "if i == 5 then",
        //             "c": "if (i == 5)",
        //             "d": " if i = 5",
        //         }
        //     ],
        //     "answer": "if (i == 5)",
        //     "score": 0,
        //     "status": ""
        // },
        // {
        //     "id": 9,
        //     "question": "Which of the following is a disadvantage of using JavaScript?",
        //     "options": [
        //         {
        //             "a": "Client-side JavaScript does not allow the reading or writing of files.",
        //             "b": "JavaScript can not be used for Networking applications because there is no such support available.",
        //             "c": "JavaScript doesn't have any multithreading or multiprocess capabilities.",
        //             "d": "All of the above."
        //         }
        //     ],
        //     "answer": "All of the above.",
        //     "score": 0,
        //     "status": ""
        // },
        // {
        //     "id": 10,
        //     "question": "How to write an IF statement for executing some code if &quot;i&quot; is NOT equal to 5?",
        //     "options": [
        //         {
        //             "a": "if (i <> 5)",
        //             "b": "if i <> 5",
        //             "c": "if (i != 5)",
        //             "d": "if i =! 5 then",
        //         }
        //     ],
        //     "answer": "if (i != 5)",
        //     "score": 0,
        //     "status": ""
        // } --}}