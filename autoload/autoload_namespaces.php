<?php

// autoload_namespaces.php @generated by Composer

$library_path=implode(
  '/',
  array(
    DRUPAL_ROOT,
    drupal_get_path('profile', 'dkan'),
    'libraries',
    'json-schema',
    'src',
    'JsonSchema',
    'symfonyserializer'
  )
);

$vendorDir = $library_path;
$baseDir = $vendorDir;

return array(
    'JsonSchema' => array($vendorDir),
);
