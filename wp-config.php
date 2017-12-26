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
define('DB_NAME', 'hindtuts');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '[p/%(<wS-SX $ MRY[N%]acwu5$tv:Bc}zw|lq3@u3/lOOhWOMf%%]R!cQkBG`!d');
define('SECURE_AUTH_KEY',  'U(}o; !cp)L.)*E^--P%tfG%N@N-h?o_x4m-b0Ny.d&<nqvCTXHGt<Nvq(:,Pzj{');
define('LOGGED_IN_KEY',    'mX%%t269%IxF:_=NJ6k329K@@K1fC9-z~Vd@XB}`Ib|,u2v? o3p4=Ey+~+HK-Aq');
define('NONCE_KEY',        'Qs&G$IFNSb3)E:{rK<Q&CWn8)w?Jd}C0<5:b=c6dfp<9ba7Emwd6br44tRS?y~c+');
define('AUTH_SALT',        'ju.ZePEDl?o{%baW!vuoV>$8LK[.L bb[^wHF=4*kqSxIW &J-Ce>82uPw<4nCmj');
define('SECURE_AUTH_SALT', '^w9P?F=}{-mJqKhi.7t5;0af@-h5,.hKcG6R!~iXG6DinE]sP3fT^GvIs71b~pSH');
define('LOGGED_IN_SALT',   '*WYqXx&42)d #A~uM;0vl3ayqHo:z{D8$l{^cQ(jHpetMS|0)xUdl:RnWpYX]KwY');
define('NONCE_SALT',       'M ?O<Ar6;GXFPw:8^xW][_@_G~OS*=EGrHngpy2NGR,Dm8FxWk[&}7/1Y@#Ty/nf');

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
