<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678a99ac00f2f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ShortcutsTrait; use Pmpr\Common\Foundation\FormGenerator\Traits\TextFieldTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Text extends Input { use ShortcutsTrait, TextFieldTrait; protected ?Button $button = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::TEXT); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function wqumaswsiygeowiu() : self { $this->eukmukacucooequu(["\x76\141\x6c\x69\144\141\164\x69\157\156" => true, "\166\x61\154\x69\x64\137\151\x63\x6f\156" => IconInterface::ggokgkyiweugsokc, "\151\x6e\x76\x61\154\151\x64\x5f\151\143\157\x6e" => IconInterface::ucomcyskmkiqysee]); return $this; } public function ioumayywwckwmykk(Button $gskauacumcmekigs) : self { $this->button = $gskauacumcmekigs; return $this; } public function geoymcigkogkswau(string $eqgoocgaqwqcimie) : self { $this->iygyugseyaqwywyg($eqgoocgaqwqcimie)->qcgocuceocquqcuw(Constants::eiwauyokukqyueis, true)->qcgocuceocquqcuw(Constants::uoawqiomwkwwaucs, true)->ioumayywwckwmykk($this->caokeucsksukesyo()->wmkogisswkckmeua()->qoeiescseggagsqs("{$this->mwikyscisascoeea()}\x5f\x63\x6f\x70\x79")->saemoowcasogykak(IconInterface::eicqqkuaaawiycqe)->gmywsauuqwcmakuc("\164\141\162\147\x65\x74", $this->mwikyscisascoeea())->qigsyyqgewgskemg("\160\x72\55\143\x6f\160\171\55\164\x6f\x2d\143\154\x69\x70\142\157\141\162\144")->gmscmskmuissgywk(true)); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->cosayasseegkqiii(); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
