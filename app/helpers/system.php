<?php

function layout($viewName, $folder = ""){
    return VIEW . $folder . "view." .$viewName . ".php"; // HEAD. FOOTER.
}

function page_load_time($start){
	echo (microtime(true) - $start);
}