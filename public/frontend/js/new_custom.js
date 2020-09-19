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
                

            }
        });
    });


});
