<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'b5fCa6aiI{`a6:_w.<ejA.|M+M7[p+;: |<Bsc75.-15<x,!EJiOvPapN1kAc+lS' );
define( 'SECURE_AUTH_KEY',  'G])j$9aP?&Bg[M0Vi^N_n0SD&M,K&Oc&hV!xMZ+>AFII!}ehKe>n!w|<Hx59{OQS' );
define( 'LOGGED_IN_KEY',    'WOp&ldzlS9Kcr!j~_9F{JTi)NAWv!bzum5pwzT$xiG2pd,]micMG.cI8r^r4N3Ai' );
define( 'NONCE_KEY',        'P5WsN`5L/BTd=Nl!GU*I~VXB`Z}Vxa+m@Gf.=Ow>rsLiVvIdA+L9K^]tr.0${E$M' );
define( 'AUTH_SALT',        '7B2Ni)Eu(qgpM@UlVjT2*kek4KW#CCx4t:LGxR{@,w{g`u}c:Hc7r#idcvKC=;))' );
define( 'SECURE_AUTH_SALT', '@-D .8H1QuAdUp{HjPu&=W/i$Jjs%Mm2#qY?gq-hQN9d~&9_)a< 9L8(X!Utk*MW' );
define( 'LOGGED_IN_SALT',   'k9|&c{J[>d@5OENPhwZ7C4yg,?DpbaFXc6s<Q3=f{$=jm/QUG~#mfI%QnBwJnXeG' );
define( 'NONCE_SALT',       'k,lwZ*MYicG4u h_iLxakUYIWN9rt?m8ijQVZhQY=N/$l}{FuuV1LS-:#Xc&]I,1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_wordpress';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
