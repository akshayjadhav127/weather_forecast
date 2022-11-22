## MyWeather | Weather Forecast Application | Akshay Jadhav

Video Demo: https://youtu.be/WThWqB5hHzk
A weather forecast application that allows users to search a city's weather and save their favorite cities. The application performs API calls to a third party resource to fetch for weather data.
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

## Third Party API limitation

OpenWeatherMap API only support up to 60 calls within an hour. If you see an error in the website, this could mean that you have reached the limitation of API calls.

## Database MySQL

To use this feature, you must import a database that is located in `users.sql`.

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

## Features

Ability to login by individual user.
Ability to search weather forecast for various cities in the world.  

## How to use

-Then run the feature by opening [http://localhost:8081/]
-Open index.php file [http://localhost:8081/index.php]
-Register your user - name, username, email, password.
-Cant register with existing username.
-Login your user with id and password
-Search city for getting weather forecast for various cities in the world.
-logout button.

## Referance of previous project

https://github.com/kammybdeng/weather_flask_webapp