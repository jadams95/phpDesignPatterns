<?php
include_once('IConnectInfo.php');

class ConSQL implements IConnectInfo
{
	//Passing values using scope resolution operator
	private $server = IConnectInfo::HOST;
	private $currentDB = IConnectInfo::DBNAME;
	private $user = IConnectInfo::USERNAME;
	private $passwd = IConnectInfo::PASSWD;
	
	public function testConnection()
	{
		$hookup=new mysqli($this->server, $this->user, $this->passwd, 
			$this->currentDB);
		
		if (mysqli_connect_error())
		{
			
			die('bad mojo');
		}
		print "Youre hooked up Ace! <br />" . $hookup->host_info;
		
		$hookup->close();
		
	}		
}

$useConstant = new ConSQL();
$useConstant->testConnection();



?>