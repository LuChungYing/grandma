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
	<div class="container1" style = "text-align: center" >
<wel>
<?php
    echo"
    <div class=\"container\" style = \"margin: 0 500 20 20\" >
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
    <div class=\"container2\" >
    這一關還沒有想到題目，請在下方輸入\"俊穎好帥\"以過關:)
</div></div>
"
    ;
echo "
<wel>
<div class=\"container\" style = \"margin: 0 300 20 20\" >
    <form method=\"post\">
　  這裡輸入：   <input type=\"test\" name=\"answer\">
        <input type=\"submit\" name=\"submit\" value=\"submit\">
    </form>

</div>
</div>";
if (isset($_POST["submit"])){
    if ($_POST["answer"] == "俊穎好帥"){
    echo "<html><body>";
    echo "<div id=\"wel2\">
    <div class=\"container2\" style = \"margin: 10 300 20 -530; font-size: 1.2em;text-align: left\">
「這裡主要供奉的是關聖帝君，又稱文衡聖帝。樓上佛祖殿則是供奉觀音佛祖。」一旁的阿姨跟我說。<br><br>

「你是管區嬤的孫子吧？她最近還好嗎？」\"管區嬤\"是阿嬤上了年紀後，大家對她的暱稱。因為她就像個管區，前鎮的大小事幾乎都仰賴她的協助。<br><br>

「妳是以前常常跟他吵架的主委！」我猛地認了出來，原來她還在這邊服務。「妳不是和她關係不好嗎？怎麼突然關心起她了？」<br><br>

「那是後來的事啦，其實我們以前是情同姊妹的好朋友，但在我們兩個跟隨了不同的神明之後，關係就越來越差了，我心裡一直很想跟她和好，甚至準備了一個關聖帝君的護身符要給她，只是後來一直沒有機會開口，想來就覺得可惜呀。」<br><br>

我簡單地和她說明了阿嬤現在的狀況，也告訴她我怎麼會突然來到這裡，她聽著聽著，表情也變得沒那麼輕鬆。<br><br>

「沒想到那時人稱前鎮一抹紅的她竟然會淪落到這樣……護身符你就帶回去給她吧，一定要好好珍惜跟她相處的時光。」<br><br>

我收下了主委阿姨的叮嚀，趕緊將下一個代號輸入google地圖。<br><br>

</div></div>
";
            echo "<div id=\"headercharm-featured\" style = \"margin: 450 300 100 -230;\; background-size: 750px 700px; width: 450px;\">
                         <class=\"container2\" style = \"margin: 0 100 100 0;\" > 
                  </div>";
        echo "</p>                                                                                                                                             
        <div class=\"container1\" style= \"margin: -100 300 20 -600  \">
                    <a onClick=\"ShowMeDate()\" class=\"button\">提示</a> 
                    <a href=\"step4.php\" class=\"button\">下一關!</a>
        </div>
        </div>
";
        echo "</body></html>";
    }
    else{
        echo "<html><body>";
    echo "<div id=\"wel2\">
            <div class=\"container2\" style = \"font-size:4em;margin: 0 300 20 -530\" >輸入錯誤！
        </div>
</div>
";
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
