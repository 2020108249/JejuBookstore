<meta charset="UTF-8">
<?php
  if(isset($_POST['cname'])&&isset($_POST['chp'])){ //'마일리지.php'의 cname, chp가져와서 비교
    $customname=$_POST['cname'];
    $customhp=$_POST['chp'];
    $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
    $sql="SELECT * FROM hmileage where custom_name='$customname'&&custom_hp='$customhp'";
    $result = mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($run=mysqli_fetch_array($result)){ //해당 값이 DB에 있으면
      $custommileage=$run['custom_mileage'];
      echo "<script>alert(\"현재 $customname 님의 잔여 마일리지는 $custommileage 입니다.\");</script>";
      echo "<script>location.replace('마일리지.php')</script>";
    }
    else{
      echo "<script>alert(\"등록되어 있지 않습니다.\");</script>";
      echo "<script>location.replace('마일리지.php')</script>";
    }
  }
  mysqli_close($conn);
?>
