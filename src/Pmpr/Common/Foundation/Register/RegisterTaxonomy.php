<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1810bd5408             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Register; class RegisterTaxonomy extends Register { protected ?array $objectType = []; protected bool $singleValue = true; protected bool $dropdown = true; protected $metaBoxCb = null; protected ?bool $showTagcloude = null; protected ?string $defaultTerm = null; protected ?bool $showInQuickEdit = null; protected bool $showInAdminColumn = false; protected $metaBoxSanitizeCb = null; protected $updateCountCallback = null; public function __construct() { $this->hierarchical = true; $this->ckwgqocyuaysggma("\x68\x69\x65\x72\x61\x72\143\x68\x69\x63\141\154", false); $this->ykuiociqyewiqyog("\x5f\165\x70\x64\x61\x74\145\x5f\160\157\163\164\137\x74\145\162\x6d\x5f\x63\157\165\156\x74"); } public function aaamyckgicycisqq() : ?array { return $this->objectType; } public function kukswgcoysaeescm(?string $mqyaskyaekmkegmg) : self { $this->objectType[] = $mqyaskyaekmkegmg; return $this; } public function jsgkawekewookomk() : self { $kcumookcwskcyqak = $this->qeeuwmmksmqiuywg(); $sisssumicskyceeg = $this->giiayuqckuiecosm(); $this->labels = ["\156\x61\155\x65" => _x($kcumookcwskcyqak, "\x74\141\170\157\x6e\x6f\x6d\171\40\147\145\156\x65\x72\141\x6c\40\156\141\x6d\145", PR__CMN__FOUNDATION), "\x6d\x65\x6e\165\137\x6e\141\155\145" => $kcumookcwskcyqak, "\145\x64\151\164\137\x69\x74\x65\x6d" => sprintf(__("\x45\144\x69\x74\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\x6c\154\137\x69\x74\145\x6d\163" => sprintf(__("\101\154\x6c\x20\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x6e\x6f\x74\x5f\146\x6f\x75\156\x64" => sprintf(__("\x4e\157\x20\45\x73\40\146\x6f\165\156\144\x2e", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x75\160\x64\141\x74\145\137\151\164\x65\155" => sprintf(__("\x55\x70\x64\x61\x74\x65\x20\x25\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x70\141\162\145\x6e\x74\137\x69\164\145\x6d" => sprintf(__("\120\x61\162\145\156\164\x20\x25\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\x73\145\x61\x72\x63\150\x5f\151\164\145\x6d\163" => sprintf(__("\x53\145\141\162\x63\x68\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x61\x64\x64\137\x6e\145\167\137\151\164\x65\155" => sprintf(__("\101\144\x64\x20\x4e\145\x77\40\45\163", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\163\151\x6e\x67\165\154\141\162\x5f\156\x61\155\x65" => _x($sisssumicskyceeg, "\164\141\x78\x6f\x6e\x6f\155\x79\40\163\x69\x6e\x67\x75\x6c\x61\x72\40\x6e\x61\155\145", PR__CMN__FOUNDATION), "\x6e\145\167\137\151\x74\145\x6d\137\156\x61\155\x65" => sprintf(__("\x4e\145\167\40\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\160\157\160\165\154\x61\x72\137\x69\164\x65\x6d\163" => sprintf(__("\120\x6f\x70\165\x6c\141\x72\40\x25\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\160\x61\162\145\x6e\x74\137\151\164\145\155\x5f\143\157\154\x6f\x6e" => sprintf(__("\x50\141\162\x65\156\164\x20\45\x73", PR__CMN__FOUNDATION), $sisssumicskyceeg), "\141\x64\x64\137\x6f\x72\137\162\x65\x6d\157\166\x65\137\x69\x74\145\x6d\x73" => sprintf(__("\x41\144\x64\40\x6f\162\x20\x72\145\155\x6f\166\145\40\x25\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\x63\150\x6f\157\163\x65\137\x66\162\157\x6d\x5f\155\x6f\163\164\x5f\x75\163\145\x64" => sprintf(__("\x43\x68\x6f\157\163\x65\x20\x66\x72\157\155\40\x74\150\145\x20\155\157\x73\x74\40\165\163\145\144\40\45\x73", PR__CMN__FOUNDATION), $kcumookcwskcyqak), "\163\x65\160\141\x72\141\164\145\137\151\164\145\155\163\x5f\167\151\x74\x68\137\143\x6f\155\x6d\x61\x73" => sprintf(__("\x53\x65\160\x61\162\141\x74\x65\40\45\x73\x20\167\x69\x74\x68\x20\x63\157\155\x6d\141\163", PR__CMN__FOUNDATION), $kcumookcwskcyqak)]; return $this; } public function ickqomquaqgqywkw(bool $qyucoagsiyeieyiu) : self { $this->singleValue = $qyucoagsiyeieyiu; return $this; } public function yesqcwicqyewqaco() : bool { return $this->singleValue; } public function oyyqeqoaumkqgccq(bool $gmksciycsesoouoi) : self { $this->dropdown = $gmksciycsesoouoi; return $this; } public function suyyiewcaissamks() : bool { return $this->dropdown; } public function msckacgsuwwakaey($usyakqeaquiiyocq) : self { $this->metaBoxCb = $usyakqeaquiiyocq; return $this; } public function yyesmekaqmgwcgas() { return $this->metaBoxCb; } public function ogacomococeeqame() : self { $this->msckacgsuwwakaey(false); return $this; } public function aeguuokqgmcmsqws(?string $omaeqcgaiaisiciq) : self { $this->defaultTerm = $omaeqcgaiaisiciq; return $this; } public function wqockewwqeywgogw(?bool $qwussygmwiueacsy) : self { $this->showTagcloude = $qwussygmwiueacsy; return $this; } public function wiewcwmcsecmqmgs(?bool $wgekuymcmeccyiqq) : self { $this->showInQuickEdit = $wgekuymcmeccyiqq; return $this; } public function gwkwegiquiisoucg($wsocgiuqgmyamuoq) : self { $this->metaBoxSanitizeCb = $wsocgiuqgmyamuoq; return $this; } public function kayuyeomskgoseuo(bool $emawwccgosaksiem) : self { $this->showInAdminColumn = $emawwccgosaksiem; return $this; } public function ykuiociqyewiqyog(?string $cmqiaeqeiiggaqoe) : self { $this->updateCountCallback = $cmqiaeqeiiggaqoe; return $this; } public function ggqekkkocygywmoy() : ?array { return $this->capabilities; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { if ($this->ggqekkkocygywmoy()) { goto ycekisssayygosaw; } $this->iqoguoscqueomqsk(["\x6d\141\156\x61\x67\x65\137\x74\145\162\x6d\x73" => "\x6d\141\156\141\147\x65\x5f\x63\x61\164\145\147\x6f\162\151\145\163", "\x65\x64\x69\x74\137\x74\x65\x72\155\x73" => "\155\141\x6e\x61\147\x65\137\143\141\x74\x65\x67\157\162\x69\145\x73", "\x64\145\x6c\x65\x74\145\x5f\x74\x65\x72\155\163" => "\155\x61\156\x61\x67\x65\137\143\x61\164\x65\x67\x6f\162\151\145\163", "\x61\x73\163\x69\x67\x6e\x5f\x74\145\162\155\163" => "\145\144\x69\x74\x5f\160\157\x73\x74\x73"]); ycekisssayygosaw: parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
