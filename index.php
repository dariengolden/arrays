<?php

// $fruit1 = "Apple";
// $fruit2 = "Banana";
// $fruit3 = "Grapes";
// $fruit4 = "Mango";
// 
// $fruits = ["Apple", "Banana", "Grapes", "Mango", "Orange"];

//indexed arrays
// associative arrays
// multidmenzional arrays

// indexed arrats (numerical index start from 0);

// echo $fruits[0];
// $fruits[] = "Orange";

// associative arrays - keys
// $student = [
// 	"name" => "Rindra",
// 	"id" => 1030,
// 	"nationality" => "Malagasy",
// 	"department" => "IT",
// 	"gender" => "M",
// ];
// 
// echo $student["department"];
// 
// $students = [
// 	["Alice", 21, "Indonesian"],
// 	["Bob", 19, "French"],
// 	["Charlie", 23, "Vietnamese"],
// ];
// 
// for ($i = 0; $i <= count($students); $i++) {
// 	echo $students[$i] . "<br>";
// }

// foreach
//
// foreach ($students as $key => $value) {
// 	echo $key . " : " . $value . "<br>";
// }

/*
count() : return the number of the elements
array_push() : add one or more elements to the end of an array
array_pop() : remove the last element of an array
array_shift() : remove the first element of an array
array_unshift() : add one or more elements to the beginning of an array
in_array() : check if a value exists in an array
array_merge() : merge one or more arrays
array_keys() : return all the keys of an array
array_values() : return all the values of an array
sort() : sort an array in ascending order
rsort() : sort an array in descending order
asort() : sort an associative array in ascending order, according to the value
ksort() : sort an associative array in ascending order, according to the key
*/

//supportedscalar types
////int, float, string, bool

// $a = 0;

// function addTwoNumbers(int $a, float $b): int
// {
// 	return $a + $b;
// }
// 
// function greetings(string $name): string
// {
// 	return "Hello " . $name;
// }

// php forms

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
	<title></title>
	<link rel="stylesheet" href="css/main.css" />
	<link rel="icon" href="images/favicon.png" />
</head>

<body>
	<form>
		<div class="mb-3">
			<label for="name" class="form-label">name</label>
			<input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
		</div>
		<div class="mb-3">
			<label for="address" class="form-label">Address</label>
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>

</html>
