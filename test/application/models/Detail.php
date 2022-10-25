
<?php
class Detail extends CI_Model {

public $ass_id;
public $user_code;
public $detail_status;



public function __construct()
{
    $this->db = $this->load->database('', true);
    $this->db_name = $this->db->database;
  //  echo "Hello Database";
}


public function insert_data_detail()
{
   // echo "Insert" . " " . $this->ass_name;
   $sql = "INSERT INTO detail(ass_id, user_code, detail_status)  VALUES (?, ?, ?)";
   $query = $this->db->query($sql, array($this->ass_id, $this->user_code, $this->detail_status));
   echo "OK";


}


}