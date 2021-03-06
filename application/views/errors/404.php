<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php $domain = "http://planyourtours.com/"."public/assets/";?>
  <!-- START head -->
  <head>
    <!-- Site meta charset -->
    <meta charset="UTF-8">
    
    <!-- title -->
    <title>Home | Travel Hub HTML5 Template</title>
    
    <!-- meta description -->
    <meta name="description" content="YOUR META DESCRIPTION GOES HERE" />
    
    <!-- meta keywords -->
    <meta name="keywords" content="YOUR META KEYWORDS GOES HERE" />
    
    <!-- meta viewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    
    <!-- favicon -->
    <link rel="icon" href="favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
    
    <!-- bootstrap 3 stylesheets -->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain;?>css/bootstrap.css" media="all" />
    <!-- template stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain;?>css/styles.css" media="all" />
    
    <!-- responsive stylesheet -->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain;?>css/responsive.css" media="all" />
    <!-- Load Fonts via Google Fonts API -->
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Karla:400,700,400italic,700italic" />
    <!-- color scheme -->
    <link rel="stylesheet" type="text/css" href="<?php echo $domain;?>css/colors/color1.css" title="color1" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $domain;?>css/colors/color2.css" title="color2" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $domain;?>css/colors/color3.css" title="color3" />
    <link rel="alternate stylesheet" type="text/css" href="<?php echo $domain;?>css/colors/color4.css" title="color4" />
    
  </head>
  <!-- END head -->

  <!-- START body -->
  <body>
    <!-- START #wrapper -->
    <div id="wrapper">
      <!-- START header -->
      <header>
        <!-- START #top-header -->
        <div id="top-header">
          <div class="container">
            <div class="row top-row">
              <div class="col-md-6">
                <div class="left-part alignleft">
                  <span class="contact-email small">support@planyourtours.com</span>
                  <span class="contact-phone small">+91 973 072 7914</span>
                  <ul class="social-media header-social">
                    <li><a class="sm-yahoo" href="#"><span>Yahoo</span></a></li>
                    <li><a class="sm-facebook" href="#"><span>Facebook</span></a></li>
                    <li><a class="sm-rss" href="#"><span>RSS</span></a></li>
                    <li><a class="sm-flickr" href="#"><span>Flicker</span></a></li>
                    <li><a class="sm-windows" href="#"><span>Windows</span></a></li>
                    <li><a class="sm-stumble" href="#"><span>Stumbleupon</span></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-md-6">
                <div class="right-part alignright">
                  <form action="#" method="get">
                    <fieldset class="alignright">
                      <input type="text" name="s" class="search-input" value="Search..." onfocus="if (this.value == 'Search...') { this.value = ''; }" onblur="if (this.value == '') { this.value = 'Search...'; }" />
                      <input type="submit" name="submit" class="search-submit" value="" />
                    </fieldset>
                  </form>
                  <span class="top-link small">Tell a Friend</span>
                  <span class="top-link small">Bookmark</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END #top-header -->
        
        <!-- START #main-header -->
        <div id="main-header">
          <div class="container">
            <div class="row">
              <div class="col-md-3">
                <a id="site-logo" href="#">
                  <img src="<?php echo $domain;?>img/logo.png" alt="Travel Hub" />
                </a>
              </div>
              <div class="col-md-9">
                <nav class="main-nav">
                  <span>MENU</span>
                  <ul id="main-menu">
                    <li><a href="/home" title="">HOME</a></li>
                    <li><a title="">BLOG</a>
                      <ul>
                        <li><a href="blog.html" title="">BLOG PAGE</a></li>
                        <li><a href="blog-sidebar.html" title="">BLOG PAGE WITH SIDEBAR</a></li>
                        <li><a href="blog-detail.html" title="">BLOG DETAIL</a></li>
                        <li><a href="blog-detail-sidebar.html" title="">BLOG DETAIL SIDEBAR</a></li>
                        <li><a href="blog-listview.html" title="">LIST VIEW</a></li>
                        <li><a href="blog-listview-sidebar.html" title="">LIST VIEW SIDEBAR</a></li>
                        <li><a href="single.html" title="">SINGLE POST</a></li>
                      </ul>
                    </li>
                    <li><a title="">CONTACT</a>
                      <ul>
                        <li><a href="contact.html" title="">CONTACT PAGE 1</a></li>
                        <li><a href="contact-us.html" title="">CONTACT PAGE 2</a></li>
                      </ul>
                    </li>
                    <li><a title="">GALLERY</a>
                      <ul>
                        <li><a href="gallery.html" title="">GALLERY COLUMNS</a></li>
                        <li><a href="gallery-slideshow.html" title="">GALLERY SLIDESHOW</a></li>
                      </ul>
                    </li>
                    <li><a title="">PAGES</a>
                      <ul>
                        <li><a href="widget.html" title="">WIDGETS</a></li>
                        <li><a href="shortcodes.html" title="">SHORTCODES</a></li>
                        <li><a href="404page.html" title="">404 ERROR PAGE</a></li>
                        <li><a href="booking-form.html" title="">BOOKING FORM</a></li>
                        <li><a href="order-confirmation.html" title="">ORDER CONFIRMATION</a></li>
                        <li><a href="price-table.html" title="">PRICE TABLES</a></li>
                        <li><a href="sign-in.html" title="">SIGN IN</a></li>
                        <li><a href="sign-up.html" title="">SIGN UP</a></li>
                        <li><a href="tour-plan.html" title="">TOUR PLAN</a></li>
                        <li><a href="user-profile.html" title="">USER PROFILE</a></li>
                      </ul>
                    </li>                   
                    <li><a title="">DEALS</a>
                      <ul>
                        <li><a href="deals.html" title="">DEALS PAGE</a></li>
                        <li><a href="deals-sidebar.html" title="">DEALS PAGE WITH SIDEBAR</a></li>
                        <li><a href="deals-detail.html" title="">DEALS DETAIL</a></li>
                        <li><a href="deals-detail-sidebar.html" title="">DEALS DETAIL SIDEBAR</a></li>
                        <li><a href="deals-listview.html" title="">LIST VIEW</a></li>
                        <li><a href="deals-listview-sidebar.html" title="">LIST VIEW SIDEBAR</a></li>
                      </ul>
                    </li>
                    <li><a title="">ACTIVITIES</a>
                      <ul>
                        <li><a href="top-activities.html" title="">TOP ACTIVITIES</a></li>
                        <li><a href="top-activities-sidebar.html" title="">TOP ACTIVITIES WITH SIDEBAR</a></li>
                        <li><a href="top-activities-listview.html" title="">LIST VIEW</a></li>
                        <li><a href="top-activities-listview-sidebar.html" title="">LIST VIEW SIDEBAR</a></li>
                      </ul>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
        <!-- END #main-header -->
      </header>
      <!-- END header -->
      
      <!-- START .main-contents -->
      <div class="main-contents">
        
        <div class="container">
          <div class="error-page">
            <figure>
              <img class="img-responsive" src="<?php echo $domain;?>img/14-404.png" alt="ERROR-IMAGE">
            </figure>
            <div class="error-text">
              <span>the page you requested</span>
              <span class="large-text">could not be found</span>
            </div>
            <a class="back-home" href="#">BACK TO HOME</a>
          </div>
        </div><!-- /container -->
        
      </div>
      <!-- END .main-contents -->
      
      <!-- START footer -->
      <footer>
        
        <!-- START #ex-footer -->
        <div id="#ex-footer">
          <div class="container">
            <div class="row">
              <nav class="col-md-12">
                <ul class="footer-menu">
                  <li><a href="#">Best Rate Guarntee</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#">Hotel Directory</a></li>
                  <li><a href="#">Website Terms of Use</a></li>
                  <li><a href="#">Privacy Statement</a></li>
                  <li><a href="#">Affiliates</a></li>
                  <li class="last-item"><a href="#">Top Destinations</a></li>
                </ul>
              </nav>
              
              <div class="foot-boxs">
                <div class="foot-box col-md-4 text-right">
                  <span>Stay Connected</span>
                  <ul class="social-media footer-social">
                    <li><a class="sm-yahoo" href="#"><span>Yahoo</span></a></li>
                    <li><a class="sm-facebook" href="#"><span>Facebook</span></a></li>
                    <li><a class="sm-rss" href="#"><span>RSS</span></a></li>
                    <li><a class="sm-flickr" href="#"><span>Flicker</span></a></li>
                    <li><a class="sm-windows" href="#"><span>Windows</span></a></li>
                    <li><a class="sm-stumble" href="#"><span>Stumbleupon</span></a></li>
                  </ul>
                </div>
                <div class="foot-box foot-box-md col-md-4">
                  <span class="contact-email"> touchus@travelhub.com</span>
                  <span class="contact-phone"> +1 125 496 0999</span>
                </div>
                <div class="foot-box col-md-4">
                  <span class="">&copy; 2013 travelhub. All Rights Reserved.</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- END #ex-footer -->
      </footer>
      <!-- END footer -->
    </div>
    <!-- END #wrapper -->

    <div class="side-panel">
      <div class="colors">
        <h6>Color Schemes</h6>
        <a onclick="setActiveStyleSheet('color1'); return false;" class="color1"></a>
        <a onclick="setActiveStyleSheet('color2'); return false;" class="color2"></a>
        <a onclick="setActiveStyleSheet('color3'); return false;" class="color3"></a>
        <a onclick="setActiveStyleSheet('color4'); return false;" class="color4"></a>
      </div>
    </div>
    <!-- javascripts -->
    <script type="text/javascript" src="<?php echo $domain;?>js/modernizr.custom.17475.js"></script>

    <script type="text/javascript" src="<?php echo $domain;?>js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo $domain;?>js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo $domain;?>js/script.js"></script>
    <script src="<?php echo $domain;?>js/styleswitcher.js"></script>
  </body>
</html>
