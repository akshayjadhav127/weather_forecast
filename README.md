Weather forcast application - MyWeather
Application in PHP, CSS, HTML, JavaScript, MySQL.

## Getting weather data

generate your personal api link from below link
https://openweathermap.org/

Register on above site and get your api for using this application

Next, you must link this api in `script.js`.

```
let weather = {
  apiKey: "Place your API key here",
  fetchWeather: function (city) {
    fetch(
      "https://api.openweathermap.org/data/2.5/weather?q="
       + city 
       + "&units=metric&appid=" 
       + this.apiKey
```

Place your api key>      

## Database

To use this feature, you must import a database that is located in `database / users.sql`.

Next, you must link this feature to the database earlier.  You have to make settings in the `config.php` file.

```
<?php

$db_host = "localhost";
$db_user = "localhost";
$db_pass = "password";
$db_name = "users";

try {    
    //create PDO connection 
    $db = new PDO("mysql:host=$db_host;dbname=$db_name", $db_user, $db_pass);
} catch(PDOException $e) {
    //show error
    die("Something went wrong: " . $e->getMessage());
}
```

Replace `$ db_host`, `$ db_user`, `$ db_pass`, and `$ db_name` with the ones you use.

## How to use

Then run the feature by opening [http://localhost:8081/](http://localhost:80/)
open index.php file [http://localhost:8081/index.php]
click on register>
register your user>
login your user with id and password>
search city opetion>
logout button>