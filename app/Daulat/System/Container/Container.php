<?php
namespace Daulat\System\Container;
class Container{
	/**
	 * Singleton instance of this class
	 * @var static property
	 */
	private static $instance;
	/**
	 * That Array hold dynamic properties for app
	 * @var array
	 */
	private $data = array();
	/**
	 * This Constructor is private because of singleton pattern 
	 */
	private function __construct(){
		
	}
	/**
	 * Creating singleton instance
	 * @return  object instance of this class
	 */
	public static function instance(){
		if(!isset(static::$instance)){
			static::$instance=new Container();
		}
		return static::$instance;
	}
	/**
	 * Here we assign an object to the dynamic property of app 
	 * @param  string $property app property
	 * @param  object $callback object of that property
	 */
	public function singleton($property,$callback){
		if(is_callable($callback)){
			 $this->data[$property] = call_user_func($callback);
		}
	}
	/**
	 * This method return object and we use this method in megic method of app class to create dynamic property and object
	 * @param  string $key provide key to get object
	 * @return object      get object
	 */
	public function get($key){
		return $this->data[$key];
	}
	

    
	
}