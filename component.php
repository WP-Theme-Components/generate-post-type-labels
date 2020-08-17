<?php
/**
 * Efficient post type labels generation
 *
 * @package WP-Theme-Components
 * @subpackage generate-post-type-labels
 * @author Cameron Jones
 * @version 1.0.1
 * @link https://github.com/WP-Theme-Components/generate-post-type-labels
 */

namespace WP_Theme_Components\Generate_Post_Type_Labels;

/**
 * Bail if accessed directly
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Generates the post type labels
 *
 * @since 1.0.0
 * @param string $single Singular name of the post type.
 * @param string $plural Plural name of the post type.
 * @param array  $overrides Override any generated labels.
 * @return array The post type labels
 */
function generate_post_type_labels( $single, $plural, $overrides = array() ) {
	$labels = array(
		'name'                     => $plural,
		'singular_name'            => $single,
		'add_new'                  => 'Add New',
		'add_new_item'             => 'Add New ' . $single,
		'edit_item'                => 'Edit ' . $single,
		'new_item'                 => 'New ' . $single,
		'view_item'                => 'View ' . $single,
		'view_items'               => 'View ' . $plural,
		'search_items'             => 'Search ' . $plural,
		'not_found'                => 'No ' . strtolower( $plural ) . ' found.',
		'not_found_in_trash'       => 'No ' . strtolower( $plural ) . ' found in Trash.',
		'parent_item_colon'        => 'Parent ' . $single . ':',
		'all_items'                => 'All ' . $plural,
		'archives'                 => $single . ' Archives',
		'attributes'               => $single . ' Attributes',
		'insert_into_item'         => 'Insert into ' . strtolower( $single ),
		'uploaded_to_this_item'    => 'Uploaded to this ' . strtolower( $single ),
		'filter_items_list'        => 'Filter ' . strtolower( $plural ) . ' list',
		'items_list_navigation'    => $plural . ' list navigation',
		'items_list'               => $plural . 'Posts list',
		'item_published'           => $single . ' published.',
		'item_published_privately' => $single . '  published privately.',
		'item_reverted_to_draft'   => $single . ' reverted to draft.',
		'item_scheduled'           => $single . ' scheduled.',
		'item_updated'             => $single . ' updated.',
	);
	return wp_parse_args( $overrides, $labels );
}
