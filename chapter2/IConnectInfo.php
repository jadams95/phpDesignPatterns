<?php

interface IConnectInfo 
{
	const HOST = "localhost";
	const USERNAME = "root";
	const DBNAME = "demo1";
	const PASSWD = "";
	function testConnection();
}


?>