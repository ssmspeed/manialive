<?php

namespace ManiaLive\DedicatedApi;

class Config extends \ManiaLive\Config\Configurable
{
	public $host;
	public $port;
	public $password;
	public $user;
	
	function validate()
	{
		$this->setDefault('host', 'localhost');
		$this->setDefault('port', 5000);
		$this->setDefault('user', 'SuperAdmin');
		$this->setDefault('password', 'SuperAdmin');
	}
}

?>