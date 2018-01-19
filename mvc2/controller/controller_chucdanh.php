<?php 

// load file model_chucdanh.php

include "model/model_chucdanh.php";
class controller_chucdanh{
	//tạo biến $model

	public $model;
	//hàm tạo
	public function __construct(){
		// khởi tạo object của class model_chucdanh, gán object này cho biến $model. Khi đó biến $model chính là 1 object của class model_chucdanh, có nghĩa là từ biến $model này có thể tác động vào các hàm trong class model_chucdanh
		$this->model = new model_chucdanh();
		// gọi hàm danhsach_chucdanh trong class
		//model_chucdanh để lấy tất cả các bản ghi trong table chúc danh
		$arr = $this->model->danhsach_chucdanh();
		// load view_chucdanh.php

		include "view/view_chucdanh.php";

	}
}
new controller_chucdanh();



 ?>