<?php
class Settings extends Linkwag{
    public function __construct() {
        //parent::__construct();
    }
    
    public function index($id=false){
       $this->data['option'] = '';
        if(isset($_POST['save_linkwag_options'])){
			
            update_option('wag_prev_link',0);
            update_option('wag_new_post_auto',0);
            update_option('wag_new_page_auto',0);
            update_option('icon_post',0);
            update_option('icon_page',0);

            if($_POST['lw']['option'])
            foreach($_POST['lw']['option'] as $key=>$item){
                update_option($key, $item);
            }
            $result = serialize($_POST['lw']['option']);
            update_option('linkwag_settings', $result);
            $this->data['option']=$_POST['lw']['option'];
        }else{
            $this->data['option'] = unserialize(get_option('linkwag_settings'));
        }
       $this->template = 'settings/index';
       $this->data['heading'] = 'Linkwag Options'; 
       $this->render();
        
    }
}