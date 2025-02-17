<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'admin';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['admin/validate-login'] = "admin/validate_login_details";

// routes for admin menus
$route['admin/dashboard'] = "admin/dashboard_view";
$route['admin/categories'] = "category/list_categories";
$route['admin/brands'] = "brand/list_brands";
$route['admin/products'] = "product/list_products";
$route['admin/orders'] = "order/lists_orders";
$route['admin/reports']= "report/report_dashboard";
$route['admin/profile-settings'] = "settings/profile_settings";
$route['admin/currency-settings'] = "settings/currency_settings";
$route['admin/product-image-settings'] = "settings/product_image_settings";
$route['admin/footer-settings'] = "settings/footer_settings";
