<?php

session_start();


class SessionCart
{
    public $name;

    public function  __construct($new_name)
    {
        $this->name = $new_name;

        $_SESSION[$this->name] = array();
    }

    public function SetAmount($id, $amount) {
        $_SESSION[$this->name][$id] = $amount;

        if($amount <= 0) {
            unset($_SESSION[$this->name][$id]);
        }
    }

    public function Items() {
        return $_SESSION[$this->name];
    }

    public function Items_Json() {
        return json_encode($_SESSION[$this->name]);
    }


    public function Destroy() {
        unset($_SESSION[$this->name]);
    }

}