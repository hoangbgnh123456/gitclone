<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="../style/style.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>
	<div class="container"> 
		<h3 class="text-danger"><?php echo ' Hello quản trị viên '. $_SESSION["admin_name"] .' !!!!'; ?></h3>
	    <form class="form-inline my-2 my-lg-0" action="" method="POST" enctype="multipart/form-data">
			<img src="../image/Screenshot 2020-09-23 190933.png" width="150" class="rounded-circle">
	      <input class="form-control mr-sm-2" type="text" name="nhap" placeholder="Nhập tên ca sĩ, bài hát" aria-label="Search">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="search_song" >Search</button>
			<a style="margin-left: 20px; margin-right:20px " href="#" ><span class="glyphicon glyphicon-envelope"></span> Thông báo</a>
						<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown2">
	         
	        </a>
	        <div class="dropdown-content">
				<a class="dropdown-item" href="../index.php">Đăng xuất</a>
	          <div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Cài đặt tài khoản </a>
	        </div>
	      </li>
			<a style="margin-left: 20px" href="../index.php" ><span class="glyphicon glyphicon-flash"></span> Đăng xuất</a>
			<a style="margin-left: 20px" href="#" ><span class="glyphicon glyphicon-cog"></span> Cài đặt</a>

	    </form>
	  </div>
<nav class="navbar navbar-expand-lg  navbar-light bg-light" >
  <div  class="container" >
	  <a class="nav-link" href="index.php"> Trang chủ </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">
	    <ul class="navbar-nav mr-auto" >
	      <li class="nav-item " >
	        <a class="nav-link" href="#">Hướng dẫn </a>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link" href="#" style="margin-left: 25px">Liên Hệ</a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown" style="margin-left: 25px" >
	          Top 100
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Việt Nam</a>
	          <a class="dropdown-item" href="#">Âu Mĩ</a>
				<a class="dropdown-item" href="#">Hòa Tấu</a>
				<a class="dropdown-item" href="#">Hàn Quốc</a>
	        </div>
	      </li>
			<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown1" style="margin-left: 25px" >
	          Chủ đề
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Buồn</a>
	          <a class="dropdown-item" href="#">Balad</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">Thể loại khác</a>
	        </div>
	      </li>
			<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown2" style="margin-left: 25px">
	          Nghệ sĩ
	        </a>
	        <div class="dropdown-content">
	          <a class="dropdown-item" href="#">Sơn Tùng</a>
	          <a class="dropdown-item" href="#">Soobin Hoàng Sơn</a>
				 <a class="dropdown-item" href="#">Hương Tràm</a>
	          <a class="dropdown-item" href="#">Huy R</a>
	          <div class="dropdown-divider"></div>
				<a class="dropdown-item" href="#">Ca sĩ khác</a>
	        </div>
	      </li>
			<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown3" style="margin-left: 25px" >
	          Album
	        </a>
	      </li>
			<li class="nav-item dropdown"> 
	        <a data-toggle="modal" data-target="#myModal" class="nav-link"  id="navbarDropdown4" style="margin-left: 25px">
	          Admin
	        </a>
				 <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title" style="text-align:center; color: red">Bạn phải đăng nhập để thực hiện quyền của Admin !!!!</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-footer">
          <button class="btn btn-success"> <a style="text-decoration:none; color:white" href="admin/login_admin.php">Đăng nhập</a></button><button type="button" class="btn btn-danger" data-dismiss="modal">Hủy bỏ</button>
        </div>
        
      </div>
    </div>
  </div>
	      </li>
			<li class="nav-item dropdown">
	        <a class="nav-link" href="#" id="navbarDropdown5" style="margin-left: 25px">
	          Nhạc cá nhân
	        </a>
	      </li>
	    </ul>
	  </div>
		  </nav> 
  </div>
	</div>
<div class="container_1">
<header>
    <div style="font-size:23px; color:#F00; border:2px solid #03F; background-color: #FFC; width:480px" id="date"></div>
    <script>
    var d = new Date();
	var thu=["Chủ Nhật","Thứ Hai","Thứ Ba", "Thứ Tư", "thứ năm", "thứ sáu", "Thứ Bẩy"];
	var thang = ["1","2","3","4","5","6","7","8","9","10","11","12"];
	document.getElementById("date").innerHTML=" &#10085; Hôm nay " + thu[d.getDay()] + " ngày "+ d.getDate() + " tháng "+thang[d.getMonth()] + " năm " +d.getFullYear() + " &#10085;";
</script> 
    <br />
    </header>
          <br />
          <!-- Code phần section -->
          <section>
    <div class="menu">
              <ul>
        <li> <a href="../index_cart.php">Trang chủ </a> <i class="fas fa-home"></i> </li>
        <li> <a href="../Admin/include/view_product.html">Sản Phẩm </a>
        <li> <a href="../introduction.html">Hướng Dẫn </a> </li>
        <li> <a href="../contact.html">Liên Hệ </a> </li>
        <li> <a href="../Admin/index.html">Tin Nhắn </li>
      </ul>
            </div>
  </section>
	<article>
	
  <label style="background-color:#36F; color:white; margin-top:50px; font-size:36px">&#8801 Vui Lòng Lựa Chọn Tính Năng: </label> <br/>
   <div class="admin">
              <ul>
     <label style="background-color:#36F; color:white; margin-top:50px; font-size:24px">&#10036 Sản Phẩm: </label> <br/> <br/>

              <li> <a href="search_product.php" >Quản Lí Sản Phẩm</li> <br/>
              </ul>
              <ul>
     <label style="background-color:#36F; color:white; margin-top:50px; font-size:24px">&#10036 Thể Loại: </label> <br/> <br/>

              <li> <a href="#" >Quản Lí Thể Loại</li> <br/>
              
              </ul>
              <ul>
     <label style="background-color:#36F; color:white; margin-top:50px; font-size:24px">&#10036 Thương Hiệu: </label> <br/> <br/>

              <li> <a href="#" >Quản Lí Thương Hiệu</li> <br/>
              
              </ul>
              <ul>
     <label style="background-color:#36F; color:white; margin-top:50px; font-size:24px">&#10036 Quản Trị: </label> <br/> <br/>

              <li> <a href="#" >Quản Lí Người Dùng </li> <br/>
              </ul>
 </div>
		</article>
 </div>
<script src="../javascript/jquery-3.3.1.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>
