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
     * services
     */
    public function services()
    {
        prevent_author();

        $data['title'] = trans("services");
        $data['services'] = $this->service_model->get_all_services();
        $data['lang_search_column'] = 2;

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/service/services', $data);
        $this->load->view('admin/includes/_footer');
    }


    /**
     * Add service Post
     */
    public function add_service_post()
    {
        prevent_author();
        //validate inputs
        $this->form_validation->set_rules('name', trans("service_name"), 'required|xss_clean|max_length[200]');
        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('errors_form', validation_errors());
            $this->session->set_flashdata('form_data', $this->service_model->input_values());
            redirect($this->agent->referrer());
        } else {
            if ($this->service_model->add_service()) {
                //last id
                $last_id = $this->db->insert_id();
                //update slug
                $this->service_model->update_slug($last_id);
                $this->session->set_flashdata('success_form', trans("service") . " " . trans("msg_suc_added"));
                redirect($this->agent->referrer());
            } else {
                $this->session->set_flashdata('form_data', $this->service_model->input_values());
                $this->session->set_flashdata('error_form', trans("msg_error"));
                redirect($this->agent->referrer());
            }
        }
    }


    /**
     * Update service
     */
    public function update_service($id)
    {
        prevent_author();

        $data['title'] = trans("update_service");

        //get service
        $data['service'] = $this->service_model->get_service($id);

        if (empty($data['service'])) {
            redirect($this->agent->referrer());
        }

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/service/update_service', $data);
        $this->load->view('admin/includes/_footer');
    }


    /**
     * Update service Post
     */
    public function update_service_post()
    {
        prevent_author();

        //validate inputs
        $this->form_validation->set_rules('name', trans("service_name"), 'required|xss_clean|max_length[200]');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('errors', validation_errors());
            $this->session->set_flashdata('form_data', $this->service_model->input_values());
            redirect($this->agent->referrer());
        } else {
            //service id
            $id = $this->input->post('id', true);
            $redirect_url = $this->input->post('redirect_url', true);
            if ($this->service_model->update_service($id)) {

                //update slug
                $this->service_model->update_slug($id);
                $this->session->set_flashdata('success', trans("service") . " " . trans("msg_suc_updated"));

                if (!empty($redirect_url)) {
                    redirect($redirect_url);
                } else {
                    redirect('admin_service/services');
                }

            } else {
                $this->session->set_flashdata('form_data', $this->service_model->input_values());
                $this->session->set_flashdata('error', trans("msg_error"));
                redirect($this->agent->referrer());
            }
        }
    }


    /**
     * Delete service Post
     */
    public function delete_service_post()
    {
        prevent_author();

        $id = $this->input->post('id', true);

        //check subservices
        if (count($this->service_model->get_subservices_by_parent_id($id)) > 0) {
            $this->session->set_flashdata('error', trans("msg_delete_subservices"));
            redirect($this->agent->referrer());
        }

        //check posts
        if ($this->post_admin_model->get_post_count_by_service($id) > 0) {
            $this->session->set_flashdata('error', trans("msg_delete_posts"));
            redirect($this->agent->referrer());
        }

        if ($this->service_model->delete_service($id)) {
            $this->session->set_flashdata('success', trans("service") . " " . trans("msg_suc_deleted"));
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('error', trans("msg_error"));
            redirect($this->agent->referrer());
        }
    }


    /**
     * Subservices
     */
    public function subservices()
    {
        prevent_author();

        $data['title'] = trans("subservices");
        $data['services'] = $this->service_model->get_all_subservices();
        $data['top_services'] = $this->service_model->get_services();
        $data['lang_search_column'] = 2;

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/service/subservices', $data);
        $this->load->view('admin/includes/_footer');
    }


    /**
     * Add Subservice Post
     */
    public function add_subservice_post()
    {
        prevent_author();

        //validate inputs
        $this->form_validation->set_rules('name', trans("service_name"), 'required|xss_clean|max_length[200]');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('errors_form', validation_errors());
            $this->session->set_flashdata('form_data', $this->service_model->input_values());
            redirect($this->agent->referrer());
        } else {
            if ($this->service_model->add_subservice()) {
                $this->session->set_flashdata('success_form', trans("service") . " " . trans("msg_suc_added"));
                redirect($this->agent->referrer());
            } else {
                $this->session->set_flashdata('form_data', $this->service_model->input_values());
                $this->session->set_flashdata('error_form', trans("msg_error"));
                redirect($this->agent->referrer());
            }
        }
    }


    /**
     * Update Subservice
     */
    public function update_subservice($id)
    {
        prevent_author();

        $data['title'] = trans("update_subservice");

        //get service
        $data['service'] = $this->service_model->get_service($id);

        if (empty($data['service'])) {
            redirect($this->agent->referrer());
        }

        $data['top_services'] = $this->service_model->get_services_by_lang($data['service']->lang_id);

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/service/update_subservice', $data);
        $this->load->view('admin/includes/_footer');
    }


    /**
     * Update Subservice Post
     */
    public function update_subservice_post()
    {
        prevent_author();

        //validate inputs
        $this->form_validation->set_rules('name', trans("service_name"), 'required|xss_clean|max_length[200]');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('errors', validation_errors());
            $this->session->set_flashdata('form_data', $this->service_model->input_values());
            redirect($this->agent->referrer());
        } else {
            //service id
            $id = $this->input->post('id', true);
            if ($this->service_model->update_service($id)) {
                $this->session->set_flashdata('success', trans("service") . " " . trans("msg_suc_updated"));
                redirect('admin_service/subservices');
            } else {
                $this->session->set_flashdata('form_data', $this->service_model->input_values());
                $this->session->set_flashdata('error', trans("msg_error"));
                redirect($this->agent->referrer());
            }
        }
    }

    //get services by language
    public function get_services_by_lang()
    {
        $lang_id = $this->input->post('lang_id', true);
        if (!empty($lang_id)):
            $services = $this->service_model->get_services_by_lang($lang_id);
            foreach ($services as $item) {
                echo '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        endif;
    }


    //get subservices
    public function get_sub_services()
    {
        $id = $this->input->post('parent_id', true);
        if (!empty($id)):
            $subservices = $this->service_model->get_subservices_by_parent_id($id);
            foreach ($subservices as $item) {
                echo '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        endif;
    }

    /**
     * Gallery services
     */
    public function gallery_services()
    {
        prevent_author();

        $data['title'] = trans("gallery_services");
        $data['services'] = $this->gallery_service_model->get_all_services();
        $data['lang_search_column'] = 2;

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/gallery/services', $data);
        $this->load->view('admin/includes/_footer');
    }


    /**
     * Add Gallery service Post
     */
    public function add_gallery_service_post()
    {
        prevent_author();

        //validate inputs
        $this->form_validation->set_rules('name', trans("service_name"), 'required|xss_clean|max_length[200]');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('errors_form', validation_errors());
            $this->session->set_flashdata('form_data', $this->gallery_service_model->input_values());
            redirect($this->agent->referrer());
        } else {
            if ($this->gallery_service_model->add()) {
                $this->session->set_flashdata('success_form', trans("service") . " " . trans("msg_suc_added"));
                redirect($this->agent->referrer());
            } else {
                $this->session->set_flashdata('form_data', $this->gallery_service_model->input_values());
                $this->session->set_flashdata('error_form', trans("msg_error"));
                redirect($this->agent->referrer());
            }
        }
    }


    /**
     * Update Gallery service
     */
    public function update_gallery_service($id)
    {
        prevent_author();

        $data['title'] = trans("update_service");

        //get service
        $data['service'] = $this->gallery_service_model->get_service($id);

        if (empty($data['service'])) {
            redirect($this->agent->referrer());
        }

        $this->load->view('admin/includes/_header', $data);
        $this->load->view('admin/gallery/update_service', $data);
        $this->load->view('admin/includes/_footer');
    }


    /**
     * Update Gallery service Post
     */
    public function update_gallery_service_post()
    {
        prevent_author();

        //validate inputs
        $this->form_validation->set_rules('name', trans("service_name"), 'required|xss_clean|max_length[200]');

        if ($this->form_validation->run() === false) {
            $this->session->set_flashdata('errors', validation_errors());
            $this->session->set_flashdata('form_data', $this->gallery_service_model->input_values());
            redirect($this->agent->referrer());
        } else {
            //service id
            $id = $this->input->post('id', true);
            if ($this->gallery_service_model->update($id)) {
                $this->session->set_flashdata('success', trans("service") . " " . trans("msg_suc_updated"));
                redirect('admin_service/gallery_services');
            } else {
                $this->session->set_flashdata('form_data', $this->gallery_service_model->input_values());
                $this->session->set_flashdata('error', trans("msg_error"));
                redirect($this->agent->referrer());
            }
        }
    }


    /**
     * Delete Gallery service Post
     */
    public function delete_gallery_service_post()
    {
        prevent_author();

        $id = $this->input->post('id', true);

        //check if service has posts
        if ($this->gallery_model->get_service_image_count($id) > 0) {
            $this->session->set_flashdata('error', trans("msg_delete_images"));
            redirect($this->agent->referrer());
        }

        if ($this->gallery_service_model->delete($id)) {
            $this->session->set_flashdata('success', trans("service") . " " . trans("msg_suc_deleted"));
            redirect($this->agent->referrer());
        } else {
            $this->session->set_flashdata('error', trans("msg_error"));
            redirect($this->agent->referrer());
        }
    }

    //get services by lang
    public function gallery_services_by_lang()
    {
        $lang_id = $this->input->post('lang_id', true);
        if (!empty($lang_id)):
            $services = $this->gallery_service_model->get_services_by_lang($lang_id);
            foreach ($services as $item) {
                echo '<option value="' . $item->id . '">' . $item->name . '</option>';
            }
        endif;
    }


}
