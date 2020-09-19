$(document).ready(function(){

    $('#result').hide();
    $('#answer').show();
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.answer').click(function(){
        //alert('ok');
        var question=$(this).data(question);
        var answer=$(this).val();
        var ques=question.question;
        var checkans={
            questionid:ques,
            answer:answer,
        }
        var answerString = localStorage.getItem("answers");
        var answerArray ;
        if(answerString==null){
            answerArray=Array();
        }else{
            answerArray = JSON.parse(answerString);
        }
        var status=false;
        $.each(answerArray,function(i,v){
            if(ques==v.questionid){
                answerArray.splice(i,1);
                answerArray.push(checkans);
                status=true;
            }
        })
        if(status==false){
            answerArray.push(checkans);
        }


        var answerData = JSON.stringify(answerArray);
        localStorage.setItem('answers',answerData);



        
    })

    $('.btnsend').click(function(){
        $('#answer').hide();
        $('#result').show();

        //alert('ok');
        var answerString = localStorage.getItem("answers");
        var answerArray = JSON.parse(answerString);
        var myquestion=JSON.parse($("#myquestion").val());
        //console.log(myquestion);
        //console.log(answerArray);
        var result=0;
        $.post('/answer',{myquestion:myquestion,answerArray:answerArray},function(response){
            if(response){
                //console.log(response);
                var question = response;
                for(var i=0;i<answerArray.length;i++){
                    //console.log(answerArray[i]["answer"]);
                    var qid=answerArray[i]["questionid"];
                    var answer=answerArray[i]["answer"];
                    for(var j=0;j<question.length;j++){
                        //console.log(question[j]["right_answer"]);
                        var questionid=question[j]["question_id"];
                        var rightanswer=question[j]["right_answer"];
                        if(qid==questionid && answer==rightanswer){
                            //alert('ok');
                            result++;
                        }

                    }
                }
                console.log(result);
                localStorage.clear();

                var html='';


                html+=`<tr>
                
                <th>${result}</th>

                </tr>`


                
            }
            if(result>5){


                var ans=confirm("pass");

            }else{
                var ans=confirm("Fail");
            }

            $("#tbody").html(html);


            



})




        })

    })
//        function Quiz(questions) {
//     this.score = 0;
//     this.questions = questions;
//     this.currentQuestionIndex = 0;
// }

// Quiz.prototype.guess = function(answer) {
//     if(this.getCurrentQuestion().isCorrectAnswer(answer)) {
//         this.score++;
//     }
//     this.currentQuestionIndex++;
// };

// Quiz.prototype.getCurrentQuestion = function() {
//     return this.questions[this.currentQuestionIndex];
// };

// Quiz.prototype.hasEnded = function() {
//     return this.currentQuestionIndex >= this.questions.length;
// };
// function Question(text, choices, answer) {
//     this.text = text;
//     this.choices = choices;
//     this.answer = answer;
// }

// Question.prototype.isCorrectAnswer = function (choice) {
//     return this.answer === choice;
// };
// var QuizUI = {
//     displayNext: function () {
//         if (quiz.hasEnded()) {
//             this.displayScore();
//         } else {
//             this.displayQuestion();
//             this.displayChoices();
//             this.displayProgress();
//         }
//     },
//     displayQuestion: function() {
//         this.populateIdWithHTML("question", quiz.getCurrentQuestion().text);
//     },
//     displayChoices: function() {
//         var choices = quiz.getCurrentQuestion().choices;

//         for(var i = 0; i < choices.length; i++) {
//             this.populateIdWithHTML("choice" + i, choices[i]);
//             this.guessHandler("guess" + i, choices[i]);
//         }
//     },
//     displayScore: function() {
//         var gameOverHTML = "<h1>Game Over</h1>";
//         gameOverHTML += "<h2> Your score is: " + quiz.score + "</h2>";
//         this.populateIdWithHTML("quiz", gameOverHTML);
//     },

//     populateIdWithHTML: function(id, text) {
//         var element = document.getElementById(id);
//         element.innerHTML = text;
//     },
//     guessHandler: function(id, guess) {
//         var button = document.getElementById(id);
//         button.onclick = function() {
//             quiz.guess(guess);
//             QuizUI.displayNext();
//         }
//     },

//     displayProgress: function() {
//         var currentQuestionNumber = quiz.currentQuestionIndex + 1;
//         this.populateIdWithHTML("progress", "Question " + currentQuestionNumber + " of " + quiz.questions.length);
//     }
// };


// //Create Quiz
// var quiz = new Quiz(questions);

// //Display Quiz
// QuizUI.displayNext();
// })



