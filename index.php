<!doctype html>
    <html lang="en">
    <head>
        <title>Internet Prezentacija</title>
        <link rel="stylesheet" href="style.css">
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

    </head>




<body>

<div id="favpage">
    <a  href="http://www.instagram.com"><div class="icon1"></div></a>
        <a  href="http://www.facebook.com"><div class="icon2"></div></a>
            <a href="http://www.tweeter.com"><div class="icon3"></div></a>
</div>
<nav>

	<div id="navcontent">
		<div id="leftimage"><div id="presentation">MY presentation</div></div>
		<a class="link" id="active" href="index.php">Home</a>
		<a class="link" href="about.html">About me</a>
		<a class="link"  href="interesting.html">Interests</a>
		<a class="right" href="contact.html">Contact</a>
	</div>
</nav>

<div id="container">

<content>
	<table>
        <tr><td class="th">Aktuelni datum:<?php
                $day=date("d");
                $month=date("m");
                $year=date("y");

                echo "$day.$month.20$year";  ?></td></tr>
        <tr><td></td></tr>

        <tr><td class="th">Dobrodosli na moju prvu publikovanu WEB stranicu</td></tr>
        <tr><td class="td" style="padding:60px"></td></tr>

        <tr><td></td></tr>

		<tr><td class="th">Ovo je pocetna stranica</td></tr>
		<tr><td class="td">Da li mislite da sam ovo dobro odradio , jako me zanima vase misljenje.</td></tr>

        <tr><td></td></tr>







	</table>
    <footer>Created by: Nemanja Popovic</footer>
</content>


</div>
</body>

</html>