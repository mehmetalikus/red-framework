<?php

class Index extends Controller
{
	public function Dashboard(){
		$this->view(["title" => __("Anasayfa")], "index");
	}

	public function AjaxExample(){
		$this->view(["title" => __("AJAX Örnekleri")], "example");
	}

}
