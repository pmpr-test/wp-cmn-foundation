<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f27b55badb8             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ShortcutsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\TextFieldTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Text extends Input { use ShortcutsTrait, TextFieldTrait; protected ?Button $button = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::TEXT); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function wqumaswsiygeowiu() : self { $this->eukmukacucooequu(["\166\x61\154\x69\x64\141\164\151\157\x6e" => true, "\166\x61\154\151\144\x5f\x69\143\x6f\156" => IconInterface::ggokgkyiweugsokc, "\x69\156\166\x61\x6c\151\x64\137\151\143\157\x6e" => IconInterface::ucomcyskmkiqysee]); return $this; } public function ioumayywwckwmykk(Button $gskauacumcmekigs) : self { $this->button = $gskauacumcmekigs; return $this; } public function geoymcigkogkswau(string $eqgoocgaqwqcimie) : self { $this->iygyugseyaqwywyg($eqgoocgaqwqcimie)->qcgocuceocquqcuw(Constants::eiwauyokukqyueis, true)->qcgocuceocquqcuw(Constants::uoawqiomwkwwaucs, true)->ioumayywwckwmykk($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->mwikyscisascoeea()}\137\143\x6f\160\x79")->saemoowcasogykak(IconInterface::eicqqkuaaawiycqe)->gmywsauuqwcmakuc("\164\141\162\147\145\164", $this->mwikyscisascoeea())->qigsyyqgewgskemg("\160\x72\55\x63\x6f\160\171\x2d\164\x6f\55\x63\x6c\151\160\142\x6f\x61\x72\x64")->gmscmskmuissgywk(true)); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->cosayasseegkqiii(); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
