<?php

  require_once __DIR__.'/vendor/autoload.php';

  use App\Text;
  use App\TextToImage;
  use App\Session;
  $text = new Text;
  $img  = new TextToImage;
  $ses  = new Session;

  $ses->setCaptcha($text->randomText());
  $img->createImage($_SESSION['captcha']);
  $img->showImage();
