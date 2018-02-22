
$("button#submit").click(function(){

if( $("#username").val()=="" || $("#password").val()==""){
	$("p#ack").html("Please enter the username and password");
}
else{
	$.post( $("#myform").attr("action"),
            $("#myform").serializeArray(),
    function(data){

    	$("p#ack").html(data);
    });
    }


$("#myform").submit(function(){
	return false;
});
});

