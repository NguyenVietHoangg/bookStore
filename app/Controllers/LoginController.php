<?php

namespace App\Controllers;
use App\Controllers\BaseController;
use App\Services\LoginServices;

class LoginController extends BaseController
{
    /**
     * @var Service
     * */
    private $service;
    public function __construct()
    {
        $this->service= new LoginServices;
    }
    public function index()
    {   
        return view('admin/pages/login');
    }
    public function login()
    { 
        $status = $this-> service -> loginUser($this->request);
        if($status[0]==true){
            if($status[1]==true){
                $data = [];
                $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/home' );
                return view('admin/main', $data);
            }
            else{
                // $data = [];
                // $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/user/list' );
                // return view('admin/main', $data);
                
            }
        }
      return redirect()->back()->withInput();
    }
    public function logout(){
        $this->service->logoutUser();
        return view('admin/pages/login');
    }
}