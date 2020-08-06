<?php
require __DIR__. '/__connect_db.php';

$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];
if(! isset($_POST['name'])){
    $output['error']='沒有姓名資料';
    echo json_encode($output,JSON_UNESCAPED_UNICODE);
    exit;
}
// TODO : 檢查欄位

$mobile = $_POST['mobile'];
$mobile = implode('', explode('-', $mobile));

$sql = "UPDATE `members` SET
            `name`=?,
            `mobile`=?,
            `address`=?,
            `password`=?,
            WHERE`id`=?";

$stmt = $pdo->prepare($sql);
$stmt->execute([
    $_POST['name'],
    $mobile, //因為上面已經定義變數
    $_POST['address'],
    $_POST['id'],
    $_POST['newpassword'],
    
]);

if($stmt->rowCount()){
    $output['success'] = true;
    $_SESSION['member']['password']=$row;

}

echo json_encode($output,JSON_UNESCAPED_UNICODE);
