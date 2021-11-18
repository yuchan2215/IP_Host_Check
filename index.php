<?php
$ip = $_SERVER['REMOTE_ADDR'];
$host = gethostbyaddr($ip);

echo 'IP:'.$ip.'<br>HOST:'.$host;