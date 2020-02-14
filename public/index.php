<?php
// mostrar errores
ini_set('display_errors', 1);
ini_set('display_starup_error', 1);
error_reporting(E_ALL);


require_once "../vendor/autoload.php";
session_start();

$dotenv = Dotenv\Dotenv::create(__DIR__ . "/..");
$dotenv->load();


use Illuminate\Database\Capsule\Manager as Capsule;
use Aura\Router\RouterContainer;

$capsule = new Capsule;

$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => getenv('DB_HOST'),
    'database'  => getenv('DB_NAME'),
    'username'  => getenv('DB_USER'),
    'password'  => getenv('DB_PASS'),
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

// Make this Capsule instance available globally via static methods... (optional)
$capsule->setAsGlobal();
// Setup the Eloquent ORM... (optional; unless you've used setEventDispatcher())
$capsule->bootEloquent();

// solucionar peticiones
$request = Zend\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
);


// routes definition
$ORI_PATH = "/php-platzi";
$routerContainer = new RouterContainer();
$map = $routerContainer->getMap();
$map->get("index", "/", [
    "controller" => "App\Controllers\IndexController",
    "action" => "indexAccion"]);

    
$map->get("addJobs", "/jobs/add", [
    "controller" => "App\Controllers\JobsController",
    "action" => "viewAddJobAction",
    "auth" => true]);

$map->post("saveJobs", "/jobs/add", [
        "controller" => "App\Controllers\JobsController",
        "action" => "viewAddJobAction",
        "auth" => true]);

//users
$map->get("addUsers", "/users/add", [
    "controller" => "App\Controllers\UsersController",
    "action" => "viewAddUser",
    "auth" => true]);

$map->post("saveUsers", "/users/add", [
    "controller" => "App\Controllers\UsersController",
    "action" => "saveUser",
    "auth" => true]);

//login
$map->get("loginForm", "/login", [
    "controller" => "App\Controllers\AuthController",
    "action" => "viewLogin"]);

$map->post("auth", "/auth", [
    "controller" => "App\Controllers\AuthController",
    "action" => "AuthLogin"]);

//Admin
$map->get("admin", "/admin", [
    "controller" => "App\Controllers\AdminController",
    "action" => "indexAdmin",
    "auth" => true
    ]);

//logout
$map->get("logout", "/logout", [
        "controller" => "App\Controllers\AuthController",
        "action" => "Logout",
        "auth" => true
]);
    

    

$matcher = $routerContainer->getMatcher();
$route = $matcher->match($request);


function printElement($job) {
    // if($job->visible == false) {
    //   return;
    // }
  }

if(!$route){
    echo 'route not found';
}else{
    $handlerData = $route->handler;
    $controllerName = $handlerData['controller'];
    $actionName = $handlerData['action'];
    $needsAuth = $handlerData['auth'] ?? false;

    $sessionUserId = $_SESSION['userId'] ?? null;
    if($needsAuth && !$sessionUserId){
        echo "protected route";
        die;
    }

    $controller = new $controllerName;
    $response = $controller->$actionName($request);

    foreach($response->getHeaders() as $name => $values){
        foreach($values as $value){
            header(sprintf("%s: %s", $name, $value), false);
        }
    }
    http_response_code($response->getStatusCode());
    echo $response->getBody();

    // var_dump($route->handler);
    // require $route->handler;
}
// $route = $_GET['route'] ?? '/';

// if($route == '/'){
//     require '../index.php';
// }elseif ($route == 'add_job'){
//     require '../add_job.php';
// }



