<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("\x61\x66\x74\x65\x72\137\147\x65\156\x65\x72\x61\164\145\137{$uusmaiomayssaecw}\137\155\x75\x6c\164\151\163\x74\x65\160", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}\137\x73\x74\145\160\163", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, "\147\x65\x74\120\x72\x69\x6f\x72\x69\164\x79"); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if (!$wyeyeaaekyoyimqu instanceof Step) { goto csqakuuiyywassgw; } if ($wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { goto wycuyiukyceccaow; } $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); wycuyiukyceccaow: if ($wyeyeaaekyoyimqu->uisywswywsisyuas()) { goto sqmiymiemeegegic; } $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if (!$this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { goto meseuuacmkuowqau; } $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); meseuuacmkuowqau: sqmiymiemeegegic: $momcykaoccoymeig++; csqakuuiyywassgw: saekesoeysauokkq: } ugcwqacogqoswyse: $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (isset($this->buttons[$sqeykgyoooqysmca])) { goto egmocemomockemia; } $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x4e\145\x78\164", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto sescaagayikiggyq; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__("\x50\162\145\x76\151\157\x75\163", PR__CMN__FOUNDATION)); goto sescaagayikiggyq; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__("\123\165\142\155\x69\x74", PR__CMN__FOUNDATION))->gmscmskmuissgywk(); goto sescaagayikiggyq; } wwwggoemicgwwasy: sescaagayikiggyq: $this->igmamuiesywmkgeu($gskauacumcmekigs); egmocemomockemia: csggsqueaqmwgwkk: } esqiocgueosoksyq: } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu["\144\x6f\156\x65\137\151\x63\x6f\x6e"] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
