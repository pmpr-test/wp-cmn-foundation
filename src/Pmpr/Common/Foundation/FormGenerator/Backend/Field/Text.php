<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6773f9903c56c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ShortcutsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\TextFieldTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Text extends Input { use ShortcutsTrait, TextFieldTrait; protected ?Button $button = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::TEXT); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function wqumaswsiygeowiu() : self { $this->eukmukacucooequu(["\166\x61\154\x69\144\141\164\151\157\x6e" => true, "\x76\141\154\151\144\137\151\x63\157\x6e" => IconInterface::ggokgkyiweugsokc, "\151\156\x76\x61\154\151\144\x5f\151\x63\157\x6e" => IconInterface::ucomcyskmkiqysee]); return $this; } public function ioumayywwckwmykk(Button $gskauacumcmekigs) : self { $this->button = $gskauacumcmekigs; return $this; } public function geoymcigkogkswau(string $eqgoocgaqwqcimie) : self { $this->iygyugseyaqwywyg($eqgoocgaqwqcimie)->qcgocuceocquqcuw(Constants::eiwauyokukqyueis, true)->qcgocuceocquqcuw(Constants::uoawqiomwkwwaucs, true)->ioumayywwckwmykk($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->mwikyscisascoeea()}\x5f\143\157\x70\171")->saemoowcasogykak(IconInterface::eicqqkuaaawiycqe)->gmywsauuqwcmakuc("\x74\x61\x72\x67\145\164", $this->mwikyscisascoeea())->qigsyyqgewgskemg("\160\162\x2d\x63\x6f\160\x79\55\x74\x6f\55\x63\x6c\x69\160\x62\157\x61\x72\144")->gmscmskmuissgywk(true)); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->cosayasseegkqiii(); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
