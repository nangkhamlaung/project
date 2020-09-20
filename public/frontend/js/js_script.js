$(document).ready(function(){

    $('#result').hide();
    localStorage.clear();

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
                var questions = question.length;
                
                
                for(var i=0;i<answerArray.length;i++){
                    //console.log(answerArray[i]["answer"]);
                    var answers= answerArray.length;
                    console.log(answers);
                    var qid=answerArray[i]["questionid"];
                    var answer=answerArray[i]["answer"];
                    //var questions = question.lenght;
                    //console.log(questions);
                    for(var j=0;j<question.length;j++){
                        //console.log(question[j]["right_answer"]);

                        var questionid=question[j]["question_id"];
                        var rightanswer=question[j]["right_answer"];
                        if(qid==questionid && answer==rightanswer){
                            //alert('ok');
                            result+=10;
                        }


                    }

                }
                
                var html='';
                if(result<=30){
                    html=`<h4>Thank You,Your IT knowledge is poor!</h4>`
                }else if(result<=80){
                    html=`<h4>Thank You,Your IT knowledge is Normal!</h4>`
                }else if(result<=100){
                    html=`<h4>Thank You,Your IT knowledge is Excellence!</h4>`
                }
                console.log(html);
                

                var remaining = (questions-answers);
                //console.log(remaining);
                //console.log(result);
                $('.tfoot').html(html);
                $('.result').text(result);
                $('.qus').text(questions);
                $('.ans').text(answers);
                $('.remain').text(remaining);
                localStorage.clear();
            }
      
        })
    
    })

})