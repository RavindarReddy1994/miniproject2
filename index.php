<!DOCTYPE html>
<html>
<head>
    <!--css for sign in & login buttons-->
     <style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    height:40px;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn:hover, .dropbtn:focus {
    background-color: #3e8e41;
}

.dropdown {
    float:right;
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width:160px;
    height:120px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 15px 20px;
    text-decoration: none;
    display: block;
}

.dropdown a:hover {background-color: #f1f1f1}

.show {display:block;}
         
.dropbtn1 {
    background-color: #4CAF50;
    color: white;
    height:40px;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropbtn1:hover, .dropbtn1:focus {
    background-color: #3e8e41;
}

.dropdown1 {
    float:right;
    position: relative;
    display: inline-block;
}

.dropdown-content1 {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width:160px;
    height:120px;
    overflow: auto;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content1 a {
    color: black;
    padding: 15px 20px;
    text-decoration: none;
    display: block;
}

.dropdown1 a:hover {background-color: #f1f1f1}

.show {display:block;}         
</style>
    <!--end for css for sign in & login buttons-->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="sample.css">
    <script type="text/javascript" src="jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="jquery-1.12.1.min.js"></script>
</head>
  <body>
      <div id="header1">
          <ul id="nav1"> 
		    <li><div class="dropdown">
				<button onclick="myFunction()" class="dropbtn">Sign Up As</button>
				<div id="myDropdown" class="dropdown-content">
					<a href="ngoregister.php">NGO</a>
					<a href="register.php">Resturant</a>
				</div>
			</div></li>
		
			<li><div class="dropdown1">
				<button onclick="myFunction1()" class="dropbtn1">LogIn As</button>
				<div id="myDropdown1" class="dropdown-content1">
					<a href="ngoindex1.php">NGO</a>
					<a href="index1.php">Resturant</a>
				</div>
			</div></li>
			<li></li><li></li><li></li>
          </ul>
          <div id="img">
              <img src="stp.jpg" height="105px" width="250px">
          </div>
          <div><center><font size="7">Stop Wasting Now</font></center></div>
      </div>
        <div id="navg">
        <ul id="nav"> 
        <li><a href="site.php">Home</a></li>
        <li><a href="what we do.html" target="blank">what we do</a></li>
        <li><a href="fact.html">facts</a></li>
        <li><a href="aboutus.html">about us</a></li>
        </ul>
        </div>
    <div class="slider" id="main-slider"><!-- outermost container element -->
	<div class="slider-wrapper"><!-- innermost wrapper element -->
		<img src="mp1.jpg" alt="First" class="slide" /><!-- slides -->
		<img src="mp11.jpg" alt="Second" class="slide" />
		<img src="mp12.jpg" alt="Third" class="slide" />
	</div>
</div>
      <!--css for slideshow-->
    <style>html,body {
	margin: 0;
	padding: 0;
}
.slider {
	width: 1024px;
	margin: 2em auto;
	height:390px;
	
}

.slider-wrapper {
	width: 100%;
	height: 400px;
	position: relative;
}

.slide {
	float: left;
	position: absolute;
	width: 100%;
	height: 100%;
	opacity: 0;
	transition: opacity 3s linear;
}

.slider-wrapper > .slide:first-child {
	opacity: 1;
}
    </style>
      <!--css for slideshow-->
      <!--script for slideshow-->
    <script>
(function() {
	
	function Slideshow( element ) {
		this.el = document.querySelector( element );
		this.init();
	}
	
	Slideshow.prototype = {
		init: function() {
			this.wrapper = this.el.querySelector( ".slider-wrapper" );
			this.slides = this.el.querySelectorAll( ".slide" );
			this.previous = this.el.querySelector( ".slider-previous" );
			this.next = this.el.querySelector( ".slider-next" );
			this.index = 0;
			this.total = this.slides.length;
			this.timer = null;
			
			this.action();
			this.stopStart();	
		},
		_slideTo: function( slide ) {
			var currentSlide = this.slides[slide];
			currentSlide.style.opacity = 1;
			
			for( var i = 0; i < this.slides.length; i++ ) {
				var slide = this.slides[i];
				if( slide !== currentSlide ) {
					slide.style.opacity = 0;
				}
			}
		},
		action: function() {
			var self = this;
			self.timer = setInterval(function() {
				self.index++;
				if( self.index == self.slides.length ) {
					self.index = 0;
				}
				self._slideTo( self.index );
				
			}, 3000);
		},
		stopStart: function() {
			var self = this;
			self.el.addEventListener( "mouseover", function() {
				clearInterval( self.timer );
				self.timer = null;
				
			}, false);
			self.el.addEventListener( "mouseout", function() {
				self.action();
				
			}, false);
		}
		
		
	};
	
	document.addEventListener( "DOMContentLoaded", function() {
		
		var slider = new Slideshow( "#main-slider" );
		
	});
	
	
})();
    </script>
      <!--end of script for slideshow-->
      <!--script for sign up-->
      <script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
      <!--end of script for sign up-->
      <!--script for login-->
<script>
    
    /* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function myFunction1() {
    document.getElementById("myDropdown1").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn1')) {

    var dropdowns = document.getElementsByClassName("dropdown-content1");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
    </script>
      <!-- end of script for login-->
    

<script src="../jquery-1.4.2.min.js"></script>
<!--script for functions-->
<script>
$(window).load(function(){
		var pages = $('#container li'), current=0;
		var currentPage,nextPage;
		var handler=function(){
			$('#container .button').unbind('click');
			currentPage= pages.eq(current);
			if($(this).hasClass('prevButton'))
			{
				if (current <= 0)
					current=pages.length-1;
				else
					current=current-1;
			}
			else
			{

				if (current >= pages.length-1)
					current=0;
				else
					current=current+1;
			}
			nextPage = pages.eq(current);	
			currentPage.fadeTo('slow',0.3,function(){
				nextPage.fadeIn('slow',function(){
					nextPage.css("opacity",1);
					currentPage.hide();
					currentPage.css("opacity",1);
					$('#container .button').bind('click',handler);
				});	
			});
		}

		$('#container .button').click(handler);
		
});

</script>
      <!-- end of script for functions-->
      <div id="footer">
<font size="5"><marquee><img src="images.png" width="30" align="center">  If U Can't feed a hundred then just feed one <img src="images.png" width="30" align="center"> We make LIVING by what we GET But We make LIFE by what we GIVE <img src="images.png" width="30" align="center"> Donate food join us in Fight Aganist Hunger <img src="images.png" width="30" align="center"> Wealth is not to feed our egos,but to feed the Hungry and to help people <img src="images.png" width="30" align="center"></marquee></font>

</div>
      
 </body>
</html>