<?php
	/*Template Name: ABOUT*/
	get_header();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TechWorld</title><!--title of webpage-->
</head>
<body>
<div>
			<br>
			<label id="greet" style ="font-size: 100px;">
			AB<img src="http://localhost/wordpress/wp-content/uploads/2021/04/images.png" class="img1">UT
			</label>
			<br>
			<br>
			<p id="mid">
The company primarily promotes new and up-to-date<br>
technologies and gadgets.<br>
For an affordable prices and promos, everyone<br>
can enjoy a new way of connecting<br>
to the world.
			</p>
			<br>
			<p id="left">
				Mission:<br>
Tech World mission is to give people up-to-date<br>
technologies for an affordable price. Enlarging <br>
or enchancing the scope of availability of gadgets <br>
to everyone, we can achive a greater and a much <br>
convenience way of connecting to one another.<br>

			</p>
			<p id="right">
				Vision:<br>
Tech World vission is where people anywhere<br>
and everywhere can connect to one another.<br>
This also includes a much more convenience<br>
environment where everyone can enjoy to the<br>
fullest, a faster way to connect to love ones.		
			</p>
</div>
</body>
</html>
<style type="text/css">
	#greet{
	color: #fff;
	font-size: 48px;
	margin-left: 500px;
}
.img1{/*about icon*/
	width: 110px;
	height: 110px;
}
#mid{
	color: #fff;
	text-align: center;
	font-size: 20px;
}
#left{
	color: #fff;
	text-align: left;
	width: 49%;
	display: inline-block;
	font-size: 20px;
}
#right{
	color:#fff;
	text-align: right;
	width: 50%;
	display: inline-block;
	font-size: 20px;
}
</style>
<?php
	get_footer();
?>