<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\x64\x62\x68\157\163\x74"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\x62\165\x73\x65\162"), Constants::akywgoyaseymiyka => $wpdb->__get("\144\x62\160\x61\163\163\x77\x6f\162\144"), Constants::PREFIX => $wpdb->prefix, "\160\157\x72\x74" => $wpdb->options, "\x64\x72\x69\166\145\162" => "\x6d\171\163\x71\x6c", "\143\150\x61\162\163\x65\x74" => $wpdb->charset, "\144\x61\164\141\x62\x61\163\x65" => $wpdb->__get("\144\x62\156\141\x6d\145"), "\143\157\x6c\x6c\x61\x74\x69\x6f\x6e" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\144\x62\156\141\x6d\145"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : string { $syeseoiyagmgumcy = ''; if (!$aasascamegmwqmqk) { goto gwkawguwsamuomuo; } $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); gwkawguwsamuomuo: return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { goto ucasigqmoiwaimkk; } $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; ucasigqmoiwaimkk: return $kckcuicwgagqswgq; } }
