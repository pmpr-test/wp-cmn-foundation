<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\FormGenerator; trait MultistepTrait { protected array $steps = []; public function wmoeeiseqeecugmu() : bool { return !empty($this->steps); } public function oaegqeiemgwokmgo(array $asuggasaseaacmqu) : self { $this->steps = $asuggasaseaacmqu; return $this; } public function mgqggiyywoageqmo($wyeyeaaekyoyimqu) : self { $this->steps[$wyeyeaaekyoyimqu->mwikyscisascoeea()] = $wyeyeaaekyoyimqu; return $this; } public function maoomkygegkowemi(array $asuggasaseaacmqu) : self { foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { $this->mgqggiyywoageqmo($wyeyeaaekyoyimqu); muewmqsoeqoosicu: } mgomeacemugqgswa: return $this; } public function guiyusikssumecwk() : array { return $this->steps; } public function iiqoooqcakkaeyiw() : self { $this->qigsyyqgewgskemg("\x63\154\x69\143\x6b\141\x62\154\x65\x2d\x73\x74\145\x70\x73"); return $this; } public function cyeuiyggkcqmoecc(string $sqeykgyoooqysmca, $wyeyeaaekyoyimqu = null) { $gskauacumcmekigs = $this->buttons[$sqeykgyoooqysmca] ?? null; if (!$wyeyeaaekyoyimqu) { goto umskgiqgaemaokmw; } switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: case Constants::iueeekcmggceyscu: if (!($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->oqamwksqqyskgwge())) { goto qiykkoqakyesmswm; } $gskauacumcmekigs = $iimmsoawmoqckmoo; qiykkoqakyesmswm: goto ekcsiqgsyyiwyiui; case Constants::sokiwgiwgagukgsg: if (!($iimmsoawmoqckmoo = $wyeyeaaekyoyimqu->mekskkquqcumoioc())) { goto ieceiycekgcommqi; } $gskauacumcmekigs = $iimmsoawmoqckmoo; ieceiycekgcommqi: } uyeiksuwckaowkqm: ekcsiqgsyyiwyiui: umskgiqgaemaokmw: if (!$gskauacumcmekigs) { goto ieuoskasoucciwkq; } $gskauacumcmekigs->qigsyyqgewgskemg("{$sqeykgyoooqysmca}\55\141\143\x74\x69\x6f\156"); ieuoskasoucciwkq: return $gskauacumcmekigs; } public function enqueue() { $ymqmyyeuycgmigyo = "\x6d\165\x6c\164\x69\163\164\145\x70"; $eygsasmqycagyayw = FormGenerator::symcgieuakksimmu()->miocmcoykayoyyau(); $eygsasmqycagyayw->oeoquuwkoywiuesy($eygsasmqycagyayw->owygwqwawqoiusis($ymqmyyeuycgmigyo, $eygsasmqycagyayw->get("{$ymqmyyeuycgmigyo}\56\x6a\163"))->okawmmwsiuauwsiu()); $eygsasmqycagyayw->ewcsyqaaigkicgse("\x65\156\x71\165\145\165\x65\137\x6d\165\x6c\x74\x69\x73\164\145\160\137\x61\x73\163\145\x74\x73"); } }
