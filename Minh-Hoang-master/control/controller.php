<?php 

/**
 * 
 */
include_once 'model/model.php';
class Control
{
	private $base;
	function __construct()
	{
		$this->base=new Basemodel();
	}
	public function view(){
		$data = $this->base->Select();
		if(isset($_GET['action'])){
			switch($_GET['action']){
				case 'add':{
					if(isset($_POST['add'])){
						$a=$b="";
						$a = $_POST['inpFullName'];
						$b = $_POST['inpUserName'];
						$this->base->INSERT($a,$b);
						header('location: http://localhost/Minh-Hoang-master/');
					}
					include_once 'view/add.php';
					break;
				}
				case 'delete':{
					if(isset($_GET['id'])){
						$id=$_GET['id'];
						$this->base->Delete($id);
						header('location: http://localhost/Minh-Hoang-master/');
					}
					
					break;
				}
				case 'update':{
					if(isset($_POST['update'])){
						$a = $b = $id ="";
						$id=$_GET['id'];
						$a = $_POST['inpFullName'];
						$b = $_POST['inpUserName'];
						$this->base->Update($id,$a,$b);
						//print_r(Update($id,$a,$b)); ko đc cho hàm vào print, chi cho khi hàm có kết quả trả về
						header('location: http://localhost/Minh-Hoang-master/');
					}
					include_once 'view/update.php';
					break;
				}
			}
			
		}else{
			include_once 'view/home_table.php';

		}
	}
}

 ?>