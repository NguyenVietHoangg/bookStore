<?php

namespace App\Controllers\Client;
use App\Controllers\BaseController;
use App\Services\ClientServices;


class ClientController extends BaseController
{
    /**
     * @var Service
     * */
    private $service;
    public function __construct()
    {
        $this->service = new ClientServices;
    }
    public function index(){
        $data = [];
        $dataLayout['sachTN'] = $this->service ->getSachTN();
        $dataLayout['sachGT'] = $this->service ->getSachGT();

        $cssFile = ['/assets/client/css/index.css '];
        $jsFile = ['http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js','assets/admin/js/list-user.js'];
        $data = $this->loadClientLayout($data ,"Trang chu",'client/pages/index',$dataLayout,$cssFile,$jsFile);
        return view('client/main',$data);
    }
    public function listBook(){
        $data = [];
        $dataLayout['sach'] = $this->service ->getListSachTN();
        $dataLayout['page'] = $this->service ->pageBook();
        
        $cssFile = ['/assets/client/css/ds-book.css'];
        $jsFile = ['http://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js','assets/admin/js/list-user.js'];
        $data = $this->loadClientLayout($data ,"list sách",'client/pages/list-book',$dataLayout,$cssFile,$jsFile);
        return view('client/main',$data);
    }
    public function chiTietBook($id){
        $data = [];
        $dataLayout['sachItem'] = $this->service ->getBookByID($id);
        
        $cssFile = ['/assets/client/css/chi-tiet-book.css'];
        $jsFile = ['/assets/client/js/soluong.js'];
        $data = $this->loadClientLayout($data ,"chi tiết sách",'client/pages/chi-tiet-book',$dataLayout,$cssFile,$jsFile);
        return view('client/main',$data);
    }
    public function listCart($id){
        $data = [];
        $dataLayout['carts'] = $this->service->getAllCart($id);
        $cssFile = ['/assets/client/css/cart.css'];
        $jsFile = [ 'assets/client/js/cart.js'];
        $data = $this->loadClientLayout($data ,"Trang chu",'client/pages/cart',$dataLayout,$cssFile,$jsFile);
        return view('client/main', $data);
    }
    public function addCartInfo(){
        $this-> service -> addCartInfo($this->request);
        return redirect()->back()->withInput();
    }
    public function deleteCartInfo($id){
        $this-> service->deleteCartInfo($id);
        return redirect()->back()->withInput();
    }
} 