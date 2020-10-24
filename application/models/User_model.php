<?php

defined('BASEPATH') or exit('No direct script access allowed');

class User_model extends CI_Model
{
    public function getAlluser()
    {
        $query = "SELECT `user`.*, `user_role`.`role`
                    FROM `user` JOIN `user_role`
                    ON `user`.`role_id` = `user_role`.`id`
                    AND `user`.`id` != 3
        ";
        return $this->db->query($query)->result_array();
    }

    public function getUserbyId($id)
    {
        return $this->db->get_where('user', ['id' => $id])->row_array();
    }

    public function getAllRole()
    {
        return $this->db->get('user_role')->result_array();
    }

    public function update_user($id)
    {
        $data = [
            'name' =>   htmlspecialchars($this->input->post('name', true)),
            'email' =>  htmlspecialchars($this->input->post('email', true)),
            'password' => $this->input->post('password', true),
            'role_id' => $this->input->post('role_id', true),
            'is_active' => $this->input->post('is_active', true),
        ];

        $this->db->set($data);
        $this->db->where('id', $id);
        $this->db->update('user');

        $this->session->set_flashdata(
            'message',
            '<div class="alert alert-success" role="alert">
                Update User Success!
            </div>'
        );
    }
}
