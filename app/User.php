<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 15-12-24
 * Time: 上午10:05
 */
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\UserTrait;

class User extends Eloquent implements UserInterface {
    use UserTrait;

    protected $table = 'users';
    protected $hidden = array('password', 'remember_token');
    protected $guard = array('email', 'password');
}