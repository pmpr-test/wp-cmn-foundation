<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9fd229d29             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; abstract class Page extends Container { protected array $tabs = []; protected array $args = []; protected array $acts = []; protected ?WPListTable $listTable = null; public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm); } public function imkyoqyocosuqasu($ymqmyyeuycgmigyo) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo); } public function kooiucqkggeagccu() : array { return $this->args; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ckiimaaecogswcsu() : array { return $this->acts; } public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self { $this->acts[] = $mauamegckkwueuuo; return $this; } public function waeasakssissiuqg() : ?WPListTable { return $this->listTable; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } return $this; } public function wigskegsqequoeks() { $aaokuekaimigoyue = $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks); $this->qcsmikeggeemccuu("\141\x64\155\151\x6e\137\x6d\x65\156\165", [$this, "\x65\x75\161\147\167\x69\163\x63\x77\147\x71\x6b\161\153\x65\143"]); $this->waqewsckuayqguos("\x70\141\147\145\x5f\x61\x64\x6d\x69\x6e\x5f\141\x66\164\145\x72\x5f{$aaokuekaimigoyue}\x5f\x74\151\164\154\x65", [$this, "\153\151\151\x75\x79\147\161\x6b\x73\x61\x77\161\x65\165\155\161"])->waqewsckuayqguos("\160\x61\x67\145\137\141\x64\x6d\151\156\137\142\145\x66\x6f\162\x65\137{$aaokuekaimigoyue}\x5f\164\x61\x62\x73", [$this, "\153\143\x63\x67\x65\x6b\151\x71\147\x73\165\167\x6d\x6f\x77\x6f"]); } public function euqgwiscwgqkqkec() { if ($ewuukoycimkekouc = $this->kooiucqkggeagccu()) { $ewuukoycimkekouc[Constants::wwgusigoaksqmwsm] = [$this, "\162\x65\156\144\x65\162"]; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ewuukoycimkekouc); } } public function render() { $cciauwuwuqaywgce = null; $this->suicksywcwiggasc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ywoucyskcquysiwc); $aokagokqyuysuksm = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\x74\x61\142", key($ywoucyskcquysiwc)); $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm); } $this->iuygowkemiiwqmiw("\151\x6e\x64\145\170", ["\x74\x61\x62\163" => $ywoucyskcquysiwc, Constants::imywcsggckkcywgk => $this, Constants::myikkigscysoykgy => $this->ckiimaaecogswcsu(), "\x6c\151\163\164\x5f\164\141\142\154\x65" => $this->waeasakssissiuqg(), "\x63\x75\x72\x72\x65\156\164\x5f\164\x61\x62" => $cciauwuwuqaywgce, "\x63\165\162\x72\145\156\164\x5f\x70\x61\147\x65\x5f\154\x69\x6e\x6b" => $eiicaiwgqkgsekce->msewgimgmcgcomey($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw))], ["\143\x6c\x61\x73\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } public final function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)); } public function kiiuygqksawqeumq($suaemuyiacqyugsm) { } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { } public function suicksywcwiggasc() { } }
