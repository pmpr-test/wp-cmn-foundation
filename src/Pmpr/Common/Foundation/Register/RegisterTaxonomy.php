<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d54c9a6ea1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Register; class RegisterTaxonomy extends Register { protected ?array $objectType = []; protected bool $singleValue = true; protected bool $dropdown = true; protected $metaBoxCb = null; protected ?bool $showTagcloude = null; protected ?string $defaultTerm = null; protected ?bool $showInQuickEdit = null; protected bool $showInAdminColumn = false; protected $metaBoxSanitizeCb = null; protected $updateCountCallback = null; public function __construct() { $this->hierarchical = true; $this->ckwgqocyuaysggma("\150\x69\x65\162\141\162\143\x68\151\x63\x61\x6c", false); $this->ykuiociqyewiqyog("\137\x75\x70\x64\x61\x74\145\x5f\x70\x6f\x73\164\137\x74\x65\x72\x6d\137\x63\x6f\165\x6e\x74"); } public function aaamyckgicycisqq() : ?array { return $this->objectType; } public function kukswgcoysaeescm(?string $mqyaskyaekmkegmg) : self { $this->objectType[] = $mqyaskyaekmkegmg; return $this; } public function ickqomquaqgqywkw(bool $qyucoagsiyeieyiu) : self { $this->singleValue = $qyucoagsiyeieyiu; return $this; } public function yesqcwicqyewqaco() : bool { return $this->singleValue; } public function oyyqeqoaumkqgccq(bool $gmksciycsesoouoi) : self { $this->dropdown = $gmksciycsesoouoi; return $this; } public function suyyiewcaissamks() : bool { return $this->dropdown; } public function msckacgsuwwakaey($usyakqeaquiiyocq) : self { $this->metaBoxCb = $usyakqeaquiiyocq; return $this; } public function yyesmekaqmgwcgas() { return $this->metaBoxCb; } public function ogacomococeeqame() : self { $this->msckacgsuwwakaey(false); return $this; } public function aeguuokqgmcmsqws(?string $omaeqcgaiaisiciq) : self { $this->defaultTerm = $omaeqcgaiaisiciq; return $this; } public function wqockewwqeywgogw(?bool $qwussygmwiueacsy) : self { $this->showTagcloude = $qwussygmwiueacsy; return $this; } public function wiewcwmcsecmqmgs(?bool $wgekuymcmeccyiqq) : self { $this->showInQuickEdit = $wgekuymcmeccyiqq; return $this; } public function gwkwegiquiisoucg($wsocgiuqgmyamuoq) : self { $this->metaBoxSanitizeCb = $wsocgiuqgmyamuoq; return $this; } public function kayuyeomskgoseuo(bool $emawwccgosaksiem) : self { $this->showInAdminColumn = $emawwccgosaksiem; return $this; } public function ykuiociqyewiqyog(?string $cmqiaeqeiiggaqoe) : self { $this->updateCountCallback = $cmqiaeqeiiggaqoe; return $this; } public function ggqekkkocygywmoy() : ?array { return $this->capabilities; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!$this->ggqekkkocygywmoy()) { $this->iqoguoscqueomqsk(["\155\x61\x6e\x61\x67\145\137\164\x65\162\155\163" => "\x6d\x61\156\141\x67\145\137\143\141\164\145\x67\x6f\162\x69\x65\x73", "\145\144\151\x74\x5f\x74\145\162\x6d\163" => "\x6d\x61\x6e\x61\147\145\x5f\143\x61\x74\x65\147\157\x72\151\145\163", "\x64\145\154\145\x74\x65\x5f\164\145\x72\155\x73" => "\x6d\x61\156\141\x67\x65\137\x63\x61\x74\x65\x67\157\x72\151\145\x73", "\141\x73\163\x69\147\x6e\x5f\164\145\162\x6d\x73" => "\145\x64\x69\164\137\x70\157\x73\x74\x73"]); } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
