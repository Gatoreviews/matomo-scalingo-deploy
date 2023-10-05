<?php

$content = file_get_contents(__DIR__.'/config.ini.php.tmpl');
ob_start();
eval($content);
$content = ob_get_clean();
var_dump(__DIR__);
file_put_contents(__DIR__.'/config.ini.php', $content);
file_put_contents(__DIR__.'/app/config.ini.php', $content);
file_put_contents('/app/config.ini.php', $content);

`chmod +r`;
