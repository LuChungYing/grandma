<script language="javascript">
		function ShowMeDate() {
		　var Today=new Date();
		　alert("把代碼輸入到google map");
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
「好，我們現在要去的菜市場的基地，以前是用煉鋁的廢土填成的，你知道鋁的原子序是多少嗎？」<br>                                                     

「這好難欸，阿嬤我不會～」「阿嬤跟你說，跟菜市場有數字的招牌有關喔。」<br>

「市場有兩個很大的招牌，一個是\"A\"香腸，另一個是\"B\"超市。首先用B減掉A的7倍，然後再減掉8，最後除以2，就會是答案了。」<br><br>

「阿嬤這好複雜……」「慢慢算，你一定可以的。」<br><br>
</div></div>
"
    ;
echo "
<wel>
<div class=\"container\" style = \"margin: 100 300 20 250\" >
    <form method=\"post\">
　      你算出來了嗎: <input type=\"test\" name=\"answer\">
        <input type=\"submit\" name=\"submit\" value=\"submit\">
    </form>

</div>
</div>";
if (isset($_POST["submit"])){
    if ($_POST["answer"] == "80"){
    echo "<html><body>";
    echo "<div id=\"wel2\">
    <div class=\"container2\" style = \"margin: 10 300 20 -530; font-size: 1.2em;text-align: left\">
「對了，是13。阿嬤到底怎麼連元素週期都懂……」我自顧自地說著。

「這不是管區嬤的孫子嗎？管區嬤最近好不好呀？」出聲的是九九香腸的老闆兒子，他和我一樣，也算是半個北漂青年。當初在竹科工作，結果遇上金融風暴，被放了很久的無薪假，正好思考了一下關於家業這回事，於是就回來接老闆的衣缽了。

「好久不見了，蔡大哥，最近生意好嗎？」

「還是老樣子，普普通通啦。」

畢竟有著相似的經歷，年紀又差不多，我和蔡大哥一直都蠻有話聊的。我和他互相寒暄了一番，也順帶解釋了我突然回來的原因，他聽完之後，嘆了很深的一口氣。

「管區嬤和大家都是好朋友，只是她最近越來越少來這邊，大家也都很擔心她。你要幫我們好好照顧她，知道嗎？」

我聽著蔡大哥說的，心裡有些內疚。這幾年待在台北的我，疏忽了太多家人的狀況，也怠惰了家人互相照顧的職責，阿嬤現在的狀態，又讓我更多了一些自責感。

「蔡大哥，我還有事情，先走一步了。」簡單告別後，我匆匆離開了菜市場。

</div></div>
";
            echo "<div id=\"header2-featured\" style = \"margin: 0 300 100 -230;\; background-size: 750px 700px; width: 450px;\">
                         <class=\"container2\" style = \"margin: 0 100 100 0;\" > 
                  </div>";
        echo "</p>                                                                                                                                             
        <div class=\"container1\" style= \"margin: -100 300 20 -600  \">
                    <a onClick=\"ShowMeDate()\" class=\"button\">提示</a> 
                    <a href=\"step5.php\" class=\"button\">下一關!</a>
        </div>
        </div>
";
        echo "</body></html>";
    }
    else{
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
