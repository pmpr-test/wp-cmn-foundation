<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053bb6ecfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; abstract class Page extends Container { protected array $tabs = []; protected array $args = []; protected array $acts = []; protected ?WPListTable $listTable = null; public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm); } public function imkyoqyocosuqasu($ymqmyyeuycgmigyo) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo); } public function kooiucqkggeagccu() : array { return $this->args; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ckiimaaecogswcsu() : array { return $this->acts; } public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self { $this->acts[] = $mauamegckkwueuuo; return $this; } public function waeasakssissiuqg() : ?WPListTable { return $this->listTable; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } return $this; } public function wigskegsqequoeks() { $aaokuekaimigoyue = $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks); $this->qcsmikeggeemccuu("\x61\x64\x6d\x69\156\137\x6d\145\x6e\x75", [$this, "\145\x75\x71\x67\167\151\163\143\167\147\161\x6b\161\x6b\145\x63"]); $this->waqewsckuayqguos("\x70\x61\x67\145\137\x61\144\x6d\x69\156\137\x61\146\x74\x65\x72\137{$aaokuekaimigoyue}\137\164\151\164\154\145", [$this, "\x6b\151\151\x75\171\147\161\x6b\x73\141\x77\161\x65\x75\155\161"])->waqewsckuayqguos("\x70\x61\x67\145\x5f\x61\144\155\x69\156\137\x62\x65\x66\157\x72\x65\137{$aaokuekaimigoyue}\137\164\x61\x62\x73", [$this, "\x6b\x63\143\147\x65\153\x69\x71\147\163\165\167\x6d\157\167\157"]); } public function euqgwiscwgqkqkec() { if ($ewuukoycimkekouc = $this->kooiucqkggeagccu()) { $ewuukoycimkekouc[Constants::wwgusigoaksqmwsm] = [$this, "\x72\x65\x6e\144\x65\x72"]; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ewuukoycimkekouc); } } public function render() { $cciauwuwuqaywgce = null; $this->suicksywcwiggasc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ywoucyskcquysiwc); $aokagokqyuysuksm = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\x74\x61\142", key($ywoucyskcquysiwc)); $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm); } $this->iuygowkemiiwqmiw("\151\x6e\144\x65\x78", ["\164\x61\x62\x73" => $ywoucyskcquysiwc, Constants::imywcsggckkcywgk => $this, Constants::myikkigscysoykgy => $this->ckiimaaecogswcsu(), "\154\151\x73\164\137\164\141\x62\154\x65" => $this->waeasakssissiuqg(), "\143\165\x72\162\x65\156\x74\137\x74\x61\x62" => $cciauwuwuqaywgce, "\143\165\162\162\145\x6e\164\x5f\160\141\x67\145\x5f\154\x69\156\x6b" => $eiicaiwgqkgsekce->msewgimgmcgcomey($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw))], ["\x63\154\x61\163\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } public final function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)); } public function kiiuygqksawqeumq($suaemuyiacqyugsm) { } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { } public function suicksywcwiggasc() { } }
