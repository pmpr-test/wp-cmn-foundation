<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\144\x62\x68\x6f\x73\x74"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\x62\165\163\145\162"), Constants::akywgoyaseymiyka => $wpdb->__get("\x64\x62\x70\x61\x73\x73\167\157\162\144"), Constants::PREFIX => $wpdb->prefix, "\160\157\162\164" => $wpdb->options, "\144\162\151\166\145\x72" => "\155\x79\163\161\x6c", "\143\x68\x61\162\x73\x65\164" => $wpdb->charset, "\144\141\x74\141\x62\x61\163\x65" => $wpdb->__get("\144\142\156\x61\155\x65"), "\x63\x6f\x6c\154\141\x74\151\x6f\156" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\144\142\156\x61\155\145"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : string { $syeseoiyagmgumcy = ''; if (!$aasascamegmwqmqk) { goto gwkawguwsamuomuo; } $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); gwkawguwsamuomuo: return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { goto ucasigqmoiwaimkk; } $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; ucasigqmoiwaimkk: return $kckcuicwgagqswgq; } }
