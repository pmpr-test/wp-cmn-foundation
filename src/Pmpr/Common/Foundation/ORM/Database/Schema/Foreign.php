<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670dbd402ffa1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Foreign extends Schema { const sceswauqiggmqseu = "\157\156\145\164\157\x6f\x6e\x65"; const muucugsosesmsies = "\157\156\145\164\157\x6d\141\156\x79"; const uoswqowcugqsogqu = "\155\141\156\x79\x74\x6f\x6f\156\x65"; const waoocmyqqmyiqywq = "\155\141\156\171\x74\x6f\155\141\156\x79"; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = "\x4e\x4f\40\x41\103\124\111\x4f\116"; protected ?string $onUpdate = "\116\117\40\x41\103\x54\x49\117\x4e"; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->omqeokeyimawioym("\x69\x6e\x74"); parent::__construct("\x66\157\x72\145\151\147\x6e", $aokagokqyuysuksm, $meqocwsecsywiiqs); $this->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie, $mksyucucyswaukig, ?Model $meywaqqsugaoeyys = null) { if ($meywaqqsugaoeyys && ($this->eiyqqesoywqkegwu() || $this->wmomygggskkoqess())) { $icwicymcioeyeyek = $meywaqqsugaoeyys->iekyeyicoyyawomk()->iscemaoqqckmkago($this->iooowgsqoyqseyuu(), $mksyucucyswaukig); $kooyscwkscsogysg = $this->ggmimykuacwcogaq(); if ($kooyscwkscsogysg) { $pkyyagewkiyckmwy = $kooyscwkscsogysg->uikgwcuascgeissw($icwicymcioeyeyek); if ($pkyyagewkiyckmwy) { if ($iwywmkygwewiamwm = $kooyscwkscsogysg->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $eqgoocgaqwqcimie)) { $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ogigqueukwysusii => $iwywmkygwewiamwm, Constants::qescuiwgsyuikume => $pkyyagewkiyckmwy]); } if ($pkyyagewkiyckmwy) { $eqgoocgaqwqcimie = $pkyyagewkiyckmwy; } } } } return $eqgoocgaqwqcimie; }); } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->wakqsiacyacmumuw(); if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)) { wp_die(sprintf(__("\106\157\x72\145\151\147\156\40\153\145\171\x20\45\x73\40\155\x75\163\x74\40\x65\x6e\144\x20\167\151\x74\x68\x20\x25\163\x20\x70\x6f\x73\x74\x66\151\170", PR__CMN__FOUNDATION), $this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)); } return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { $owgumcsyqsamiemg = $egkyssmuqcwaciya; } else { if ($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class)) { $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); } } return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw("\x63\x61\163\143\141\x64\145"); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw("\163\145\164\40\x6e\165\x6c\x6c"); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
