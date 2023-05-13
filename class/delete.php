<?php
class delete extends config {

    public $id;
    public function __construct($id) {
        $this->id = $id;
    }

    public function delete() {
        $connection = $this->openConnection();
        $stmt = $connection->prepare("DELETE FROM `tbl_users` WHERE `id` = '$this->id'; ");
        $stmt->execute();
        $count = $stmt->rowCount();

        if ($count == 1) {
            return false;
        } else {
            return true;
        }
    }
}
?>