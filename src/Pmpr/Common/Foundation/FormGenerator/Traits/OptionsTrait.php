<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f4306668ee2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait OptionsTrait { protected array $options = []; public function gkwkqmwweiawigae() : ?array { return $this->options; } public function myacgeeekqcmemge() : bool { return !empty($this->gkwkqmwweiawigae()); } public function ioayksieaoewquom() : self { $this->igiywquyccyiaucw("\143\157\x6e\166\x65\162\x74", true); return $this; } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function eygwoiaoqmqoamee($uusmaiomayssaecw, $geqcesmqwkeayoiu = "\40\x2b\40") : self { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $siwkgiismmgqgykc = ''; foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { if (!is_array($omkysikckkcieckq)) { goto aockoackcyuqgoky; } $omkysikckkcieckq = $omkysikckkcieckq[Constants::uissasisiuymwsmu] ?? ''; aockoackcyuqgoky: if (!$omkysikckkcieckq) { goto scuysmagomwasugy; } $siwkgiismmgqgykc .= "{$omkysikckkcieckq}{$geqcesmqwkeayoiu}"; scuysmagomwasugy: kiwygqkmigumiiuk: } scgkuqsgoooesoak: $this->options[$uusmaiomayssaecw] = trim($siwkgiismmgqgykc, $geqcesmqwkeayoiu); return $this; } public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); keeayqkcscoegmmc: } yamuiaoquqoesiye: return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!$this->imkyoqyocosuqasu("\143\157\x76\145\162\164")) { goto eyecoeksswsicqkq; } $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); [$eqgoocgaqwqcimie, $pkyyagewkiyckmwy] = [Constants::ciyoccqkiamemcmm, Constants::TEXT]; foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $qiouiwasaauyaaue[$uusmaiomayssaecw] = [$eqgoocgaqwqcimie => $uusmaiomayssaecw, $pkyyagewkiyckmwy => $omkysikckkcieckq]; eyacawwuwcgegekw: } iescmuyqmwkeagcg: $this->options = array_values($qiouiwasaauyaaue); eyecoeksswsicqkq: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
