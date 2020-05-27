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
            $mysqli = mysqli_connect('localhost', 'root', '','grandma');
            if (mysqli_connect_errno($mysqli))
            {
              echo "connect error " . mysqli_connect_error();
            }
            $sql ="SELECT * FROM props WHERE backpack = 1";
            $result = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($result))
            {
                    echo"<a href=\"packpicture.php\" class=\"button\">書包</a><br>";
            }
            $sql ="SELECT * FROM props WHERE ticket = 1";
            $result = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($result))
            {
                    echo "<a href=\"ticket.php\" class=\"button\">船票</a><br>";
            }
            $sql ="SELECT * FROM props WHERE cup = 1";
            $result = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($result))
            {
                    echo "<a href=\"cup.php\" class=\"button\">筊杯</a><br>";
            }
            $sql ="SELECT * FROM props WHERE bag = 1";
            $result = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($result))
            {
                    echo "<a href=\"bag.php\" class=\"button\">茄芷袋</a><br>";
            }
            $sql ="SELECT * FROM props WHERE ball = 1";
            $result = mysqli_query($mysqli, $sql);
            if (mysqli_num_rows($result))
            {
                    echo "<a href=\"ball.php\" class=\"button\">籃球</a><br>";
            }
?>

    </div>
</div>
</div>



<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
