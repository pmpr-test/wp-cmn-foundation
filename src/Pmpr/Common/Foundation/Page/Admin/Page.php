<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6052e08a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; abstract class Page extends Common { protected array $tabs = []; protected array $args = []; protected array $acts = []; protected ?WPListTable $listTable = null; public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm); } public function imkyoqyocosuqasu($ymqmyyeuycgmigyo) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo); } public function kooiucqkggeagccu() : array { return $this->args; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ckiimaaecogswcsu() : array { return $this->acts; } public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self { $this->acts[] = $mauamegckkwueuuo; return $this; } public function waeasakssissiuqg() : ?WPListTable { return $this->listTable; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); owmuceyswmgueasi: } qmuwoecuacmkwgem: return $this; } public function wigskegsqequoeks() { $aaokuekaimigoyue = $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks); $this->qcsmikeggeemccuu("\141\144\155\x69\156\137\155\145\x6e\x75", [$this, "\x65\165\x71\147\167\151\163\x63\167\147\161\153\x71\x6b\x65\x63"]); $this->waqewsckuayqguos("\160\141\x67\x65\x5f\x61\144\x6d\x69\x6e\x5f\x61\x66\x74\x65\162\x5f{$aaokuekaimigoyue}\137\x74\151\x74\154\x65", [$this, "\x6b\151\x69\165\171\147\161\153\163\x61\x77\161\x65\x75\155\161"])->waqewsckuayqguos("\160\x61\147\x65\x5f\141\x64\155\151\x6e\137\142\x65\146\x6f\x72\145\137{$aaokuekaimigoyue}\137\x74\141\x62\163", [$this, "\153\x63\x63\147\x65\153\x69\x71\147\163\165\x77\155\157\x77\157"]); } public function euqgwiscwgqkqkec() { if (!($ewuukoycimkekouc = $this->kooiucqkggeagccu())) { goto mwsmsguqqkcwiiuk; } $ewuukoycimkekouc[Constants::wwgusigoaksqmwsm] = [$this, "\x72\x65\156\x64\145\162"]; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ewuukoycimkekouc); mwsmsguqqkcwiiuk: } public function render() { $cciauwuwuqaywgce = null; $this->suicksywcwiggasc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto eeauyscekuckoues; } $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ywoucyskcquysiwc); $aokagokqyuysuksm = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\164\141\x62", key($ywoucyskcquysiwc)); $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm); eeauyscekuckoues: $this->iuygowkemiiwqmiw("\x69\x6e\x64\x65\x78", ["\x74\141\x62\x73" => $ywoucyskcquysiwc, Constants::imywcsggckkcywgk => $this, Constants::myikkigscysoykgy => $this->ckiimaaecogswcsu(), "\154\151\163\x74\137\164\x61\142\x6c\x65" => $this->waeasakssissiuqg(), "\143\165\x72\162\145\x6e\164\137\x74\x61\142" => $cciauwuwuqaywgce, "\x63\x75\162\162\x65\x6e\x74\137\x70\141\x67\x65\137\x6c\x69\156\153" => $eiicaiwgqkgsekce->msewgimgmcgcomey($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw))], ["\x63\154\x61\163\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } public final function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)); } public function kiiuygqksawqeumq($suaemuyiacqyugsm) { } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { } public function suicksywcwiggasc() { } }
