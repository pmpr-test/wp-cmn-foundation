<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e2e8864db             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Origin extends Common { const kqqcmiwuysogswqy = "\157\x70\x74\151\157\x6e\x5f\151\x64"; public $timestamps = []; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\x4f\162\151\x67\x69\156", PR__CMN__FOUNDATION))->muuwuqssqkaieqge(__("\117\162\x69\147\151\x6e\x73", PR__CMN__FOUNDATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->gysoeyaguiyewoes(Constants::NAME)->eccqsggkcosmqumc()->gswweykyogmsyawy(__("\116\x61\155\x65", PR__CMN__FOUNDATION)))->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::kqqcmiwuysogswqy)->ckgquisaimmgwuyu(Option::class)->gswweykyogmsyawy(__("\x4f\160\164\x69\157\x6e\163", PR__CMN__FOUNDATION))); parent::ewaqwooqoqmcoomi(); } public function register($ymqmyyeuycgmigyo) { $icwicymcioeyeyek = [Constants::NAME => $ymqmyyeuycgmigyo]; if ($this->qumqowkwyaceeqwu($icwicymcioeyeyek)) { goto ioaeiakqkiuqymoq; } $this->gscuuyuyauokoyuo($icwicymcioeyeyek, true); ioaeiakqkiuqymoq: } public function gkwkqmwweiawigae(string $oucuakkaawqoeasm) : array { $qiouiwasaauyaaue = []; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto wowakayqsywcaogm; } $mguygkocuoaoqqkg = Option::symcgieuakksimmu()->woimamkkeyoyauoa(Constants::yocqkmeouaamomke, $this->keeuqgyooycqoygw($iakkeikwceeomgyq)); if (!$mguygkocuoaoqqkg) { goto guosgucaaeueacgu; } foreach ($mguygkocuoaoqqkg as $mksyucucyswaukig) { if (!($uusmaiomayssaecw = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ascagqcquwgmygkm))) { goto igewmkyikyaiamsq; } $qiouiwasaauyaaue[$uusmaiomayssaecw] = $this->swgcwsiqmygouiqg($mksyucucyswaukig); igewmkyikyaiamsq: aesgakksmyecsusi: } cssysqmcgcuwyyuu: guosgucaaeueacgu: wowakayqsywcaogm: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, string $oucuakkaawqoeasm) { $omkysikckkcieckq = null; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto ogwosuisocqykoma; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg(Option::symcgieuakksimmu()->oqomcmyuuakigusk([Constants::yocqkmeouaamomke => $this->keeuqgyooycqoygw($iakkeikwceeomgyq), Constants::ascagqcquwgmygkm => $uusmaiomayssaecw])); ogwosuisocqykoma: return $omkysikckkcieckq; } public function csucgayeuwoeeuuw(string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = []) : bool { $ogskakmksyuqsiwg = false; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($ymqmyyeuycgmigyo, Constants::NAME))) { goto qqowguycmsmuauyu; } $gykmkugsiwyssqis = $this->keeuqgyooycqoygw($iakkeikwceeomgyq); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gykmkugsiwyssqis); cuqusekekewuseio: } rwaeioueucocosgu: $ogskakmksyuqsiwg = true; qqowguycmsmuauyu: return $ogskakmksyuqsiwg; } public function qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq) : bool { $ogskakmksyuqsiwg = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto yseacqgykcseamce; } $iakkeikwceeomgyq = $this->keeuqgyooycqoygw($this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); yseacqgykcseamce: if (!$iakkeikwceeomgyq) { goto ksmmosiwmsousgkg; } $ksiyqouuaoymsycg = $kquauwcmkoiegase->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); if ($ksiyqouuaoymsycg) { goto xkgykmoskoqykakc; } $sogksuscggsicmac = $kquauwcmkoiegase->gscuuyuyauokoyuo([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); goto aoiaykkukcyyoaio; xkgykmoskoqykakc: $sogksuscggsicmac = $kquauwcmkoiegase->wqikesawekycweoi($ksiyqouuaoymsycg, [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); aoiaykkukcyyoaio: $ogskakmksyuqsiwg = $sogksuscggsicmac[Constants::ckcawaoawwioqecq] ?? false; ksmmosiwmsousgkg: return $ogskakmksyuqsiwg; } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, $iakkeikwceeomgyq) : bool { $ekmacukqumaiaquo = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto komaoacquqwgysgc; } $iakkeikwceeomgyq = $this->keeuqgyooycqoygw($this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); komaoacquqwgysgc: if (!$iakkeikwceeomgyq) { goto msegcuqmgweissmw; } $ksiyqouuaoymsycg = $kquauwcmkoiegase->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); if (!$ksiyqouuaoymsycg) { goto ckyeeqwsugcoksek; } $ekmacukqumaiaquo = (bool) $kquauwcmkoiegase->sgcuwcowgwimgsgk($kquauwcmkoiegase->keeuqgyooycqoygw($ksiyqouuaoymsycg), true); ckyeeqwsugcoksek: msegcuqmgweissmw: return $ekmacukqumaiaquo; } public function eeukomoeomucsimo(string $ymqmyyeuycgmigyo) : bool { } public function swgcwsiqmygouiqg($mksyucucyswaukig) { $omkysikckkcieckq = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if (!($omkysikckkcieckq && is_string($omkysikckkcieckq))) { goto swmmiykiawycgoes; } if (in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ioyokcgwaowoqskk], true)) { goto uwsgccckqqookusc; } if ($oeymmguogqgaqymw = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($omkysikckkcieckq)) { goto siwekyoigwegiosa; } $omkysikckkcieckq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->yymguocuqiqucics($omkysikckkcieckq); goto ucuyaouwikuyyemm; siwekyoigwegiosa: $omkysikckkcieckq = $oeymmguogqgaqymw; ucuyaouwikuyyemm: goto iwccwiiumyyccquy; uwsgccckqqookusc: $omkysikckkcieckq = $omkysikckkcieckq === Constants::wiquocqckkqkmayo; iwccwiiumyyccquy: swmmiykiawycgoes: return $omkysikckkcieckq; } }
