<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67052a91f300e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\x64\x62\x68\157\x73\164"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\142\x75\x73\x65\x72"), Constants::akywgoyaseymiyka => $wpdb->__get("\144\x62\x70\141\x73\x73\x77\157\x72\144"), Constants::PREFIX => $wpdb->prefix, "\x70\x6f\x72\x74" => $wpdb->options, "\x64\x72\151\x76\x65\162" => "\155\171\x73\x71\x6c", "\143\150\141\162\x73\x65\x74" => $wpdb->charset, "\144\141\x74\x61\142\x61\x73\145" => $wpdb->__get("\144\142\x6e\x61\x6d\x65"), "\x63\x6f\154\154\141\164\x69\x6f\x6e" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\144\x62\x6e\x61\x6d\x65"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : string { $syeseoiyagmgumcy = ''; if ($aasascamegmwqmqk) { $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); } return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (!str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; } return $kckcuicwgagqswgq; } }
