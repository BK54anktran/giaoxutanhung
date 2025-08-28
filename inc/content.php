<?php
function h($v){ return htmlspecialchars((string)$v, ENT_QUOTES|ENT_SUBSTITUTE, 'UTF-8'); }

function get_all_posts(){
  static $cache = null;
  if ($cache !== null) return $cache;

  $path = __DIR__ . '/../data/baiviet.json';
  $raw  = @file_get_contents($path);
  $arr  = json_decode($raw ?: '[]', true);
  if (!is_array($arr)) $arr = [];

  // sắp mới nhất lên đầu theo published_at
  usort($arr, function($a,$b){
    return strcmp($b['published_at'] ?? '', $a['published_at'] ?? '');
  });
  return $cache = $arr;
}

function get_post($slug){
  foreach (get_all_posts() as $p){
    if (($p['slug'] ?? '') === $slug) return $p;
  }
  return null;
}
