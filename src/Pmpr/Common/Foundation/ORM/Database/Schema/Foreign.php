<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6799ffe229367             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Foreign extends Schema { const sceswauqiggmqseu = "\x6f\x6e\145\x74\x6f\x6f\156\x65"; const muucugsosesmsies = "\x6f\x6e\145\x74\x6f\x6d\141\156\x79"; const uoswqowcugqsogqu = "\155\141\x6e\171\164\x6f\157\x6e\x65"; const waoocmyqqmyiqywq = "\155\141\156\x79\x74\157\155\141\156\171"; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = "\116\x4f\x20\101\103\x54\111\117\116"; protected ?string $onUpdate = "\116\x4f\40\x41\x43\124\x49\117\116"; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->omqeokeyimawioym("\x69\x6e\x74"); parent::__construct("\x66\157\x72\145\151\x67\x6e", $aokagokqyuysuksm, $meqocwsecsywiiqs); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, ?Model $meywaqqsugaoeyys = null) { if ($meywaqqsugaoeyys && ($this->eiyqqesoywqkegwu() || $this->wmomygggskkoqess())) { $kooyscwkscsogysg = $this->ggmimykuacwcogaq(); if ($kooyscwkscsogysg) { if (empty($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = sprintf(__("\127\x69\x74\150\157\165\x74\x20\x25\x73", PR__CMN__FOUNDATION), $kooyscwkscsogysg->giiayuqckuiecosm()); } else { $icwicymcioeyeyek = $meywaqqsugaoeyys->iekyeyicoyyawomk()->iscemaoqqckmkago($this->iooowgsqoyqseyuu(), $mksyucucyswaukig); $pkyyagewkiyckmwy = $kooyscwkscsogysg->uikgwcuascgeissw($icwicymcioeyeyek); if ($pkyyagewkiyckmwy) { if ($iwywmkygwewiamwm = $kooyscwkscsogysg->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $eqgoocgaqwqcimie)) { $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ogigqueukwysusii => $iwywmkygwewiamwm, Constants::qescuiwgsyuikume => $pkyyagewkiyckmwy]); } if ($pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = $pkyyagewkiyckmwy; } } } } } return $eqgoocgaqwqcimie; }); } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->wakqsiacyacmumuw(); if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)) { wp_die(sprintf(__("\x46\157\x72\x65\151\x67\x6e\x20\x6b\x65\171\x20\x25\163\x20\155\165\163\164\x20\145\156\x64\x20\x77\x69\164\x68\x20\x25\x73\40\x70\x6f\x73\164\146\x69\x78", PR__CMN__FOUNDATION), $this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)); } return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { $owgumcsyqsamiemg = $egkyssmuqcwaciya; } else { if ($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class)) { $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); } } return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw("\143\141\163\x63\141\144\145"); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw("\163\145\x74\40\156\165\154\154"); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
