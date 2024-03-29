<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'aula_teste');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'PB}C2( gKx4{>(pM)JWi*skj,V,s[{5,,DX*bfBGul-tA&5*h&W4HmO[boY<G4lC');
define('SECURE_AUTH_KEY',  '>|C(cFw9ik%;7e4[a<&7*+#s8v/K4`>A[A}=-Gf-lfq]r4FEd%^D|la&zj_QfyDH');
define('LOGGED_IN_KEY',    '1 l4Z:{DD*[(}Z0],f>R5BxP=mV25m~DyqD T]aB2j3qHVZTmJ0{@.J?Cv8n.+th');
define('NONCE_KEY',        '6Ch,ekm ZNu=dr4GdyvJ-T:r5)~ Pr)c3oG4&tCzUS{/I9ezg:D7E)@ktVbDuETk');
define('AUTH_SALT',        'Z27d0cE]R_DW^qz$9tUsJ_;we9jvvFw/Lzc{CHp)k~ep#;iWc_]b($04~@EB}%I>');
define('SECURE_AUTH_SALT', '(O;FhZ|<S@~~6n3}Wmk-Nn4@( 3yTDh+bm.=hbiqV3Yc.*;9fLaT7Y bXy2JSr-H');
define('LOGGED_IN_SALT',   'HWVB4TFf.17bq;4Y$tQ5=E^)StN>BMT_|bCZa@?=UzvE3priGS6R`.qj)!:5wKTK');
define('NONCE_SALT',       'YXxx7K~n(r3Boe]Zu6)(&($Le;e)ZcFG_?~ka+r{C.+c,Y[/A|gJ&,V|X;&O/gDc');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'LL';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
