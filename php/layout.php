<?php
/**
 * Updates the page meta to use the template that was selected in the visual
 * layout selector
 * 
 * @param  integer $post_id
 * @return void
 */
function acf_layout_update($post_id) {
  // Only the home page get's to bypass this.
  $skipped_templates = array(
    'home.php',
    'navigation.php',
    'corporate_policies.php',
  );
  if (isset($_POST['page_template']) && in_array($_POST['page_template'], $skipped_templates)) { return false; }

  // Update the template
  $template = sprintf('templates/%s.php', get_field('layout', $post_id));
  update_post_meta($post_id, '_wp_page_template', $template);
}
add_action('acf_save_post', 'acf_layout_update', 15);

/**
 * Hide the template selector in the pages
 * 
 * @return void
 */
function template_selector_hide_js() {
  if (DISABLE_TEMPLATE_SELECTOR) :
?>
<script>
jQuery(document).ready(function($) {
  $('#page_template').hide().prevUntil('#parent_id').hide();
});
</script>
<?php
  endif;
}
add_filter('admin_head', 'template_selector_hide_js');
