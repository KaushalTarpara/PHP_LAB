<?php
class homeModel{
	function __construct(){
	
	}
	function home(){
		$arr=array('title'=>'Home','data'=>'Home Data');
		return $arr;
	}
	function about(){
		$arr=array('title'=>'About','data'=>'About Data');
		return $arr;
	}
	function contact(){
		$arr=array('title'=>'Contact','data'=>'Contact Data');
		return $arr;
	}
}
?>