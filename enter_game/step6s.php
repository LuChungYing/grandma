<script language="javascript">
		function ShowMeDate() {
		　var Today=new Date();
		　alert("兩個字");
		}
</script>
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
					<li><a href="mission.php" accesskey="3" title="">支線任務</a></li>
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
<wel>
<?php
    echo"
    <div class=\"container\" style = \"margin: 0 500 20 520\" >
    <span id=\"Check_Txt\" style=\"color:red\">倒數計時：
        <span id=\"Check_i\"> 0分0秒
        </span>
        </span>
    </div>
<script type=\"text/javascript\">
    var SetMinute = 0;
    function Check_Time() {
        SetMinute += 1;
        var Check_i = document.getElementById(\"Check_i\");

        var Cal_Minute = Math.floor(Math.floor(SetMinute % 3600) / 60);
        var Cal_Second = SetMinute % 60;
        if( Cal_Minute > 5 ){
            express();
            return;
        }
        Check_i.innerHTML =  + Cal_Minute + \"分\" + Cal_Second + \"秒\";
    }
    var mm = window.setInterval(\"Check_Time()\", 1000);
</script>";
    echo "<html><body>";
    echo "<div id=\"wel2\">
    <div class=\"container2\">
    找到圖片所對應的注音，並解析出該項物品為何？<br><br>
   (神秘小提示: 七月二十一號，該項賽事將會重啟)
</div></div>
";
echo "
<wel>
<div class=\"container\" style = \"margin: 100 300 20 250\" >
    <form method=\"post\">
　      答案是: <input type=\"test\" name=\"answer\">
        <input type=\"submit\" name=\"submit\" value=\"submit\">
    </form>

</div>
</div>";
if (isset($_POST["submit"])){
    if ($_POST["answer"] == "籃球"){
    echo "<html><body>";
    echo "<div id=\"wel2\">
    <div class=\"container2\" style = \"margin: 10 300 20 -530; font-size: 1.2em;text-align: left\">
原來我那時候這麼想要籃球。後來我當然被阿嬤修理了一頓，想要的籃球也沒買到，衣服還髒得要命。真的是得不償失。<br><br>

「阿嬤，為什麼你剛剛說我是泥鰍啊？」回家的路上，我牽著阿媽的手問。<br><br>

「因為以前這裡是一個大水池啊，那時候前鎮河還有一條分支流進來這邊喔。」<br><br>

「哇，那不就是一個超大游泳池了嗎？好酷喔～阿嬤再多說一點以前的故事給我聽～」<br><br>

我想起那天和阿嬤追逐、挨阿嬤罵、邊說故事邊走回家的情景，顧不得旁邊還有一堆唱著卡拉ＯＫ的阿姨叔叔們，突然就哭了起來，而且越哭越大聲。<br><br>

「少年仔，你是怎麼了？怎麼哭成這樣？」<br><br>

「我只是很想念阿嬤，想念那個以前健健康康，還會生氣罵人的阿嬤……」我哭得滿臉鼻涕眼淚，阿姨叔叔們只好帶我到旁邊的興仁國中稍微洗洗臉。


</div></div>
";
            echo "<div id=\"headerball-featured\" style = \"margin: 300 300 100 -230;\; background-size: 750px 700px; width: 450px;\">
                         <class=\"container2\" style = \"margin: 0 100 100 0;\" > 
                  </div>";
        echo "</p>                                                                                                                                             
        <div class=\"container1\" style= \"margin: -100 300 20 -600  \">
                    <a onClick=\"ShowMeDate()\" class=\"button\">提示</a> 
                    <a href=\"step7.php\" class=\"button\">下一關!</a>
        </div>
        </div>
";
        echo "</body></html>";
    }
    else{
            echo "</p> <div class=\"wel2\"><div class=\"container2\" style = \"font-size:4em;margin: 0 300 20 -530\" >輸入錯誤！</div></div>";
    }
}
    ?>
        </p>
        <div class="container1" style= "margin: 0 300 0 -600  ">
                    <a onClick="ShowMeDate()" class="button">提示</a> 
        </div>
        </div>

	</div>
</div>



<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
