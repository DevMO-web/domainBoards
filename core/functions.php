

<?php


//===========Start: PHP TESTING===============


function dd($value){
   echo "<pre>";
    var_dump($value);
    echo"</pre>";
    die();
}


//===========End: PHP TESTING===============


//===========Start: ROUTES===============

//NOT USING CURRENTLY

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

//===========END: ROUTES===============

//===========Start: BASE PATH===============

//This will go outside the public folder to look for intended path
function basePath($path){
    return BASE_PATH . $path;
};

function view($path, $attributes = []){
    extract($attributes);
 
    require basePath("views/" . $path);
};

//===========END: BASE PATH===============