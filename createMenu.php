<?php
 	include "db.php";

 	if($db_con){
				
				
				$sql = "SELECT * FROM zeromenu";
				$querymenu = mysqli_query($db_con,$sql);
			}

 ?>
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
				    	<?php
							while ($row = mysqli_fetch_assoc($querymenu)) {
						?>
			    			<li><a href="index.html"><?=$row['menu']?></a></li>
			    	
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
<div class="wrap">
		<div class="feed">
			<div class="feedback">
			   <h1>CREATE/EDIT/DELETE MENU</h1>
			   <form action="" method="post" enctype="multipart/form-data">
				   <label>Menu</label>
				   <input type="text" value="" id="name" name="menu">				   
				   <input type="submit" name="submit" value="click">
				   <a id="deleteChange" href="editMenu.php">Delete/Update</a>
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
<?php 
	if(isset($_POST["submit"])){
		$menu = $_POST['menu'];
		

		

			$sql = "INSERT INTO `zeromenu`(`menu`) VALUES ('$menu')";
			$querymenu = mysqli_query($db_con,$sql);

				if($querymenu){
					header("Location:createMenu.php");
				}else{
					echo "fatal  error";
				}

	}
	?>

