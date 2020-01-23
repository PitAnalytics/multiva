<?php

    class Config{

        public static function getUrl(){

            $configJson=file_get_contents('../app/config/config.json');
            $configArray=json_decode($configJson);

            $url = $configArray->url;

            return $url;
            
        }

    }



?>