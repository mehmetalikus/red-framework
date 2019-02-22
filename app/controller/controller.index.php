<?php

class Index extends Controller
{
	public function Dashboard() {
		$this->view(["title" => __("Anasayfa")], "index");
	}

}