<?php
/* Markup for header */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="rtl">
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<title><?php  bloginfo('name');  ?></title>
        
		<?php  wp_head(); ?>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />

        <link href="style.css" rel="stylesheet" type="text/css">
        <!--[if lt IE 9]>
            <script src="js/html5.js" type="text/javascript"></script>
            <link href="css/ie.css" rel="stylesheet" type="text/css" />
        <![endif]-->
        <script src="js/jquery.js" type="text/javascript"></script>
        <script src="js/main.js" type="text/javascript"></script>
        
        </head>
        <body <?php body_class(); ?>>
        
        <!-- Start Header-->
        <header id="header">
        <!-- Start Banner-->
            <table border="0" class="pageWidth" >
         		 <tr>
            		 <td width="860" > <h1 id="logo" > <?php bloginfo('name'); ?></h1><h7  style="color:#FFF;font-weight:bold;font-size:20px;"><?php bloginfo('description'); ?></h7></td>
            		<td width="70"><img src="<?php bloginfo('template_directory'); ?>/img/fenjoon-logo.png" alt=""  width="100%" height="130" class="clearfix"/></td>
                   
       	      </tr>
            </table>   
       <!-- End Banner-->      
    <nav id="navigation" >
    <div > <a href="#" id="menu">Menu</a>
            <ul>
                    <li><a href="#page0" title="Home">صفحه اصلی</a></li><li><a href="#page1" title="Order">سفارش وب سایت</a></li><li><a href="#page2"title="About Us">درباره ما</a></li><li><a href="#page3" title="Contact">تماس با ما</a></li>
            </ul>
    </div>
    </nav>

</header>
<!--  END Header--> 