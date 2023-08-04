<?php

require_once __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/');
$dotenv->load();

define('DATABASE_NAME', $_ENV['DATABASE_NAME'] ?? "");
define('DATABASE_USERNAME', $_ENV['DATABASE_USERNAME'] ?? "");
define('DATABASE_PASSWORD', $_ENV['DATABASE_PASSWORD'] ?? "");
define('DATABASE_HOST', $_ENV['DATABASE_HOST'] ?? "");
define('DATABASE_CHARSET', $_ENV['DATABASE_CHARSET'] ?? "");
define('ENABLED_DEBUG_MODE', $_ENV['ENABLED_DEBUG_MODE'] ?? "false");
define('_2C2P_HOST', $_ENV['_2C2P_HOST'] ?? "");
define('_2C2P_MERCHANT_ID', $_ENV['_2C2P_MERCHANT_ID'] ?? "");
define('_2C2P_SECRET_AUTH_KEY', $_ENV['_2C2P_SECRET_AUTH_KEY'] ?? "");
define('_2C2P_SECRET_SHA_KEY', $_ENV['_2C2P_SECRET_SHA_KEY'] ?? "");
define('_2C2P_REDIRECT_BACKEND_URL', $_ENV['_2C2P_REDIRECT_BACKEND_URL'] ?? "");
define('_2C2P_REDIRECT_FRONTEND_URL', $_ENV['_2C2P_REDIRECT_FRONTEND_URL'] ?? "");
define('ENABLED_REDIRECT_CHECKOUT_PAYMENT_URL', $_ENV['ENABLED_REDIRECT_CHECKOUT_PAYMENT_URL']);
define('VIRTUAL_SANDBOX_CUSTOMER_NAME', $_ENV['VIRTUAL_SANDBOX_CUSTOMER_NAME'] ?? "");
define('VIRTUAL_SANDBOX_CUSTOMER_EMAIL', $_ENV['VIRTUAL_SANDBOX_CUSTOMER_EMAIL'] ?? "");
define('VIRTUAL_SANDBOX_CUSTOMER_PHONE', $_ENV['VIRTUAL_SANDBOX_CUSTOMER_PHONE'] ?? "");
define('VIRTUAL_SANDBOX_PRODUCT_ID', intval($_ENV['VIRTUAL_SANDBOX_PRODUCT_ID'] ?? 0));
define('VIRTUAL_SANDBOX_PRODUCT_NAME', $_ENV['VIRTUAL_SANDBOX_PRODUCT_NAME'] ?? "");
define('VIRTUAL_SANDBOX_OFFER_ID', intval($_ENV['VIRTUAL_SANDBOX_OFFER_ID'] ?? 0));
define('VIRTUAL_SANDBOX_PROVINCE_NAME', $_ENV['VIRTUAL_SANDBOX_PROVINCE_NAME'] ?? "");
define('VIRTUAL_SANDBOX_DISTRICT_NAME', $_ENV['VIRTUAL_SANDBOX_DISTRICT_NAME'] ?? "");
define('VIRTUAL_SANDBOX_WARD_NAME', $_ENV['VIRTUAL_SANDBOX_WARD_NAME'] ?? "");
define('VIRTUAL_SANDBOX_SHIPPING_ADDRESS', $_ENV['VIRTUAL_SANDBOX_SHIPPING_ADDRESS'] ?? "");
define('VIRTUAL_SANDBOX_PROVINCE_ID', intval($_ENV['VIRTUAL_SANDBOX_PROVINCE_ID'] ?? 0));
define('VIRTUAL_SANDBOX_DISTRICT_ID', intval($_ENV['VIRTUAL_SANDBOX_DISTRICT_ID'] ?? 0));
define('VIRTUAL_SANDBOX_WARD_ID', intval($_ENV['VIRTUAL_SANDBOX_WARD_ID'] ?? 0));
define('VIRTUAL_SANDBOX_ENABLED_GENERATE_CLICK_ID', $_ENV['VIRTUAL_SANDBOX_ENABLED_GENERATE_CLICK_ID'] ?? "");
define('VIRTUAL_SANDBOX_LINK', $_ENV['VIRTUAL_SANDBOX_LINK'] ?? "");
?>