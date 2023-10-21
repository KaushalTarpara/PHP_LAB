<?php
class homeModel{
	function __construct(){
		try{
			$this->con=new PDO("mysql:host=localhost;dbname=php","root","");
		}catch(PDOExection $e){
			echo $e->getMessage();
		}
	}
	function page($id){
		$sql="select title,data from page where id='$id'";
		$stmt=$this->con->prepare($sql);
		$stmt->execute();
		$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
		$arr=$data['0'];
		return $arr;
	}
}
?>