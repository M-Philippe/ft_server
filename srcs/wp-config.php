<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'db_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'user' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'user' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'G?AklF4hM4_{+P78$Ywir;wNF*[i_=Ch9OaRaG3CDU5Dk]z?p/W~hT J2*|}UYjd' );
define( 'SECURE_AUTH_KEY',  'Sz[4{g4xBYeS^5b#*O4oC $4<( XYLaqQ%jjmQa<N=}+&pYcgJaTrM1aRiw9fsqh' );
define( 'LOGGED_IN_KEY',    'JlhTR@EJIFvcD&8MZ7*5TNiCe+4ajMrW!BWt)Iw(3wftR5<&$!+C`~x04-u(tpN!' );
define( 'NONCE_KEY',        '|Srx|)y)24(aL/Ahje&i1R)E@>p /aJuf|AFB=%#?x0!xda/.LPb?t3SQHhO#u6|' );
define( 'AUTH_SALT',        'O~s#Hw,r`b@il~(@vCVbRp>J}|tu5Cyl5FXvJp~pV@UHDdrk5dA3@^wc}5EVwE~j' );
define( 'SECURE_AUTH_SALT', '%&+ ec>t[g~o$WM2s+mmbmmp/IJoF4xw@bl(@@%Hz]~FP`XEwThAgj2u_^=Sk$ws' );
define( 'LOGGED_IN_SALT',   '>#^&7h%x^aYIL#1L,rBide:n=B5-[ylI+hdt}`$/UP|trrolFan)Dn9w)P[-c}7i' );
define( 'NONCE_SALT',       'f/#C&TZbeV$]`5#y]t6)*Vy,w1)7)q>(%t4@xB-:6q]+H=laiKosa&@rV9}*K%o9' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
