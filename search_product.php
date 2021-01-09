<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="javascript/jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
<div class="infor">
	<div class="search" style="padding-left: 100px; margin-top: 20px;">
		<?php
					include("connect.php");
					if(isset($_POST["search_song"]))
					{
						$songName_search = $_POST['nhap'];
						$sql = "select * from song where songName like '%$songName_search%'";
						mysqli_query($con,$sql);
					}else
					{
						$sql = "select * from song";
					}
					$result = mysqli_query($con,$sql);

		?>
		<form action="" method="POST" enctype="multipart/form-data">
		<tr>
			<td ><input type="text" name="nhap" size="100" placeholder="Nhập Sản Phẩm Cần Tìm ">
				<input type="submit" name="search_song" value="Tìm kiếm">
			</td>
		</tr>
	</form>
     <br/><br/>
	<div class="infor">
<div class="table-responsive">
		
				<table class="table" >
					<tr>
						<th >STT</th>
						<th >Tên bài hát</th>
						<th >Giá</th>
						<th >Ca sĩ</th>
						<th >Poster</th>
						<th ></th>
						<th width="100px;"><a href="index_product.php?quanly=add_product">Thêm</a></th>
					</tr>
			<?php while ($row = mysqli_fetch_array($result)) {
				
			 ?>
					<tr>
						<td><?php echo $row['songID']; ?> </td>
						<td><?php echo $row['songName']; ?></td>
                        <td><?php echo $row['songPrice']; ?> </td>
						<td><?php echo $row['songDescription']; ?></td>
						<td><img class="rounded-circle dia-cd" style="width: 75px; height: 75px" src="songImage/<?php echo $row['songImage']; ?>" ></td>	
						<td><audio controls loop src="songFile/<?php echo $row['songFile']; ?>"></audio> </td>

						<td><a href="index_product.php?quanly=edit_product&songID=<?php echo $row['songID']; ?>">Sửa</a>
							<a onclick="return window.confirm('Bạn muốn xóa không');" href="index_product.php?quanly=delete_product&songID=<?php echo $row['songID']; ?>">Xóa</a>
						</td>
					</tr>
			 <?php } ?>
					
				</table>
	</div>
			</div>

</body>
</html>