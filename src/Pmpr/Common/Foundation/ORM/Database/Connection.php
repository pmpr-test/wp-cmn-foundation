<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6791524c10e10             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\x64\142\150\x6f\163\164"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\144\x62\x75\x73\145\x72"), Constants::akywgoyaseymiyka => $wpdb->__get("\x64\142\160\x61\163\163\x77\157\x72\x64"), Constants::PREFIX => $wpdb->prefix, "\x70\157\x72\164" => $wpdb->options, "\144\x72\151\166\145\x72" => "\155\171\163\x71\x6c", "\143\x68\141\162\x73\145\164" => $wpdb->charset, "\144\x61\x74\x61\x62\x61\163\x65" => $wpdb->__get("\x64\142\x6e\x61\155\x65"), "\x63\x6f\x6c\x6c\x61\164\151\x6f\156" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\x64\142\x6e\141\x6d\145"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : string { $syeseoiyagmgumcy = ''; if ($aasascamegmwqmqk) { $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); } return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (!str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; } return $kckcuicwgagqswgq; } }
