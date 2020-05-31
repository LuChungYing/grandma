<script language="javascript">
		function ShowMeDate() {
		　var Today=new Date();
		　alert("把代碼輸入到google map");
		}
</script>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by TEMPLATED
http://templated.co
Released for free under the Creative Commons Attribution License

Name       : EntryWay
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20140124

-->

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900" rel="stylesheet" />
<link href="CSS.css" rel="stylesheet" type="text/css" media="all" />
<link href="fonts.css" rel="stylesheet" type="text/css" media="all" />

<!--[if IE 6]><link href="default_ie6.css" rel="stylesheet" type="text/css" /><![endif]-->

</head>
<body>
<div id="header-wrapper">
	<div id="header" class="container">
		<div id="logo">
			<h1></span><a href="#">老照片的記憶</a></h1>
		</div>
		<div id="menu">
			<ul>
				<style3>
					<li class="current_page_item"><a href="%" accesskey="1" title="">人物介紹</a></li>
					<li><a href="$" accesskey="2" title="">背包</a></li>
					<li><a href="@" accesskey="3" title="">支線任務</a></li>
					<li><a href="map.php" accesskey="4" title="">地圖</a></li>
			</style3>
			</ul>
		</div>
	</div>
</div>
<div id="header-featured">
	<div id="banner" class="container"> </div>
</div>
<div id="wel">
    <div class="container1">
<?php 
        ini_set("session.use_cookies", "1");
        ini_set("session.use_only_cookies", "0");
        ini_set("session.use_trans_sid", "1");
        session_start();
        if( $_SESSION["backpack"] == 1)
            echo "<a href=\"inpack\packpicture.php\" class=\"button\">書包</a><br>";
        if ( $_SESSION["backpack"] == 2)
            echo "<a href=\"inpack\packpicturen.php\" class=\"button\">書包</a><br>";
        if( $_SESSION["s1"] == 1)
            echo "<a href=\"inpack\step1.php\" class=\"button\">前鎮國小小故事</a><br>";
        if( $_SESSION["ticket"] == 1)
            echo "<a href=\"inpack\\ticket.php\" class=\"button\">船票</a><br>";
        if( $_SESSION["ticket"] == 2)
            echo "<a href=\"inpack\\ticketn.php\" class=\"button\">船票</a><br>";
        if( $_SESSION["s2"] == 1)
            echo "<a href=\"inpack\step2.php\" class=\"button\">輪渡站小故事</a><br>";
        if( $_SESSION["charm"] == 1)
            echo "<a href=\"inpack\charm.php\" class=\"button\">平安符</a><br>";
        if( $_SESSION["charm"] == 2)
            echo "<a href=\"inpack\charmn.php\" class=\"button\">平安符</a><br>";
        if( $_SESSION["s3"] == 1)
            echo "<a href=\"inpack\step3.php\" class=\"button\">鎮南宮小故事</a><br>";
        if( $_SESSION["cup"] == 1)
            echo "<a href=\"inpack\cup.php\" class=\"button\">筊杯</a><br>";
        if( $_SESSION["cup"] == 2)
            echo "<a href=\"inpack\cupn.php\" class=\"button\">筊杯</a><br>";
        if( $_SESSION["s4"] == 1)
            echo "<a href=\"inpack\step4.php\" class=\"button\">三天宮小故事</a><br>";
        if( $_SESSION["bag"] == 1)
            echo "<a href=\"inpack\bag.php\" class=\"button\">茄芷袋</a><br>";
        if( $_SESSION["bag"] == 2)
            echo "<a href=\"inpack\bagn.php\" class=\"button\">茄芷袋</a><br>";
        if( $_SESSION["s5"] == 1)
            echo "<a href=\"inpack\step5.php\" class=\"button\">菜市場小故事</a><br>";
        if( $_SESSION["ball"] == 1)
            echo "<a href=\"inpack\ball.php\" class=\"button\">籃球</a><br>";
        if( $_SESSION["ball"] == 2)
            echo "<a href=\"inpack\balln.php\" class=\"button\">籃球</a><br>";
        if( $_SESSION["s6"] == 1)
            echo "<a href=\"inpack\step6.php\" class=\"button\">興仁公園小故事</a><br>";
    ?>

    </div>
</div>
</div>



<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
