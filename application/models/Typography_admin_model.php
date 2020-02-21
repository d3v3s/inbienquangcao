<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typography_admin_model extends CI_Model
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

    //add typography
    public function add_typography()
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

        return $this->db->insert('typography', $data);
    }

    //update typography
    public function update_typography($id)
    {
        $data = $this->set_data();

        $data["created_at"] = $this->input->post('date_published', true);

        $publish = $this->input->post('publish', true);
        if (!empty($publish) && $publish == 1) {
            $data["status"] = 1;
        }

        $this->db->where('id', $id);
        return $this->db->update('typography', $data);
    }

    //set typography data
    public function set_data()
    {
        $data = $this->input_values();

        if (empty($this->input->post('image_url', true))):
            //add typography image
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

    //check typography exists
    public function check_is_typography_exists($title)
    {
        $this->db->where('typography.title', $title);
        $query = $this->db->get('typography');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //get typography
    public function get_typography($id)
    {
        $this->db->where('typography.id', $id);
        $query = $this->db->get('typography');
        return $query->row();
    }

	//get typography
	public function get_typography_by_slug($slug)
	{
		$this->db->where('typography.slug', $slug);
		$query = $this->db->get('typography');
		return $query->row();
	}

    //get typography count
    public function get_typography_count()
    {
        $user_id = user()->id;
        if (user()->role == "author"):
            $this->db->where('typography.user_id', $user_id);
        endif;

        $this->db->where('typography.status', 1);
        $query = $this->db->get('typography');
        return $query->num_rows();
    }

    //filter by values
    public function filter_typography()
    {
        $data = array(
            'lang_id' => $this->input->get('lang_id', true),
            'author' => $this->input->get('author', true),
            'q' => $this->input->get('q', true),
        );

        $data['q'] = trim($data['q']);

        if (!empty($data['lang_id'])) {
            $this->db->where('typography.lang_id', $data['lang_id']);
        }
        if (!empty($data['q'])) {
            $this->db->like('typography.title', $data['q']);
        }
    }

    //get paginated typography
    public function get_paginated_typography($per_page, $offset, $list)
    {
        $this->filter_typography();
        $this->db->where('typography.status', 1);
        $this->db->order_by('typography.created_at', 'DESC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get('typography');
        return $query->result();
    }

	//get paginated typography
	public function get_typography_by_type($per_page, $offset, $list)
	{
		$this->filter_typography();
		$this->db->where('typography.status', 1);
		$this->db->where('typography.typography_type', 1);
		$this->db->order_by('typography.created_at', 'DESC');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('typography');
		return $query->result();
	}

	//get paginated typography
	public function get_typography_recent($per_page, $offset, $list)
	{
		$this->filter_typography();
		$this->db->where('typography.status', 1);
		$this->db->order_by('typography.created_at', 'DESC');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('typography');
		return $query->result();
	}

    //get paginated typography count
    public function get_paginated_typography_count($list)
    {
        $this->filter_typography();
        $this->db->where('typography.status', 1);
        $query = $this->db->get('typography');
        return $query->num_rows();
    }

    //delete typography
    public function delete_typography($id)
    {
        $typography = $this->get_typography($id);

        if (!empty($typography)):
            $this->db->where('id', $id);
            return $this->db->delete('typography');
        else:
            return false;
        endif;
    }

    //delete multi typography
    public function delete_multi_typography($typography_ids)
    {
        if (!empty($typography_ids)) {
            foreach ($typography_ids as $id) {
                $typography = $this->get_typography($id);

                if (!empty($typography)) {
                    $this->db->where('id', $id);
                    $this->db->delete('typography');
                }
            }
        }

    }
}
