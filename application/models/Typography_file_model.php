<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typography_file_model extends CI_Model
{
    //add typography additional images
    public function add_typography_additional_images($id)
    {
        $image_ids = $this->input->post('additional_post_image_id', true);

        if (!empty($image_ids)) {
            foreach ($image_ids as $image_id) {
                $image = $this->file_model->get_image($image_id);

                if (!empty($image)) {
                    $item = array(
                        'id' => $id,
                        'image_path' => $image->image_big,
                    );

                    if (!empty($item["image_path"])) {
                        $this->db->insert('typography_images', $item);
                    }
                }
            }
        }

        return $image_ids;
    }

    //delete additional image
    public function delete_typography_additional_image($file_id)
    {
        $image = $this->get_typography_additional_image($file_id);

        if (!empty($image)) {
            $this->db->where('id', $file_id);
            $this->db->delete('typography_images');
        }
    }

    //delete additional images
    public function delete_typography_additional_images($typography_id)
    {
        $images = $this->get_typography_additional_images($typography_id);

        if (!empty($images)):
            foreach ($images as $image) {
                $this->db->where('id', $image->id);
                $this->db->delete('typography_images');
            }
        endif;
    }

    //get typography additional images
    public function get_typography_additional_images($typography_id)
    {
        $this->db->where('typography_id', $typography_id);
        $query = $this->db->get('typography_images');
        return $query->result();
    }

    //get typography additional image
    public function get_typography_additional_image($file_id)
    {
        $this->db->where('id', $file_id);
        $query = $this->db->get('typography_images');
        return $query->row();
    }

    //get typography additional image count
    public function get_typography_additional_image_count($typography_id)
    {
        $this->db->where('typography_id', $typography_id);
        $query = $this->db->get('typography_images');
        return $query->num_rows();
    }


    //delete typography main image
    public function delete_typography_main_image($typography_id)
    {
        $typography = $this->typography_admin_model->get_typography($typography_id);

        if (!empty($typography)) {
            $data = array(
                'image_big' => "",
                'image_slider' => "",
                'image_mid' => "",
                'image_small' => "",
            );

            $this->db->where('id', $typography_id);
            $this->db->update('typographys', $data);
        }
    }

}
