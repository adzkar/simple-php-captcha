<?php

  namespace App;

  class Session
  {

    private $captcha;

    function __construct()
    {
      session_start();
    }

    public function setCaptcha($param)
    {
      $this->captcha = $param;
      $_SESSION['captcha'] = $this->captcha;
    }

    public function checkCaptcha($param)
    {
      return $this->captcha === $param;
    }

  }
