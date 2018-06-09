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
define('DB_NAME', 'hotel');

/** MySQL database username */
define('DB_USER', 'hotel');

/** MySQL database password */
define('DB_PASSWORD', 'Pollete22');

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
define('AUTH_KEY',         'ty(Fnny)dYpIU}jD,:>#GDhhg>:u*AH)^}y|JCx]!O;__;7b%|#0g,Z&gQbs$hRq');
define('SECURE_AUTH_KEY',  'LAa`qvk7x03eGDjS[oC,Tf6t<G=m|(t!Yi1]5.Y(U_9^v<K!tXI!HC>m~m[hCw[!');
define('LOGGED_IN_KEY',    '-gP%{?-4.ohc)o(6bV:yt:YQ]|@D |3Wh7ZwBEp)-aZxP~hiM3AGh5&K*l[y@Z)R');
define('NONCE_KEY',        '%rQ?~_@<`OOl?Ngo5/)Azd={wvj<lL_[469h2_)oRC`#p99AMNh:N~~|6bS#8<rz');
define('AUTH_SALT',        'B)n48 -nPEka!b#npY@!nSM%/9BtA{}<H_IQC:/Us_4F:pmh-sm~n>[?FrdfO6US');
define('SECURE_AUTH_SALT', 'P|6^GgHnZ:iQ oYG(=!!|!z6`Yy%5F53fcId|~v Ne{6dY$vC85f:*l-*DnT4u+_');
define('LOGGED_IN_SALT',   '-+qM,WPihXrN6T-7: ,JfDO^UB8(-Y|zs* )(f[[^E./u%6GpjWUJQ?f^4vn96.C');
define('NONCE_SALT',       'xw@#|yEZa{&[:;XXY#V~Lor}Lk;|5&1R+;Ux55^`&jItroOLiOmUti%B]p>t_RR8');

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
