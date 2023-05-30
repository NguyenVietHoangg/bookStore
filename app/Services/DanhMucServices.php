<?php

namespace App\Services;
use App\Models\DanhMucModel;

class DanhMucServices extends BaseServices
{
    private $danhmuc;
    /**
     * 
     * 
     */
    function __construct()
        {
        parent::__construct();
        $this->danhmuc = new DanhMucModel();
        $this->danhmuc->protect(false);
        }
    // get data
    public function getAllDanhMuc(){
        return $this->danhmuc->findAll();
    }
}