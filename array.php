<?php
$cities = ["Tokyo","Mexico City","New York City","Mumbai","Seoul","Shanghai","Lagos","Buenos Aires","Cairo","London"];
foreach ($cities as $city){
    echo $city;

    if ($city !== end($cities)){
        echo ",";
    }
}