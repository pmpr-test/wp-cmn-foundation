<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database; use Exception; use Illuminate\Container\Container; use Illuminate\Database\Connectors\ConnectionFactory; use Illuminate\Database\MySqlConnection; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Container\Traits\SingletonTrait; use Pmpr\Common\Foundation\Container\Traits\CommonTrait; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; class Connection extends MySqlConnection { use SingletonTrait, WrapperTrait, HelperTrait, CommonTrait; public function __construct() { try { global $wpdb; $uiewakwqscemywuo = [Constants::ckiaowgkqoewoseo => $wpdb->__get("\x64\x62\150\x6f\x73\x74"), Constants::csiaccacwgeeqwwo => $wpdb->__get("\x64\x62\x75\x73\x65\x72"), Constants::akywgoyaseymiyka => $wpdb->__get("\x64\x62\x70\x61\163\x73\167\157\x72\144"), Constants::PREFIX => $wpdb->prefix, "\160\157\x72\164" => $wpdb->options, "\144\162\x69\x76\x65\x72" => "\155\x79\x73\x71\x6c", "\143\x68\x61\162\163\x65\x74" => $wpdb->charset, "\144\x61\164\141\142\141\163\145" => $wpdb->__get("\144\x62\156\141\155\x65"), "\x63\157\x6c\154\x61\x74\151\x6f\x6e" => $wpdb->collate]; $this->config = $uiewakwqscemywuo; $aksgkeoomwimawms = new ConnectionFactory(new Container()); $qamoawsgksyqaqgk = $aksgkeoomwimawms->createConnector($uiewakwqscemywuo)->connect($uiewakwqscemywuo); parent::__construct($qamoawsgksyqaqgk, $wpdb->__get("\x64\x62\x6e\141\155\x65"), $wpdb->prefix, $uiewakwqscemywuo); } catch (Exception $wgaoewqkwgomoaai) { wp_die($wgaoewqkwgomoaai->sagusgigmkeysock()); } } public function wcweamocuicuusky(string $uusmaiomayssaecw, $omkysikckkcieckq = null) : self { $this->config[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function cokoiaeeomgssqgy(?string $aasascamegmwqmqk = null) : string { $syeseoiyagmgumcy = ''; if (!$aasascamegmwqmqk) { goto cqugssuesycomqwa; } $syeseoiyagmgumcy = $this->caokeucsksukesyo()->cqusmgskowmesgcg()->gumqicgiosoqweoy($aasascamegmwqmqk); cqugssuesycomqwa: return $syeseoiyagmgumcy; } public function ouscimcwyiassmcs(?string $kckcuicwgagqswgq) : ?string { $yuwymayicwwqiske = $this->getConfig(Constants::PREFIX); if (str_starts_with($kckcuicwgagqswgq, $yuwymayicwwqiske)) { goto kaiqsuaywyuckuoo; } $kckcuicwgagqswgq = $yuwymayicwwqiske . $kckcuicwgagqswgq; kaiqsuaywyuckuoo: return $kckcuicwgagqswgq; } }
