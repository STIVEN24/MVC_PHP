<?php namespace config;
class autoload
{
	public static function run()
	{
		spl_autoload_register(function($class){
			include_once str_replace("\\", "/", $class).".php";
		});
	}
}