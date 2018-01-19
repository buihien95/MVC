<?php 
 include "model1.php";
 //----------------------------

$act = isset($_GET["act"])?$_GET["act"]:"";
switch($act){
	case "delete_phongban";
	    $maphongban = isset($_GET["maphongban"])?$_GET["maphongban"]:0;
	    // gọi hàm xóa phòng ban trong model
	    xoa_phongban($maphongban);
	    // quay trở lại trang mcv
	    header("location:mvc.php");
	  break;
}
// gọi hàm danh sach phòng ban () trong file model, trả kết quả về một biến $phongban
 $phongban = danhsach_phongban();
 //view
 include"view1.php";

 ?>