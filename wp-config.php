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
define('DB_NAME', 'practica');

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
define('AUTH_KEY',         'nS8rPeby-b^IZn$aty*4NiO haaqfsWr1:v#TPMl>pkgNZ>K):#Jw0|pPh;wsOx=');
define('SECURE_AUTH_KEY',  ']y h#=&DCiyO$PR&ZYBa,D;;M[|G-jb&BK3#[CvnG`:V`55-.a@9X=5$ggbK:iDZ');
define('LOGGED_IN_KEY',    'WiB!8FUi)MJZmIy/ZPfA/8BW8(78]O;b/jJ8R?^OmDTsM2^CA~Fwpcg/)d;k8el^');
define('NONCE_KEY',        '(_OA34jyCj?RtN ht!oy!AZcU1w[uK>?%J-]5QF{Y^##C1PX}^V?mSW(4O4XEk:e');
define('AUTH_SALT',        '~#OIvVs~/<@;r64mM1!BkJv&eyb0u4z%J7zec:vD`-R{{e1?N!Ka`<b& 4N(;f@m');
define('SECURE_AUTH_SALT', 'wH1y|:h[(` C<yR!-2}4KFHI^i>xl;0K#s=Im/sj*Y$D?6vC?vDb`d0KnrI[v|b*');
define('LOGGED_IN_SALT',   'Za@vj#r):`>IiyC;bsd@h4Xg[[VuSpe8/6/64Z5npA2kytwC)Eb7}!Ol%N}-uh)%');
define('NONCE_SALT',       ';<U]]Q4CRUh{;@SscO{z-glE* wsLR3p4-}fS;C x7|ap]Svv/keD9DV+/G~7^E;');

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
