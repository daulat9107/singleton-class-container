<?php
namespace Daulat\System\Config;
class Config{
	/**
	 * multidimensional array
	 * @var array
	 */
	private $data=array();
	/**
	 * get configurations from file
	 * @param string $path configuration file path
	 */
	public function __construct($path){

				if(file_exists($path)){
					$this->data=require $path;
				}
	}
	/**
	 * Find any value in array
	 * @param  string $string dot separated
	 * @return string         any value of array
	 */
	public function get($string){
		$explode=explode('.', $string);
		$output=$this->data;
		foreach ($explode as $key => $value) {
			$output=$output[$value];
		}
		return $output;
	}

}
