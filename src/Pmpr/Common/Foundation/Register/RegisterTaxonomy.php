<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Register; class RegisterTaxonomy extends Register { protected ?array $objectType = []; protected bool $singleValue = true; protected bool $dropdown = true; protected $metaBoxCb = null; protected ?bool $showTagcloude = null; protected ?string $defaultTerm = null; protected ?bool $showInQuickEdit = null; protected bool $showInAdminColumn = false; protected $metaBoxSanitizeCb = null; protected $updateCountCallback = null; public function __construct() { $this->hierarchical = true; $this->ckwgqocyuaysggma("\x68\x69\x65\162\141\x72\143\x68\151\143\141\x6c", false); $this->ykuiociqyewiqyog("\137\x75\160\144\x61\164\145\x5f\160\157\163\x74\137\164\145\x72\x6d\137\x63\x6f\x75\156\x74"); } public function aaamyckgicycisqq() : ?array { return $this->objectType; } public function kukswgcoysaeescm(?string $mqyaskyaekmkegmg) : self { $this->objectType[] = $mqyaskyaekmkegmg; return $this; } public function ickqomquaqgqywkw(bool $qyucoagsiyeieyiu) : self { $this->singleValue = $qyucoagsiyeieyiu; return $this; } public function yesqcwicqyewqaco() : bool { return $this->singleValue; } public function oyyqeqoaumkqgccq(bool $gmksciycsesoouoi) : self { $this->dropdown = $gmksciycsesoouoi; return $this; } public function suyyiewcaissamks() : bool { return $this->dropdown; } public function msckacgsuwwakaey($usyakqeaquiiyocq) : self { $this->metaBoxCb = $usyakqeaquiiyocq; return $this; } public function yyesmekaqmgwcgas() { return $this->metaBoxCb; } public function ogacomococeeqame() : self { $this->msckacgsuwwakaey(false); return $this; } public function aeguuokqgmcmsqws(?string $omaeqcgaiaisiciq) : self { $this->defaultTerm = $omaeqcgaiaisiciq; return $this; } public function wqockewwqeywgogw(?bool $qwussygmwiueacsy) : self { $this->showTagcloude = $qwussygmwiueacsy; return $this; } public function wiewcwmcsecmqmgs(?bool $wgekuymcmeccyiqq) : self { $this->showInQuickEdit = $wgekuymcmeccyiqq; return $this; } public function gwkwegiquiisoucg($wsocgiuqgmyamuoq) : self { $this->metaBoxSanitizeCb = $wsocgiuqgmyamuoq; return $this; } public function kayuyeomskgoseuo(bool $emawwccgosaksiem) : self { $this->showInAdminColumn = $emawwccgosaksiem; return $this; } public function ykuiociqyewiqyog(?string $cmqiaeqeiiggaqoe) : self { $this->updateCountCallback = $cmqiaeqeiiggaqoe; return $this; } public function ggqekkkocygywmoy() : ?array { return $this->capabilities; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($this->ggqekkkocygywmoy()) { goto gsaiaaeooukaeygk; } $this->iqoguoscqueomqsk(["\155\141\x6e\x61\147\145\x5f\x74\145\x72\155\x73" => "\155\141\x6e\141\x67\145\137\143\141\164\145\147\157\162\x69\145\x73", "\x65\x64\x69\164\137\164\x65\x72\x6d\163" => "\155\x61\x6e\141\x67\x65\x5f\143\141\x74\x65\x67\157\162\x69\145\163", "\144\x65\154\x65\164\x65\x5f\x74\145\162\155\163" => "\x6d\x61\x6e\x61\x67\x65\137\x63\141\x74\x65\x67\x6f\x72\151\x65\x73", "\x61\163\163\x69\147\156\x5f\164\145\162\155\163" => "\x65\144\151\x74\x5f\x70\157\x73\164\x73"]); gsaiaaeooukaeygk: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
