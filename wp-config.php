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
 * * Configurações do banco de dados
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'home' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'Ma{E&wMSa#4=l~bBIL40sQNO6Fu.drJT.SNJL^NF;qS2E.&YNcerg],ja?I;$8>P' );
define( 'SECURE_AUTH_KEY',  '1YIep!lvwJI=>SG/rz>E@VEsPn}l]r/Gx,|zY7)z;YZg=.]aMt,1XZQJ!|tX`pEA' );
define( 'LOGGED_IN_KEY',    '[orP_y1G!]KfSY_N7Va~7Dv#y%it8=l9oUTA=f&pF>34+?eT[Pxz41e7!Y/YVR%_' );
define( 'NONCE_KEY',        '`<;m^KD>E*l{eWTO(arYM_VO/(+/`K5]vNy?1^9)SZ%[U*i^(12Qa`GyV.,JI:<<' );
define( 'AUTH_SALT',        ']!%DOB9Hm!C#MW>Qp1uC9*dTQ]91_Y`kmN8_.h-L.,y_o2)7<G[2j2kQfm5alsjf' );
define( 'SECURE_AUTH_SALT', 'P{</CRncCYhF?Evagvk|S?~vpN[GhoUX.39c<PGM:tB9b6WS!|B6yO=[$(JAL2:E' );
define( 'LOGGED_IN_SALT',   'T/X^ZQ sx* |&I2dFjXm~(#k~)?IFfs#XSS!S4zjVK%tiPE@WV`g}MMlqk/u_;Zi' );
define( 'NONCE_SALT',       'f`^*dxD2^dcs2J{:s&}CvjdJ1g,,g8i5PQ-Cw e;V%_1H(?EevGiX78#)4,He@}d' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
