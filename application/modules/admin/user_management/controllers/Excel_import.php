<?php
defined('BASEPATH') OR exit('No direct script access allowed');
// use Box\Spout\Reader\Common\Creator\ReaderEntityFactory;

class Excel_import extends CI_Controller {
  public function __construct()
  {
  	parent::__construct();
    $this->load->model('User_management_model','userM');
    // $this->load->library('excel');

  }
    
  }
  public function exl_insert()
  {
    $config['upload_path'] = './uploads/suppliers_list';
            $config['allowed_types'] = '*';
            $config['max_size'] = '5000';
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('file'))
             {
          
                print_r($this->upload->display_errors());
              } 
              else 
              {
              $data = $this->upload->data();
              $exl=$data['file_name'];
              
            }
           // redirect(base_url('webuser/User_management/supplier'));

            // $file_data = $this->upload->data();
            // $file_path =  './uploads/suppliers_list/'.$data['file_name'];
            // include 'Classes/PHPExcel/IOFactory.php';
            // $inputFileName = $file_path; 
            // $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
            // $allDataInSheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
            // $arrayCount = count($allDataInSheet);  // Here get total count of row in that Excel sheet
            // for($i=2;$i<=$arrayCount;$i++)
            // {                   
            //     'name' = $allDataInSheet[$i]["C"],
            //     'address' = $allDataInSheet[$i]["I"],
            //     'standard'=$allDataInSheet[$i]["J"],
            // }
                   

//      $filePath = './uploads/suppliers_list';
//      $reader = ReaderEntityFactory::createReaderFromFile($filePath);

//     $reader->open($filePath);

// foreach ($reader->getSheetIterator() as $sheet) {
//     foreach ($sheet->getRowIterator() as $row) {
//         // do stuff with the row
//         $cells = $row->getCells();
//         $A = $cells[0]->getValue();
//         $B = $cells[1]->getValue();

//         echo 'Colum A : '.$A;
//         echo ' ';
//         echo 'Colum B : '.$B;
//         echo '<br>';
//     }
// }

//  $reader->close();
  }


  public function import() 
  {
    $this->load->library('excel');
    // echo "string";exit;
    if(isset($_FILES["file"]["name"]))
    {
      $path = $_FILES["file"]["tmp_name"];
      $object = PHPExcel_IOFactory::load($path);
      foreach($object->getWorksheetIterator() as $worksheet)
      {
        $highestRow = $worksheet->getHighestRow();
        $highestColumn = $worksheet->getHighestColumn();
        for($row=2; $row<=$highestRow; $row++)
        {
          $name = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
          $username = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
          echo $name; exit;
          $password = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
          $email = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
          $mobile = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
          $data[] = array(
            'name'    =>  $name,
            'username'     =>  $username,
            'password'        =>  $password,
            'email'    =>  $email,
            'mobile'     =>  $mobile
          );
        }
      }
      $this->userM->insert($data);
      echo 'Data Imported successfully';
    } 
  }

}
