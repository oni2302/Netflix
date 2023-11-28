<?php
class API extends BaseController
{
    public function __construct()
    {
        $this->model = $this->getModel('APIModel');
    }
    public function getData()
    {
        $id = (new Request())->getField()['id'];
        $contentData = $this->model->getRecommendFilm($id);
        $contentData['color'] = '0xFF000000';

        // Trả về dữ liệu dưới dạng JSON
        header("Access-Control-Allow-Origin: *");
        echo json_encode($contentData);
    }
    public function getAllMovie()
    {   $id = (new Request())->getField()['id'];
        $data = $this->model->getAllFilm($id);
        header("Access-Control-Allow-Origin: *");
        echo json_encode($data);
    }
    public function getImage()
    {
        $url = (new Request())->getField()['url'];
        $imageData = file_get_contents(_WEB . $url);
        $finfo = new finfo(FILEINFO_MIME_TYPE);
        $contentType = $finfo->buffer($imageData);
        header('Access-Control-Allow-Origin: *');
        header('Access-Control-Allow-Methods: GET');
        echo $imageData;

        header("Content-Type: $contentType");
    }
    public function dashboardIncome()
    {
        $results = $this->model->getIncome();
        $data = array();
        // Iterate through the results and organize data by year
        foreach ($results as $row) {
            $year = $row['year'];
            $month = $row['month'];
            $income = $row['income'];

            // Create an array for the year if it doesn't exist
            if (!isset($data[$year])) {
                $data[$year] = array('name' => $year, 'data' => array_fill(0, 12, 0));
            }

            // Update the income value for the respective month
            $data[$year]['data'][$month - 1] = $income;
        }
        // Organize income percent data
        // Tạo một mảng để lưu trữ dữ liệu theo năm
        $incomeByYear = array();

        // Tính tổng thu nhập cho từng năm
        foreach ($results as $result) {
            $year = $result['year'];
            $income = $result['income'];

            if (!isset($incomeByYear[$year])) {
                $incomeByYear[$year] = 0;
            }

            $incomeByYear[$year] += $income;
        }
        // Tạo cấu trúc JSON
        $jsonData = array();

        // Lặp qua các năm và tính phần trăm thu nhập
        $oldIncome = 0;
        $oldYear = null;
        foreach ($incomeByYear as $year => $income) {
            if ($oldIncome != 0) {
                $percentage = ($income / $incomeByYear[$oldYear]) * 100 - 100;
                $jsonData[$year] = round($percentage, 0);
            } else {
                $jsonData[$year] = 0;
            }
            $oldYear = $year;
            $oldIncome = $income;
        }
        // Convert the associative array into a numeric indexed array for JSON encoding
        $resultArray = array_values($data);

        $combinedData = array(
            'series' => $resultArray,
            'incomePercent' => $jsonData
        );
        // Encode the result as JSON
        $jsonResult = json_encode($combinedData);
        header('Content-Type: application/json');
        header('Access-Control-Allow-Origin: *');
        // Return the JSON result
        echo $jsonResult;
    }
    public function clientLogin()
    {
        $request = new Request();
        $data = $request->getField();
        $result = $this->model->validateLogin($data);
        header("Access-Control-Allow-Origin: *");
        if ($result != false) {
            echo json_encode($result);
        } else {
            echo '{}';
        }
        
    }
    public function saveHistory(){
        $data = (new Request())->getField();
        $result=$this->model->saveHistory($data);
        echo "{'result':'$result'}";

        
    }
    public function getHistory(){
        $id = (new Request())->getField()['user'];
        $result =  $this->model->getHistory($id);
        header('Access-Control-Allow-Origin: *');

        echo json_encode($result);
    }
    public function changeSession(){
        $data = (new Request())->getField();
        $this->model->changeSession($data);
    }
}
