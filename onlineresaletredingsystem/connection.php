<?php
$dbc=mysql_connect('localhost','indrajeetsingh','8605244154');
if(!$dbc)
	{
		echo 'not connectted';
	}
if(!mysql_select_db('indrajeetsingh'))
	{
	echo 'not selected';	
	}

?>