<!DOCTYPE html>
<html>

<head>
    <title>Week 3&4 - PHP Conditionals</title>
    

<h2> Part 01</h2>
 
<!-- 01 -->
<!-- if time between 5AM - 9AM, animals should have breakfast -->
<!-- if time between 12PM - 2PM, animals should have lunch -->
<!-- if time between 7PM - 9PM, animals should have dinner -->
<?php

$time = date("H");

if ($time >= 5 && $time < 9) {
    echo "Animals should have breakfast.";

} elseif ($time >= 12 && $time < 14) {
    echo "Animals should have lunch.";

} elseif ($time >= 19 && $time < 21) {
    echo "Animals should have dinner.";

}
?>

<hr>
<h2>Part 02 - FizzBuzz Challenge</h2>

<!-- 02 -->
<!-- if number is divisible by 3, magic number is "Fizz" -->
<!-- if number is divisible by 5, magic number is "Buzz" -->
<!-- if number is divisible by both 3 and 5, magic number is "FizzBuzz" -->
<!-- if number is not divisible by 3 or 5, magic number is the number itself -->

<?php

$number = rand(1,1000);

if ($number %3 == 0 && $number %5 == 0) {
    echo "FizzBuzz";

} elseif ($number %3 == 0) { 
    echo "Fizz";

} elseif ($number %5 == 0) {
    echo "Buzz";

} else {
    echo $number;
}

?>

<hr>
<h2>Part 03 - Fetching User Data</h2>

<?php
// Function to fetch user data from the JSONPlaceholder API
function getUsers() {
$url = "https://jsonplaceholder.typicode.com/users";
$data = file_get_contents($url);
return json_decode($data, true);
}

// Get the list of users
$users = getUsers();

foreach ($users as $user) {
    echo "ID " . $user['id'] . "<br>";
    echo "Name: " . $user['name'] . "<br>";
    echo "Email: <a href='mailto:" . $user['email'] . "'>" . $user['email'] . "</a><br>";
    $address = $user["address"];
    echo "Street: " . $address['street'] . "<br>";
    echo "Suite: " . $address['suite'] . "<br>";
}

?>

</body>
</html>
