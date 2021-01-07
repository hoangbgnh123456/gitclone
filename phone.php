<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iphone</title>
    <link rel="stylesheet" href="test.css">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/4533631142.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
    <?php
    session_start();
    include('header.php');
    $conn=mysqli_connect("localhost","root","","assigment2");
    $query="SELECT COUNT(productID) as total from product";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    $total_record=$row['total']; //now total have value =19 (19 id is exist)

    //find limit and current page:
    if(isset($_GET['page'])){
        $current_page=$_GET['page'];
    }
    else{
        $current_page = "1";
    }
    $limit = 8;
     
    //find total and start:
    //total pages:
    $total_page=ceil($total_record/$limit); //chia làm tròn lên, vd 7/2>3 =>4;

    //limit current page from 1 to total page;
    if($current_page>$total_page){
        $current_page = $total_page;
    }
    elseif($current_page<1){
        $current_page = 1;
    }

    //find start point
    $start = ($current_page - 1) * $limit;
    // statrt query
    $rs = mysqli_query($conn, "SELECT * FROM product LIMIT $start, $limit");
        while($row=mysqli_fetch_assoc($rs)){
            ?>
            <div class="main">
                <div class="wraper">
                 <div class="card">
                 <img src="images/<?php echo $row['images']?>" alt="">
                    <div class="content">
                      <div class="row">
                         <div class="details">
                          <span>
                              <?php
                                    echo $row['Prroductname'];
                              ?>
                          </span>
                          <p>New 100%</p>
                         </div>
                      <div class="price">
                        <?php
                        echo "$";
                            echo $row['price'];
                        ?>
                      </div>
                  </div>
                  <div class="button">
                      <button><a href="Buynow.php?id=<?php echo $row['productID']; ?>">Buy Now</a></button>
                      <button id="bt2"><a href="details.php?id=<?php echo $row['productID'];?>">Details</a></button>
                  </div>
                  
              </div>
              
                 </div>
                </div>  
        </div>
        <?php } ?>
            <?php
                for ($i=0; $i < $total_page ; $i++) { 
                    ?>
                        <a class="hu" href="phone.php?page=<?php echo $i + 1; ?>"> <?php echo $i+1 ?> </a>
                    <?php
                }
            ?>

</body>
</html>