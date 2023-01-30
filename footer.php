<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$site_name = get_bloginfo('name');
?>
<footer class="main-footer">
    <div class="footer-container">
        <div>
            <p>&#169 <?php echo $site_name." ".date("Y"); ?> - Web Design</p>
        </div>
    </div>
</footer>
