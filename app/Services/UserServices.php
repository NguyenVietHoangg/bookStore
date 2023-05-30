<?php

namespace App\Services;
use App\Models\UserModel;

class UserServices extends BaseServices
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
    public function getAllUsers(){
        return $this->users->findAll();
    }
    public function addUserInfo($requestData){
        // tạo 1 biến để lưu dữ liệu dc trả về từ phương thức post
        $dataSave = $requestData->getPost();
        // xóa confirm password
        unset($dataSave['password_confirm']);
        // mã hóa password
        $dataSave['sPassword']= password_hash($dataSave['sPassword'], PASSWORD_BCRYPT); 
        // lưu vô data
        return $this->users->save($dataSave);
    }
    public function getUserByID($idUser){
        return $this->users->where('iMaTK',$idUser)->first();
    }
    public function deleteUserInfo($user){
      return $this->users->where('iMaTK',$user['iMaTK'])->delete();
      
    }
    public function updateUserInfo($requestData){
        $dataSave = $requestData->getPost();
        //dd($dataSave);
        return $this->users ->where('iMaTK', $dataSave['iMaTK'])
        ->set(['sEmail' => $dataSave['sEmail'],
        'sTenTK' => $dataSave['sTenTK'],
        'sDiaChi' => $dataSave['sDiaChi'],
        'sSDT' => $dataSave['sSDT'],
        'iMaQuyen' => $dataSave['iMaQuyen'],
        ])
        ->update();
        
      }
    public function getAllUserApi(){
       $data = $this->users->findAll();
       $api_users = array();
    for($i=0; $i< count($data);$i++){
        $api_user[$i] = array(['id' => $data[$i]['iMaTK'],
        'user' => $data[$i]['sTenTK'],
        'sdt' => $data[$i]['sSDT'],
        'dia-chi' => $data[$i]['sDiaChi'],
        'email' => $data[$i]['sEmail'],
        'quyen' => $data[$i]['iMaQuyen'],]
            
           );
           $api_users = array_merge( $api_users, $api_user[$i]);
        //  $api_users = $api_users + $api_user;
        //  print_r($api_users);
    }
   
   
       
       return $api_users;
    }
}