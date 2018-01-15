<?php
	//get  or make session variables
?>
<!DOCTYPE html>
<html>
<!-- the head section -->
<head>
    <title>the Game Emporium</title>
	<link rel="stylesheet" type="text/css" href="/tGE/styles.css">
	<link rel="stylesheet" type="text/css" href="/tGE/pm_styles.css">
	<link rel="stylesheet" type="text/css" href="/tGE/cart_styles.css">
</head>

<!-- the body section -->
<body>
    <script type="text/javascript">
        function AlertAbout() {
            var info = "The Game Emporium is an online retailer dedicated to selling games and puzzles."
            alert(info);
        }
        function AlertContact(){
            var contactInfo = "You can reach us by calling or emailing us.";
            var contactNum = "Phone Number: 201-345-9786";
            var contactEmail = "Email: gameEmporium@gmail.com";
            alert(contactInfo + "\n" + contactNum + "\n" + contactEmail);
        }
    </script>
    <header><h1><center>The Game Emporium</center></h1></header>
        <div id="nav-bar">
        	<table id="bar-tab">
        		<tr>
        			<td><a href="/tGE">Home</a></td>
        			<td><a href="javascript:AlertAbout();">About</a></td>
        			<td><a href="#">Register</a></td>
        			<td><a href="javascript:AlertContact();">Contact Us</a></td>
        			<td><a href="/tGE/product_manager">Admin</a></td>
        			<td><a href="/tGE/cart"><div id="cart-box">Cart</div></a></td>
        		</tr>
        	</table>
        </div>
       <!-- <form>
            <input type="text" name="search" placeholder="Search.." maxlength="64">
        </form>-->
