<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d4df75a3df             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait OptionsTrait { protected array $options = []; public function gkwkqmwweiawigae() : ?array { return $this->options; } public function myacgeeekqcmemge() : bool { return !empty($this->gkwkqmwweiawigae()); } public function ioayksieaoewquom() : self { $this->igiywquyccyiaucw("\x63\157\156\166\145\162\x74", true); return $this; } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function eygwoiaoqmqoamee($uusmaiomayssaecw, $geqcesmqwkeayoiu = "\40\53\x20") : self { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $siwkgiismmgqgykc = ''; foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { if (is_array($omkysikckkcieckq)) { $omkysikckkcieckq = $omkysikckkcieckq[Constants::uissasisiuymwsmu] ?? ''; } if ($omkysikckkcieckq) { $siwkgiismmgqgykc .= "{$omkysikckkcieckq}{$geqcesmqwkeayoiu}"; } } $this->options[$uusmaiomayssaecw] = trim($siwkgiismmgqgykc, $geqcesmqwkeayoiu); return $this; } public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($this->imkyoqyocosuqasu("\143\157\166\145\162\164")) { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); [$eqgoocgaqwqcimie, $pkyyagewkiyckmwy] = [Constants::ciyoccqkiamemcmm, Constants::TEXT]; foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $qiouiwasaauyaaue[$uusmaiomayssaecw] = [$eqgoocgaqwqcimie => $uusmaiomayssaecw, $pkyyagewkiyckmwy => $omkysikckkcieckq]; } $this->options = array_values($qiouiwasaauyaaue); } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
