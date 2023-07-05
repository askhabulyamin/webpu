<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    function __construct()
    {
        parent::__construct();

        $this->set = array();

        date_default_timezone_set('Asia/Jakarta');
        // Baca server name
        $ServerName = $_SERVER['SERVER_NAME'];

        $this->load->helper('general_helper');

        $this->load->model(array('Custom_model'));
        
        $this->menu_nav = array();
        $this->menu_nav = $this->Custom_model->getdata('db_webpu.menu_nav');

        $this->footer_nav = array();
        $this->footer_nav = $this->Custom_model->getdata('db_webpu.footer_nav');

        $this->contactinfo = $this->client_rest->client_get('contactinfo/DetailInfo',[]);
        $this->topbanner = $this->client_rest->client_get('banner/TopBannerList',[]);

        foreach ($this->menu_nav as $key => $value) 
        {
            $findsubmenu = $this->Custom_model->getdata('db_webpu.submenu_nav', array('id_menu_nav' => $value['id_menu_nav'], 'status' => 1), 'name_submenu_nav', 'ASC');

            if (!empty($findsubmenu)) 
            {
                $this->menu_nav[$key]['submenu'] = $findsubmenu;
            }
            else
            {
                $this->menu_nav[$key]['submenu'] = '';
            }
        }

        $imggenquery = $this->Custom_model->getdata('db_webpu.gen_img');
        $this->genimg = array();
        foreach ($imggenquery as $key => $value) 
        {
            $this->genimg[] = $value['img_file'];
        }

    }

    public function template($content)
    {

        $data['content'] = $content;
        $this->load->view('template/blank',$data);
    }

    public function dateTimeNow(){
        date_default_timezone_set('Asia/Jakarta');
        $dataTime = date('Y-m-d H:i:s') ;
        return $dataTime;
    }

    public function config_pagination_default_ajax($total_rows = 999,$per_page = 10,$uri_segment = 6)
    {
        $config = array();
        $config["base_url"] = "#";
        $config["total_rows"] =  $total_rows;
        $config["per_page"] = $per_page;
        $config["uri_segment"] = $uri_segment;
        $config["use_page_numbers"] = TRUE;
        $config["full_tag_open"] = '<ul class="pagination">';
        $config["full_tag_close"] = '</ul>';
        $config["first_tag_open"] = '<li>';
        $config["first_tag_close"] = '</li>';
        $config["last_tag_open"] = '<li>';
        $config["last_tag_close"] = '</li>';
        $config['next_link'] = '&gt;';
        $config["next_tag_open"] = '<li>';
        $config["next_tag_close"] = '</li>';
        $config["prev_link"] = "&lt;";
        $config["prev_tag_open"] = "<li>";
        $config["prev_tag_close"] = "</li>";
        $config["cur_tag_open"] = "<li class='active'><a href='#'>";
        $config["cur_tag_close"] = "</a></li>";
        $config["num_tag_open"] = "<li>";
        $config["num_tag_close"] = "</li>";
        $config["num_links"] = 1;

        return $config;
    }

    public function is_url_exist($url){
        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_NOBODY, true);
        curl_exec($ch);
        $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        if($code == 200){
            $status = true;
        }else{
            $status = false;
        }
        curl_close($ch);
        return $status;
    }

    public function getInputToken()
    {
        $token = $this->input->post('token');
        $key = "UAP)(*";
        $data_arr = (array) $this->jwt->decode($token,$key);
        return $data_arr;
    }


}
