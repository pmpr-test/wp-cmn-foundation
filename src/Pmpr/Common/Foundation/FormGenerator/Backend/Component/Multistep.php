<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebe091cfc2d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\141\x66\164\x65\162\137\x67\145\x6e\x65\x72\x61\164\x65\x5f{$uusmaiomayssaecw}\x5f\x6d\165\x6c\x74\151\x73\x74\145\x70", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\137\x73\164\145\160\163", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\147\x65\x74\120\x72\151\157\x72\151\x74\171"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if (!$wyeyeaaekyoyimqu instanceof Step) { goto myasecwmmmiemgik; } if ($wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { goto ycekisssayygosaw; } $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); ycekisssayygosaw: if ($wyeyeaaekyoyimqu->uisywswywsisyuas()) { goto oscukosgcqaqwcmi; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto qawqosgwykeguasw; } $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); qawqosgwykeguasw: oscukosgcqaqwcmi: $momcykaoccoymeig++; myasecwmmmiemgik: qmeskaiqawomuqmk: } wwyukkoeeeiiuewk: $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (isset($this->buttons[$sqeykgyoooqysmca])) { goto ieumcesgiqicqima; } $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\116\x65\170\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto eucysoaqoumycmso; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\120\162\x65\166\151\157\x75\163", PR__CMN__FOUNDATION)); goto eucysoaqoumycmso; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\123\165\x62\155\x69\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto eucysoaqoumycmso; } kwagmsukmimymmmg: eucysoaqoumycmso: $this->igmamuiesywmkgeu($gskauacumcmekigs); ieumcesgiqicqima: eacqgkqmwkcsscec: } kwmkusgsuoqoyses: } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\x64\x6f\x6e\145\x5f\151\x63\157\156"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
