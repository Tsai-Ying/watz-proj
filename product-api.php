<?php require __DIR__ . '/__connect_db.php';

// echo json_encode($_GET);

// exit;
$output = [
    'rows' => []
];
$qs = [];
$perPage = 15;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;
$cate_id = isset($_GET['cate']) ? intval($_GET['cate']) : 0;




$where = " WHERE 1";
if(!empty($_GET['series'])){
    $where .= sprintf(" AND series IN (%s) ", implode(',', $_GET['series']));
}

if(!empty($_GET['types'])){
    $where .= sprintf(" AND `type` IN (%s) ", implode(',', $_GET['types']));
}



$totalPages = 0;
$t_sql = "SELECT COUNT(1) FROM `product` $where";
$totalRows = $pdo->query($t_sql)->fetch(PDO::FETCH_NUM)[0];




// if ($totalRows > 0) {
//     $totalPages = ceil($totalRows / $perPage);
//     if ($page < 1) {
//         header('Location: product.php');
//         exit;
//     }
//     if ($page > $totalPages) {
//         header('Location: product.php?page=' . $totalPages);
//         exit;
//     }
   
    // $sql = sprintf("SELECT * FROM `product` WHERE series IN (1,2) AND color IN (1) AND type IN (1,2)", $where, ($page - 1) * $perPage, $perPage);
    $sql = sprintf("SELECT * FROM `product` %s LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);

    // $sql = sprintf("SELECT * FROM `product` WHERE LIMIT %s, %s", $where, ($page - 1) * $perPage, $perPage);
    $output['rows'] = $pdo->query($sql)->fetchAll();
}


echo json_encode($output, JSON_UNESCAPED_UNICODE);
