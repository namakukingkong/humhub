<?php return array (
  'components' => 
  array (
    'urlManager' => 
    array (
      'urlFormat' => 'path',
      'showScriptName' => false,
    ),
    'db' => 
    array (
      'connectionString' => 'mysql:host=127.0.0.1;port= 8889;dbname=hum_hub_db',
      'username' => 'root',
      'password' => 'namakualam',
    ),
    'cache' => 
    array (
      'class' => 'CFileCache',
    ),
    'mail' => 
    array (
      'class' => 'ext.yii-mail.YiiMail',
      'transportType' => 'php',
      'viewPath' => 'application.views.mail',
      'logging' => true,
      'dryRun' => false,
    ),
  ),
  'params' => 
  array (
    'installer' => 
    array (
      'db' => 
      array (
        'installer_hostname' => '127.0.0.1',
        'installer_database' => 'hum_hub_db',
      ),
    ),
    'installed' => true,
  ),
  'name' => 'HumHub',
  'theme' => 'HumHub',
); ?>