<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d8187bb66             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; abstract class Page extends Common { protected array $tabs = []; protected array $args = []; protected array $acts = []; protected ?WPListTable $listTable = null; public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm); } public function imkyoqyocosuqasu($ymqmyyeuycgmigyo) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo); } public function kooiucqkggeagccu() : array { return $this->args; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ckiimaaecogswcsu() : array { return $this->acts; } public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self { $this->acts[] = $mauamegckkwueuuo; return $this; } public function waeasakssissiuqg() : ?WPListTable { return $this->listTable; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); owmuceyswmgueasi: } qmuwoecuacmkwgem: return $this; } public function wigskegsqequoeks() { $aaokuekaimigoyue = $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks); $this->qcsmikeggeemccuu("\141\144\155\x69\x6e\137\155\145\x6e\165", [$this, "\x65\x75\161\147\x77\151\x73\x63\x77\147\x71\x6b\161\x6b\x65\143"]); $this->waqewsckuayqguos("\x70\x61\x67\x65\x5f\141\x64\155\x69\156\x5f\141\146\x74\x65\x72\137{$aaokuekaimigoyue}\x5f\164\151\x74\154\x65", [$this, "\x6b\x69\x69\x75\171\x67\161\x6b\163\141\167\161\145\165\x6d\161"])->waqewsckuayqguos("\x70\x61\x67\145\x5f\141\x64\155\x69\156\137\x62\x65\x66\x6f\162\145\x5f{$aaokuekaimigoyue}\137\x74\141\x62\x73", [$this, "\153\x63\x63\x67\x65\x6b\x69\x71\147\x73\165\167\x6d\x6f\167\x6f"]); } public function euqgwiscwgqkqkec() { if (!($ewuukoycimkekouc = $this->kooiucqkggeagccu())) { goto mwsmsguqqkcwiiuk; } $ewuukoycimkekouc[Constants::wwgusigoaksqmwsm] = [$this, "\162\145\x6e\144\145\x72"]; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ewuukoycimkekouc); mwsmsguqqkcwiiuk: } public function render() { $cciauwuwuqaywgce = null; $this->suicksywcwiggasc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto eeauyscekuckoues; } $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ywoucyskcquysiwc); $aokagokqyuysuksm = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\164\141\x62", key($ywoucyskcquysiwc)); $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm); eeauyscekuckoues: $this->iuygowkemiiwqmiw("\151\x6e\144\145\x78", ["\164\141\x62\x73" => $ywoucyskcquysiwc, Constants::imywcsggckkcywgk => $this, Constants::myikkigscysoykgy => $this->ckiimaaecogswcsu(), "\x6c\151\x73\164\x5f\x74\141\142\154\x65" => $this->waeasakssissiuqg(), "\143\165\162\x72\x65\156\x74\x5f\x74\141\x62" => $cciauwuwuqaywgce, "\143\x75\x72\x72\145\156\x74\137\x70\141\147\x65\x5f\x6c\151\156\153" => $eiicaiwgqkgsekce->msewgimgmcgcomey($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw))], ["\143\154\x61\163\x73" => self::class, Constants::qaacaqioeyiuakeu => true]); } public final function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)); } public function kiiuygqksawqeumq($suaemuyiacqyugsm) { } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { } public function suicksywcwiggasc() { } }
