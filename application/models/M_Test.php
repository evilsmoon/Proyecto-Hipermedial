<?php


defined('BASEPATH') or exit('No direct script access allowed');

class M_Test extends CI_Model
{

    function insertFile(
        $data
    ) {


        $insert_data['id_user']  = $data['id_user'];
        $insert_data['title']    = $data['title'];
        $insert_data['desc']     = $data['desc'];
        $insert_data['file']     = $data['file'];



        $queryInsertFIle = $this->db->insert('images_prueba', $insert_data);
    }
}

/* End of file M_Test.php */
