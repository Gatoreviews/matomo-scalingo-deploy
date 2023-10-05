<?php

$content = file_get_contents(__DIR__.'/config.ini.php.tmpl');
ob_start();
eval($content);
$content = ob_get_clean();
file_put_contents(__DIR__.'/../config/config.ini.php', $content);

