<?php
{
    class SupplierModel extends BaseModel{
        public int $id;
        public string $name;
        public DateTime $addDate;
        public float $totalPaying;
        function fieldFill(){}
        function tableFill(){}

        public function __construct(){
            parent::__construct();
        }
        public function addSupplier($data){
            $this->InsertDataInto($data,'Supplier');
        }
        public function editSupplier($id,$data){
            $this->UpdateTableDataById('Supplier', $data, $id);
        }
        public function deleteSupplier($id){
            $this->DeleteFromTableById('Supplier',$id);
            header('location:'._WEB. "/admin/Supplier/index");
        }
        public function getAllSupplier(){
            return $this->SelectAllFrom('Supplier');
        }
        
        

    }
}