<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f132f3a1d1b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Origin extends Common { const kqqcmiwuysogswqy = "\x6f\160\164\151\157\156\137\x69\144"; public $timestamps = []; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\x4f\162\151\x67\x69\156", PR__CMN__FOUNDATION))->muuwuqssqkaieqge(__("\x4f\x72\151\x67\151\x6e\x73", PR__CMN__FOUNDATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->gysoeyaguiyewoes(Constants::NAME)->eccqsggkcosmqumc()->gswweykyogmsyawy(__("\x4e\x61\155\145", PR__CMN__FOUNDATION)))->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::kqqcmiwuysogswqy)->ckgquisaimmgwuyu(Option::class)->gswweykyogmsyawy(__("\x4f\160\x74\x69\x6f\156\163", PR__CMN__FOUNDATION))); parent::ewaqwooqoqmcoomi(); } public function register($ymqmyyeuycgmigyo) { $icwicymcioeyeyek = [Constants::NAME => $ymqmyyeuycgmigyo]; if ($this->qumqowkwyaceeqwu($icwicymcioeyeyek)) { goto eicuoesagiuykmos; } $this->gscuuyuyauokoyuo($icwicymcioeyeyek, true); eicuoesagiuykmos: } public function gkwkqmwweiawigae(string $oucuakkaawqoeasm) : array { $qiouiwasaauyaaue = []; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto mkauomqacwwmyigy; } $mguygkocuoaoqqkg = Option::symcgieuakksimmu()->woimamkkeyoyauoa(Constants::yocqkmeouaamomke, $this->keeuqgyooycqoygw($iakkeikwceeomgyq)); if (!$mguygkocuoaoqqkg) { goto aagewueuesckuqke; } foreach ($mguygkocuoaoqqkg as $mksyucucyswaukig) { if (!($uusmaiomayssaecw = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ascagqcquwgmygkm))) { goto usiiuuommggemcke; } $qiouiwasaauyaaue[$uusmaiomayssaecw] = $this->swgcwsiqmygouiqg($mksyucucyswaukig); usiiuuommggemcke: oukacgcyoiggqosq: } eqkaikmaegscweqq: aagewueuesckuqke: mkauomqacwwmyigy: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, string $oucuakkaawqoeasm) { $omkysikckkcieckq = null; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto cmsgssaekakgcqmg; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg(Option::symcgieuakksimmu()->oqomcmyuuakigusk([Constants::yocqkmeouaamomke => $this->keeuqgyooycqoygw($iakkeikwceeomgyq), Constants::ascagqcquwgmygkm => $uusmaiomayssaecw])); cmsgssaekakgcqmg: return $omkysikckkcieckq; } public function csucgayeuwoeeuuw(string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = []) : bool { $ogskakmksyuqsiwg = false; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($ymqmyyeuycgmigyo, Constants::NAME))) { goto osawsyawkikquqya; } $gykmkugsiwyssqis = $this->keeuqgyooycqoygw($iakkeikwceeomgyq); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gykmkugsiwyssqis); aimaqcomigwccomu: } ckscysysmayieagk: $ogskakmksyuqsiwg = true; osawsyawkikquqya: return $ogskakmksyuqsiwg; } public function qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq) : bool { $ogskakmksyuqsiwg = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto cgoqqicyaiwasqme; } $iakkeikwceeomgyq = $this->keeuqgyooycqoygw($this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); cgoqqicyaiwasqme: if (!$iakkeikwceeomgyq) { goto yoeaiskyyqgqiwga; } $ksiyqouuaoymsycg = $kquauwcmkoiegase->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); if ($ksiyqouuaoymsycg) { goto ckagywkumgkaswyy; } $sogksuscggsicmac = $kquauwcmkoiegase->gscuuyuyauokoyuo([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); goto oswgoyqaacoyqegu; ckagywkumgkaswyy: $sogksuscggsicmac = $kquauwcmkoiegase->wqikesawekycweoi($ksiyqouuaoymsycg, [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); oswgoyqaacoyqegu: $ogskakmksyuqsiwg = $sogksuscggsicmac[Constants::ckcawaoawwioqecq] ?? false; yoeaiskyyqgqiwga: return $ogskakmksyuqsiwg; } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, $iakkeikwceeomgyq) : bool { $ekmacukqumaiaquo = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto ioaeiakqkiuqymoq; } $iakkeikwceeomgyq = $this->keeuqgyooycqoygw($this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); ioaeiakqkiuqymoq: if (!$iakkeikwceeomgyq) { goto aesgakksmyecsusi; } $ksiyqouuaoymsycg = $kquauwcmkoiegase->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); if (!$ksiyqouuaoymsycg) { goto cssysqmcgcuwyyuu; } $ekmacukqumaiaquo = (bool) $kquauwcmkoiegase->sgcuwcowgwimgsgk($kquauwcmkoiegase->keeuqgyooycqoygw($ksiyqouuaoymsycg), true); cssysqmcgcuwyyuu: aesgakksmyecsusi: return $ekmacukqumaiaquo; } public function eeukomoeomucsimo(string $ymqmyyeuycgmigyo) : bool { } public function swgcwsiqmygouiqg($mksyucucyswaukig) { $omkysikckkcieckq = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if (!($omkysikckkcieckq && is_string($omkysikckkcieckq))) { goto rwaeioueucocosgu; } if (in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ioyokcgwaowoqskk], true)) { goto wowakayqsywcaogm; } if ($oeymmguogqgaqymw = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($omkysikckkcieckq)) { goto igewmkyikyaiamsq; } $omkysikckkcieckq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->yymguocuqiqucics($omkysikckkcieckq); goto guosgucaaeueacgu; igewmkyikyaiamsq: $omkysikckkcieckq = $oeymmguogqgaqymw; guosgucaaeueacgu: goto ogwosuisocqykoma; wowakayqsywcaogm: $omkysikckkcieckq = $omkysikckkcieckq === Constants::wiquocqckkqkmayo; ogwosuisocqykoma: rwaeioueucocosgu: return $omkysikckkcieckq; } }
