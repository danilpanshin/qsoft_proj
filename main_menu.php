<?php

$arrayMenu = [
    [
        "title" => "contacts",
        "sort" => 4,
        "path" => "route/contacts"
    ],
    [
        "title" => "about_us",
        "sort" => 2,
        "path" => "route/about_us"
    ],
    [
        "title" => "your_profile",
        "sort" => 3,
        "path" => "route/your_profile"
    ],
    [
        "title" => "new_page",
        "sort" => 1,
        "path" => "route/new_page"
    ],
    [
        "title" => "home",
        "sort" => 5,
        "path" => "route/home"
    ],  

];

function array_sort($array, $key = "sort", $sort = "asc") {
    usort($array, function ($item1, $item2) use ($key, $sort) {
        return $sort == "desc" ? $item1[$key] <=> $item2[$key] : $item2[$key] <=> $item1[$key];
    });
    return $array;
}




//print_r(array_sort($arrayMenu, "sort", "desc"));
