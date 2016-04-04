<?php
require 'vendor/autoload.php';
use Daulat\System\App;
use Daulat\System\Config\Config;
$app=new App();
$app->container->singleton('config',function(){
return new Config('app/Config/development.php');
});
echo $app->config->get('db.driver');




