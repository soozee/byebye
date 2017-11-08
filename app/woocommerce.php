<?php

namespace App;

/**
 * WooCommerce Support
 * Taken from https://github.com/roots/sage/pull/1923/files
 * This seems to break the product page.
 */
// add_filter('woocommerce_template_loader_files', function ($search_files, $default_file) {
//     return filter_templates(array_merge($search_files, [$default_file, 'woocommerce']));
// }, 100, 2);

// add_filter('woocommerce_locate_template', function ($template, $template_name, $template_path) {
//     $theme_template = locate_template("{$template_path}{$template_name}");

//     return $theme_template ? template_path($theme_template) : $template;
// }, 100, 3);

// add_filter('wc_get_template_part', function ($template, $slug, $name) {
//     $theme_template = locate_template(["woocommerce/{$slug}-{$name}", "woocommerce/${name}"]);

//     return $theme_template ? template_path($theme_template) : $template;
// }, 100, 3);

// add_action('woocommerce_get_price_html', function($price, $product) {
//     $discount = preg_match("/<del>(.*?)<\/del>/", $price);
//     $originalPrice = preg_match("/<ins>(.*?)<\/ins>/", $price);

//     if ($discount && $originalPrice) {
//         return "<ins>$price</ins> <del>$discount</del>";
//     }

//     return $price;
// },  100, 2 );
