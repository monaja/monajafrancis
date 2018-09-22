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
define('DB_NAME', 'monajafrancis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '12345');

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
define('AUTH_KEY',         'aiVy3}=D^,nqNBHcdob@w>qituaah|:8Vb]N+1?lzMr4pU}rhc*XaG,,%jM)@(Sm');
define('SECURE_AUTH_KEY',  '#y@273VE5lxX$Ltia2q*7kC [6 Fb>1~YYu=)92>3[q:y4Qj`}s,-TsegbF7f 2l');
define('LOGGED_IN_KEY',    'DVrCm3j*tv}QAX%8X)%i9Z-u`hG^j&p?.h;?wC8(C;F4ea-S.j7bgYhy?Q,KE$my');
define('NONCE_KEY',        'R5c3`_>pTpV^ckYKDpDjsnq1UQaihDvcd|N_[wQ9X7T<HeF@ar<_UL)C:!^<Bsy@');
define('AUTH_SALT',        'lA#r:E:|VjH50!mQfaS8Cb#pB4fl,97McGC4r|s8#;2<RF(sm8IzZKB?AY_vD;qk');
define('SECURE_AUTH_SALT', 'Bj*3y2~IU6/mb6MNep$+R0Rynl3,4?%t3+6G$o6ZzL+z_iE@l=GNPp!T}pu%BXf(');
define('LOGGED_IN_SALT',   'Gwaj6?1UOffLg1_ rTq,wY4!z&a=UYS@).T?Q@}cL5AP_v!So#RkGwv`<S)h?Vcp');
define('NONCE_SALT',       '4&E!N:x4gRaT@il.xd+pdgeX?v``s~IuUC/T:nJ0yCCI;Sjos-R$1f~Xd}m7@5/g');

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
