<?php
class Posts extends Controller {

    public function __construct() {
        if(!isLoggedIn()) {
            redirect('users/login');
        }

        $this->postsModel=$this->model('Post');
    }
        public function index() {

            //Get postsModel
            $posts=$this->postsModel->getPosts();
            $data=[
                'posts'=>$posts,
            ];
            $this->view('posts/index',$data);
        }
}
?>