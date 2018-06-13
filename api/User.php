<?php

namespace tanet {
  class User {
    public static function registerNewUser ($params) {
      $salt = Util::generateSalt();
			$phone = $params['phone'];
			$name = $params['name'];

      $password = $params['password'];
      $pass_hash = hash('sha256', $salt.$password);
      $permissions = 'BASIC_USER';
			$activation_status = 0;
			$current_activation_key = Util::generateOTP();

      try {
				$user = new DB\User();
				$user->setSalt($salt);
				$user->setPasswordHash($pass_hash);
				$user->setPermissions($permissions);
				$user->setUserName($name.$phone);
				$user->setPrimaryPhone($salt);
				$user->setActivationStatus($activation_status);
				$user->setCurrentActivationKey($current_activation_key);
        $user->save();

        return $current_activation_key;
      }
      catch (Exception $e) {
        return 'failure';
      }

    }

    public static function getUserById ($userId) {
    }
  }
}
