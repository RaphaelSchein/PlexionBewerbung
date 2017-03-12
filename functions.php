<?php
/**
 * Created by PhpStorm.
 * User: Raphael
 * Date: 12.03.2017
 * Time: 14:55
 */

class functions{


    /**
     * @param string $val
     * @return bool
     */
    public function verfiySVariable($val){
        $val = $_SESSION[$val];
        if (!isset($val)){
            return false;
        }
        return true;
    }
    /**
     * @param string $val
     * @return bool
     */
    public function verfiyPVariable($val)
    {
        $val = $_POST[$val];
        if (!isset($val)) {
            return false;
        }
        return true;
    }

    }