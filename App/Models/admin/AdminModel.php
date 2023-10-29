<?php
class AdminModel extends BaseModel
{
    function tableFill()
    {
    }
    function fieldFill()
    {
    }
    public function __construct()
    {
        parent::__construct();
    }
    protected function SelectAllFrom($table)
    {
        $sql = "SELECT * FROM `$table`";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        return $result;
    }
    protected function InsertDataInto($data, $table)
    {
        $sql = "INSERT INTO $table(";
        foreach ($data as $key => $value) {
            $sql .= $key . ',';
        }
        $sql = rtrim($sql, ',');
        $sql .= ')VALUES(';
        foreach ($data as $key => $value) {
            $sql .= "'" . $value . "',";
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
    protected function DeleteFromTableById($table, $id)
    {
        $sql = "DELETE FROM `$table` WHERE id=$id";
        $result = $this->execute($sql)->fetchAll(PDO::FETCH_ASSOC);
        if (empty($result))
            return false;
        return $result;
    }
}
