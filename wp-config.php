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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'G?S?}CIRU6U!!$. sh8Z,t=y]Lf4X>GpWUR!t:X80&<tt{tQM>ceux{.0tnsRyL.' );
define( 'SECURE_AUTH_KEY',  '{o9*Z.QW^F7I7a_T&#IqC}Q!i$A{ LGz~o2UShZxEK{(|tlL$</RZq,o:s~UquR^' );
define( 'LOGGED_IN_KEY',    'ig3i-=+lr4^j}hj]$!@]vlBsb8 Q_c{h3,4_j)6s7c::Piv#@.G8c;$wdQ/f6cd-' );
define( 'NONCE_KEY',        'GJ>Nz <+zZbwnVVIDqK#,X 0i1^^=ndgf(]U|yqdrn<aK$VEuezC1#B0`U))]O-n' );
define( 'AUTH_SALT',        '{k}+b>n:mObE6t/YteGggaEB;a7R9}kvGkJKAEG=?WYJ}=&(V{1zFRYFmgDJprRB' );
define( 'SECURE_AUTH_SALT', 'gjpp^J85#]Upo?uZYU[PGWcEWsZG m{#M?ozap 9Wr1VX;?E=2d8h11QjK}kS-6@' );
define( 'LOGGED_IN_SALT',   'KT_&sSX5g]]q*{Y>(G$8!!d{N9C[GJ)jpw48W0Q#N.tx:*9:_!Una$|?0nejN]hh' );
define( 'NONCE_SALT',       'vDZ~O!<6!2 K8g^r?yMU>BwrqHbaR_G{G(?: U}5G?7$kWnwd,I|=>(:^Db)T/[K' );

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
