<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\144\142\x68\x6f\x73\x74"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\144\142\x75\163\145\162"), Constants::akywgoyaseymiyka => $wpdb->__get("\144\142\x70\141\x73\x73\167\157\162\x64"), Constants::PREFIX => $wpdb->prefix, "\160\x6f\x72\164" => $wpdb->options, "\144\162\151\166\145\162" => "\x6d\171\163\161\154", "\143\x68\x61\x72\x73\145\164" => $wpdb->charset, "\x64\141\x74\x61\142\x61\163\x65" => $wpdb->__get("\144\x62\x6e\x61\155\x65"), "\143\x6f\x6c\154\141\164\x69\x6f\156" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\x64\142\156\141\155\145"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : ?string { $syeseoiyagmgumcy = ''; if (!$aasascamegmwqmqk) { goto usiqksiiiqgokuaq; } $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); usiqksiiiqgokuaq: return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { goto omaswaiucwamaywi; } $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; omaswaiucwamaywi: return $kckcuicwgagqswgq; } }
