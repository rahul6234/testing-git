<img src="<?php echo img_src('logo.jpg'); ?>" width="150" class="logo" />
<div class="data">
    <h3>Links</h3>
    <p>Select the Post or Page link(s) you wish to Wag by checking the box nest to the Title. If you do not wish to Wag specifc links, uncheck uncheck the box next to the Title</p>
    <p>Click "Save Changes" to update</p>
</div>

    <form method="post" action="admin.php?page=linkwag-links">
 <?php foreach ($posts as $name=>$types) : ?>
   <div class="data"> 	
  	 <h4><?php echo ucwords($name); ?></h4>	
		<div id="content_text">
<?php 
         foreach($types as $post) : 
		 	?>
        <div class="f_row">
                    <div class="f_left"><?php echo $post->post_title; ?></div>
					
                    <div state="<?php echo post_is_wagged($post->ID); ?>" class="f_right">
					<input  class="lkwags-in" value="<?php echo $post->ID; ?>" class="txt_field" name="lw[post][<?php echo $name; ?>][]" type="checkbox" <?php if(post_is_wagged($post->ID)==2) echo 'checked=checked'; ?> /></div>
        </div>
        <?php endforeach; ?>
</div> 		
</div>
<?php endforeach; ?>
<div class="data">    
    <div class="f_row last">
        <div class="f_left"><input type="submit" name="linkwag_save_wags" class="submit_btn" value="Save Changes"  /></div>
        <div class="f_right">&nbsp;</div>
    </div>
</form>

</div>

<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('.lkwags-in').click(function(){
           if(jQuery(this).attr('checked')){
              state=2;
           }else{
               state=0;
           }
           
           jQuery.post(ajaxurl,{action:'ajax','fb':'wag_post','state':state,id:jQuery(this).val()})
        });
    });
</script>