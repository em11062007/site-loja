<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Search results</title>
  	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"> 
    <meta name="description" content="Your description">
    <meta name="keywords" content="Your keywords">
    <meta name="author" content="Your name">

    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <!-- <link rel="stylesheet" href="css/fonts.css" type="text/css" media="all"> -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all">


    <script src="js/jquery.js"></script>
	<script src="search/search.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.mobilemenu.js"></script>


     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/scroll_to_top.js"></script>
     <script src="js/script.js"></script>
     <script src="js/sForm.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/touchTouch.jquery.js"></script>

     <!-- font-awesome font -->
     <link rel="stylesheet" href="font/font-awesome.css" type="text/css" media="screen">
     <!-- fontello font -->

<!--[if lt IE 8]>
   <div style=' clear: both; text-align:center; position: relative;'>
     <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
       <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
    </a>
  </div>
<![endif]-->
<!--[if lt IE 9]>
	<script src="js/html5.js"></script>
	<link rel="stylesheet" href="css/ie.css"> 
<![endif]-->
</head>
<body>
<!--button back top-->
<div id="back-top"></div>    
<div class="main">
  <div class="div-content">  

    <div class="container_12">
      <div class="grid_12">
        <div class="top_section">
          <h1><a href="index.html"><img src="images/logo.png" alt="Mellis"></a></h1>
          <p><strong class="icon-phone"></strong> <a href="#">+1 959 603 6035</a></p>
          <div class="clear"></div>
        </div>
      </div>
    </div>

<!--==============================header=================================-->
      <header>
        <div class="container_12">
           <div class="grid_12">
              <nav>
                <ul class="sf-menu header_menu">
                   <li><a href="index.html">About us<strong></strong></a></li>
                   <li><a href="index-1.html"><span></span>Honey products<strong></strong></a>
                      <ul class='submenu'>
                        <li><a href="#">Vestibulum iaculis</a></li>
                        <li class='sub-menu'><a href="#">Fusce euismod conuat</a>
                           <ul class='submenu2'>
                              <li><a href="#">Pellentesque sed</a></li>
                              <li><a href="#">Aliquam congue ferm</a></li>
                              <li><a href="#">Mauris accum</a></li>
                           </ul>
                        </li>
                        <li><a href="#">Pellentesque</a></li>
                      </ul>
                   </li>

                   <li><a href="index-2.html">Bees<strong></strong></a></li>
                   <li><a href="index-3.html">Farm tour<strong></strong></a></li>
                   <li><a href="index-4.html">Ordering<strong></strong></a></li>
                   <li><a href="index-5.html">Contact us<strong></strong></a></li>
                </ul>
              </nav>

              <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                <input type="text" name="s" value="" />
                <a onclick="document.getElementById('search').submit()"></a>
              </form>

           </div>
        </div>
      </header>


   
	
        <div class="container_12">
            <div class="grid_12 mar_5px">

                  <div class="marBot4">
                      <h3>Search result:</h3>
                      <div id="search-results"></div>
                  </div>
            </div>
        </div>





<!--=======footer=================================-->
              

    </div>

    <!--=======footer=================================-->
      <footer>
        <div class="main-footer">
           <div class="container_12">
              <div class="grid_12">
                  <div class="footer_cols">
                    <div class="grid_3 alpha">
                      <a href="index.html" class="logo_footer"><img src="images/logo_footer.png" alt="Mellis" class="no_resize"></a>
                    </div>
  
                    <div class="grid_3">
                      <nav>
                        <ul class="sf-menu">
                          <li><a href="index.html">About us</a></li>
                          <li><a href="index-1.html"><span></span>Honey products</a></li>
                          <li><a href="index-2.html">Bees</a></li>
                          <li><a href="index-3.html">Farm tour</a></li>
                          <li><a href="index-4.html">Ordering</a></li>
                          <li><a href="index-5.html">Contact us</a></li>
                        </ul>
                     </nav>
                    </div>
                  

                    <div class="grid_3">
                      <h2 class="h2_footer">Follow us</h2>
                      <ul class="soc_icons">
                      <li><a href="#"><i class="icon-google-plus"></i></a></li>
                      <li><a href="#"><i class="icon-twitter"></i></a></li>
                      <li><a href="#"><i class="icon-facebook"></i></a></li>
                      <li><a href="#"><i class="icon-pinterest"></i></a></li>
                      <li><a href="#"><i class="icon-linkedin"></i></a></li>
                      <!-- <li><a href="#"><i class="icon-rss"></i></a></li> -->
                    </ul>
                    </div>
                  </div>

                  <div class="grid_3 omega">
                    <h2 class="h2_footer">Newsletter:</h2>
                    <form id="subscribe-form">
                      <div class="success">Your subscription request has been sent!</div>
                    <fieldset>
                      <label class="name">
                         <input type="text" value="Name">
                         <span class="error">*This is not a valid name.</span>
                      </label>
                      <label class="email">
                       <input type="email" value="Email" onfocus="myFocus(this);" onblur="myBlur(this);"/>
                       <span class="error">*This is not a valid email address.</span></label>
                      <div class="btns"><a href="#" class="button more_btn3" data-type="submit">sign up</a></div>
                    </fieldset>
                   </form>
                  </div>


                
              </div>
           </div>
        </div>
        <div class="footer_priv">
           <div class="container_12">
            <div class="grid_12">
              <p>&copy; 2013 <a href="index-6.html">Mellis. Honey Commerce</a></p>
            </div>

           </div>
        </div>  
      </footer>

  </div>
<script type="text/javascript">
 
    function myFocus(element){
           if (element.value == element.defaultValue){
               element.focus();
               element.value = '';
           }
        }
        function myBlur(element){
           if (element.value == ''){
               element.blur();
               element.value = element.defaultValue;
           }
        }
</script>					
</body>
</html>