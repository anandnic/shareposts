<?php
/*
*Base Controller
*loads the models and views
*/
class Controller {
    //Load model
    public function model($model) {
        //Require model file
        require_once '../app/models/'.$model.'.php';
        //Instantiate the models
        return new $model();
    }
    //Load View models
    public function view($view,$data=[]) {
        //Check for view file
        if(file_exists('../app/views/'.$view.'.php')) {
            require_once '../app/views/'.$view.'.php';
    }
    else {
        die('No such view exists.');
        }
    }
}
?>