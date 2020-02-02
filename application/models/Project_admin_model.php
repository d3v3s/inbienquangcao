<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Project_admin_model extends CI_Model
{

    //input values
    public function input_values()
    {
        $data = array(
            'lang_id' => $this->input->project('lang_id', true),
            'title' => $this->input->project('title', true),
            'title_slug' => $this->input->project('title_slug', true),
            'summary' => $this->input->project('summary', true),
            'keywords' => $this->input->project('keywords', true),
            'category_id' => $this->input->project('category_id', true),
            'subcategory_id' => $this->input->project('subcategory_id', true),
            'content' => $this->input->project('content', false),
            'optional_url' => $this->input->project('optional_url', true),
            'need_auth' => $this->input->project('need_auth', true),
            'is_slider' => $this->input->project('is_slider', true),
            'is_picked' => $this->input->project('is_picked', true),
            'visibility' => $this->input->project('visibility', true),
        );
        return $data;
    }

    //add project
    public function add_project()
    {
        $data = $this->set_data();

        $date_published = $this->input->project('date_published', true);
        if (!empty($date_published)) {
            $data["created_at"] = $date_published;
        }

        $data['user_id'] = user()->id;
        $data['status'] = $this->input->project('status', true);

        return $this->db->insert('projects', $data);
    }

    //update project
    public function update_project($id)
    {
        $data = $this->set_data();

        $data["created_at"] = $this->input->project('date_published', true);

        $publish = $this->input->project('publish', true);
        if (!empty($publish) && $publish == 1) {
            $data["status"] = 1;
        }

        //if author set visibility
        if (is_author()) {
            $data['visibility'] = 0;
        }

        $this->db->where('id', $id);
        return $this->db->update('projects', $data);
    }

    //set project data
    public function set_data()
    {
        $data = $this->input_values();

        if (!isset($data['is_slider'])) {
            $data['is_slider'] = 0;
        }
        if (!isset($data['is_picked'])) {
            $data['is_picked'] = 0;
        }
        if (!isset($data['need_auth'])) {
            $data['need_auth'] = 0;
        }
        if (empty($data["title_slug"])) {
            //slug for title
            $data["title_slug"] = str_slug(trim($data["title"]));
        }
        if (empty($this->input->project('image_url', true))):
            //add project image
            $image = $this->file_model->get_image($this->input->project('project_image_id', true));

            if (!empty($image)) {
                $data["image_big"] = $image->image_big;
                $data["image_mid"] = $image->image_mid;
                $data["image_small"] = $image->image_small;
                $data["image_slider"] = $image->image_slider;
            }
        endif;

        return $data;

    }

    //check project exists
    public function check_is_project_exists($title)
    {
        $this->db->where('projects.title', $title);
        $query = $this->db->get('projects');
        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }

    //get project
    public function get_project($id)
    {
        $this->db->where('projects.id', $id);
        $query = $this->db->get('projects');
        return $query->row();
    }

    //get projects count
    public function get_projects_count()
    {
        $user_id = user()->id;
        if (user()->role == "author"):
            $this->db->where('projects.user_id', $user_id);
        endif;

        $this->db->where('projects.visibility', 1);
        $this->db->where('projects.status', 1);
        $query = $this->db->get('projects');
        return $query->num_rows();
    }

    //filter by values
    public function filter_projects()
    {
        $data = array(
            'lang_id' => $this->input->get('lang_id', true),
            'author' => $this->input->get('author', true),
            'category' => $this->input->get('category', true),
            'subcategory' => $this->input->get('subcategory', true),
            'q' => $this->input->get('q', true),
        );

        $data['q'] = trim($data['q']);
        $data['user_id'] = "";

        //check if author
        if (user()->role == "author"):
            $data['user_id'] = user()->id;
        else:
            if (!empty($data['author'])) {
                $data['user_id'] = $data['author'];
            }
        endif;

        if (!empty($data['lang_id'])) {
            $this->db->where('projects.lang_id', $data['lang_id']);
        }
        if (!empty($data['category'])) {
            $this->db->where('projects.category_id', $data['category']);
        }
        if (!empty($data['subcategory'])) {
            $this->db->where('projects.subcategory_id', $data['subcategory']);
        }
        if (!empty($data['q'])) {
            $this->db->like('projects.title', $data['q']);
        }
        if (!empty($data['user_id'])) {
            $this->db->where('projects.user_id', $data['user_id']);
        }
    }

    //filter by list
    public function filter_projects_list($list)
    {
        if (!empty($list)) {
            if ($list == "slider_projects") {
                $this->db->where('projects.is_slider', 1);
            }
            if ($list == "our_picks") {
                $this->db->where('projects.is_picked', 1);
            }
        }
    }

    //get paginated projects
    public function get_paginated_projects($per_page, $offset, $list)
    {
        $this->filter_projects();
        $this->filter_projects_list($list);
        $this->db->where('projects.visibility', 1);
        $this->db->where('projects.status', 1);
        $this->db->order_by('projects.created_at', 'DESC');
        $this->db->limit($per_page, $offset);
        $query = $this->db->get('projects');
        return $query->result();
    }

    //get paginated projects count
    public function get_paginated_projects_count($list)
    {
        $this->filter_projects();
        $this->filter_projects_list($list);
        $this->db->where('projects.visibility', 1);
        $this->db->where('projects.status', 1);
        $query = $this->db->get('projects');
        return $query->num_rows();
    }

    //add or remove project from picked
    public function project_add_remove_picked($id)
    {
        //get project
        $project = $this->get_project($id);

        if (!empty($project)) {
            $result = "";
            if ($project->is_picked == 1) {
                //remove from picked
                $data = array(
                    'is_picked' => 0,
                );
                $result = "removed";
            } else {
                //add to picked
                $data = array(
                    'is_picked' => 1,
                );
                $result = "added";
            }

            $this->db->where('id', $id);
            $this->db->update('projects', $data);
            return $result;
        }
    }

    //delete project
    public function delete_project($id)
    {
        $project = $this->get_project($id);

        if (!empty($project)):
            $this->db->where('id', $id);
            return $this->db->delete('projects');
        else:
            return false;
        endif;
    }

    //delete multi project
    public function delete_multi_projects($project_ids)
    {
        if (!empty($project_ids)) {
            foreach ($project_ids as $id) {
                $project = $this->get_project($id);

                if (!empty($project)) {
                    $this->db->where('id', $id);
                    $this->db->delete('projects');
                }
            }
        }

    }
}