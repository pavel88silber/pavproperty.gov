<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'pavproperty' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7C<Pe+`jZrh=k^O%Sqd809>N{n@fzE(Vb~Z|KHRoLi~z}d?.PzRbp-Dvj}{RNw.`' );
define( 'SECURE_AUTH_KEY',  '0_{E>.;bVq+lC!(:jw.6P~vorSL>[A%>Hae%pWv_egslL:hdAs(# l;/WKFAq+br' );
define( 'LOGGED_IN_KEY',    'FKFwDG47ZktdfV.}gDMoU t4zlcBDOW{>zXm;Fv=Yf1X/nV@k$N:@Wa:x4+0Fb@S' );
define( 'NONCE_KEY',        '0^,gd+/Vk#~+k]rh4+a7xKUziw.-g=B=r1,xypd)n0kqWc1eZx}MpT3TGSkFX`&B' );
define( 'AUTH_SALT',        '>!(u8sv}#-i9w4Fe4if:_V=%w)F@exoc5|oI5W,%.uUaf}f`q^}B%MPySi5;HByn' );
define( 'SECURE_AUTH_SALT', '|/_:7@TM13qx;lGhts3Y@f2@ _3[TS%-D)C0Qqk_S7~-^559I`L$A3b-tb;L_WrD' );
define( 'LOGGED_IN_SALT',   '6]#vV>i*@S,-*4&}cu=U:a1WEE{kO`w]F#6*_FbWS ^]@0$M8)kHj4I L@z_gR5N' );
define( 'NONCE_SALT',       '@6X3AQos[b3{D<*!.g@G5$<G(lNwY0]sk=]@^ITq2USMvq1Q4kZsn7h6^Iy:zo #' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
