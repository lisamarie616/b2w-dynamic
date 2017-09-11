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
define('DB_NAME', 'bootstrap2wordpress');

/** MySQL database username */
define('DB_USER', 'bootman');

/** MySQL database password */
define('DB_PASSWORD', '8Wk1C8E5w5jInIdm');

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
define('AUTH_KEY',         'BGvP6[`qk|%ZSr_s-Ck Q[I7-C0}Z(_pxk9Z:4?EJ+:cV)cxOAyMQ#@B>RQ(Nb(m');
define('SECURE_AUTH_KEY',  'zA+eT2z-hLU?<Ub|4,)3CdGX4g,eNC&2dX1y8?Qzw8O+0- LVCuTSF9VM]L<!]iV');
define('LOGGED_IN_KEY',    '%Mbg/iRNEV`nv2K>Cav{(Y{UOgrrW3Z))+o?FpIhEp&S?*vqqC=|-.Vg`W:%vAGb');
define('NONCE_KEY',        '#S4*~VOX[?%y.IVJ/GILpLC+,`@nV1D&SB;+i0qnikrD=f-@EY/tdFsoPe >!S7{');
define('AUTH_SALT',        ':je!-BX9r}nH>2Bb8^8}4@-i[W+)27>.tdF-[%HJg;tU-|V%{]JUnNHf50}cWj%Y');
define('SECURE_AUTH_SALT', '+EDgU8jl8su}Hj:E| ;U;Q+f{aJD0`NH;vy{=)L-DhPCY+r!h+QNLLd_y-G?Ca0W');
define('LOGGED_IN_SALT',   '7t06:qoop_ug+U45&>R]oEO?#*9&YmqbtLm-o{-u!H:#?E;_,Hu*Ow)?Zk=JZUcv');
define('NONCE_SALT',       'lPK{$Z,es08.;8?KM|{vz$ALUQ:p9GO^tGmt-P$A<!My%@@L_/$VK#t3d3S+bKg}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dbbs_';

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
