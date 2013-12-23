<?php

function links() {
	?>
<meta name="author" content="Alexander Rind" />
<link rel="stylesheet" title="default" type="text/css" href="/~rind/alex/new.css" media="screen,projection" />
  <?php /* 
<link rel="alternate stylesheet" title="old" type="text/css" href="new-2.css" media="screen,projection" />
<link rel="alternate stylesheet" title="old2" type="text/css" href="new-3.css" media="screen,projection" />
<link rel="stylesheet" type="text/css" href="t-print.css" media="print" />
	*/ ?>
<script src="anti_harvest.js" type="text/javascript"></script>
	<?php 
}

function head() {
	?>
<div id="logo_pane">
  <div id="skip"><a href="#content">Skip to main content</a></div>
  <!-- <a href="index.php"><img alt="Interactive Visual Interfaces, Exploration, Time-oriented Data"
    src="img/directions.png" height="90" width="90" /></a> -->
  <div class="prefix">mag.</div>
  <div class="name">Alexander Rind</div>
</div>
<div id="navcontainer">
  <ul id="navlist">
<?php

$menu = array(
array("l" => "l1", "n"=> "/alex/index.php",        "t"=> "Home",         "a"=>"class=\"home\""),
array("l" => "l1", "n"=> "/alex/about.php",        "t"=> "About me",     "a"=>""),
array("l" => "l1", "n"=> "/alex/publications.php", "t"=> "Publications", "a"=>""),
array("l" => "l1", "n"=> "/alex/research.php",     "t"=> "Research",     "a"=>""),
array("l" => "l1", "n"=> "http://www.ifs.tuwien.ac.at/~rind/w/",        "t"=> "Resources", "a"=>"class=\"external\"")
);

$active_menu = basename($_SERVER['SCRIPT_NAME']);
$is_subpage = 0;

foreach ($menu as $item) {
	if (strpos($item["n"], $active_menu) != FALSE) {
		echo("<li class=\"".$item["l"]."\" id=\"currentpage\">");
		if ($is_subpage == 1 || strlen($item["a"]) > 1)
		  // menu item selected, and clickable
		  echo("<a href=\"".$item["n"]."\" ".$item["a"]." id=\"current\">".$item["t"]."</a>");
		else
		  // menu item selected, not clickable
		  echo("<span id=\"current\">".$item["t"]."</span>");
		echo "</li>\n";
	}
	else
	  // menu item not selected
	  echo ("<li class=\"".$item["l"]."\"><a href=\"".$item["n"]."\" ".$item["a"].">".$item["t"]."</a></li>\n");
}
?>
  </ul>
</div>
<?php
echo "<div id=\"main_pane\">";
?>

<?php 
}

function foot() {
	?>
	<?php echo "</div>"; ?>
<div id="bottom_pane">
  Last update:
  <?php echo(date("Y-m-d", filemtime($_SERVER['SCRIPT_FILENAME']))); ?>
  by Alexander Rind
</div>
  <?php
}

function contact() {
  ?>
    <address>
    <span id="fn">Alexander Rind</span><br />
Fachhochschule St. P&ouml;lten<br />
Inst. Creative\Media/Technologies<br />
<br />
Matthias Corvinus-Straﬂe 15<br />
A-3100 St. P&ouml;lten
<!--<br />
phone: +43 (1) 58801&ndash;188&nbsp;212<br />
fax: +43 (1) 58801&ndash;188&nbsp;215<br /> -->
email: <script type="text/javascript">doPerson("rind", "xswd", "ifs.tuwien.ac.at");</script>
</address>
<noscript>please turn on javascript</noscript>
<div id="logo">
<!--  <a href="http://www.informatik.tuwien.ac.at/"><img
    alt="Vienna University of Technology, Faculty of Informatics"
    src="img/tu-inf_logo_39.png" width="80" height="39" /></a> -->
  <a href="http://ieg.ifs.tuwien.ac.at"><img
    alt="Information Engineering Group" src="img/ieg_logo_35.png"
    width="54" height="35" /></a>
</div>
<?php 
}

?>