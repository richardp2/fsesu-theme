<?php
    define('IN_FSW', true);
    $fs_root = './../';
    $page = 'Members Area';
   
    require_once( $fs_root . 'inc/common.php' );
   
    $body = file_get_contents( $fs_root . 'members/index_body.htm' );
      
    $tpl =  $fs_root . 'template/default.tpl';
    include_once( $fs_root . 'inc/template.php' );
    print $html;
?>