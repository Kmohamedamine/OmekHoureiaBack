<?php
session_start ();
function loginForm() {
    echo '
	<div class="form-group">
		<div id="loginform">
			<form action="index2.php" method="post">
			<h1>Support Omek Houria</h1><hr/>
				<label for="name">Veuillez entrer votre nom pour continuer..</label>
				<input type="text" name="name" id="name" class="form-control" placeholder="Donner votre Nom"/>
				<input type="submit" class="btn btn-default" name="enter" id="enter" value="Entrer" />
			</form>
		</div>
	</div>
   ';
}
 
if (isset ( $_POST ['enter'] )) {
    if ($_POST ['name'] != "") {
        $_SESSION ['name'] = stripslashes ( htmlspecialchars ( $_POST ['name'] ) );
        $cb = fopen ( "log.html", 'a' );
        fwrite ( $cb, "<div class='msgln'><i>User " . $_SESSION ['name'] . " has joined the chat session.</i><br></div>" );
        fclose ( $cb );
    } else {
        echo '<span class="error">Donner votre nom svp </span>';
    }
}
 
if (isset ( $_GET ['logout'] )) {
    $cb = fopen ( "log.html", 'a' );
    fwrite ( $cb, "<div class='msgln'><i>User " . $_SESSION ['name'] . " à quitter le chat.</i><br></div>" );
    fclose ( $cb );
    session_destroy ();
    header ( "Location: index2.php" );
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Support omek houria</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>
<?php
	if (! isset ( $_SESSION ['name'] )) {
	loginForm ();
	} else {
?>
<div id="wrapper">
	<div id="menu">
	<h1>Support Digitale</h1><hr/>
		<p class="welcome"><b>Bienvenue - <a><?php echo $_SESSION['name']; ?></a></b></p>
		<p class="logout"><a id="exit" href="../../" class="btn btn-default">Quitter le support</a></p>
	<div style="clear: both"></div>
	</div>
	<div id="chatbox">
	<?php
		if (file_exists ( "log.html" ) && filesize ( "log.html" ) > 0) {
		$handle = fopen ( "log.html", "r" );
		$contents = fread ( $handle, filesize ( "log.html" ) );
		fclose ( $handle );

		echo $contents;
		}
	?>
	</div>
<form name="message" action="">
	<input name="usermsg" class="form-control" type="text" id="usermsg" placeholder=" Votre message" />
	<input name="submitmsg" class="btn btn-default" type="submit" id="submitmsg" value="Envoyer" />
</form>
</div>
<script type="text/javascript">
$(document).ready(function(){
});
$(document).ready(function(){
    $("#exit").click(function(){
        var exit = confirm("Vous voulez vraiment quitter ?");
        if(exit==true){window.location = 'index2.php?logout=true';}     
    });
});
$("#submitmsg").click(function(){
        var clientmsg = $("#usermsg").val();
        $.post("post.php", {text: clientmsg});             
        $("#usermsg").attr("value", "");
        loadLog;
    return false;
});
function loadLog(){    
    var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
    $.ajax({
        url: "log.html",
        cache: false,
        success: function(html){       
            $("#chatbox").html(html);       
            var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20;
            if(newscrollHeight > oldscrollHeight){
                $("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal');
            }              
        },
    });
}
setInterval (loadLog, 2500);
</script>
<?php
}
?>
</body>
</html>