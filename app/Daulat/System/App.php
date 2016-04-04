<?php
	/**
	 * @author Daualt <djwadh910@gmail.com>
	 */
namespace Daulat\System;
use Daulat\System\Container\Container;
class App{
/**
 * Container for app content all classes
 * @var object
 */
	public $container;
/**
 * Singleton instance of container assign to container property
 */
	public function __construct(){
		$this->container=Container::instance();

	}
	/**
	 * This get megic method create dynamic properties of App 
	 * That dynamic properties contains external classes  
	 * @param  string $name Dynamic property
	 * @return object       External Class object
	 */
	public function __get($name)
    {
        return $this->container->get($name);
    }
}