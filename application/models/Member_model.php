<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model
{
    //input values
    public function input_values()
    {
        $data = array(
            'name' => $this->input->post('name', true),
            'avatar' => $this->input->post('slug', true),
            'position' => $this->input->post('description', true),
            'description' => $this->input->post('keywords', true),
        );
        return $data;
    }

    //add member
    public function add_member()
    {
        $data = $this->input_values();

        if (empty($data["slug"])) {
            //slug for title
            $data["slug"] = str_slug($data["name"]);
        }

        return $this->db->insert('members', $data);
    }

    //update slug
    public function update_slug($id)
    {
        $member = $this->get_member($id);

        if (empty($member->slug) || $member->slug == "-") {
            $data = array(
                'slug' => $member->id
            );
            $this->db->where('id', $id);
            $this->db->update('members', $data);
        } else {
            if ($this->check_is_slug_unique($member->slug, $id) == true) {
                $data = array(
                    'slug' => $member->slug . "-" . $member->id
                );

                $this->db->where('id', $id);
                $this->db->update('members', $data);
            }
        }
    }

    //check slug
    public function check_is_slug_unique($slug, $id)
    {
        $this->db->where('members.slug', $slug);
        $this->db->where('members.id !=', $id);
        $query = $this->db->get('members');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }


    //get member
    public function get_member($id)
    {
        $this->db->where('id', $id);
        $query = $this->db->get('members');
        return $query->row();
    }

    //get member by slug
    public function get_member_by_slug($slug)
    {
        $this->db->where('slug', $slug);
        $query = $this->db->get('members');
        return $query->row();
    }

    //check member slug
    public function check_member_slug($slug, $id)
    {
        $this->db->where('slug', $slug);
        $this->db->where('id !=', $id);
        $query = $this->db->get('members');
        return $query->row();
    }

    //get all top members
    public function get_all_members()
    {
        $this->db->where('parent_id', 0);
        $this->db->order_by('member_order');
        $query = $this->db->get('members');
        return $query->result();
    }

    //get sitemap members
    public function get_sitemap_members()
    {
        $this->db->where('parent_id', 0);
        $this->db->order_by('member_order');
        $query = $this->db->get('members');
        return $query->result();
    }

    //get top members
    public function get_members()
    {
        $this->db->where('members.lang_id', $this->selected_lang->id);
        $this->db->where('parent_id', 0);
        $this->db->order_by('member_order');
        $query = $this->db->get('members');
        return $query->result();
    }

    //get top members
    public function get_members_by_lang($lang_id)
    {
        $this->db->where('members.lang_id', $lang_id);
        $this->db->where('parent_id', 0);
        $this->db->order_by('member_order');
        $query = $this->db->get('members');
        return $query->result();
    }

    //get submembers
    public function get_submembers()
    {
        $this->db->where('members.lang_id', $this->selected_lang->id);
        $this->db->where('parent_id !=', 0);
        $query = $this->db->get('members');
        return $query->result();
    }

    //get all submembers
    public function get_all_submembers()
    {
        $this->db->where('parent_id !=', 0);
        $query = $this->db->get('members');
        return $query->result();
    }

    //get submembers by id
    public function get_submembers_by_parent_id($parent_id)
    {
        $this->db->where('show_on_menu', 1);
        $this->db->where('parent_id', $parent_id);
        $query = $this->db->get('members');
        return $query->result();
    }

    //get member count
    public function get_member_count()
    {
        $query = $this->db->get('members');
        return $query->num_rows();
    }

    //update member
    public function update_member($id)
    {
        $data = $this->input_values();

        //slug for title
        if (empty($data["slug"])) {
            $data["slug"] = str_slug($data["name"]);
        }

        $this->db->where('id', $id);
        return $this->db->update('members', $data);
    }

    //delete member
    public function delete_member($id)
    {
        $member = $this->get_member($id);

        if (!empty($member)) {
            $this->db->where('id', $id);
            return $this->db->delete('members');
        } else {
            return false;
        }
    }

	//filter by values
	public function filter_members()
	{
		$data = array(
			'lang_id' => $this->input->get('lang_id', true),
			'author' => $this->input->get('author', true),
			'q' => $this->input->get('q', true),
		);

		$data['q'] = trim($data['q']);

		if (!empty($data['lang_id'])) {
			$this->db->where('members.lang_id', $data['lang_id']);
		}
		if (!empty($data['q'])) {
			$this->db->like('members.title', $data['q']);
		}
	}

	//get paginated members
	public function get_paginated_members($per_page, $offset, $list)
	{
		$this->filter_members();
		$this->db->where('members.status', 1);
		$this->db->order_by('members.created_at', 'DESC');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('members');
		return $query->result();
	}

	//get members recent
	public function get_members_recent($per_page, $offset, $list)
	{
		$this->filter_members();
		$this->db->where('members.status', 1);
		$this->db->order_by('members.created_at', 'DESC');
		$this->db->limit($per_page, $offset);
		$query = $this->db->get('members');
		return $query->result();
	}

	//get paginated members count
	public function get_paginated_members_count($list)
	{
		$this->filter_members();
		$this->db->where('members.status', 1);
		$query = $this->db->get('members');
		return $query->num_rows();
	}
}
