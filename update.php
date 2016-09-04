<?php 
	include "db.php";
	$id = $_GET['id'];
	$sql = "SELECT * FROM zeronews WHERE id = $id";
	$query = mysqli_query($db_con,$sql);

	$row = mysqli_fetch_assoc($query);

	if(isset($_POST["submit"])){

		$title = $_POST['title'];
		$mainNews = $_POST['mainNews'];
		$img = $_FILES['image']['name'];

		$target_dir = "images/";
		$target_file = $target_dir.basename($_FILES['image']['name']);

		move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

			$sql = "UPDATE `zeronews` SET `id`='$id', `images`='$img',`title`='$title',`mainNews`='$mainNews' WHERE id=$id";

			
			$query = mysqli_query($db_con,$sql);

				if($query){
					header("Location:admin.php");
				}else{
					echo "fatal  error";
				}

	}
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
<title>The Free Blogsite.com Website Template | contact :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
</head>
<body>
<div class="header">
		<div class="header_top">
		<div class="wrap">
			<div class="logo">
			     <a href="index.php"><img width="250px;" src="images/admin.png" alt="" /></a>
			</div>
			<div class="login_button">
			    <ul>
			    <li><a href="admin.php">Admin Page</a><li> | 
			    <li><a href="logout.php">Exit</a></li>
			    </ul>
			</div>
			<div class="clear"></div>
		</div>
		</div>
		<div class="header_bottom">
			<div class="wrap">
				<div class="menu">
				    <ul>
				    	<li><a href="index.html">HOME</a></li>
				    	<li><a href="single.html">ARTICLES</a></li>
				    	<li><a href="single.html">SERVICES</a></li>
				    	<li><a href="#">LOGOS</a></li>
				    	<li><a href="single.html">TOOLS</a></li>
				    	<li><a href="single.html">ICONS</a></li>
				    	<li><a href="single.html">WALLPAPERS</a></li>
				    	<li><a href="index.html">HELP</a></li>
				    	<li><a href="contact.html">CONTACT</a></li>
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
<div class="wrap">
		<div class="feed">
			<div class="feedback">
			   <h1>CREATE NEWS</h1>
			   <form action="" method="post" enctype="multipart/form-data">
				   <label>Title</label>
				   <input type="text" value="<?=$row['title']?>" name="title">				   
				   <label>Text</label>
				   <textarea name="mainNews"> <?=$row['mainNews']?> </textarea>				   
				   <label>Image</label>				   
				   <input type="file" name="image" value="<?= $row['images'] ?>">
				   <img width="200px;" src="images/<?= $row['images'] ?> ">
				   <input type="submit" name="submit" value="Change">
			   </form>
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
   		<p>© 2012 rights Reseverd | Design by  <a href="http://w3layouts.com/">W3Layouts</a></p>
</div>
</body>
</html>
