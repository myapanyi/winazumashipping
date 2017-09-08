<?php
if(isset($_POST['email'])) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "myapanyi.az@gmail.com";
    $email_subject = "Inquiry for WinAzumaShipping";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }     
 
   
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
 
 
 
    $email_message = "Inquiry Detail Information ....\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }

    $email_message .= "Customer Name                : ".clean_string($name)."\n\n";
    $email_message .= "Customer Email               : ".clean_string($email_from)."\n\n";
    $email_message .= "Telephone No                 : ".clean_string($telephone)."\n\n";
    $email_message .= "Customer Inquiry             : ".clean_string($comments)."\n\n";
 
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!DOCTYPE html>
<!--
TEMPLATE
Name: Zoo Planet
Version: 1.0
Created: 23 January 2014

AUTHOR
Design and code by: http://www.bootshape.com
Free stock photos by: http://www.bootshape.com

Read full license: http://www.bootshape.com/license.php

CREDITS
Background: http://subtlepatterns.com/ (extra_clean_paper)
Fonts: http://www.google.com/fonts (Actor, Duru_Sans)

SUPPORT
E-mail: bootshape.com@gmail.com
Contact: http://www.bootshape.com/contact.php
-->
<html>
  <head>
    <title>Win Azuma Shipping Co.ltd.</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
    
    <!--Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Belgrano|Courgette&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
    
    <!--Bootshape-->
    <link href="css/bootshape.css" rel="stylesheet">
<!-- Plugin css -->
    <link rel="stylesheet" href="css/jquery.animateSlider.css">
    <!-- Demo css -->
    <link rel="stylesheet" href="css/font-awesome.css">
      <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/demo1.css">
     <link rel="stylesheet" href="css/site.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
    <style>

table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
   
}
.trheight{
  height: 150px;
}

td, th {
   
    text-align: left;
    padding: 8px;
}
.companyimg{
    width: 129px;
    height: 60px;
}
/* Style inputs with type="text", select elements and textareas */
select, textarea {
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}
.form_txt{
    width: 100%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* Style the submit button with a specific background color etc */
.submit {
    background-color: #598ad7;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}
.telephone{
  width: 100%; /* Full width */
    padding: 12px; /* Some padding */  
    border: 1px solid #ccc; /* Gray border */
    border-radius: 4px; /* Rounded borders */
    box-sizing: border-box; /* Make sure that padding and width stays in place */
    margin-top: 6px; /* Add a top margin */
    margin-bottom: 16px; /* Bottom margin */
    resize: vertical /* Allow the user to vertically resize the textarea (not horizontally) */
}

/* When moving the mouse over the submit button, add a darker green color */
.submit:hover {
    background-color: #45a049;
}

/* Add a background color and some padding around the form */
.container {
    border-radius: 5px;

}
.error_style{
color: red;
font-size: small;
font-style: italic;
font-weight: 600;
}


</style>
  </head>
  <body>
    <div class="header">
<div class="h_content">
<h1><a href="index.html"><img src="images/winazumashippinglogo.gif" width="326" height="50" alt="WINAZUMA SHIPPING CO., LTD."></a></h1>
<!-- Search Google -->
<center> 
<FORM method=GET action="http://www.google.com/search">
<TABLE bgcolor="#FFFFFF"><tr><td>

<INPUT TYPE=text name=q size=31 maxlength=255 value="">
<INPUT TYPE=hidden name=hl value="en">
<INPUT type=submit name=btnG VALUE="Search">
</td></tr></TABLE> 
</FORM>
</center>
<!-- Search Google -->
<ul>


</ul>
</div>
</div>

    
    <!-- Thumbnails -->
    <div class="container thumbs" style="padding-left:90px;height:805px">
      <div style="border-left: 1px solid #c5c3c3;height:805px;width:239px;float:left;">

  <ul class="nav">
    <li class="service"><a href="service.html"></a></li>
    <li class="company"><a href="company.html"></a></li>
    
    <li class="inquiry" style="border-top:1px solid #c5c3c3;"><a href="inquiry.html"></a></li></ul>
    <ul style="list-style: none;padding: 0;text-align: center;margin-top: 30px;">

<li><a href="service/transportation.html#box02"><img src="images/storage_banner.gif" alt="Warehousing Services" width="200" height="96" border="0" usemap="#storage_service_Map"></a></li>
<li style="margin-top: 20px;"><a href="https://inf.azumaship.co.jp/aci/001_Login/Login.aspx?LangMode=en" target="_blank"><img src="images/bnr_aci_01.jpg" alt="Cargo Trucking System｜ACI Azuma Cargo Information Check the cargo inventory, cargo receipt and shipping status" width="200" height="96"></a></li>


</ul>
      </div>
   
      <div style="border-right: 1px solid #c5c3c3;border-left: 1px solid #c5c3c3;width:761px;height:805px;float:left;">


<h1 class="ser_img"><img src="images/maininquiry.jpg" alt="Services" width="759" height="176"></h1>
<ul class="title_bar" style="margin-bottom:0px;height:26px;">
<li style="float:left;list-style:none"><svg height="25px" width="65px;" style="margin-left: -40px;">
  <polygon points="0,0,65,0,45,25,0,25" style="fill:#00162b; stroke:purple;stroke-width:1; padding: 0;margin: 0;">

</polygon></svg>
<a href="../index.html" style="position: absolute;float: left;margin-left: -250px;padding-top: 3px;">Home</a></li>


<!-- InstanceBeginEditable name="breadcrumbNavi" -->
<li style="float:left;list-style:none"><a href="index.html" style="color: white;margin-left: -230px;font-style:italic;text-align: center;line-height: 1.7;">Inquiry</a></li>
<!-- InstanceEndEditable -->
</ul>

 <div style="color:#598ad7;font-style:italic;font-family:serif;font-size:x-large;">
       
           <ul style="list-style-image:url(images/images.png);padding-left: 185px;padding-top: 50px;">
           <li> Email have send to WinAzumaShipping Co.ltd.<br><br>
            Thanks for your Inquiry.<br><br>
           We will be contact you soon.
           </li>
           </ul>
           
</div>  

    
      </div>
    </div><!-- End Thumbnails -->
  
    <!-- Footer -->
    <div class="footer text-center">
        <p>&copy; All Rights Reserved. Win Azuma Shipping Co.ltd.</p>
      <div style="float: right;margin-top: -30px; margin-right: 165px;    color: #e0dbdb;">
       <a href="sitemap.html" style="color:#d6d4d4;"> <img src="images/arrow_boxr.gif" style=" padding-right: 5px;">SiteMap</a>
        </div>
      </div>
    

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
       <!-- Bower Depedencies -->
    <script src="js/jquery.min.js"></script>
    <script src="js/modernizr.js"></script> 
    <!-- Load the plugin -->
    <script src="js/jquery.animateSlider.js"></script>
       <script type="text/javascript">
    function goTop() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
    </script>
  </body></html>

<?php


$subject = "Thanks for your Inquiry.";
$txt ="Dear Customer;
                     Thanks for your Inquiry in our WinAzumaShipping Co.ltd.
                     We will contact you soon.
";
$headers = "From: myapanyi.az@example.com";

mail($email_from,$subject,$txt,$headers);

}
?>