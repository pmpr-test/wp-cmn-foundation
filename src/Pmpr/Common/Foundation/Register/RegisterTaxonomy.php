<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ffe229367             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Register; class RegisterTaxonomy extends Register { protected ?array $objectType = []; protected bool $singleValue = true; protected bool $dropdown = true; protected $metaBoxCb = null; protected ?bool $showTagcloude = null; protected ?string $defaultTerm = null; protected ?bool $showInQuickEdit = null; protected bool $showInAdminColumn = false; protected $metaBoxSanitizeCb = null; protected $updateCountCallback = null; public function __construct() { $this->hierarchical = true; $this->ckwgqocyuaysggma("\150\151\x65\162\141\x72\x63\x68\151\x63\141\154", false); $this->ykuiociqyewiqyog("\x5f\165\160\144\x61\164\x65\x5f\x70\157\163\164\x5f\164\x65\162\155\x5f\x63\x6f\x75\x6e\164"); } public function aaamyckgicycisqq() : ?array { return $this->objectType; } public function kukswgcoysaeescm(?string $mqyaskyaekmkegmg) : self { $this->objectType[] = $mqyaskyaekmkegmg; return $this; } public function ickqomquaqgqywkw(bool $qyucoagsiyeieyiu) : self { $this->singleValue = $qyucoagsiyeieyiu; return $this; } public function yesqcwicqyewqaco() : bool { return $this->singleValue; } public function oyyqeqoaumkqgccq(bool $gmksciycsesoouoi) : self { $this->dropdown = $gmksciycsesoouoi; return $this; } public function suyyiewcaissamks() : bool { return $this->dropdown; } public function msckacgsuwwakaey($usyakqeaquiiyocq) : self { $this->metaBoxCb = $usyakqeaquiiyocq; return $this; } public function yyesmekaqmgwcgas() { return $this->metaBoxCb; } public function ogacomococeeqame() : self { $this->msckacgsuwwakaey(false); return $this; } public function aeguuokqgmcmsqws(?string $omaeqcgaiaisiciq) : self { $this->defaultTerm = $omaeqcgaiaisiciq; return $this; } public function wqockewwqeywgogw(?bool $qwussygmwiueacsy) : self { $this->showTagcloude = $qwussygmwiueacsy; return $this; } public function wiewcwmcsecmqmgs(?bool $wgekuymcmeccyiqq) : self { $this->showInQuickEdit = $wgekuymcmeccyiqq; return $this; } public function gwkwegiquiisoucg($wsocgiuqgmyamuoq) : self { $this->metaBoxSanitizeCb = $wsocgiuqgmyamuoq; return $this; } public function kayuyeomskgoseuo(bool $emawwccgosaksiem) : self { $this->showInAdminColumn = $emawwccgosaksiem; return $this; } public function ykuiociqyewiqyog(?string $cmqiaeqeiiggaqoe) : self { $this->updateCountCallback = $cmqiaeqeiiggaqoe; return $this; } public function ggqekkkocygywmoy() : ?array { return $this->capabilities; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if (!$this->ggqekkkocygywmoy()) { $this->iqoguoscqueomqsk(["\155\x61\x6e\x61\x67\x65\137\164\x65\x72\155\163" => "\x6d\x61\156\141\x67\x65\137\143\141\164\145\147\x6f\x72\151\x65\163", "\145\x64\151\164\x5f\x74\x65\x72\x6d\163" => "\x6d\x61\x6e\x61\147\145\x5f\x63\141\164\145\147\x6f\x72\151\145\163", "\144\x65\154\x65\x74\145\137\x74\x65\x72\155\163" => "\155\141\x6e\141\x67\x65\137\x63\x61\x74\x65\147\157\162\151\x65\x73", "\x61\163\x73\151\x67\x6e\x5f\x74\145\x72\x6d\x73" => "\145\x64\151\164\x5f\x70\x6f\x73\x74\163"]); } parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
