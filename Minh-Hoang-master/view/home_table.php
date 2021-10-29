<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="view/css/home.css">
	<title>home</title>
</head>
<body>
	<div class="section-container">
		<div class="container">
		<a  class="btn1" href="?action=add">Add</a>
			<table class="table">
				<thead>
					<tr>
						<th class="item-table">Id</th>
						<th class="item-table">Full name</th>
						<th class="item-table">User name</th>
						<th class="item-table">Password</th>
						<th class="item-table">Phone name</th>
						<th class="item-table">Thêm, sửa, xóa</th>
					
					</tr>
				</thead>
				<tbody>
				<?php 
					foreach($data as $item => $key){
					?>
			
				<tr>
					<td class="item-table"><?php echo $key['ID']; ?></td>
					<td class="item-table"><?php echo $key['FULL_NAME']; ?></td>
					<td class="item-table"><?php echo $key['USER_NAME']; ?></td>
					<td class="item-table"><?php echo $key['PASSWORD']; ?></td>
					<td class="item-table"><?php echo $key['PHONE_NUMBER']; ?></td> 
					<td class="item-table"> 
						<a class="btn1" href="?action=update&id=<?=  $key['ID']; ?>">Update</a>
						<a class="btn1" href="?action=delete&id=<?=  $key['ID']; ?>">Delete</a>
					</td>
				</tr>
			<?php	
						}
				?>
				</tbody>
			</table>
		</div>
	</div>
</body>
</html>