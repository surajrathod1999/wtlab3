<?php
header("Content-type: application/json");
require 'Data.php';
// include 'Data.php';

$req = $_GET['req'] ?? null;

if ($req) {
    $jsonData = file_get_contents("restaurant.json");
    $dataList = json_decode($jsonData, true)['menu_items'];
    try {
        $itemData = new ItemData($dataList);
    } catch (Exception $th) {
        echo json_encode([$th->getMessage()]);
        return;
    }
}

switch ($req) {
    case 'name_list':
        echo $itemData->getItemName();
        break;

    case "item_data":
        $id = $_GET['id'] ?? null;
        echo $itemData->getItemById($id);
        break;
    
    default:
        echo json_encode(["In-valid request"]);
        break;
}

?>