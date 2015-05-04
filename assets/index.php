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

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="<?= base_url() ?>assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
  <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/jquery.cookie.js"></script>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/vendor/slick/slick.css"/>
  <link rel="stylesheet" type="text/css" href="<?= base_url() ?>assets/js/vendor/slick/slick-theme.css"/>
  <script type="text/javascript" src="<?= base_url() ?>assets/js/vendor/slick/slick.min.js"></script>

</head>
<body class="cm-main">

<div class="cm-menu-top">
 <div class="container-full cm-menu-top-links">
   <a class="<?= (uri_string() == 'home' || uri_string() == '')?'active':''?>" href="<?= base_url() ?>home">Home</a>
   <a class="<?= (uri_string() == 'band')?'active':''?>" href="<?= base_url() ?>band">Band</a>
   <a class="<?= (uri_string() == 'music')?'active':''?>" href="<?= base_url() ?>music">Music</a>
   <a class="<?= (uri_string() == 'events')?'active':''?>"  href="<?= base_url() ?>events">Events</a>
   <a class="<?= (uri_string() == 'gallery')?'active':''?>"  href="<?= base_url() ?>gallery">Gallery</a>
   <a class="<?= (uri_string() == 'contact')?'active':''?>"  href="<?= base_url() ?>contact">Contact</a>
 </div>
</div>

<div class="container-full">
  {content}
</div>

<div class="cm-footer">
  <div class="cm-footer-list">
    <span class="copyright"> copyright © 2014 by carol mile </span>
    <a class="twitter" href="http://twitter.com/"></a>
    <a class="vk" href="https://vk.com/event63134346"></a>
    <a class="facebook" href="http://www.facebook.com/groups/213568802153821/"></a>
  </div>
</div>



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
