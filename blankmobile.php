<!DOCTYPE HTML>
<html>

<head>
  <title>Justin Alan Bass's Personal Website</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
  <link rel="stylesheet" type="text/css" href="css/stylemobile.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-48418408-1', 'justinalanbass.com');
  ga('send', 'pageview');

</script>

  <div id="main">
    <header>
      <div id="logo">
        <div id="logo_text">
          <h1>Justin Alan Bass</h1>
        </div>
      </div>
      <nav>
        <ul class="sf-menu" id="nav">
          <li<!--SELECTED1-->><a href="index.php">Home</a></li>
		  <li<!--SELECTED2-->><a href="files.php">Files</a></li>
		  <li<!--SELECTED3-->><a href="about.php">About</a></li>
		</ul>
      </nav>
    </header>
    <div id="site_content">
      <ul id="images">
        <li><img src="images/1_small.jpg" height="300"/></li>
        <li><img src="images/2_small.jpg" height="300"/></li>
        <li><img src="images/3_small.jpg" height="300"/></li>
        <li><img src="images/4_small.jpg" height="300"/></li>
        <li><img src="images/5_small.png" height="300"/></li>
        <li><img src="images/6_small.png" height="300"/></li>
      </ul>
      
	  <!--
	  <div id="sidebar_container">
        <div class="sidebar">
          <h3>Latest News</h3>
          <h4>Website Launched</h4>
          <h5>February 25th, 2014</h5>
          <p>After 6 months of issues with my ISP, finally got this thing running.<br /><a href="about.php">Read more</a></p>
        </div>
      </div>
	  -->
	  
      <div class="content">
<!--CONTENT-->
      </div>
    </div>
    <footer>
      <p>
	  <a href="files/Justin Bass Resume.pdf"><img src="files/icons/resume.png" width = "100" height = "100"/></a>
	  <a href="http://www.facebook.com/justinalanbass"><img src="files/icons/facebook-icon.png" width = "100" height = "100"></a>
	  <a href="skydiving_flashcards.htm"><img src="files/icons/freefall.png" width = "100" height = "100"></a>
	  </p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript" src="js/jquery.kwicks-1.5.1.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#images').kwicks({
        max : 450,
        spacing : 2
      });
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
