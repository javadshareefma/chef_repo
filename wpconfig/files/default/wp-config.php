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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpressPassword');

/** MySQL hostname */
define('DB_HOST', 'wordpresstest.c5jvx50yvxvg.us-east-1.rds.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'd)[!hRLY;4YV=7V%-A`J}7w!,qKyjKHntLF,2u%|q5+$ftOvWBoA=I/`!&A>n<Sa');
define('SECURE_AUTH_KEY',  'C,776-$MUfU:(r=Nd+^>@FD3:s&S;%ucB@tXWA/-1OzJb;cS]}0kE=jq|^|/5755');
define('LOGGED_IN_KEY',    'lKa HNR=JN3A+@5=y!B5RwR+0&0t8cb)F]J:6*R-`eM8-H.T-@w c;L!K=M.A@B-');
define('NONCE_KEY',        'lL*ge,c=aw3jk96+!yo?c@K<sK)R[ir_6K+|FFA48]DPk%N+.WQ[cgKBsem#4y,b');
define('AUTH_SALT',        '3-W^q?BryzcAym.N^<P?@:IxOuQdTi9>NPde!%`Gb{tF%GaiB2bO2^H~gwJ$Yz:)');
define('SECURE_AUTH_SALT', '|l{FQ`PTR(k_hZ.Xz0GJeuhG:+F4V}13~:Yb,OD8+isehT]w:*}IA#$<_qP1PWl>');
define('LOGGED_IN_SALT',   'h+W.8!sl8nD,LXRDm~g7FIH]2mK-CH :f2)Y+*3BbAax|p[^Xe|V$<Zis`Yyr!8x');
define('NONCE_SALT',       'nUu!.(Nrf7Qx]Q0X&NGzxs4}5mqJKDDWYc>XVXN1A=R>|<u@zyL1+nNF|qCwb48;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


