
<html>

<script type="text/javascript">
if(screen.width > 500)
        {
                window.location="/";
        }
        
if(screen.width > 1)
        {
                //window.open ("index.php","","fullscreen=yes"); self.close();
        }
        
	
	
</script>


<script>
/* Get the element you want displayed in fullscreen mode (a video in this example): */
var elem = document.getElementById("body");

/* When the openFullscreen() function is executed, open the video in fullscreen.
Note that we must include prefixes for different browsers, as they don't support the requestFullscreen method yet */
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.mozRequestFullScreen) { /* Firefox */
    elem.mozRequestFullScreen();
  } else if (elem.webkitRequestFullscreen) { /* Chrome, Safari and Opera */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE/Edge */
    elem.msRequestFullscreen();
  }
}
</script>



<head>
	
	<title>Xpasson</title>
	
	<link rel="stylesheet" href="css/bootstrap.css" />

	<link rel="stylesheet" href="css/swiper.min.css">
	
	<link rel="stylesheet" href="css/style.css" />
	
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"> 
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	
</head>


<!--script to auto hide filter-->
<script type="text/javascript">

	function hidefilter() {
	  $(".filter").hide();
	};
	
</script>








<body>
	
	<div class="wh" onload="hidefilter()">
	
		<!--mobile header-->
		<div class="row">
		
			<div class="headnav-other">
			
				<table width="100%" cellpadding="7px" cellspacing="7px">
				
						
				
				</table>
				
				<table width="100%" cellpadding="15px" cellspacing="15px">
				
						
						<tr>
							
							<td align="center"></td>
						
						</tr>
				
						<tr>
							<td align="left"><a href="index.php"><img src="img/Back.svg" /></a></td>
							<td align="center" class="headertext">Furniture</td>
							<td align="right"><img id="show" src="img/Filter.svg" /></td>
						</tr>
				
				</table>
			
			</div>
	
		</div>
		
		<!--end of mobile header-->





























































<!--Filter-->
	<div class="filter">

		<table cellpadding="15px" bgcolor="white" cellspacing="15px" width="100%">

			<tr>
	
				<td align="left" style="text-align:left;">
					<span class="header-small">Reset</span>
				</td>
		
				<td align="center">
					<span class="header-title-text">Filter</span>
				</td>
		
				<td align="right" style="text-align:right;">
					<span id="hide" class="header-small">Close</span>
				</td>
	
			</tr>
			
		</table>
		
		<hr class="push-top">
		
		<table class="push-top-1" cellpadding="10px" bgcolor="white" cellspacing="10px" width="100%">

			<tr>
	
				<td align="left" style="text-align:left;">
					<span class="header-normal-text-title">Location</span>
				</td>
		
				<td align="right" style="text-align:right;">
					<span class="header-normal-text">Fort Hood, Texas, USA </span> <img src="img/Vector.svg"/>
				</td>
	
			</tr>
			
		</table>
		
		<hr>
		
		<table class="push-top-1" cellpadding="10px" bgcolor="white" cellspacing="10px" width="100%">

			<tr>
	
				<td align="left" style="text-align:left;">
					<span class="header-normal-text-title">Distance</span>
				</td>
		
				<td align="right" style="text-align:right;">
					<div class="slidecontainer">
					  <input type="range" min="1" max="100" value="10" class="slider" id="Range">
					</div>
				</td>
	
			</tr>
			
			<tr>
				<td align="left"></td>
				
				<td align="right" style="text-align:center;"> 
					<span class="header-normal-normal-text" id="rangev"> </span> <span class="header-normal-normal-text">miles</span> 
				</td>
			
			</tr>
			
		</table>
		
		<hr>
		
		<div class="filt-icon push-top-1">
			<table cellpadding="5px" bgcolor="white" cellspacing="2px" width="100%">

				<tr>
	
					<td align="center">
						<img id="cash-img" src="img/fil/SalePostIcon.svg" />
						<img id="cashh-img" class="none" src="img/fil/SalePostIcon-ia.svg" />
						<br>
						<div id="cash-text" class="filter-icon-text">Cash</div>
						<div id="cashh-text" class="filter-icon-text-inactive none">Cash</div>
					</td>
				
					<td align="center">
						<img id="ex-img" src="img/fil/ExchangePostIcon.svg" />
						<img id="exx-img" class="none" src="img/fil/ExchangePostIcon-ia.svg" />
						<br>
						<div id="ex-text" class="filter-icon-text">Exchange</div>
						<div id="exx-text" class="filter-icon-text-inactive none">Exchange</div>
					</td>
				
					<td align="center">
						<img id="se-img" src="img/fil/ServicePostIcon.svg" />
						<img id="see-img" class="none" src="img/fil/ServicePostIcon-ia.svg" />
						<br>
						<div id="se-text" class="filter-icon-text">Services</div>
						<div id="see-text" class="filter-icon-text-inactive none">Services</div>
					</td>
				
					<td align="center">
						<img id="ev-img" src="img/fil/EventPostIcon.svg" />
						<img id="evv-img" class="none" src="img/fil/EventPostIcon-ia.svg" />
						<br>
						<div id="ev-text" class="filter-icon-text">Events</div>
						<div id="evv-text" class="filter-icon-text-inactive none">Events</div>
					</td>
					 
					<td align="center">
						<img id="fr-img" src="img/fil/FreeIcon.svg" />
						<img id="frr-img" class="none" src="img/fil/FreeIcon-ia.svg" />
						<br>
						<div id="fr-text" class="filter-icon-text">Free</div>
						<div id="frr-text" class="filter-icon-text-inactive none">Free</div>
					</td>
		
				</tr>
			
			</table>
		</div>
		
		<hr>
		
		
		<table class="push-top-1" cellpadding="10px" bgcolor="white" cellspacing="10px" width="100%">

			<tr>
	
				<td align="left" style="text-align:left;">
					<span class="header-normal-text-title">Price Range</span>
				</td>
		
				<td align="right" style="text-align:right;">
					<input type="text" placeholder="Min" name="" class="filter-input"/>
					<input type="text" placeholder="Max" name="" class="filter-input"/>
				</td>
	
			</tr>
			
		</table>
		
		<hr>
		
		<table class="push-top-1" cellpadding="10px" bgcolor="white" cellspacing="10px" width="100%">

			<tr>
	
				<td align="left" style="text-align:left;">
					<span class="header-normal-text-title">Categories</span>
				</td>
		
				<td align="right" style="text-align:right;">
					<span class="header-normal-text">Furniture </span> <img src="img/Vector.svg"/>
				</td>
	
			</tr>
			
		</table>
		
		<hr>
		
		<table class="push-top-1" cellpadding="10px" bgcolor="white" cellspacing="10px" width="100%">

			<tr>
	
				<td align="left" style="text-align:left;">
					<span class="header-normal-text-title">Sort by</span>
				</td>
		
				<td align="right" style="text-align:right;">
					<span class="header-normal-text">Price: low to high </span> <img src="img/Vector.svg"/>
				</td>
	
			</tr>
			
		</table>
		
		<hr>
		

	</div>
<!--end of Filter-->





<!--login & registration bar-->

	<div id="signs-cont" class="signin-bar-cont">
	
	</div>
	
		<div id="signs-bar" id="" class="signin-bar">
		
				
			<div class="signin-bar-header">
		
				<img id="signs-close" src="img/close.svg" class="signin-close"/>
				
				<table width="100%" cellpadding="10px" cellspacing="10px"> 
					<tr>
						<td align="center"></td>
					</tr>
					<tr>
						<td align="center"></td>
					</tr>
					<tr>
						<td align="center"><img src="img/profile.svg" /></td>
					</tr>
				</table>
		
		
			</div>
			
			<div class="tab">
			  <button class="tablinks" onclick="openCity(event, 'London')">Sign in</button>
			  <button class="tablinks" onclick="openCity(event, 'Paris')">Register</button>
			</div>
			
			<br>

			<div id="London" style="display:block;" class="tabcontent">
			  	<table width="100%" cellpadding="10px" cellspacing="10px">
			  		<form action="index.php?log=logged" method="POST">
			  		
				  		<tr>
				  			<td> <input type="text" class="signin-text-box" placeholder="Email / Username"/> </td>
				  		</tr>
				  		<tr>
				  			<td> <input type="password" class="signin-text-box" placeholder="Password"/> </td>
				  		</tr>
				  		<tr>
				  			<td> 
				  				<table>
				  					<tr>
				  						<td>
				  							<input type="checkbox" class="signin-check-box" /> 
				  						</td>
				  						<td>	
				  							<span class="signin-check-box-text">Keep me logged in</span> 
				  						</td>
				  					<tr>
				  				</table>
				  			</td>
				  		</tr>
				  		<tr>
				  			<td> <input type="submit" class="signin-button" value="Sign in"/> </td>
				  		</tr>
			  		
			  		</form>
			  		
			  		<tr>
			  			<td> <span class="signin-check-box-text2"> Can’t remember my password </span> </td>
			  		</tr>
			  		<tr>
			  			<td></td>
			  		</tr>
			  		<tr>
			  			<td>
				  			<table width="100%">
				  				<tr>
						  			<td width="50%" align="left"> <div class="thin-line"></div> </td>
						  			
						  			<td align="center"> <span class="signin-check-box-text3"> OR </span> </td>
						  			
						  			<td width="50%" align="right"> <div class="thin-line"></div> </td>
					  			</tr>
				  			</table>
			  			</td>
			  		</tr>
			  		<tr>
			  			<td align="center"> <img src="img/signin-with-idme-green.svg" />  </td>
			  		</tr>
			  		
			  	</table>
			</div>
			
			

			<div id="Paris" class="tabcontent">
			  <table width="100%" cellpadding="10px" cellspacing="10px">
			  		<tr>
			  			<td> <input type="text" class="signin-text-box" placeholder="Fullname"/> </td>
			  		</tr>
			  		<tr>
			  			<td> <input type="text" class="signin-text-box" placeholder="Email Address"/> </td>
			  		</tr>
			  		<tr>
			  			<td> <input type="password" class="signin-text-box" placeholder="Password"/> </td>
			  		</tr>
			  		<tr>
			  			<td> 
			  				<table>
			  					<tr>
			  						<td>	
			  							<span class="signin-check-box-text">Military Status</span> 
			  						</td>
			  					<tr>
			  				</table>
			  			</td>
			  		</tr>
			  		<tr>
			  			<td> 
			  				<select name="" class="signin-select-box"> 
			  					<option>- SELECT STATUS</option>
			  				</select> 
			  			</td>
			  		</tr>
			  		<tr>
			  			<td> 
			  			
			  				<table width="100%">
				  				<tr>
					  				<td width="50%">
						  				<select name="" class="signin-select-box2"> 
						  					<option>- DUTY TYPE</option>
						  				</select>
					  				</td>
					  				
					  				<td width="50%">
						  				<select name="" class="signin-select-box2"> 
						  					<option>ZIP CODE</option>
						  				</select>
					  				</td>
				  				</tr>
			  				</table>
			  				 
			  			</td>
			  		</tr>
			  		<tr>
			  			<td> 
			  				<select name="" class="signin-select-box"> 
			  					<option>- SELECT BASE</option>
			  				</select> 
			  			</td>
			  		</tr>
			  		<tr>
			  			<td> 
			  				<table>
			  					<tr>
			  						<td>	
			  							<span class="signin-check-box-text">Profile Image (Optional)</span> 
			  						</td>
			  					<tr>
			  				</table>
			  			</td>
			  		</tr>
			  		
			  		<tr>
			  			<td> 
			  			
			  				<table cellpadding="3px" cellspacing="3px">
				  				<tr>
					  				<td>
						  				<img src="img/regimage.svg" onClick="pick()"/>

										  <input type="file" accept="image/*"  class="zero"  name="" id="pic" />

					  				</td>
					  				
					  				<td>
						  				<span class="signin-check-box-text">Add Image</span> 
					  				</td>
				  				</tr>
			  				</table>
			  				 
			  			</td>
			  		</tr>
			  		
			  		<tr>
			  			<td> <a href="index.php?log=halflog"><input type="submit" class="signin-button" value="Next"/></a> </td>
			  		</tr>
			  		
			  		
			  	</table>
			  	
			</div>

			
		
	
	
	
			
		
		
				
	
		</div>
		
	


<!--end of login & registration bar-->




<!--to for sign up profile image-->	
<script type="text/javascript">
	
	function pick(){
		$("input#pic").click();
	}
	
	
</script>
		
		
<!--to change filter range values-->		
<script>
	var slider = document.getElementById("Range");
	var output = document.getElementById("rangev");
	output.innerHTML = slider.value;

	slider.oninput = function() {
	  output.innerHTML = this.value;
	}
</script>


<!--script to toggle filter-->
<script type="text/javascript">

	$("#hide").click(function(){
	  $(".filter").slideUp();
	});
	
	
	
	$("#show").click(function(){
	  $(".filter").slideDown();
	});

</script>




<!--script to toggle filter icons-->
<script type="text/javascript">
	
	//for cash

	$("#cash-img").click(function(){
	  $("#cash-img").hide();
	  $("#cashh-img").show();
	  
	  $("#cash-text").hide();
	  $("#cashh-text").show();
	});
	
	$("#cashh-img").click(function(){
	  $("#cashh-img").hide();
	  $("#cash-img").show();
	  
	  $("#cashh-text").hide();
	  $("#cash-text").show();
	});
	
	
	
	//for exchange
	
	$("#ex-img").click(function(){
	  $("#ex-img").hide();
	  $("#exx-img").show();
	  
	  $("#ex-text").hide();
	  $("#exx-text").show();
	});
	
	$("#exx-img").click(function(){
	  $("#exx-img").hide();
	  $("#ex-img").show();
	  
	  $("#exx-text").hide();
	  $("#ex-text").show();
	});
	
	
	
	//for services
	
	$("#se-img").click(function(){
	  $("#se-img").hide();
	  $("#see-img").show();
	  
	  $("#se-text").hide();
	  $("#see-text").show();
	});
	
	$("#see-img").click(function(){
	  $("#see-img").hide();
	  $("#se-img").show();
	  
	  $("#see-text").hide();
	  $("#se-text").show();
	});
	
	
	
	//for events
	
	$("#ev-img").click(function(){
	  $("#ev-img").hide();
	  $("#evv-img").show();
	  
	  $("#ev-text").hide();
	  $("#evv-text").show();
	});
	
	$("#evv-img").click(function(){
	  $("#evv-img").hide();
	  $("#ev-img").show();
	  
	  $("#evv-text").hide();
	  $("#ev-text").show();
	});
	
	
	
	//for free
	
	$("#fr-img").click(function(){
	  $("#fr-img").hide();
	  $("#frr-img").show();
	  
	  $("#fr-text").hide();
	  $("#frr-text").show();
	});
	
	$("#frr-img").click(function(){
	  $("#frr-img").hide();
	  $("#fr-img").show();
	  
	  $("#frr-text").hide();
	  $("#fr-text").show();
	});
	
	
	
	//for the entire filter
	
	$("#show").click(function(){
	  $(".filter").slideDown();
	});
	
	
	
	
	//for the sign-in evironment
	$("#signs").click(function(){
	  $("#signs-cont").toggle();
	  $("#signs-bar").animate({width: "toggle"});
	});
	
	
	$("#signs-close").click(function(){
	  $("#signs-cont").toggle();
	  $("#signs-bar").animate({width: "toggle"});
	  
	});
	
	
	$("#signs-cont").click(function(){
	  $("#signs-cont").toggle();
	  $("#signs-bar").animate({width: "toggle"});
	  
	});
	

</script>



<script>
	function openCity(evt, cityName) {
	  var i, tabcontent, tablinks;
	  tabcontent = document.getElementsByClassName("tabcontent");
	  for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablinks");
	  for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " active";
	}
</script>
		
		
<br><br><br><br>
	
			
			
			<!--the banner-->
			<div class="ads"></div>
			<!--end of the banner-->
			
			
			
			
			<!--the menu items-->
			<div class="menu-scroll">
				<a href="category.php?page=category" class="lin"><div class="menu-scroll-item">Fort Hood, TX</div></a>&nbsp;
				<a href="category.php?page=category" class="lin"><div class="menu-scroll-item">Cash Sales</div></a>&nbsp;
				<a href="category.php?page=category" class="lin"><div class="menu-scroll-item">Exchanges</div></a>&nbsp;
				<a href="category.php?page=category" class="lin"><div class="menu-scroll-item">Free</div></a>&nbsp;
				<a href="category.php?page=category" class="lin"><div class="menu-scroll-item">Other Stuffs</div></a>&nbsp;
			</div>
			<!--end of the menu items-->
			
			
			
			<!--the product item slab2-->
			<div class="products-slab-cat2">
						
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/SalePostIcon.svg"/>
					
					<a href="single-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/ec1bd85c9aaec9656f2814d04c2a7784.jpg" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						iPhone 8 Unlocked 64GB
					</div>
				
				</div>
			
				<!--end of the product item-->
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/ExchangePostIcon.svg"/>
					
					<a href="exchange-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/166164b80fe8f4642fb7ffaacbc77815.jpg" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						Apple Watch S2 Grey strap
					</div>
					
				</div>
				
				<!--end of the product item-->
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/ServicePostIcon.svg"/>
					
					<a href="services-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/620x349.png" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						iWatch Series 3 + Cellular
					</div>
					
				</div>
				
				<!--end of the product item-->
				
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/EventPostIcon.svg"/>
					
					<a href="garage-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/0afab18305410b5accb0b62c413d93a55.png" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						iPhone 8 Unlocked 64GB
					</div>
					
				</div>
				
				<!--end of the product item-->
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/ServicePostIcon.svg"/>
					
					<a href="services-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/620x349.png" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						Apple Watch S2 Grey strap
					</div>
					
				</div>
				
				<!--end of the product item-->
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/SalePostIcon.svg"/>
					
					<a href="single-post.php?log=logged&page=post&img=18621dc61b7509a1c21b40b0921a62e1.jpeg">
						<div class="crop">
							<img src="images/18621dc61b7509a1c21b40b0921a62e1.jpg"  alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						iWatch Series 3 + Cellular
					</div>
					
				</div>
				
				<!--end of the product item-->


				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/SalePostIcon.svg"/>
					
					<a href="single-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/ec1bd85c9aaec9656f2814d04c2a7784.jpg" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						iPhone 8 Unlocked 64GB
					</div>
			
				</div>
		
				<!--end of the product item-->
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/ExchangePostIcon.svg"/>
					
					<a href="exchange-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/166164b80fe8f4642fb7ffaacbc77815.jpg" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						Apple Watch S2 Grey strap
					</div>
					
				</div>
				
				<!--end of the product item-->
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/ServicePostIcon.svg"/>
					
					<a href="services-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/620x349.png" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						iWatch Series 3 + Cellular
					</div>
					
				</div>
				
				<!--end of the product item-->
				
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/EventPostIcon.svg"/>
					
					<a href="garage-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/0afab18305410b5accb0b62c413d93a55.png" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						iPhone 8 Unlocked 64GB
					</div>
					
				</div>
				
				<!--end of the product item-->
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/ServicePostIcon.svg"/>
					
					<a href="services-post.php?log=logged&page=post">
						<div class="crop">
							<img src="images/620x349.png" alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						Apple Watch S2 Grey strap
					</div>
					
				</div>
				
				<!--end of the product item-->
				
				<!--the product item-->
				<div class="product-item2">
				
					<img class="indicator" src="img/SalePostIcon.svg"/>
					
					<a href="single-post.php?log=logged&page=post&img=18621dc61b7509a1c21b40b0921a62e1.jpeg">
						<div class="crop">
							<img src="images/18621dc61b7509a1c21b40b0921a62e1.jpg"  alt="Donald Duck">
						</div>
					</a>
					
					<div class="product-item-text">
						iWatch Series 3 + Cellular
					</div>
					
				</div>
				
				<!--end of the product item-->
				
			
			</div>
			<!--end of the product item slab2-->
			
			
			
	
    <br><br><br><br>
    
    <div class="foott">
        
        <table  width="100%" bgcolor="transparent" style="position:fixed; bottom:0px;" cellpadding="20px" align="center" cellspacing="20px" >
        
        	<tr>
        
        		<td align="center"  class="foot-menu-cell">
        			
        			<a href="index.php?log=logged">
        			<img src="img/menuhome.svg" class="menu-cell-img"/>
        			</a>
        			<br>
        			<div class="font-menu-cell-text">Home</div>
        		
        		</td>
        
        		<td align="center" class="foot-menu-cell">
        			
        			<a href="notifications.php?page=notify&log=logged">
        			<img src="img/menualert.svg" class="menu-cell-img"/>
        			</a>
        			<br>
        			<div class="font-menu-cell-text">Alerts</div>
        			
        		
        		</td>
        
        		<td align="center" class="foot-menu-cell">
        			
        			<a href="pass-on-cash.php?page=passcash">
        				<div class="footercam">
        					<font style="font-size:29px;"><i class="fa fa-camera" aria-hidden="true"></i></font>
        					<br>
        					<div class="footercamtxt">Pass on</div>
        				</div>
        			</a>
        			
        		
        		</td>
        
        		
        
        		<td align="center" class="foot-menu-cell">
        			
        			<a href="messages.php?page=message&log=logged">
        			<img src="img/menumessage.svg" class="menu-cell-img2"/>
        			</a>
        			<br>
        			<div class="font-menu-cell-text2">Inbox</div>
        			
        		
        		</td>
        
        		<td align="center" class="foot-menu-cell">
        			
        			<a href="account.php?page=profile&log=logged">
        			<img src="img/account.svg" class="menu-cell-img3"/>
        			</a>
        			<br>
        			<div class="font-menu-cell-text3">Account</div>
        			
        		
        		</td>
        
        
        	
        	</tr>
        
        </table>
    
    </div>

</div>

<script type="text/javascript">

//$(window).on("scroll", function() {
   // var scrollPos = $(window).scrollTop();
   // if (scrollPos <= 0) {
    //     $(".footercam").fadeIn();
    //} else {
    //    $(".footercam").fadeOut();
   // }
//});

</script>
	
	
	</body>

</html>
