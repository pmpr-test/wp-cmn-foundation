<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec08edec3b9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; trait MultistepTrait { protected array $steps = []; public function wmoeeiseqeecugmu() : bool { return !empty($this->steps); } public function oaegqeiemgwokmgo(array $asuggasaseaacmqu) : self { $this->steps = $asuggasaseaacmqu; return $this; } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu; return $this; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); wcuuwegqcysecoom: } wuugmygqgsmkgsmc: return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function iiqoooqcakkaeyiw() : self { $this->qigsyyqgewgskemg("\x63\154\x69\143\x6b\141\142\154\x65\x2d\x73\164\x65\160\163"); return $this; } public function cyeuiyggkcqmoecc(string $sqeykgyoooqysmca, $wyeyeaaekyoyimqu = null) { $gskauacumcmekigs = $this->buttons[$sqeykgyoooqysmca] ?? null; if (!$wyeyeaaekyoyimqu) { goto siowcuqygwiqumii; } switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: case Constants::iueeekcmggceyscu: if (!($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->oqamwksqqyskgwge())) { goto iyaaokkcuycqywco; } $gskauacumcmekigs = $iimmsoawmoqckmoo; iyaaokkcuycqywco: goto wyioauuuyckygcaq; case Constants::sokiwgiwgagukgsg: if (!($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->mekskkquqcumoioc())) { goto geusysuemiqgegcw; } $gskauacumcmekigs = $iimmsoawmoqckmoo; geusysuemiqgegcw: } suweomwcwyiiscee: wyioauuuyckygcaq: siowcuqygwiqumii: if (!$gskauacumcmekigs) { goto yuiwacwscsiukyqe; } $gskauacumcmekigs->qigsyyqgewgskemg("{$sqeykgyoooqysmca}\55\x61\143\164\151\157\x6e"); yuiwacwscsiukyqe: return $gskauacumcmekigs; } public function enqueue() { $ymqmyyeuycgmigyo = "\x6d\165\x6c\164\151\163\164\x65\160"; $eygsasmqycagyayw = FormGenerator::symcgieuakksimmu()->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\152\x73"))->okawmmwsiuauwsiu()); $eygsasmqycagyayw->ewcsyqaaigkicgse("\x65\156\161\165\x65\165\x65\137\x6d\165\x6c\164\x69\163\x74\145\160\137\141\x73\163\145\164\163"); } }
