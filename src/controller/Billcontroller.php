<?php


namespace App\controller;

use App\model\Billmodel;
class Billcontroller
{
    protected $billModel;
public  function __construct()
{
    $this->billModel = new Billmodel();
}
public  function index(){
    $bills = $this->billModel->getAll();
    include "src/view/list.php";
}
    public function show($id)
    {
        $bill = $this->billModel->findById($id);
        include "src/view/detail.php";
    }
//    public function  TotalEachOrder($id){
//    $bills = $this->billModel->totalPriceOreder($id);
//    include "src/view/list.php";
//}

    public function TotalEachOrder($id){
        return $this->billModel->totalPriceOrder($id);
    }


}