<?php
require_once 'Toolkit.php';

class MyToolkit extends Toolkit
{
    public static function getCoords($address)
    {
        if(!$address){
            return false;
        }
        $address = preg_replace("/ /i", "%20", "Санкт-Петербург" . ',' . $address);
        $data = file_get_contents("https://geocode-maps.yandex.ru/1.x/?format=json&apikey=7d016377-6281-4e64-8d2a-3818621fec78&geocode=" . $address);
        $json = json_decode($data);
        $coords = $json -> response -> GeoObjectCollection -> featureMember[0] -> GeoObject -> Point -> pos;
        list($result['lat'], $result['lng']) = explode(" ", $coords);
        return $result;
    }
}