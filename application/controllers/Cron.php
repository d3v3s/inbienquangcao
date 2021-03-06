<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends Admin_Core_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Update Sitemap
     */
    public function update_sitemap()
    {
        $this->load->model('sitemap_model');
        $this->sitemap_model->update_sitemap();
    }
}
