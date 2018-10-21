1.there is no object literal in PHP


2.type casting the arrays to objects:

JS : 
[
    {name: "John", hobby: "hiking"},
    {name: "Jane", hobby: "dancing"}
]

PHP : 
$testArray = array(
    (object)array("name" => "John", "hobby" => "hiking"),
    (object)array("name" => "Jane", "hobby" => "dancing")
);
