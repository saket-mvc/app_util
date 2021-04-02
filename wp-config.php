<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'k68s42347180731' );

/** MySQL database username */
define( 'DB_USER', 'k68s42347180731' );

/** MySQL database password */
define( 'DB_PASSWORD', 'uK.l*Oj!d6' );

/** MySQL hostname */
define( 'DB_HOST', 'k68s42347180731.db.42347180.762.hostedresource.net:3312' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gefr3ztaqcklouqx7zpi1ua2vplwwaly3tsmmzxnlwsjprsslih2cmgyn1nyof3s' );
define( 'SECURE_AUTH_KEY',  'd9yxyxmn1ymaaptwroz35t2nkaq6eo3xetpwaht9opcvr4rkfswfbp8uo0fq32hj' );
define( 'LOGGED_IN_KEY',    'hpb8uxz477rgfqqkhrj2xxbjlwr31hhm7uonij6ywsosimufi4eww0lpx6g7kuxc' );
define( 'NONCE_KEY',        'u6zwkzycjq2wspmjivsew2ztilmivp2zbyqhjm2zu3gjmhm4z85nsvbuxnuthi4g' );
define( 'AUTH_SALT',        'clofjhbjkd8wxihgtlnlmboz6umoq0pffezbwbvnqrwvz1bycy6jctsj8rf6sbr6' );
define( 'SECURE_AUTH_SALT', 'qpgphncwrwkjjekzzwa1pckgphraf1l4df4dxxfvv3nqmownqescfazpd6mfo6wv' );
define( 'LOGGED_IN_SALT',   't5nutzcpr5rrfzwy7x377ys53jbcybgksxywekfl9r00t6ytg4vwaf8mc4szi9am' );
define( 'NONCE_SALT',       'ljpncifj06et8wwawijbbsx4sstnjztvuukb5c7hbwj7kjmghonltdlb9tzpbolx' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpkn_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
