<?php
function G($param){
  return $_GET[$param];
}
function P($param){
  return $_POST[$param];
}
function sql($paramr){
   return htmlspecialchars($param);
}