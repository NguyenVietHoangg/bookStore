<?php

namespace App\Services;
use App\Models\SachModel;


class SachServices extends BaseServices
{
    private $sach;
    /**
     * 
     * 
     */
    function __construct()
        {
        parent::__construct();
        $this->sach= new SachModel();
        $this->sach->protect(false);
        }
    // get data
    public function getAllSach(){
        return $this-> sach->findAll();
    }
    public function addSachInfo($requestData){
        // tạo 1 biến để lưu dữ liệu dc trả về từ phương thức post
        $dataSave = $requestData->getPost();
        return $this->sach->save($dataSave);
    }
    public function getSachByID($idS){
        return $this->sach->where('iMaSach',$idS)->first();
    }
    public function deleteSachInfo($sach){
      return $this->sach->where('iMaSach',$sach['iMaSach'])->delete();
      
    }
    public function updateSachInfo($requestData){
        $dataSave = $requestData->getPost();
        //dd($dataSave);
        return $this->sach ->where('iMaSach', $dataSave['iMaSach'])
        ->set(['iMaTL' => $dataSave['iMaTL'],
        'sTenSach' => $dataSave['sTenSach'],
        'sTacGia' => $dataSave['sTacGia'],
        'iDonGia' => $dataSave['iDonGia'],
        'iSoLuong' => $dataSave['iSoLuong'],
        'sNXB' => $dataSave['sNXB'],
        'sNamXB' => $dataSave['sNamXB'],
        'sKichThuoc' => $dataSave['sKichThuoc'],
        'sTrongLuong' => $dataSave['sTrongLuong'],
        'sLoaiBia' => $dataSave['sLoaiBia'],
        'sSoTrang' => $dataSave['sSoTrang'],
        'sGioiThieu' => $dataSave['sGioiThieu'],
        'sAnhSach' => $dataSave['sAnhSach']

        ])
        ->update();
      }
}