<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("fashionista");?>
 
   

<!--A Design by W3layouts 
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

			<!DOCTYPE html>
<html>
<head>
<title>Youth Fashion A Ecommerce Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .search-container {
  float:left;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
}

.topnav .search-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: left;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 10%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}

#m{background-color:#003;
width:100%;float:left;}
.j{width:100%;float:left;}
#s{width:60%;}
#d{width:100%;}
#b{background-color:#003;}

</style>
<link href="css/bootstrap-3.1.1.min.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Youth Fashion Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='//fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
<!-- start menu -->
<script src="js/bootstrap.min.js"></script>
<script src="js/simpleCart.min.js"> </script>
<!-- slide -->
<script src="js/responsiveslides.min.js"></script>
   <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: false,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!-- animation-effect -->
<link href="css/animate.min.css" rel="stylesheet"> 
<script src="js/wow.min.js"></script>
<script>
 new WOW().init();
</script>
<!-- //animation-effect -->
</head>
<body><div class="header">
	<div class="header-top">
		<div class="container" id="m" class="j">
			<div class="n-avigation">
			
				<nav class="navbar nav_bottom" role="navigation">
				<div class="col-sm-10 logo animated wow fadeInLeft" data-wow-delay=".5s" >
					<img src="images/logo.png" height="80" width="400"></div><br>
                    <?php 
					if(isset($_SESSION['user_name'])){ ?>
                    <font color="white">Welcome,<?php echo $_SESSION['user_name'];?></font><?php }?>
                    
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1" class="n">
							<li><a href="index.php">HOME</a></li>
                            
                            <li><a href="about.php">ABOUT US</a></li> 
                            <li><a href="../../register/reg/web/register.php">REGISTER</a></li>
                            <li><a href="../../login/web/login.php">LOGIN</a></li>
                            <li><a href="wfashion.php">WOMEN'S FASHION</a></li>
                             <li class="dropdown mega-dropdown active">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="images/cartt.png" height="50" width="50"><span class="caret"></span></a>				
								<div class="dropdown-menu mega-dropdown-menu">
									<div class="container-fluid">
										<!-- Tab panes -->
										<div class="tab-content">
										  <div class="tab-pane active" id="women">
											<ul class="nav-list list-inline">
												<li><a href="top.php">VIEW CART</a></li>
												<li><a href="onepiece.php">MY ORDERS</a></li>
												<li><a href="kurti.php">LOGOUT</a></li>
												
												
											</ul>
										  </div>
									   </div>
									</div></div></li>
									<!-- Nav tabs -->
									         
								
							</ul>
									   </div></div></div>
				
                                    
                    
                                   		
						<div class="search-container" id="b">
        <center>                
    <form action="search0.php" method="POST">
      <br><input type="text" placeholder="Search.." name="search" id="s">
      <button type="submit"><i class="fa fa-search"></i></button>
    </form></center><br></div>

						
							
		</div>
	</div>
</div>
<div class="content">
	<div class="container">
		<div class="content-top">
			<div class="content-top1">
           
			


      <div class="col-lg-13">
<center>
<table class="table table-bordered table-hover table-condensed table-striped" >
								  <thead>
									
    <th>ID</th>
     <th> Name</th>
     <th>Price</th>
      <th>Brand</th>
       
        <th>Image</th>
        <th>Order Now</th>
       
         
    </tr></center>
    <?php 
	mysql_connect("localhost","root","");
mysql_select_db("fashionista");
		$cust_id=$_SESSION['user_email'];
	$sql1="select * from  cart where customer_id='$cust_id' AND purchase_status='0'";
	$execute_query1=mysql_query($sql1);
	while($row1=mysql_fetch_array($execute_query1)){
		$user_prodict_id=$row1['product_id'];
	
	$sql="select * from  allproducts where id='$user_prodict_id'";
	$execute_query=mysql_query($sql);
	while($row=mysql_fetch_array($execute_query)){
		$row['0']
	?>
     
     <tr>
     <td><font color="black" size="5"><?php  echo $row['id']; ?></font></td>
      <td><font color="black" size="5"><?php  echo $row['product_name']; ?></font></td>
       <td><font color="black" size="5"><?php  echo $row['product_price']; ?></font></td>
        <td><font color="black" size="5"><?php  echo $row['product_brand']; ?></font></td>
         
          <td>
		<img src="images/<?php  echo $row['product_img']; ?>" height="120" width="100">
		  </td>
          <td>
          <form action="" method="POST"  style="float:left;">
     <?php if(!isset($_SESSION['user_name'])){ ?>
          
      <a href="../../login/web/login.php" class="btn btn-primary">
     Buy Now
      </a>   
          <?php }else{ ?>
   <a href="../../buynow/buy/web/buynowform.php?id=<?php echo $row['id']; ?>" class="btn btn-primary" >Buy Now</a> 
    <?php } ?>
   
    </form>
          </td>
           
  
     </tr></font>
     
     <?php }} ?>
      
    </table></center>



        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->

  

</body>


</html>
