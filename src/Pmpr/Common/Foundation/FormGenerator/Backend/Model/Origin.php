<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04f73b21             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Origin extends Common { const kqqcmiwuysogswqy = "\157\x70\164\151\157\x6e\x5f\151\144"; public $timestamps = []; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\117\162\x69\x67\151\156", PR__CMN__FOUNDATION))->muuwuqssqkaieqge(__("\x4f\162\151\x67\x69\156\x73", PR__CMN__FOUNDATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->gysoeyaguiyewoes(Constants::NAME)->gswweykyogmsyawy(__("\116\x61\155\x65", PR__CMN__FOUNDATION)))->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::kqqcmiwuysogswqy)->ckgquisaimmgwuyu(Option::class)->gswweykyogmsyawy(__("\x4f\160\x74\151\157\x6e\163", PR__CMN__FOUNDATION))); parent::ewaqwooqoqmcoomi(); } public function register($ymqmyyeuycgmigyo) { $icwicymcioeyeyek = [Constants::NAME => $ymqmyyeuycgmigyo]; if ($this->qumqowkwyaceeqwu($icwicymcioeyeyek)) { goto myegqayeyqaigmqi; } $this->gscuuyuyauokoyuo($icwicymcioeyeyek, true); myegqayeyqaigmqi: } public function gkwkqmwweiawigae(string $oucuakkaawqoeasm) : array { $qiouiwasaauyaaue = []; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto mqigiiusqaieqeaa; } $mguygkocuoaoqqkg = Option::symcgieuakksimmu()->woimamkkeyoyauoa(Constants::yocqkmeouaamomke, $this->keeuqgyooycqoygw($iakkeikwceeomgyq)); if (!$mguygkocuoaoqqkg) { goto cuwasskqkoysieey; } foreach ($mguygkocuoaoqqkg as $mksyucucyswaukig) { if (!($uusmaiomayssaecw = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ascagqcquwgmygkm))) { goto kuyeoaemuwcqkoae; } $qiouiwasaauyaaue[$uusmaiomayssaecw] = $this->swgcwsiqmygouiqg($mksyucucyswaukig); kuyeoaemuwcqkoae: asoweekcciigkweo: } qqocmsauqkwoscqy: cuwasskqkoysieey: mqigiiusqaieqeaa: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, string $oucuakkaawqoeasm) { $omkysikckkcieckq = null; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto igeiewqcwieuawms; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg(Option::symcgieuakksimmu()->oqomcmyuuakigusk([Constants::yocqkmeouaamomke => $this->keeuqgyooycqoygw($iakkeikwceeomgyq), Constants::ascagqcquwgmygkm => $uusmaiomayssaecw])); igeiewqcwieuawms: return $omkysikckkcieckq; } public function csucgayeuwoeeuuw(string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = []) : bool { $ogskakmksyuqsiwg = false; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($ymqmyyeuycgmigyo, Constants::NAME))) { goto qyeewwmuogssaegc; } $gykmkugsiwyssqis = $this->keeuqgyooycqoygw($iakkeikwceeomgyq); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gykmkugsiwyssqis); egumckcoaaowkgoy: } wuqysikmouuiawwi: $ogskakmksyuqsiwg = true; qyeewwmuogssaegc: return $ogskakmksyuqsiwg; } public function qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq) : bool { $ogskakmksyuqsiwg = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto wiaugmimkuikykys; } $iakkeikwceeomgyq = $this->keeuqgyooycqoygw($this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); wiaugmimkuikykys: if (!$iakkeikwceeomgyq) { goto akuiskwoukoesuou; } $ksiyqouuaoymsycg = $kquauwcmkoiegase->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); if ($ksiyqouuaoymsycg) { goto uisaoikyqyseiyas; } $sogksuscggsicmac = $kquauwcmkoiegase->gscuuyuyauokoyuo([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); goto gqaiqcgwsmyugimu; uisaoikyqyseiyas: $sogksuscggsicmac = $kquauwcmkoiegase->wqikesawekycweoi($ksiyqouuaoymsycg, [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); gqaiqcgwsmyugimu: $ogskakmksyuqsiwg = $sogksuscggsicmac[Constants::ckcawaoawwioqecq] ?? false; akuiskwoukoesuou: return $ogskakmksyuqsiwg; } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, $iakkeikwceeomgyq) : bool { $ekmacukqumaiaquo = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto eokgqgsswamgswqu; } $iakkeikwceeomgyq = $this->keeuqgyooycqoygw($this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); eokgqgsswamgswqu: if (!$iakkeikwceeomgyq) { goto uyouoeaoqcieeayg; } $ksiyqouuaoymsycg = $kquauwcmkoiegase->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); if (!$ksiyqouuaoymsycg) { goto gcumogmsuuyuwsie; } $ekmacukqumaiaquo = (bool) $kquauwcmkoiegase->sgcuwcowgwimgsgk($kquauwcmkoiegase->keeuqgyooycqoygw($ksiyqouuaoymsycg), true); gcumogmsuuyuwsie: uyouoeaoqcieeayg: return $ekmacukqumaiaquo; } public function eeukomoeomucsimo(string $ymqmyyeuycgmigyo) : bool { } public function swgcwsiqmygouiqg($mksyucucyswaukig) { $omkysikckkcieckq = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if (!($omkysikckkcieckq && is_string($omkysikckkcieckq))) { goto uwwooikcoamioeaq; } if (in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ioyokcgwaowoqskk], true)) { goto suaouieqqoauuwme; } if ($oeymmguogqgaqymw = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($omkysikckkcieckq)) { goto sumsswekusmugwcc; } $omkysikckkcieckq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->yymguocuqiqucics($omkysikckkcieckq); goto quoamckmecwqkkus; sumsswekusmugwcc: $omkysikckkcieckq = $oeymmguogqgaqymw; quoamckmecwqkkus: goto kewooggoaouemcaq; suaouieqqoauuwme: $omkysikckkcieckq = $omkysikckkcieckq === Constants::wiquocqckkqkmayo; kewooggoaouemcaq: uwwooikcoamioeaq: return $omkysikckkcieckq; } }
