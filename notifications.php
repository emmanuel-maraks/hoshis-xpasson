
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
	    
		<!--mobile header for notification-->
		<div class="row">
		
			<div class="headnav-other">
			
				<table width="100%" cellpadding="7px" cellspacing="7px">
				
						
						
						
				
				</table>
				
				<table width="100%" cellpadding="15px" cellspacing="15px">
				
						
						<tr>
							
							<td align="center"></td>
						
						</tr>
				
						<tr>
							<td align="left"><a href="index.php?log=logged"><img src="img/hm.svg" /></a></td>
							<td align="center" class="headertext">Notifications</td>
							<td align="right"><i id="signs" class="fas fa-bars basic-header-text"></i></td>
						</tr>
				
				</table>
			
			</div>
	
		</div>
		
		<!--end of mobile header for notifications-->
















































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
				
				
				<br>
				
				<table width="100%" cellpadding="7px" cellspacing="7px"> 
					
					<tr>
						<td align="center"><img src="images/smile-face.svg"  width="60.9px" height="58.33px" class="profile-photo" /></td>
					</tr>
					<tr>
						<td align="center"> <span class="signin-profile-text"> Randy White Jr. </span> </td>
					</tr>
					<tr>
						<td align="center"> <input type="submit" class="signin-profile-button" value="VERIFIED" /></td>
					</tr>
					
				</table>
		
		
			</div>
			
			<br>
			
			<div class="tabcontent2">
			
				<table width="100%" cellpadding="10px" cellspacing="2px">
					
					<tr>
						<td align="left"> 
							<img src="img/home.svg" /> 
						</td>
						<td width="90%"> 
							<a style="text-decoration:none;" href="index.php?log=logged">
								<span class="profile-page-text" >Home</span> 
							</a>
							<div class="thin-line-abs"></div>
						</td>
					</tr>
					
					
					<tr>
						<td align="left"> 
							<img src="img/notifications.svg" /> 
						</td>
						<td width="90%">
							<a style="text-decoration:none;" href="notifications.php?page=notify&log=logged"> 
								<span class="profile-page-text" >Notifications</span>
							</a>
							<div class="thin-line-abs"></div> 
						</td>
					</tr>
					
					
					<tr>
						<td align="left"> 
							<img src="img/message.svg" /> 
						</td>
						<td width="90%"> 
							<a style="text-decoration:none;" href="messages.php?page=message&log=logged">
								<span class="profile-page-text" >Messages</span>
							</a>
							<div class="thin-line-abs"></div> 
						</td>
					</tr>
					
					
					<tr>
						<td align="left"> 
							<img src="img/favourites.svg" /> 
						</td>
						<td width="90%"> 
							<a style="text-decoration:none;" href="favorites.php?page=favorite&log=logged">
								<span class="profile-page-text" >Favorites</span>
							</a> 
							<div class="thin-line-abs"></div>
						</td>
					</tr>
					
					
					
					
					
					
					<tr>
						<td align="left"> 
							<img src="img/passon.svg" /> 
							<div class="thin-line-abs2"></div>
						</td>
						<td width="90%"> 
							<a style="text-decoration:none;" href="pass-on-cash.php?page=passcash">
								<span class="profile-page-text" >Pass on</span> 
							</a>
							
						</td>
					</tr>
					
					
					
					
					
					<tr>
						<td align="left"> 
							
						</td>
						
					</tr>
					
					
					<tr>
						<td align="left"> 
							<img src="img/feedback.svg" /> 
						</td>
						<td width="90%"> 
							<a style="text-decoration:none;" href="account.php?page=profile&log=logged">
								<span class="profile-page-text" >Profile</span> 
							</a>
							<div class="thin-line-abs"></div>
						</td>
					</tr>
		
					
					<tr>
						<td align="left"> 
							<img src="img/feedback.svg" /> 
						</td>
						<td width="90%"> 
							<a style="text-decoration:none;" href="feedback.php?page=feedback&log=logged">
								<span class="profile-page-text" >Feedback</span> 
							</a>
							<div class="thin-line-abs"></div>
						</td>
					</tr>
					
					
					<tr>
						<td align="left"> 
							<img src="img/signout.svg" /> 
						</td>
						<td width="90%"> 
							<span class="profile-page-text" >Sign out</span> 
						</td>
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
	
	
	
	<table width="100%">
	
		<!--notification item with nothing-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-white" cellspacing="8px" width="100%">
				
					<tr>
						<td width="3%"></td>
						<td width="87%"> 
							<span class="notfication-main-text">Cynthia J.</span>  <span class="notfication-action-text">liked</span>  <span class="notfication-main-text">Unlocked iPhone 8 Gold</span>  
							<br>
							<div class="notfication-time-text">1 min ago</div>
						</td>
						<td width="10%"></td>
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!-- end of notification item with nothing-->
		
		
		<!--notification blue item with unread and action required-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-blue" cellspacing="8px" width="100%">
				
					<tr>
						<td align="left" width="3%"> 
							<img class="not-rec-position" src="img/blue-rec.svg" /> 
						</td>
						
						<td width="87%"> 
							<span class="notfication-main-text">Cynthia J.</span>  <span class="notfication-action-text">bought</span>  <span class="notfication-main-text">Unlocked iPhone 8 Gold</span>  
							<br>
							<div class="notfication-time-text">3 mins ago</div>
						</td>
						
						<td align="right" width="10%"> 
							<img class="not-rec-position" src="img/arrow-blue.svg" /> 
						</td>
						
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!-- end of notification blue item with unread and action required-->
		
		
		<!--notification red item with unread and action required-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-red" cellspacing="8px" width="100%">
				
					<tr>
						<td align="left" width="3%"> 
							<img class="not-rec-position" src="img/red-rec.svg" /> 
						</td>
						
						<td width="87%"> 
							<span class="notfication-main-text">Mark N.</span>  <span class="notfication-action-text">hired</span>  <span class="notfication-main-text">Handyman Services</span>  
							<br>
							<div class="notfication-time-text">5 mins ago</div>
						</td>
						
						<td align="right" width="10%"> 
							<img class="not-rec-position" src="img/arrow-red.svg" /> 
						</td>
						
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!--end of notification red item with unread and action required-->
		
		
		<!--notification red item with read and action required-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-red" cellspacing="8px" width="100%">
				
					<tr>
						<td align="left" width="3%"> 
							 
						</td>
						
						<td width="87%"> 
							<span class="notfication-main-text">Mercy P.</span>  <span class="notfication-action-text">hired</span>  <span class="notfication-main-text">Handyman Services</span>  
							<br>
							<div class="notfication-time-text">6 mins ago</div>
						</td>
						
						<td align="right" width="10%"> 
							<img class="not-rec-position" src="img/arrow-red.svg" /> 
						</td>
						
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!--end of notification red item with read and action required-->
		
		
		<!--notification item with nothing-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-white" cellspacing="8px" width="100%">
				
					<tr>
						<td width="3%"></td>
						<td width="87%"> 
							<span class="notfication-main-text">Victoria C.</span>  <span class="notfication-action-text">liked</span>  <span class="notfication-main-text">Unlocked iPhone 8 Gold</span>  
							<br>
							<div class="notfication-time-text">7 mins ago</div>
						</td>
						<td width="10%"></td>
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!-- end of notification item with nothing-->
		
		
		<!--notification orange item with unread and action required-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-orange" cellspacing="8px" width="100%">
				
					<tr>
						<td align="left" width="3%"> 
							 <img class="not-rec-position" src="img/orange-rec.svg" /> 
						</td>
						
						<td width="87%"> 
							<span class="notfication-main-text">Victoria C.</span>  <span class="notfication-action-text">is attending</span>  <span class="notfication-main-text">Mississippi Garage Sale</span>  
							<br>
							<div class="notfication-time-text">9 mins ago</div>
						</td>
						
						<td align="right" width="10%"> 
							<img class="not-rec-position" src="img/arrow-orange.svg" /> 
						</td>
						
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!--end of notification orange item with unread and action required-->
		
		
		<!--notification green item with unread and action required-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-green" cellspacing="8px" width="100%">
				
					<tr>
						<td align="left" width="3%"> 
							 <img class="not-rec-position" src="img/green-rec.svg" /> 
						</td>
						
						<td width="87%"> 
							<span class="notfication-main-text">Victoria C.</span>  <span class="notfication-action-text">exchanged</span>  <span class="notfication-main-text">Rose Pink Apple Watch with sil...</span>  
							<br>
							<div class="notfication-time-text">9 mins ago</div>
						</td>
						
						<td align="right" width="10%"> 
							<img class="not-rec-position" src="img/arrow-green.svg" /> 
						</td>
						
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!--end of notification green item with unread and action required-->
		
		
		<!--notification item with nothing-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-white" cellspacing="8px" width="100%">
				
					<tr>
						<td width="3%"></td>
						<td width="87%"> 
							<span class="notfication-main-text">Victoria C.</span>  <span class="notfication-action-text">liked</span>  <span class="notfication-main-text">Unlocked iPhone 8 Gold</span>  
							<br>
							<div class="notfication-time-text">18 hours ago</div>
						</td>
						<td width="10%"></td>
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!-- end of notification item with nothing-->
		
		
		<!--notification item with nothing-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-white" cellspacing="8px" width="100%">
				
					<tr>
						<td width="3%"></td>
						<td width="87%"> 
							<span class="notfication-main-text">Victoria C.</span>  <span class="notfication-action-text">liked</span>  <span class="notfication-main-text">Unlocked iPhone 8 Gold</span>  
							<br>
							<div class="notfication-time-text">2 days ago</div>
						</td>
						<td width="10%"></td>
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!-- end of notification item with nothing-->
		
		
		<!--notification item with nothing-->
		<tr>
			<td>
			
				<table cellpadding="8px" class="bg-white" cellspacing="8px" width="100%">
				
					<tr>
						<td width="3%"></td>
						<td width="87%"> 
							<span class="notfication-main-text">Victoria C.</span>  <span class="notfication-action-text">liked</span>  <span class="notfication-main-text">Unlocked iPhone 8 Gold</span>  
							<br>
							<div class="notfication-time-text">2 weeks ago</div>
						</td>
						<td width="10%"></td>
					</tr>
					
				
				</table>
			
			</td>
		</tr>
		<!-- end of notification item with nothing-->
		
	
	</table>
	
	
	<br><br>
	
	
		
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
