<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\x64\x62\150\157\163\x74"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\142\165\163\145\162"), Constants::akywgoyaseymiyka => $wpdb->__get("\144\x62\160\141\163\x73\x77\x6f\162\x64"), Constants::PREFIX => $wpdb->prefix, "\x70\x6f\162\164" => $wpdb->options, "\x64\x72\151\x76\145\x72" => "\x6d\x79\x73\161\x6c", "\143\150\141\x72\x73\145\x74" => $wpdb->charset, "\144\x61\x74\x61\x62\x61\x73\x65" => $wpdb->__get("\x64\142\x6e\x61\x6d\x65"), "\143\x6f\154\x6c\141\164\x69\157\156" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\144\x62\x6e\x61\155\x65"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : string { $syeseoiyagmgumcy = ''; if (!$aasascamegmwqmqk) { goto gwkawguwsamuomuo; } $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); gwkawguwsamuomuo: return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { goto ucasigqmoiwaimkk; } $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; ucasigqmoiwaimkk: return $kckcuicwgagqswgq; } }
