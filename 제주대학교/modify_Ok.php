<?php
  $conn= mysqli_connect('localhost', 'root', '010810','jejulibrary');
  $bno = $_GET['stock_id'];
  $bookstock = $_POST['modify'];
  $sql = "UPDATE stock SET book_stock='$bookstock' WHERE stock_id='$bno'";  //DB에 재고변경 내용 저장
	$result = mysqli_query($conn, $sql) or trigger_error(mysqli_error()." in ".$sql);
	if ($result){
    echo "<script>
    alert('수정되었습니다.');
    location.href='manageselect.php';</script>";
  }
?>
