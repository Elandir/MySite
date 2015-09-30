<?php
function open_database_connection()
{
	$link=mysql_connect('localhost','minatella','123')
	msql_select_db('minatella',$link);
	mysql_query("SET CHARSET SET UTF8")
	return $link;

}
function close_database_connection($link)
{
	mysql_close($link);
	}
	function get_all_rows()
{
	$link=open_database_connection;
	$result=mysql_query('SELECT*FROM posting',$link)
	rows=array();
	while($row=mysql_fetch_assoc ($result)){
		$rows[]=$row;
	}
	return $rows;
}