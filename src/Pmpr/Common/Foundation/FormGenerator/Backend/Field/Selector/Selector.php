<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670e55c5a76f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field\Selector; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Field; class Selector extends Field { protected array $levels = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, "\x73\145\x6c\145\143\x74\x6f\x72"); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->qigsyyqgewgskemg("\160\162\x2d\x66\151\x65\x6c\144\55\x73\145\x6c\x65\143\x74\x6f\x72\x2d\151\x6e\x70\x75\x74"); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function kksameuwsykweoyg(Level $iqaosyayeiuaisqi) : self { $this->levels[$iqaosyayeiuaisqi->mwikyscisascoeea()] = $iqaosyayeiuaisqi; return $this; } public function iqmqokkwmywqeogq(array $xwwgygqkqwuaqwsa = []) : self { foreach ($xwwgygqkqwuaqwsa as $iqaosyayeiuaisqi) { $this->kksameuwsykweoyg($iqaosyayeiuaisqi); } return $this; } }
