<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672356231cfee             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; trait MultistepTrait { protected array $steps = []; public function wmoeeiseqeecugmu() : bool { return !empty($this->steps); } public function oaegqeiemgwokmgo(array $asuggasaseaacmqu) : self { $this->steps = $asuggasaseaacmqu; return $this; } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu; return $this; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function iiqoooqcakkaeyiw() : self { $this->qigsyyqgewgskemg("\x63\154\x69\x63\153\141\142\x6c\145\55\163\x74\145\160\x73"); return $this; } public function cyeuiyggkcqmoecc(string $sqeykgyoooqysmca, $wyeyeaaekyoyimqu = null) { $gskauacumcmekigs = $this->buttons[$sqeykgyoooqysmca] ?? null; if ($wyeyeaaekyoyimqu) { switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: case Constants::iueeekcmggceyscu: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->oqamwksqqyskgwge()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } break; case Constants::sokiwgiwgagukgsg: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->mekskkquqcumoioc()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } } } if ($gskauacumcmekigs) { $gskauacumcmekigs->qigsyyqgewgskemg("{$sqeykgyoooqysmca}\55\141\143\164\151\x6f\156"); } return $gskauacumcmekigs; } public function enqueue() { $ymqmyyeuycgmigyo = "\155\x75\154\x74\151\x73\x74\x65\160"; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis(pr_get_foundation(), $ymqmyyeuycgmigyo, "{$ymqmyyeuycgmigyo}\56\x6a\163")->okawmmwsiuauwsiu()); $this->ewcsyqaaigkicgse("\145\156\161\165\145\x75\x65\137\x6d\x75\154\164\x69\163\x74\145\x70\137\x61\163\x73\x65\x74\x73"); } }
