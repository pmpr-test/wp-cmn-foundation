<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4037d1e2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Plugin; use WP_Error; class Plugin extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = [], string $aiamqeawckcsuaou = 'query_plugins') { if (!function_exists('plugins_api')) { include_once ABSPATH . 'wp-admin/includes/plugin-install.php'; } return plugins_api($aiamqeawckcsuaou, $ywmkwiwkosakssii); } public function ggocakcisguuokai($mkysicwccoeicumg) : bool { if (!function_exists('is_plugin_active')) { include_once ABSPATH . 'wp-admin/includes/plugin.php'; } return $this->call('is_plugin_active', false, $mkysicwccoeicumg); } public function sioyqaykmwwugmgi(string $mkysicwccoeicumg) : bool { return $this->call('is_plugin_active_for_network', false, $mkysicwccoeicumg); } }
