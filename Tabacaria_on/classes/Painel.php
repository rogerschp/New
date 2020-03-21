<?php

    class Painel
    {

        public static function logado(){
            return isset($_SESSION['login']) ? true : false; //Para manter login por sessao
        }

    }

?>