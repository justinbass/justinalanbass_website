<?php
include("scripts/Mobile_Detect.php");
$detect = new Mobile_Detect();

$body = 
"
<h1>Files</h1>
<h2>Projects</h2>
<ul>
	<li><a href=\"https://github.com/ViaSat/hotcidr\" target=\"_blank\">
        <div>HotCIDR Firewall Management</div>
        <img src=\"images/hotcidr.png\" width=\"50\" height=\"50\"></img></a>
    </li>

    <li><a href=\"files/subscriber-history\" target=\"_blank\">
        ViaSat Subscriber History</a>
    </li>
    
    
    <li><a href=\"files/programs/android/PokeMaze.apk\" target=\"_blank\">
        PokeMaze for Android</a>
    </li>
    
    <li><a href=\"files/programs/android/Pacman.apk\" target=\"_blank\">
        Pacman for Android</a>
    </li>
    
    <li><a href=\"files/programs/mathematica/Camel Bananas.nb\" target=\"_blank\">
        Camel with N Bananas riddle in Mathematica</a>
    </li>
    
    <li><a href=\"files/programs/mathematica/Hourglass.nb\" target=\"_blank\">
        Hourglass simulation in Mathematica</a>
    </li>
    
    <li><a href=\"files/programs/ti84/CLEARMEM.8xp\" target=\"_blank\">
        First ever program: Clear memory screen in TI84</a>
    </li>
</ul>

<h2>Essays</h2>
<ul>
	<li><a href=\"files/essays/Skydiving vs. Driving.pdf\">Skydiving vs. Driving</a></li>
	<li><a href=\"files/essays/We Are Alone, We Are Precious.pdf\">We Are Alone, We Are Precious</a></li>
	<li><a href=\"files/essays/The Rise of the CAFO - Consolidation, Antibiotics, Feed, and Outbreaks.pdf\">The Rise of the CAFO: Consolidation, Antibiotics, Feed, and Outbreaks</a></li>
	<li><a href=\"files/essays/Food Safety Modernization Act - More FDA Power to Solve a Sick Problem.pdf\">Food Safety Modernization Act: More FDA Power to Solve a Sick Problem</a></li>
</ul>

<h2>Recipes</h2>
<ul>
	<li><a href=\"files/recipes/Sweedish Meatballs.pdf\">Sweedish Meatballs</a></li>
	<li><a href=\"files/recipes/Date Walnut Pie.pdf\">Date Walnut Pie</a></li>
</ul>
";

if ($detect->isMobile()) {
    $page = file_get_contents("blankmobile.php");
}
else {
    $page = file_get_contents("blank.php");
}

$page = str_replace("<!--SELECTED1-->", "", $page);
$page = str_replace("<!--SELECTED2-->", " class=\"selected\"", $page);
$page = str_replace("<!--SELECTED3-->", "", $page);
$page = str_replace("<!--CONTENT-->", $body, $page);

echo $page
?>
