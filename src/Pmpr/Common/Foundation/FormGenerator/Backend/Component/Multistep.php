<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\141\x66\164\x65\x72\x5f\147\145\x6e\145\162\141\164\x65\137{$uusmaiomayssaecw}\x5f\x6d\165\154\x74\151\x73\x74\x65\160", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\137\x73\x74\x65\x70\x73", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\147\x65\164\120\162\x69\157\162\x69\164\171"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if (!$wyeyeaaekyoyimqu instanceof Step) { goto amwqgwykwqyqsygy; } if ($wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { goto ekgcsqsycamakgak; } $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); ekgcsqsycamakgak: if ($wyeyeaaekyoyimqu->uisywswywsisyuas()) { goto jwicyuowwocymagu; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto iwyomomasqykuwcw; } $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); iwyomomasqykuwcw: jwicyuowwocymagu: $momcykaoccoymeig++; amwqgwykwqyqsygy: moiwoyyuauwqywom: } mwsuqsikwoimcgiq: $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (isset($this->buttons[$sqeykgyoooqysmca])) { goto coswqmcmeyyaemcs; } $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x4e\145\x78\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto iweqeyugoiogqcsw; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\120\162\x65\166\x69\x6f\x75\163", PR__CMN__FOUNDATION)); goto iweqeyugoiogqcsw; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\123\x75\142\x6d\x69\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto iweqeyugoiogqcsw; } yiswuyuuwakywmiy: iweqeyugoiogqcsw: $this->igmamuiesywmkgeu($gskauacumcmekigs); coswqmcmeyyaemcs: egeeugucoaimuyai: } laqgkacikykmcsos: } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\144\157\x6e\145\137\151\143\x6f\x6e"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
