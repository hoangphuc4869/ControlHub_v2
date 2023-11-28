<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'controlhub2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '1P^yli:|MZ1.65R{UF`>J/c[qY(pC{d&-(wvKa=>v+whlnAC1,#68>#$L`cRX]p6' );
define( 'SECURE_AUTH_KEY',  'i0Q$cIls$MdfZDP9IxKsOgOBhu7$Cw:TK3KU5uvrhDc:e.bB/N.KTC_K2Aq-e(8F' );
define( 'LOGGED_IN_KEY',    ')PE}4b6PSsT3E7X@U_Wf:NaVKhR)Y!X7?+sKYM3K)r`lwkIxp=n_gJ+5MKOgCQzR' );
define( 'NONCE_KEY',        'sdw$x+hV$gSp)UFj)H&_-~/e&0k.G7!?7<4C$gy1U%:5/_#0qI]ZeV!h,0YHzDRc' );
define( 'AUTH_SALT',        '!)1{RIw3k:ft#n>_6TU4j2rFY11bER#AIB9oQBRTbIT:,@2s=sp<jLm4{=qKRb0e' );
define( 'SECURE_AUTH_SALT', 'y2D^ZoM:p_NfDUVnBZBu&!};Z>kW3gm0o$R^M[.Z2h$za>_E,u0jo/wpDXR =bWI' );
define( 'LOGGED_IN_SALT',   '0~N1/HXR|FbU?eg7&j.D~M)Se^!c%vPfoC;9rBkITUm=$<<4I.la7 #f-/NJ,9?D' );
define( 'NONCE_SALT',       'xPrWBS9d=MdJ2Jz).|w{1/HV;~:C_qbO>YNY:B%OpWsJyg!@YJ_] mL<)0SZ@ojL' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
