<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e16ccfaa782             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\x64\142\x68\157\x73\x74"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\142\165\x73\x65\x72"), Constants::akywgoyaseymiyka => $wpdb->__get("\144\x62\x70\141\x73\x73\x77\x6f\x72\x64"), Constants::PREFIX => $wpdb->prefix, "\x70\x6f\162\x74" => $wpdb->options, "\144\162\151\166\145\x72" => "\155\x79\163\x71\x6c", "\143\150\141\x72\163\145\164" => $wpdb->charset, "\x64\141\x74\141\x62\141\163\x65" => $wpdb->__get("\x64\142\156\x61\155\145"), "\143\x6f\154\x6c\141\164\x69\157\x6e" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\x64\x62\x6e\x61\x6d\x65"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : ?string { $syeseoiyagmgumcy = ''; if (!$aasascamegmwqmqk) { goto wgaqkacekoyiwggi; } $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); wgaqkacekoyiwggi: return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { goto cscskwugoamcmqyu; } $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; cscskwugoamcmqyu: return $kckcuicwgagqswgq; } }
