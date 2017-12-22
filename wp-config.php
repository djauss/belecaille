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
define('DB_NAME', 'belecailledb');

/** MySQL database username */
define('DB_USER', 'belecailleuser');

/** MySQL database password */
define('DB_PASSWORD', 'niannian');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'VknLTK*]Vd4O%j-LZg>>!^MtU=_!6.0c/1oL95=2d(&x.ES1g*Wjc!>]6sv6#ENC');
define('SECURE_AUTH_KEY',  '0G a@W<6/!rmgvqWH;ej%iIn|u)3njtEs}@pbdp2h<{VG`=[AixcIC?HJS[^>#j3');
define('LOGGED_IN_KEY',    '}JD958kPD6Aryj=,q1+J H~}wZ%>#{(n_8Zad_)>#(._qsCtwyLU XHfLcPAzGa.');
define('NONCE_KEY',        'WS:4z`%NV.2v@;9u9HJDr!ew5mc,!ES)|eyRRCjmZj4N?LU gCbGVTCqS%3I=fiR');
define('AUTH_SALT',        ']f&&|-ysprRNO--V?X0gTCPFW0fZ^Zx}2gd._ I$Q~bA){F$N~q>3,6~j:e(V?Q+');
define('SECURE_AUTH_SALT', '5)A?4|HzNd_S-fO6K#r3xJ(xLjBR,7:FR}wzJt./Ox/-=vq^G;j1Ox&>[Hj4~e$`');
define('LOGGED_IN_SALT',   '!U2`XK><(8QK.;@(DZH_Yw`t@Fp;/]M{O?<ei;ZZEoi%][0wV<X+p@An0W8VCGuo');
define('NONCE_SALT',       'p9_!8`PTb{J12LNR?<+Y=RvnK=PBOp%mdI6vqDT|#yYBG(u+4(mGjxiwEqxQCT/[');

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
define('WP_ALLOW_REPAIR', true);

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
