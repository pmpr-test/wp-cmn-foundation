<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7aad01909e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Foreign extends Schema { const sceswauqiggmqseu = 'onetoone'; const muucugsosesmsies = 'onetomany'; const uoswqowcugqsogqu = 'manytoone'; const waoocmyqqmyiqywq = 'manytomany'; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = 'NO ACTION'; protected ?string $onUpdate = 'NO ACTION'; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->omqeokeyimawioym('int'); parent::__construct('foreign', $aokagokqyuysuksm, $meqocwsecsywiiqs); $this->iwwmociiuayuwssq([$this, 'woammqyeakuskkkk']); } public function woammqyeakuskkkk($eqgoocgaqwqcimie, $mksyucucyswaukig, ?Model $meywaqqsugaoeyys = null, $aaqqkgyougeiueyq = null) { if ($meywaqqsugaoeyys && ($this->eiyqqesoywqkegwu() || $this->wmomygggskkoqess())) { $kooyscwkscsogysg = $this->ggmimykuacwcogaq(); if ($kooyscwkscsogysg) { if (empty($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = sprintf(__('Without %s', PR__CMN__FOUNDATION), $kooyscwkscsogysg->giiayuqckuiecosm()); } else { $eqgoocgaqwqcimie = $this->iysseyicgouwysgk($kooyscwkscsogysg, $meywaqqsugaoeyys->iekyeyicoyyawomk()->iscemaoqqckmkago($this->iooowgsqoyqseyuu(), $mksyucucyswaukig)); } } } return $eqgoocgaqwqcimie; } public function iysseyicgouwysgk($meywaqqsugaoeyys, $mksyucucyswaukig) : string { $aokagokqyuysuksm = $meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig); $pkyyagewkiyckmwy = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig); if (!$pkyyagewkiyckmwy) { $pkyyagewkiyckmwy = $aokagokqyuysuksm; } if ($iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $aokagokqyuysuksm)) { $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ogigqueukwysusii => $iwywmkygwewiamwm, Constants::qescuiwgsyuikume => $pkyyagewkiyckmwy]); } return $pkyyagewkiyckmwy; } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if ($egkyssmuqcwaciya) { $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); } if ($cmqgmckiyyqacuam) { $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); } $this->wakqsiacyacmumuw(); if (!$this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)) { wp_die(sprintf(__('Foreign key %s must end with %s postfix', PR__CMN__FOUNDATION), $this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)); } return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { $owgumcsyqsamiemg = $egkyssmuqcwaciya; } else { if ($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class)) { $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); } } return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw('cascade'); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw('set null'); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
