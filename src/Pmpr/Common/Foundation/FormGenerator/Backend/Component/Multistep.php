<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\x61\x66\x74\145\162\137\x67\x65\x6e\x65\162\141\x74\x65\x5f{$uusmaiomayssaecw}\137\155\x75\154\164\151\163\x74\145\x70", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\137\163\x74\145\160\163", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\147\x65\x74\120\x72\151\157\x72\151\164\171"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if (!$wyeyeaaekyoyimqu instanceof Step) { goto aacaaeuuscacmgws; } if ($wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { goto cusmikqmacqsyoma; } $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); cusmikqmacqsyoma: if ($wyeyeaaekyoyimqu->uisywswywsisyuas()) { goto uyiyiugiugqiqgce; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto qcqecwaeywouwwyw; } $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); qcqecwaeywouwwyw: uyiyiugiugqiqgce: $momcykaoccoymeig++; aacaaeuuscacmgws: iaemoucqgyeioome: } cqggosuciisguwka: $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (isset($this->buttons[$sqeykgyoooqysmca])) { goto kgseuyacuyamciku; } $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\116\145\170\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto wiisumwwuyqmqggs; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x50\162\x65\x76\x69\x6f\x75\x73", PR__CMN__FOUNDATION)); goto wiisumwwuyqmqggs; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\x53\x75\142\x6d\151\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto wiisumwwuyqmqggs; } ciiggekwccqceewc: wiisumwwuyqmqggs: $this->igmamuiesywmkgeu($gskauacumcmekigs); kgseuyacuyamciku: yawiksokukeuwumm: } imccgasockkumogm: } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\144\157\156\x65\x5f\x69\143\157\x6e"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
