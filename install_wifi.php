<?php
// 获取参数
$name=$GET["name"];
$password=$GET["password"];

// 执行命令并输出结果
echo shell_exec("sudo install_wifi.sh" . " -s \"" . $name . "\" -p \"" . $password . "\"");
?>