<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1795dce7fb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Register; class RegisterTaxonomy extends Register { protected ?array $objectType = []; protected bool $singleValue = true; protected bool $dropdown = true; protected $metaBoxCb = null; protected ?bool $showTagcloude = null; protected ?string $defaultTerm = null; protected ?bool $showInQuickEdit = null; protected bool $showInAdminColumn = false; protected $metaBoxSanitizeCb = null; protected $updateCountCallback = null; public function __construct() { $this->hierarchical = true; $this->ckwgqocyuaysggma("\150\x69\145\162\x61\162\x63\x68\151\x63\x61\x6c", false); $this->ykuiociqyewiqyog("\137\165\x70\144\141\164\x65\137\160\157\x73\164\137\164\145\162\x6d\137\x63\157\x75\x6e\164"); } public function aaamyckgicycisqq() : ?array { return $this->objectType; } public function kukswgcoysaeescm(?string $mqyaskyaekmkegmg) : self { $this->objectType[] = $mqyaskyaekmkegmg; return $this; } public function jsgkawekewookomk() : self { $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg(); $sisssumicskyceeg = $this->giiayuqckuiecosm(); $this->labels = ["\156\141\155\x65" => _x($kcumookcwskcyqak, "\x74\141\x78\157\x6e\x6f\155\171\x20\x67\145\156\x65\x72\141\x6c\x20\x6e\141\155\x65", PR__CMN__FOUNDATION), "\x6d\145\x6e\165\137\x6e\141\x6d\x65" => $kcumookcwskcyqak, "\145\144\151\164\x5f\x69\164\145\155" => sprintf(__("\x45\x64\x69\x74\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x61\x6c\x6c\137\151\x74\x65\x6d\x73" => sprintf(__("\x41\x6c\154\40\45\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x6e\x6f\164\137\x66\x6f\x75\156\144" => sprintf(__("\x4e\157\x20\x25\x73\x20\146\157\165\156\144\56", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\165\160\144\x61\x74\x65\x5f\151\x74\145\155" => sprintf(__("\x55\160\144\x61\x74\145\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\x61\162\145\x6e\x74\137\151\x74\x65\155" => sprintf(__("\120\141\x72\145\156\164\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\163\145\x61\162\143\x68\137\x69\164\145\155\x73" => sprintf(__("\123\145\141\x72\143\150\40\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x61\x64\x64\x5f\156\x65\167\137\x69\164\145\x6d" => sprintf(__("\101\x64\x64\40\116\145\x77\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\x69\156\x67\x75\154\141\162\x5f\x6e\x61\x6d\145" => _x($sisssumicskyceeg, "\x74\x61\170\x6f\156\157\155\171\x20\163\151\156\147\x75\154\x61\162\40\156\x61\155\145", PR__CMN__FOUNDATION), "\156\x65\167\137\151\x74\x65\x6d\x5f\x6e\141\155\x65" => sprintf(__("\116\145\167\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\157\x70\165\x6c\x61\x72\x5f\151\164\145\155\x73" => sprintf(__("\120\157\160\165\x6c\141\162\40\45\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x70\141\162\145\x6e\x74\x5f\x69\x74\145\x6d\x5f\x63\x6f\x6c\157\156" => sprintf(__("\x50\x61\x72\145\156\x74\40\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\x64\144\137\157\x72\x5f\x72\145\x6d\x6f\x76\x65\x5f\x69\x74\x65\x6d\163" => sprintf(__("\101\x64\x64\x20\x6f\x72\x20\162\x65\x6d\157\x76\x65\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x63\150\157\x6f\x73\145\137\x66\x72\x6f\155\137\x6d\x6f\x73\x74\x5f\165\163\x65\144" => sprintf(__("\103\150\x6f\x6f\x73\145\40\146\x72\x6f\155\x20\x74\x68\145\x20\x6d\x6f\x73\x74\x20\x75\x73\145\x64\40\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\163\145\x70\x61\162\141\164\145\137\x69\164\145\x6d\x73\137\x77\151\164\150\137\143\157\x6d\155\x61\163" => sprintf(__("\123\145\x70\x61\x72\x61\164\145\x20\45\x73\x20\x77\151\x74\x68\40\x63\157\x6d\155\x61\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak)]; return $this; } public function ickqomquaqgqywkw(bool $qyucoagsiyeieyiu) : self { $this->singleValue = $qyucoagsiyeieyiu; return $this; } public function yesqcwicqyewqaco() : bool { return $this->singleValue; } public function oyyqeqoaumkqgccq(bool $gmksciycsesoouoi) : self { $this->dropdown = $gmksciycsesoouoi; return $this; } public function suyyiewcaissamks() : bool { return $this->dropdown; } public function msckacgsuwwakaey($usyakqeaquiiyocq) : self { $this->metaBoxCb = $usyakqeaquiiyocq; return $this; } public function yyesmekaqmgwcgas() { return $this->metaBoxCb; } public function ogacomococeeqame() : self { $this->msckacgsuwwakaey(false); return $this; } public function aeguuokqgmcmsqws(?string $omaeqcgaiaisiciq) : self { $this->defaultTerm = $omaeqcgaiaisiciq; return $this; } public function wqockewwqeywgogw(?bool $qwussygmwiueacsy) : self { $this->showTagcloude = $qwussygmwiueacsy; return $this; } public function wiewcwmcsecmqmgs(?bool $wgekuymcmeccyiqq) : self { $this->showInQuickEdit = $wgekuymcmeccyiqq; return $this; } public function gwkwegiquiisoucg($wsocgiuqgmyamuoq) : self { $this->metaBoxSanitizeCb = $wsocgiuqgmyamuoq; return $this; } public function kayuyeomskgoseuo(bool $emawwccgosaksiem) : self { $this->showInAdminColumn = $emawwccgosaksiem; return $this; } public function ykuiociqyewiqyog(?string $cmqiaeqeiiggaqoe) : self { $this->updateCountCallback = $cmqiaeqeiiggaqoe; return $this; } public function ggqekkkocygywmoy() : ?array { return $this->capabilities; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($this->ggqekkkocygywmoy()) { goto ycekisssayygosaw; } $this->iqoguoscqueomqsk(["\155\x61\x6e\141\147\x65\137\164\145\x72\x6d\x73" => "\155\141\x6e\141\147\145\137\x63\141\x74\145\x67\157\162\x69\x65\x73", "\x65\x64\151\164\137\x74\145\162\x6d\x73" => "\x6d\141\156\141\147\x65\x5f\143\141\164\x65\147\x6f\x72\x69\x65\163", "\144\x65\x6c\x65\x74\145\x5f\x74\x65\162\x6d\x73" => "\155\x61\156\141\x67\x65\x5f\x63\x61\164\145\147\157\x72\x69\x65\x73", "\x61\x73\163\151\147\x6e\x5f\164\145\162\x6d\163" => "\145\144\x69\x74\x5f\x70\x6f\x73\164\163"]); ycekisssayygosaw: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
