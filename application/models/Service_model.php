<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_model extends CI_Model
{
    //input values
    public function input_values()
    {
        $data = array(
            'lang_id' => $this->input->post('lang_id', true),
            'name' => $this->input->post('name', true),
            'slug' => $this->input->post('slug', true),
            'description' => $this->input->post('description', true),
            'keywords' => $this->input->post('keywords', true),
            'service_order' => $this->input->post('service_order', true),
        );
        return $data;
    }

    //add service
    public function add_service()
    {
        $data = $this->input_values();

        if (empty($data["slug"])) {
            //slug for title
            $data["slug"] = str_slug($data["name"]);
        }

        return $this->db->insert('services', $data);
    }

    //update slug
    public function update_slug($id)
    {
        $service = $this->get_service($id);

        if (empty($service->slug) || $service->slug == "-") {
            $data = array(
                'slug' => $service->id
            );
            $this->db->where('id', $id);
            $this->db->update('services', $data);
        } else {
            if ($this->check_is_slug_unique($service->slug, $id) == true) {
                $data = array(
                    'slug' => $service->slug . "-" . $service->id
                );

                $this->db->where('id', $id);
                $this->db->update('services', $data);
            }
        }
    }

    //check slug
    public function check_is_slug_unique($slug, $id)
    {
        $this->db->where('services.slug', $slug);
        $this->db->where('services.id !=', $id);
        $query = $this->db->get('services');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    //get service
    public function get_service($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('services');
        return $query->row();
    }

    //get service by slug
    public function get_service_by_slug($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('services');
        return $query->row();
    }

    //check service slug
    public function check_service_slug($slug, $id)
    {
        $this->db->where('slug', $slug);
        $this->db->where('id !=', $id);
        $query = $this->db->get('services');
        return $query->row();
    }

    //get all top services
    public function get_all_services()
    {
        $this->db->where('parent_id', 0);
        $this->db->order_by('service_order');
        $query = $this->db->get('services');
        return $query->result();
    }

    //get sitemap services
    public function get_sitemap_services()
    {
        $this->db->where('parent_id', 0);
        $this->db->order_by('service_order');
        $query = $this->db->get('services');
        return $query->result();
    }

    //get top services
    public function get_services()
    {
        $this->db->where('services.lang_id', $this->selected_lang->id);
        $this->db->where('parent_id', 0);
        $this->db->order_by('service_order');
        $query = $this->db->get('services');
        return $query->result();
    }

    //get top services
    public function get_services_by_lang($lang_id)
    {
        $this->db->where('services.lang_id', $lang_id);
        $this->db->where('parent_id', 0);
        $this->db->order_by('service_order');
        $query = $this->db->get('services');
        return $query->result();
    }

    //get subservices
    public function get_subservices()
    {
        $this->db->where('services.lang_id', $this->selected_lang->id);
        $this->db->where('parent_id !=', 0);
        $query = $this->db->get('services');
        return $query->result();
    }

    //get all subservices
    public function get_all_subservices()
    {
        $this->db->where('parent_id !=', 0);
        $query = $this->db->get('services');
        return $query->result();
    }

    //get subservices by id
    public function get_subservices_by_parent_id($parent_id)
    {
        $this->db->where('show_on_menu', 1);
        $this->db->where('parent_id', $parent_id);
        $query = $this->db->get('services');
        return $query->result();
    }

    //get service count
    public function get_service_count()
    {
        $query = $this->db->get('services');
        return $query->num_rows();
    }

    //update service
    public function update_service($id)
    {
        $data = $this->input_values();

        //slug for title
        if (empty($data["slug"])) {
            $data["slug"] = str_slug($data["name"]);
        }

        $this->db->where('id', $id);
        return $this->db->update('services', $data);
    }

    //delete service
    public function delete_service($id)
    {
        $service = $this->get_service($id);

        if (!empty($service)) {
            $this->db->where('id', $id);
            return $this->db->delete('services');
        } else {
            return false;
        }
    }

}
