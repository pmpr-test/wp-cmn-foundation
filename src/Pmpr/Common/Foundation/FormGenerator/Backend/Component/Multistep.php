<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae859a8f03             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\141\146\164\x65\162\137\147\x65\x6e\145\162\141\164\x65\137{$uusmaiomayssaecw}\x5f\x6d\165\x6c\164\x69\163\x74\145\160", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\137\163\x74\x65\160\163", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\147\x65\x74\120\162\x69\157\x72\x69\164\171"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if (!$wyeyeaaekyoyimqu instanceof Step) { goto euuoiciaiieoqyws; } if ($wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { goto ksaimkacqesiguyg; } $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); ksaimkacqesiguyg: if ($wyeyeaaekyoyimqu->uisywswywsisyuas()) { goto oegcoaeyokkgoqyg; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto semymwueqcweowae; } $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); semymwueqcweowae: oegcoaeyokkgoqyg: $momcykaoccoymeig++; euuoiciaiieoqyws: isumwussqyqawwmy: } ueeowyociayoygsa: $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (isset($this->buttons[$sqeykgyoooqysmca])) { goto ukkmusemcqayowoa; } $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\116\x65\170\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto igkeawygswqouuym; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x50\162\145\x76\151\157\x75\163", PR__CMN__FOUNDATION)); goto igkeawygswqouuym; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\123\x75\142\155\151\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto igkeawygswqouuym; } acuyqioeqaoeskya: igkeawygswqouuym: $this->igmamuiesywmkgeu($gskauacumcmekigs); ukkmusemcqayowoa: augyqmcwawmsykme: } wcmksyiisiciasko: } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x64\x6f\156\145\x5f\x69\x63\x6f\x6e"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
