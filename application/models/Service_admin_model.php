<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_admin_model extends CI_Model
{

    //input values
    public function input_values()
    {
        $data = array(
            'lang_id' => $this->input->post('lang_id', true),
            'title' => $this->input->post('title', true),
            'summary' => $this->input->post('summary', true),
            'content' => $this->input->post('content', false),
        );
        return $data;
    }

    //add service
    public function add_service()
    {
        $data = $this->set_data();

        $date_published = $this->input->post('date_published', true);
        if (!empty($date_published)) {
            $data["created_at"] = $date_published;
        }

        if(empty($data["summary"])){
			$data["summary"] = $data["title"];
		}

        $data['user_id'] = user()->id;
        $data['status'] = $this->input->post('status', true);

        return $this->db->insert('services', $data);
    }

    //update service
    public function update_service($id)
    {
        $data = $this->set_data();

        $data["created_at"] = $this->input->post('date_published', true);

        $publish = $this->input->post('publish', true);
        if (!empty($publish) && $publish == 1) {
            $data["status"] = 1;
        }

        $this->db->where('id', $id);
        return $this->db->update('services', $data);
    }

    //set service data
    public function set_data()
    {
        $data = $this->input_values();

        if (empty($this->input->post('image_url', true))):
            //add service image
            $image = $this->file_model->get_image($this->input->post('post_image_id', true));

            if (!empty($image)) {
                $data["image_big"] = $image->image_big;
                $data["image_mid"] = $image->image_mid;
                $data["image_small"] = $image->image_small;
                $data["image_slider"] = $image->image_slider;
            }
        endif;

        return $data;

    }

    //check service exists
    public function check_is_service_exists($title)
    {
        $this->db->where('services.title', $title);
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
        $this->db->where('services.id', $id);
        $query = $this->db->get('services');
        return $query->row();
    }

	//get service
	public function get_service_by_slug($slug)
	{
		$this->db->where('services.slug', $slug);
		$query = $this->db->get('services');
		return $query->row();
	}

    //get services count
    public function get_services_count()
    {
        $user_id = user()->id;
        if (user()->role == "author"):
            $this->db->where('services.user_id', $user_id);
        endif;

        $this->db->where('services.status', 1);
        $query = $this->db->get('services');
        return $query->num_rows();
    }

    //filter by values
    public function filter_services()
    {
        $data = array(
            'lang_id' => $this->input->get('lang_id', true),
            'author' => $this->input->get('author', true),
            'q' => $this->input->get('q', true),
        );

        $data['q'] = trim($data['q']);

        if (!empty($data['lang_id'])) {
            $this->db->where('services.lang_id', $data['lang_id']);
        }
        if (!empty($data['q'])) {
            $this->db->like('services.title', $data['q']);
        }
    }

    //get paginated services
    public function get_paginated_services($per_page, $offset, $list)
    {
        $this->filter_services();
        $this->db->where('services.status', 1);
        $this->db->order_by('services.created_at', 'DESC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get('services');
        return $query->result();
    }

	//get paginated services
	public function get_services_by_type($per_page, $offset, $list)
	{
		$this->filter_services();
		$this->db->where('services.status', 1);
		$this->db->where('services.service_type', 1);
		$this->db->order_by('services.created_at', 'DESC');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('services');
		return $query->result();
	}

	//get paginated services
	public function get_services_recent($per_page, $offset, $list)
	{
		$this->filter_services();
		$this->db->where('services.status', 1);
		$this->db->order_by('services.created_at', 'DESC');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('services');
		return $query->result();
	}

    //get paginated services count
    public function get_paginated_services_count($list)
    {
        $this->filter_services();
        $this->db->where('services.status', 1);
        $query = $this->db->get('services');
        return $query->num_rows();
    }

    //delete service
    public function delete_service($id)
    {
        $service = $this->get_service($id);

        if (!empty($service)):
            $this->db->where('id', $id);
            return $this->db->delete('services');
        else:
            return false;
        endif;
    }

    //delete multi service
    public function delete_multi_services($service_ids)
    {
        if (!empty($service_ids)) {
            foreach ($service_ids as $id) {
                $service = $this->get_service($id);

                if (!empty($service)) {
                    $this->db->where('id', $id);
                    $this->db->delete('services');
                }
            }
        }

    }
}
