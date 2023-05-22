<?php

namespace App\Services;
use App\Models\TheLoaiModel;

class TheLoaiServices extends BaseServices
{
    private $theLoai;
    /**
     * 
     * 
     */
    function __construct()
        {
        parent::__construct();
        $this->theLoai = new TheLoaiModel();
        $this->theLoai->protect(false);
        }
    // get data
    public function getAllTheLoai(){
        return $this->theLoai->findAll();
    }
}