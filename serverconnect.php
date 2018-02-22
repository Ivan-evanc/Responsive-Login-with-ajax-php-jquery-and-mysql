<?php
function connectServer(){
	$connect=mysql_connect('localhost','root','');

	$dbconnect=mysql_select_db('easylife_i_drink');
}

connectServer();

?>