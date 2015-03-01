<?php
/*
Plugin Name: Alter singular post template slug
Plugin URI: kirr.azurewebsites.net
Description: Add the category into the file template name
Author: kkirr
Version: 1.0
*/

  add_filter ('single_template', 'kek_single_template');

  function kek_single_template() {
    global $wp_query;

    /* check if we are viewing a singular post */

    if (is_singular ('post')) {
      /* get the post ID */
      $post_id = $wp_query->get_queried_object_id();

      /* get the post categories */
      $terms = get_the_terms($post_id, 'category');

      /* loop through the categoreis, adding slugs of the file name */
      $templates = array();
      foreach ($terms as $term)
        $templates[] = "single-category-{$term->slug}.php";

      /* check if the template exists */
      $locate = locate_template($templates);

      /* if a template was found, make it the new template */
      if (!empty ($locate))
        $template = $locate;

    }

    /* return the template file name */
    return $template;
  }
?>
