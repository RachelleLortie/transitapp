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
define('DB_NAME', 'transit');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'eLnh}&T !UYl9v#aS7(Hu={5s[n-?_N2Jb)18k:FjRajrU*7?>!EPNeW8VbRFz!;');
define('SECURE_AUTH_KEY',  'R Ef=S]B5of;M07|i`[HciguGii`,.<wsfi1m cya!ptS$?*C/):*kV|wZ*27*bD');
define('LOGGED_IN_KEY',    '+n%_!MsF17g3m(z[8|<(+=LJ$oSz^!0FZCkd<b0)eg35oZSR)J`0ElK417h$r./&');
define('NONCE_KEY',        'K:ZB%MS7-6;|1+Af~%rvHu{ErE&UDmkrxA5V8zQAaascQs|Fz^Y(ksnR,p65G1qK');
define('AUTH_SALT',        '@3n.LE.KV(l|ds){Saxz|#<ueHi1*PYxLc?#jtu](kXvFOWgHJdmIS!CiqU-/,ED');
define('SECURE_AUTH_SALT', 'ZjiMX{5&UuU!f+WG3jRi5,gX Ad3=Df4OKJ4y<`mw=Q7,%CJ4+%t}%<gE%!WSOS[');
define('LOGGED_IN_SALT',   '/#9GfH*3b@xC|@[gKU,Lx;KMu>PS0`/i<ic?D0uBwru-w$Q0Wk:]Q9CD[e):T`6@');
define('NONCE_SALT',       '1,-v04rf33mS>]gbH@wuAq-Ssp-/T=hE--}-TddB.6G*S*e_S&r4Z3dC+ N+=Aeb');

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
