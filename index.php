<?php
use Daulat\System\App;
use Daulat\System\Config\Config;
/*use Daulat\System\Validation\Validation;*/
require 'app/init.php';
$app=new App();
$app->container->singleton('config',function(){
return new Config('app/Config/production.php');
});




