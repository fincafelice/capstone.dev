<!DOCTYPE html>
<html lang="en">

<head>
	$(document).ready(function () {
    $("input#submit").click(function(){
        $.ajax({
            type: "POST",
            url: "process.php", //process to mail
            data: $('form.contact').serialize(),
            success: function(msg){
                $("#thanks").html(msg) //hide button and show thank you
                $("#form-content").modal('hide'); //hide popup  
            },
            error: function(){
                alert("failure");
            }
        });
    });
	});

    <link href="/modal/assets/bglight.png" rel="stylesheet">
    <link href="/modal/assets/bootstrap.min.css" rel="stylesheet">
    <link href="/modal/assets/bootstrap.min.js" rel="stylesheet">

</head>

<body>
	<div id="form-content" class="modal hide fade in" style="display: none;">
	    <div class="modal-header">
	        <a class="close" data-dismiss="modal">×</a>
	        <h3>Send me a message</h3>
	    </div>
	    <div class="modal-body">
	        <form class="contact" name="contact">
	            <label class="label" for="name">Your Name</label><br>
	            <input type="text" name="name" class="input-xlarge"><br>
	            <label class="label" for="email">Your E-mail</label><br>
	            <input type="email" name="email" class="input-xlarge"><br>
	            <label class="label" for="message">Enter a Message</label><br>
	            <textarea name="message" class="input-xlarge"></textarea>
	        </form>
	    </div>
	    <div class="modal-footer">
	        <input class="btn btn-success" type="submit" value="Send!" id="submit">
	        <a href="#" class="btn" data-dismiss="modal">Nah.</a>
	    </div>
	</div>
	<div id="thanks"><p><a data-toggle="modal" href="#form-content" class="btn btn-primary btn-large">Modal powers, activate!</a></p></div>
</body>

</html>

