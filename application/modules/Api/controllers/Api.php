<?php
defined('BASEPATH') or exit('No direct script access allowed');


class Api extends MX_Controller
{

   public function __construct()
   {
      parent::__construct();
   }

   public function Login_POST()
   {

      $data = array(
         "email" => "1036226@kseberp.in",
         "password" => "password"
      );
      $baseurl = getApi_url();

      $apiurl     = "$baseurl/login";
      $data_array = json_encode($data);
      $curl       = curl_init();
      curl_setopt($curl, CURLOPT_URL, $apiurl);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data_array);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      return $result = curl_exec($curl);
   }

   public function curl_postdata($url, $data)
   {

      $baseurl = getApi_url();
      $apiurl     = "$baseurl/$url";
      $data_array = json_encode($data);
      $curl       = curl_init();
      curl_setopt($curl, CURLOPT_URL, $apiurl);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data_array);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      $result1 = curl_exec($curl);
      return $result1;
   }

   public function curl_getdata($url)
   {
      $baseurl = @getApi_url();
      $token_get = $this->Login_POST();
      $token1 = json_decode($token_get);
      $token = $token1->result_data->token->access_token;

      $apiurl     = "$baseurl/$url";
      $curl       = curl_init();
      curl_setopt($curl, CURLOPT_URL, $apiurl);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


      curl_setopt($curl, CURLOPT_HTTPHEADER, array(
         'Content-Type: application/json',
         'Authorization: Bearer ' . $token
      ));

      $result1 = curl_exec($curl);
      return $result1;
   }


   public function getallmaterialsubcatid_get()
   {

      $appendurl = "prc/getMaterialGroupData";

      return $this->curl_getdata($appendurl);
   }



   public function getsbudata_get()
   {

      $appendurl = "prc/getSbuData";

      return $this->curl_getdata($appendurl);
   }

   public function getMaterialData($materialgroup, $productcategory)
   {

      $appendurl = "prc/getMaterialData" . '/' . $materialgroup . '/' . $productcategory;

      return $this->curl_getdata($appendurl);
   }

   public function getTenderData()
   {

      $appendurl = "prc/getTenderData";
      return $this->curl_getdata($appendurl);
   }


   public function getPOData($erp_id)
   {
      if ($erp_id != "") {
         $appendurl = "prc/getPOData?vender_id=$erp_id";
         return $this->curl_getdata($appendurl);
      } else {
         $appendurl = "prc/getPOData?vender_id=10003744";
         return $this->curl_getdata($appendurl);
      }
   }

   public function getordersbyId()
   {
      $appendurl = "prc/getordersbyId";
      return $this->curl_getdata($appendurl);
   }


   public function curl_postdataadmin($url, $data)
   {

      $baseurl = getApi_url();
      $apiurl     = "$baseurl/$url";
      $data_array = json_encode($data);
      $curl       = curl_init();
      curl_setopt($curl, CURLOPT_URL, $apiurl);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($curl, CURLOPT_POSTFIELDS, $data_array);
      curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
      $result1 = curl_exec($curl);
      return $result1;
   }
   //----------------------------------API not using----------------------------------------------//
   public function getMaterialById()
   {

      $appendurl = "prc/getMaterialById/173";
      return $this->curl_getdata($appendurl);
   }

   public function getTenderDataById()
   {

      $appendurl = "prc/getTenderData?id=1&mst_material_id=3";
      return $this->curl_getdata($appendurl);
   }

   public function getPODataById()
   {

      $appendurl = "prc/getPOData?prc_tender_id=1&vender_id=1";
      return $this->curl_getdata($appendurl);
   }
   //-------------------------------------API not END--------------------------------------------------//
}
