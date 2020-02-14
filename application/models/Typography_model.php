<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Typography_model extends CI_Model
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
            'typography_order' => $this->input->post('typography_order', true),
        );
        return $data;
    }

    //add typography
    public function add_typography()
    {
        $data = $this->input_values();

        if (empty($data["slug"])) {
            //slug for title
            $data["slug"] = str_slug($data["name"]);
        }

        return $this->db->insert('typography', $data);
    }

    //update slug
    public function update_slug($id)
    {
        $typography = $this->get_typography($id);

        if (empty($typography->slug) || $typography->slug == "-") {
            $data = array(
                'slug' => $typography->id
            );
            $this->db->where('id', $id);
            $this->db->update('typography', $data);
        } else {
            if ($this->check_is_slug_unique($typography->slug, $id) == true) {
                $data = array(
                    'slug' => $typography->slug . "-" . $typography->id
                );

                $this->db->where('id', $id);
                $this->db->update('typography', $data);
            }
        }
    }

    //check slug
    public function check_is_slug_unique($slug, $id)
    {
        $this->db->where('typography.slug', $slug);
        $this->db->where('typography.id !=', $id);
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
        $this->db->where('id', $id);
        $query = $this->db->get('typography');
        return $query->row();
    }

    //get typography by slug
    public function get_typography_by_slug($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('typography');
        return $query->row();
    }

    //check typography slug
    public function check_typography_slug($slug, $id)
    {
        $this->db->where('slug', $slug);
        $this->db->where('id !=', $id);
        $query = $this->db->get('typography');
        return $query->row();
    }

    //get all top typography
    public function get_all_typography()
    {
        $this->db->where('parent_id', 0);
        $this->db->order_by('typography_order');
        $query = $this->db->get('typography');
        return $query->result();
    }

    //get sitemap typography
    public function get_sitemap_typography()
    {
        $this->db->where('parent_id', 0);
        $this->db->order_by('typography_order');
        $query = $this->db->get('typography');
        return $query->result();
    }

    //get top typography
    public function get_typography1()
    {
        $this->db->where('typography.lang_id', $this->selected_lang->id);
        $this->db->where('parent_id', 0);
        $this->db->order_by('typography_order');
        $query = $this->db->get('typography');
        return $query->result();
    }

    //get top typography
    public function get_typography_by_lang($lang_id)
    {
        $this->db->where('typography.lang_id', $lang_id);
        $this->db->where('parent_id', 0);
        $this->db->order_by('typography_order');
        $query = $this->db->get('typography');
        return $query->result();
    }

    //get subtypography
    public function get_subtypography()
    {
        $this->db->where('typography.lang_id', $this->selected_lang->id);
        $this->db->where('parent_id !=', 0);
        $query = $this->db->get('typography');
        return $query->result();
    }

    //get all subtypography
    public function get_all_subtypography()
    {
        $this->db->where('parent_id !=', 0);
        $query = $this->db->get('typography');
        return $query->result();
    }

    //get subtypography by id
    public function get_subtypography_by_parent_id($parent_id)
    {
        $this->db->where('show_on_menu', 1);
        $this->db->where('parent_id', $parent_id);
        $query = $this->db->get('typography');
        return $query->result();
    }

    //get typography count
    public function get_typography_count()
    {
        $query = $this->db->get('typography');
        return $query->num_rows();
    }

    //update typography
    public function update_typography($id)
    {
        $data = $this->input_values();

        //slug for title
        if (empty($data["slug"])) {
            $data["slug"] = str_slug($data["name"]);
        }

        $this->db->where('id', $id);
        return $this->db->update('typography', $data);
    }

    //delete typography
    public function delete_typography($id)
    {
        $typography = $this->get_typography($id);

        if (!empty($typography)) {
            $this->db->where('id', $id);
            return $this->db->delete('typography');
        } else {
            return false;
        }
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

	//get typography recent
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
}
