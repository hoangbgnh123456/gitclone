
<?php
			include "connect.php";
			
			if(isset($_POST["process"]))
			{   
				$songID = mysqli_escape_string($con,$_POST["songID"]);
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
					$sql = "insert into song(songID,songName,SongPrice,songDescription,songImage,songFile,genreID) values('$songID','$songName','$songPrice','$songDescription','$songImage','$songFile','genreID')";
					mysqli_query($con,$sql);
					header('location:index_product.php?quanly=search_product');
				}
			}

?>

<div>
	<div><h2 style="color: purple; padding-top: 20px; text-align: center;">Thêm Bài Hát</h2></div>
	<form action="" method="post"  enctype="multipart/form-data">
		<table width="500"  border="1" style="margin: auto;">
			<tr>
				<td>ID</td>
				<td><input type="text" name="songID" ></td>
			</tr>
			<tr>
				<td>Tên bài hát</td>
				<td><input type="text" name="songName" ></td>
			</tr>
            <tr>
				<td>Giá</td>
				<td><input type="text" name="songPrice" ></td>
			</tr>
            <tr>
				<td>Ca sĩ</td>
				<td><input type="text" name="songDescription" ></td>
			</tr>
			<tr>
				<td>Poster</td>
				<td><input type="file" name="c_songImage" ></td>
			</tr>
			<tr>
				<td>Nhạc</td>
				<td><input type="file" name="c_songFile" ></td>
			</tr>
				<td></td>
				<td><input type="submit" name="process" value="Update" ></td>
			</tr>
		</table>
	</form> 
</div>
