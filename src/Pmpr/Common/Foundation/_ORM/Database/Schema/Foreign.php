<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6c1476eb8b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\_ORM\Database\Schema; use Pmpr\Common\Foundation\_ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Foreign extends Schema { const sceswauqiggmqseu = "\157\x6e\145\x74\x6f\157\x6e\x65"; const muucugsosesmsies = "\157\156\x65\x74\157\x6d\x61\156\171"; const uoswqowcugqsogqu = "\155\141\x6e\171\164\x6f\157\x6e\145"; const waoocmyqqmyiqywq = "\x6d\x61\x6e\x79\x74\157\155\141\156\171"; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = "\x4e\x4f\40\101\103\x54\111\117\x4e"; protected ?string $onUpdate = "\x4e\x4f\40\x41\103\124\x49\x4f\x4e"; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->omqeokeyimawioym("\x69\156\164"); parent::__construct("\146\x6f\x72\145\151\x67\156", $aokagokqyuysuksm, $meqocwsecsywiiqs); } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto oiywguooqeasueqq; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); oiywguooqeasueqq: if (!$cmqgmckiyyqacuam) { goto equwcsciiggsuiam; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); equwcsciiggsuiam: return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto qsaoyggkqwcgskwk; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); qsaoyggkqwcgskwk: if (!$cmqgmckiyyqacuam) { goto myooisakyuggoggc; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); myooisakyuggoggc: $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto awkqcyusycccekwq; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); awkqcyusycccekwq: if (!$cmqgmckiyyqacuam) { goto yugmwomumkosucsc; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); yugmwomumkosucsc: $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto kqwyogqqwumumiwg; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); kqwyogqqwumumiwg: if (!$cmqgmckiyyqacuam) { goto ykogqmmywykgouqy; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); ykogqmmywykgouqy: $this->wakqsiacyacmumuw(); if ($this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)) { goto aqksouwmeckaqyaq; } wp_die(sprintf(__("\106\157\x72\145\x69\147\156\x20\x6b\145\171\x20\45\x73\x20\x6d\165\163\164\40\145\156\144\40\x77\151\164\x68\40\x25\x73\40\160\157\x73\x74\x66\151\170", PR__CMN__FOUNDATION), $this->iooowgsqoyqseyuu(), Constants::mswocgcucqoaesaa)); aqksouwmeckaqyaq: return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { goto eiicmcasqikiyasw; } if (!($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class))) { goto gmsyoscesymiwwue; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); gmsyoscesymiwwue: goto ayucsuwsiocgycww; eiicmcasqikiyasw: $owgumcsyqsamiemg = $egkyssmuqcwaciya; ayucsuwsiocgycww: return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw("\x63\x61\x73\x63\141\144\x65"); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw("\163\145\164\40\156\165\x6c\154"); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
