<?php

namespace App\Services;
use App\Models\TheLoaiModel;

class TheLoaiServices extends BaseServices
{
    private $theloais;
    /**
     * 
     * 
     */
    function __construct()
        {
        parent::__construct();
        $this->theloais= new TheLoaiModel();
        $this->theloais->protect(false);
        }
    // get data
    public function getAllTheLoai(){
        return $this-> theloais->findAll();
    }
    public function addTheLoaiInfo($requestData){
        // tạo 1 biến để lưu dữ liệu dc trả về từ phương thức post
        $dataSave = $requestData->getPost();
        return $this->theloais->save($dataSave);
    }
    public function getTheLoaiByID($idTL){
        return $this->theloais->where('iMaTL',$idTL)->first();
    }
    public function deleteTheLoaiInfo($theLoai){
      return $this->theloais->where('iMaTL',$theLoai['iMaTL'])->delete();
      
    }
    public function updateTheLoaiInfo($requestData){
        $dataSave = $requestData->getPost();
        //dd($dataSave);
        return $this->theloais ->where('iMaTL', $dataSave['iMaTL'])
        ->set(['iMaDM' => $dataSave['iMaDM'],
        'sTenTL' => $dataSave['sTenTL']
        ])
        ->update();
      }
}