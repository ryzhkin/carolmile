<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{title}</title>

  <meta name="description" content="{description}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="/img/favicon.png">
  <link rel="apple-touch-icon" sizes="57x57" href="/img/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/img/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/img/apple-touch-icon-114x114.png">

  <link rel="stylesheet" href="<?/*= base_url() */?>assets/css/style.css">
  <!--<link rel="stylesheet" href="<?/*= base_url() */?>assets/less/style.less">-->
  <!--<script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.5.0/less.min.js"></script>-->
  <!--<script src="<?/*= base_url() */?>assets/js/vendor/less.min.js"></script>-->

  <link rel="stylesheet" href="<?= base_url() ?>assets/css/carolmile.css">

  <script src="<?= base_url() ?>assets/js/vendor/modernizr.min.js"></script>
  <!--[if lt IE 9 ]>
    <script src="<?= base_url() ?>assets/js/ie.min.js"></script>
  <![endif]-->
</head>
<body class="cm-main">

<div class="cm-menu-top">
 <div class="cm-menu-top-links">
   <a href="#">Home</a>
   <a href="#">Band</a>
   <a href="#">Music</a>
   <a href="#">Events</a>
   <a href="#">Gallery</a>
   <a href="#">Contact</a>
 </div>
</div>

<div class="container-full">
 {content}
</div>

<div class="cm-footer">
  Footer
</div>


<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="<?= base_url() ?>assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

<!-- Google Analytics - Update UA-XXXXX-X ID -->
<script>
  (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
  function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
  e=o.createElement(i);r=o.getElementsByTagName(i)[0];
  e.src='//www.google-analytics.com/analytics.js';
  r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
  ga('create','UA-XXXXX-X');ga('send','pageview');
</script>

</body>
</html>
