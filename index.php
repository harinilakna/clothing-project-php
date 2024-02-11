<?php
include 'header.php';
?>
<html>
<body>
<div class="slideshow-container">
                        <div class="mySlides">
                         <img src="image/d.jpg" style="height:620px; width:100%">
                        </div>
                        
                        <div class="mySlides">
                         <img src="image/e.jpeg" style="height:620px; width:100%">
                        </div>
						
                        <div class="mySlides">
                          <img src="image/f.jpeg" style="height:620px; width:100%">
					   
					   </div>
					   
					   <div style="text-align:center">
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                          <span class="dot"></span> 
                        </div>
                </div>
                       
                        
                        
                        
                        <script>
                        var slideIndex = 0;
                        showSlides();
                        
                        function showSlides() {
                          var i;
                          var slides = document.getElementsByClassName("mySlides");
                          var dots = document.getElementsByClassName("dot");
                          for (i = 0; i < slides.length; i++) {
                            slides[i].style.display = "none";  
                          }
                          slideIndex++;
                          if (slideIndex > slides.length) {slideIndex = 1}    
                          for (i = 0; i < dots.length; i++) {
                            dots[i].className = dots[i].className.replace(" active", "");
                          }
                          slides[slideIndex-1].style.display = "block";  
                          dots[slideIndex-1].className += " active";
                          setTimeout(showSlides, 2000); 
                        }
						
                        </script>

              </div>
<div class="container-fluid">
<div class="row">
<div class="col-12" style="background-color:black;">
<p contentEditable="true" style="color:white">Copyright &copy; 2021. All rights reserved </p>
</div>
</div>
</div>
</body>
</html>