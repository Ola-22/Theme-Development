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
define( 'DB_NAME', 'wordpress2' );

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
define( 'AUTH_KEY',         'olHs*-G10f&zUaj:S6n35+u/y{7o>D78;[6HiSGxGyH/S#n35(/;cf^b$DF%*78B' );
define( 'SECURE_AUTH_KEY',  'eOcnjH72L&5^)XXP+][sje~g@~ZK1D{.%9LQAaEU*f`RQ/mitH BJB:_M_y<xBn ' );
define( 'LOGGED_IN_KEY',    'imCgu(&~5jCz$5*P(heT[1hM#b6y6:[>Ay5+4@VS=%!M/ev6yz1!:;h1onFX=kpH' );
define( 'NONCE_KEY',        '|k8szy#CDE4nhml6||G5*D{4s`5cQi@}uPg-g_zu%=m4`6%?N=Byc/Lq^ ?<>p2i' );
define( 'AUTH_SALT',        'LN=!U/p~IDv[iThzF*Zz1`}fhy=f9 X6;3Sp03zFk+%:]0HN]ND=1G}]w41c$pm?' );
define( 'SECURE_AUTH_SALT', '{`Qv+nDOo$6jvg18?,,$i`!-{._b$@Wx#n9@>fHdjdXQZ.yxTq4^zbVdw3U!P;O#' );
define( 'LOGGED_IN_SALT',   '{lxS]J3Z>W5(pbu0ei/zF@w_XD%9ut,FsZ4H1;Drj4$:rz*,M;@q},tBrIkyJ:MZ' );
define( 'NONCE_SALT',       '&+ef]XFPO*Pj ?9i!d7%VAJ f;.xe|$vU!^PjKo:&Q$L{u7V5C1zEXG<_i CjFcE' );

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
