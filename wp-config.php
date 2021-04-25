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
define( 'DB_NAME', 'bsit_4c' );

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
define( 'AUTH_KEY',         'KGI9gZ-,Y{V?Y1G@Z#N<YkL|MuRDUbwE*gffL7K7Nq:/ZCwqqT1:iWr]I E-X6{S' );
define( 'SECURE_AUTH_KEY',  '~.O3L6Q)xGQlv.1-)HZlDxM;.]t`vewG7cT(VD4T6;zb{u[.Qg(<g~9=9aIq~VD?' );
define( 'LOGGED_IN_KEY',    'M+P:@:q9HyAz87!Lcf:OzIc#MSc3dt:%2D m9$V4`9;NBzP7[#M].nC}Y{Fvs^6=' );
define( 'NONCE_KEY',        '~?yP;dYdROS^VJ ^FVe]`<HQYJT7=3};b0U^HE;q>.ZBf]q/YSHW6.l8XMTC4;k9' );
define( 'AUTH_SALT',        '[@ ,m&%yta],9UrS{^@r4Emb.mU}DT,~N.9d%%8I,4M=P{O~%iV|0daAafT3{v(E' );
define( 'SECURE_AUTH_SALT', '=8G0nPtV3Y!hnDK1/)Sf,gQsmohHVR;<SNWa%EKl&3{Em%hcyK339mp9,y~[@aNi' );
define( 'LOGGED_IN_SALT',   'b86UYhPB)DP];h*3Q$`%N>~,sEpPbL.8OMqZ{Vcy*,u#/wAdf1=j%K[OtBMZu,p!' );
define( 'NONCE_SALT',       'FD)DEx@,jeUPqd}&s@^:(ttOM2xoZk^}irKJ63DxF*v@YcWA?mkE[4et4mmr1/g6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = '4c_';

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
