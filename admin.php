<?php
 	session_start();
 	if(!$_SESSION['login']==true){
 		header('Location:login.php');
 	}

 	include "db.php";

 	if($db_con){
				
				
				$sql = "SELECT * FROM zeromenu";
				$querymenu = mysqli_query($db_con,$sql);
			}

 ?>
<!DOCTYPE HTML>
<html>
<head>
<title>The Free Blogsite.com Website Template | Home :: w3layouts</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
<link href='http://fonts.googleapis.com/css?family=Monda' rel='stylesheet' type='text/css'>
<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>
<body class="adminPanel">
	<div class="header_top">
		<div class="wrap">
			<div class="logo">
			     <a href="index.php"><img width="250px;" src="images/admin.png" alt="" /></a>
			</div>
			<div class="login_button">
			    <ul>
			    <li><a href="index.php">Home</a><li> | 
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

		<?php
			$host = "localhost";
			$user_name = "root";
			$password = "";
			$db_name = "zero";
			$db_con = mysqli_connect($host, $user_name, $password, $db_name);



			if($db_con){
				
				$sql = "SELECT * FROM zeronews";
				$query = mysqli_query($db_con,$sql);
		?>
		<div class="container createNews">
			<button type="button" ><a href="create.php">Create news</a></button>
			<button type="button" ><a href="createMenu.php">Edit menu</a></button>
		</div>
<div class="container"
	<div class="col-md-8">
			<table class="table table-bordered">
				<thead>
					<tr>
						<td>Title</td>
						<td>News</td>
						<td>Image</td>
						<td>button</td>
					</tr>
				</thead>
				<?php
					while ($row = mysqli_fetch_assoc($query)) {
				?>
					<tr>
					
						<td><?php echo $row['title'] ; ?></td>
						<td style="word-break: break-all;"><?php echo $row['mainNews'] ; ?></td>
						<td><img width="200px;" src="images/<?= $row['images'] ?> "></td>
													
						
					<td>
					<button type="button" class="btn btn-success"><a href="update.php?id=<?php echo $row["id"]; ?>"> Update</a></button>
					<button type="button" class="btn btn-danger"><a href="delete.php?id=<?= $row["id"];?> "> delete<a></button>	
					</td>
					</tr>	
							
					<?php } ?>

			</table>
				<?php } ?>


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