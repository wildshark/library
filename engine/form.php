<?php
/**
 * Created by PhpStorm.
 * User: Andrew Quaye
 * Date: 08/11/2018
 * Time: 12:36 PM
 */
?>

<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $template->title;?></title>
    <!-- Custom Theme files -->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <!-- Custom Theme files -->
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Flat Search Box Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login signup Responsive web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!--Google Fonts-->
</head>
<body>
<!--search start here-->
<div class="search">
    <i> </i>
    <div class="s-bar">
        <form method="post" action="search.php" enctype="application/x-www-form-urlencoded">
            <input type="text" name="q" value="Search Template" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search Template';}">
            <input type="submit"  value="Search"/>
        </form>
    </div>
    <p>Popular searches: <a href="#">Modern PSD template,</a> <a href="#"> Portfolio design </a></p>
</div>
<!--search end here-->
<div class="copyright">
    <?php echo $template->copyright?>
</div>
</body>
</html>
