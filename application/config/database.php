<?php  if ( ! defined('APP_PATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|   ['hostname'] The hostname of your database server.
|   ['username'] The username used to connect to the database
|   ['password'] The password used to connect to the database
|   ['database'] The name of the database you want to connect to
|   ['dbdriver'] The database type. ie: mysql.  Currently supported:
                 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|   ['dbprefix'] You can add an optional prefix, which will be added
|                to the table name when using the  Active Record class
|   ['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|   ['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|   ['cache_on'] TRUE/FALSE - Enables/disables query caching
|   ['cachedir'] The path to the folder where cache files should be stored
|   ['char_set'] The character set used in communicating with the database
|   ['dbcollat'] The character collation used in communicating with the database
|                NOTE: For MySQL and MySQLi databases, this setting is only used
|                as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|                (and in table creation queries made with DB Forge).
|                There is an incompatibility in PHP with mysql_real_escape_string() which
|                can make your site vulnerable to SQL injection if you are using a
|                multi-byte character set and are running versions lower than these.
|                Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|   ['swap_pre'] A default table prefix that should be swapped with the dbprefix
|   ['autoinit'] Whether or not to automatically initialize the database.
|   ['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|                           - good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'dbw';
$active_record = TRUE;

// $database['dbw']['hostname'] = '127.0.0.1';
// $database['dbw']['username'] = 'root';
// $database['dbw']['password'] = 'root';
// $database['dbw']['hostname'] = 'localhost';
$database['dbw']['hostname'] = '127.0.0.1';
$database['dbw']['username'] = 'dev';
$database['dbw']['password'] = 'QTT2A27zd46gvcB';
$database['dbw']['database'] = 'jingcai';
$database['dbw']['dbdriver'] = 'mysqli';
$database['dbw']['dbprefix'] = '';
$database['dbw']['pconnect'] = TRUE;
$database['dbw']['db_debug'] = TRUE;
$database['dbw']['cache_on'] = FALSE;
$database['dbw']['cachedir'] = '';
$database['dbw']['char_set'] = 'utf8';
$database['dbw']['dbcollat'] = 'utf8_general_ci';
$database['dbw']['swap_pre'] = '';
$database['dbw']['autoinit'] = TRUE;
$database['dbw']['stricton'] = FALSE;
$database['dbw']['port']    = 3306;

// $database['dbr']['hostname'] = '127.0.0.1';
// $database['dbr']['username'] = 'root';
// $database['dbr']['password'] = 'root';
// $database['dbr']['hostname'] = 'localhost';
$database['dbr']['hostname'] = '127.0.0.1';
$database['dbr']['username'] = 'dev';
$database['dbr']['password'] = 'QTT2A27zd46gvcB';
$database['dbr']['database'] = 'jingcai';
$database['dbr']['dbdriver'] = 'mysqli';
$database['dbr']['dbprefix'] = '';
$database['dbr']['pconnect'] = TRUE;
$database['dbr']['db_debug'] = TRUE;
$database['dbr']['cache_on'] = FALSE;
$database['dbr']['cachedir'] = '';
$database['dbr']['char_set'] = 'utf8';
$database['dbr']['dbcollat'] = 'utf8_general_ci';
$database['dbr']['swap_pre'] = '';
$database['dbr']['autoinit'] = TRUE;
$database['dbr']['stricton'] = FALSE;
$database['dbr']['port']    = 3306;


// $database['dbs']['hostname'] = '127.0.0.1';
// $database['dbs']['username'] = 'root';
// $database['dbs']['password'] = 'root';
// $database['dbs']['hostname'] = 'localhost';
$database['dbs']['hostname'] = '10.0.2.103';
$database['dbs']['username'] = 'dev';
$database['dbs']['password'] = 'QTT2A27zd46gvcB';
$database['dbs']['database'] = 'yey_setting';
$database['dbs']['dbdriver'] = 'mysqli';
$database['dbs']['dbprefix'] = '';
$database['dbs']['pconnect'] = TRUE;
$database['dbs']['db_debug'] = TRUE;
$database['dbs']['cache_on'] = FALSE;
$database['dbs']['cachedir'] = '';
$database['dbs']['char_set'] = 'utf8';
$database['dbs']['dbcollat'] = 'utf8_general_ci';
$database['dbs']['swap_pre'] = '';
$database['dbs']['autoinit'] = TRUE;
$database['dbs']['stricton'] = FALSE;
$database['dbs']['port']     = 3306;


// 统计数据库
$database['stat']['hostname'] = '10.0.2.103';
$database['stat']['username'] = 'dev';
$database['stat']['password'] = 'QTT2A27zd46gvcB';
$database['stat']['database'] = 'yey_stats';
$database['stat']['dbdriver'] = 'mysqli';
$database['stat']['dbprefix'] = '';
$database['stat']['pconnect'] = TRUE;
$database['stat']['db_debug'] = TRUE;
$database['stat']['cache_on'] = FALSE;
$database['stat']['cachedir'] = '';
$database['stat']['char_set'] = 'utf8';
$database['stat']['dbcollat'] = 'utf8_general_ci';
$database['stat']['swap_pre'] = '';
$database['stat']['autoinit'] = TRUE;
$database['stat']['stricton'] = FALSE;
$database['stat']['port']     = 3306;
/* End of file database.php */
/* Location: ./application/config/database.php */
