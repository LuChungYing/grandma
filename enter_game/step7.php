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
	<div class="container1">
        <p style="text-align: left">

「興仁國中……我對這裡實在沒什麼印象……」洗完臉的我情緒回復了許多，感謝完叔叔阿姨的幫助之後，我仔細端詳了一下這裡。<br><br>

興仁國中和興仁公園以前都是水池，興仁國中是台灣夾板公司的儲木池，興仁公園則是一片魚塭。當時這裡有一條前鎮河的支流，這條支流繞進現在的貨櫃場內，一直到新生路才成為盲段。這條支流對前鎮人而言有很大的經濟效益，可以圍塭養魚，也作為台灣夾板公司的儲木池。<br><br>

一邊慢慢走出校園，我一邊研究著這一路收集來的東西。「書包、護身符、玩具籃球……阿嬤要我去這些地方，到底要我做什麼呢？」<br><br>

突然，我發現船票裡的字有些怪怪的。「這是什麼意思？」茄芷袋、筊杯上也都有奇怪的字，難道這才是阿嬤要我去這些地方的目的？<br><br>

物品上的語句看起來很沒有邏輯，不過好像還是有一定的順序。用通順的語意組合起
來，應該就知道是什麼意思了。<br><br>

物品上面沒有提示怎麼辦？<br><br>
哈哈 誰叫你們沒有在關卡的限定時間內解完題目<br><br>
好啦 沒有關係 給你們補救的辦法 只要看完個地點的地方歷史介紹 然後回答問題 就可以得到有提示的物品了喔<br><br>
<?php
        ini_set("session.use_cookies", "1");
        ini_set("session.use_only_cookies", "0");
        ini_set("session.use_trans_sid", "1");
        session_start();
        echo "<a href=\"step1c.php\" class=\"button\">前鎮國小小測驗</a><br>";
        echo "<a href=\"step2c.php\" class=\"button\">渡輪站小測驗</a><br>";
        echo "<a href=\"step3c.php\" class=\"button\">鎮南宮小測驗</a><br>";
        echo "<a href=\"step4c.php\" class=\"button\">銀座街小測驗</a><br>";
        echo "<a href=\"step5c.php\" class=\"button\">三天宮小測驗</a><br>";
        echo "<a href=\"step6c.php\" class=\"button\">興仁公園小測驗</a><br>";
        echo "試打看看吧: <input type=\"test\" name=\"answer\">";
?>
</body>
</html>
