<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fdd41716df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; trait MultistepTrait { protected array $steps = []; public function wmoeeiseqeecugmu() : bool { return !empty($this->steps); } public function oaegqeiemgwokmgo(array $asuggasaseaacmqu) : self { $this->steps = $asuggasaseaacmqu; return $this; } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu; return $this; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function iiqoooqcakkaeyiw() : self { $this->qigsyyqgewgskemg("\x63\x6c\x69\143\x6b\x61\x62\x6c\x65\x2d\x73\164\x65\x70\163"); return $this; } public function cyeuiyggkcqmoecc(string $sqeykgyoooqysmca, $wyeyeaaekyoyimqu = null) { $gskauacumcmekigs = $this->buttons[$sqeykgyoooqysmca] ?? null; if ($wyeyeaaekyoyimqu) { switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: case Constants::iueeekcmggceyscu: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->oqamwksqqyskgwge()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } break; case Constants::sokiwgiwgagukgsg: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->mekskkquqcumoioc()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } } } if ($gskauacumcmekigs) { $gskauacumcmekigs->qigsyyqgewgskemg("{$sqeykgyoooqysmca}\x2d\x61\x63\x74\151\x6f\x6e"); } return $gskauacumcmekigs; } public function enqueue() { $ymqmyyeuycgmigyo = "\x6d\x75\154\x74\151\163\164\x65\160"; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis(pr_get_foundation(), $ymqmyyeuycgmigyo, "{$ymqmyyeuycgmigyo}\56\152\163")->okawmmwsiuauwsiu()); $this->ewcsyqaaigkicgse("\x65\156\161\165\145\x75\145\x5f\x6d\x75\x6c\164\151\163\x74\x65\x70\137\141\x73\x73\x65\x74\x73"); } }
