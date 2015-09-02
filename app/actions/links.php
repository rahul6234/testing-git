<?php
class Links extends Linkwag{
    public function __construct() {
        //parent::__construct();
    }
    
    public function index($id=false){
       $this->template = 'links/link';
       $this->data['heading'] = 'Linkwag Options'; 
       
       if(isset($_POST['linkwag_save_wags'])){
           wag_post($post_id,'active');
       }
       
       $types = grv_get_post_types();
       $posts=array();
       foreach($types as $item){
           $posts[$item]=grv_type_posts($item);
       }
       $this->data['posts']=$posts;
       $this->render();
        
    }
}