<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ShortcutsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\TextFieldTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Text extends Input { use ShortcutsTrait, TextFieldTrait; protected ?Button $button = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::TEXT); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function wqumaswsiygeowiu() : self { $this->eukmukacucooequu(["\166\141\154\x69\x64\x61\164\x69\157\156" => true, "\x76\141\154\151\x64\137\151\143\157\156" => IconInterface::ggokgkyiweugsokc, "\151\156\x76\x61\x6c\151\x64\137\x69\143\x6f\x6e" => IconInterface::ucomcyskmkiqysee]); return $this; } public function ioumayywwckwmykk(Button $gskauacumcmekigs) : self { $this->button = $gskauacumcmekigs; return $this; } public function geoymcigkogkswau(string $eqgoocgaqwqcimie) : self { $this->iygyugseyaqwywyg($eqgoocgaqwqcimie)->qcgocuceocquqcuw(Constants::eiwauyokukqyueis, true)->qcgocuceocquqcuw(Constants::uoawqiomwkwwaucs, true)->ioumayywwckwmykk($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->mwikyscisascoeea()}\137\x63\157\x70\171")->saemoowcasogykak(IconInterface::eicqqkuaaawiycqe)->gmywsauuqwcmakuc("\x74\141\x72\147\x65\164", $this->mwikyscisascoeea())->qigsyyqgewgskemg("\x70\x72\x2d\x63\157\160\x79\x2d\164\x6f\x2d\x63\154\x69\160\x62\x6f\141\162\x64")->gmscmskmuissgywk(true)); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->cosayasseegkqiii(); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
