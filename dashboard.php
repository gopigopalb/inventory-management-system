<?php
include_once("./database/constants.php");
if (!isset($_SESSION["userid"])) {
	header("location:".DOMAIN."/");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Inventory Management System</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<script type="text/javascript" src="./js/main.js"></script>
 </head>
<body style="background:url(./images/inventory9.jpeg);background-repeat:no-repeat;background-size:100% 100%; height:100%;">
	<!-- Navbar -->
	<?php include_once("./templates/header.php"); ?>
	<br/><br/>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card mx-auto">
				  <img class="card-img-top mx-auto" style="width:60%;" src="./images/user.png" alt="Card image cap">
				  <div class="card-body">
				    <h4 class="card-title">Profile Info</h4>
				    <p class="card-text"><i class="fa fa-user">&nbsp;</i>GOPAL B GHANTI(admin)</p>
                                    <p class="card-text"><i class="fa fa-user">&nbsp;</i>ANIL VIBHU N.M(admin)</p>
				  </div>
				</div>
			</div>
						<div class="col-sm-4">
                                                <div style = "position:relative;box-size:content-box;">
							<div class="card">
						      <div class="card-body">
						        <h4 class="card-title">New Orders</h4>
						        <p class="card-text">Here you can make invoices and create new orders</p>
						        <a href="new_order.php" class="btn btn-primary">New Orders</a>
						      </div>
                                                 <div class="col-sm-8">
                                                <div style = "position:absolute;left:380px;top:-210px;width:150%;">;
							<div class="card">
						      <div class="card-body">
						        <h4 class="card-title">Sold Products</h4>
						        <p class="card-text">we can see here the sold products using trigger</p>
						      <a href="brandtrg.php" class="btn btn-primary">Manage</a>
						      </div>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<p></p>
	<p></p>
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Categories</h4>
						<p class="card-text">you can manage your categories and add new parent and sub categories here</p>
						<a href="#" data-toggle="modal" data-target="#form_category" class="btn btn-primary">Add</a>
						<a href="manage_categories.php" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Brands</h4>
						<p class="card-text">Here you can manage your brand and you add new brand</p>
						<a href="#" data-toggle="modal" data-target="#form_brand" class="btn btn-primary">Add</a>
						<a href="manage_brand.php" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="card">
						<div class="card-body">
						<h4 class="card-title">Products</h4>
						<p class="card-text">Here you can manage your products and you can add new products</p>
						<a href="#" data-toggle="modal" data-target="#form_products" class="btn btn-primary">Add</a>
						<a href="manage_product.php" class="btn btn-primary">Manage</a>
					</div>
				</div>
			</div>
		</div>
	</div>


	
	<?php
	//Categpry Form
	include_once("./templates/category.php");
	 ?> 
         
         <?php
	//Brand Form
	include_once("./templates/brand.php");
	 ?>
	
	 <?php
	//Products Form
	include_once("./templates/products.php");
	 ?>


</body>
</html>