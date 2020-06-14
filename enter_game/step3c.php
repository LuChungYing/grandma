<script language="javascript">
		function ShowMeDate() {
		　var Today=new Date();
		　alert("把代碼輸入到google map");
		}
</script>
<?php
    ini_set("session.use_cookies", "1");
    ini_set("session.use_only_cookies", "0");
    ini_set("session.use_trans_sid", "1");
    session_start();
?>

<script>
function express(){
location.href="step1n.php";
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
					<li class="current_page_item"><a href="people.php" accesskey="1" title="">人物介紹</a></li>
					<li><a href="backpack.php" accesskey="2" title="">背包</a></li>

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
	<div class="container1" style = "text-align: left" >
        <p>
鎮南宮 <br>
<br><br>
鎮南宮從建廟以來，經歷過幾次大型整修？<br><br>
A. 1次 B. 2次 C. 3次 D. 4次
<br><br>
	<div class="container1" style = "margin: 10 10 10 175" >
<form method="post">
　      你的答案是？: <input type="test" name="answer">
        <input type="submit" name="submit" value="submit">
</form>
</div>
<?php
if (isset($_POST["submit"])){
    if ($_POST["answer"] == "B" || $_POST["answer"] == "b"){
        $_SESSION["charm"] = "1";
        echo "<html><body>";
        echo "<div class=\"container1\" style = \"margin: 10 10 10 200\" >";
        echo "正確！ 請到背包裡查看已有提示的物品";
        echo "</body></html>";
    }
}
?>
</div>
</div>
</body>
</html>
