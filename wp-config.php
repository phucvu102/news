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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'news_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'vertrigo' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define( 'SAVEQUERIES', true );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'vi*@5hgnH}0fQXVe!+Y3Q:2d~BUEw!2hnpsdCKP(nf9Ai_LZf?OwWjOpWP+K7Yzm' );
define( 'SECURE_AUTH_KEY',  '4KB b?(#VEIS}Iwq?SI]]#Tsy_Vp[KA:W#:9-fG`Q}y}}n[2:UMoYoH,v8:W9i^3' );
define( 'LOGGED_IN_KEY',    'PJTv*o<WP8Y4W$r75V3x,^5R,/1H7!kY;DCf^DlI7e;[59SiZyBzU#}7K&Ay}Z-v' );
define( 'NONCE_KEY',        'H%/72b^3NDbpuG%Ycmhsa.U9!GC^pB_fv]D*6-EGHoOJh::HL&/8|nhiiB[GVDsU' );
define( 'AUTH_SALT',        ';MRRP(0I~6;3M)Ph@g>v2ckv$7pf@JSB0oUe:x{5}e%NZ8asP<N_wdZFW^K+^HVP' );
define( 'SECURE_AUTH_SALT', 'yOletomM,H/_1i#`j%!vO0%uAVijwKrT]AKW<x3_ }M-/fh@&~|Xz ~d%k_+EY=B' );
define( 'LOGGED_IN_SALT',   '4VZZa=c;zPdK_x=>r&!)LAFG#=Zu^$3Ae+-3rk+`?yNdqi]A0J4>6Bidk!egT{;{' );
define( 'NONCE_SALT',       'c)C1/0FBl#7(^!#9kQ?lD13BoGi,8mt]G9Ooh.nSfQ;yl;#pBLaE-V6)x5?*m@{]' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
