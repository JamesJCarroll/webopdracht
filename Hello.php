<?php
$naam = $_POST['Naam'];
$email = $_POST['Email']
$info = fopen($naam . ".txt", "a");
fwrite($info, $naam);
fwrite($info, $email);
fclose($info);
$subject = "header";
$massage = " Hello " . $naam . ", \r\n\r\n Thank you for subscribing! team 31";
$headers = "from: j.j.carroll@students.uu.nl \r\n Reply-To: mail@mail.com \r\n X-mailer: PHP/" . phpversion();
mail ($mail, $subject , $massage, $headers);
?>
<html>
    <head>  
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" href="Website.css" >
        <title>Mail sent</title>
    </head>
	<body>
		<menu>
			<ul>
				<li><a href="Index.html">Home</a></li>
				<li><a href="SpaceX.html">SpaceX</a></li>
				<li><a href="Tesla.html">Tesla</a></li>
				<li><a href="bootstrap.html">Bootstrap</a></li>
				<li><a class="active" href="Contact.html">Contact</a></li>
			</ul>
		</menu>

		<html>
<body>

Welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>

</body>
</html>
	  <h1> beste <? Echo $naam; ?> </h1>
	  <h2><br>We hope you have recieved our mail <br> we will send a email to <? echo $email ?> .</h2>
	  <h3> kind regrards, team 31</h3> 
	</body>
</html>