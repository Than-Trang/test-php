<?php 

/**
 * 
 */
class Basemodel
{
	private $str_connect;
	function __construct()
	{
		$this->connect();
	}
	public function connect()
	{
		$this->str_connect=new mysqli('localhost','root','','dbsinhvien');
		mysqli_set_charset($this->str_connect,'utf8');// viet tieng viet trong bd
	}
	public function Select()
	{
		$str='SELECT * FROM `student`';
		$result=$this->str_connect->query($str);
		if ($result->num_rows==0) {
			$data=0;
		}else{
			while ($row=$result->fetch_assoc()) { //fetch_assoc trỏ qua tat cả cac hang
				$data[]=$row;
			}
		}
		return $data;
	}
	public function Select_id($id){
		$str = "SELECT * FROM `student` WHERE Id = $id";
		$result=$this->str_connect->query($str);
		if($result -> num_rows == 0){
			$data=0;
		}
		else{
			while ($row = $result ->fech_assoc()){
				$data[]=$row;
			}
		
		}
		return $data;
	}
	public function Insert($a,$b){
		$query = "INSERT INTO `student` (`FULL_NAME`, `USER_NAME`) VALUES ('$a', '$b')";
		$this->str_connect->query($query);
	}
	public function Delete($id){
		$delete = "DELETE FROM `student` WHERE Id = $id";
		$this->str_connect->query($delete);
	}
	public function Update($id,$a,$b){
		$update = "UPDATE `student` SET `FULL_NAME`='".$a."',`USER_NAME`='".$b."' WHERE Id = $id";
		$this->str_connect->query($update);
	}
	
	
}


 ?>