

<!DOCTYPE html>
<html lang="zh-cn">
    <head>
        <meta charset="utf-8">
        <title>舆情监控</title>
    </head>
<body>

<p>    
    <?php
	include("LIB_http.php");
	include("LIB_parse.php");
	include("LIB_rss.php");
	$target = "http://daxue.163.com/special/00913J5N/daxuerss.xml";
	$filter_array[]="大学";
	$rss_array = download_parse_rss($target, $filter_array);
    display_rss_array($rss_array);
?>
</p>
</body>
</html>