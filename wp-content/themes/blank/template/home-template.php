<?php
	/*Template Name: HOME*/
	get_header();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TechWorld</title>
</head>
<body>
<div>
			<br>
			<br>
			<br>
			<br>
			<label id="greet">
				Building a World of Convenience
			</label>
			<br>
			<br>

		</form>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<form class="example" action="action_page.php">
  			<input type="text" placeholder="Search.." name="search">
  			<button type="submit"><i class="fa fa-search"></i></button>
		</form>
		<br>
		<br>
		<br>
		<br>
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/1.png" class="img1">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/2.png" class="img2">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/3.png" class="img3">
	<img src="http://localhost/wordpress/wp-content/uploads/2021/04/4.png" class="img4">
</div>
</body>
</html>
<style type="text/css">
#greet{
	color: #fff;
	font-size: 48px;
	margin-left: 355px;
}

* {
  box-sizing: border-box;
}/* Style the search field */
form.example input[type=text] {
  margin-left: 300px;
  padding: 10px;
  font-size: 17px;
  border: 1px solid grey;
  float: left;
  width: 50%;
  background: #fff;
}

/* Style the submit button */
form.example button {
  float: left;
  width: 5%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 1px solid grey;
  border-left: none; /* Prevent double borders */
  cursor: pointer;
}

form.example button:hover {
  background: #0b7dda;
}

/* Clear floats */
form.example::after {
  content: "";
  clear: both;
  display: table;
}
.img1{
	width: 250px;
	height: 200px;
	margin-left: 50px;
}
.img2{
	width: 250px;
	height: 200px;
	margin-left: 50px;
}
.img3{
	width: 250px;
	height: 200px;
	margin-left: 50px;
}
.img4{
	width: 250px;
	height: 200px;
	margin-left: 50px;
}
</style>
<?php
	get_footer();
?>