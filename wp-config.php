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
define( 'DB_NAME', 'wordpress-demo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Test@123' );

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
define( 'AUTH_KEY',         '5o9Lo`]C3^+2 %E3fUb1fw6jHP%bC]=_d.6}.)oR2IrSDz2``%|oFAE|S`} Z[[!' );
define( 'SECURE_AUTH_KEY',  '5vlGk1kV>xzd,9H9)m9<u%JIh,/}g9o=PwXZO;!ulcNHp.lx`</=CR#x,gf4cidh' );
define( 'LOGGED_IN_KEY',    '.Q^i[XqP_&q<=HNaEvs3/EWJ@l1 <L9o%<hd~XVGK~,TZk>1Bi*:bu$/Cx _d6sh' );
define( 'NONCE_KEY',        '?gn-l*oQqkz?ADo~b,eu_r|)m`2^F`bG$.cB~WFyL;?PKzY~)8rzOd5??mhF,alc' );
define( 'AUTH_SALT',        '=)T)R^&}v78F7+.tA0 Jm1?!|kpRWHjI4aq&Ll]qtMT-Z^O4~V%4b<07<Nx^CxZV' );
define( 'SECURE_AUTH_SALT', '%]Qw,B?xtOcq(/ns&%s.J:a%E|^fY8,<{LQZ2?MiNS6EF:!{w4ay.W94$C`jbLm0' );
define( 'LOGGED_IN_SALT',   '6Tebpp2}`2W+W[xHF`Rd2&7T8EoE?%(;R0B`~>:@[;TBbUmh5r`~{?VVja[0o&[Q' );
define( 'NONCE_SALT',       '{^jPF5*RJ2zXtHI7DarR[kZ?.g.Ng|iQA]l6c>|!/(A}Biv;h}DV==Oe@h{o&D@9' );

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
