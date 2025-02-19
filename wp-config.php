<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hospital_mgt' );

/** Database username */
define( 'DB_USER', 'lizHosp' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'L:#2LWHK>Z_ 8jW)2_~eRqX(1h#KI#CvK7%p-kd)]Z]wH<>[*l;X^f.eO.?Ta:?6' );
define( 'SECURE_AUTH_KEY',  'wuZowt[<yQ-7O,%(DVwcDk)q4Z9(.KSvc~W/IXlU.eYSOhHzs>LLb}~Q *=4] [j' );
define( 'LOGGED_IN_KEY',    'I*OE$?Lj.)mv%q A9*4#:,t`,/afD`heu=MOFN}@dL 8!P1^r?)N6b}5`7LJ/HUI' );
define( 'NONCE_KEY',        'r( <f|:wofdKp{[w)>uU-mnNcj>;r~q|a0k2rcN--2=F~#hOYUJy^-`&pM0y5!wT' );
define( 'AUTH_SALT',        'Tho^a(b>S6vzw%M+gcF)Zo;{co]H$Q%+M5L0me5?}8zyMG%VoE(k ek{>/+:A&W-' );
define( 'SECURE_AUTH_SALT', 'RJ1snlv]^U3j(U-J8E(LKabQHj2dvJa}x8w+_$/XxV-(HFJ=FiM^pJmL/5~1/g.;' );
define( 'LOGGED_IN_SALT',   'F9MrZ<Ok V+1n?@t$B}#)Dt.)j>AWPi`rDw.S?R_v^QdnR3y|[SFV YeAfVm?z8R' );
define( 'NONCE_SALT',       'l&`wKi>N.46[&xf[&@vJ4M-=;CQ.m/R;?V[ETkW8>X?SCHp>Jx`J-4@j*eqd*}{]' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
