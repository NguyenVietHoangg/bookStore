<?php

namespace App\Services;
use App\Models\DanhMucModel;
use App\Models\SachModel;
use App\Models\TheLoaiModel;
use App\Models\CartModel;




class ClientServices extends BaseServices
{
    private $danhmuc;
    private $sach;
    private $theloai;
    private $carts;

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
        $this->carts = new CartModel();

        $this->danhmuc->protect(false);
        $this->carts->protect(false);

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
    public function getAllCart($id){
        $infoDHs = array();
       $listCart=  $this->carts->where('iMaTK',$id)->findAll();
    //dd( $listCart);
       for($i=0; $i< count($listCart); $i++){
        $infoSach = $this->sach ->where('iMaSach', $listCart[$i]['iMaSach'])->findAll();
        $infoDH[$i] = array(
            'iMaGH'=>$listCart[$i]['iMaGH'],
            'infoSach'=>$infoSach,
            'soLuongMua'=>$listCart[$i]['iSoLuongMua']
        );
        $infoDHs = array_merge($infoDHs, $infoDH[$i]);
       }
       return $infoDH;
    }
    public function addCartInfo($info){
        $dataSave = $info-> getGet();
        //dd($dataSave);
        return $this->carts->save($dataSave);
    }
    public function deleteCartInfo($id){
        return $this->carts->where('iMaGH',$id)->delete();
      }
}