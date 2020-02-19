<?php
class Pages extends Controller {

    public function __construct() {
        
    }
    
    public function index() {

        if(isLoggedIn()) {
            redirect('posts');
        }
       
        $data=[
            'title'=>'SharePosts',
            'description'=>'Simple Social Network built on MVC PHP'
        ];
        $this->view('pages/index',$data);
    }
    public function about() {
        $this->view('pages/about',['name'=>'Anand']);
    }
}
?>