<?php
/**
* The database proxy object.
*
* This handles interaction with the different types of database.
*
* @package ImpEx
*
*/

if ( ! class_exists('ImpExDatabaseCore')) { die('Direct class access violation'); }

class ImpExDatabase extends ImpExDatabaseCore
{
    /**
     * Class version
     *
     * This will allow the checking for inter-operability of class version in different
     * versions of ImpEx
     *
     * @var    string
     */
     var $_version = '0.0.1';

     var $_target_system = 'XenForo 1.4.x';

    /**
     * Constructor
     *
     * Empty
     *
     */
    function ImpExDatabase()
    {

    }

    function create_data_type($Db_object, $databasetype, $tableprefix, $type, $product = 'xenforo') {}

    function add_import_id($Db_object, $databasetype, $tableprefix, $tablename, $importname, $type = 'BIGINT') {}

    function add_importids(&$Db_object, &$databasetype, &$tableprefix, &$displayobject, &$sessionobject) {}

    function associate_user($Db_object, $databasetype, $tableprefix, $importuserid, $userid) {}

    function add_index($Db_object, $databasetype, $tableprefix, $tablename) {}

    function check_product_installed($Db_target, $target_db_type, $target_table_prefix, $product) {}

    function enum_check($get_field, $array, $default) {}

    function add_custom_field($Db_object, $databasetype, $tableprefix, $profiletitle, $profiledescription) {}

    function import_vb3_user($Db_object, $databasetype, $tableprefix) {}

    function import_poll_to_vb3_thread($Db_object, $databasetype, $tableprefix, $vb_poll_id, $import_poll_id) {}

    function import_smilie($Db_object, $databasetype, $tableprefix, $prepend_path = true) {}

    function import_poll($Db_object, $databasetype, $tableprefix) {}

    function import_phrase($Db_object, $databasetype, $tableprefix) {}

    function import_subscription($Db_object, $databasetype, $tableprefix) {}

    function import_subscriptionlog($Db_object, $databasetype, $tableprefix) {}

    function copy_avatar(&$Db_object, &$databasetype, $tableprefix, $sourcefile, $targetfile) {}

    function import_poll_to_thread($Db_object, $databasetype, $tableprefix, $vb_poll_id, $import_thread_id, $vb_thread_id = false) {}

    function import_poll_voters($Db_object, $databasetype, $tableprefix, $poll_voters_array ,$vb_poll_id) {}

    function import_attachment($Db_object, $databasetype, $tableprefix, $import_post_id = TRUE) {}

    function import_user_group($Db_object, $databasetype, $tableprefix) {}

    function import_pm_text($Db_object, $databasetype, $tableprefix) {}

    function import_pm($Db_object, $databasetype, $tableprefix) {}

    function import_buddy_ignore($Db_object, $databasetype, $tableprefix, $user) {}

    function import_ban_list($Db_object, $databasetype, $tableprefix, $list, $type) {}

    function import_post($Db_object, $databasetype, $tableprefix) {}

    function import_user($Db_object, $databasetype, $tableprefix) {}

    function fetch_user_salt($length = 3) {}

    function import_avatar($Db_object, $databasetype, $tableprefix, $userid, $file) {}

    function import_category($Db_object, $databasetype, $tableprefix) {}

    function import_forum($Db_object, $databasetype, $tableprefix) {}

    function import_thread($Db_object, $databasetype, $tableprefix) {}

    function import_moderator($Db_object, $databasetype, $tableprefix) {}

    function import_custom_profile_pic($Db_object, $databasetype, $tableprefix) {}

    function import_user_field_value($Db_object, $databasetype, $tableprefix, $title, $value, $userid) {}

    function import_rank($Db_object, $databasetype, $tableprefix) {}

    function import_smilie_image_group($Db_object, $databasetype, $tableprefix) {}

    function import_usergroup($Db_object, $databasetype, $tableprefix) {}

    function get_details($Db_object, $databasetype, $tableprefix, $start, $per_page, $type, $orderby = false) {}

    function get_source_data($Db_object, $databasetype, $tablename, $id_field, $fields, $start_at, $per_page) {}

    function get_post_parent_id($Db_object, $databasetype, $tableprefix, $import_post_id) {}

    function get_custom_pm_folder_id($Db_object, $databasetype, $tableprefix, $userid, $folder_name) {}

    function get_options_setting($Db_object, $databasetype, $tableprefix, $name) {}

    function get_vb_post_user_id($Db_object, $databasetype, $tableprefix, $post_id) {}

    function select_profilefield_list($Db_object, $databasetype, $tableprefix, $title) {}

    function get_vb_userid($Db_object, $databasetype, $tableprefix, $importuserid) {}

    function get_style_ids($Db_object, $databasetype, $tableprefix, $pad=0) {}

    function get_imported_group_ids_by_name($Db_object, $databasetype, $tableprefix) {}

    function get_one_username($Db_object, $databasetype, $tableprefix, $theuserid, $id='importuserid') {}

    function get_user_array($Db_object, $databasetype, $tableprefix, $startat = null, $perpage = null) {}

    function get_banned_group($Db_object, $databasetype, $tableprefix) {}

    function get_imported_group_ids($Db_object, $databasetype, $tableprefix) {}

    function get_thread_id($Db_object, $databasetype, $tableprefix, $importthreadid, $forumid) {}

    function get_forum_and_thread_ids($Db_object, $databasetype, $tableprefix) {}

    function get_threads_ids($Db_object, $databasetype, $tableprefix) {}

    function get_posts_ids($Db_object, $databasetype, $tableprefix) {}

    function get_category_ids($Db_object, $databasetype, $tableprefix) {}

    function get_category_id_by_name($Db_object, $databasetype, $tableprefix) {}

    function get_forum_id_by_name($Db_object, $databasetype, $tableprefix) {}

    function get_done_user_ids($Db_object, $databasetype, $tableprefix) {}

    function get_user_ids($Db_object, $databasetype, $tableprefix, $do_int_val = false) {}

    function get_subscription_ids($Db_object, $databasetype, $tableprefix) {}

    function get_username($Db_object, $databasetype, $tableprefix) {}

    function get_username_to_ids($Db_object, $databasetype, $tableprefix) {}

    function get_email_to_ids($Db_object, $databasetype, $tableprefix) {}

    function get_vb_post_id($Db_object, $databasetype, $tableprefix, $import_post_id) {}

    function get_forum_ids($Db_object, $databasetype, $tableprefix, $pad=0) {}

    function clear_ban_list($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_attachments($Db_object, $databasetype, $tableprefix, $contentinfo) {}

    function clear_imported_subscriptions($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_avatars($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_forums($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_threads($Db_object, $databasetype, $tableprefix) {}

    function clear_banned_users($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_users($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_posts($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_polls($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_buddy_list($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_ignore_list($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_private_messages($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_moderators($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_smilies($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_user_groups($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_custom_pics($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_ranks($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_usergroups($Db_object, $databasetype, $tableprefix) {}

    function clear_imported_phrases($Db_object, $databasetype, $tableprefix) {}

    function clear_non_admin_users($Db_object, $databasetype, $tableprefix) {}

    function add_pm_folder_for_all_users($Db_object, $databasetype, $tableprefix, $new_folder_name) {}

    function clean_nested_forums($Db_object, $databasetype, $tableprefix, $importid) {}

    function update_user_pm_count($Db_object, $databasetype, $tableprefix) {}

    function update_poll_ids($Db_object, $databasetype, $tableprefix) {}

    function build_user_statistics($Db_object, $databasetype, $tableprefix) {}

    function construct_child_list($Db_object, $databasetype, $tableprefix, $forumid) {}

    function build_forum_child_lists($Db_object, $databasetype, $tableprefix, $forumid = -1) {}

    function update_post_parent_ids($Db_object, $databasetype, $tableprefix) {}

    function set_forum_private($Db_object, $databasetype, $tableprefix, $forum_id) {}

    function check_user_field($Db_object, $databasetype, $tableprefix, $field) {}

    function check_database($Db_object, $databasetype, $tableprefix, $sourceexists) {}

    function check_table($Db_object, $databasetype, $tableprefix, $table_name, $req_fields=false) {}

    function does_smilie_exists($Db_object, $databasetype, $tableprefix, $smilie) {}

    function get_contenttypeid(&$Db_object, &$databasetype, &$tableprefix, $productid, $class) {}

    function get_packageid(&$Db_object, &$databasetype, &$tableprefix, $productid, $class) {}

    function ImpExCache($Db, $db_type, $prefix) {}

    function get_id($type, $importid, $forum=null) {}

    function copy_avatar(&$Db_object, &$databasetype, $tableprefix, $sourcefile) {}

    function assignAvatar(&$Db_object, &$databasetype, &$tableprefix, $userid, $avatarid) {}

    function zuul($dana) {}{ return "There is no importers only impex"; }
}
