<?php
$naam = $_POST['Naam'];
$email = $_POST['Email']
$info = fopen($naam . ".txt", "a");
fwrite($info, $naam);
fwrite($info, $email);
fclose($info);
$subject = "header";
$massage = " Hello " . $naam . ", \r\n\r\n Thank you for subscribing!";
$headers = "from: j.j.carroll@students.uu.nl \r\n Reply-To: mail@mail.com \r\n X-mailer: PHP/" . phpversion();
mail ($mail, $subject , $massage, $headers);
?>
<html>
    <head>  
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine:italic">
        <link rel="stylesheet" href="Website.css" >
        <title> Mail sent </title>
    </head>
	<body>
		<menu>
			<ul>
				<li><a href="Index.html">Home</a></li>
				<li><a href="SpaceX.html">SpaceX</a></li>
				<li><a href="Tesla.html">Tesla</a></li>
				<li style = "float:right"> <a class="active" href="Contact.html">Contact</a></li>
			</ul>
		</menu>
	  <h1>We hope you have recieved our mail</h1>
	</body>
</html>