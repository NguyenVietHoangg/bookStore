<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Services\UserServices;


class UserController extends BaseController
{
    /**
     * @var Service
     * */
    private $service;
    public function __construct()
    {
        $this->service= new UserServices;
    }
    public function listUser(){
        $data = [];
        $dataLayout['users'] = $this->service->getAllUsers();
        $cssFile = ['https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css'];
        $jsFile = ['http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js','assets/admin/js/list-user.js'];
        $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/user/list',$dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function addUser(){
        $data = [];
        $cssFile = ['assets/admin/css/validate.css'];
        $jsFile = ['assets/admin/js/validateForm.js'];
        $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/user/add',[],$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function createUser(){
        $this-> service -> addUserInfo($this->request);
      return redirect()->back()->withInput();
    }
    public function deleteUser($id){
            $user = $this->service->getUserByID($id);
            $this->service->deleteUserInfo($user);
            return redirect()->back();  
    }
    public function editUser($id){
        $data = [];
        $dataLayout['user'] = $this->service->getUserByID($id);
         //dd($dataLayout['user']);
        $cssFile = [''];
        $jsFile = [''];
        $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/user/edit',$dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function updateUser(){
        $this-> service -> updateUserInfo($this->request);
      return redirect()->back()->withInput(); 
    }
    
}