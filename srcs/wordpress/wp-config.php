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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'user' );

/** MySQL database password */
define( 'DB_PASSWORD', 'user' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'Wn{ptN0W~ZzM1c0xm|xYOTeh5gCubDfh3vooCXZ*3Fd#~r3S}PVHvat*QIR2N~B5' );
define( 'SECURE_AUTH_KEY',  'Nl~h{ZSSU$14ZuiaYj%pQEYwxw8gA~1Y3Cl5qoP*cNLZQMJG#qkaGr7Wwq}Y346V' );
define( 'LOGGED_IN_KEY',    'B0~pGHMQ2oKFeciFmnCOe~#YyOYr2D9MF4QDBD?2~Z{9wy8@UYPV~D$uhIP39kmS' );
define( 'NONCE_KEY',        'f1s}2u~AoQTJRwi*qSZ6X*kiEj~3Qy#HK2y~v~BwPUMBwq{Tw*%PbiIr%?$m%9QR' );
define( 'AUTH_SALT',        '{sqqHYsZbPsn4FF$qPj4gEvQQGKEE~i1JvE?$?w?jo~wah2h#$|C}|5$1#40DTpz' );
define( 'SECURE_AUTH_SALT', 'BYt@HK@~ha0YKavode~hsT7m~vDre1c*Nq?rn4pY@ss?|~uTmmvFt?dgGF%qg*BK' );
define( 'LOGGED_IN_SALT',   '~nKJwD8uALxMD*YG9C0zWFd}bEKtzshH?V9ifkt4PH{|*w1OANG}RI99}qWT{K?M' );
define( 'NONCE_SALT',       'Y6EbuY|BrJ~baC{T2TbXt0fL*lPMz0y*hBfa|l@@yzXr#a2niFTx0Xod}Hc7#yn3' );

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

