/* Created and coded by Abhilash Narayan */
/* Quiz source: w3schools.com */
var quiz = {
    "Python": [
        {
            "id": 1,
            "question": "Which module in the python standard library parses options received from the command line?",
            "options": [
                {
                    "a": "getarg",
                    "b": "getopt",
                    "c": "main",
                    "d": "os"
                }
            ],
            "answer": "getopt",
            "score": 0,
            "status": ""
        },
        {
            "id": 2,
            "question": "What will be the output of this : print('abc. DEF'.capitalize())",
            "options": [
                {
                    "a": "Abc. def",
                    "b": "abc. def",
                    "c": "Abc. Def",
                    "d": "ABC. DEF"
                }
            ],
            "answer": "Abc. def",
            "score": 0,
            "status": ""
        },
        {
            "id": 3,
            "question": "Where is the correct extension for python",
            "options": [
                {
                    "a": ".py",
                    "b": ".pyc",
                    "c": ".Python",
                    "d": ".java"
                }
            ],
            "answer": ".py",
            "score": 0,
            "status": ""
        },
        {
            "id": 4,
            "question": "All keywords in Python are in _________",
            "options": [
                {
                    "a": "Capitalized",
                    "b": "lower case",
                    "c": "UPPER CASE",
                    "d": "None of the mentioned"
                }
            ],
            "answer": "None of the mentioned",
            "score": 0,
            "status": ""
        },
        {
            "id": 5,
            "question": "Which of the following is used to define a block of code in Python language?",
            "options": [
                {
                    "a": "Indentation",
                    "b": "Key",
                    "c": "Brackets",
                    "d": "All of the mentioned"
                }
            ],
            "answer": "Indentation",
            "score": 0,
            "status": ""
        },
        {
            "id": 6,
            "question": "Which keyword is used for function in Python language?",
            "options": [
                {
                    "a": "Function",
                    "b": "def",
                    "c": "Fun",
                    "d": "Define"
                }
            ],
            "answer": "def",
            "score": 0,
            "status": ""
        },
        {
            "id": 7,
            "question": "Which of the following functions can help us to find the version of python that we are currently working on?",
            "options": [
                {
                    "a": "sys.version(1)",
                    "b": "sys.version(0)",
                    "c": "sys.version()",
                    "d": "sys.version"
                }
            ],
            "answer": "sys.version",
            "score": 0,
            "status": ""
        },
        {
            "id": 8,
            "question": "What is the order of precedence in python?",
            "options": [
                {
                    "a": "Exponential, Parentheses, Multiplication, Division, Addition, Subtraction",
                    "b": "Exponential, Parentheses, Division, Multiplication, Addition, Subtraction",
                    "c": "Parentheses, Exponential, Multiplication, Division, Subtraction, Addition",
                    "d": "Parentheses, Exponential, Multiplication, Division, Addition, Subtraction"
                }
            ],
            "answer": "Parentheses, Exponential, Multiplication, Division, Addition, Subtraction",
            "score": 0,
            "status": ""
        },
        {
            "id": 9,
            "question": "Which of the following is the truncation division operator in Python?",
            "options": [
                {
                    "a": "|",
                    "b": "//",
                    "c": "/",
                    "d": "%"
                }
            ],
            "answer": "//",
            "score": 0,
            "status": ""
        },
        {
            "id": 10,
            "question": "Which of the following is not a core data type in Python programming?",
            "options": [
                {
                    "a": "Tuples",
                    "b": "Lists",
                    "c": "Class",
                    "d": "Dictionary"
                }
            ],
            "answer": "Class",
            "score": 0,
            "status": ""
        }
    ]
}
var quizApp = function () {
    this.score = 0;
    this.qno = 1;
    this.currentque = 0;
    // var myResult = PythonON.parse(window.skill);
    // var Pythonon = PythonON.parse(quiz);
    console.log(typeof skill);
    this.myskill = skill;
    var totalque = quiz.Python.length;
    console.log(totalque);
    this.displayQuiz = function (cque) {
        this.currentque = cque;
        if (this.currentque < totalque) {
            $("#tque").html(totalque);
            $("#previous").attr("disabled", false);
            $("#next").attr("disabled", false);
            $("#qid").html(quiz.Python[this.currentque].id + '.');
            $("#question").html(quiz.Python[this.currentque].question);
            $("#question-options").html("");
            for (var key in quiz.Python[this.currentque].options[0]) {
                if (quiz.Python[this.currentque].options[0].hasOwnProperty(key)) {
                    $("#question-options").append(
                        "<div class='form-check option-block'>" +
                        "<label class='form-check-label'>" +
                        "<input type='radio' class='form-check-input' name='option' id='q" + key + "' value='" + quiz.Python[this.currentque].options[0][key] + "'><span id='optionval'>" +
                        quiz.Python[this.currentque].options[0][key] +
                        "</span></label>"
                    );
                }
            }
        }
        if (this.currentque <= 0) {
            $("#previous").attr("disabled", true);
        }
        if (this.currentque >= totalque) {
            $('#next').attr('disabled', true);
            for (var i = 0; i < totalque; i++) {
                this.score = this.score + quiz.Python[i].score;
            }
            return this.showResult(this.score);
        }
    }
    this.showResult = function (scr) {
        console.log(scr);
        $("#result").addClass('result');
        $("#result").html("<h1 class='res-header'>Total Score: &nbsp;" + scr + '/' + totalque + "</h1>");
        for (var j = 0; j < totalque; j++) {
            var res;
            if (quiz.Python[j].score == 0) {
                res = '<span class="wrong">' + quiz.Python[j].score + '</span><i class="fa fa-remove c-wrong"></i>';
            } else {
                res = '<span class="correct">' + quiz.Python[j].score + '</span><i class="fa fa-check c-correct"></i>';
            }
            $("#result").append(
                '<div class="result-question"><span>Q ' + quiz.Python[j].id + '</span> &nbsp;' + quiz.Python[j].question + '</div>' +
                '<div><b>Correct answer:</b> &nbsp;' + quiz.Python[j].answer + '</div>' +
                '<div class="last-row"><b>Score:</b> &nbsp;' + res +
                '</div>'
            );
            
        }
        $("#result").append(
            "<a href='new_student_skill_badge_page/"+scr+"' class='btn btn-primary'>Back to Skill Page</a>"
        );
        return this.send_data_to_controller(scr,this.myskill);
        }
    this.checkAnswer = function (option) {
        var answer = quiz.Python[this.currentque].answer;
        option = option.replace(/</g, "&lt;") //for <
        option = option.replace(/>/g, "&gt;") //for >
        option = option.replace(/"/g, "&quot;")
        if (option == quiz.Python[this.currentque].answer) {
            if (quiz.Python[this.currentque].score == "") {
                quiz.Python[this.currentque].score = 1;
                quiz.Python[this.currentque].status = "correct";
            }
        } else {
            quiz.Python[this.currentque].status = "wrong";
        }
    }
    this.changeQuestion = function (cque) {
        this.currentque = this.currentque + cque;
        this.displayQuiz(this.currentque);
    }
    this.send_data_to_controller = function (c_skill, c_score) {
        $.get('send_result_data_to_controller/'+c_skill+'/'+c_score, function(response){
            console.log(response);
        });
    }
}
var Pythonq = new quizApp();
var selectedopt;
$(document).ready(function () {
    Pythonq.displayQuiz(0);
    $('#question-options').on('change', 'input[type=radio][name=option]', function (e) {
        //var radio = $(this).find('input:radio');
        $(this).prop("checked", true);
        selectedopt = $(this).val();
    });
});
$('#next').click(function (e) {
    e.preventDefault();
    if (selectedopt) {
        Pythonq.checkAnswer(selectedopt);
    }
    Pythonq.changeQuestion(1);
});
$('#previous').click(function (e) {
    e.preventDefault();
    if (selectedopt) {
        Pythonq.checkAnswer(selectedopt);
    }
    Pythonq.changeQuestion(-1);
});
