
 <?php 
  // load file config để kết nối CSDL
 include_once "config.php";
 // file model1.php nằm gần nhất với csdl
  function danhsach_phongban(){
  	global $db;
  	// thực hiện truy vấn, trả kết quả về một object 
  	$result = mysqli_query($db, "select * from phongban");
  	$arr = array();
  	// duyệt các phần tử của object $result, trả kết quả về một biến array 

  	while($rows = mysqli_fetch_object($result))
  		$arr[]=$rows;
  	return $arr;

  }
  function xoa_phongban($maphongban){
  	global $db;
  	// thực hiện truy vấn csdl
  	mysqli_query($db, "delete form phongban where maphongban=$maphongban");
  }

 ?>

 