<?php

namespace App\Services;
use App\Models\QuyenModel;

class QuyenServices extends BaseServices
{
    private $theLoai;
    /**
     * 
     * 
     */
    function __construct()
        {
        parent::__construct();
        $this->theLoai = new QuyenModel();
        $this->theLoai->protect(false);
        }
    // get data
    public function getAllQuyen(){
        return $this->theLoai->findAll();
    }
}