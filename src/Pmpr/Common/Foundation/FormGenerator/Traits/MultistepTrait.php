<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; trait MultistepTrait { protected array $steps = []; public function wmoeeiseqeecugmu() : bool { return !empty($this->steps); } public function oaegqeiemgwokmgo(array $asuggasaseaacmqu) : self { $this->steps = $asuggasaseaacmqu; return $this; } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu; return $this; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); icasgckmuawkaksg: } uyisqeuweamsqwgg: return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function iiqoooqcakkaeyiw() : self { $this->qigsyyqgewgskemg("\x63\x6c\151\143\153\141\142\154\x65\x2d\163\x74\x65\x70\163"); return $this; } public function cyeuiyggkcqmoecc(string $sqeykgyoooqysmca, $wyeyeaaekyoyimqu = null) { $gskauacumcmekigs = $this->buttons[$sqeykgyoooqysmca] ?? null; if (!$wyeyeaaekyoyimqu) { goto symwoekuwqcmowwo; } switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: case Constants::iueeekcmggceyscu: if (!($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->oqamwksqqyskgwge())) { goto cwkwkgkqasguwscg; } $gskauacumcmekigs = $iimmsoawmoqckmoo; cwkwkgkqasguwscg: goto aeywmsqkisycgqce; case Constants::sokiwgiwgagukgsg: if (!($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->mekskkquqcumoioc())) { goto makqqsaegsesgquq; } $gskauacumcmekigs = $iimmsoawmoqckmoo; makqqsaegsesgquq: } mawsaauyquacosus: aeywmsqkisycgqce: symwoekuwqcmowwo: if (!$gskauacumcmekigs) { goto emsuycioaeoeeeqo; } $gskauacumcmekigs->qigsyyqgewgskemg("{$sqeykgyoooqysmca}\55\x61\143\x74\151\x6f\x6e"); emsuycioaeoeeeqo: return $gskauacumcmekigs; } public function enqueue() { $ymqmyyeuycgmigyo = "\155\x75\154\164\x69\x73\x74\x65\160"; $eygsasmqycagyayw = FormGenerator::symcgieuakksimmu()->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\152\x73"))->okawmmwsiuauwsiu()); $eygsasmqycagyayw->ewcsyqaaigkicgse("\145\156\161\x75\145\165\x65\x5f\x6d\165\x6c\x74\x69\163\164\x65\160\137\x61\x73\163\x65\x74\163"); } }
