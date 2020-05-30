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
輪渡站 <br>
前鎮輪渡站？我不知道多久沒來這裡了。」<br><br>

前鎮輪渡站雖然可以搭船到旗津，但是船班很少，只有真的有需求的人才會來搭，一般根本不會有遊客。<br><br>

小時候，阿嬤偶爾會帶著我坐船到旗津去玩，海風吹來，港內有些油污味。偶爾濺起的浪花平衡了太陽的熾熱，海、黑油和阿嬤的花露水組成了我的夏天。<br><br>

阿嬤是旗津人，年輕時因為前鎮比較多工作機會，所以都會搭船來這頭工作。女紅的工作不算輕鬆，但為了過生活，阿嬤也還是這樣子每日往返在兩地之間。<br><br>

年輕的阿嬤風姿綽約，在女工的圈子裡小有名氣，也常會有拆船工聚集在宿舍前，只為一睹她的風采。以現在的話來說，應該是IG30萬追蹤的網紅吧。<br><br>

某天，阿嬤遇見了開國術館的阿公，兩人天雷勾動地火，一發不可收拾，直到阿嬤嫁進了我們家，她才搬來這裡，成為了前鎮人。<br><br>

「記得和阿嬤來買票時，每次都有常常的人龍，阿嬤總說：『孫仔，先把零錢拿好，等等傳來了就可以趕緊上去了。』那時候我才國小，和阿嬤兩個人的票錢應該是…<br><br>

阿嬤是成人，我雖然國小，但已經有145公分了。這樣我們兩個的票錢總共多少呢？
<br><br>
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
阿嬤是成人，我雖然國小，但已經有145公分了。這樣我們兩個的票錢總共多少呢？
</div></div>
"
    ;
echo "
<wel>
<div class=\"container\" style = \"margin: 0 300 20 250\" >
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
小時候上了船，阿嬤總會帶我站在船的側邊，感受海風的吹拂，還有偶爾濺起的浪花。雖然很舒服，阿嬤還是會說：「要抓好護欄喔，不小心會掉進海裡的。」年輕的阿嬤對落海這件事有著不好的回憶，據說那時，有艘渡輪因為船艙破裂而翻船，船上載滿要到前鎮加工區上班的員工，無一倖免全部罹難。幸好阿嬤不在那艘船上。

「那時候中壇元帥然告訴我不要上船，我才沒有上去。」阿嬤從那件事之後，就成了中壇元帥很虔誠的信徒，而這又是另一個故事了。

「我是不是還不夠認識自己的阿嬤呢？」一邊這麼想，我一邊把第三個代碼輸進了google地圖。

</div></div>
";
            echo "<div id=\"header2-featured\" style = \"margin: 0 300 100 -230;\; background-size: 750px 700px; width: 450px;\">
                         <class=\"container2\" style = \"margin: 0 100 100 0;\" > 
                  </div>";
        echo "</p>                                                                                                                                             
        <div class=\"container1\" style= \"margin: -100 300 20 -600  \">
                    <a onClick=\"ShowMeDate()\" class=\"button\">提示</a> 
                    <a href=\"step3.php\" class=\"button\">下一關!</a>
        </div>
        </div>
";
        echo "</body></html>";
    }
    else{
        echo "<html><body>";
    echo "<div id=\"wel2\">
    <div class=\"container2\" style = \"margin: 0 300 20 -530\" >
    阿嬤是成人，我雖然國小，但已經有145公分了。這樣我們兩個的票錢總共多少呢？
<br> 輸入錯誤！      
</div></div>
";
    }
}
    ?>
        </p>
        <div class="container1" style= "margin: 0 300 0 -600  ">
                    <a onClick="ShowMeDate()" class="button">提示</a> 
                    <a href="step3.php" class="button">下一關!</a>
        </div>
        </div>

	</div>
</div>



<div id="copyright" class="container">
	<p>&copy; Untitled. All rights reserved. | Photos by <a href="http://fotogrph.com/">Fotogrph</a> | Design by <a href="http://templated.co" rel="nofollow">TEMPLATED</a>.</p>
</div>
</body>
</html>
