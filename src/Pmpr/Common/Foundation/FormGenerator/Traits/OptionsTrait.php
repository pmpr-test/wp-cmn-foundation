<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6796bb8ecec23             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait OptionsTrait { protected array $options = []; public function gkwkqmwweiawigae() : ?array { return $this->options; } public function myacgeeekqcmemge($uusmaiomayssaecw = null) : bool { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); if ($uusmaiomayssaecw) { return isset($qiouiwasaauyaaue[$uusmaiomayssaecw]); } return !empty($qiouiwasaauyaaue); } public function ioayksieaoewquom() : self { $this->igiywquyccyiaucw("\143\x6f\x6e\166\x65\x72\164", true); return $this; } public function eksgyasugmuassok(array $qiouiwasaauyaaue) : self { $this->options = $qiouiwasaauyaaue; return $this; } public function kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq) : self { $this->options[$uusmaiomayssaecw] = $omkysikckkcieckq; return $this; } public function eygwoiaoqmqoamee($uusmaiomayssaecw, $geqcesmqwkeayoiu = "\40\x2b\x20") : self { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); $siwkgiismmgqgykc = ''; foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { if (is_array($omkysikckkcieckq)) { $omkysikckkcieckq = $omkysikckkcieckq[Constants::uissasisiuymwsmu] ?? ''; } if ($omkysikckkcieckq) { $siwkgiismmgqgykc .= "{$omkysikckkcieckq}{$geqcesmqwkeayoiu}"; } } $this->options[$uusmaiomayssaecw] = trim($siwkgiismmgqgykc, $geqcesmqwkeayoiu); return $this; } public function acauweqyyugwisqc(?array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); } return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($this->msmiagueogcsucgc() && !$this->oiswysuiioecsaae()) { $this->eyygsasuqmommkua(array_key_first($this->gkwkqmwweiawigae())); } if ($this->imkyoqyocosuqasu("\143\x6f\x76\145\x72\164")) { $qiouiwasaauyaaue = $this->gkwkqmwweiawigae(); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $qiouiwasaauyaaue[$uusmaiomayssaecw] = [ Constants::ciyoccqkiamemcmm => $uusmaiomayssaecw, Constants::TEXT => $omkysikckkcieckq, Constants::gouqcwikiiygyasc => $uusmaiomayssaecw, Constants::uissasisiuymwsmu => $omkysikckkcieckq, ]; } $this->options = array_values($qiouiwasaauyaaue); } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
