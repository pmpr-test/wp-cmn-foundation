<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723ec7e2db2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; abstract class Page extends Container { protected array $tabs = []; protected array $args = []; protected array $acts = []; protected ?WPListTable $listTable = null; public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm); } public function imkyoqyocosuqasu($ymqmyyeuycgmigyo) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo); } public function kooiucqkggeagccu() : array { return $this->args; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ckiimaaecogswcsu() : array { return $this->acts; } public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self { $this->acts[] = $mauamegckkwueuuo; return $this; } public function waeasakssissiuqg() : ?WPListTable { return $this->listTable; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } return $this; } public function wigskegsqequoeks() { $aaokuekaimigoyue = $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks); $this->qcsmikeggeemccuu("\141\x64\155\x69\x6e\x5f\155\145\x6e\165", [$this, "\x65\165\x71\x67\x77\151\163\x63\x77\x67\161\x6b\x71\x6b\x65\x63"]); $this->waqewsckuayqguos("\160\141\147\145\x5f\x61\x64\155\x69\156\x5f\141\x66\x74\x65\162\x5f{$aaokuekaimigoyue}\137\x74\151\164\154\x65", [$this, "\x6b\151\151\165\x79\147\161\x6b\163\141\x77\x71\x65\x75\155\161"])->waqewsckuayqguos("\x70\x61\147\145\137\x61\x64\x6d\x69\156\137\x62\x65\146\157\162\x65\x5f{$aaokuekaimigoyue}\137\x74\141\142\163", [$this, "\x6b\143\x63\x67\x65\153\x69\x71\147\x73\165\x77\155\x6f\167\157"]); } public function euqgwiscwgqkqkec() { if ($ewuukoycimkekouc = $this->kooiucqkggeagccu()) { $ewuukoycimkekouc[Constants::wwgusigoaksqmwsm] = [$this, "\162\145\156\144\x65\162"]; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ewuukoycimkekouc); } } public function render() { $cciauwuwuqaywgce = null; $this->suicksywcwiggasc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ywoucyskcquysiwc); $aokagokqyuysuksm = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\x74\141\x62", key($ywoucyskcquysiwc)); $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm); } $this->iuygowkemiiwqmiw("\151\x6e\144\x65\170", ["\164\x61\142\163" => $ywoucyskcquysiwc, Constants::imywcsggckkcywgk => $this, Constants::myikkigscysoykgy => $this->ckiimaaecogswcsu(), "\154\151\163\164\x5f\x74\141\142\154\145" => $this->waeasakssissiuqg(), "\143\x75\162\x72\x65\x6e\164\137\x74\x61\142" => $cciauwuwuqaywgce, "\143\x75\162\162\145\156\x74\137\160\141\x67\x65\137\154\151\x6e\x6b" => $eiicaiwgqkgsekce->msewgimgmcgcomey($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw))], ["\x63\x6c\x61\x73\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); } public final function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)); } public function kiiuygqksawqeumq($suaemuyiacqyugsm) { } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { } public function suicksywcwiggasc() { } }
