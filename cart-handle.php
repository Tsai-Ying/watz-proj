<?php require __DIR__ . '/__connect_db.php';
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

/*
 * action:
 *   add (加入商品),
 *   remove (移除商品),
 *   empty (清空購物車)
 *   (預設) (查詢內容)
 */

$action = isset($_GET['action']) ? $_GET['action'] : '';
$sid = isset($_GET['sid']) ? intval($_GET['sid']) : 0;
$qty = isset($_GET['qty']) ? intval($_GET['qty']) : 0;
$output = [
    'action' => $action,
    'code' => 0
];


switch ($action) {
    case 'add':
        if(empty($sid) or $qty<=0 ){
            // 不做任何事
            $output['code'] = 400;
        } else {
            $index = array_search($sid, array_column($_SESSION['cart'], 'sid'));
            if ($index === false) {
                // 原本沒有此項目
                $sql = "SELECT `sid`, `product_name`, `img_ID`, `price`,`detail` FROM `product` WHERE `sid`=$sid";
                $row = $pdo->query($sql)->fetch();
                if (empty($row)) {
                    // 找不到那項商品
                    $output['code'] = 240;
                } else {
                    $row['qty'] = $qty;
                    $_SESSION['cart'][] = $row;
                    $output['code'] = 260;
                }
            } else {
                // 已經有該項目
                $_SESSION['cart'][$index]['qty'] = $qty;
                $output['code'] = 210;
            }
        }
        break;
    case 'remove':
        $index = array_search($sid, array_column($_SESSION['cart'], 'sid'));
        if ($index === false) {
            // 原本沒有此項目
            $output['code'] = 300;
        } else {
            // 已經有該項目
            array_splice($_SESSION['cart'], $index, 1);
            $output['code'] = 310;
        }
        break;
    case 'empty':
        $_SESSION['cart'] = [];
        break;

}

$output['cart'] = $_SESSION['cart'];
echo json_encode($output, JSON_UNESCAPED_UNICODE);
?>

