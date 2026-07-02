<?php
    //NumericArray
    $numeric = array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
    print_r($numeric);
    echo $numeric . "<br>";

    //AssociativeArray
    $assosiative = array(
        "Jan" => 31,
        "Feb" => 28,
        "Mar" => 31,
        "Apr" => 30,
        "May" => 31,
        "Jun" => 30,
        "Jul" => 31,
        "Aug" => 31,
        "Sep" => 30,
        "Oct" => 31,
        "Nov" => 30,
        "Dec" => 31
    );
    print_r($assosiative);

    echo $assosiative . "<br>";

    //MultidimensionalArray
    $multi = array(
        $laptops = array(
            "Dell" => array(
                "Inspiron",
                25000
            ),
            "HP" => array(
                "Pavilion",
                30000
            ),
            "Lenovo" => array(
                "ThinkPad",
                35000
            )
        )
    );
    print_r($multi);
?>