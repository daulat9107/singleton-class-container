# singleton-class-container
<?php
use Daulat\System\App;
/**
 * use app class
 */
/**
 * use any class that you have 
 */
use Daulat\System\Config\Config;

require 'app/init.php';
/**
 * Create app object using app class
 * @type object
 */
$app=new App();
/**
 * Now you can make any class as part of app object like this
 * here we are creating only one instance of Config class using singleton
 * that singleton method takes two param app property name second callback
 * that callback return object.
 */
$app->container->singleton('config',function(){
return new Config('app/Config/production.php');
});
/**
 * Now you can use this object like this
 */
echo $app->config->get('db.driver');
/**
 * here get is the method of config class and config is now part of app object.
 * output:- mysql
 */
 
