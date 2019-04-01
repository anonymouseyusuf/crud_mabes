<?php
Class users extends CI_Controller{
	function index(){
		$data= array();
		$this->load->model("model_users");

		$data['list_users'] = $this->model_users->load_users();
		// $data['yusuf'] = "Ini adalah Yusuf";
		// $data['mabes'] = "Mabes TNI";

		
		$this->load->view("data_users",$data);

	}

	function add(){
		//die("ini tampilan dari fungsi add sebelum di lempar ke view add");


		$data= array();
		$this->load->model("model_users");
		if(isset($_POST['tombol_submit'])){
			//proses simpan dilakukan
			$this->model_users->simpan($_POST);
			redirect("users");
		}


		$this->load->view("add_user",$data);



	}

}