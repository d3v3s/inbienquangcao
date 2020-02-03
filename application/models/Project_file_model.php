<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_file_model extends CI_Model
{
    //add project additional images
    public function add_project_additional_images($project_id)
    {
        $image_ids = $this->input->post('additional_post_image_id', true);

        if (!empty($image_ids)) {
            foreach ($image_ids as $image_id) {
                $image = $this->file_model->get_image($image_id);

                if (!empty($image)) {
                    $item = array(
                        'project_id' => $project_id,
                        'image_path' => $image->image_big,
                    );

                    if (!empty($item["image_path"])) {
                        $this->db->insert('project_images', $item);
                    }
                }
            }
        }

        return $image_ids;
    }

    //delete additional image
    public function delete_project_additional_image($file_id)
    {
        $image = $this->get_project_additional_image($file_id);

        if (!empty($image)) {
            $this->db->where('id', $file_id);
            $this->db->delete('project_images');
        }
    }

    //delete additional images
    public function delete_project_additional_images($project_id)
    {
        $images = $this->get_project_additional_images($project_id);

        if (!empty($images)):
            foreach ($images as $image) {
                $this->db->where('id', $image->id);
                $this->db->delete('project_images');
            }
        endif;
    }

    //get project additional images
    public function get_project_additional_images($project_id)
    {
        $this->db->where('project_id', $project_id);
        $query = $this->db->get('project_images');
        return $query->result();
    }

    //get project additional image
    public function get_project_additional_image($file_id)
    {
        $this->db->where('id', $file_id);
        $query = $this->db->get('project_images');
        return $query->row();
    }

    //get project additional image count
    public function get_project_additional_image_count($project_id)
    {
        $this->db->where('project_id', $project_id);
        $query = $this->db->get('project_images');
        return $query->num_rows();
    }


    //delete project main image
    public function delete_project_main_image($project_id)
    {
        $project = $this->project_admin_model->get_project($project_id);

        if (!empty($project)) {
            $data = array(
                'image_big' => "",
                'image_slider' => "",
                'image_mid' => "",
                'image_small' => "",
            );

            $this->db->where('id', $project_id);
            $this->db->update('projects', $data);
        }
    }

}
