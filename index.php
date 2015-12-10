<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Traffic</title>
<meta name="keywords" content="Book Store Template, Free CSS Template, CSS Website Layout, CSS, HTML" />
<meta name="description" content="Book Store Template, Free CSS Template, Download CSS Website" />

<link href="file:///C|/wamp/www/fyp/css/style.css" rel="stylesheet" type="text/css" />

<!--link javascript for slideshow-->

<script  src="jss/jscookmenu.min.js"></script>
<script src="jss/jquery-1.11.1.min.js"></script>
<script src="jss/jquery.ui.effect.min.js"></script>
<script src="jss/jquery.ui.effect-blast.min.js"></script>
<script src="jss/jquery.ui.effect-fade.min.js"></script>
<script src="jss/wb.slideshow.min.js"></script>
<script src="jss/jquery.ui.core.min.js"></script>
<script src="jss/jquery.ui.widget.min.js"></script>
<script src="jss/jquery.ui.button.min.js"></script>
<script src="jss/wwb10.min.js"></script>




<script>
$(document).ready(function()
{
   $("#SlideShow1").slideshow(
   {
      interval: 5000,
      type: 'random',
      effect: 'blast',
      direction: '',
      pagination: false,
      easing: 'easeInOutCirc',
      effectlength: 2000
   });
   $("#SlideShow1_back a").click(function()
   {
      $('#SlideShow1').slideshow('previmage');
   });
   $("#SlideShow1_next a").click(function()
   {
      $('#SlideShow1').slideshow('nextimage');
   });
   $("#jQueryButton1").button({ icons: { primary:'ui-icon-gear', secondary:'ui-icon-gear' } });
   $("#SlideShow2").slideshow(
   {
      interval: 3000,
      type: 'sequence',
      effect: 'none',
      direction: '',
      pagination: false,
      effectlength: 2000
   });
});
</script>









</head>
<body id="main">
<h1 align="center" style="color:red">UGANDA TRAFFIC MANAGEMENT BUREAU</h1>



<p align="center" style="color:red">&nbsp;</p>
<div id="button" align="center"><button name="register" value="register" onclick="location.href='register.php'">REGISTER</button> <button name="login" value="login" onclick="location.href='login.php'">LOGIN</button><button name="admin" value="admin" onclick="location.href='admin/index.php'">ADMIN</button><button name="logout" value="logout" onclick="location.href='logout.php'">LOG OUT</button><button name="home" value="home" onclick="location.href='index.php'">HOME</button></div>

<br />
<br />



<div id="SlideShow1" style="position:absolute;
left:200px;
top:286px;
width:567px;
height:194px;
z-index:7;">
<img class="image" src="images/national003px.jpg" alt="" title="">
<img class="image" src="images/traffic.jpg" style="display:none;" alt="" title="">

<div id="SlideShow1_back" style="position:absolute;
left:4px;
top:82px;
width:30px;
height:30px;
z-index:999"><a style="cursor:pointer"><img alt="Back" style="border-style:none" src="images/carousel_back.png"></a></div>
<div id="SlideShow1_next" style="position:absolute;left:533px;top:82px;width:30px;height:30px;z-index:999"><a style="cursor:pointer"><img alt="Next" style="border-style:none" src="images/carousel_next.png"></a></div>
</div>

<br />
<br />
<textarea name="TextArea1" id="TextArea1"  rows="13" cols="75">This is an interactive website To ease on the  Traffic problem in Uganda Iam  intending to 
implement  it on mobile phones and with Time i shall Do it.

We know that Many Motorists commit various offenses and Go unpunished so this will reduce the offences and there by managing traffic efficiently Please Ensure to Login for Full Access if
you Don't have An Account Please Sign Up Thanks
 
 Thank you for using for this site i hope this website 
serves as i Intended Thank you </textarea>



<br />
<div>
<?php
include_once('footer.php');

?>
</div>





















