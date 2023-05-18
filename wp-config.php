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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Dental_clinic' );

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
define( 'AUTH_KEY',         'zKzx{j?g,rD-;&ClGYx{f?9+D!XDJl1^NTjV;KVY| }mBP#RvjjQ(rVxvVRv_~bN' );
define( 'SECURE_AUTH_KEY',  '`ishs*d}dU6IAlbD3ve}V.~$Y>hgAZ{z8)TRaR>KH|OV w?=T#>OO9WpsA>_w-%~' );
define( 'LOGGED_IN_KEY',    'g;l2AD7hdkUAJ,oR7iY5P_n7[ER-CeYD_X#>e=;4F@l%G<h#.NUqgXYeS@MT6h<2' );
define( 'NONCE_KEY',        '<FK&2F48lR^I?CuYHyf9ziv2=St1eVi=Q8FPKlPI)#~{uSHK7eBt#B9y5K+0u)6?' );
define( 'AUTH_SALT',        'C~KVE);4U(AuZ p Rcpc/ywaMYZgCJDL1/E>l0K367MKUj)c7KX+q#T$/|]pNXJ(' );
define( 'SECURE_AUTH_SALT', 'TfVnMhE@DAL:5/[ENk)ux=t8ZYecYadYcHX*X2;t..}q_.bHdW.<=3@@-DI_uawS' );
define( 'LOGGED_IN_SALT',   'p|O3K!.(f1#o))!MuJ1^93nLwG}T>-tABV8oM`VbwHLnF4=3@/IGbtShWM+-4R)v' );
define( 'NONCE_SALT',       'I~Qa*:KmYbq{e4/a&.o&b*tdaq$dDpu g*5wZk<]a-6|Y#orpJkKC1orFb4!,Dn8' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
