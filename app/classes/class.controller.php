<?php

class Controller
{
	public function view( $data = [], $name, $folder = "")
    {
        #require __DIR__ . '/view/' . strtolower($name) . '.php';
     	extract($data);
     	require VIEW . $folder . "view." . strtolower($name) . ".php";
    }

    public function model($name)
    {
        require DIRECTORY . '/app/classes/class.' . strtolower($name) . '.php';
        return new $name();
    }
}