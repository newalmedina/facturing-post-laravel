<?php

namespace App\Services;

use App\Models\User;

class UserCheckLoginPass
{
    protected $login;
    protected $id_user;

    public function __construct($id_user = 0, $login = '')
    {
        $this->login = $login;
        $this->id_user = $id_user;
    }

    public function existUserLoginService()
    {
        $retorno = "NOK";

        if ($this->id_user != 0) {
            if (!User::existUserLogin($this->login, $this->id_user)) {
                $retorno = "OK";
            }
        } else {
            if (!User::existUserLogin($this->login)) {
                $retorno = "OK";
            }
        }

        return $retorno;
    }

    public function generatePassword($length = 9, $add_dashes = false, $available_sets = 'lud')
    {
        $sets = array();
        if (strpos($available_sets, 'l') !== false) {
            $sets[] = 'abcdefghjkmnpqrstuvwxyz';
        }
        if (strpos($available_sets, 'u') !== false) {
            $sets[] = 'ABCDEFGHJKMNPQRSTUVWXYZ';
        }
        if (strpos($available_sets, 'd') !== false) {
            $sets[] = '23456789';
        }
        if (strpos($available_sets, 's') !== false) {
            $sets[] = '!@#$%&*?';
        }

        $all = '';
        $password = '';
        foreach ($sets as $set) {
            $password .= $set[array_rand(str_split($set))];
            $all .= $set;
        }

        $all = str_split($all);
        for ($i = 0; $i < $length - count($sets); $i++) {
            $password .= $all[array_rand($all)];
        }

        $password = str_shuffle($password);

        if (!$add_dashes) {
            return $password;
        }

        $dash_len = intval(floor(sqrt($length)));
        $dash_str = '';
        while (strlen($password) > $dash_len) {
            $dash_str .= substr($password, 0, $dash_len) . '-';
            $password = substr($password, $dash_len);
        }
        $dash_str .= $password;

        return $dash_str;
    }
}
