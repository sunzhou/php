<?php
$sun = 1 ;

$a=array(
    'a'=>1,
	'b'=>2,
);
print_r($a);
exit;
date_default_timezone_set("Asia/Tehran");

echo date('Y-m-d H:i:s',strtotime('+4 hour 30 minute',time())) ;exit;
//echo date('N',strtotime(20170205)) ;exit;

//echo '我的' ;exit;
//$a = 'a' ;
//$a = 'link.php' ;
//echo strlen($a);exit;
//$a = '' ;
//echo isset($a) ? 1 : 0 ;exit;
//echo 'it\'s ' ;exit;
//echo intval('a') ;exit;
//echo strtotime(20161213) . '===' . strtotime(20161214) ;exit;
//echo date('Y-m-d H:i:s',strtotime('-1 hour',time()));exit;
//echo date('Y-m-d H:i:s',1486335369);exit;
//echo $_SERVER['SERVER_ADDR'];exit;
//echo date('Y-m-d H:i:s',1410318621) ;exit;
//exit;
//echo $_SERVER["HTTP_USER_AGENT"];exit;
//echo substr('s,s,s,', 0, -1);exit;
/*
if(preg_match('/[0-9a-zA-Z_]{5,16}@[0-9a-zA-Z]{1,10}.[0-9a-zA-Z]{1,10}/','saaaa@15s.com')){
	echo 1;
}else{
	echo 0;
}
exit;
*/
//echo strtotime('+1 hour',strtotime(20160804)).'=='.strtotime('+1 hour',strtotime(20160805)) ;exit;

//$bn = basename($_SERVER['PHP_SELF'],'.php');
//echo $bn ;exit;
//date_default_timezone_set("Asia/Jakarta");
//echo date('Y-m-d H:i:s',1468947599);exit;
//header("Content-type: text/html; charset=utf-8");
//phpinfo();exit;
//echo basename($_SERVER['PHP_SELF'],'.php');
//echo date('Y-m-d',1449331200);exit;
//echo strtotime(20170118);exit;
//header("Location: http://www.baidu.com");

//echo $_SERVER['PHP_SELF'];
//echo md5('20150907dream');
//echo substr('1区1我',0,-1);
//$a='abc';
//echo date('Y-m-d H:i:s',1464537247);exit;
/*
echo strtotime(20160511);
echo '<br>';
echo time();
exit;
*/
//echo (strtotime(20160121) - strtotime(20140910)) / 86400 + 1 ; exit;

//$date = date('Y-m-d',strtotime('next monday',strtotime(20151228)));
//var_dump($date);exit;


$date=20170301;
echo strtotime($date);
echo '<br />';
$m="{$date}dream";
$sign=md5($m);
echo 'http://180.150.179.71/daily/server.php?date=' . $date . '&sign=' . $sign ;
echo '<br />' ;
echo 'http://180.150.179.71/daily/run.php?start_time=' . $date . '&end_time=' . $date . '&sign=' . $sign ;
exit;


// http://180.150.179.71/test
//
?>

<?php
/*


*/

?>


<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<link rel="shortcut icon" href="favicon.ico" />
<!--<meta name="viewport" content="width=device-width, initial-scale=1.0" />-->
<style>

</style>
<script>
var a = new Object() ;
a['a'] = 1 ;
a['b'] = 2 ;
a['c'] = 2 ;
var arr = Object.keys(a);
//alert(arr.length);

alert(arr.length % 5 ) ;
</script>
</head>
<body>

</body>
</html>




