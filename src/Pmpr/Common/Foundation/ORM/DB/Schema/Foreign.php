<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa77d1b4081             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; class Foreign extends Schema { const sceswauqiggmqseu = "\x6f\x6e\145\x74\157\x6f\156\145"; const muucugsosesmsies = "\157\156\x65\x74\157\x6d\x61\x6e\171"; const uoswqowcugqsogqu = "\155\x61\156\171\x74\x6f\x6f\156\145"; const waoocmyqqmyiqywq = "\155\x61\x6e\171\x74\157\x6d\x61\x6e\x79"; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = "\x4e\117\40\x41\x43\x54\x49\117\x4e"; protected ?string $onUpdate = "\x4e\x4f\40\101\103\124\x49\117\116"; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->originType = "\151\x6e\x74"; parent::__construct("\x66\157\162\145\151\147\x6e", $aokagokqyuysuksm, $meqocwsecsywiiqs); } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto ksyukmeagigokcgi; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); ksyukmeagigokcgi: if (!$cmqgmckiyyqacuam) { goto eicuywagooikuusg; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); eicuywagooikuusg: return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto iquykqikookaokgq; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); iquykqikookaokgq: if (!$cmqgmckiyyqacuam) { goto ceesgeawumeqkcic; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); ceesgeawumeqkcic: $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto qiyiyuwmuoamwccs; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); qiyiyuwmuoamwccs: if (!$cmqgmckiyyqacuam) { goto akkmaiaiamyaikqe; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); akkmaiaiamyaikqe: $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto iiikyaquagwawkce; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); iiikyaquagwawkce: if (!$cmqgmckiyyqacuam) { goto iysiwmeymsoucaka; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); iysiwmeymsoucaka: $this->wakqsiacyacmumuw(); if ($this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->mwikyscisascoeea(), Constants::mswocgcucqoaesaa)) { goto cuyaakuucgwmcuqq; } wp_die(sprintf(__("\106\x6f\162\145\151\147\x6e\40\153\145\x79\40\x25\163\40\155\x75\163\164\40\145\x6e\x64\x20\x77\x69\164\x68\40\x25\x73\40\160\157\x73\x74\146\x69\170", PR__CMN__FOUNDATION), $this->mwikyscisascoeea(), Constants::mswocgcucqoaesaa)); cuyaakuucgwmcuqq: return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { goto oskwwcgyuwkiuacu; } if (!($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class))) { goto gsgocqicesmaecse; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); gsgocqicesmaecse: goto qsecoiqswyiseake; oskwwcgyuwkiuacu: $owgumcsyqsamiemg = $egkyssmuqcwaciya; qsecoiqswyiseake: return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw("\143\x61\x73\x63\x61\144\x65"); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw("\163\x65\x74\x20\156\165\x6c\154"); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
