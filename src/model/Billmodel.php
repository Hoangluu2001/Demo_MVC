<?php


namespace App\model;




class Billmodel
{
protected  $database;
public function __construct()
{
    $db = new  DPconnection();
    $this->database = $db->connect();
}
public  function getAll(){
    $sql ="SELECT * FROM orders LIMIT 1,15";
    $stmt = $this->database->query($sql);
    return $stmt->fetchAll();

}
public function findById($id){

    $sql = "SELECT c.customerName, c.phone, c.addressLine1 , p.productName, odt.quantityOrdered , od.orderNumber, od.status
                FROM customers c
                INNER JOIN orders od ON c.customerNumber = od.customerNumber
                INNER JOIN orderdetails odt ON od.orderNumber = odt.orderNumber
                INNER JOIN products p ON odt.productCode = p.productCode
                WHERE od.orderNumber = :id";

    $stml = $this->database->prepare($sql);
    $stml->bindParam(':id',$id);
    $stml->execute();
    return $stml->fetchAll();
}
//public function totalPriceOreder($id){
//    $sql = "SELECT orderNumber, SUM(quantityOrdered*priceEach) as Total FROM orderdetails GROUP BY orderNumber HAVING orderNumber=:id";
//    $stml = $this->database->prepare($sql);
//    $stml->bindParam(':id',$id);
//    $stml->execute();
//    return $stml->fetchAll();
//}

    public function totalPriceOrder($id)
    {
        $sql = "SELECT o.orderNumber, o.orderDate, o.status, SUM(od.quantityOrdered*od.priceEach) as Tongtien 
            FROM `orders` o JOIN orderdetails od on o.orderNumber = od.orderNumber
            GROUP BY o.orderNumber HAVING o.orderNumber =:id";
        $stmt = $this->database->prepare($sql);
        $stmt ->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetchAll();
    }

public function updateStatus($id){

}
}