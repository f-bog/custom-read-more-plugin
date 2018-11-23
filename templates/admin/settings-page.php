<div class="wrap">
    
    <h1><?php esc_html_e(get_admin_page_title()); ?></h1>
    
    <form method="post" action="options.php">
        
        <?php settings_fields('fwdreadmore_settings'); ?>

        <?php do_settings_sections('fwdreadmore'); ?>
        <div class="sample-container">
            <a class="spread adminlink">spread</a>
            <br>
            <br>
            <a class="up adminlink">up</a>
            <br>
            <br>
            <a class="pulse adminlink">pulse</a>
        </div>
        <?php submit_button(); ?>
    </form>
</div>