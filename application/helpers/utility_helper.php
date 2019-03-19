<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    if ( ! function_exists('assets_url()'))
    {
      function assets_url()
      {
         return base_url().'assets/';
      }
    }
    if ( ! function_exists('createslug()'))
    {
      function createslug($content)
      {
        $slug = url_title($content, 'dash', TRUE);
        return $slug;
      }
    }
    if ( ! function_exists('title()'))
    {
      function title()
      {
        $title = 'British Suits';
        return $title;
      }
    }

    
  