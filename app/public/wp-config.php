<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2RdQOWhr/nr4r/KsOVbn0HvaML4n83wfj0HbkPVaK1+AvzT6uFVHyQ+SlTxK6NpUkR3uQqlG8qqHUO6/t0FRJw==');
define('SECURE_AUTH_KEY',  '55dTpXFLeUI6Ntswp1T8/PDHtT+09pcYkepPaAU7hTy/oIsnmATygQUvixxEUjaq20nWaOYnK+xgv2eEU4SzLQ==');
define('LOGGED_IN_KEY',    'cik/KGuzrxPBLFSJ3VmfV4boLHQHBR7168gekOjA7a/Em0jOj5WA841czASXEZynso3nRUGg5hIS4Gt1EDulYQ==');
define('NONCE_KEY',        'MPHtSArjs1LdafvscL2C278EHm6dtru6FQDLGYBAcpuQOL5yjKtUzWdw62V5V4pl5sGeMHpUemImu5kVQir+nw==');
define('AUTH_SALT',        '6lLyCfR3To65HPKS3Zk/PGuPNDYFNC8aH6430IkQ0yYOwYNMZqFwWKF5xXZsKqD1h6ZrLJh5PIQQtbM2JC0I9g==');
define('SECURE_AUTH_SALT', '82KbpZCnhF4RLwkpN7KUmgHT6vRNgBre76KK7vPCAVDbJl/gF7xbLqKY5H/y4Um8AY6B5vWccl5Rt0r1lphKBw==');
define('LOGGED_IN_SALT',   'E4XlVybh8o1TOvmRzJKNAxkqsCoj2ndH3FWOaXxxDcaWCBh3oNyrtLSvJq80pgDTNOJ4S5kTVPCIwSzKyGMotg==');
define('NONCE_SALT',       'vWBp6PdCA06P5KNiJTdAHbCmziWq3ATGzO2vjmYOwL4VfZii+YdQk8sF1DTh30/Y1aeM33K0PYM0jYCkVdWL5g==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
