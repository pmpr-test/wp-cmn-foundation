<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\141\x66\164\x65\162\137\x67\x65\x6e\x65\x72\141\164\145\137{$uusmaiomayssaecw}\137\155\165\x6c\x74\151\x73\164\145\160", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\137\x73\164\x65\160\x73", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\x67\145\164\x50\162\151\157\x72\151\x74\171"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if (!$wyeyeaaekyoyimqu instanceof Step) { goto iugooscuiysaeqgs; } if ($wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { goto wgiuiaqoekymkwwo; } $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); wgiuiaqoekymkwwo: if ($wyeyeaaekyoyimqu->uisywswywsisyuas()) { goto sgaiaqoewagooqoo; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto csiokukquwmccgqc; } $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); csiokukquwmccgqc: sgaiaqoewagooqoo: $momcykaoccoymeig++; iugooscuiysaeqgs: giqssgogumimqkeo: } kecgiacuyaumcewe: $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (isset($this->buttons[$sqeykgyoooqysmca])) { goto kmemegqksaeuqcow; } $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\116\145\170\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto wkqumiwieauokkcy; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\120\x72\x65\x76\151\157\x75\x73", PR__CMN__FOUNDATION)); goto wkqumiwieauokkcy; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\x53\165\142\x6d\x69\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto wkqumiwieauokkcy; } yseysoymiwmicuoi: wkqumiwieauokkcy: $this->igmamuiesywmkgeu($gskauacumcmekigs); kmemegqksaeuqcow: mgeiyeygqcoismqq: } icegsqiumouewcqo: } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\144\157\x6e\x65\x5f\x69\x63\157\x6e"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
