<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9ec09101e9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\View; use Pmpr\Common\Foundation\ORM\Ajax; use Pmpr\Common\Foundation\ORM\Database\Schema\Enum; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Collection; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Editor; use Pmpr\Common\Foundation\FormGenerator\Backend\Field\Media; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Error; class Index extends View { const oqaymwacgaosqsom = 'orm_filter_by'; const ykyeawseyyawawyy = 'orm_filter_value'; protected ?ListTable $listTable = null; public function wigskegsqequoeks() { $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'igeioegaiemyikuu']); $this->qcsmikeggeemccuu('current_screen', [$this, 'ucwessmyqsawaksg']); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("manage_{$this->wgmuagayamwuwsuo()}_columns", [$this, 'isqsicqgwyyasyke'])->cecaguuoecmccuse('set-screen-option', [$this, 'siqksaekggmqeics'], 10, 3)->cecaguuoecmccuse("manage_{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}_columns", [$this, 'isqsicqgwyyasyke']); } public function ucwessmyqsawaksg($gcgsqcoqciockquc) { $mmwwcmiwqaggeaey = $this->wgmuagayamwuwsuo(); if ($mmwwcmiwqaggeaey !== $gcgsqcoqciockquc->id) { $this->cecaguuoecmccuse("manage_{$gcgsqcoqciockquc->id}_columns", [$this, 'isqsicqgwyyasyke']); } } public function mqyuagguukgcoeka() { parent::mqyuagguukgcoeka(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($iauqwemmwkwkemqi = $meywaqqsugaoeyys->ayqesuasiggqoeeo()) { $iauqwemmwkwkemqi->ikiqgsaquyskoawk(); } if ($this->ycogikomoygcmimg() || $this->uuwyiucwgmsoycmq()) { $igscmsiuisqaqwkk = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::weiosaewqequuyuq); $tsuauommsquiesmk = $this->waeasakssissiuqg()->umaeoegyykkkqmia(); if ($tsuauommsquiesmk[Constants::NAME] && $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm]) { $ywmkwiwkosakssii[self::oqaymwacgaosqsom] = $tsuauommsquiesmk[Constants::NAME]; $ywmkwiwkosakssii[self::ykyeawseyyawawyy] = $tsuauommsquiesmk[Constants::ciyoccqkiamemcmm]; $igscmsiuisqaqwkk = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo($ywmkwiwkosakssii, $igscmsiuisqaqwkk); } $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->cquikcuwossiessu($igscmsiuisqaqwkk); exit; } if ($meywaqqsugaoeyys->mwguoawyyuyccsqs()) { $this->rsaiaimkmskoiysk(Constants::imywcsggckkcywgk, Constants::ukwaycqmyyuekwqg, [Constants::qescuiwgsyuikume => $meywaqqsugaoeyys->euwycwigoeawgckq('add_new_item'), Constants::ysskgssgwuwmqwym => ['href' => $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::ukwaycqmyyuekwqg)]]); } if ($meywaqqsugaoeyys->amimkmoyyqiysugw()) { $this->rsaiaimkmskoiysk(Constants::mqkiiimeocmcyecq, Constants::awysmmukegasimmq, static function ($aokagokqyuysuksm, $mksyucucyswaukig, Model $meywaqqsugaoeyys) { return [Constants::qescuiwgsyuikume => __('Edit', PR__CMN__FOUNDATION), Constants::ysskgssgwuwmqwym => ['href' => $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $aokagokqyuysuksm)]]; }); $this->rsaiaimkmskoiysk(Constants::mqkiiimeocmcyecq, Constants::kyccsamqmuwysaws, static function ($aokagokqyuysuksm, $mksyucucyswaukig, Model $meywaqqsugaoeyys) { return [Constants::qescuiwgsyuikume => __('Quick Edit', PR__CMN__FOUNDATION), Constants::ysskgssgwuwmqwym => ['class' => 'orm-quick-edit', 'data-model' => $meywaqqsugaoeyys::class, 'data-object' => $meywaqqsugaoeyys->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($meywaqqsugaoeyys->ekuykcasmcmywewi($mksyucucyswaukig))]]; }); } if ($meywaqqsugaoeyys->ggswuoiywaaaqseo()) { $this->rsaiaimkmskoiysk(Constants::mqkiiimeocmcyecq, Constants::ieioeisgwcgysukw, function ($aokagokqyuysuksm, $mksyucucyswaukig, Model $meywaqqsugaoeyys) { return [Constants::qescuiwgsyuikume => __('Show', PR__CMN__FOUNDATION), Constants::ysskgssgwuwmqwym => ['href' => $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::ieioeisgwcgysukw, $aokagokqyuysuksm)]]; }); } if ($meywaqqsugaoeyys->awcggayuseoukmkw()) { $this->rsaiaimkmskoiysk(Constants::mqkiiimeocmcyecq, Constants::DELETE, function ($aokagokqyuysuksm) { return [Constants::qescuiwgsyuikume => __('Delete', PR__CMN__FOUNDATION), Constants::ismwycwsasweqomi => $this->ymaommgoigkakyes($aokagokqyuysuksm)]; }); $this->rsaiaimkmskoiysk(Constants::ecwwqsqmiiqocoyw, Constants::DELETE, __('Delete', PR__CMN__FOUNDATION)); } } public function isqsicqgwyyasyke($wkkweuacukumqmya) : array { if ($this->mekqsagqkuiocckw(Constants::ecwwqsqmiiqocoyw)) { $wkkweuacukumqmya['cb'] = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('input', [Constants::squoamkioomemiyi => Constants::semqugiuwygamias]); } $qssskwiqeumgkago = $this->mgogaykgkoogasim()->aeosueemgsygqese(); foreach ($qssskwiqeumgkago as $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq->gksokmqegsecssgq(Constants::weiosaewqequuyuq, $this->mgogaykgkoogasim())) { $wkkweuacukumqmya[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $aaqqkgyougeiueyq->qcgakseyaikigqco(); } } if ($this->mekqsagqkuiocckw(Constants::meisqwykgaymauka)) { $wkkweuacukumqmya[Constants::myikkigscysoykgy] = __('Actions', PR__CMN__FOUNDATION); } return $wkkweuacukumqmya; } public function render() { parent::render(); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->iuygowkemiiwqmiw('index', ['page_actions' => $this->igmckyamugkymqku(Constants::imywcsggckkcywgk), Constants::ugmwekegkosuuwii => $this->ekysoioumkkwawwm(), Constants::NAME => $meywaqqsugaoeyys->cueaickeeoiwayou(), Constants::qescuiwgsyuikume => $this->mmqossqsksemasay(Constants::mmieaueggwwaokig)], [Constants::qaacaqioeyiuakeu => true]); } public function asewymkskoaoiokm() : array { $cqcsaaswaciweiie = []; foreach ($this->mgogaykgkoogasim()->aeosueemgsygqese() as $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq->aceqsggkwkwimaie()) { $cqcsaaswaciweiie[$aaqqkgyougeiueyq->iooowgsqoyqseyuu()] = $aaqqkgyougeiueyq; } } return $cqcsaaswaciweiie; } public function qquqcgcywuqosyim($umwgoasiowmqcumw, $siykeiywomwwuoiw = null) : array { $momcykaoccoymeig = 1; $cqcsaaswaciweiie = $this->asewymkskoaoiokm(); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $scsyuucsumiwkqqc = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::ykyeawseyyawawyy); $gmymqaiwicgiuocm = $eiicaiwgqkgsekce->yyqgamuwwakgciey(self::oqaymwacgaosqsom); $gkioossaaiumqqsq = $this->mgogaykgkoogasim()->iekyeyicoyyawomk(); if (!$umwgoasiowmqcumw && $cqcsaaswaciweiie) { $umwgoasiowmqcumw[] = [Constants::ciyoccqkiamemcmm => Constants::ALL, Constants::qescuiwgsyuikume => __('All', PR__CMN__FOUNDATION), Constants::qiyqwyiiwykeccmo => $gkioossaaiumqqsq->ygmcsmegcysyeoss('*', $siykeiywomwwuoiw)]; foreach ($cqcsaaswaciweiie as $tsuauommsquiesmk => $aaqqkgyougeiueyq) { if ($aaqqkgyougeiueyq instanceof Enum && $aaqqkgyougeiueyq->myacgeeekqcmemge()) { foreach ($aaqqkgyougeiueyq->gkwkqmwweiawigae() as $uusmaiomayssaecw => $omkysikckkcieckq) { $gaeqamemwmwsyukm = $gkioossaaiumqqsq->ieieyoeqmmeysauc($tsuauommsquiesmk, $uusmaiomayssaecw, Constants::esgoecsaucwswuia, '*', $siykeiywomwwuoiw); $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->qksikkwyuwmciusw($uusmaiomayssaecw, $omkysikckkcieckq); $umwgoasiowmqcumw["{$tsuauommsquiesmk}_{$eqgoocgaqwqcimie}"] = [Constants::NAME => $tsuauommsquiesmk, Constants::qescuiwgsyuikume => $aaqqkgyougeiueyq->ymgomemcusiiyksw($uusmaiomayssaecw, $omkysikckkcieckq), Constants::qiyqwyiiwykeccmo => $gaeqamemwmwsyukm, Constants::ciyoccqkiamemcmm => $eqgoocgaqwqcimie]; } } } } if (is_array($umwgoasiowmqcumw) && $umwgoasiowmqcumw) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mumyimcwkaemyyue = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig(); foreach ($umwgoasiowmqcumw as $uusmaiomayssaecw => $icwicymcioeyeyek) { $ymqmyyeuycgmigyo = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::NAME); $qqomumygoacsmsie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::ciyoccqkiamemcmm); $gaeqamemwmwsyukm = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::qiyqwyiiwykeccmo, 0); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::qescuiwgsyuikume, false); if ($meqocwsecsywiiqs) { $geecqyososceumsk = $eiicaiwgqkgsekce->ekcymmyqoceukosc(true); if ($qqomumygoacsmsie !== Constants::ALL) { $geecqyososceumsk = $mumyimcwkaemyyue->yqymaqmqiqmmmsoo([self::oqaymwacgaosqsom => $ymqmyyeuycgmigyo, self::ykyeawseyyawawyy => $qqomumygoacsmsie], $geecqyososceumsk); } else { $geecqyososceumsk = $mumyimcwkaemyyue->oiamiqcuyksmmomm([self::oqaymwacgaosqsom, self::ykyeawseyyawawyy], $geecqyososceumsk); } $yeacayasgueouoqc = $scsyuucsumiwkqqc && $gmymqaiwicgiuocm ? $scsyuucsumiwkqqc === $qqomumygoacsmsie && $gmymqaiwicgiuocm === $ymqmyyeuycgmigyo : $momcykaoccoymeig === 1; $umwgoasiowmqcumw[$uusmaiomayssaecw] = $swqimwqeweekeusq->yuawgssgauywkiia(sprintf('%s (%s)', $meqocwsecsywiiqs, $swqimwqeweekeusq->gmqyuaqwgiayskei($this->caokeucsksukesyo()->gagsyqagguwwauac()->aoaesiikusqamcqc($gaeqamemwmwsyukm))), $geecqyososceumsk, ['class' => 'orm-filter-link' . ($yeacayasgueouoqc ? ' current' : '')]); $momcykaoccoymeig++; } else { $gkyciwoiiisgywcs->unset($umwgoasiowmqcumw, $uusmaiomayssaecw); } } } return $umwgoasiowmqcumw; } public function ycogikomoygcmimg() : bool { $ksaameoqigiaoigg = false; $aiamqeawckcsuaou = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->gkwaaeusmsaywikg(Constants::uqgcmmosieyimiku); if ($aiamqeawckcsuaou && $aiamqeawckcsuaou !== '-1') { $this->myyqwyswweswiuwu($aiamqeawckcsuaou); $ksaameoqigiaoigg = true; } return $ksaameoqigiaoigg; } public function myyqwyswweswiuwu($aiamqeawckcsuaou) { $igqsaukqcqscimok = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey(Constants::cyqwkyucgoeyuyyq, []); $oysoyeaucuawyaky = []; if ($igqsaukqcqscimok) { $oysoyeaucuawyaky = array_map('intval', $igqsaukqcqscimok); } if ($aiamqeawckcsuaou && $oysoyeaucuawyaky) { $this->ewcsyqaaigkicgse("{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}_do_bulk_action", $aiamqeawckcsuaou, $oysoyeaucuawyaky); if (Constants::DELETE === $aiamqeawckcsuaou) { $this->ugqgmscsqmycecio($oysoyeaucuawyaky); } } } public function uuwyiucwgmsoycmq() : bool { $ksaameoqigiaoigg = false; $aiamqeawckcsuaou = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->yyqgamuwwakgciey('orm-action', false); if ($aiamqeawckcsuaou) { $this->kosoaouogkeaomwo($aiamqeawckcsuaou); $ksaameoqigiaoigg = true; } return $ksaameoqigiaoigg; } public function kosoaouogkeaomwo($aiamqeawckcsuaou) { if (Constants::DELETE === $aiamqeawckcsuaou) { $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->yiqagusumqeyaegq($eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::icwieiwoqeocywss), 'orm-delete'); $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $aokagokqyuysuksm = $eiicaiwgqkgsekce->yyqgamuwwakgciey($meywaqqsugaoeyys->kumuygiiqswoyasy(), false); $this->ewcsyqaaigkicgse("{$meywaqqsugaoeyys->cueaickeeoiwayou()}_do_single_action", $aiamqeawckcsuaou, $aokagokqyuysuksm); $this->delete($aokagokqyuysuksm); } } private function delete($aokagokqyuysuksm) { $ksaameoqigiaoigg = false; $uamcoiueqaamsqma = ''; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys->awcggayuseoukmkw()) { if ($aokagokqyuysuksm && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie('delete_orm_item', $aokagokqyuysuksm)) { $ksaameoqigiaoigg = $meywaqqsugaoeyys->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); if (!$ksaameoqigiaoigg) { $uamcoiueqaamsqma = __('Error in deleting.', PR__CMN__FOUNDATION); } else { if (is_wp_error($ksaameoqigiaoigg)) { $uamcoiueqaamsqma = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($ksaameoqigiaoigg); $ksaameoqigiaoigg = false; } } } else { $uamcoiueqaamsqma = __('Sorry, you are not allowed to delete items of this type.', PR__CMN__FOUNDATION); } } if ($uamcoiueqaamsqma) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, $uamcoiueqaamsqma, 'orm-notice'); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __('Item successfully deleted.', PR__CMN__FOUNDATION), 'orm-notice', Constants::ckcawaoawwioqecq); } return $ksaameoqigiaoigg; } private function ugqgmscsqmycecio($oysoyeaucuawyaky) : bool { $ksaameoqigiaoigg = false; $uamcoiueqaamsqma = ''; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys->awcggayuseoukmkw()) { foreach ($oysoyeaucuawyaky as $aokagokqyuysuksm) { if ($aokagokqyuysuksm && $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->scmcyesmmikkucie('delete_orm_item', $aokagokqyuysuksm)) { $sogksuscggsicmac = $meywaqqsugaoeyys->gssiscqyqsacmeca()->sgcuwcowgwimgsgk($aokagokqyuysuksm); if (!$sogksuscggsicmac || is_wp_error($sogksuscggsicmac)) { if (is_wp_error($sogksuscggsicmac)) { $uamcoiueqaamsqma = $this->caokeucsksukesyo()->euekiyuksecoccus()->skauuuoqcaiseuks($sogksuscggsicmac); } $uamcoiueqaamsqma = sprintf(__('Can not delete requested items: %s.', PR__CMN__FOUNDATION), $uamcoiueqaamsqma); $ksaameoqigiaoigg = false; break; } $ksaameoqigiaoigg = true; } else { $uamcoiueqaamsqma = __('Sorry, you are not allowed to delete items of this type.', PR__CMN__FOUNDATION); break; } } } if ($uamcoiueqaamsqma) { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, $uamcoiueqaamsqma, 'orm-action'); } else { $this->caokeucsksukesyo()->kwoycoqogoswycgg()->goouywsgcekeeccu($this, __('Requested items deleted.', PR__CMN__FOUNDATION), 'orm-notice', Constants::ckcawaoawwioqecq); } return $ksaameoqigiaoigg; } public function siqksaekggmqeics($wsayskqwkoauuyks, $omkysikckkcieckq, $eqgoocgaqwqcimie) { if ($this->caokeucsksukesyo()->owgcciayoweymuws()->ykemmsoumouomkqm($omkysikckkcieckq, "{$this->mgogaykgkoogasim()->cueaickeeoiwayou()}_per_page")) { $wsayskqwkoauuyks = $eqgoocgaqwqcimie; } return $wsayskqwkoauuyks; } public function waeasakssissiuqg(bool $qeissqmgucakygom = false, array $ywmkwiwkosakssii = []) : ListTable { if (empty($this->listTable)) { $this->listTable = new ListTable($this->mgogaykgkoogasim(), $qeissqmgucakygom, $ywmkwiwkosakssii); } return $this->listTable; } public function ywoasuyoaicwqqsu() { $nsmgceoqaqogqmuw = ''; $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys->awcggayuseoukmkw()) { $ikgwqyuyckaewsow = $meywaqqsugaoeyys->yyoqecggyacaseko()->ugmceccgwaaaigiy(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($ikgwqyuyckaewsow as $momcykaoccoymeig => $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Media || $aiowsaccomcoikus instanceof Editor || $aiowsaccomcoikus instanceof Collection) { $gkyciwoiiisgywcs->unset($ikgwqyuyckaewsow, $momcykaoccoymeig); } } $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->uuccukgasskgimsq('form', ['class' => 'orm-quick-edit-form'], $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywoasuyoaicwqqsu($ikgwqyuyckaewsow)); } return $nsmgceoqaqogqmuw; } public function ekysoioumkkwawwm(array $ywmkwiwkosakssii = [], bool $scsaeueqgyymsyei = false) : string { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $oyeykykuuckycumg = $this->waeasakssissiuqg($scsaeueqgyymsyei, $ywmkwiwkosakssii); $eiicaiwgqkgsekce = $this->caokeucsksukesyo()->giiecckwoyiawoyy(); $oyeykykuuckycumg->prepare_items($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::kkcqmwgccaygggcu => $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::kkcqmwgccaygggcu, 1), Constants::awkcoioakcaougmq => $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::awkcoioakcaougmq, Constants::omaksceqmigeaoko), Constants::yayciqueeakqwese => $eiicaiwgqkgsekce->yyqgamuwwakgciey('s', ''), Constants::gqiasegggowomgie => $eiicaiwgqkgsekce->yyqgamuwwakgciey(Constants::gqiasegggowomgie, $meywaqqsugaoeyys->kumuygiiqswoyasy())])); return $this->iuygowkemiiwqmiw('list', [Constants::NAME => $meywaqqsugaoeyys->cueaickeeoiwayou(), Constants::guyokwuskecomwsq => $oyeykykuuckycumg->mqosuuycwokyuiek(), Constants::ugsuecoyuqcamsac => $oyeykykuuckycumg, Constants::kyyscqqmsikeuaea => $oyeykykuuckycumg->umaeoegyykkkqmia(), Constants::amyqqskiswuogekq => $meywaqqsugaoeyys->euwycwigoeawgckq('search_items')], [Constants::qaacaqioeyiuakeu => false]); } public function igeioegaiemyikuu() { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); if ($meywaqqsugaoeyys->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'quick-edit', 'quick-edit.js')->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi)); $gosmywauqawmcyga = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $meakksicouekcgoe->wwmusmkkcwsiciou($this, 'quick_edit', [Constants::wyucqaeuuqkesque => Ajax::kkuoiigmoqiwauwi, Constants::ismwycwsasweqomi => [Constants::ygeqsmugcaeeeuwu => $this->ywoasuyoaicwqqsu(), Constants::kekekeusyqkouowm => $gosmywauqawmcyga->uoqqeckymmmqmgiq([Constants::mosycwwoqguicaeo, ['class' => 'pr-btn btn-primary quick-edit-submit', Constants::qescuiwgsyuikume => __('Submit', PR__CMN__FOUNDATION), Constants::squoamkioomemiyi => Constants::iueeekcmggceyscu]]), 'messages' => [Constants::gymusgeumuwomwuy => sprintf(__('%s updated successfully.', PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()), 'not_changed' => __('No change on form\'s data detected.', PR__CMN__FOUNDATION)], Constants::qescuiwgsyuikume => sprintf(__('Edit %s', PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm())]]); } } }
