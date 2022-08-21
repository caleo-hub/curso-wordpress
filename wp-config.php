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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do banco de dados - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'YW]VN/d(g9R+k&j;:&i lIbKC|a>bX9So^(2ulobLv;rv;?%K/s7bRke@KaoxN/s' );
define( 'SECURE_AUTH_KEY',  'mRR}h3dF<!r|X%74uHe!yz@P.}R/|DVH=?A~k1bT{!:?BOjizhEDh(2=)r12%}_A' );
define( 'LOGGED_IN_KEY',    '`f1vS$g.0N3^6GOfBc&.!AhFbRVlre=q#/ek]d/tp6z3#qgi[ o-;m|~#y+?Q%ig' );
define( 'NONCE_KEY',        ';;P4~Hd5_c!{(K#q3OFY*c!lu^|R7lZI4Di{`I# ](q>/,g-{$cci=h$RIdP|=Ka' );
define( 'AUTH_SALT',        '!D$dId+YEm0}!1^WHL|^Ee2JC8PIZqo^zjihJ?<bC890?TIov9lX<]DJjUVzO=Gq' );
define( 'SECURE_AUTH_SALT', 'S]sx#7<{@v Spvr[}k6=NXey=^X9hZhU|q`vEI}C6Xx9Q5EE;12Tq<n9n1_ mi6j' );
define( 'LOGGED_IN_SALT',   'vl9qcnmLi?9@&[_sUNqFeMj+J`OBCyALu`ww^APk3Q/8;q~cOE<XEx]&a@p]sMqc' );
define( 'NONCE_SALT',       ']76SYyJ_Dm9 b/LYm^^/Q$G&nK@Z;hp2*Ef023;l*O(V.U-D}NJVvPLq<ocY9]V)' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
