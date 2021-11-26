<?php
$CONFIG = array (
  'htaccess.RewriteBase' => '/',
  'memcache.local' => '\\OC\\Memcache\\APCu',
  'apps_paths' => 
  array (
    0 => 
    array (
      'path' => '/var/www/html/apps',
      'url' => '/apps',
      'writable' => false,
    ),
    1 => 
    array (
      'path' => '/var/www/html/custom_apps',
      'url' => '/custom_apps',
      'writable' => true,
    ),
  ),
  'memcache.distributed' => '\\OC\\Memcache\\Redis',
  'memcache.locking' => '\\OC\\Memcache\\Redis',
  'redis' => 
  array (
    'host' => 'redis',
    'password' => '',
    'port' => 6379,
  ),
  'instanceid' => 'ocbr64d3k3tc',
  'passwordsalt' => '3X5NwrAvAvjLBgcHCSaiNbGrprVpej',
  'secret' => '/TlTk5p22ltvOyAwXJ91KswtYUYe6O62BFLK963PObsPG3XY',
  'trusted_domains' => 
  array (
    0 => 'localhost:3000',
    1 => '192.168.1.227',
  ),
  'datadirectory' => '/var/www/html/data',
  'dbtype' => 'pgsql',
  'version' => '22.2.3.0',
  'overwrite.cli.url' => 'http://localhost:3000',
  'dbname' => 'nextcloud',
  'dbhost' => 'db',
  'dbport' => '', 
  'dbtableprefix' => 'oc_',
  'dbuser' => 'oc_admin',
  'dbpassword' => 'gggjvt33f9h497638oo1km0kvwk4lm',
  'installed' => true,
);