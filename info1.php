<?php
	session_start();
	require 'dbconfig/config.php'
	
?>

<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="stylesheet" href="css/style3.css" type="text/css"/>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Society Information</title>
</head>
<body>
<h2>B-117/2, Lane Number 5, Phursungi IT Park, Co-operative Housing Society, Satavwadi, Hadapsar, Pune, Maharashtra 412308</h2>




<div class='container'>
  
  
  
  
  
  <div class='pics_in_a_row'>
    <div class='img1'>
      <img src='/images/Tennis_Court.jpg'>
    </div>
	<p>Image one</p>
    <div class='img2'>
      <img src='/images/swimming_Pool.png'>
    </div>
	<p></p>
  </div>
  
  <p>It's <em>slightly</em> trickier than I first hoped, though - you need to:</p>
  
  <ol>
    <li>Put all of your images inside a container div</li>
    <li>Set <code>display: flex;</code> on the container div</li>
    <li>Wrap each image in a div</li>
    <li>Set the <code>flex</code> property of each image's wrapper div to the image's aspect ratio (its width divided by its height)</li>
  </ol>
  
  <p>And boom! You're done!</p>
  
  <div class='pics_in_a_row'>
    <div class='img1'>
      <img src='http://blimpage.com/pants/codepen/mm1.jpg'>
    </div>
    <div class='img2'>
      <img src='http://blimpage.com/pants/codepen/mm2.jpg'>
    </div>
    <div class='img3'>
      <img src='http://blimpage.com/pants/codepen/mm3.jpg'>
    </div>
  </div>

  <p>The only real bummer is having to declare the aspect ratio for each image. Depending on your preference or authoring process, you could do it a few different ways:</p>
  
  <ul>
    <li>Declare the aspect ratio in your stylesheet, with a class name for each wrapper div (as I've done in this demo)</li>
    <li>Declare the aspect ratio inline, as a <code>style</code> attribute on each wrapper div</li>
    <li>Dynamically calculate the aspect ratio for each image using JavaScript</li>
  </ul>

  <p>That last option is tempting; not needing JavaScript is nice, but needing to specify the aspect ratio for each and every image is a pain.</p>
  
  <p>With the CSS methods, you do have a few options for specifying the aspect ratio:</p>
  
  <ul>
    <li>Work out the aspect ratio yourself and hard-code it into the CSS (as I've done in this demo)</li>
    <li>Use CSS's <code>calc()</code> to calculate the aspect ratio (e.g. <code>flex: calc(600/800);</code>)</li>
    <li>Use a preprocessor to calculate the aspect ratio at build time</li>
  </ul>
  
  <div class='pics_in_a_row'>
    <div class='img4'>
      <img src='http://blimpage.com/pants/codepen/mm4.jpg'>
    </div>
    <div class='img5'>
      <img src='http://blimpage.com/pants/codepen/mm5.jpg'>
    </div>
  </div>

  <p>Add as many images as you like - their widths will just shrink until they all fit.</p>
  
  <p>Use with discretion though - if you add too many, they'll all be too small to see. You might want to switch to a different layout at smaller viewport sizes.</p>
  
  <div class='pics_in_a_row'>
    <div class='img1'>
      <a href='https://www.guitarnerd.com.au/2011/07/fender-musicmaster-bass/'><img src='http://blimpage.com/pants/codepen/mm1.jpg'></a>
    </div>
    <div class='img2'>
      <a href='http://www.sheltonsguitars.com/2009/12-9-09/squier-musicmaster-bass-12-9-07.html'><img src='http://blimpage.com/pants/codepen/mm2.jpg'></a>
    </div>
    <div class='img3'>
      <a href='http://www.seymourduncan.com/forum/showthread.php?73445-Hot-Rails-as-a-single-for-Fender-Musicmaster-bass-guitar'><img src='http://blimpage.com/pants/codepen/mm3.jpg'></a>
    </div>
    <div class='img4'>
      <a href='http://imageevent.com/firstflight/fendermusicmasterbass'><img src='http://blimpage.com/pants/codepen/mm4.jpg'></a>
    </div>
    <div class='img5'>
      <a href='https://www.muffwiggler.com/forum/viewtopic.php?p=1810400'><img src='http://blimpage.com/pants/codepen/mm5.jpg'></a>
    </div>
  </div>
  
  <p>Remember to vendor prefix those flexbox properties!</p>
  
  <p class='muted'>Click any of the images in that last row for their sources. Thanks, bass enthusiasts of the internet!</p>
  </div>
  
  
  </body>
  </html>