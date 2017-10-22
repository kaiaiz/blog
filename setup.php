<?php
include_once('libs/autoPath.php');
include_once(SMARTY_PATH.'Smarty.class.php');
class Smarty_Guest extends Smarty
{
    function __construct()
    {
          parent::__construct();
          $this->setTemplateDir(GUEST_PATH.'templates/');
          $this->setCompileDir(GUEST_PATH.'templates/');
          $this->setCacheDir(GUEST_PATH.'cache/');
          $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    }
}
