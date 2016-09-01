<?php
include "db.php";
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>The Free Blogsite.com Website Template | About :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
			     <a href="index.php"><img src="images/logo.png" alt="" /></a>
			</div>
			<div class="login_button">
			    <ul>
			    <li><a href="#">Sign in</a><li> | 
			    <li><a href="login.php">Login</a></li>
			    </ul>
			</div>
		<div class="clear"></div>
		</div>
	</div>
	<div class="header_bottom">
		<div class="wrap">
			<div class="menu">
			    <ul>
                  <?php
                    $query=$blog->select("menu","*");
                    while ($row=mysqli_fetch_assoc($query)){?>
			    	<li><a href="<?=$row['href']?>"><?=$row['name']?></a></li>
                    <?php } ?>
			    </ul>
			</div>
			<div class="search_box">
			    <form>
			    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}"><input type="submit" value="">
			    </form>
			</div>
		<div class="clear"></div>
		</div>
	</div>
</div>
<?php
$query=$blog->select("post" , $_GET["id"]);
$row=mysqli_fetch_assoc($query);
?>
<div class="wrap">
	<div class="main">
		<div class="content">
			<div class="box1">
			   <h2><a href="single.php?id=<?=$row["id"]?>"><?=$row["heading"]?></a></h2>
			   <span>By <?=$row["author"]?>  <?=$row["date"]?></span>
				<div class="top_img">
				   <img src="<?=$row["img"]?>" alt="" />
				</div>   
				<div class="data_desc">
				    <p><?=$row["text"]?></p>
				   
				</div>
			</div> 
		</div> 
	<div class="sidebar">
		<div class="side_top">
			<h2>Recent Feeds</h2>
			<div class="list1">
			   <ul>
				 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
				 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
				 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
				 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
				 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
			     <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
			   </ul>
			</div>
		</div>
	<div class="side_bottom">
		<h2>Most Viewed</h2>
		<div class="list2">
		   <ul>
			 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
			 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
			 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
			 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
			 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
			 <li><a href="#">Lorem ipsum dolor desktop publishing</a></li>
		   </ul>
		</div>
	</div>
	</div>
	<div class="clear"></div>
	</div>
</div>
<div class="footer">
	<div class="wrap">
		<div class="footer_grid1">
		    <h3>About Us</h3>
			<p>Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here desktop publishing making it look like readable English.<br><a href="#">Read more....</a></p>
		</div>
		<div class="footer_grid2">
			<h3>Navigate</h3>
			<div class="f_menu">
				<ul>
			      <li><a href="index.html">Home</a></li>
			      <li><a href="single.html">Articles</a></li>
			      <li><a href="contact.html">Contact</a></li>
			      <li><a href="#">Write for Us</a></li>
			      <li><a href="#">Submit Tips</a></li>
			      <li><a href="#">Privacy Policy</a></li>
			   </ul>
			</div>
		</div>
	<div class="footer_grid3">
		<h3>We're Social</h3>
		<div class="img_list">
		   <ul>
		     <li><img src="images/facebook.png" alt="" /><a href="#">Facebook</a></li>
		     <li><img src="images/flickr.png" alt="" /><a href="#">Flickr</a></li>
		     <li><img src="images/google.png" alt="" /><a href="#">Google</a></li>
		     <li><img src="images/yahoo.png" alt="" /><a href="#">Yahoo</a></li>
		     <li><img src="images/youtube.png" alt="" /><a href="#">Youtube</a></li>
		     <li><img src="images/twitter.png" alt="" /><a href="#">Twitter</a></li>
		     <li><img src="images/yelp.png" alt="" /><a href="#">Help</a></li>
		   </ul>
		</div>
	</div>
	</div>
<div class="clear"></div>
</div>
	<div class="f_bottom">
		<p>© 2012 rights Reseverd | Design by<a href="http://w3layouts.com/"> W3Layouts</a></p>
	</div>
</body>
</html>
