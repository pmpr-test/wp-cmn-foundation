<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e176fddf2d5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\x61\x66\164\145\x72\137\147\145\x6e\145\x72\141\164\x65\137{$uusmaiomayssaecw}\x5f\155\x75\154\x74\x69\x73\x74\145\160", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\137\163\x74\145\x70\x73", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\x67\x65\164\120\162\x69\x6f\x72\151\164\171"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if (!$wyeyeaaekyoyimqu instanceof Step) { goto wcgoiisqmmawuiag; } if ($wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { goto yckkwcimmakkieos; } $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); yckkwcimmakkieos: if ($wyeyeaaekyoyimqu->uisywswywsisyuas()) { goto oqkcuegyumswqekg; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto ekwmcssqowkcoyci; } $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); ekwmcssqowkcoyci: oqkcuegyumswqekg: $momcykaoccoymeig++; wcgoiisqmmawuiag: gecywkyeskagueqm: } qscmokiskqyuswqo: $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (isset($this->buttons[$sqeykgyoooqysmca])) { goto aiociqsiiwguaywy; } $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\116\x65\x78\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto guackgkaeswkcaoq; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\120\x72\145\166\151\x6f\x75\163", PR__CMN__FOUNDATION)); goto guackgkaeswkcaoq; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\123\165\x62\155\151\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto guackgkaeswkcaoq; } wyoouquciqoosuim: guackgkaeswkcaoq: $this->igmamuiesywmkgeu($gskauacumcmekigs); aiociqsiiwguaywy: qmwmasuoyuwmcigw: } ewiwaeckgqaiwgio: } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x64\157\156\x65\x5f\151\x63\x6f\156"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
