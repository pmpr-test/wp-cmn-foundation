<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d08e0f3960             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Foreign extends Schema { const sceswauqiggmqseu = "\157\x6e\145\x74\157\157\156\x65"; const muucugsosesmsies = "\x6f\x6e\x65\x74\x6f\x6d\x61\156\171"; const uoswqowcugqsogqu = "\x6d\141\x6e\171\164\157\x6f\x6e\x65"; const waoocmyqqmyiqywq = "\x6d\141\x6e\x79\164\157\155\x61\156\171"; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = "\116\x4f\40\x41\103\x54\x49\117\x4e"; protected ?string $onUpdate = "\116\x4f\40\x41\103\124\x49\x4f\x4e"; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->omqeokeyimawioym("\151\x6e\164"); parent::__construct("\x66\157\162\145\151\x67\x6e", $aokagokqyuysuksm, $meqocwsecsywiiqs); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, ?Model $meywaqqsugaoeyys = null) { if ($meywaqqsugaoeyys && ($this->eiyqqesoywqkegwu() || $this->wmomygggskkoqess())) { $icwicymcioeyeyek = $meywaqqsugaoeyys->iekyeyicoyyawomk()->iscemaoqqckmkago($this->iooowgsqoyqseyuu(), $mksyucucyswaukig); $kooyscwkscsogysg = $this->ggmimykuacwcogaq(); if ($kooyscwkscsogysg) { $pkyyagewkiyckmwy = $kooyscwkscsogysg->uikgwcuascgeissw($icwicymcioeyeyek); if ($iwywmkygwewiamwm = $kooyscwkscsogysg->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $eqgoocgaqwqcimie)) { $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ogigqueukwysusii => $iwywmkygwewiamwm, Constants::qescuiwgsyuikume => $pkyyagewkiyckmwy]); } if ($pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = $pkyyagewkiyckmwy; } } } return $eqgoocgaqwqcimie; }); } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->wakqsiacyacmumuw(); if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)) { wp_die(sprintf(__("\x46\x6f\162\x65\x69\x67\x6e\x20\x6b\x65\x79\40\45\163\x20\155\165\x73\164\x20\145\x6e\x64\40\x77\151\x74\x68\x20\x25\163\40\x70\157\163\164\146\x69\x78", PR__CMN__FOUNDATION), $this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)); } return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { $owgumcsyqsamiemg = $egkyssmuqcwaciya; } else { if ($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class)) { $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); } } return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw("\x63\141\x73\143\x61\x64\145"); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw("\x73\x65\164\x20\156\165\154\x6c"); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
