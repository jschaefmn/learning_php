<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Arrays</title>
</head>
<body>
  <?php
    // ! Create an array
    // * $fruits = array("Apple", "Banana", "Cherry");

    // ? Can also write an array like so:
    // * $fruits = ["Apple", "Banana", "Cherry"];

    // ! Assign another value to the array
    // * $fruits[] = "Orange";

    // ! Replace a value at a specific index
    // * $fruits[1] = "Orange";

    // ! built in function to remove a value
    // ? Will create an error, because the array is now indexed at 0, *blank*, 2
    // * unset($fruits[1]);
    // * echo $fruits[1];

    // ! Use array_splice instead
    // ? array_splice takes first argument of what array you want to splice, second argument of the index you want to start at, and third argument of how many elements you want to remove
    // * array_splice($fruits, 0, 1);
    // * echo $fruits[1];

    // TODO: ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

    // ! array keys
    // $tasks = [
    //   "laundry" => "Daniel",
    //   "trash" => "Frida",
    //   "vacuum" => "Basse",
    //   "dishes" => "Bella"
    // ];

    // ! this only prints one "key" at a time
    // * echo $tasks["laundry"];

    // ! this prints all keys
    // * print_r($tasks);
    // ? This will print: Array ( [laundry] => Daniel [trash] => Frida [vacuum] => Basse [dishes] => Bella )

    // ! built-in function, count
    // * echo count($tasks);
    // ? This will print: 4 in the browser

    // ! built-in function, sort
    // * sort($tasks);
    // * print_r($tasks);
    // ? Prints the array sorted alphabetically by the keys
    // ? Array ( [0] => Basse [1] => Bella [2] => Daniel [3] => Frida )
    // ? Only works with indexed arrays

    // ! built-in function, push (only works with indexed arrays)
    // * $fruits = ["Apple", "Banana", "Cherry"];
    // * array_push($fruits, "Mango");
    // * print_r($fruits);

    // ! assign new value to an array in a associative array using the tasks array
    // * $tasks["dusting"] = "Tara";
    // * print_r($tasks);

    // ! built-in function, array_splice
    // * $fruits = ["Apple", "Banana", "Cherry"];
    // ? splice arguments are: array, index to start at, how many elements to remove, what to replace it with
    // ? can specify 0 for the third argument to not remove any elements
    // * array_splice($fruits, 2, 0, "Mango");
    // * print_r($fruits);

    // ! using array_splice to insert another array into an array
    // * $fruits = ["Apple", "Banana", "Cherry"];
    // * $test = ["Mango", "Strawberry"];
    // ? tells array_splice to start at index 2, remove 0 elements, and insert the $test array
    // * array_splice($fruits, 2, 0, $test);
    // * print_r($fruits);

    // TODO ~~~~~~~~~~~~~~~~~ Multi-dimensional Arrays~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~
    // ? Multi-dimensional arrays are arrays within arrays

    // ! create a multi-dimensional indexed array 
    // $food = [
      // ? "replaces" one index with another array
      // array("Apple", "Mango"), 
      // "Banana", 
      // "Cherry"];
    // ? when calling a multi-dimensional array, specify index of the array, then the index of the "sub-array"
    // ? this will print "Mango"
    // * echo $food[0][1];

    // ! create a multi-dimensional associative array
    //* $food = [
    //*  "fruits" => array("apple", "banana", "cherry"),
    //*  "meat" => array("chicken", "fish"),
    //*  "vegetables" => array("cucumber", "carrot")
    //* ];

    // ? to call a multi-dimensional associative array, specify the name index of the array, then the index of the "sub-array"
    // * echo $food["vegetables"][0];
  ?>
</body>
</html>