<?php
/**
 * Servers configuration
 */
$i = 0;

/**
 * Server #1
 */
$i++;
$cfg['Servers'][$i]['verbose'] = 'drupal7';
$cfg['Servers'][$i]['port'] = '3310';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'admin123';

/**
 * Server #2
 */
$i++;
$cfg['Servers'][$i]['verbose'] = 'wp';
$cfg['Servers'][$i]['port'] = '3312';
$cfg['Servers'][$i]['user'] = 'root';
$cfg['Servers'][$i]['password'] = 'admin123';

/* Add common configuration */
foreach ($cfg['Servers'] as $key => $server) {
  /* Authentication type */
  $cfg['Servers'][$key]['auth_type'] = 'config';
  /* Server parameters */
  $cfg['Servers'][$key]['host'] = '192.168.64.100';
  $cfg['Servers'][$i]['connect_type'] = 'tcp';
  $cfg['Servers'][$i]['compress'] = false;
}
