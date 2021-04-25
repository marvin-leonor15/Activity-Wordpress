<?php
	/*Template Name: CONTACT*/
	get_header();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TechWorld</title><!--title of webpage-->
	<link rel="stylesheet" type="text/css" href="contactus.css"><!--reference for style.css-->
</head>
<body>
<div>
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/contact.png" class="con">
	<br>
	<br>
	<p id="left">
		To reach us you may refer to:<br><br>
		<img src="http://localhost/wordpress/wp-content/uploads/2021/04/tele.png" class="tele"><br>
		0908-123-4567<br>
		0915-321-6589<br>
		871-34-11<br>
		<img src="http://localhost/wordpress/wp-content/uploads/2021/04/fb.png"class="fb"><br>
		<a href="">Tech_World@yahoo.com</a><br>
		<img src="http://localhost/wordpress/wp-content/uploads/2021/04/ig.png" class="ig"><br>
		<a href="">@TechWorld</a><br>
		<img src="http://localhost/wordpress/wp-content/uploads/2021/04/tweet.png" class="tweet"><br>
		<a href="">@TechWorld</a><br>
	</p>
	<p id="right">
		For concerns/feedback:<br><br>
		<img src="http://localhost/wordpress/wp-content/uploads/2021/04/mail.png" class="mail"><br>
		<a href="">Tech_World@gmail.com</a>
	</p>
</div>
</body>
</html>
<style type="text/css">
	.con{
	width: 250px;
	height: 250px;
	margin-left: 575px;
}
#left{
	color: #fff;
	text-align: left;
	width: 49%;
	display: inline-block;
	font-size: 20px;
}
.tele{
	width: 75px;
	height: 60px;
	margin-left: 50px;
}
.fb{
	width: 75px;
	height: 60px;
	margin-left: 50px;
}
.ig{
	width: 75px;
	height: 60px;
	margin-left: 50px;
}
.tweet{
	width: 75px;
	height: 60px;
	margin-left: 50px;
}
#right{
	color:#fff;
	text-align: right;
	position: absolute;
	top: 359px;
	width: 49%;
	display: inline-block;
	font-size: 20px;
}
.mail{
	width: 75px;
	height: 60px;
	margin-right: 50px;
}
</style>
<?php
	get_footer();
?>