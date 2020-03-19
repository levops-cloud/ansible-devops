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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'bananas' );

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
define( 'AUTH_KEY',         'tE}Q4>JN?E$ckC`Zh5ji%_ggEb1Ek.z`!A(Sc`Pf%Oe=MTqmNxb>wgFU:+P_^,A7' );
define( 'SECURE_AUTH_KEY',  '1&_6*R?i=W[TKQy:AT7;F6Wf6h:q.$UM!Ev0.QrQnsvdkdRxPFQu48+,_gcWXOf<' );
define( 'LOGGED_IN_KEY',    'waFlj8ziM`q2dz)09]WNglNj-(M.%}&>G>D`9.DUPg1pdvTSIG2r7*Uv`-aL@WZU' );
define( 'NONCE_KEY',        'la[b:5b_j-[;{rB?,oY?Pd3R2wB`4l`Wldq:^Hp]$g5ujpS|zYuK-kHX{Ufy;g|d' );
define( 'AUTH_SALT',        'L,*Zoqo>s756utX1juVKmvKmE3fp5n]3(~Invb!ANWM<io[6Nk;hTw0W:./L)cI!' );
define( 'SECURE_AUTH_SALT', 'Cbx@l:d$Kgp4;sWFf=(am-~7,@}M;[fT=p}B>qMW8E`XI&,iO%m#~2WZ36{l,}E+' );
define( 'LOGGED_IN_SALT',   'sXxTf*&Z#jG^S^K5GM-*t4af0.)u6SP`e_rP2D8_pECvtG`+}b@AzJfrd}n}0yk9' );
define( 'NONCE_SALT',       '!BC/WV1X3j%u_[rKK+KYvqgmb)?&W??1<~9svq!-r&&&j@qN*,gTn~h&6b5G-Nar' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
