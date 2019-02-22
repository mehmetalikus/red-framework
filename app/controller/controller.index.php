<?php

class Index extends Controller
{
	public function Dashboard() {
		$this->view("index", ["title" => __("Anasayfa")]);
	}

}