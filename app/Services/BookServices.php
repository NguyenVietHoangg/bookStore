<?php

namespace App\Services;
use App\Models\BookModel;

class BookServices extends BaseServices
{
    private $books;
    /**
     * 
     * 
     */
    function __construct()
        {
        parent::__construct();
        $this->books = new BookModel();
        $this->books->protect(false);
        }
    // get data
    public function getAllBooks(){
        return $this->books->findAll();
    }
    public function addBookInfo($requestData){
        // tạo 1 biến để lưu dữ liệu dc trả về từ phương thức post
        $dataSave = $requestData->getPost();
        return $this->books->save($dataSave);
    }
    public function getBookByID($idBook){
        return $this->books->where('iMaSach',$idBook)->first();
    }
    public function deleteBookInfo($book){
      return $this->books->where('iMaSach',$book['iMaSach'])->delete();
      
    }
    public function updateBookInfo($requestData){
        $dataSave = $requestData->getPost();
        //dd($dataSave);
        return $this->books ->where('iMaSach', $dataSave['iMaSach'])
        ->set(['sTenSach' => $dataSave['sTenSach'],
        'sTacGia' => $dataSave['sTacGia'],
        'sTheLoai' => $dataSave['sTheLoai'],
        'iDonGia' => $dataSave['iDonGia'],
        'iSoLuong' => $dataSave['iSoLuong'],
        'sAnhSach' => $dataSave['sAnhSach'],
        ])
        ->update();
      }
}