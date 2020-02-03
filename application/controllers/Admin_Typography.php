<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_typography extends Admin_Core_Controller
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
     * Add Typography
     */
    public function add_typography()
    {
        $data['title'] = trans("add_typography");

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/typography/add_typography', $data);
        $this->load->view('admin/includes/_footer');
    }

	/**
	 * Add typography post
	 */
	public function add_typography_post()
	{
		//validate inputs
		$this->form_validation->set_rules('title', trans("title"), 'required|xss_clean|max_length[500]');
		$this->form_validation->set_rules('summary', trans("summary"), 'xss_clean|max_length[5000]');
		$this->form_validation->set_rules('optional_url', trans("optional_url"), 'xss_clean|max_length[1000]');

		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('form_data', $this->typography_admin_model->input_values());
			redirect($this->agent->referrer());
		} else {
			//if typography added
			if ($this->typography_admin_model->add_typography()) {
				//last id
				$last_id = $this->db->insert_id();

				$this->session->set_flashdata('success', trans("typography") . " " . trans("msg_suc_added"));

				redirect($this->agent->referrer());
			} else {
				$this->session->set_flashdata('form_data', $this->typography_admin_model->input_values());
				$this->session->set_flashdata('error', trans("msg_error"));
				redirect($this->agent->referrer());
			}
		}
	}

    /**
     * typographys
     */
    public function typographys()
    {
        $data['title'] = trans('typographys');
        $data['authors'] = $this->auth_model->get_authors();
        $data['form_action'] = "admin_typography/typographys";
        $data['list_type'] = "typographys";
        //get paginated typographys
        $pagination = $this->paginate(base_url() . 'admin_typography/typographys', $this->typography_admin_model->get_paginated_typographys_count('typographys'));
        $data['typographys'] = $this->typography_admin_model->get_paginated_typographys($pagination['per_page'], $pagination['offset'], 'typographys');

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/typography/typographys', $data);
        $this->load->view('admin/includes/_footer');
    }

    /**
     * Update typography
     */
    public function update_typography($id)
    {
        $data['title'] = trans("update_typography");

        //get typography
        $data['typography'] = $this->typography_admin_model->get_typography($id);

        if (empty($data['typography'])) {
            redirect($this->agent->referrer());
        }

        //check if author
        if (is_author()) {
            //check owner
            if ($data['typography']->user_id != user()->id):
                redirect("admin");
            endif;
        }

        $data['typography_images'] = $this->typography_file_model->get_typography_additional_images($id);

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/typography/update_typography', $data);
        $this->load->view('admin/includes/_footer');
    }

	/**
	 * Update typography post
	 */
	public function update_typography_post()
	{
		//validate inputs
		$this->form_validation->set_rules('title', trans("title"), 'required|xss_clean|max_length[500]');
		$this->form_validation->set_rules('summary', trans("summary"), 'xss_clean|max_length[5000]');

		if ($this->form_validation->run() === false) {
			$this->session->set_flashdata('errors', validation_errors());
			$this->session->set_flashdata('form_data', $this->typography_admin_model->input_values());
			redirect($this->agent->referrer());
		} else {
			//typography id
			$typography_id = $this->input->post('id', true);

			if ($this->typography_admin_model->update_typography($typography_id)) {

				$this->typography_file_model->add_typography_additional_images($typography_id);

				$this->session->set_flashdata('success', trans("typography") . " " . trans("msg_suc_updated"));

				$referrer = $this->input->post("referrer");
				if (!empty($referrer)) {
					redirect($referrer);
				} else {
					redirect('admin_typography/typographys');
				}

			} else {
				$this->session->set_flashdata('form_data', $this->typography_admin_model->input_values());
				$this->session->set_flashdata('error', trans("msg_error"));
				redirect($this->agent->referrer());
			}
		}
	}

	/**
     * Delete Selected typographys
     */
    public function delete_selected_typographys()
    {
        $typography_ids = $this->input->post('typography_ids', true);
//		$arr = array('a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5);
//		header('Content-Type: application/json');
//		echo json_encode( $typography_ids );
        $this->typography_admin_model->delete_multi_typographys($typography_ids);
    }


    public function set_pagination_per_page($count)
    {
        $_SESSION['pagination_per_page'] = $count;
        redirect($this->agent->referrer());
    }
}
