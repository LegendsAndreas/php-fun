<?php
# REMEMBER TO BUILD-IN PREVIEW FROM HERE!
$books = [
    [
        "name" => "Do",
        "year" => "2019",
        "author" => "You",
        "pU" => "Sleep"
    ],
    [
        "name" => "Gay",
        "year" => "1990",
        "author" => "Actor",
        "pU" => "Michael"
    ],
    [
        "name"=> "Fuck",
        "year" => "1951",
        "author" =>"In The",
        "pU"=>"Ass"
    ]
];

function filter($items, $fn)
{
    $filteredItems = [];


    foreach ($items as $item) {
        if ($fn($item)) {
            $filteredItems[] = $item;
        }
    }
    /* The simple way. You fucking philistine.
    foreach ($items as $item) {
        if ($item["year"] <= 2001) {
            $filteredItems[] = $item;
        }
    }*/

    return $filteredItems;
}

# php actually has exact type of function: array_filter.
$filteredBooks = filter($books, function ($book) {
    return $book["year"] > 1950 && $book["year"] < 2020;
});

require "index.view.php";