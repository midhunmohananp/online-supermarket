<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('get_user_name()'))
{
  function get_user_name()
  {
    $CI =& get_instance();
    $user_ID =$CI->session->userdata['bsw_log']['user_ID'];
    $CI->load->model('user_m');
    $result = $CI->user_m->user_name($user_ID);
    return $result;
  }
  function get_shop_id()
  {
    $CI =& get_instance();
    $user_ID =$CI->session->userdata['bsw_log']['user_ID'];
    $CI->load->model('user_m');
    $result = $CI->user_m->user($user_ID);
    return $result->shop_ID;
  }
}