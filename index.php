<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

const MESSAGES_PATH = __DIR__ . '/messages.json';

require_once __DIR__ . "/ServerArrayAccessTrait.php";
require_once __DIR__ . "/MutableServerArrayTrait.php";
require_once __DIR__ . "/Session.php";
require_once __DIR__ . "/Cookie.php";
require_once __DIR__ . "/MessagesStorage.php";
require_once __DIR__ . "/Post.php";
require_once __DIR__ . "/src/Controllers/LoginController.php";
require_once __DIR__ . "/src/Controllers/ChatController.php";
require_once __DIR__ . "/src/Core/View.php";
require_once __DIR__ . "/src/Core/Router.php";


$router = new Router();
$router->runRouter();







