<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Portfolio' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '. H4:y_k4g[yfBk;*TtOe^<o?h?9U`MfgfE+1*28}^j,@c]m#Y03C&CY,oEW()O:' );
define( 'SECURE_AUTH_KEY',  'w_4ZXLqNMYmbaFz5yw%rR)((r q(}$9n7D8FT$uEY.U(pgo!AvF;ZWs#egB$DSSd' );
define( 'LOGGED_IN_KEY',    'Uuutpm*xF$hRG-CW*BKNW7j|s#UtNVzB,|$[?) &CTjpV8UpSUT%&,NIZZKz(@hM' );
define( 'NONCE_KEY',        ';<lPa Od9pxw[V}ah{ Piuw`Sp(Og*[Xph~T)pGim}BEINIz;S_z`HXHa,?~~sfW' );
define( 'AUTH_SALT',        '8vOZ#4=R*oc(Q|9yj/pQlsD7aLK(|i}k4*@JY:lHm(#9S +[H)p.f:Q>JsEJQ:SM' );
define( 'SECURE_AUTH_SALT', 'J6MM]+-~VoJ^o`b6$2ud,KlfS1595aCT&AVH|Ud3wGC{SC(xn;28Q{MymJk8O;{E' );
define( 'LOGGED_IN_SALT',   'bKwF|dEq`Jy:o_<H)K(]~u*n{2N:&+P[LIUrddwpL;)Qb[i/A| e9alJV<la;Z~r' );
define( 'NONCE_SALT',       'RpkIfY++@JAF}jNhn{tg3c<z1zGh~|ocYx5&[PK<5(><tLUt2FQ[:DK?*+(t%3:N' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
