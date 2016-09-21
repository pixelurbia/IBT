<?php 
 
/*
Plugin Name: Download Manager
Plugin URI: http://www.wpdownloadmanager.com/purchases/
Description: Manage, Protect and Track File Downloads from your WordPress site
Author: Shaon
Version: 4.2.2
Author URI: http://www.wpdownloadmanager.com/
*/



if(!isset($_SESSION))
@session_start();
        
include(dirname(__FILE__) . "/wpdm-functions.php");
include(dirname(__FILE__)."/libs/class.logs.php");
include(dirname(__FILE__)."/libs/class.pagination.php");
include(dirname(__FILE__)."/libs/class.WPDM_Crypt.php");
include(dirname(__FILE__)."/libs/class.CategoryHandler.php");
include(dirname(__FILE__)."/libs/class.Messages.php");
include(dirname(__FILE__)."/libs/class.ShortCodes.php");
include(dirname(__FILE__)."/libs/class.ApplySettings.php");

define('WPDM_Version','4.2.2');

$d = str_replace('\\','/',WP_CONTENT_DIR);

define('WPDM_BASE_DIR',dirname(__FILE__).'/');  
define('WPDM_BASE_URL',plugins_url('/download-manager/'));

define('UPLOAD_DIR',$d.'/uploads/download-manager-files/');  

define('WPDM_CACHE_DIR',dirname(__FILE__).'/cache/');  

define('_DEL_DIR',$d.'/uploads/download-manager-files');  

define('UPLOAD_BASE',$d.'/uploads/');  

ini_set('upload_tmp_dir',UPLOAD_DIR.'/cache/');


if(!$_POST)    $_SESSION['download'] = 0;

function wpdm_load_textdomain()
{
    load_plugin_textdomain('wpdmpro', WP_PLUGIN_URL . "/download-manager/languages/", 'download-manager/languages/');
}

function wpdm_pro_Install(){
    global $wpdb;
      
      delete_option('wpdm_latest');  

      $sqls[] = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}ahm_download_stats` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `pid` int(11) NOT NULL,
              `uid` int(11) NOT NULL,
              `oid` varchar(100) NOT NULL,
              `year` int(4) NOT NULL,
              `month` int(2) NOT NULL,
              `day` int(2) NOT NULL,
              `timestamp` int(11) NOT NULL,
              `ip` varchar(20) NOT NULL,
              PRIMARY KEY (`id`)
            )";

      $sqls[] = "CREATE TABLE IF NOT EXISTS `{$wpdb->prefix}ahm_emails` (
              `id` int(11) NOT NULL AUTO_INCREMENT,
              `email` varchar(255) NOT NULL,
              `pid` int(11) NOT NULL,
              `date` int(11) NOT NULL,
              `custom_data` text NOT NULL,
              `request_status` INT( 1 ) NOT NULL,
              PRIMARY KEY (`id`)
            )";

      
      require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
      foreach($sqls as $sql){
      $wpdb->query($sql);
      //dbDelta($sql);
      }


   if(get_option('_wpdm_etpl')==''){
          update_option('_wpdm_etpl',array('title'=>'Your download link','body'=>file_get_contents(dirname(__FILE__).'/templates/wpdm-email-lock-template.html')));
   }
   
   wpdm_common_actions(); 
   flush_rewrite_rules();
   CreateDir();

       
}

include(dirname(__FILE__)."/wpdm-core.php");


register_activation_hook(__FILE__,'wpdm_pro_Install');
 
//if(!is_admin()){



/** native upload code **/
function plu_admin_enqueue() {     
    wp_enqueue_script('plupload-all');    
    wp_enqueue_style('plupload-all');    
}




// handle uploaded file here
function wpdm_check_upload(){
  check_ajax_referer('photo-upload');
  if(file_exists(UPLOAD_DIR.$_FILES['async-upload']['name']) && get_option('__wpdm_overwrrite_file',0)==1){
      @unlink(UPLOAD_DIR.$_FILES['async-upload']['name']);
  }
  if(file_exists(UPLOAD_DIR.$_FILES['async-upload']['name']))
  $filename = time().'wpdm_'.$_FILES['async-upload']['name'];
  else
  $filename = $_FILES['async-upload']['name'];  
  move_uploaded_file($_FILES['async-upload']['tmp_name'],UPLOAD_DIR.$filename);
  //@unlink($status['file']);
  echo $filename;
  exit;
}


// handle uploaded file here
function wpdm_frontend_file_upload(){

    global $current_user;

    $currentAccess = maybe_unserialize(get_option( '__wpdm_front_end_access', array()));
    // Check if user is authorized to upload file from front-end
    if(!is_user_logged_in() || !array_intersect($currentAccess, $current_user->roles) ) die('Error!');

  check_ajax_referer('frontend-file-upload');
  if(file_exists(UPLOAD_DIR.$_FILES['async-upload']['name']) && get_option('__wpdm_overwrite_file_frontend',0)==1){
      @unlink(UPLOAD_DIR.$_FILES['async-upload']['name']);
  }
  if(file_exists(UPLOAD_DIR.$_FILES['async-upload']['name']))
  $filename = time().'wpdm_'.$_FILES['async-upload']['name'];
  else
  $filename = $_FILES['async-upload']['name'];
  move_uploaded_file($_FILES['async-upload']['tmp_name'],UPLOAD_DIR.$filename);
  //@unlink($status['file']);
  echo $filename;
  exit;
}

/**
 * @deprecated No use anymore from v4.2.1
 */
function wpdm_upload_icon(){
    return;
  if(!current_user_can('manage_options')) return;
  check_ajax_referer('icon-upload');
  $ext = explode(".", $_FILES['icon-async-upload']['name']);
    $ext = end($ext);
  if(!in_array($ext, array('png','jpg','jpeg','icon','svg'))) return;
  if(file_exists(dirname(__FILE__).'/file-type-icons/'.$_FILES['icon-async-upload']['name']))
  $filename = time().'wpdm_'.$_FILES['icon-async-upload']['name'];  
  else
  $filename = $_FILES['icon-async-upload']['name'];  
  move_uploaded_file($_FILES['icon-async-upload']['tmp_name'],dirname(__FILE__).'/file-type-icons/'.$filename);
  $data = array('rpath'=>"download-manager/file-type-icons/$filename",'fid'=>md5("download-manager/file-type-icons/$filename"),'url'=>plugins_url("download-manager/file-type-icons/$filename"));
  header('HTTP/1.0 200 OK');
  header("Content-type: application/json");    
  echo json_encode($data);
  exit;
}

function wpdm_welcome(){
    remove_submenu_page( 'index.php', 'wpdm-welcome' );
    include(WPDM_BASE_DIR.'tpls/wpdm-welcome.php');
}

function fmmenu(){
    $access_level = 'manage_options';
    add_submenu_page( 'edit.php?post_type=wpdmpro', __('Bulk Import &lsaquo; Download Manager',"wpdmpro"), __('Bulk Import',"wpdmpro"), $access_level, 'importable-files', 'ImportFiles');
    add_submenu_page( 'edit.php?post_type=wpdmpro', __('Templates &lsaquo; Download Manager',"wpdmpro"), __('Templates',"wpdmpro"), $access_level, 'templates', 'LinkTemplates');
    add_submenu_page( 'edit.php?post_type=wpdmpro', __('Subscribers &lsaquo; Download Manager',"wpdmpro"), __('Subscribers',"wpdmpro"), $access_level, 'emails', 'wpdm_emails');
    add_submenu_page( 'edit.php?post_type=wpdmpro', __('Stats &lsaquo; Download Manager',"wpdmpro"), __('Stats',"wpdmpro"), $access_level, 'wpdm-stats', 'Stats');
    add_submenu_page( 'edit.php?post_type=wpdmpro', __('Add-Ons &lsaquo; Download Manager',"wpdmpro"), __('Add-Ons',"wpdmpro"), $access_level, 'wpdm-addons', 'wpdm_addonslist');
    add_submenu_page( 'edit.php?post_type=wpdmpro', __('Settings &lsaquo; Download Manager',"wpdmpro"), __('Settings',"wpdmpro"), $access_level, 'settings', 'FMSettings');
    add_dashboard_page('Welcome', 'Welcome', 'read', 'wpdm-welcome', 'wpdm_welcome');
     
    }


function wpdm_skip_ngg_resource_manager($r){
    return false;
}

function wpdm_welcome_redirect($plugin)
{
    if($plugin=='download-manager/download-manager.php') {
        wp_redirect(admin_url('index.php?page=wpdm-welcome'));
        die();
    }
}