<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             672f20bada3b1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\x61\x66\164\x65\162\x5f\147\145\156\x65\162\x61\164\x65\x5f{$uusmaiomayssaecw}\x5f\155\x75\x6c\x74\x69\163\x74\145\x70", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\x5f\x73\x74\x65\160\163", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\147\145\164\x50\162\151\x6f\x72\x69\x74\x79"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if ($wyeyeaaekyoyimqu instanceof Step) { if (!$wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); } if (!$wyeyeaaekyoyimqu->uisywswywsisyuas()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); } } $momcykaoccoymeig++; } } $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (!isset($this->buttons[$sqeykgyoooqysmca])) { $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x4e\145\x78\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); break; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x50\162\145\x76\151\157\165\163", PR__CMN__FOUNDATION)); break; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\123\x75\x62\155\x69\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); break; } $this->igmamuiesywmkgeu($gskauacumcmekigs); } } } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\144\157\156\x65\x5f\151\143\157\x6e"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
