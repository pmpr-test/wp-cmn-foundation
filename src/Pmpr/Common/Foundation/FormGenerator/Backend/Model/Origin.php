<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6780382025b61             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\ORM\Model; class Origin extends Model { const kqqcmiwuysogswqy = "\157\160\164\151\157\x6e\x5f\151\144"; public function register() { $this->guiaswksukmgageq(__("\117\162\151\x67\x69\156", PR__CMN__FOUNDATION))->muuwuqssqkaieqge(__("\117\162\151\147\x69\156\x73", PR__CMN__FOUNDATION)); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->gysoeyaguiyewoes(Constants::NAME)->gswweykyogmsyawy(__("\x4e\141\155\x65", PR__CMN__FOUNDATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::kqqcmiwuysogswqy)->ckgquisaimmgwuyu(Option::class)->gswweykyogmsyawy(__("\117\160\164\x69\157\156\x73", PR__CMN__FOUNDATION))); parent::uwmqacgewuauagai(); } public function imawakueyqwccuqe($ymqmyyeuycgmigyo) { if (!$this->iekyeyicoyyawomk()->exists([$this->caokeucsksukesyo()->skckwsgymkimyuwo()->megqywqeuquawkim(Constants::NAME, $ymqmyyeuycgmigyo)])) { $this->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::NAME => $ymqmyyeuycgmigyo], true); } } public function gkwkqmwweiawigae(string $oucuakkaawqoeasm) : array { $qiouiwasaauyaaue = []; if ($iakkeikwceeomgyq = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME)) { $mguygkocuoaoqqkg = Option::symcgieuakksimmu()->iekyeyicoyyawomk()->yassqyiieqeywoqi(Constants::yocqkmeouaamomke, $this->mwyqswsaeeewsosm($iakkeikwceeomgyq)); if ($mguygkocuoaoqqkg) { foreach ($mguygkocuoaoqqkg as $mksyucucyswaukig) { if ($uusmaiomayssaecw = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ascagqcquwgmygkm)) { $qiouiwasaauyaaue[$uusmaiomayssaecw] = $this->swgcwsiqmygouiqg($mksyucucyswaukig); } } } } return $qiouiwasaauyaaue; } public function giiuwsmyumqwwiyq(string $uusmaiomayssaecw, string $oucuakkaawqoeasm) { $omkysikckkcieckq = null; if ($iakkeikwceeomgyq = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($oucuakkaawqoeasm, Constants::NAME)) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $omkysikckkcieckq = $this->swgcwsiqmygouiqg(Option::symcgieuakksimmu()->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $this->mwyqswsaeeewsosm($iakkeikwceeomgyq))])); } return $omkysikckkcieckq; } public function csucgayeuwoeeuuw(string $ymqmyyeuycgmigyo, array $qiouiwasaauyaaue = []) : bool { $ogskakmksyuqsiwg = false; if ($iakkeikwceeomgyq = $this->iekyeyicoyyawomk()->akkkoiiymmamsauc($ymqmyyeuycgmigyo, Constants::NAME)) { $gykmkugsiwyssqis = $this->mwyqswsaeeewsosm($iakkeikwceeomgyq); foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $gykmkugsiwyssqis); } $ogskakmksyuqsiwg = true; } return $ogskakmksyuqsiwg; } public function qioweyiqewmsocem($uusmaiomayssaecw, $eqgoocgaqwqcimie, $iakkeikwceeomgyq) : bool { $ogskakmksyuqsiwg = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (!is_numeric($iakkeikwceeomgyq)) { $iakkeikwceeomgyq = $this->mwyqswsaeeewsosm($this->iekyeyicoyyawomk()->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); } if ($iakkeikwceeomgyq) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ksiyqouuaoymsycg = $kquauwcmkoiegase->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $iakkeikwceeomgyq)]); if ($ksiyqouuaoymsycg) { if ($kquauwcmkoiegase->waecsyqmwascmqoa($ksiyqouuaoymsycg, Constants::ciyoccqkiamemcmm) != $eqgoocgaqwqcimie) { $sogksuscggsicmac = $kquauwcmkoiegase->gssiscqyqsacmeca()->wqikesawekycweoi($ksiyqouuaoymsycg, [Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]); $ogskakmksyuqsiwg = !is_wp_error($sogksuscggsicmac); } else { $ogskakmksyuqsiwg = true; } } else { $sogksuscggsicmac = $kquauwcmkoiegase->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::ascagqcquwgmygkm => $uusmaiomayssaecw, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie, Constants::yocqkmeouaamomke => $iakkeikwceeomgyq]); $ogskakmksyuqsiwg = !is_wp_error($sogksuscggsicmac); } } return $ogskakmksyuqsiwg; } public function oeqomowmukgkiicw(string $uusmaiomayssaecw, $iakkeikwceeomgyq) : bool { $ekmacukqumaiaquo = false; $kquauwcmkoiegase = Option::symcgieuakksimmu(); if (!is_numeric($iakkeikwceeomgyq)) { $iakkeikwceeomgyq = $this->mwyqswsaeeewsosm($this->iekyeyicoyyawomk()->akkkoiiymmamsauc($iakkeikwceeomgyq, Constants::NAME)); } if ($iakkeikwceeomgyq) { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $ksiyqouuaoymsycg = $kquauwcmkoiegase->iekyeyicoyyawomk()->oqomcmyuuakigusk([$eqwoegegiamegqsm->megqywqeuquawkim(Constants::ascagqcquwgmygkm, $uusmaiomayssaecw), $eqwoegegiamegqsm->megqywqeuquawkim(Constants::yocqkmeouaamomke, $iakkeikwceeomgyq)]); if ($ksiyqouuaoymsycg) { $ekmacukqumaiaquo = (bool) $kquauwcmkoiegase->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($kquauwcmkoiegase->mwyqswsaeeewsosm($ksiyqouuaoymsycg), true); } } return $ekmacukqumaiaquo; } public function eeukomoeomucsimo(string $ymqmyyeuycgmigyo) : bool { } public function swgcwsiqmygouiqg($mksyucucyswaukig) { $omkysikckkcieckq = $this->waecsyqmwascmqoa($mksyucucyswaukig, Constants::ciyoccqkiamemcmm); if ($omkysikckkcieckq && is_string($omkysikckkcieckq)) { if (in_array($omkysikckkcieckq, [Constants::wiquocqckkqkmayo, Constants::ioyokcgwaowoqskk], true)) { $omkysikckkcieckq = $omkysikckkcieckq === Constants::wiquocqckkqkmayo; } else { if ($oeymmguogqgaqymw = $this->caokeucsksukesyo()->owgcciayoweymuws()->queuakuqucciemcc($omkysikckkcieckq)) { $omkysikckkcieckq = $oeymmguogqgaqymw; } else { $omkysikckkcieckq = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->yymguocuqiqucics($omkysikckkcieckq); } } } return $omkysikckkcieckq; } }
