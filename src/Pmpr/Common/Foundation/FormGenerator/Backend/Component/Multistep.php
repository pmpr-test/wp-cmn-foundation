<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67052a91f300e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\141\x66\x74\x65\x72\137\x67\145\156\x65\x72\x61\x74\145\137{$uusmaiomayssaecw}\137\x6d\x75\x6c\x74\x69\x73\164\x65\x70", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\x5f\163\164\x65\x70\163", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\x67\145\x74\x50\x72\x69\x6f\x72\x69\164\x79"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if ($wyeyeaaekyoyimqu instanceof Step) { if (!$wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); } if (!$wyeyeaaekyoyimqu->uisywswywsisyuas()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); } } $momcykaoccoymeig++; } } $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (!isset($this->buttons[$sqeykgyoooqysmca])) { $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x4e\x65\x78\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); break; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\120\162\x65\x76\x69\157\x75\163", PR__CMN__FOUNDATION)); break; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\123\165\x62\155\151\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); break; } $this->igmamuiesywmkgeu($gskauacumcmekigs); } } } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x64\157\156\x65\137\151\x63\157\156"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
