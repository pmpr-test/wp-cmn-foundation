<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; class Foreign extends Schema { const sceswauqiggmqseu = "\x6f\156\x65\x74\x6f\x6f\x6e\x65"; const muucugsosesmsies = "\157\x6e\145\x74\157\155\141\156\171"; const uoswqowcugqsogqu = "\x6d\x61\156\x79\x74\157\x6f\156\145"; const waoocmyqqmyiqywq = "\x6d\x61\x6e\171\x74\x6f\x6d\141\x6e\171"; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = "\x4e\x4f\40\101\x43\x54\111\117\x4e"; protected ?string $onUpdate = "\x4e\117\x20\x41\103\124\111\x4f\116"; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->originType = "\151\x6e\164"; parent::__construct("\x66\157\162\145\151\x67\x6e", $aokagokqyuysuksm, $meqocwsecsywiiqs); } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto cwoaockwkoukuwae; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); cwoaockwkoukuwae: if (!$cmqgmckiyyqacuam) { goto ksyukmeagigokcgi; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); ksyukmeagigokcgi: return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto eicuywagooikuusg; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); eicuywagooikuusg: if (!$cmqgmckiyyqacuam) { goto iquykqikookaokgq; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); iquykqikookaokgq: $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto ceesgeawumeqkcic; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); ceesgeawumeqkcic: if (!$cmqgmckiyyqacuam) { goto qiyiyuwmuoamwccs; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); qiyiyuwmuoamwccs: $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto akkmaiaiamyaikqe; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); akkmaiaiamyaikqe: if (!$cmqgmckiyyqacuam) { goto iiikyaquagwawkce; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); iiikyaquagwawkce: $this->wakqsiacyacmumuw(); if ($this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->mwikyscisascoeea(), Constants::mswocgcucqoaesaa)) { goto iysiwmeymsoucaka; } wp_die(sprintf(__("\x46\157\162\145\x69\147\156\x20\153\145\x79\x20\45\x73\x20\155\165\163\x74\x20\145\x6e\144\x20\x77\151\164\150\x20\45\x73\40\x70\157\163\164\146\151\170", PR__CMN__FOUNDATION), $this->mwikyscisascoeea(), Constants::mswocgcucqoaesaa)); iysiwmeymsoucaka: return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { goto gsgocqicesmaecse; } if (!($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class))) { goto cuyaakuucgwmcuqq; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); cuyaakuucgwmcuqq: goto oskwwcgyuwkiuacu; gsgocqicesmaecse: $owgumcsyqsamiemg = $egkyssmuqcwaciya; oskwwcgyuwkiuacu: return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw("\x63\141\163\x63\141\144\145"); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw("\163\x65\164\x20\156\165\x6c\154"); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
