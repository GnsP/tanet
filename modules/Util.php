<?php

namespace tanet {
  class Util {
    public static function generateSalt($length = 16) {
    	$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    	$charactersLength = strlen($characters);
    	$randomString = '';
    	for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, $charactersLength - 1)];
    	}
    	return $randomString;
		}

    public static function generateOTP () {
      return '1234';
    }
  }
}
