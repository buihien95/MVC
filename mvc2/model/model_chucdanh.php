<?php 

// load file config.php

include_once "config.php";
// tạo class model_chúc danh

class model_chucdanh{
	// tạo hàm danh sach chức danh để lấy tất cả các bản ghi trong table chức danh 
	function danhsach_chucdanh(){
		global $db;
		$result = mysqli_query($db,"select * from chucdanh");
		$arr = array();
		while($arows = mysqli_fetch_object($result))
			$arr[]=$arows;
		return $arr;

	}
}

 ?>