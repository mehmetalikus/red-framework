<?php 

class Ajax extends Controller
{
	public function index(){
		if(post("type")) {
			if(file_exists(DIRECTORY . "/app/ajax/" . post("type") . ".php")){
				require DIRECTORY . "/app/ajax/" . post("type") . ".php";
			}
		}
		else
		echo json_encode(["error-message" => __("POST YOK")], JSON_UNESCAPED_UNICODE);
	}

	public function AjaxExample(){
		return $this->view("example", ["title" => __("AJAX Örnekleri")]);
	}
}