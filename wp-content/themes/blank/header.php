<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package blank
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

	<h1>Tech World
				<button onclick = "location.href = 'http://localhost/wordpress/index.php/home/'"button type="Home" id="home">Home</button>
				<button onclick = "location.href = 'http://localhost/wordpress/index.php/about/'"button type="About Us" id="about">About Us</button>
				<button onclick = "location.href = 'http://localhost/wordpress/index.php/contact/'"button type="Contact Us" id="contact">Contact Us</button>
				<button onclick = "location.href = 'http://localhost/wordpress/index.php/shop/'"button type="Product" id="pro">Product</button>
				<button onclick = "location.href = 'http://localhost/wordpress/index.php/cart/'"button type="Cart" id="cart">Cart</button>
				<button type="Sign In" id="in">Sign In</button>
				<button type="SIGN UP" id="up">SIGN UP</button>
				<button onclick = "location.href = 'http://localhost/wordpress/index.php/my-account/'"button type="Account" id="account">My Account</button>
			</h1><!--headings-->

	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'blank' ); ?></a>

<style type="text/css">
	
	h1{/*for Tech World heading*/
	text-align: left;
	color: #fff;
}
body{
	background-image: url(http://localhost/wordpress/wp-content/uploads/2021/04/back.jpg);
}
#home{/*for home button*/
	color: #fff;
	background: #337ab7;
	margin-left: 500px;	
	padding: 8px;
}
#about{/*for about us button*/
	color: #fff;
	background: #337ab7;
	margin-left: 10px;	
	padding: 8px;
}
#contact{/*for contact us button*/
	color: #fff;
	background: #337ab7;
	margin-left: 10px;	
	padding: 8px;
}
#pro{/*for product button*/
	color: #fff;
	background: #337ab7;
	margin-left: 10px;	
	padding: 8px;
}
#cart{/*for product button*/
	color: #fff;
	background: #337ab7;
	margin-left: 10px;	
	padding: 8px;
}
#in{/*for sign in button*/
	color: #fff;
	background: #337ab7;
	margin-left: 50px;	
	padding: 8px;
}
#up{/*for sign up button*/
	color: #fff;
	background: #337ab7;
	margin-left: 10px;	
	padding: 8px;
}
#account{
	color: #fff;
	background: #337ab7;
	margin-left: 1233px;	
	padding: 8px;	
}
</style>