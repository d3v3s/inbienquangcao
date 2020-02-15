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

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/project/add_project', $data);
        $this->load->view('admin/includes/_footer');
    }

	/**
	 * Add project post
	 */
	public function add_project_post()
	{
		//validate inputs
		$this->form_validation->set_rules('title', trans("title"), 'required|xss_clean|max_length[500]');
		$this->form_validation->set_rules('summary', trans("summary"), 'xss_clean|max_length[5000]');
		$this->form_validation->set_rules('optional_url', trans("optional_url"), 'xss_clean|max_length[1000]');

		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('form_data', $this->project_admin_model->input_values());
			redirect($this->agent->referrer());
		} else {
			//if project added
			if ($this->project_admin_model->add_project()) {
				//last id
				$last_id = $this->db->insert_id();

				$this->project_file_model->add_project_additional_images($last_id);

				$this->session->set_flashdata('success', trans("project") . " " . trans("msg_suc_added"));

				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('form_data', $this->project_admin_model->input_values());
				$this->session->set_flashdata('error', trans("msg_error"));
				redirect($this->agent->referrer());
			}
		}
	}

    /**
     * Projects
     */
    public function projects()
    {
        $data['title'] = trans('projects');

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

        $data['project_images'] = $this->project_file_model->get_project_additional_images($id);

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/project/update_project', $data);
        $this->load->view('admin/includes/_footer');
    }

	/**
	 * Update project post
	 */
	public function update_project_post()
	{
		//validate inputs
		$this->form_validation->set_rules('title', trans("title"), 'required|xss_clean|max_length[500]');
		$this->form_validation->set_rules('summary', trans("summary"), 'xss_clean|max_length[5000]');

		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('form_data', $this->project_admin_model->input_values());
			redirect($this->agent->referrer());
		} else {
			//project id
			$project_id = $this->input->post('id', true);

			if ($this->project_admin_model->update_project($project_id)) {

				$this->project_file_model->add_project_additional_images($project_id);

				$this->session->set_flashdata('success', trans("project") . " " . trans("msg_suc_updated"));

				$referrer = $this->input->post("referrer");
				if (!empty($referrer)) {
					redirect($referrer);
				} else {
					redirect('admin_project/projects');
				}

			} else {
				$this->session->set_flashdata('form_data', $this->project_admin_model->input_values());
				$this->session->set_flashdata('error', trans("msg_error"));
				redirect($this->agent->referrer());
			}
		}
	}

	/**
	 * project Options Post
	 */
	public function project_options_post()
	{
		$option = $this->input->post('option', true);
		$id = $this->input->post('id', true);

		$data["project"] = $this->project_admin_model->get_project($id);

		//check if exists
		if (empty($data['project'])) {
			redirect($this->agent->referrer());
		}

		//if option publish
		if ($option == 'publish') {

			if ($this->post_admin_model->publish_post($id)) {
				$this->session->set_flashdata('success', trans("msg_published"));
			} else {
				$this->session->set_flashdata('error', trans("msg_error"));
			}

			redirect($this->agent->referrer());
		}

		//if option delete
		if ($option == 'delete') {

			if ($this->project_admin_model->delete_project($id)) {
				$this->session->set_flashdata('success', trans("projects") . " " . trans("msg_suc_deleted"));
				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('error', trans("msg_error"));
				redirect($this->agent->referrer());
			}

		}
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
