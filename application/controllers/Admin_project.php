<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_project extends Admin_Core_Controller
{

    public function __construct()
    {
        parent::__construct();

        //check auth
        if (!is_admin() && !is_author()) {
            redirect('login');
        }
    }


    /**
     * Add Project
     */
    public function add_project()
    {
        $data['title'] = trans("add_project");
        $data['top_categories'] = $this->category_model->get_categories();

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/project/add_project', $data);
        $this->load->view('admin/includes/_footer');
    }

    /**
     * Projects
     */
    public function projects()
    {
        $data['title'] = trans('projects');
        $data['authors'] = $this->auth_model->get_authors();
        $data['form_action'] = "admin_project/projects";
        $data['list_type'] = "projects";
        //get paginated projects
        $pagination = $this->paginate(base_url() . 'admin_project/projects', $this->project_admin_model->get_paginated_projects_count('projects'));
        $data['projects'] = $this->project_admin_model->get_paginated_projects($pagination['per_page'], $pagination['offset'], 'projects');

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/project/projects', $data);
        $this->load->view('admin/includes/_footer');
    }

    /**
     * Update Project
     */
    public function update_project($id)
    {
        $data['title'] = trans("update_project");

        //get project
        $data['project'] = $this->project_admin_model->get_project($id);

        if (empty($data['project'])) {
            redirect($this->agent->referrer());
        }

        //check if author
        if (is_author()) {
            //check owner
            if ($data['project']->user_id != user()->id):
                redirect("admin");
            endif;
        }

        //combine project tags
        $tags = "";
        $count = 0;
        $tags_array = $this->tag_model->get_project_tags($id);
        foreach ($tags_array as $item) {
            if ($count > 0) {
                $tags .= ",";
            }
            $tags .= $item->tag;
            $count++;
        }

        $data['tags'] = $tags;
        $data['project_images'] = $this->project_file_model->get_project_additional_images($id);
        $data['categories'] = $this->category_model->get_categories_by_lang($data['project']->lang_id);
        $data['subcategories'] = $this->category_model->get_subcategories_by_parent_id($data['project']->category_id);

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/project/update_project', $data);
        $this->load->view('admin/includes/_footer');
    }

    /**
     * Delete Selected Projects
     */
    public function delete_selected_projects()
    {
        $project_ids = $this->input->post('project_ids', true);
//		$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//		header('Content-Type: application/json');
//		echo json_encode( $project_ids );
        $this->project_admin_model->delete_multi_projects($project_ids);
    }


    public function set_pagination_per_page($count)
    {
        $_SESSION['pagination_per_page'] = $count;
        redirect($this->agent->referrer());
    }
}
