// acf plugin opion tab code
if( function_exists('acf_add_options_sub_page') )
{   
    acf_add_options_sub_page( 'Home Page' );
	acf_add_options_sub_page( 'Header' );
    acf_add_options_sub_page( 'Footer' );	
}

<?php $logo = get_field('logo', 'option'); ?>
      <?php if($logo){ ?>
      <div id="logo" class="logo"> <a href="<?php echo site_url(); ?>"><img src="<?php echo $logo; ?>" alt="UNICON" class="logo_standard" /></a> </div>
      <?php } ?>