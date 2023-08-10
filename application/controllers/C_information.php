<?php defined("BASEPATH") OR exit("No direct script access allowed");

// header('Access-Control-Allow-Origin: *');
// header("Access-Control-Allow-Methods: GET, OPTIONS");

  class C_information extends MY_Controller {
    function __construct()
    {
        $API = '';
        parent::__construct();
        $this->load->helper('url');

        $this->API= rest_base_uri;
        $this->load->library('session');
        $this->load->library('curl');
        $this->load->helper('form');
        $this->load->library('pagination');
        $this->load->model(array('Custom_model'));

        $this->menu_nav = array();
        $this->menu_nav = $this->Custom_model->getdata('db_webpu.menu_nav');

        foreach ($this->menu_nav as $key => $value) 
        {
            $findsubmenu = $this->Custom_model->getdata('db_webpu.submenu_nav', array('id_menu_nav' => $value['id_menu_nav']), 'name_submenu_nav', 'ASC');

            if (!empty($findsubmenu)) 
            {
                $this->menu_nav[$key]['submenu'] = $findsubmenu;
            }
            else
            {
                $this->menu_nav[$key]['submenu'] = '';
            }
        }
    }

    public function index()
    {
        $data = array();

        $content = $this->load->view('page/V_information',$data,true);
        parent::template($content);
    }

    public function gallery()
    { 
        // $client = new GuzzleHttp\Client();
        $data = array();

        // $data['part'] = '';
        // $pageget = $this->input->get('part');

        // if (empty($pageget)) 
        // {
        //     $ig = $client->request('GET', 'https://graph.instagram.com/me/media?fields=id,media_type,media_url,username,timestamp,permalink,thumbnail_url&limit=8&access_token='.ig_token,[]);
        // }
        // else
        // {
        //     $data['part'] = $this->input->get('part');
        //     if ($this->input->get('cursor') == 'next') 
        //     {
        //         $req = 'https://graph.instagram.com/v16.0/17841400913306997/media?access_token='.ig_token.'&fields=id%2Cmedia_type%2Cmedia_url%2Cusername%2Ctimestamp%2Cpermalink%2Cthumbnail_url&limit=8&after='.$data['part'];
        //         $ig = $client->request('GET', $req,[]);
        //     }
        //     if ($this->input->get('cursor') == 'prev') 
        //     {
        //         $req = 'https://graph.instagram.com/v16.0/17841400913306997/media?access_token='.ig_token.'&fields=id%2Cmedia_type%2Cmedia_url%2Cusername%2Ctimestamp%2Cpermalink%2Cthumbnail_url&limit=8&before='.$data['part'];
        //         $ig = $client->request('GET', $req,[]);
        //     }
        // }

        // $dataigraw = json_decode($ig->getBody()->getCOntents(),true);
        // $paging = $dataigraw['paging'];
        // $data['ig'] = $dataigraw['data'];

        // $data['prev'] = '';
        // $data['next'] = '';

        // if (!empty($paging['previous'])) 
        // {
        //     $data['prev'] = $paging['cursors']['before'];

        // }
        // if (!empty($paging['next'])) 
        // {
        //     $data['next'] = $paging['cursors']['after'];
        // }

        $content = $this->load->view('page/V_gallery',$data,true);
        parent::template($content);
    } 

    public function videos()
    { 
        $client = new GuzzleHttp\Client();
        $data = array();

        $data['pagetoken'] = '';
        $pageget = $this->input->get('pagetoken');

        if (empty($pageget)) 
        {
            $yt = $client->request('GET', 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.channel_id.'&maxResults=4&key='.ytkey.'',[]);
        }
        else
        {
            $data['pagetoken'] = $this->input->get('pagetoken');

            $req = 'https://www.googleapis.com/youtube/v3/search?order=date&part=snippet&channelId='.channel_id.'&maxResults=4&pageToken='.$data['pagetoken'].'&key='.ytkey.'';
            $yt = $client->request('GET', $req,[]);
        }

        $dataytraw = json_decode($yt->getBody()->getCOntents(),true);
        $data['yt'] = $dataytraw['items'];

        $data['prev'] = '';
        $data['next'] = '';

        if (!empty($dataytraw['prevPageToken'])) 
        {
            $data['prev'] = $dataytraw['prevPageToken'];

        }
        if (!empty($dataytraw['nextPageToken'])) 
        {
            $data['next'] = $dataytraw['nextPageToken'];
        }

        $content = $this->load->view('page/V_videos',$data,true);
        parent::template($content);
    } 

    public function announcement($id_announcement = false)
    {
        $data = array();
        if ($id_announcement == false) 
        {
            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 0;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 0;
                }
                else
                {
                    $page = $pageget * 5 - 5;
                    $data['page'] = $pageget;
                }
            }

            $data['announcement'] = $this->client_rest->client_get('announcement/listAnnouncement',['page' => $page]);

            $content = $this->load->view('page/V_announcement_list',$data,true);
            parent::template($content);
        }
        else
        {
            $data['detail'] = $this->client_rest->client_get('announcement/DetailAnnouncement',['id_announcement' => $id_announcement]);
            
            $data['recent_announcement'] = $this->client_rest->client_get('announcement/RecentAnnouncement',[]);

            $content = $this->load->view('page/V_announcement_detail',$data,true);
            parent::template($content);
        }  
    }

    public function events($id_event = false)
    {
        $data = array();
        if ($id_event == false) 
        {
            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 0;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 0;
                }
                else
                {
                    $page = $pageget * 5 - 5;
                    $data['page'] = $pageget;
                }
            }

            $data['events'] = $this->client_rest->client_get('blogs/EventsBlog',['page' => $page, 'limit' => 5]);

            $content = $this->load->view('page/V_events',$data,true);
            parent::template($content);
        }
        else
        {
            $data = array();

            $data['detail'] = $this->client_rest->client_get('blogs/DetailNews',['id_title' => $id_event]);

            $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $this->load->view('page/V_news_detail',$data);
        }  
    }

    public function kerja_sama($id_kerja_sama = false)
    {
        $data = array();
        if ($id_kerja_sama == false) 
        {
            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 0;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 0;
                }
                else
                {
                    $page = $pageget * 5 - 5;
                    $data['page'] = $pageget;
                }
            }

            $data['kerja_sama'] = $this->client_rest->client_get('kerja_sama/KerjaSamaList',['page' => $page]);

            $data['recent_kerja_sama'] = $this->client_rest->client_get('kerja_sama/KerjaSamaList',['page' => 0, 'limit' => 5]);

            $content = $this->load->view('page/V_kerja_sama',$data,true);
            parent::template($content);
        }
        else
        {
            $data['detail'] = $this->client_rest->client_get('kerja_sama/DetailKerjaSama',['id_kerjasama' => $id_kerja_sama]);
            
            $data['recent_kerja_sama'] = $this->client_rest->client_get('kerja_sama/KerjaSamaList',['page' => 0, 'limit' => 5]);

            $content = $this->load->view('page/V_kerja_sama_detail',$data,true);
            parent::template($content);
        }  
    }

    public function marketing_activity($id_marketing_activity = false)
    {
        $data = array();
        if ($id_marketing_activity == false) 
        {
            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 0;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 0;
                }
                else
                {
                    $page = $pageget * 5 - 5;
                    $data['page'] = $pageget;
                }
            }

            $data['marketing'] = $this->client_rest->client_get('marketing/MarketingActivity',['page' => $page]);

            $data['recent_marketing'] = $this->client_rest->client_get('marketing/MarketingActivity',['page' => 0, 'limit' => 5]);

            $content = $this->load->view('page/V_marketing_activity_list',$data,true);
            parent::template($content);
        }
        else
        {
            $data['detail'] = $this->client_rest->client_get('marketing/DetailMarketingActivity',['id_marketing_activity' => $id_marketing_activity]);
            
            $data['recent_marketing'] = $this->client_rest->client_get('marketing/MarketingActivity',['page' => 0, 'limit' => 5]);

            $content = $this->load->view('page/V_marketing_activity_detail',$data,true);
            parent::template($content);
        }  
    }

    public function news_category()
    { 
        $data = array();

        $data['categories'] = $this->client_rest->client_get('blogs/CategoryNews',[]);

        $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

        $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

        $content = $this->load->view('page/V_news_category',$data,true);
        parent::template($content);
    } 

    public function news($id_title = false)
    { 
        if ($id_title == false) 
        {
            $data = array();

            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 0;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 0;
                }
                else
                {
                    $page = $pageget * 5 - 5;
                    $data['page'] = $pageget;
                }
            }

            $category = false;
            if (!empty($this->input->get('category')))
            {
                $findcategory = $this->Custom_model->getdetail('db_blogs.category', array('Name' => $this->input->get('category')));

                if (!empty($findcategory)) 
                {
                    $category = $findcategory['ID_category'];
                }
            }

            $data['news'] = $this->client_rest->client_get('blogs/ListNews',['page' => $page, 'category' => $category]);

            $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $content = $this->load->view('page/V_news_list',$data,true);
            parent::template($content);
        }
        else
        {
            $data = array();

            $data['detail'] = $this->client_rest->client_get('blogs/DetailNews',['id_title' => $id_title]);

            $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $this->load->view('page/V_news_detail',$data);
        }    
    }   

    public function world_article($id_article = false)
    { 
        $client = new GuzzleHttp\Client();
        if ($id_article == false) 
        {
            $data = array();

            $data['page'] = 1;

            $pageget = $this->input->get('page');
            $page = 1;
            if (!empty($pageget)) 
            {
                if ($pageget == 1) 
                {
                    $page = 1;
                }
                else
                {
                    $page = $pageget;
                    $data['page'] = $pageget;
                }
            }

            $response = $client->request('GET', 'https://newsapi.org/v2/top-headlines?sources=bbc-news&page='.$page.'&pageSize='.'5'.'&apiKey=96b7521327044529a95b04762e15d43e',[]);
            $d = json_decode($response->getBody()->getCOntents(),true);      
            $data['article'] = $d['articles'];

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $content = $this->load->view('page/V_world_article_list',$data,true);
            parent::template($content);
        }
        else
        {
            $data = array();

            $data['detail'] = $this->client_rest->client_get('blogs/DetailNews',['id_title' => $id_title]);

            $data['trend_cat'] = $this->client_rest->client_get('blogs/TrendingCategory',[]);

            $data['recent_news'] = $this->client_rest->client_get('blogs/RecentNews',[]);

            $this->load->view('page/V_news_detail',$data);
        }    
    }   

    public function contact()
    {
        $data = array();

        $content = $this->load->view('page/V_contact',$data,true);
        parent::template($content);
    }

    
  }

  

?>