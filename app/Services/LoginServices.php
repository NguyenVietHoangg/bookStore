<?php

namespace App\Services;
use App\Models\UserModel;

class LoginServices extends BaseServices
{
    private $users;
    /**
     * 
     * 
     */
    function __construct()
        {
        parent::__construct();
        $this->users = new UserModel();
        $this->users->protect(false);
        }
    // get data
   
    public function loginUser($requestData){
        $status = [true, false];
        $dataLogin = $requestData->getPost();
        $user=$this->users->where('sEmail',$dataLogin['sEmail'])->first();
        if(!$user){
            $status[0] = false;
        }
        if(!password_verify($dataLogin['sPassword'],$user['sPassword'])){
            $status[0] = false;
        }
        if('1' == $user['iMaQuyen']){
            $status[1] = true;
        }
        $session = session();
        unset($user['sPassword']);
        $session->set('user_login', $user);
        return $status;  
    }
    public function logoutUser(){
        $session = session();
        $session->destroy();
        
    }
  
   
}