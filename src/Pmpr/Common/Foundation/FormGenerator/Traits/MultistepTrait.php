<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4df75a3df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; trait MultistepTrait { protected array $steps = []; public function wmoeeiseqeecugmu() : bool { return !empty($this->steps); } public function oaegqeiemgwokmgo(array $asuggasaseaacmqu) : self { $this->steps = $asuggasaseaacmqu; return $this; } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu; return $this; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function iiqoooqcakkaeyiw() : self { $this->qigsyyqgewgskemg("\x63\x6c\x69\143\x6b\141\x62\154\145\55\x73\x74\145\x70\163"); return $this; } public function cyeuiyggkcqmoecc(string $sqeykgyoooqysmca, $wyeyeaaekyoyimqu = null) { $gskauacumcmekigs = $this->buttons[$sqeykgyoooqysmca] ?? null; if ($wyeyeaaekyoyimqu) { switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: case Constants::iueeekcmggceyscu: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->oqamwksqqyskgwge()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } break; case Constants::sokiwgiwgagukgsg: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->mekskkquqcumoioc()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } } } if ($gskauacumcmekigs) { $gskauacumcmekigs->qigsyyqgewgskemg("{$sqeykgyoooqysmca}\x2d\x61\143\x74\x69\x6f\x6e"); } return $gskauacumcmekigs; } public function enqueue() { $ymqmyyeuycgmigyo = "\155\165\x6c\x74\x69\163\164\x65\x70"; $eygsasmqycagyayw = pr_get_foundation()->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\x2e\x6a\x73"))->okawmmwsiuauwsiu()); $eygsasmqycagyayw->ewcsyqaaigkicgse("\x65\156\x71\x75\x65\x75\145\137\155\x75\x6c\x74\151\x73\164\x65\x70\137\x61\x73\x73\145\164\163"); } }
