<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Traits; trait ArgsTrait { protected array $args = []; public function kooiucqkggeagccu() : ?array { return $this->args; } public function wuyimwscukmqqsqk(string $uusmaiomayssaecw) : bool { return isset($this->args[$uusmaiomayssaecw]); } public function imkyoqyocosuqasu(string $uusmaiomayssaecw, $ggauoeuaesiymgee = null) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->args, $uusmaiomayssaecw, $ggauoeuaesiymgee); } public function aimwwacyywceeoyu(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $qqswgiawgeaeoecu = []; if (!$this->wuyimwscukmqqsqk($uusmaiomayssaecw)) { goto mkuuaucmumoqmogc; } $qqswgiawgeaeoecu = (array) $this->imkyoqyocosuqasu($uusmaiomayssaecw); mkuuaucmumoqmogc: $qqswgiawgeaeoecu[] = $eqgoocgaqwqcimie; $this->igiywquyccyiaucw($uusmaiomayssaecw, $qqswgiawgeaeoecu); return $this; } public function igiywquyccyiaucw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->args[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function mcacmissyeeqkeak(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { if ($this->wuyimwscukmqqsqk($uusmaiomayssaecw)) { goto qsiiueeogkusyayq; } $this->igiywquyccyiaucw($uusmaiomayssaecw, $eqgoocgaqwqcimie); qsiiueeogkusyayq: return $this; } public function eukmukacucooequu(array $ywmkwiwkosakssii = []) : self { foreach ($ywmkwiwkosakssii as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->igiywquyccyiaucw($uusmaiomayssaecw, $eqgoocgaqwqcimie); wecwoieqkcmgyemy: } aoquaueqscawcquu: return $this; } public function emcamkaesyeaaqgm(array $ywmkwiwkosakssii = []) : self { foreach ($ywmkwiwkosakssii as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->mcacmissyeeqkeak($uusmaiomayssaecw, $eqgoocgaqwqcimie); ymuwkueqksmiucek: } mkcqgkuwwkekeyea: return $this; } }
