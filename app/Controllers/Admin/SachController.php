<?php

namespace App\Controllers\Admin;
use App\Controllers\BaseController;
use App\Services\SachServices;
use App\Services\TheLoaiServices;



class SachController extends BaseController
{
    /**
     * @var Service
     * */
    private $service;
    private $serviceTL;
    public function __construct()
    {
        $this->service = new SachServices;
        $this->serviceTL = new TheLoaiServices;
    }
    public function listSach(){
        $data = [];
        $dataLayout['sach'] = $this->service->getAllSach();
        $cssFile = ['https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css'];
        $jsFile = ['http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js','assets/admin/js/list-user.js'];
        $data = $this->loadMasterLayout($data ,"Trang chu",'admin/pages/sach/list',$dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function addSach(){
        $data = [];
        $dataLayout['theloai'] = $this ->serviceTL ->getAllTheLoai();
        $cssFile = ['assets/admin/css/validate.css'];
        $jsFile = ['assets/admin/js/validateForm.js'];
        $data = $this->loadMasterLayout($data ,"Thêm Sách",'admin/pages/sach/add', $dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function createSach(){
        
        $this-> service -> addSachInfo($this->request);
      return redirect()->back()->withInput();
    }
     public function listSachApi()
    {
        $dataLayout = $this->service->getAllSachApi();
        return $this->response -> setStatusCode(200)-> setJSON($dataLayout);
        
    }
    public function deleteSach($id){
            $Sach = $this->service->getSachByID($id);
            $this->service->deleteSachInfo($Sach);
            return redirect()->back();  
    }
    public function editSach($id){
        $data = [];
        $dataLayout['theloai'] = $this ->serviceTL -> getAllTheLoai();
        $dataLayout['sach'] = $this->service->getSachByID($id);
         //dd($dataLayout['Sach']);
        $cssFile = [''];
        $jsFile = [''];
        $data = $this->loadMasterLayout($data ,"Chỉnh sửa sách",'admin/pages/sach/edit',$dataLayout,$cssFile,$jsFile);
        return view('admin/main', $data);
    }
    public function updateSach(){
        $this-> service -> updateSachInfo($this->request);
      return redirect()->back()->withInput(); 
    }
    
}