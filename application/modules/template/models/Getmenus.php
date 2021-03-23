<?php
class Getmenus extends CI_Model
{
 function getmenuitems($data)
 { 
   $roleid=$data['roleid'];
   if($roleid==1)
    {
      $qry="SELECT * FROM menu_items  WHERE  display_status=1  ORDER BY  order_no ASC";
      $query = $this->db->query($qry);

      $json_response = array();
      foreach ($query->result() as $rs) 
      {
           $row_array = array();

           $row_array['menu']=$rs->menu;
           $row_array['micon']=$rs->micon;
           $row_array['links']=$rs->links;
           $row_array['mid']=$rs->mid;
           $row_array['colour']=$rs->colour;
           $row_array['labels']=$rs->labels;
           $mid=$rs->mid;
           $subflag=$rs->submenuflag;
           $row_array['submenuflag']=$rs->submenuflag;

          $row_array['submenu'] = array();
          $exr="SELECT * FROM submenus where  mainmenuid=$mid and display_status=1 order by order_no ASC";
           $query2 = $this->db->query($exr);
           foreach ($query2->result() as $row)
           {
             $row_array['submenu'][] = array(
                 'sid' => $row->sid,
                 'submenu' => $row->submenu,
                  'submenulink' => $row->submenulink,
                  'label'=>$row->label,

             );
           }
              array_push($json_response, $row_array);
      }
       return json_encode($json_response);
    }
    else
     {

      $qry="SELECT * FROM menu_items  WHERE  mid in(SELECT menu_id FROM rolemenus WHERE role_id=$roleid and menu_type=1) and display_status=1  ORDER BY  order_no ASC";
      $query = $this->db->query($qry);

      $json_response = array();
      foreach ($query->result() as $rs)
      {
           $row_array = array();

           $row_array['menu']=$rs->menu;
           $row_array['micon']=$rs->micon;
           $row_array['links']=$rs->links;
           $row_array['mid']=$rs->mid;
           $row_array['colour']=$rs->colour;
           $row_array['labels']=$rs->labels;
           $mid=$rs->mid;
           $subflag=$rs->submenuflag;
           $row_array['submenuflag']=$rs->submenuflag;

          $row_array['submenu'] = array();
          $exr="SELECT * FROM submenus where sid in (select menu_id 	from rolemenus where role_id=$roleid and menu_type=2) and mainmenuid=$mid and display_status=1 order by order_no ASC";
           $query2 = $this->db->query($exr);
           foreach ($query2->result() as $row)
           {
             $row_array['submenu'][] = array(
                 'sid' => $row->sid,
                 'submenu' => $row->submenu,
                  'submenulink' => $row->submenulink,
                  'label'=>$row->label,

             );
           }
              array_push($json_response, $row_array);
      }
       return json_encode($json_response);
     }
  }



  //neethu
function getCompanyPermission1($uid,$user_type) {
        $this->db->select('*');
       // $this->db->where('supplierid',$uid);
        $this->db->where('user_type',$user_type);
        return $this->db->get('access_permission')->row(); 
    }
 function getCompanyPermission2($uid,$user_type) {
        $this->db->select('*');
        $this->db->where('supplierid',$uid);
        $this->db->where('user_type',$user_type);
        return $this->db->get('access_permission')->row();  
    }
    function notifications($uid,$user_type) {
      // $this->db->trans_start();
      $this->db->select('*');
      $this->db->where('user_id',$uid);
      $this->db->where('user_type',$user_type);
      $this->db->where('status','1');
      return $this->db->get('notifications')->num_rows();  
  }
  function notificationsview($uid,$user_type) {
    // $this->db->trans_start();
    $this->db->select('*');
    $this->db->where('user_id',$uid);
    $this->db->where('user_type',$user_type);
    // $this->db->where('status','1');
    // $this->db->where('status','1');
    return $this->db->get('notifications')->row(); 
}


//neethu end

}

 ?>
