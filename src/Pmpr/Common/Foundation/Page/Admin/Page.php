<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6716beb88b904             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; abstract class Page extends Container { protected array $tabs = []; protected array $args = []; protected array $acts = []; protected ?WPListTable $listTable = null; public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm); } public function imkyoqyocosuqasu($ymqmyyeuycgmigyo) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo); } public function kooiucqkggeagccu() : array { return $this->args; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ckiimaaecogswcsu() : array { return $this->acts; } public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self { $this->acts[] = $mauamegckkwueuuo; return $this; } public function waeasakssissiuqg() : ?WPListTable { return $this->listTable; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } return $this; } public function wigskegsqequoeks() { $aaokuekaimigoyue = $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks); $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\137\x6d\x65\156\x75", [$this, "\x65\165\161\147\x77\151\163\143\167\147\161\153\x71\153\145\143"]); $this->waqewsckuayqguos("\160\141\147\145\x5f\x61\144\155\x69\x6e\137\141\146\164\145\x72\x5f{$aaokuekaimigoyue}\x5f\164\x69\x74\x6c\x65", [$this, "\x6b\x69\151\x75\171\x67\x71\153\x73\141\x77\x71\145\165\x6d\x71"])->waqewsckuayqguos("\x70\x61\x67\x65\137\x61\x64\x6d\x69\x6e\x5f\142\x65\x66\x6f\162\145\x5f{$aaokuekaimigoyue}\137\164\x61\142\x73", [$this, "\153\x63\143\x67\145\153\151\x71\x67\163\165\167\x6d\157\x77\x6f"]); } public function euqgwiscwgqkqkec() { if ($ewuukoycimkekouc = $this->kooiucqkggeagccu()) { $ewuukoycimkekouc[Constants::wwgusigoaksqmwsm] = [$this, "\162\x65\156\144\145\162"]; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ewuukoycimkekouc); } } public function render() { $cciauwuwuqaywgce = null; $this->suicksywcwiggasc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ywoucyskcquysiwc); $aokagokqyuysuksm = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\x74\x61\x62", key($ywoucyskcquysiwc)); $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm); } $this->iuygowkemiiwqmiw("\151\156\x64\145\170", ["\164\141\x62\x73" => $ywoucyskcquysiwc, Constants::imywcsggckkcywgk => $this, Constants::myikkigscysoykgy => $this->ckiimaaecogswcsu(), "\154\x69\163\x74\x5f\164\x61\x62\x6c\x65" => $this->waeasakssissiuqg(), "\143\x75\162\162\x65\x6e\164\137\x74\x61\x62" => $cciauwuwuqaywgce, "\143\x75\x72\162\145\x6e\x74\x5f\160\x61\x67\x65\x5f\x6c\151\156\x6b" => $eiicaiwgqkgsekce->msewgimgmcgcomey($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw))], ["\143\x6c\x61\163\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } public final function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)); } public function kiiuygqksawqeumq($suaemuyiacqyugsm) { } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { } public function suicksywcwiggasc() { } }
