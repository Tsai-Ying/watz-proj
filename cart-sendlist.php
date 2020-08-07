<?php require __DIR__ . '/__connect_db.php';
if (!isset($_SESSION['receiver'])) {
    $_SESSION['receiver'] = [];
}

if (!isset($_SESSION['sender'])) {
    $_SESSION['sender'] = [];
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

$sender = isset($_POST['sender']) ? $_POST['sender'] : '';
$senderMobile = isset($_POST['senderMobile']) ? $_POST['senderMobile'] : 0;
$senderAddress = isset($_POST['senderAddress']) ? $_POST['senderAddress'] : 0;
$senderEmail = isset($_POST['senderEmail']) ? $_POST['senderEmail'] : 0;

$output = [
    $_SESSION['receiver']['receiver'] = $receiver,
    $_SESSION['receiver']['receiverMobile'] = $receiverMobile,
    $_SESSION['receiver']['receiverAddress'] = $receiverAddress,
    $_SESSION['sender']['sender'] = $sender,
    $_SESSION['sender']['senderMobile'] = $senderMobile,
    $_SESSION['sender']['senderAddress'] = $senderAddress,
    $_SESSION['sender']['senderEmail'] = $senderEmail,
    'code' => 0,
    'success' => true
];



echo json_encode($output, JSON_UNESCAPED_UNICODE);

?>