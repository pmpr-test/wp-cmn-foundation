<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d83a968b15             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; trait MultistepTrait { protected array $steps = []; public function wmoeeiseqeecugmu() : bool { return !empty($this->steps); } public function oaegqeiemgwokmgo(array $asuggasaseaacmqu) : self { $this->steps = $asuggasaseaacmqu; return $this; } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu; return $this; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function iiqoooqcakkaeyiw() : self { $this->qigsyyqgewgskemg("\143\x6c\151\143\x6b\x61\142\154\145\x2d\x73\164\145\x70\x73"); return $this; } public function cyeuiyggkcqmoecc(string $sqeykgyoooqysmca, $wyeyeaaekyoyimqu = null) { $gskauacumcmekigs = $this->buttons[$sqeykgyoooqysmca] ?? null; if ($wyeyeaaekyoyimqu) { switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: case Constants::iueeekcmggceyscu: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->oqamwksqqyskgwge()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } break; case Constants::sokiwgiwgagukgsg: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->mekskkquqcumoioc()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } } } if ($gskauacumcmekigs) { $gskauacumcmekigs->qigsyyqgewgskemg("{$sqeykgyoooqysmca}\55\x61\143\x74\151\157\156"); } return $gskauacumcmekigs; } public function enqueue() { $ymqmyyeuycgmigyo = "\x6d\165\x6c\164\151\163\164\x65\x70"; $eygsasmqycagyayw = pr_get_foundation()->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\152\x73"))->okawmmwsiuauwsiu()); $eygsasmqycagyayw->ewcsyqaaigkicgse("\145\x6e\x71\165\145\x75\145\137\155\x75\154\164\x69\x73\x74\x65\x70\137\141\163\x73\x65\x74\x73"); } }
