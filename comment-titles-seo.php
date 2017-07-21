<?php
/**
 * @link              http://stallion-theme.co.uk/
 * @since             1.0.0
 * @package           Comment_Titles_Seo_Plugin
 *
 * @wordpress-plugin
 * Plugin Name:       Comment Titles SEO
 * Plugin URI:        http://stallion-theme.co.uk/comment-titles-wordpress-seo-plugin/
 * Description:       Add an extra field to the Comment Form for your commenter's to add a relevant title (a Comment Title) adding additional SEO value to user comments. Comment Titles are also used by the free <a href="https://wordpress.org/plugins/blog-comments-seo/" target="_blank">SEO Comments Plugin</a> adding significant SEO value to the output.
 * Version:           1.0.0
 * Author:            David Law
 * Author URI:        http://stallion-theme.co.uk/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       comment-titles-seo
 * Domain Path:       /languages
 */

// If this file is called directly, abort.

if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( !class_exists( 'comment_titles_seo' ) && !function_exists( 'hkTC_comment_title' ) ) :

	class comment_titles_seo {

		public static function construct() {
			// Add Comment Title field to the comment form (frontend)
			add_action( 'comment_form_logged_in_after', array( __CLASS__, 'comtitseo_title_field' ) );
			add_action( 'comment_form_before_fields', array( __CLASS__, 'comtitseo_title_field' ) );
			// Add meta box to edit comment page (backend)
			add_action( 'add_meta_boxes_comment', array( __CLASS__, 'comtitseo_title_meta_box' ) );
			// Save comment title (backend)
			add_action( 'edit_comment', array( __CLASS__, 'comtitseo_title_save_bk' ) );
			// Save comment title (frontend)
			add_action( 'comment_post', array( __CLASS__, 'comtitseo_title_save_ft' ), 10, 1 );
			// Output comment title with bold formatting (frontend)
			add_filter( 'comment_text', array( __CLASS__, 'comtitseo_title_output' ), 99, 2 );
			// Add comment title column under main comments page (backend)
			add_action('load-edit-comments.php', array( __CLASS__, 'comtitseo_column_title' ) );
			add_action('manage_comments_custom_column', array( __CLASS__, 'comtitseo_column_output' ), 10, 2);
			// Translation
			add_action( 'plugins_loaded', array( __CLASS__, 'comtitseo_title_lang' ) );
		}

		public static function comtitseo_title_field() {
?>
<p class="comment-form-title"><label for="hikari-titled-comments"><?php _e( 'Comment Title', 'comment-titles-seo' ); ?></label><input type="text" name="hikari-titled-comments" id="hikari-titled-comments" maxlength="120" /></p>
<?php
		}

/**
 * Add meta box to edit comment page (backend)
 */
		public static function comtitseo_title_meta_box() {
			add_meta_box( 'comtitseo-comment-title', __( 'Comment Title', 'comment-titles-seo' ), array( __CLASS__, 'comtitseo_title_meta_box_bk'), 'comment', 'normal', 'high' );
		}

		public static function comtitseo_title_meta_box_bk( $comment ) {
			$title = get_comment_meta( $comment->comment_ID, 'hikari-titled-comments', true );
			wp_nonce_field( 'comtitseo_comment_update', 'comtitseo_comment_update', false );
?>
			<p>
				<label for="hikari-titled-comments"><?php _e( 'Comment Title', 'comment-titles-seo' ); ?></label>
				<input type="text" name="hikari-titled-comments" value="<?php echo esc_html( $title ); ?>" class="widefat" />
			</p>
<?php
		}

/**
 * Save comment title (back end)
 */

		public static function comtitseo_title_save_bk( $comment_id ) {
			if ( ! isset( $_POST['comtitseo_comment_update'] ) || ! wp_verify_nonce( $_POST['comtitseo_comment_update'], 'comtitseo_comment_update' ) ) {
				return;
			}
			// Update/Save the comment title meta data
			if ( isset( $_POST['hikari-titled-comments'] ) ) {
				update_comment_meta( $comment_id, 'hikari-titled-comments', strip_tags( $_POST['hikari-titled-comments'] ) );
			}
			// Delete the comment title meta data from the database if the field is empty
			if ( empty( $_POST['hikari-titled-comments'] ) ) {
				delete_comment_meta( $comment_id, 'hikari-titled-comments', strip_tags( $_POST['hikari-titled-comments'] ) );
			}
		}

/**
 * Save comment title (front end)
 */

		public static function comtitseo_title_save_ft( $comment_id ) {
			if ( isset( $_POST['hikari-titled-comments'] ) ) {
				update_comment_meta( $comment_id, 'hikari-titled-comments', strip_tags( $_POST['hikari-titled-comments'] ) );
			}
		}


/**
 * Output comment title with formatting (front end)
 * Hook late to avoid conflicts
 * WordPress comment text filters
 */

		public static function comtitseo_title_output( $text, $comment ) {
			if (is_admin()) {
				return $text;
			}
			if ( get_comment_meta( $comment->comment_ID, 'hikari-titled-comments', true ) ) {
				$commenttitle = get_comment_meta( $comment->comment_ID, 'hikari-titled-comments', true );
				$title = '<strong class="comment-title-seo">' . strip_tags( $commenttitle ) . '</strong>';
				$text = $title . $text;
			}
			return $text;
		}

/**
 * Add comment title column under main comments page (backend)
 */

		public static function comtitseo_column_title() {
			add_filter( "manage_edit-comments_columns", array( __CLASS__, 'comtitseo_add_columns' ) );
		}

		public static function comtitseo_add_columns( $cols ) {
			$cols['title'] = __( 'Comment Title', 'comment-titles-seo' );
			return $cols;
		}

		public static function comtitseo_column_output( $col, $comment_id ) {
			switch($col) {
				case 'title' :
					if ( get_comment_meta( $comment_id, 'hikari-titled-comments', true ) ) {
						$commenttitle = get_comment_meta( $comment_id, 'hikari-titled-comments', true );
						echo esc_html( $commenttitle );
					} else {
						//esc_html_e('None', 'comment-titles-seo'); //decided to leave empty, less to translate :-)
					}
				break;
			}
		}

		public static function comtitseo_title_lang() {
			load_plugin_textdomain( 'comment-titles-seo', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );
		}
		
	}

endif;

if ( function_exists( 'add_action' ) ) {
	add_action( 'plugins_loaded', array( 'comment_titles_seo', 'construct' ), 20 );
}