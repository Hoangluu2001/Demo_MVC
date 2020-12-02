
<?php
use App\controller\Billcontroller;
$loader= require __DIR__ . '/vendor/autoload.php';
$page=isset($_REQUEST['page']) ? $_REQUEST['page']: '';
$billController=new Billcontroller();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<a href="index.php?page=list-bill">Danh sach hoa don</a>
<?php
switch ($page){
    case 'list-bill':
        $billController->index();
        break;
    case 'show-bill':
        $id = $_REQUEST['id'];
        $billController->show($id);
        break;
}
?>
</body>
</html>