<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1666776f24             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Media extends Field { protected array $buttons = []; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, 'media'); $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, Constants::soqecysmeyiyyyys); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu('admin_enqueue_scripts', 'wp_enqueue_media'); } public function imswwiyicyksouus() : array { return $this->buttons; } public function cyeuiyggkcqmoecc(string $aokagokqyuysuksm) : ?Button { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imswwiyicyksouus(), $aokagokqyuysuksm); } public function igmamuiesywmkgeu(Button $gskauacumcmekigs) : self { $this->buttons[$gskauacumcmekigs->mwikyscisascoeea()] = $gskauacumcmekigs; return $this; } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { if ($this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($eqgoocgaqwqcimie)) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->ecqkouyiioksggkw($eqgoocgaqwqcimie); } $this->qcgocuceocquqcuw(Constants::ciyoccqkiamemcmm, $eqgoocgaqwqcimie); return parent::iygyugseyaqwywyg($eqgoocgaqwqcimie); } public function eswksowyeqcsokew(string $oiegiwogmwmawkeo) : self { return $this->kcemgwysykceeecw(Constants::waguuiqqgsysuukq, $oiegiwogmwmawkeo); } public function eicsoaeqamqgqsis($yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ['mp4']; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("video/{$sqeykgyoooqysmca}"); } } return $this; } public function wwsssmuaksogoekw() : self { return $this->eyiiyqiykcsusuwi('image/svg+xml'); } public function ycueqsmmommygueu(array $yemgmmgogcwccuky = []) : self { $ooiewiwkegguusum = ['gif', 'png', 'jpeg', 'svg+xml', 'webp', 'avif']; foreach ($ooiewiwkegguusum as $sqeykgyoooqysmca) { if (!in_array($sqeykgyoooqysmca, $yemgmmgogcwccuky, true)) { $this->eyiiyqiykcsusuwi("image/{$sqeykgyoooqysmca}"); } } return $this; } public function eyiiyqiykcsusuwi($sqeykgyoooqysmca) : self { $qgeeqyucwycemwmo = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->ycceuaowuugaemyi(), Constants::squoamkioomemiyi, []); if (!in_array($sqeykgyoooqysmca, $qgeeqyucwycemwmo, true)) { $qgeeqyucwycemwmo[] = $sqeykgyoooqysmca; $this->kcemgwysykceeecw(Constants::squoamkioomemiyi, $qgeeqyucwycemwmo); } return $this; } private function kcemgwysykceeecw(string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $qmmuaigaamusycak = $this->ycceuaowuugaemyi(); $qmmuaigaamusycak[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this->igiywquyccyiaucw('modal_query', $qmmuaigaamusycak); } private function ycceuaowuugaemyi() : array { return (array) $this->imkyoqyocosuqasu('modal_query', []); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->mcacmissyeeqkeak(Constants::kcyioiskeyiemoga, __('Select Media', PR__CMN__FOUNDATION)); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs('media_change')->mswqgegakmgmewwq()->goqoickiksqsaeyk()->gswweykyogmsyawy(__('Change', PR__CMN__FOUNDATION))->qigsyyqgewgskemg('pr-field-media-change'))->igmamuiesywmkgeu($uuyucgkyusckoaeq->qoeiescseggagsqs('media_remove')->mswqgegakmgmewwq()->muywawimuacwmkgw()->gswweykyogmsyawy(__('Remove', PR__CMN__FOUNDATION))->qigsyyqgewgskemg('pr-field-media-remove')); $this->mcacmissyeeqkeak('sizename', Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak('sizepreive', Constants::egwoacukmsioosum); $this->mcacmissyeeqkeak('information', [Constants::qescuiwgsyuikume => __('Title', PR__CMN__FOUNDATION), Constants::jwgqsuikqcsgemuu => __('Type', PR__CMN__FOUNDATION)]); $this->mcacmissyeeqkeak(Constants::ismwycwsasweqomi, [Constants::qescuiwgsyuikume => $this->imkyoqyocosuqasu('modal_title', sprintf(__('Select for %s', PR__CMN__FOUNDATION), $this->qcgakseyaikigqco())), Constants::gqmuoaykeqeuoukm => [Constants::TEXT => $this->imkyoqyocosuqasu('modal_button_text', __('Use This File', PR__CMN__FOUNDATION))], 'library' => $this->imkyoqyocosuqasu('modal_query', []), 'multiple' => false]); $this->eskgwaywimqcwcyy('config', $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($this->kooiucqkggeagccu())); $qcokcugqceckmigs = ''; if ($this->ysyswymameciiyce()) { $aiooqyausygaasqm = $this->qooeaookuemoqecm(); foreach ($this->imkyoqyocosuqasu('information', []) as $uusmaiomayssaecw => $meqocwsecsywiiqs) { $eqgoocgaqwqcimie = ''; switch ($uusmaiomayssaecw) { case Constants::qescuiwgsyuikume: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->qcgakseyaikigqco($aiooqyausygaasqm); break; case Constants::jwgqsuikqcsgemuu: $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->ikocqgeqiykwwyqs($aiooqyausygaasqm); break; case Constants::eqkeooqcsscoggia: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->iqsmaqoiukeasukw()->souwykwwmyygqyqi($aiooqyausygaasqm); break; } if ($eqgoocgaqwqcimie) { $qcokcugqceckmigs .= $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui("{$meqocwsecsywiiqs}: {$eqgoocgaqwqcimie}", ['class' => 'pr-title-level-3', 'data-line' => 2]); } } } $this->igiywquyccyiaucw('information', $qcokcugqceckmigs); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { if ($this->ysyswymameciiyce()) { $kkeqqkkkqwkocsyu['field_container_class'] = 'media-added'; } return $kkeqqkkkqwkocsyu; } }
