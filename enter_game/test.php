    <span id="Check_Txt" style="color:red">倒數計時：
        <span id="Check_i"> 0分0秒
        </span>
        </span>
    </div>
<script type="text/javascript">
    sessionStorage.setItem("M",0);
    function Check_Time() {
        setMinute = sessionStorage.getItem("M");
        setMinute = parseInt(setMinute, 10);
        setMinute += 1;
        var Check_i = document.getElementById("Check_i");
        
        var Cal_Minute = Math.floor(Math.floor(setMinute % 3600) / 60);
        var Cal_Second = setMinute % 60;
        if( Cal_Minute > 5 ){
            express();
            return;
        }
        sessionStorage.setItem("M",setMinute);
        Check_i.innerHTML =  + Cal_Minute + "分" + Cal_Second + "秒";
    }
    var mm = window.setInterval("Check_Time()", 1000);
</script>

