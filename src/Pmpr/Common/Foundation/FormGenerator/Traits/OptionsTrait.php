<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678d3d47a28db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait OptionsTrait { protected array $options = []; public function gkwkqmwweiawigae() : ?array { return $this->options; } public function myacgeeekqcmemge() : bool { return !empty($this->gkwkqmwweiawigae()); } public function ioayksieaoewquom() : self { $this->igiywquyccyiaucw("\x63\x6f\156\x76\145\x72\164", true); return $this; } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function eygwoiaoqmqoamee($uusmaiomayssaecw, $geqcesmqwkeayoiu = "\x20\53\x20") : self { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $siwkgiismmgqgykc = ''; foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { if (is_array($omkysikckkcieckq)) { $omkysikckkcieckq = $omkysikckkcieckq[Constants::uissasisiuymwsmu] ?? ''; } if ($omkysikckkcieckq) { $siwkgiismmgqgykc .= "{$omkysikckkcieckq}{$geqcesmqwkeayoiu}"; } } $this->options[$uusmaiomayssaecw] = trim($siwkgiismmgqgykc, $geqcesmqwkeayoiu); return $this; } public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($this->imkyoqyocosuqasu("\143\x6f\x76\x65\162\164")) { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); [$eqgoocgaqwqcimie, $pkyyagewkiyckmwy] = [Constants::ciyoccqkiamemcmm, Constants::TEXT]; foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $qiouiwasaauyaaue[$uusmaiomayssaecw] = [$eqgoocgaqwqcimie => $uusmaiomayssaecw, $pkyyagewkiyckmwy => $omkysikckkcieckq]; } $this->options = array_values($qiouiwasaauyaaue); } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
