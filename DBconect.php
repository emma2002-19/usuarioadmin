<?php
$db_host="biwxjacm4xb2kgw3oblt-mysql.services.clever-cloud.com"; //localhost server 
$db_user="uzfx556rzr7pnrup";	//database username
$db_password="LCwkOqSdGnZdt7oV85eN";	//database password   
$db_name="biwxjacm4xb2kgw3oblt";	//database name

try
{
	$db=new PDO("mysql:host={$db_host};dbname={$db_name}",$db_user,$db_password);
	$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOEXCEPTION $e)
{
	$e->getMessage();
}

?>



