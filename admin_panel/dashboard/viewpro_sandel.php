<?php
session_start();
if(!isset($_SESSION['admin_name'])){
echo "<script>window.location.href='index.php';</script>";
	}
 ?>          
<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>

<title>Augment an Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<style>
.b{width:84%;
float:left;
background-color:darkblue;}
.c{width:15%;
float:left;background-color:darkblue;}
.d{height:600px;width:70%;margin:0px 0px 0px 300px}

</style>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Augment Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
 <!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<script src="js/jquery-1.10.2.min.js"></script>
<script src="js/amcharts.js"></script>	
<script src="js/serial.js"></script>	
<script src="js/light.js"></script>	
<script src="js/radar.js"></script>	
<link href="css/barChart.css" rel='stylesheet' type='text/css' />
<link href="css/fabochart.css" rel='stylesheet' type='text/css' />
<!--clock init-->
<script src="js/css3clock.js"></script>
<!--Easy Pie Chart-->
<!--skycons-icons-->
<script src="js/skycons.js"></script>

<script src="js/jquery.easydropdown.js"></script>

<!--//skycons-icons-->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
	<div class="left-content">
	   
		<!-- header-starts -->
		<div class="header-section">	
		<div class="top_menu">
	
			  	
			<div class="b"><center>
            <img src="logo.png" height="70" width="300"></center>
            </div>
            <div class="c">	
						
			
						<li class="nav-user dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">
								<font color="white" size="5">Admin</font>			
						<img src="images/user.png" height="70" class="nav-avatar" />
								<b class="caret"></b>
							</a>
							<ul class="dropdown-menu">
								<li><a href="logout.php">Logout</a></li>
							</ul>
						</li>
					</ul></div>
                    </div>
			
						       
						</div>
						<!--//menu-right-->
					</div>
				
	<div class="outter-wp">
									<!--sub-heard-part-->
									 
								  <!--//sub-heard-part-->
									<div class="graph-visual tables-main">
								<center><h1>Top And T-Shirts  </h1></center>
													<div class="graph">
														<div class="tables">
														<font size="5">		<table class="table table-hover table-bordered" "table-striped" "table-condensed"><thead> <tr> <th>ID</th> <th>Product Name</th> <th>Product Price</th> <th>Product Brand</th><th>Product Details</th><th>Products Image</th><th>Action</th> </tr> </thead> 
															</div>
												
													</div>
    <?php
	mysql_connect("localhost","root","");
	mysql_select_db("fashionista");
	$sql="select * from  sandel";
	$execute_query=mysql_query($sql);
	
	while($row=mysql_fetch_array($execute_query)){
		$row['0']
	?>
     
     <tr>
     <td><?php  echo $row['id']; ?></td>
      <td><?php  echo $row['product_name']; ?></td>
       <td><?php  echo $row['product_price']; ?></td>
        <td><?php  echo $row['product_brand']; ?></td>
         <td><?php  echo $row['product_details']; ?></td>
          <td>
		<img src="../images/<?php  echo $row['product_img']; ?>" height="100" width="50">
		  </td>
           
          
 <td><a href="update_details6.php?id=<?php echo $row['ID']; ?>" class="btn btn-warning">Update</a>
 
 </td>
     </tr>
     
     <?php } ?>
      
    </table>
</font>
						
						
					     
						</div>
										
						
								</div>
									 <!--footer section start-->
										<footer>
										   <p>&copy 2021 Fashionista . All Rights Reserved | Design by Samiksha Bhange
										</footer>
									<!--footer section end-->
								</div>
							</div>
				<!--//content-inner-->
			<!--/sidebar-menu-->
								<div class="sidebar-menu">
					<header class="logo">
					<a href="#" class="sidebar-icon"> <span class="fa fa-bars"></span> </a> <a href="index.html"> <span id="logo"> <h1>View Products</h1></span><br><br> 
					<!--<img id="logo" src="" alt="Logo"/>--> 
				  </a> 
				</header>
                <div style="border-top:1px solid rgba(69, 74, 84, 0.7)"></div>
							
                           <div class="menu">
									<ul id="menu" >
										
										  
										 <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Women's Clothing</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="uploadproduct_top.php">Tops & T-shirts</a></li>
												<li id="menu-academico-boletim" ><a href="uploadproduct_one.php">Western One Piece</a></li>
												<li id="menu-academico-boletim" ><a href="uploadproduct_kurti.php">Kurties & Salwar Suits</a></li></ul></li>
				<li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Women's Acessories</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="uploadproduct_jwe.php">Jewellery</a></li>
												<li id="menu-academico-boletim" ><a href="uploadproduct_watch.php">Watches</a></li></ul></li>
                                                <li id="menu-academico" ><a href="#"><i class="fa fa-file-text-o"></i> <span>Women's Footwear</span> <span class="fa fa-angle-right" style="float: right"></span></a>
											 <ul id="menu-academico-sub" >
												<li id="menu-academico-avaliacoes" ><a href="uploadproduct_sandel.php">Sandles</a></li>
												<li id="menu-academico-boletim" ><a href="uploadproduct_heel.php">High Heels</a></li>
												<li id="menu-academico-boletim" ><a href="uploadproduct_shoe.php">Shoes</a></li>
																				
</ul></li></div><script>
							var toggle = true;
										
							$(".sidebar-icon").click(function() {                
							  if (toggle)
							  {
								$(".page-container").addClass("sidebar-collapsed").removeClass("sidebar-collapsed-back");
								$("#menu span").css({"position":"absolute"});
							  }
							  else
							  {
								$(".page-container").removeClass("sidebar-collapsed").addClass("sidebar-collapsed-back");
								setTimeout(function() {
								  $("#menu span").css({"position":"relative"});
								}, 400);
							  }
											
											toggle = !toggle;
										});
							</script>
										  					  
										 
						
<!--js -->
<link rel="stylesheet" href="css/vroom.css">
<script type="text/javascript" src="js/vroom.js"></script>
<script type="text/javascript" src="js/TweenLite.min.js"></script>
<script type="text/javascript" src="js/CSSPlugin.min.js"></script>
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>

<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
</body>
</html>