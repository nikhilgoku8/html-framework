<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<title>Html Framework</title>
<meta name="description" content="," />
<meta name="keywords" content="" />

<link href="css/reset.css" rel="stylesheet" type="text/css" />
<link href="css/ace-responsive-menu.css" rel="stylesheet" type="text/css" />

<link href="css/animate.4.1.1.css" rel="stylesheet" type="text/css" />

<!---fonts-->
<link href="css/fontawesome.7.0.1.min.css" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">

<!-- slider -->
<link href="plugins/owl-carousel/owl.carousel.min.css" rel="stylesheet">
<link href="plugins/owl-carousel/owl.theme.default.min.css" rel="stylesheet">

<link href="plugins/venobox/venobox.min.css" rel="stylesheet" type="text/css" media="screen" />

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" />

<!-- <script src="js/jquery.3.7.1.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

</head>

<body>

<header>  

<div class="container">
    <div class="logo">
        <a href="index.php"><img src="images/logo.png" alt="" /></a>
    </div>
    <nav>
        <!-- Menu Toggle btn-->
        <div class="menu-toggle">
            <h3>Menu</h3>
            <button type="button" id="menu-btn">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- Responsive Menu Structure-->
        <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
        <ul id="respMenu" class="ace-responsive-menu" data-menu-style="horizontal">
            <li>
                <a>
                    <span class="title">About</span>
                    <span class="arrow"></span> 
                </a>
                <ul>
                    <li><a href="#">Lorem Ipsum 1</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <span class="title">Lorem Ipsum 2</span>
                </a>
            </li>
        </ul>
    </nav>
</div>
</header>
<!-- End of Responsive Menu -->


<div id="main">
  
<div class="banner">
    <div class="main_banner owl-carousel owl-theme">    
        <div class="item_box">
            <img src="images/banners/banner-1.jpg" alt="Kompress India" title="Kompress India">
        </div>
    </div>
</div>

</div>



<!--sticky header-->
<!-- <script src="js/classie.js"></script>
<script>
function init() {
window.addEventListener('scroll', function(e){
  var distanceY = window.pageYOffset || document.documentElement.scrollTop,
  shrinkOn = 50,
  header = document.querySelector("header");
  if (distanceY > shrinkOn) {
  classie.add(header,"smaller");
  } else {
  if (classie.has(header,"smaller")) {
    classie.remove(header,"smaller");
  }
  }
});
}
window.onload = init();
</script> -->
<script src="js/common.js"></script>
<script src="js/jquery.easing.1.3.js"></script>


<script src="js/ace-responsive-menu.js"></script>
<script>
$(document).ready(function () {
    $("#respMenu").aceResponsiveMenu({
        resizeWidth: '768', // Set the same in Media query       
        animationSpeed: 'fast', //slow, medium, fast
        accoridonExpAll: false //Expands all the accordion menu on click
    });
});
</script>

<script src="plugins/venobox/venobox.min.js"></script>
<script>
$(document).ready(function(){
    new VenoBox({
        selector: '.new_veno',
        // numeration: true,
        // infinigall: true,
        // share: true,
        // spinner: 'rotating-plane'
    });
});
</script>

<script src="js/wow.min.js"></script>
<script>
new WOW().init();
</script>

<!--slider-->
<script src="plugins/owl-carousel/owl.carousel.js"></script>
<script src="plugins/owl-carousel/owl-content-animation.js"></script>

</body>
</html>
