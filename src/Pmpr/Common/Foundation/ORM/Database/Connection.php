<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6720b645383f9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\144\142\x68\157\163\164"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\142\165\163\145\x72"), Constants::akywgoyaseymiyka => $wpdb->__get("\144\142\x70\x61\163\163\167\x6f\162\x64"), Constants::PREFIX => $wpdb->prefix, "\x70\x6f\x72\x74" => $wpdb->options, "\144\x72\151\x76\145\162" => "\155\171\163\x71\154", "\143\150\141\162\x73\x65\x74" => $wpdb->charset, "\144\141\164\x61\x62\141\163\145" => $wpdb->__get("\144\142\156\x61\x6d\145"), "\x63\157\154\x6c\141\x74\151\x6f\156" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\144\x62\156\x61\x6d\x65"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : string { $syeseoiyagmgumcy = ''; if ($aasascamegmwqmqk) { $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); } return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (!str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; } return $kckcuicwgagqswgq; } }
