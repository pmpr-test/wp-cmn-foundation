<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Model; use Pmpr\Common\Foundation\Interfaces\Constants; class Origin extends Common { const kqqcmiwuysogswqy = "\157\x70\x74\x69\157\156\137\151\144"; public function register() { $this->guiaswksukmgageq(__("\x4f\x72\x69\147\x69\x6e", PR__CMN__FOUNDATION))->muuwuqssqkaieqge(__("\x4f\162\151\147\x69\156\x73", PR__CMN__FOUNDATION)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::NAME)->gswweykyogmsyawy(__("\116\141\155\145", PR__CMN__FOUNDATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::kqqcmiwuysogswqy)->ckgquisaimmgwuyu(Option::class)->gswweykyogmsyawy(__("\117\x70\x74\151\157\x6e\163", PR__CMN__FOUNDATION))); parent::uwmqacgewuauagai(); } public function imawakueyqwccuqe($ymqmyyeuycgmigyo) { if ($this->iekyeyicoyyawomk()->exists([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim(Constants::NAME, $ymqmyyeuycgmigyo)])) { goto isyassymuywsayyy; } $this->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::NAME => $ymqmyyeuycgmigyo], true); isyassymuywsayyy: } public function gkwkqmwweiawigae(string $oucuakkaawqoeasm) : array { $qiouiwasaauyaaue = []; if (!($iakkeikwceeomgyq = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto eoeoaoomoeayemks; } $mguygkocuoaoqqkg = Option::symcgieuakksimmu()->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::yocqkmeouaamomke, $this->mwyqswsaeeewsosm($iakkeikwceeomgyq)); if (!$mguygkocuoaoqqkg) { goto ayemyskkicqyskos; } foreach ($mguygkocuoaoqqkg as $mksyucucyswaukig) { if (!($uusmaiomayssaecw = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ascagqcquwgmygkm))) { goto gqugaamwqqookmyc; } $qiouiwasaauyaaue[$uusmaiomayssaecw] = $this->swgcwsiqmygouiqg($mksyucucyswaukig); gqugaamwqqookmyc: gwwgqgceskcqukig: } qyckkgmuykqyaieq: ayemyskkicqyskos: eoeoaoomoeayemks: return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, string $oucuakkaawqoeasm) { $omkysikckkcieckq = null; if (!($iakkeikwceeomgyq = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME))) { goto aucqswuoeqocuiqk; } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $omkysikckkcieckq = $this->swgcwsiqmygouiqg(Option::symcgieuakksimmu()->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $this->mwyqswsaeeewsosm($iakkeikwceeomgyq))])); aucqswuoeqocuiqk: return $omkysikckkcieckq; } public function csucgayeuwoeeuuw(string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = []) : bool { $ogskakmksyuqsiwg = false; if (!($iakkeikwceeomgyq = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($ymqmyyeuycgmigyo, Constants::NAME))) { goto ygsiuoyewwecoemg; } $gykmkugsiwyssqis = $this->mwyqswsaeeewsosm($iakkeikwceeomgyq); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gykmkugsiwyssqis); wqmkwsgmeceakwaw: } kaccuycsyukugwao: $ogskakmksyuqsiwg = true; ygsiuoyewwecoemg: return $ogskakmksyuqsiwg; } public function qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq) : bool { if (!empty($eqgoocgaqwqcimie)) { goto ywuegkmgqmweogqq; } return false; ywuegkmgqmweogqq: $ogskakmksyuqsiwg = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto ceasygsiuksuwwoc; } $iakkeikwceeomgyq = $this->mwyqswsaeeewsosm($this->iekyeyicoyyawomk()->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); ceasygsiuksuwwoc: if (!$iakkeikwceeomgyq) { goto mimogmagkwkiyskc; } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ksiyqouuaoymsycg = $kquauwcmkoiegase->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $iakkeikwceeomgyq)]); if ($ksiyqouuaoymsycg) { goto smwkgmymskokcoek; } $sogksuscggsicmac = $kquauwcmkoiegase->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); goto sgaaocqwgeqismmo; smwkgmymskokcoek: $sogksuscggsicmac = $kquauwcmkoiegase->gssiscqyqsacmeca()->wqikesawekycweoi($ksiyqouuaoymsycg, [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); sgaaocqwgeqismmo: $ogskakmksyuqsiwg = !is_wp_error($sogksuscggsicmac); mimogmagkwkiyskc: return $ogskakmksyuqsiwg; } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, $iakkeikwceeomgyq) : bool { $ekmacukqumaiaquo = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (is_numeric($iakkeikwceeomgyq)) { goto oimegeaimoymkmsc; } $iakkeikwceeomgyq = $this->mwyqswsaeeewsosm($this->iekyeyicoyyawomk()->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); oimegeaimoymkmsc: if (!$iakkeikwceeomgyq) { goto aemayukkiiaiueaq; } $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ksiyqouuaoymsycg = $kquauwcmkoiegase->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $iakkeikwceeomgyq)]); if (!$ksiyqouuaoymsycg) { goto wcesgqaeqiqawysc; } $ekmacukqumaiaquo = (bool) $kquauwcmkoiegase->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($kquauwcmkoiegase->mwyqswsaeeewsosm($ksiyqouuaoymsycg), true); wcesgqaeqiqawysc: aemayukkiiaiueaq: return $ekmacukqumaiaquo; } public function eeukomoeomucsimo(string $ymqmyyeuycgmigyo) : bool { } public function swgcwsiqmygouiqg($mksyucucyswaukig) { $omkysikckkcieckq = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if (!($omkysikckkcieckq && is_string($omkysikckkcieckq))) { goto sieseicooqugaqgo; } if (in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ioyokcgwaowoqskk], true)) { goto myemeeaqoywegsok; } if ($oeymmguogqgaqymw = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($omkysikckkcieckq)) { goto kawmoeuiyqkqmsmo; } $omkysikckkcieckq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->yymguocuqiqucics($omkysikckkcieckq); goto qcmwkecooegwkkks; kawmoeuiyqkqmsmo: $omkysikckkcieckq = $oeymmguogqgaqymw; qcmwkecooegwkkks: goto caoauekaaegosauw; myemeeaqoywegsok: $omkysikckkcieckq = $omkysikckkcieckq === Constants::wiquocqckkqkmayo; caoauekaaegosauw: sieseicooqugaqgo: return $omkysikckkcieckq; } }
