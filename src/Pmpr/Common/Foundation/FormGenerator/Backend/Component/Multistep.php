<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d01ba572bba             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Component; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Traits\MultistepTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class Multistep extends Page { use MultistepTrait; public function qiccuiwooiquycsg() { parent::qiccuiwooiquycsg(); $this->type = Constants::ccggwaweegsyygga; $this->template = Constants::ccggwaweegsyygga; $this->templateClass = self::class; } public final function iumcsgkcwwwsyggc() { $this->esoeigiuggwycwiq(); parent::iumcsgkcwwwsyggc(); } public function esoeigiuggwycwiq() { $uusmaiomayssaecw = $this->cisyiemkeykgkomc(); $this->ewcsyqaaigkicgse("after_generate_{$uusmaiomayssaecw}_multistep", $this); $asuggasaseaacmqu = $this->ocksiywmkyaqseou("{$uusmaiomayssaecw}_steps", $this->guiyusikssumecwk(), $this); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $asuggasaseaacmqu = $gkyciwoiiisgywcs->yaeiiwwyckwugsem($asuggasaseaacmqu, 'getPriority'); $momcykaoccoymeig = 1; foreach ($asuggasaseaacmqu as $wyeyeaaekyoyimqu) { if ($wyeyeaaekyoyimqu instanceof Step) { if (!$wyeyeaaekyoyimqu->iyowqkwcwiuccgag()) { $wyeyeaaekyoyimqu->pwuigqciiuyoaccc($momcykaoccoymeig); } if (!$wyeyeaaekyoyimqu->uisywswywsisyuas()) { $qqscaoyqikuyeoaw = $this->eskggqsasgsiommy($wyeyeaaekyoyimqu->mwikyscisascoeea()); if ($this->kasioquywmeosmsi()->exists($qqscaoyqikuyeoaw)) { $wyeyeaaekyoyimqu->sskkcscekwmyioou($qqscaoyqikuyeoaw); } } $momcykaoccoymeig++; } } $this->oaegqeiemgwokmgo($asuggasaseaacmqu); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); foreach ([Constants::emgswoamyaoagksg, Constants::sokiwgiwgagukgsg, Constants::iueeekcmggceyscu] as $sqeykgyoooqysmca) { if (!isset($this->buttons[$sqeykgyoooqysmca])) { $gskauacumcmekigs = $uuyucgkyusckoaeq->qoeiescseggagsqs($sqeykgyoooqysmca); switch ($sqeykgyoooqysmca) { case Constants::emgswoamyaoagksg: $gskauacumcmekigs->gswweykyogmsyawy(__('Next', PR__CMN__FOUNDATION))->gmscmskmuissgywk(); break; case Constants::sokiwgiwgagukgsg: $gskauacumcmekigs->gswweykyogmsyawy(__('Previous', PR__CMN__FOUNDATION)); break; case Constants::iueeekcmggceyscu: $gskauacumcmekigs->gswweykyogmsyawy(__('Submit', PR__CMN__FOUNDATION))->gmscmskmuissgywk(); break; } $this->igmamuiesywmkgeu($gskauacumcmekigs); } } } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $kkeqqkkkqwkocsyu['done_icon'] = IconInterface::ggokgkyiweugsokc; return $kkeqqkkkqwkocsyu; } public abstract function eaoqskmqmucqamsq(Step $wyeyeaaekyoyimqu) : array; }
