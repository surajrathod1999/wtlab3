<?php

class ItemData {
    
    private $itemList;

    function __construct(array $itemList) {
        if (sizeof($itemList)>0) {
            $this->itemList = $itemList;
        } else {
            throw new Exception("No Item record available");
        }
    }

    public function getItemName() {
        $itemNameList = [];

        foreach($this->itemList as $item) {
            $itemNameList[] = array(
                "id"=>$item['id'],
                "name"=>$item['name']
            );
        }

        return json_encode($itemNameList);
    }

    public function getItemById($id) {
        $response = ["In-Valid ID"];
        if($id) {
            foreach($this->itemList as $item) {
                if ($id == $item['id']) {
                    $response = $item;
                    break;
                }
            }
        }
        return json_encode($response);
    }

   

}
?>