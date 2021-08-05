<footer class="footer text-center py-2 theme-bg-dark">
   <br></br>
<?php

if ( function_exists('the_custom_logo') ){
   $custom_logo_id = get_theme_mod('custom_logo');
   $logo = wp_get_attachment_image_src($custom_logo_id);
}

?>

<img class="mb-3 mx-auto logo" src="<?php echo $logo[0] ?>" alt="logo" >  
<br></br>
          <!-- <p class="copyright"><a href=">Further Information</a></p> -->
            <ul id="samplefooter">
                <li>About</li>
                <li>Services</li>
                <li>Conditions We Treat</li>
                <li>Locations</li>
                <li>FX Brands</li>
                <li>Blog</li>
                <li>Online Payment</li>
            </ul>  

        
       </div>

    <?php
		wp_footer();
	?>
    
</body>
</html> 