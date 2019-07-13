<?php

/*
 Plugin Name: WordProof Timestamp
 Plugin URI:  https://wordproof.io/wordproof-timestamp-plugin/
 Description: Timestamp your WordPress content into the blockchain. Instant and without fees. For EOSIO, EOS &amp; Telos.
 Version:     1.1.1
 Author:      WordProof
 Author URI:  https://wordproof.io
 License:     GPL2
 License URI: https://www.gnu.org/licenses/gpl-2.0.html
 Text Domain: wordproof-timestamp
 Domain Path: /languages
*/

namespace WordProofTimestampFree;

// If this file is called directly, abort.
if (!defined('WPINC')) {
    die();
}

define('WORDPROOF_VERSION', '1.1.1');
define('WORDPROOF_SLUG', 'wordproof');
define('WORDPROOF_PREFIX', 'wordproof');
define('WORDPROOF_ROOT_FILE', __FILE__);
define('WORDPROOF_BASENAME', plugin_basename(WORDPROOF_ROOT_FILE));
define('WORDPROOF_DIR', plugin_dir_path(WORDPROOF_ROOT_FILE));
define('WORDPROOF_DIR_ASSETS', WORDPROOF_DIR . 'assets');
define('WORDPROOF_DIR_VENDOR', WORDPROOF_DIR_ASSETS . '/vendor');
define('WORDPROOF_DIR_JS', WORDPROOF_DIR_ASSETS . '/js');
define('WORDPROOF_DIR_CSS', WORDPROOF_DIR_ASSETS . '/css');
define('WORDPROOF_DIR_SVG', WORDPROOF_DIR_ASSETS . '/svg');
define('WORDPROOF_URI', plugin_dir_url(WORDPROOF_ROOT_FILE));
define('WORDPROOF_URI_ASSETS', WORDPROOF_URI . 'assets');
define('WORDPROOF_URI_VENDOR', WORDPROOF_URI_ASSETS . '/vendor');
define('WORDPROOF_URI_JS', WORDPROOF_URI_ASSETS . '/js');
define('WORDPROOF_URI_CSS', WORDPROOF_URI_ASSETS . '/css');
define('WORDPROOF_URI_SVG', WORDPROOF_URI_ASSETS . '/svg');

//Web Standards
define('WEB_ARTICLE_TIMESTAMP', 'WebArticleTimestamp');
define('CURRENT_WEB_ARTICLE_TIMESTAMP_VERSION', 0.1);

// Init plugin
spl_autoload_register(__NAMESPACE__ . '\\autoload');
add_action('plugins_loaded', array(WordProofTimestampFree::getInstance(), 'init'));

/**
 * @param string $class
 */
function autoload($class = '') {
    if (!strstr($class, 'WordProofTimestampFree')) {
        return;
    }
    $result = str_replace('WordProofTimestampFree\\', '', $class);
    $result = str_replace('\\', '/', $result);
    require $result . '.php';
}
