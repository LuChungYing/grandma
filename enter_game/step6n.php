<script language="javascript">
		function ShowMeDate() {
		　var Today=new Date();
		　alert("兩個字的物品");
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
    echo "<html><body>";
    echo "<div id=\"wel2\" style=\"height:800;width:500\">
    <div class=\"container2\" style=\"color:red\" >
   !!! 時間已經到了喔 你們錯失了拿到提示的大好機會 請進快解出答案!!!<br><br>
    </div>
    <div class=\"container2\">
    找到圖片所對應的注音，並解析出該項物品為何？<br><br>

    
    <a href=\"map6.php\" class=\"button\">地圖</a><br><a href=\"p1.php\" class=\"button\">圖一</a><br><a href=\"p2.php\" class=\"button\">圖二</a><br><a href=\"p3.php\" class=\"button\">圖三</a><br><a href=\"p4.php\" class=\"button\">圖四</a><br><a href=\"p5.php\" class=\"button\">圖五</a><br>
<a href=\"p6.php\" class=\"button\">圖六</a><br>
    <a href=\"p7.php\" class=\"button\">圖七</a><br>

</div></div>
";
echo "
<wel>
<div class=\"container\" style = \"margin: 450 300 20 5\" >
    <form method=\"post\">
　      答案是: <input type=\"test\" name=\"answer\">
        <input type=\"submit\" name=\"submit\" value=\"submit\">
    </form>

</div>
</div>";
if (isset($_POST["submit"])){
    if ($_POST["answer"] == "籃球"){
        $url  =  "step6y.php" ;
		echo " <script language = 'javascript'
			type = 'text/javascript'> ";
		echo " window.location.href = '$url' ";
		echo " </script> ";
	 
 }
    else{
            echo "</p> <div class=\"wel2\"><div class=\"container2\" style = \"font-size:4em;margin: 0 300 20 -530\" >輸入錯誤！</div></div>";
    }
}
?>
<?php
    ini_set("session.use_cookies", "1");
    ini_set("session.use_only_cookies", "0");                                                                                 ini_set("session.use_trans_sid", "1");                                                                                    session_start();
    $_SESSION["ball"] = 2;
?>

        </p>
        <div class="container1" style= "margin: 0 300 0 -600  ">
                    <a onClick="ShowMeDate()" class="button">提示</a> 
        </div>
        </div>

	</div>
</div>



</body>
</html>
