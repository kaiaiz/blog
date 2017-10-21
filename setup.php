<?php
include_once('libs/autoPath.php');
include_once(SMARTY_PATH.'Smarty.class.php');
class Smarty_Guest extends Smarty
{
    function __construct()
    {
          parent::__construct();
          $this->setTemplateDir(GUEST.'templates/');
          $this->setCompileDir(GUEST.'templates/');
          $this->setCacheDir(GUEST.'cache/');
          $this->caching = Smarty::CACHING_LIFETIME_CURRENT;
    }
}
