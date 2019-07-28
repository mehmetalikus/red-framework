<?php

class Controller
{
	public function view($name, $data = [])
    {
        include "class.blade.php";
        $blade = new \eftec\bladeone\BladeOne(VIEW, null, \eftec\bladeone\BladeOne::MODE_DEBUG);
     	echo $blade->run($name, $data);
    }

    public function model($name)
    {
        require DIRECTORY . '/app/classes/Model/' . $name . '.php';
        return new $name();
    }
}