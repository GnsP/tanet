<?php

namespace tanet {
  class User {
    public static function registerNewUser ($params) {
      $salt = Util::generateSalt();
      $password = $params['password'];
      $pass_hash = hashfn($salt.$password);
      $permissions = 'BASIC_USER';

      $user = new DB\User();
      $user->setSalt($salt);
      $user->setPasswordHash($pass_hash);
      $user->setPermissions($permissions);
      $user->save();

      $teacher = new DB\Teacher();
      $teacher->setName($params['name']);
      $teacher->setContactPerson($params['contact']);

    }

    public static function getUserById ($userId) {
    }
  }
}
