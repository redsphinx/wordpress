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
define('DB_NAME', 'redsphinx_nl');

/** MySQL database username */
define('DB_USER', 'redsphinx.nl');

/** MySQL database password */
define('DB_PASSWORD', 'safetymeeting');

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
define('AUTH_KEY',         'p,wy[Bz*`sb1QOFC#+b#QEWJrDN%HF74vK3An>l9@z#~3.2:zj:Q_-v(rUYh9coF');
define('SECURE_AUTH_KEY',  'xGMOvk=_[+(^rCFB#4#QEtCJP+|!i__]mW%U6+HySY1Qc7-+w)#wi<<9TV<+<t&t');
define('LOGGED_IN_KEY',    '|QgfUF+:/O>C$zQ^MfuV-D%6J+E@C.L!Pn~NRZNAg1Yj1CfQe<E(N@k+SGkGTn}A');
define('NONCE_KEY',        'bG#~^ajrM`(-SU(GQzFHDeN3pZzX?(|)DW80%/:uAG6A |ya)-tGJLk]wi-mcEac');
define('AUTH_SALT',        'O[&b{}AOP9pm+[Ud[Uhxb&.d[1|#%mpHq53:VY+vhwY(X|w}N ty7CJG:X2<sG~c');
define('SECURE_AUTH_SALT', '_1^L9Is>lLSe=[ @cEM1-WQ2H{uKf)l ZC8HFPyU?+_bTv!RV_MTQH|i`:48&qCL');
define('LOGGED_IN_SALT',   'MWX~m@n~w|R*0_qY[4jN7x$QT@ZGQ,ps0W:yiO3^,nPe0-;-5KSKvSs=gAnSnJx-');
define('NONCE_SALT',       ')r5`m-Bgbg6-#<A<=8oM?8fCS56cN^nr_$dG62sP~|6o-Zk0NsJub|kg(q:1i-_W');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpt_';

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
