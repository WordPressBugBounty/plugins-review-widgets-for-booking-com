<?php
defined('ABSPATH') or die('No script kiddies please!');
wp_enqueue_script('trustindex-js', 'https://cdn.trustindex.io/loader.js', [], true, true);
?>
<h1 class="ti-header-title"><?php echo esc_html(__('Rate Us', 'review-widgets-for-booking-com')); ?></h1>
<div class="ti-box">
<div class="ti-box-header"><?php echo esc_html(__('Do you like our free plugin?', 'review-widgets-for-booking-com')); ?></div>
<p>
<?php echo esc_html(__("We've spent a lot of time developing this software. If you use the free version, you can still support us by leaving a review!", 'review-widgets-for-booking-com')); ?><br />
<?php echo esc_html(__('Thank you in advance!', 'review-widgets-for-booking-com')); ?>
</p>
<a class="ti-btn" href="https://wordpress.org/support/plugin/<?php echo esc_attr($pluginManagerInstance->get_plugin_slug()); ?>/reviews/?rate=5#new-post" target="_blank"><?php echo esc_html(__('Click here to rate us!', 'review-widgets-for-booking-com')); ?></a>
<div class="ti-box-footer">
<div data-src='https://cdn.trustindex.io/loader.js?<?php echo '74d09188818d39158757f71e52'; ?>'></div>
</div>
</div>
