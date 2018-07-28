<?php

  namespace App;

  /**
   * Text
   * @author Adzkar Fauzie <adzkarfauzie02@gmail.com>
   */
  class Text
  {
    public function randomText() {
      $char = rand(10000,100000000);
      $char .= "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz~!@#$%^&*()-_=+[]{}\|.:;?<>";
      $random = substr(str_shuffle($char),0,10);
      return $random;
    }
  }
