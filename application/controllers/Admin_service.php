<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_service extends Admin_Core_Controller
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
     * Add service
     */
    public function add_service()
    {
        $data['title'] = trans("add_service");

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/service/add_service', $data);
        $this->load->view('admin/includes/_footer');
    }

	/**
	 * Add service post
	 */
	public function add_service_post()
	{
		//validate inputs
		$this->form_validation->set_rules('title', trans("title"), 'required|xss_clean|max_length[500]');
		$this->form_validation->set_rules('summary', trans("summary"), 'xss_clean|max_length[5000]');
		$this->form_validation->set_rules('optional_url', trans("optional_url"), 'xss_clean|max_length[1000]');

		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('form_data', $this->service_admin_model->input_values());
			redirect($this->agent->referrer());
		} else {
			//if service added
			if ($this->service_admin_model->add_service()) {

				$this->session->set_flashdata('success', trans("service") . " " . trans("msg_suc_added"));

				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('form_data', $this->service_admin_model->input_values());
				$this->session->set_flashdata('error', trans("msg_error"));
				redirect($this->agent->referrer());
			}
		}
	}

    /**
     * services
     */
    public function services()
    {
        $data['title'] = trans('services');

        $data['form_action'] = "admin_service/services";
        $data['list_type'] = "services";
        //get paginated services
        $pagination = $this->paginate(base_url() . 'admin_service/services', $this->service_admin_model->get_paginated_services_count('services'));
        $data['services'] = $this->service_admin_model->get_paginated_services($pagination['per_page'], $pagination['offset'], 'services');

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/service/services', $data);
        $this->load->view('admin/includes/_footer');
    }

    /**
     * Update service
     */
    public function update_service($id)
    {
        $data['title'] = trans("update_service");

        //get service
        $data['service'] = $this->service_admin_model->get_service($id);

        if (empty($data['service'])) {
            redirect($this->agent->referrer());
        }

        //check if author
        if (is_author()) {
            //check owner
            if ($data['service']->user_id != user()->id):
                redirect("admin");
            endif;
        }

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/service/update_service', $data);
        $this->load->view('admin/includes/_footer');
    }

	/**
	 * Update service post
	 */
	public function update_service_post()
	{
		//validate inputs
		$this->form_validation->set_rules('title', trans("title"), 'required|xss_clean|max_length[500]');
		$this->form_validation->set_rules('summary', trans("summary"), 'xss_clean|max_length[5000]');

		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('form_data', $this->service_admin_model->input_values());
			redirect($this->agent->referrer());
		} else {
			//service id
			$service_id = $this->input->post('id', true);

			if ($this->service_admin_model->update_service($service_id)) {

				$this->session->set_flashdata('success', trans("service") . " " . trans("msg_suc_updated"));

				$referrer = $this->input->post("referrer");
				if (!empty($referrer)) {
					redirect($referrer);
				} else {
					redirect('admin_service/services');
				}

			} else {
				$this->session->set_flashdata('form_data', $this->service_admin_model->input_values());
				$this->session->set_flashdata('error', trans("msg_error"));
				redirect($this->agent->referrer());
			}
		}
	}

	/**
	 * service Options Post
	 */
	public function service_options_post()
	{
		$option = $this->input->post('option', true);
		$id = $this->input->post('id', true);

		$data["service"] = $this->service_admin_model->get_service($id);

		//check if exists
		if (empty($data['service'])) {
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

			if ($this->service_admin_model->delete_service($id)) {
				$this->session->set_flashdata('success', trans("services") . " " . trans("msg_suc_deleted"));
				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('error', trans("msg_error"));
				redirect($this->agent->referrer());
			}

		}
	}


	/**
     * Delete Selected services
     */
    public function delete_selected_services()
    {
        $service_ids = $this->input->post('service_ids', true);
//		$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//		header('Content-Type: application/json');
//		echo json_encode( $service_ids );
        $this->service_admin_model->delete_multi_services($service_ids);
    }


    public function set_pagination_per_page($count)
    {
        $_SESSION['pagination_per_page'] = $count;
        redirect($this->agent->referrer());
    }
}
