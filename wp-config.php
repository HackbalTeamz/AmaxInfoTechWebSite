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
define( 'DB_NAME', 'illuminatiweb_maxdb' );

/** Database username */
define( 'DB_USER', 'illuminatiweb_maxuser' );

/** Database password */
define( 'DB_PASSWORD', 'MbH?;6ftkogO' );

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
define( 'AUTH_KEY',         'F+DDP,ID5N_`>%?CUCjt<9Wf#j5UQ04eP%(`S2-2ly_Ynt6-il&@A[e5q^p<F~YR' );
define( 'SECURE_AUTH_KEY',  '0p09,|rQC u~wH5=pGawUS@$tJ-_CVAg;m)KZS/Rs|uM:+b?uw2|qy9Ke#P@%e4N' );
define( 'LOGGED_IN_KEY',    'I=FdXQy|#(ACEr]1vm{neDzf@jz&Q.>rJj9en=crn(SZy2bWzZnIYN:>9.~a78NZ' );
define( 'NONCE_KEY',        '?;ZIu6WD:x@^[[wrY8?b60Os;Im,`r,b-NElw!Zpeh]~@(%=}^k*GJkL@F$F?HnB' );
define( 'AUTH_SALT',        'FJ)f[p&Y-TJ{|o5*;V-}MOm~52<?A?Uv uNS!okVNZ5U@9?hPs^sJ.8X?Pde@gQ>' );
define( 'SECURE_AUTH_SALT', '4QquR[?,zGR=NpS@SY4]|xqRt9;o6UiqCV3N4|a,m|Idg3U@s/K6X5.q*I.uOI=r' );
define( 'LOGGED_IN_SALT',   '0D86z#xRF5{tdLj)gH;,WUpt<EaE}>dpdr@X R*F($(/>*bUH[)CS3]<C@5<(beh' );
define( 'NONCE_SALT',       'ysw)3,Nixk+8 /JN.z`KT0Pnd7ls%2O2*|JS!o,]YD[A~&2;{;cB&ttV~d65+!U*' );

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
