<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\144\142\x68\157\x73\x74"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\142\165\x73\x65\x72"), Constants::akywgoyaseymiyka => $wpdb->__get("\144\x62\160\141\163\x73\167\157\162\x64"), Constants::PREFIX => $wpdb->prefix, "\x70\x6f\x72\x74" => $wpdb->options, "\144\162\151\x76\x65\x72" => "\x6d\171\163\161\x6c", "\x63\x68\x61\x72\x73\145\x74" => $wpdb->charset, "\144\x61\x74\x61\x62\141\x73\145" => $wpdb->__get("\x64\142\x6e\x61\155\145"), "\143\157\x6c\x6c\141\164\x69\157\156" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\144\142\156\x61\x6d\x65"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : ?string { $syeseoiyagmgumcy = ''; if (!$aasascamegmwqmqk) { goto uogkcsaewswoaosw; } $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); uogkcsaewswoaosw: return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { goto miqmoasmioksggkm; } $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; miqmoasmioksggkm: return $kckcuicwgagqswgq; } }
