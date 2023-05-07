<?php

    function gen_char(){
        $all_char =[];
        for ($i = 0; $i < 256; $i++) {
            $all_char[$i] = chr($i);
        }
        return $all_char;
    }
    function gen_password($pass_len){
        $all_char = gen_char();
        $password = "";

        for ($i = 0; $i<$pass_len; $i++){
            $random_number = mt_rand(48, 122);
            $password .= $all_char[$random_number];
        }

        return $password;
    }