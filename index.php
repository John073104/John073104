<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MACAAFF</title>
	<link rel="stylesheet" href="styles.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
	
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	
	<script>
		$(document).ready(function(){
			$(".hamburger").click(function(){
			  $(".wrapper").toggleClass("active")
			})
		});
	</script>

</head>
<body>

<div class="wrapper">
	
	<div class="top_navbar">
		<div class="logo">
			<a href="#">Maca AFF</a>
		</div>
		<div class="top_menu">
			<div class="home_link">
				<a href="./MacaAff/homepage.html">
					<span class="icon"><i class="fas fa-home"></i></span>
					<span>Home</span>
				</a>
			</div>
			
			<div class="right_info">
				<div class="icon_wrap">
					<div class="icon">
						<i class="-------"></i>
					</div>
				</div>
				<div class="icon_wrap">
					<div class="icon">
						<i class="-----"></i>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="main_body">
		
		<div class="sidebar_menu">
	        <div class="inner__sidebar_menu">
	        	
	        	<ul>
		          <li>
		            <a href="dashboard.html">
		              <span class="icon">
		              	<i class="fas fa-border-all"></i></span>
		              <span class="list">Dashboard</span>
		            </a>
		          </li>
		          <li>
		            <a href="#" class="active">
		              <span class="icon"><i class="fas fa-chart-pie"></i></span>
		              <span class="list">Charts</span>
		            </a>
		          </li>
		          <li>
		            <a href="crud-php/index.php">
		              <span class="icon"><i class="fas fa-address-book"></i></span>
		              <span class="list">Residents Visits</span>
		            </a>
		          </li>
		          <li>
		            <a href="./crud-php/index.php">
		              <span class="icon"><i class="fa fa-users"></i></span>
		              <span class="list">Services</span>
		            </a>
		          </li>
		          <li>
		            <a href="about.html">
		              <span class="icon">
										<i class="fab fa-blogger"></i></span>
		              <span class="list">About</span>
		            </a>
		          </li>
		          <li>
		            <a href="#">
		              <span class="icon"><i class="fa fa-archive"></i></span>
		              <span class="list">Health Issues</span>
		            </a>
		          </li>

							<li>
		            <a href="#">
		              <span class="icon"><i class=""></i></span>
		              <span class="list"></span>
		            </a>
		          </li>

							<li>
		            <a href="#">
		              <span class="icon"><i class=""></i></span>
		              <span class="list"></span>
		            </a>
		          </li>

							<li>
		            <a href="#">
		              <span class="icon"><i class=""></i></span>
		              <span class="list"></span>
		            </a>
		          </li>

							<li>
		            <a href="#">
		              <span class="icon"><i class=""></i></span>
		              <span class="list"></span>
		            </a>
		          </li>

							<li>
		            <a href="#">
		              <span class="icon"><i class=""></i></span>
		              <span class="list"></span>
		            </a>
		          </li>

							<li>
		            <a href="./user/login.php">
		              <span class="icon"><i class="fas fa-long-arrow-alt-left"></i></span>
		              <span class="list">LogOut</span>
		            </a>
		          </li>
		        </ul>

		        <div class="hamburger">
			        <div class="inner_hamburger">
			            <span class="arrow">
			                <i class="fas fa-long-arrow-alt-left"></i>
			                <i class="fas fa-long-arrow-alt-right"></i>
			            </span>
			        </div>
			    </div>
	        </div>
	    </div>
	</div>
	</div>
</div>
	

</body>
</html>