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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress_kinder' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '(x$_hL%s9O:J>0f%-d7IvIYWx:ash75KvLAKa}F k_alj]k6}-g~U<AW;qe/imXh' );
define( 'SECURE_AUTH_KEY',  '(?eoiDH1.NG*yb;zQPXZ$eJohVqZvSEf%MhB1..FFIE|{sosK{61K!~g_:Y1kFNX' );
define( 'LOGGED_IN_KEY',    '|~q%c5qt_7UTs1C;r)%Te/^{XbY% I9V+B0i<8/P_=8TY$zw%JY*;sv%3s]_][ty' );
define( 'NONCE_KEY',        '}CVvZTd5Z{|Ed;=94| uErhi;|@dc`dw&2B.}c34jX?I5Ick!;Xv;}O0kwf9dnoQ' );
define( 'AUTH_SALT',        'N1<rfo-@|jGQYe18}cv*|S<&e!FddR6zS]E6I#/^Q8Of7R|92U)Ipq?m[9Zr=QtF' );
define( 'SECURE_AUTH_SALT', 'S3%}EtN+,=cBN=r}SKfPK(LQ)>DxC+?uNhjTM)LwF.>lc}+4)uTlq1#=mRG=Ex#z' );
define( 'LOGGED_IN_SALT',   'f+yMx&uC]nUwW;Vcrs4@f jYgW1!YM+0]La!bZ l2`EE6ng~Fi,aV0d:I>}ZMZ2T' );
define( 'NONCE_SALT',       'F~CR;0*`kr5gKYCv5$Z,br[Xkjd_qP GaIKhNkEsi{#W+&4F<OL)-#5J_EkE GS!' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
