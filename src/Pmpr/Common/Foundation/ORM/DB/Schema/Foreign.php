<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fbd6de30612             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; class Foreign extends Schema { const sceswauqiggmqseu = "\157\156\145\x74\x6f\x6f\156\x65"; const muucugsosesmsies = "\x6f\156\145\x74\157\x6d\x61\156\171"; const uoswqowcugqsogqu = "\x6d\x61\x6e\x79\164\157\x6f\x6e\145"; const waoocmyqqmyiqywq = "\x6d\x61\x6e\x79\x74\157\155\x61\x6e\x79"; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = "\x4e\x4f\x20\101\x43\124\111\x4f\x4e"; protected ?string $onUpdate = "\x4e\117\40\x41\103\x54\111\x4f\116"; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->originType = "\x69\x6e\164"; parent::__construct("\146\157\x72\145\151\x67\x6e", $aokagokqyuysuksm, $meqocwsecsywiiqs); } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto iwycgkausoseqmwu; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); iwycgkausoseqmwu: if (!$cmqgmckiyyqacuam) { goto aeoiiewygoiwuiii; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); aeoiiewygoiwuiii: return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto cwoaockwkoukuwae; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); cwoaockwkoukuwae: if (!$cmqgmckiyyqacuam) { goto ksyukmeagigokcgi; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); ksyukmeagigokcgi: $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto eicuywagooikuusg; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); eicuywagooikuusg: if (!$cmqgmckiyyqacuam) { goto iquykqikookaokgq; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); iquykqikookaokgq: $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto ceesgeawumeqkcic; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); ceesgeawumeqkcic: if (!$cmqgmckiyyqacuam) { goto qiyiyuwmuoamwccs; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); qiyiyuwmuoamwccs: $this->wakqsiacyacmumuw(); if ($this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->mwikyscisascoeea(), Constants::mswocgcucqoaesaa)) { goto akkmaiaiamyaikqe; } wp_die(sprintf(__("\x46\x6f\162\145\x69\x67\x6e\x20\x6b\145\171\40\x25\x73\40\x6d\x75\x73\x74\x20\145\x6e\x64\x20\x77\151\x74\150\40\x25\163\x20\x70\157\x73\x74\146\151\170", PR__CMN__FOUNDATION), $this->mwikyscisascoeea(), Constants::mswocgcucqoaesaa)); akkmaiaiamyaikqe: return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { goto iysiwmeymsoucaka; } if (!($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class))) { goto iiikyaquagwawkce; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); iiikyaquagwawkce: goto cuyaakuucgwmcuqq; iysiwmeymsoucaka: $owgumcsyqsamiemg = $egkyssmuqcwaciya; cuyaakuucgwmcuqq: return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw("\143\141\x73\x63\x61\x64\145"); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw("\x73\x65\164\x20\156\x75\x6c\154"); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
