<?php

namespace App\Services;
use App\Models\DanhMucModel;
use App\Models\SachModel;
use App\Models\TheLoaiModel;



class ClientServices extends BaseServices
{
    private $danhmuc;
    private $sach;
    private $theloai;
    /**
     * 
     * 
     */
    function __construct()
        {
        parent::__construct();
        $this->danhmuc = new DanhMucModel();
        $this->sach = new SachModel();
        $this->theloai = new TheLoaiModel();
        $this->danhmuc->protect(false);
        }
    // get data
    public function getAllDanhMuc(){
        return $this->danhmuc->findAll();
    }
    public function getAllSach(){

        return $this->sach->findAll();
    }
    public function getBookByID($id){
        return $this->sach->where('iMaSach',$id)->first();
    }
    public function getAllTheLoai(){
        return $this->theloai->findAll();
    }
    public function getSachTN(){
        return $this->sach ->where('iMaTL','1')->paginate(4);
    }
    public function getSachGT(){
        return $this->sach ->where('iMaTL','4')->paginate(4);
    }
    // Chua co du lieu
    public function getSachGD(){
        return $this->sach ->where('iMaTL','1')->paginate(4);
    }
    public function getSachKT(){
        return $this->sach ->where('iMaTL','1')->paginate(4);
    }
    public function getSachCT(){
        return $this->sach ->where('iMaTL','1')->paginate(4);
    }
    public function getListSachTN(){
        return $this->sach ->paginate(8);
    }
  function pageBook()
    {
        
        return $this->sach ->pager;
    }

}