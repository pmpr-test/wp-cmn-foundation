<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6801565207479             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; trait MultistepTrait { protected array $steps = []; public function wmoeeiseqeecugmu() : bool { return !empty($this->steps); } public function oaegqeiemgwokmgo(array $asuggasaseaacmqu) : self { $this->steps = $asuggasaseaacmqu; return $this; } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu; return $this; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); } return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function iiqoooqcakkaeyiw() : self { $this->qigsyyqgewgskemg('clickable-steps'); return $this; } public function cyeuiyggkcqmoecc(string $sqeykgyoooqysmca, $wyeyeaaekyoyimqu = null) { $gskauacumcmekigs = $this->buttons[$sqeykgyoooqysmca] ?? null; if ($wyeyeaaekyoyimqu) { switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: case Constants::iueeekcmggceyscu: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->oqamwksqqyskgwge()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } break; case Constants::sokiwgiwgagukgsg: if ($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->mekskkquqcumoioc()) { $gskauacumcmekigs = $iimmsoawmoqckmoo; } } } if ($gskauacumcmekigs) { $gskauacumcmekigs->qigsyyqgewgskemg("{$sqeykgyoooqysmca}-action"); } return $gskauacumcmekigs; } public function enqueue() { $ymqmyyeuycgmigyo = 'multistep'; $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->yawoscugkyysowie($meakksicouekcgoe->owygwqwawqoiusis(pr_get_foundation(), $ymqmyyeuycgmigyo, "{$ymqmyyeuycgmigyo}.js")->okawmmwsiuauwsiu()); $this->ewcsyqaaigkicgse('enqueue_multistep_assets'); } }
