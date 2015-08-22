<?php
header('Content-Type:text/event-stream');
$i = 100;
date_default_timezone_set("Asia/Shanghai");
while($i--){
    echo "event:newData\n";//前台启用addListener这里需要有这个
    echo 'data:test'.date('Y-m-d H:i:s');//这里用onmessage必须用data:
    echo "\n\n";//这里注意两个
    ob_flush();
    flush();
    sleep(1);
}
