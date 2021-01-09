<?php
			include "connect.php";
				$sql = "select * from song where songID = '$_GET[songID]' ";
					$result = mysqli_query($con,$sql);
					$row = mysqli_fetch_array($result);


			if(isset($_POST["process"]))
			{
				$songName = mysqli_escape_string($con,$_POST["songName"]);
				$songPrice = mysqli_escape_string($con,$_POST["songPrice"]);
				$songDescription = mysqli_escape_string($con,$_POST["songDescription"]);
				$songImage = $_FILES['c_songImage']['name'];
				$songFile = $_FILES['c_songFile']['name'];
				if($songImage != null && $songFile != null)
				{
				$path = "upload/";
				$tmp_name = $_FILES['c_songImage']['tmp_name'];
				$songImage = $_FILES['c_songImage']['name'];

				move_uploaded_file($tmp_name,$path.$songImage);
			    $tmp_name = $_FILES['c_songFile']['tmp_name'];
				$songFile = $_FILES['c_songFile']['name'];

				move_uploaded_file($tmp_name,$path.$songFile);
					$sql = "update song set songImage = '$songImage' , songFile = '$songFile' , songName = '$songName', songPrice = '$songPrice' , songDescription = '$songDescription' where songID = '$_GET[songID]' ";
					mysqli_query($con,$sql);
					header('location:index_product.php?quanly=search_product');
				}					
			}

?>

<div>
	<div><h2 style="color: red; padding-top: 20px; text-align: center;">Sửa Sản Phẩm</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>ID</td>
				<td><input type="text" name="songID" ></td>
			</tr>
			<tr>
				<td>Tên bài hát</td>
				<td><input type="text" name="songName" value="<?php echo $row['songName']; ?>" ></td>
			</tr>
            <tr>
				<td>Giá</td>
				<td><input type="text" name="songPrice" value="<?php echo $row['songPrice']; ?>"></td>
			</tr>
            <tr>
				<td>Ca sĩ</td>
				<td><input type="text" name="songDescription" value="<?php echo $row['songDescription']; ?>"></td>
			</tr>
			<tr>
				<td>Poster</td>
				<td><input type="file" name="c_songImage" ></td>
                <td><img src="songImage/<?php echo $row['songImage']; ?>" style="max-width: 100px;"></td>
			</tr>
			<tr>
				<td>Nhạc</td>
				<td><input type="file" name="c_songFile" ></td>
				 <td><audio controls loop src="songFile/<?php echo $row['songFile']; ?>" style="max-width: 100px;"></audio></td>
			</tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>
