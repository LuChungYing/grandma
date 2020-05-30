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
        <p>
三天宮 <br><br>
吃完甜點的我，在這折磨人的天氣得到一些安慰，趕緊向下個地點出發。 <br><br>

「三天宮，肯定會有這個地點的。」我對於這個地點毫不感到意外，畢竟阿嬤以前就是這裡的主委。<br><br>

在旗津渡輪翻船的意外之後，阿嬤就受到中壇元帥的感召。神明告訴她，避開這場劫難，是為了讓她能廣施善因，把正面的影響帶給身邊的人。於是她開始為社區鄰里服務，>大事小事都儘可能地提供協助。除了女紅的工作，還忙著跟阿公談戀愛，又要兼顧前鎮大大小小的事情，當年的前鎮一抹紅真的是不折不扣的斜槓青年。<br><br>

後來的遷廟事件，也是讓大家傷透了腦筋。政府竟然要神明像大學生一樣「入住宿舍」，實在是不敢相信。幸好幾番協調下（這也是靠阿嬤廣大的人脈），只剩三位神明的信>徒留在原地。至於誰在中間、誰在兩旁，就由擲筊決定。<br><br>

「孫仔，要記得：神明是在天上看的，人才是在地上活的。千萬不要為了天上的事，和地上的人傷了和氣。」年紀還小的我雖然聽不懂這番話，卻覺得天上地上的挺有趣的。>直到出了社會，才明白阿嬤話裡的道理。<br><br>

雖然後來擲筊的結果，三天宮不是在中央正位，阿嬤仍然很用心在廟裡的陳設上，尤其對聯更是請了大師發想，提升廟宇的莊嚴、神聖感。<br><br>

「但是這對聯的順序是什麼…我怎麼記不太得了？只記得跟宮裡供奉的神明『三天 中壇元帥』有關……」<br><br>
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
「『三天 中壇元帥』似乎分別隱藏在對聯的同一個位置，只要排出來了，應該就知道對聯的真正順序了。」

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
看著三間比鄰而居的廟宇，連香爐也是互相倚靠著。即使當初大家爭論不休，現在都已經雲淡風輕了。神明的事，果然還是要交給神明去處理。阿嬤說的那番話，確實發人深省。

「剩下沒幾個地方了，加緊腳步吧。」我確認了一下地圖，往下一個地點出發。


</div></div>
";
            echo "<div id=\"header2-featured\" style = \"margin: 0 300 100 -230;\; background-size: 750px 700px; width: 450px;\">
                         <class=\"container2\" style = \"margin: 0 100 100 0;\" > 
                  </div>";
        echo "</p>                                                                                                                                             
        <div class=\"container1\" style= \"margin: -100 300 20 -600  \">
                    <a onClick=\"ShowMeDate()\" class=\"button\">提示</a> 
                    <a href=\"step6.php\" class=\"button\">下一關!</a>
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
                    <a href="step6.php" class="button">下一關!</a>
        </div>
        </div>

	</div>
</div>



<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
