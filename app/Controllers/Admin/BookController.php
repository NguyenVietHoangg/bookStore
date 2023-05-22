<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Services\BookServices;
use App\Services\TheLoaiServices;


class BookController extends BaseController
{
    /**
     * @var Service
     * */
    private $service;
    private $serviceTL;

    public function __construct()
    {
        $this->service = new BookServices;
        $this->serviceTL = new TheLoaiServices;
    }
    public function listBook(){
        $data = [];
        $dataLayout['books'] = $this->service->getAllBooks();
        $cssFile = ['https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css',
        'assets/book/css/list.css'
    ];
        $jsFile = ['http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js','assets/admin/js/list-user.js'];
        $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/book/list',$dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function addBook(){
        $data = [];
        $cssFile = ['assets/admin/css/validate.css'];
        $jsFile = ['assets/admin/js/validateForm.js'];
        $dataLayout['theLoai'] = $this->serviceTL->getAllTheLoai();
        //dd($dataLayout['iMaTL']);
        $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/book/add', $dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function createBook(){
        $this-> service -> addBookInfo($this->request);
      return redirect()->back()->withInput();
    }
    public function deleteBook($id){
            $user = $this->service->getBookByID($id);
            $this->service->deleteBookInfo($user);
            return redirect()->back();  
    }
    public function editBook($id){
        $data = [];
        $dataLayout['theLoai'] = $this->serviceTL->getAllTheLoai();
        $dataLayout['book'] = $this->service->getBookByID($id);
         //dd($dataLayout['user']);
        $cssFile = [''];
        $jsFile = [''];
        $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/book/edit',$dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function updateBook(){
        $this-> service -> updateBookInfo($this->request);
      return redirect()->back()->withInput(); 
    }
    
}