<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Services\DanhMucServices;
use App\Services\TheLoaiServices;


class TheLoaiController extends BaseController
{
    /**
     * @var Service
     * */
    private $service;
    private $serviceDM;

    public function __construct()
    {
        $this->service = new TheLoaiServices;
        $this->serviceDM = new DanhMucServices;
    }
    public function listTL(){
        $data = [];
        $dataLayout['danhmuc'] = $this->serviceDM->getAllDanhMuc();
        $dataLayout['theloai']= $this->service->getAllTheLoai();
        $cssFile = ['https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css',
        'assets//css/list.css'
    ];
        $jsFile = ['http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js','assets/admin/js/list-user.js'];
        $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/theloai/list',$dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function addTL(){
        $data = [];
        $cssFile = ['assets/admin/css/validate.css'];
        $jsFile = ['assets/admin/js/validateForm.js'];
        $dataLayout['danhmuc'] = $this->serviceDM->getAllDanhMuc();
        $dataLayout['theloai'] = $this->service->getAllTheLoai();

        //dd($dataLayout['iMaTL']);
        $data = $this->loadMasterLayout($data ,"Danh Sách Thể Loại",'admin/pages/theloai/add', $dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function createTL(){
        $this-> service -> addTheLoaiInfo($this->request);
      return redirect()->back()->withInput();
    }
    public function deleteTL($id){
            $user = $this->service->getTheLoaiByID($id);
            $this->service->deleteTheLoaiInfo($user);
            return redirect()->back();  
    }
    public function editTL($id){
        $data = [];
        $dataLayout['danhmuc'] = $this->serviceDM->getAllDanhMuc();
        $dataLayout['theloai'] = $this->service->getTheLoaiByID($id);
         //dd($dataLayout['user']);
        $cssFile = [''];
        $jsFile = [''];
        $data = $this->loadMasterLayout($data ,"Chỉnh sửa thể loại",'admin/pages/theloai/edit',$dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function updateTL(){
        $this-> service -> updateTheLoaiInfo($this->request);
      return redirect()->back()->withInput(); 
    }
    
}