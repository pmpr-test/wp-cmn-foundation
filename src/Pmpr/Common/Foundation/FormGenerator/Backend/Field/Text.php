<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d54c9a6ea1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ShortcutsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\TextFieldTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Text extends Input { use ShortcutsTrait, TextFieldTrait; protected ?Button $button = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::TEXT); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function wqumaswsiygeowiu() : self { $this->eukmukacucooequu(["\x76\141\x6c\x69\144\x61\164\x69\157\x6e" => true, "\166\x61\154\151\x64\137\x69\x63\x6f\x6e" => IconInterface::ggokgkyiweugsokc, "\151\156\166\x61\154\x69\x64\x5f\x69\x63\x6f\156" => IconInterface::ucomcyskmkiqysee]); return $this; } public function ioumayywwckwmykk(Button $gskauacumcmekigs) : self { $this->button = $gskauacumcmekigs; return $this; } public function geoymcigkogkswau(string $eqgoocgaqwqcimie) : self { $this->iygyugseyaqwywyg($eqgoocgaqwqcimie)->qcgocuceocquqcuw(Constants::eiwauyokukqyueis, true)->qcgocuceocquqcuw(Constants::uoawqiomwkwwaucs, true)->ioumayywwckwmykk($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->mwikyscisascoeea()}\x5f\143\x6f\160\171")->saemoowcasogykak(IconInterface::eicqqkuaaawiycqe)->gmywsauuqwcmakuc("\x74\x61\x72\x67\x65\x74", $this->mwikyscisascoeea())->qigsyyqgewgskemg("\x70\162\55\143\157\x70\171\55\x74\157\55\143\154\151\x70\142\x6f\x61\162\144")->gmscmskmuissgywk(true)); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->cosayasseegkqiii(); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
