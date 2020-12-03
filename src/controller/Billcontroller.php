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
public  function index() {
    if (!empty($_POST['product_name']) || !empty($_POST['order_code']) || !empty($_POST['price'])) {
        $this->billModel->find($_POST['product_name'], $_POST['order_code'] , $_POST['price']);

   }

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

    public function search()
    {
        $product_name = "";
        $order_code = "";
        $price = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $product_name = $_REQUEST['product_name'];
            $order_code = $_REQUEST['order_code'];
            $price = $_REQUEST['price'];
        }
        $bills = $this->billModel->find($product_name, $order_code, $price);

        include "src/view/search.php";
    }


}