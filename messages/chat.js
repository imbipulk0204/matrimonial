var dbMessages=[];

function printMessages() {
    $('#msgContainer').html("");    
    dbMessages.forEach(message => {//with each iteration message will update
        var side; 
        if(message.sender_id==myid)
        {
            side = " right ";
        }
        else{
            side =" left ";
        }

        $('#msgContainer')
        .append(// add new content with existing content
                "<div class='list-item message "
                +side+
                " '><b> "
                +message.body+
                " </b><br><small> "
                +message.time+
                " </small></div>" 
                
        );    
    });
}
function fetch() {
    console.log("fetching data");//server call
     $.ajax({
        url: "ajaxresponse.php",
        data:{tokenName:api_token,partneridName:partnerid},
        success: 
            function(result){
                var messages =$.parseJSON(result);
                
                if(dbMessages.length !== messages.length){
                    dbMessages = messages;
                    printMessages();
                    console.log(dbMessages);
                    console.log(messages);
                    var $target = $('#msgContainer'); 
                    $target.animate({scrollTop: $target.prop("scrollHeight")}, 500);
                    
                }
            }
    });
   
}

function checkPageOrigin() {
    if (partnerid) {
        fetch();
    }
}
function sendMessage() {
    var myMessage = $('#myMsg').val();
 //alert(myMessage);
    $.ajax({
        url: "ajaxSendMessage.php",
        data:{
            tokenName:api_token,
            partneridName:partnerid,
            messageBody:myMessage,
        },
        success: 
            function(result){
               console.log(result);
               $('#myMsg').val("");
            }
        });
}
$( document ).ready(function() {
    setInterval(() => {
        checkPageOrigin();
    }, 500);    
    
});