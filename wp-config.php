<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'skill_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'xB*77%6@{,fB^~e4_Q-k1,-[1!4~Gddv&/fY}WRL-!P94Ln<1yW[|{rsB$f|2U_d');
define('SECURE_AUTH_KEY',  '75Su,YOB9E+Kh?-yba:B#$ x;tqJ%V3^ZkF|]F;q|ge{+s4B[Y:MjnMGjjxN2|4?');
define('LOGGED_IN_KEY',    'KNi{x.j+@cF-rw;Hl,,,Yh1[yjh K@noDDx -nmQ^=nK6LSYb~xP&.H4GZK-|mK7');
define('NONCE_KEY',        'Td?yP xRIHvC@:+]ofed=F)E#k|ECx1a-<U#qnQdnd`eC]aC^,xS2WvLrD:rBoaL');
define('AUTH_SALT',        '.q:0gEby&(FF+xiZ.Be2Vh#W+.MJ:?voV|A%^gR= Ig=(*,_slK#W!Vl&Q^6+G+%');
define('SECURE_AUTH_SALT', 'bE#<m44Wn#xARW{+nwY+jui^Mo|K+:IeuQW|Fp!W^UzGjcowM*`lWa#Y%*P|6Td/');
define('LOGGED_IN_SALT',   '4#2}MiVk6}uI8M[!u+asEcWOo)c+)m_T]V#mFyIdR9EXY^|Y,e0(,vgITs@U3R/u');
define('NONCE_SALT',       'mkib|Sp=Jm-h+5y}q$66^tK -8i5p#UT|Z]zGI)pn)T6hV$Ur^yKE0Wbo.+,L=K,');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
