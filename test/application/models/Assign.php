
<?php
class Assign extends CI_Model
{

    public $ass_name;
    public $ass_detail;
    public $ass_timeout;


    public function __construct()
    {
        $this->db = $this->load->database('', true);
        $this->db_name = $this->db->database;
        //  echo "Hello Database";
    }


    public function insert_data_assign()
    {

        // echo "Insert" . " " . $this->ass_name;

        $sql = "INSERT INTO assignment(ass_name, ass_detail, ass_timeout)  VALUES (?, ?, ?)";
        $query = $this->db->query($sql, array($this->ass_name, $this->ass_detail, $this->ass_timeout));
    }


    //get by name 
    public function get_data_assign_by_name($ass_name)
    {
        $sql = "SELECT * from assignment WHERE ass_name = '$ass_name'";
        $query = $this->db->query($sql);
        return $query->row();
    }

     //get by name 
     public function get_data_assign()
     {
         $sql = "SELECT * from assignment";
         $query = $this->db->query($sql);
         return $query->result();
     }
}
