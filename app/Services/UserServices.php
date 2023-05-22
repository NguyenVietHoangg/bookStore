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
        return $this->users->where('iMaNV',$idUser)->first();
    }
    public function deleteUserInfo($user){
      return $this->users->where('iMaNV',$user['iMaNV'])->delete();
      
    }
    public function updateUserInfo($requestData){
        $dataSave = $requestData->getPost();
        //dd($dataSave);
        return $this->users ->where('iMaNV', $dataSave['iMaNV'])
        ->set(['sEmail' => $dataSave['sEmail'],
        'sTenNV' => $dataSave['sTenNV'],
        'sDiaChi' => $dataSave['sDiaChi'],
        'sSDT' => $dataSave['sSDT'],
        'sQuyen' => $dataSave['sQuyen'],
        ])
        ->update();
        
      }
}