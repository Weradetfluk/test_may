<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Teacher extends CI_Controller
{


    /*
        function: index
        show assiangment

    */
    public function index()
    {
        $this->load->model("Assign", "ass"); // เรียก Model


        $result = array();
        $result["data_ass"] = $this->ass->get_data_assign();

        // ชื่อไฟล์ 
        $this->load->view('assign_list',  $result); // เรียกหน้า view
    }

    /*
        function: show_create_assign
        show create assiangment from

    */
    public function show_create_assign()
    {
        $this->load->view('create_assign'); // เรียกหน้า view
    }
      /*
        function: get_data_assign
        get data from

    */
    public function set_data_assign()
    {
    
    // set จาก view
    $assign_name = $this->input->post('assign_name');
    $assign_detail = $this->input->post('assign_detail');
    $nisit_list = $this->input->post('nisit_list');
    $date_end = $this->input->post('date_end');
    $arr_nisit = explode(" ", $nisit_list);

    // 1. ทำการ Insert ข้อมูล Assign
    ////////////// ***Load Model //////////////////
    $this->load->model("Assign", "ass"); // เรียก Model
    $this->ass->ass_name = $assign_name;
    $this->ass->ass_detail = $assign_detail;
    $this->ass->ass_timeout = $date_end;

    $this->ass->insert_data_assign(); //  ********** insert data

    // 2. Insert ข้อมูล Detail

    // ไม่มี ID
    $result = $this->ass->get_data_assign_by_name($assign_name); // เรียกข้อมูล Id จาก Assign ที่พึ่ง insert ไป

    $this->load->model("Detail", "det"); // เรียก Model Detail
    for($i = 0 ; $i < count($arr_nisit) ; $i++){
        $this->det->user_code = $arr_nisit[$i];
        $this->det->ass_id =  $result->ass_id;
        $this->det->detail_status = "ยังไม่ส่งงาน"; 
        $this->det->insert_data_detail(); //  ********** insert data
    }

    redirect("index.php/Teacher/index");

    }


}
