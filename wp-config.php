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
define( 'DB_NAME', 'fastfix' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'uEb,qtI}1bNExE-Nh#ya.p%E>J/73Fk*Wh`B5<$x:LsY#{TJudS}k8mC1RTZ3lu3' );
define( 'SECURE_AUTH_KEY',  ';(>@]:W7)7,FY&B<>:.K|+EhL&yf3paff=FC,mP$_-_%/*zut|LjXr9}*Y+BK5YZ' );
define( 'LOGGED_IN_KEY',    'h sPB;6$eZ>{xLivnivIMI/iaGTu@a0V#3L;^,Q8>{kaUrqs1%Z!mwjKY]N;wDMZ' );
define( 'NONCE_KEY',        'qk_ lRj5;kQ.%nCCIwDq=9;v9S0qxb/{AqhrL~=r?E5Mz}*%)ldqfKIy6CStaYab' );
define( 'AUTH_SALT',        '>$Ia|G!8$<^Bn0f;ldflY_05*w]=TCQxjA|Vs[[(k~*%Qg87di%m8x^<4;-(z,y*' );
define( 'SECURE_AUTH_SALT', 'Ds-sxZma*iPSRU|X(jdCfhkKn=U=kZ&zr)-jnK~fKqa7$VQSbT&di42Z$BCSI>mu' );
define( 'LOGGED_IN_SALT',   'WnB~3g=OJV/i*=6Mu;du@V{x9IH!8AZs&jNQ8OQiW{3xZV$^85W(,7UAU_ L2^Jb' );
define( 'NONCE_SALT',       'BtryDhD0I9&>O5/QK~[%g?OH1Wpu(4nmO{$Xun?{gRl:sMq}CyKJ[97u0QrnE!ir' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
