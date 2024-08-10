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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'a;,9WE%HgO>zEioFjb:<+,S$x:`lw_k$^~Kmr,BJE`y#>3q_,jtbpTj](_S5bAI;' );
define( 'SECURE_AUTH_KEY',   'ly$n5vm%)j>eN3P,g=gVoan.|f%MJ1r(C%N$6xkhbHOx-a:$$:En0~fu/c^(ADrq' );
define( 'LOGGED_IN_KEY',     'j@y9(*.[~zkV j-n=U5w$TB#BE38C2emGi(Mf9=WeCwbQBwo//do^bMalnC5}K~#' );
define( 'NONCE_KEY',         'a&t]pTA)4LPfyk8?.jB>1,_DOsHy[QhUC49m|YP-6>WYn*w +<.?DFn|]zWgEe`)' );
define( 'AUTH_SALT',         '{WCv SR+hYsyk|_mv93{X}Al%H)zV<[RG3i<yZ<WFkWLuYBv} RU)hl6RA1,H4w`' );
define( 'SECURE_AUTH_SALT',  'O1&CI*$}0OLFiXGxV&L65=-ij}_,!%M# ZgRO&4Q&zQ,TjW:=B`E/Vyp*ClCA$h@' );
define( 'LOGGED_IN_SALT',    'Dtf]IxV7x*&k(sLqQUgiJxE[^%TcjMm_`WY;;KorIR~&6<Wv4c*C6:H_X+/]Vy3;' );
define( 'NONCE_SALT',        'gO?{;e5@Tc/{GW{!qdq?VJMhXPhTExd9R ;/1?*pjfYYh+D,:V|b[RLx&~}fGd.O' );
define( 'WP_CACHE_KEY_SALT', ',R(I5n*]qfoa%RoXYK=QXv?iCZak.w ozTA3`YrWSnA75&BP#!iv=D2KZQcR6`LG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
