<?php

/**
 *  Connection - создаёт экземпляр PDO, предоставляющий подключение к необходимой базе данных.
 *  array - $config
 *	Return value: object(PDO)
 */
class Connection 
{
	
	public static function make($config) {

	return new PDO(
		"{$config['connection']}; dbname={$config['database']};",
		 $config['username'],
		 $config['password']);

	}
}

