<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15ec0c0505             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\141\x66\164\x65\x72\x5f\x67\145\156\x65\x72\x61\164\x65\137{$uusmaiomayssaecw}\x5f\155\x75\x6c\164\151\x73\164\x65\160", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\x5f\163\x74\145\x70\163", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\147\x65\x74\120\x72\151\x6f\162\x69\x74\171"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if (!$wyeyeaaekyoyimqu instanceof Step) { goto iugooscuiysaeqgs; } if ($wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { goto wgiuiaqoekymkwwo; } $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); wgiuiaqoekymkwwo: if ($wyeyeaaekyoyimqu->uisywswywsisyuas()) { goto sgaiaqoewagooqoo; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto csiokukquwmccgqc; } $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); csiokukquwmccgqc: sgaiaqoewagooqoo: $momcykaoccoymeig++; iugooscuiysaeqgs: giqssgogumimqkeo: } kecgiacuyaumcewe: $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (isset($this->buttons[$sqeykgyoooqysmca])) { goto kmemegqksaeuqcow; } $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x4e\145\x78\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto wkqumiwieauokkcy; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\120\162\x65\x76\151\x6f\165\x73", PR__CMN__FOUNDATION)); goto wkqumiwieauokkcy; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\x53\165\142\155\151\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto wkqumiwieauokkcy; } yseysoymiwmicuoi: wkqumiwieauokkcy: $this->igmamuiesywmkgeu($gskauacumcmekigs); kmemegqksaeuqcow: mgeiyeygqcoismqq: } icegsqiumouewcqo: } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\144\x6f\x6e\145\x5f\151\x63\x6f\x6e"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
