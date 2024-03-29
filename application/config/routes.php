<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'Login';
// Login Section
$route['logout'] = 'Login/logout';
$route['login'] = 'Login/login';
$route['login-check'] = 'Login/login_check';
//After Login
$route['dashboard'] = 'Home/dashboard';
//Shop
$route['shop-add'] = 'Shop/add';
$route['shop-insert'] = 'Shop/insert';
$route['shop-edit/(:any)'] = 'Shop/edit/$1';
$route['shop-update/(:any)'] = 'Shop/update/$1';
$route['shop-delete'] = 'Shop/delete';
$route['shop-listing'] = 'Shop/listing';
//Category
$route['category-add'] = 'Category/add';
$route['category-insert'] = 'Category/insert';
$route['category-edit/(:any)'] = 'Category/edit/$1';
$route['category-update/(:any)'] = 'Category/update/$1';
$route['category-delete'] = 'Category/delete';
$route['category-listing'] = 'Category/listing';
//Brand
$route['brand-add'] = 'Brand/add';
$route['brand-insert'] = 'Brand/insert';
$route['brand-edit/(:any)'] = 'Brand/edit/$1';
$route['brand-update/(:any)'] = 'Brand/update/$1';
$route['brand-delete'] = 'Brand/delete';
$route['brand-listing'] = 'Brand/listing';
//Tax
$route['tax-add'] = 'Tax/add';
$route['tax-insert'] = 'Tax/insert';
$route['tax-edit/(:any)'] = 'Tax/edit/$1';
$route['tax-update/(:any)'] = 'Tax/update/$1';
$route['tax-delete'] = 'Tax/delete';
$route['tax-listing'] = 'Tax/listing';
//Unit
$route['unit-add'] = 'Unit/add';
$route['unit-insert'] = 'Unit/insert';
$route['unit-edit/(:any)'] = 'Unit/edit/$1';
$route['unit-update/(:any)'] = 'Unit/update/$1';
$route['unit-delete'] = 'Unit/delete';
$route['unit-listing'] = 'Unit/listing';
//User
$route['user-add'] = 'User/add';
$route['user-insert'] = 'User/insert';
$route['user-edit/(:any)'] = 'User/edit/$1';
$route['user-update/(:any)'] = 'User/update/$1';
$route['user-delete'] = 'User/delete';
$route['user-listing'] = 'User/listing';
//Customer
$route['customer-add'] = 'Customer/add';
$route['customer-insert'] = 'Customer/insert';
$route['customer-edit/(:any)'] = 'Customer/edit/$1';
$route['customer-update/(:any)'] = 'Customer/update/$1';
$route['customer-delete'] = 'Customer/delete';
$route['customer-listing'] = 'Customer/listing';

//access
$route['access-grand'] = 'Access/grand';
$route['access-grand-insert'] = 'Access/access_grand_insert';
$route['access-add'] = 'Access/add';
$route['access-insert'] = 'Access/insert';
$route['access-edit/(:any)'] = 'Access/edit/$1';
$route['access-delete/(:any)'] = 'Access/delete/$1';
$route['access-listing'] = 'Access/listing';
//Product
$route['product-add'] = 'Product/add';
$route['product-insert'] = 'Product/insert';
$route['product-edit/(:any)'] = 'Product/edit/$1';
$route['product-update/(:any)'] = 'Product/update/$1';
$route['product-delete'] = 'Product/delete';
$route['product-listing'] = 'Product/listing';

//Purchase
$route['purchase-add'] = 'Purchase/add';
$route['purchase-insert'] = 'Purchase/insert';
$route['purchase-edit/(:any)'] = 'Purchase/edit/$1';
$route['purchase-update/(:any)'] = 'Purchase/update/$1';
$route['purchase-delete'] = 'Purchase/delete';
$route['purchase-listing'] = 'Purchase/listing';

//sale
$route['pos'] = 'Sale/new_sale';
$route['pos/save-sale'] = 'Sale/saveSale';
$route['pos/print-sale/(:any)'] = 'Sale/printSale/$1';

//reports
$route['sale-report'] = 'Report/sale';
$route['get-sale-report'] = 'Report/getSaleReport';
$route['get-product-report'] = 'Report/getProductReport';
$route['stock-report'] = 'Report/stock';
$route['get-stock-report'] = 'Report/getStockReport';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

// Ajax
$route['customer-name/search'] = 'Ajax/customerDetails';
$route['sale/products/search/(:any)'] = 'Ajax/productDetails/$1';

