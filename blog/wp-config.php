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
define( 'DB_NAME', 'blog_db' );

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
define( 'AUTH_KEY',         'QuPE8,o*6a@Ui0/ZE5iyfCxzLRmZD1_SUQ~R)uYg|;S&t50h{yy PaM+tg}W38[c' );
define( 'SECURE_AUTH_KEY',  'eukcTRpOV>dHi4FN64hh&{6cngGtzU*|uXB2SfUj?6(@TXtvUJyb@tbBk_){=jO2' );
define( 'LOGGED_IN_KEY',    'l=3oEfprO_l8xrR`QSK-mS]@p_(EYczb7TYcMq.MVZKrI07al.Z_OwQDqA)9kJx%' );
define( 'NONCE_KEY',        'Tm~4z~mPg7x(tT,9c;kWvz<+dV10IZoh*QRG3$|da<|S3NmWu=uH2jR*;/cOKpcc' );
define( 'AUTH_SALT',        'XQp{~$ufAns$45yYcwW#RN_9t<*f:$[6Ep,zt^&gYk@7v#|:07LU`&G[pE5HlU>7' );
define( 'SECURE_AUTH_SALT', 'LBU*Zz@7ZmV5x` D}.3ftL8*d9XSt`Oo5fCU.rD1|!ND -439+Fquj.@Hi&iR j@' );
define( 'LOGGED_IN_SALT',   'Uw79GnT3(k*]{k2 GNEE[0</{a%FI$=]2.[yI-Z3FFB<$SRZ2!T%.U;r-=Rf[&^w' );
define( 'NONCE_SALT',       '`3,]fdRPIq]gw!C*@hYdb,b-nT3!tMoW0lQlK0a!cPV+;sDsX6 *{k9fm!&Y0*>k' );

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
