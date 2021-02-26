<?php
header ("content-type: text/xml");
$xml='<?xml version="1.0" encoding="UTF-8"';
//print_r($ckdetails);
print "<markers>";
$sl=0;
foreach($stdetails as $key)
{
  $sl++;
  $lat=$key->latitude;
  $long=$key->longitude;
  $station_name=$key->station_name;
  $station_name=str_replace("&"," and ",$station_name);
  $address=$key->unique_code;
  $sid=$key->sid;
  $gpic =getAfield("image_path","station_gallery","where station_id=$sid") ;
  if(!$gpic)
  {
  $gpic="assets/logo.png"	;
  }
  $icons=base_url()."assets/icons/ck2.png";
  $gpic=base_url().$gpic;
  print '<marker id="'.$sl.'" name="'.$station_name.'" ckimage="'.$gpic.'" address="'.$address.'" lat="'.$lat.'" lng="'.$long.'" type="restaurant" icons="'.$icons.'"/>';

}
print "</markers>";
?>
