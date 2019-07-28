<?php

class Index extends Controller
{
	public function Home() {
		$this->view("master.sample");
	}

	public function Welcome(){
		$this->view("master.welcome");
	}
}