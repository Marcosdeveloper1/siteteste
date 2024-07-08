<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'siteteste' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'XL&HTBz.!Ph%W#U`O/?V2}:R@2AawT;iXUsg/V!G(HY:{5eSGy5/IaOk[cGQ6ZT4' );
define( 'SECURE_AUTH_KEY',  '>R-w*5T436=d4DcU =},+a|f6?(eqDj}C%~xY81R.A]D[zj^,r*/HXPcw!36o:}}' );
define( 'LOGGED_IN_KEY',    'ZiUz%LPaNo{et9`#^6cc9ahk$Y6mn,}A*p&H/?sU,alY%_YT@P9r.%QO9R+(I_Xy' );
define( 'NONCE_KEY',        'YDq)6[d7P(tY u Q<Od8;feeuMm/)71wLp>D]y zfhPkYeqP{~}Gb0W%G:2$tB+*' );
define( 'AUTH_SALT',        '>p8<X=OH:-5Ev!!~9Cv,@&0/?KT9|8`=~O6g:|eBj3<??!=Aa(lIZ_Y[2u`{LQoK' );
define( 'SECURE_AUTH_SALT', 'k #_b^@r6xC1&QP^V$G _N&$rPi+=M2M*GWV7J~9-`hX,&{d$wC6o8k[6hm7Oc<1' );
define( 'LOGGED_IN_SALT',   '&V|kD~$oHjY+Gt&!/HbeK_9qPH+:#2$s!`E&!3oYA&FCwW2]!]B&keHjJ?e0boem' );
define( 'NONCE_SALT',       '*(I<X!(4lU/O`<&vX@zT|v){Gr+Oh@oU<HrzI#Mv#|8!kk?-X2A)b?3;U]gr1YP_' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
