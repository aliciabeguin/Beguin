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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'janinayaya_database' );

/** Database username */
define( 'DB_USER', '262865' );

/** Database password */
define( 'DB_PASSWORD', '26ALICIA11@a' );

/** Database hostname */
define( 'DB_HOST', 'mysql-janinayaya.alwaysdata.net' );

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
define( 'AUTH_KEY',         '%At]XI9K;Q#uM>vl#fq:|zZj6UDS,x)q/a[M&6YNUFyeA~fSr{HA_z|sI$]g$3$e' );
define( 'SECURE_AUTH_KEY',  'j*J9b> 2p1<($y3$e4K3%nOsc^[8?h`r.^u5@86PE/i{+(AF$L:;|m@u}m# bzP&' );
define( 'LOGGED_IN_KEY',    'Y@V=bq8l(,1_ZbF<T~6mC,)^tY?84Yo>},QP71 paKhSUN2ABa1!^<0VM%fG(c$=' );
define( 'NONCE_KEY',        'Kq1Jq#7Co>,6lw;G,xqyx$3xp~sD>J-vYU}X5=&xpP)-DWib 5=%l(=/c/h~3uMl' );
define( 'AUTH_SALT',        'o(n^s u6>/D.9kiMQDnyi4},M}O<&ZwD?B]=^, <]vtAniS{Xv?<mw8y|K!o0*,Q' );
define( 'SECURE_AUTH_SALT', '|hH[G`r&u!h2{MB|[B`8n.{?xzMzsRu#Iuua-M>~TF4vuY_NU7~LZU4qoPpcky/T' );
define( 'LOGGED_IN_SALT',   'Y[2/faV+gd=sd N)>k~jD~NZ#H-&SBMqaKhiUMJ_:8?Qdc:<b2w5]Bz3iiHYW-%{' );
define( 'NONCE_SALT',       'dZXsb4id:NRCJ8QMoY]/SHSIslbAOb a]+[?|:V0{eEr%@&>94Q)h7@xeE`GtlW7' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
