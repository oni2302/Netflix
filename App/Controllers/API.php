<?php
class API extends BaseController
{
    public function __construct()
    {
        $this->model = $this->getModel('APIModel');
    }
    public function getData()
    {
        $contentData = $this->model->getRecommendFilm();
        $contentData['color'] = '0xFF000000';

        // Trả về dữ liệu dưới dạng JSON
        header("Access-Control-Allow-Origin: *");
        echo json_encode($contentData);
    }
    public function getAllMovie()
    {
        $data = $this->model->getAllFilm();
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
                $percentage = ($income / $incomeByYear[$oldYear]) * 100 -100;
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
}
