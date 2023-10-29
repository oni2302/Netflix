<?php
abstract class BaseModel extends Database
{
    protected $db;
    use QueryBuilder;
    function __construct()
    {
        $this->db = new Database();
    }
    abstract function tableFill();
    abstract function fieldFill();

    public function get()
    {
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        if (empty($fieldSelect)) {
            $fieldSelect = '*';
        }
        $sql = "SELECT $fieldSelect FROM $tableName";
        $query = $this->db->query($sql);
        if (!empty($query)) {
            return $query->fetchAll(PDO::FETCH_ASSOC);
        }
        return false;
    }
    public function first()
    {
        $tableName = $this->tableFill();
        $fieldSelect = $this->fieldFill();
        if (empty($fieldSelect)) {
            $fieldSelect = '*';
        }
        $sql = "SELECT $fieldSelect FROM $tableName";
        $query = $this->db->query($sql);
        if (!empty($query)) {
            return $query->fetch(PDO::FETCH_ASSOC);
        }
        return false;
    }
    public function execute($sql)
    {
        $query = $this->db->query($sql);
        return $query;
    }
    //Lấy tất cả data ở dạng list
    public function SelectAllFrom($table)
    {
        $sql = "SELECT * FROM `$table`";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return [];
        return $result;
    }
    //Thêm Data
    protected function InsertDataInto($data, $table)
    {
        $sql = "INSERT INTO $table(";
        foreach ($data as $key => $value) {
            $sql .= $key . ',';
        }
        $sql = rtrim($sql, ',');

        $sql .= ')VALUES(';
        foreach ($data as $key => $value) {
            if ($value == 'null') {
                $sql .= $value . ",";
            } else {
                $sql .= "'" . $value . "',";
            }
        }
        $sql = rtrim($sql, ',');
        $sql .= ')';
        try {
            $this->execute($sql);
            return true;
        } catch (\Throwable $th) {
            return false;
        }
    }
    //Sửa Data
    protected function UpdateTableDataById($table, $data, $id)
    {
        $sql = "UPDATE `$table` set ";
        $fieldEdit = "";
        foreach ($data as $key => $value) {
            $fieldEdit .= $key . "= '" . $value . "',";
        }
        $fieldEdit = rtrim($fieldEdit, ',');
        $sql .= $fieldEdit . " WHERE id=$id";
        $this->execute($sql);
    }
    //Xóa data
    protected function DeleteFromTableById($table, $id)
    {
        $sql = "DELETE FROM `$table` WHERE id=$id";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        return $result;
    }
}
