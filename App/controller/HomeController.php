<?php 
namespace App\Controller;
require_once __DIR__."/../../Core/Controller.php";
use Core\Controller;

class HomeController extends Controller{
    public function view_home(){
        return $this->render('home');
    }
    public function price(){
        return $this->render('price');
    }
    public function preview_test(){
         $this->render('preview-test');
    }
    public function start_test(){
        $information=[
            "title"=>"",
            "scripts"=>["question"]
        ];
        return $this->render('start-test',$information);
    }
    public function end_test(){
        $information=[
            "title"=>"",
            "scripts"=>["loadertest"]
        ];
        return $this->render('end-test',$information);
    }
    public function start_info(){
        return $this->render('start-info');
    }
}