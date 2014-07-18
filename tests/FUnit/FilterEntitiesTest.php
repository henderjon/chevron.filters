<?php

require_once "vendor/autoload.php";

use \Chevron\Filters\FilterEntities;

FUnit::test("FilterEntities::filter()", function(){
    $data     = "This is a <bad>data string</bad>";
    $expected = "This is a &lt;bad&gt;data string&lt;/bad&gt;";

    // scalar
    $filter = new FilterEntities;
    $filtered = $filter->filter($data);
    FUnit::equal($filtered, $expected);
});

FUnit::test("FilterEntities::filterArray()", function(){
    $data = array(
        "string" => "This is a <bad>data string</bad>",
    );
    $expected = array(
        "string" => "This is a &lt;bad&gt;data string&lt;/bad&gt;",
    );

    // array
    $filter = new FilterEntities;
    $filtered = $filter->filterArray($data);
    FUnit::equal($filtered, $expected);
});

FUnit::test("FilterEntities::filterArray() recursive", function(){
    $data = array(
        "This is a <bad>data string</bad>",
        "array" => array(
            "string" => "This <bad>is a data string</bad>",
            "array" => array(
                "string" => "This is a <bad>data string</bad>",
            ),
        ),
    );

    $expected = array(
        "This is a &lt;bad&gt;data string&lt;/bad&gt;",
        "array" => array(
            "string" => "This &lt;bad&gt;is a data string&lt;/bad&gt;",
            "array" => array(
                "string" => "This is a &lt;bad&gt;data string&lt;/bad&gt;",
            ),
        ),
    );

    // recursive array
    $filter = new FilterEntities;
    $filtered = $filter->filterArray($data);
    FUnit::equal($filtered, $expected);
});
