<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Page\Admin; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\WPListTable; abstract class Page extends Common { protected array $tabs = []; protected array $args = []; protected array $acts = []; protected ?WPListTable $listTable = null; public function qiuwgoaekqikgcci($aokagokqyuysuksm) : ?Tab { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->equiyaoamqmaeckc(), $aokagokqyuysuksm); } public function imkyoqyocosuqasu($ymqmyyeuycgmigyo) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->kooiucqkggeagccu(), $ymqmyyeuycgmigyo); } public function kooiucqkggeagccu() : array { return $this->args; } public function equiyaoamqmaeckc() : array { return $this->tabs; } public function aucimgwswmgaocae(Tab $cciauwuwuqaywgce) : self { $this->tabs[$cciauwuwuqaywgce->mwikyscisascoeea()] = $cciauwuwuqaywgce; return $this; } public function ckiimaaecogswcsu() : array { return $this->acts; } public function quyawykcegmmwmky(string $mauamegckkwueuuo) : self { $this->acts[] = $mauamegckkwueuuo; return $this; } public function waeasakssissiuqg() : ?WPListTable { return $this->listTable; } public function ciwuiwsyckiiogwo(array $ywoucyskcquysiwc = []) : self { foreach ($ywoucyskcquysiwc as $cciauwuwuqaywgce) { $this->aucimgwswmgaocae($cciauwuwuqaywgce); owmuceyswmgueasi: } qmuwoecuacmkwgem: return $this; } public function wigskegsqequoeks() { $aaokuekaimigoyue = $this->imkyoqyocosuqasu(Constants::qoquaeuooeycomks); $this->qcsmikeggeemccuu("\141\144\x6d\x69\156\x5f\x6d\x65\156\165", [$this, "\x65\x75\161\147\167\151\163\143\167\x67\x71\x6b\x71\x6b\x65\x63"]); $this->waqewsckuayqguos("\160\x61\147\x65\137\141\144\155\x69\156\x5f\x61\x66\x74\145\162\137{$aaokuekaimigoyue}\x5f\x74\151\x74\x6c\x65", [$this, "\153\151\151\165\x79\x67\x71\x6b\163\141\167\x71\x65\x75\155\161"])->waqewsckuayqguos("\160\141\x67\145\137\x61\x64\x6d\151\156\x5f\142\145\x66\157\162\x65\x5f{$aaokuekaimigoyue}\137\164\x61\142\x73", [$this, "\153\143\143\147\145\153\x69\x71\147\163\x75\167\x6d\x6f\167\x6f"]); } public function euqgwiscwgqkqkec() { if (!($ewuukoycimkekouc = $this->kooiucqkggeagccu())) { goto mwsmsguqqkcwiiuk; } $ewuukoycimkekouc[Constants::wwgusigoaksqmwsm] = [$this, "\x72\145\156\144\145\x72"]; $this->caokeucsksukesyo()->wmkogisswkckmeua()->aemwscceysomkuea($ewuukoycimkekouc); mwsmsguqqkcwiiuk: } public function render() { $cciauwuwuqaywgce = null; $this->suicksywcwiggasc(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); if (!($ywoucyskcquysiwc = $this->equiyaoamqmaeckc())) { goto eeauyscekuckoues; } $ywoucyskcquysiwc = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->yaeiiwwyckwugsem($ywoucyskcquysiwc); $aokagokqyuysuksm = $eiicaiwgqkgsekce->gkwaaeusmsaywikg("\164\x61\142", key($ywoucyskcquysiwc)); $cciauwuwuqaywgce = $this->qiuwgoaekqikgcci($aokagokqyuysuksm); eeauyscekuckoues: $this->iuygowkemiiwqmiw("\x69\156\144\145\170", ["\x74\141\x62\163" => $ywoucyskcquysiwc, Constants::imywcsggckkcywgk => $this, Constants::myikkigscysoykgy => $this->ckiimaaecogswcsu(), "\154\151\163\x74\137\x74\141\142\x6c\x65" => $this->waeasakssissiuqg(), "\x63\x75\162\162\145\156\x74\x5f\x74\x61\x62" => $cciauwuwuqaywgce, "\x63\165\x72\162\x65\x6e\x74\x5f\160\x61\147\145\137\x6c\151\x6e\153" => $eiicaiwgqkgsekce->msewgimgmcgcomey($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw))], ["\143\x6c\x61\163\163" => self::class, Constants::qaacaqioeyiuakeu => true]); } public final function qcsgmgoukiouuscw() : bool { return $this->caokeucsksukesyo()->giiecckwoyiawoyy()->kgmogcyekssmokco($this->imkyoqyocosuqasu(Constants::wuowaiyouwecckaw)); } public function kiiuygqksawqeumq($suaemuyiacqyugsm) { } public function kccgekiqgsuwmowo($suaemuyiacqyugsm) { } public function suicksywcwiggasc() { } }
