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
define('DB_NAME', 'jameelakapasi_staging');

/** MySQL database username */
define('DB_USER', 'jameelakapasi_staging');

/** MySQL database password */
define('DB_PASSWORD', 'wx{.t}Mk4aba');

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
define('AUTH_KEY',         '#y;%E6bYBX$E,~0)A:#F8lt)fWJ3gjYO)6!([wG1p$DJfEiiz*V!kJ` CdU~*:_)');
define('SECURE_AUTH_KEY',  '_3[Q_Sz2T7f_/heeM|42q-GpS^oo^,rma#+ogIu8~Z=p:8Ev}%W98:Te1dJ/g)dT');
define('LOGGED_IN_KEY',    '}VFcZ2nuK|2>-ESP{N{E3a&!24L12o*}_kwu7/eU+t[dy!FOVU(!4h_7}zk9V x;');
define('NONCE_KEY',        '-syOgOX}=Km?`<=#e%eGaBY9Odxz>M8.#1DO=TbIj~#_F:DL{!P4Wr4OIf~8e42 ');
define('AUTH_SALT',        '[`ZdVgu  }25Gg+0O^b5YQ:Yq$OXWpHmWNhLBc$a4dg5;w:q]|Q5#ELVV:IPa|+J');
define('SECURE_AUTH_SALT', '&(Y8JTcR5QUwSdKZ]jY2.+N}s .Jw-D8^_AeHO<9z$^r%?3QmN (5i,(%|J ~@X:');
define('LOGGED_IN_SALT',   '7@[L?H/v:l2;K>9^w3REY/1aSR| AJ<>_icFuUDFqom !gK;<jZlUT%z0(VXXpfz');
define('NONCE_SALT',       ']NK~/OJZ-^w6&h0e>!ms`h4 6FF^6O]]8 h&Eyd[e+V_z~}Hn2z,k2T_PHya/N*(');

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
define('WP_DEBUG', true); 

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
