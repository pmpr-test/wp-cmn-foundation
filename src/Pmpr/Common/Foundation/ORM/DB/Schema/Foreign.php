<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\DB\Schema; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\DB\Model; class Foreign extends Schema { const sceswauqiggmqseu = "\x6f\x6e\145\x74\157\157\x6e\x65"; const muucugsosesmsies = "\157\156\145\164\x6f\x6d\141\156\171"; const uoswqowcugqsogqu = "\155\x61\156\x79\x74\157\157\x6e\145"; const waoocmyqqmyiqywq = "\155\x61\x6e\x79\x74\x6f\155\x61\156\x79"; protected $class = null; protected ?string $on = null; protected bool $mappedBy = false; protected ?string $references = Constants::gouqcwikiiygyasc; protected ?string $inversedBy = null; protected ?string $relation = self::sceswauqiggmqseu; protected ?string $onDelete = "\116\117\x20\x41\x43\124\x49\117\x4e"; protected ?string $onUpdate = "\116\x4f\x20\x41\x43\x54\x49\x4f\x4e"; protected ?string $nameInOtherSide = null; public function __construct(string $aokagokqyuysuksm, ?string $meqocwsecsywiiqs = null) { $this->originType = "\x69\x6e\x74"; parent::__construct("\x66\x6f\162\145\x69\x67\156", $aokagokqyuysuksm, $meqocwsecsywiiqs); } public function ugmomksqswgqiasw(?string $cmqgmckiyyqacuam) : self { $this->nameInOtherSide = $cmqgmckiyyqacuam; return $this; } public function ogkqyamocsimiymw() : ?string { return $this->nameInOtherSide; } public function yeoakayeygwguyus() : ?string { return $this->relation; } private function qemiokeaqceqkgso(?string $ayegqaqygsqsmews) : self { $this->relation = $ayegqaqygsqsmews; return $this; } public function geimymogiqyssawi($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto smeocsiuyouseuqo; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); smeocsiuyouseuqo: if (!$cmqgmckiyyqacuam) { goto yqmygsgkwmkeyqmm; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); yqmygsgkwmkeyqmm: return $this->qemiokeaqceqkgso(self::sceswauqiggmqseu); } public function ckgquisaimmgwuyu($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto omuskqikewygsuuu; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); omuskqikewygsuuu: if (!$cmqgmckiyyqacuam) { goto kqumggcumkiygaya; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); kqumggcumkiygaya: $this->kkeymosoimmgsaug()->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::muucugsosesmsies); } public function ckmqkgwcusyaegmm($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto siuwcesauyyweaky; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); siuwcesauyyweaky: if (!$cmqgmckiyyqacuam) { goto wucomycmoigosose; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); wucomycmoigosose: $this->acokiqqgsmoqaeyu(); return $this->qemiokeaqceqkgso(self::waoocmyqqmyiqywq); } public function wuuqgaekqeymecag($egkyssmuqcwaciya = null, $cmqgmckiyyqacuam = null) : self { if (!$egkyssmuqcwaciya) { goto kmasgsycmswqoeii; } $this->uwmyqckcyamwaiww($egkyssmuqcwaciya); kmasgsycmswqoeii: if (!$cmqgmckiyyqacuam) { goto ccikqgeseseueseo; } $this->ugmomksqswgqiasw($cmqgmckiyyqacuam); ccikqgeseseueseo: $this->wakqsiacyacmumuw(); if ($this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($this->mwikyscisascoeea(), Constants::mswocgcucqoaesaa)) { goto uwiqeuqyaseimcyk; } wp_die(sprintf(__("\106\x6f\162\145\151\147\156\x20\153\145\x79\40\x25\x73\x20\155\165\x73\x74\40\x65\156\x64\40\167\x69\x74\x68\40\45\x73\40\x70\157\x73\x74\146\151\x78", PR__CMN__FOUNDATION), $this->mwikyscisascoeea(), Constants::mswocgcucqoaesaa)); uwiqeuqyaseimcyk: return $this->qemiokeaqceqkgso(self::uoswqowcugqsogqu); } public function eiyqqesoywqkegwu() : bool { return self::uoswqowcugqsogqu === $this->yeoakayeygwguyus(); } public function gumeeckcowwoyoci() : bool { return self::muucugsosesmsies === $this->yeoakayeygwguyus(); } public function wmomygggskkoqess() : bool { return self::sceswauqiggmqseu === $this->yeoakayeygwguyus(); } public function ygswmewosceowmya() : bool { return self::waoocmyqqmyiqywq === $this->yeoakayeygwguyus(); } public function uecyuoauykiqqkey() { return $this->class; } public function ggmimykuacwcogaq() : ?Model { $egkyssmuqcwaciya = $this->uecyuoauykiqqkey(); $owgumcsyqsamiemg = null; if ($egkyssmuqcwaciya instanceof Model) { goto syiwwokguucmgsyy; } if (!($egkyssmuqcwaciya && class_exists($egkyssmuqcwaciya) && is_subclass_of($egkyssmuqcwaciya, Model::class))) { goto aeieoesqsyiqwkkk; } $owgumcsyqsamiemg = $egkyssmuqcwaciya::symcgieuakksimmu(); aeieoesqsyiqwkkk: goto mawqcoscmcqkoskk; syiwwokguucmgsyy: $owgumcsyqsamiemg = $egkyssmuqcwaciya; mawqcoscmcqkoskk: return $owgumcsyqsamiemg; } public function uwmyqckcyamwaiww($egkyssmuqcwaciya) : self { $this->class = $egkyssmuqcwaciya; return $this; } public function iueigwuckeaswyuu() : bool { return $this->mappedBy; } public function kkeymosoimmgsaug() : self { $this->mappedBy = true; return $this; } public function aumgkcogqygmwsqy() : ?string { return $this->inversedBy; } public function wakqsiacyacmumuw() : self { $this->inversedBy = true; return $this; } public function giqekaueqsgsmkgo() : ?string { return $this->onDelete; } public function eewuieiqoqmekwmw(?string $smgycasaqmgcaekq) : self { $this->onDelete = $smgycasaqmgcaekq; return $this; } public function kqyscuayyakmwaky() : self { $this->eewuieiqoqmekwmw("\x63\141\163\x63\x61\x64\x65"); return $this; } public function oowcmkiwgqgugkku() : self { $this->eewuieiqoqmekwmw("\x73\145\x74\x20\156\165\x6c\x6c"); return $this; } public function ucqugkkuiooayqie() : ?string { return $this->onUpdate; } public function uumaqsukuwmougwk(?string $muegsmmicsqsgucm) : self { $this->onUpdate = $muegsmmicsqsgucm; return $this; } public function miosasgcmguoamem() : ?string { return $this->on; } public function wqykgeksiuoqcwqe(?string $koegqoagisewcica) : self { $this->on = $koegqoagisewcica; return $this; } public function syccewqoeggkkgke() : ?string { return $this->references; } public function gqseocequggskgww(?string $ykqcceqiqygieeks) : self { $this->references = $ykqcceqiqygieeks; return $this; } }
