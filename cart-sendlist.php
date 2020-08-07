<?php require __DIR__ . '/__connect_db.php';
if (!isset($_SESSION['receiver'])) {
    $_SESSION['receiver'] = [];
}
$output = [
    'success' => false,
    'code' => 0,
    'error' => '',
    'postData' => $_POST
];

$receiver = isset($_POST['receiver']) ? $_POST['receiver'] : '';
$receiverMobile = isset($_POST['receiverMobile']) ? $_POST['receiverMobile'] : 0;
$receiverAddress = isset($_POST['receiverAddress']) ? $_POST['receiverAddress'] : 0;

$output = [
    $_SESSION['receiver']['receiver'] = $receiver,
    $_SESSION['receiver']['receiverMobile'] = $receiverMobile,
    $_SESSION['receiver']['receiverAddress'] = $receiverAddress,
    'code' => 0,
    'success' => true
];



echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>