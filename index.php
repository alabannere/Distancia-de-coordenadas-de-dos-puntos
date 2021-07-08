<?php

    function DitanceCoords($lat1, $long1, $lat2, $long2){

        $earth = 6371; //km

        //Punto 1 (coordenadas)
        $lat1 = deg2rad($lat1);
        $long1= deg2rad($long1);

        //Punto 2 (coordenadas)
        $lat2 = deg2rad($lat2);
        $long2= deg2rad($long2);

        //Formula Haversine 
        $dlong=$long2-$long1;
        $dlat=$lat2-$lat1;

        $sinlat=sin($dlat/2);
        $sinlong=sin($dlong/2);

        $a=($sinlat*$sinlat)+cos($lat1)*cos($lat2)*($sinlong*$sinlong);

        $c=2*asin(min(1,sqrt($a)));

        if ($earth*$c*1000 > 1000) {
          return round($earth*$c) . " Km";
        }else{
          return round($earth*$c* 1000 ) . " Mts";

        }

    }

?>
