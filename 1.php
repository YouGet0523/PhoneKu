<html>
<head>
<meta charset="utf-8">
<title>手机号所属地区查询库</title>

<link rel="shortcut icon" href="http://www.youget.vip/usr/themes/default/img/favicon.ico">

<meta name="apple-mobile-web-app-title" content="YouGet">

<link rel="stylesheet" type="text/css" href="1.css">
<style type="text/css" media="screen">



    .sucai{
        width:30%;
        text-align:center;
        background-color:rgba(255, 255, 255, 0.5);
        margin:10% auto;

    }
    .sucai input{

        margin-bottom:5%;
    }
	.sucai textarea{
	
	    margin-bottom:5%;
	}
    .lj{
        padding-top:5%;
        font-weight:bold;
    }

</style>
</head>
<body>
<div class="sucai">
<div class="lj">查询结果为: </div><br>
<?php
$url = $_POST['downurl'];

if(strlen($url)!=7){
    echo("请输入手机号的前7位数字！");
}
else
{


//$myfile = fopen("youget.txt", "r") or die("Unable to open file!");
$fp = fopen("youget.txt", "r") or die("Unable to open file!");
while(!feof($fp)){

    $str = fgets($fp);//逐行读取。如果fgets不写length参数，默认是读取1k。
    $k7=substr($str, 0, 7);
    if($url==$k7){
        echo($str);
    }

    }
}
?>
<br><br>
<a href="http://www.youget.vip/phoneku/index.html" style="color: black;">重新输入</a>
</div>
</body>
</html>


