<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d41721935c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; abstract class Page extends Container { protected array $tabs = []; protected array $args = []; protected array $acts = []; protected ?WPListTable $listTable = null; public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm); } public function imkyoqyocosuqasu($ymqmyyeuycgmigyo) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo); } public function kooiucqkggeagccu() : array { return $this->args; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ckiimaaecogswcsu() : array { return $this->acts; } public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self { $this->acts[] = $mauamegckkwueuuo; return $this; } public function waeasakssissiuqg() : ?WPListTable { return $this->listTable; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); } return $this; } public function wigskegsqequoeks() { $aaokuekaimigoyue = $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks); $this->qcsmikeggeemccuu("\141\144\155\151\156\137\155\145\x6e\x75", [$this, "\x65\165\161\147\167\x69\163\143\167\147\x71\153\161\153\145\x63"]); $this->waqewsckuayqguos("\160\x61\147\x65\137\141\144\155\151\x6e\137\x61\146\x74\145\162\137{$aaokuekaimigoyue}\x5f\x74\151\164\154\x65", [$this, "\153\x69\x69\x75\x79\147\x71\153\163\141\x77\x71\x65\165\155\161"])->waqewsckuayqguos("\x70\141\x67\x65\x5f\141\x64\155\151\156\137\142\145\x66\157\162\145\x5f{$aaokuekaimigoyue}\137\x74\141\142\163", [$this, "\153\x63\x63\147\x65\153\x69\x71\147\x73\x75\x77\155\x6f\x77\157"]); } public function euqgwiscwgqkqkec() { if ($ewuukoycimkekouc = $this->kooiucqkggeagccu()) { $ewuukoycimkekouc[Constants::wwgusigoaksqmwsm] = [$this, "\x72\145\x6e\x64\x65\162"]; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ewuukoycimkekouc); } } public function render() { $cciauwuwuqaywgce = null; $this->suicksywcwiggasc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if ($ywoucyskcquysiwc = $this->equiyaoamqmaeckc()) { $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ywoucyskcquysiwc); $aokagokqyuysuksm = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\164\x61\142", key($ywoucyskcquysiwc)); $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm); } $this->iuygowkemiiwqmiw("\151\x6e\144\x65\170", ["\164\x61\x62\x73" => $ywoucyskcquysiwc, Constants::imywcsggckkcywgk => $this, Constants::myikkigscysoykgy => $this->ckiimaaecogswcsu(), "\154\x69\163\x74\x5f\x74\x61\142\x6c\145" => $this->waeasakssissiuqg(), "\x63\x75\162\162\145\x6e\x74\x5f\x74\x61\142" => $cciauwuwuqaywgce, "\x63\x75\x72\162\145\156\x74\137\x70\141\147\x65\x5f\154\x69\156\x6b" => $eiicaiwgqkgsekce->msewgimgmcgcomey($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw))], ["\143\154\x61\x73\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); } public final function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)); } public function kiiuygqksawqeumq($suaemuyiacqyugsm) { } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { } public function suicksywcwiggasc() { } }
