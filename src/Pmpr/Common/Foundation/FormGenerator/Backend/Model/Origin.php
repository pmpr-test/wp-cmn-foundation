<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5e76cb0010             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Origin extends Common { const kqqcmiwuysogswqy = "\157\160\164\151\x6f\x6e\137\151\x64"; public $timestamps = []; public function ckgmycmaukqgkosk() { $this->oyeskqayoscwciem()->guiaswksukmgageq(__("\x4f\x72\x69\147\x69\x6e", PR__CMN__FOUNDATION))->muuwuqssqkaieqge(__("\x4f\x72\x69\147\151\156\163", PR__CMN__FOUNDATION)); parent::ckgmycmaukqgkosk(); } public function ewaqwooqoqmcoomi() { $this->cquokmemekqqywgi($this->gysoeyaguiyewoes(Constants::NAME)->eccqsggkcosmqumc()->gswweykyogmsyawy(__("\x4e\x61\155\x65", PR__CMN__FOUNDATION)))->cquokmemekqqywgi($this->eoaomaokwkwqyqiq(self::kqqcmiwuysogswqy)->ckgquisaimmgwuyu(Option::class)->gswweykyogmsyawy(__("\117\160\164\151\157\156\x73", PR__CMN__FOUNDATION))); parent::ewaqwooqoqmcoomi(); } public function register($ymqmyyeuycgmigyo) { $icwicymcioeyeyek = [Constants::NAME => $ymqmyyeuycgmigyo]; if ($this->qumqowkwyaceeqwu($icwicymcioeyeyek)) { goto guwyuigmkeeqssgw; } $this->gscuuyuyauokoyuo($icwicymcioeyeyek, true); guwyuigmkeeqssgw: } public function gkwkqmwweiawigae(string $oucuakkaawqoeasm) : array { $qiouiwasaauyaaue = []; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto ekoeysiuqeggaqku; } $mguygkocuoaoqqkg = Option::symcgieuakksimmu()->woimamkkeyoyauoa(Constants::yocqkmeouaamomke, $this->keeuqgyooycqoygw($iakkeikwceeomgyq)); if (!$mguygkocuoaoqqkg) { goto ywiugkwcqkomgucy; } foreach ($mguygkocuoaoqqkg as $mksyucucyswaukig) { if (!($uusmaiomayssaecw = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ascagqcquwgmygkm))) { goto ugqeagqqaucqkcys; } $qiouiwasaauyaaue[$uusmaiomayssaecw] = $this->swgcwsiqmygouiqg($mksyucucyswaukig); ugqeagqqaucqkcys: oiissisqowcgwiyc: } cmogamaycywckuim: ywiugkwcqkomgucy: ekoeysiuqeggaqku: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, string $oucuakkaawqoeasm) { $omkysikckkcieckq = null; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto sqcoigaqqssykoui; } $omkysikckkcieckq = $this->swgcwsiqmygouiqg(Option::symcgieuakksimmu()->oqomcmyuuakigusk([Constants::yocqkmeouaamomke => $this->keeuqgyooycqoygw($iakkeikwceeomgyq), Constants::ascagqcquwgmygkm => $uusmaiomayssaecw])); sqcoigaqqssykoui: return $omkysikckkcieckq; } public function csucgayeuwoeeuuw(string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = []) : bool { $ogskakmksyuqsiwg = false; if (!($iakkeikwceeomgyq = $this->akkkoiiymmamsauc($ymqmyyeuycgmigyo, Constants::NAME))) { goto wkmsuekwweweqoys; } $gykmkugsiwyssqis = $this->keeuqgyooycqoygw($iakkeikwceeomgyq); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gykmkugsiwyssqis); iuageyamssqwqqyw: } mkmasewiiuocaekm: $ogskakmksyuqsiwg = true; wkmsuekwweweqoys: return $ogskakmksyuqsiwg; } public function qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq) : bool { $ogskakmksyuqsiwg = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto cwaqmauwsyugsieo; } $iakkeikwceeomgyq = $this->keeuqgyooycqoygw($this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); cwaqmauwsyugsieo: if (!$iakkeikwceeomgyq) { goto smeocsiuyouseuqo; } $ksiyqouuaoymsycg = $kquauwcmkoiegase->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); if ($ksiyqouuaoymsycg) { goto uqkmkmmikmaqkgym; } $sogksuscggsicmac = $kquauwcmkoiegase->gscuuyuyauokoyuo([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); goto yckkkceuiuiaucce; uqkmkmmikmaqkgym: $sogksuscggsicmac = $kquauwcmkoiegase->wqikesawekycweoi($ksiyqouuaoymsycg, [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); yckkkceuiuiaucce: $ogskakmksyuqsiwg = $sogksuscggsicmac[Constants::ckcawaoawwioqecq] ?? false; smeocsiuyouseuqo: return $ogskakmksyuqsiwg; } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, $iakkeikwceeomgyq) : bool { $ekmacukqumaiaquo = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto yqmygsgkwmkeyqmm; } $iakkeikwceeomgyq = $this->keeuqgyooycqoygw($this->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); yqmygsgkwmkeyqmm: if (!$iakkeikwceeomgyq) { goto kqumggcumkiygaya; } $ksiyqouuaoymsycg = $kquauwcmkoiegase->oqomcmyuuakigusk([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); if (!$ksiyqouuaoymsycg) { goto omuskqikewygsuuu; } $ekmacukqumaiaquo = (bool) $kquauwcmkoiegase->sgcuwcowgwimgsgk($kquauwcmkoiegase->keeuqgyooycqoygw($ksiyqouuaoymsycg), true); omuskqikewygsuuu: kqumggcumkiygaya: return $ekmacukqumaiaquo; } public function eeukomoeomucsimo(string $ymqmyyeuycgmigyo) : bool { } public function swgcwsiqmygouiqg($mksyucucyswaukig) { $omkysikckkcieckq = $this->qogaqkcsogcqiaic($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if (!($omkysikckkcieckq && is_string($omkysikckkcieckq))) { goto uwiqeuqyaseimcyk; } if (in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ioyokcgwaowoqskk], true)) { goto kmasgsycmswqoeii; } if ($oeymmguogqgaqymw = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($omkysikckkcieckq)) { goto siuwcesauyyweaky; } $omkysikckkcieckq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->yymguocuqiqucics($omkysikckkcieckq); goto wucomycmoigosose; siuwcesauyyweaky: $omkysikckkcieckq = $oeymmguogqgaqymw; wucomycmoigosose: goto ccikqgeseseueseo; kmasgsycmswqoeii: $omkysikckkcieckq = $omkysikckkcieckq === Constants::wiquocqckkqkmayo; ccikqgeseseueseo: uwiqeuqyaseimcyk: return $omkysikckkcieckq; } }
