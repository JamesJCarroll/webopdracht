<?php
$naam = $_POST['Naam'];
$email = $_POST['Email'];
$info = fopen($naam. ".txt", "a");
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

		
	  <p> beste <?php Echo $naam; ?> </p>
	  <br><br>
	 	We sturen een email naar: <?php echo $email ?> . <br>
	  	We hopen dat je onze mail ontvangt! <br>
	   <br><br>
		Groetjes, team 31
		</p>
	</body>
</html>