<?php
require_once('./config.php');
include './base.php';

$base=new bases();

if((isset($_GET['col']))&&(isset($_GET['con']))&&(isset($_GET['val']))&&
	(strlen($_GET['col'])>0)&&(strlen($_GET['con'])>0)&&(strlen($_GET['val'])>0))
{
	$Where=$columnval[$_GET['col']].' '.$condtval[$_GET['con']];
	
	$val=preg_replace("#[^а-яА-ЯA-Za-z;:_.,? -]+#u", '', $_GET['val']);

	if($condtval[$_GET['con']]=='LIKE')
	{
		$Where.=' "%'.$val.'%"';
	}
	else
		$Where.=' "'.$val.'"';
}
else
{
	$Where='1';
}
	
	if((isset($_GET['ord']))&&(strlen($_GET['ord'])>0))
	{
		$Order=$columnval[$_GET['ord']-1];
	}
	else 
	{
		$Order=null;
	}

	if((isset($_GET['dsc']))&&($_GET['dsc']=='true'))
	{
		$Order.=' DESC';
	}
	
echo json_encode($base->TSelect($tablename,$Where,$Order));




?>