<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bb6af50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\HTML; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\FormGenerator\Backend\Field as Field; use Pmpr\Common\Foundation\FormGenerator\Backend\Traits\ObjectTrait; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\ORM\Model; use WP_Screen; class Backend extends Common { use ObjectTrait; const iuuysigyggsswiae = 'backend'; public function oequuauskyumwyau(?string $csgiecsagosuucqo = null) { $ksaameoqigiaoigg = null; if ($gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau()) { switch (strtolower($csgiecsagosuucqo)) { case Constants::gouqcwikiiygyasc: $ksaameoqigiaoigg = $gcgsqcoqciockquc->id; break; default: $ksaameoqigiaoigg = $gcgsqcoqciockquc; } } return $ksaameoqigiaoigg; } public function uyouiyyykmoqmicg($gaeqamemwmwsyukm, string $iueymcwwscwqkiyq = 'added') : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); return $swqimwqeweekeusq->gmqyuaqwgiayskei($swqimwqeweekeusq->gmqyuaqwgiayskei($gaeqamemwmwsyukm, ['class' => 'plugin-count']), ['class' => "update-plugins count-{$iueymcwwscwqkiyq} ml-2"]); } public function smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, array $wwgucssaecqekuek = [], bool $gskuwmeemyeuwogc = false) { if ($wkaqekwwgqsqwcoi) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, [Constants::kicoscymgmgqeqgy => $gskuwmeemyeuwogc]); $meqocwsecsywiiqs = $swqimwqeweekeusq->gmqyuaqwgiayskei($meqocwsecsywiiqs, ['class' => 'ml-2']); $meqocwsecsywiiqs = $swqimwqeweekeusq->gmqyuaqwgiayskei($wkaqekwwgqsqwcoi . $meqocwsecsywiiqs); } return $meqocwsecsywiiqs; } public function cosayasseegkqiii(array $iyuoemwqumwyekia, string $ukwokcuqauuosmoo = '') : string { $nsmgceoqaqogqmuw = ''; if ($iyuoemwqumwyekia) { if (!$ukwokcuqauuosmoo) { $ukwokcuqauuosmoo = __('You can use these placeholders:', PR__CMN__FOUNDATION); } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($iyuoemwqumwyekia as $ymqmyyeuycgmigyo => $meqocwsecsywiiqs) { $iyuoemwqumwyekia[$ymqmyyeuycgmigyo] = $swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, '#', ['class' => 'pr-placeholder-link', 'data-name' => sprintf(Constants::gqyiyqoweswesamk, is_numeric($ymqmyyeuycgmigyo) ? $meqocwsecsywiiqs : $ymqmyyeuycgmigyo)]); } $nsmgceoqaqogqmuw = $swqimwqeweekeusq->gmqyuaqwgiayskei(implode("|", $iyuoemwqumwyekia), ['class' => 'pr-placeholders']); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->iaaacsuskiakkwui($ukwokcuqauuosmoo . $nsmgceoqaqogqmuw, ['class' => 'pr-placeholders-wrap']); } return $nsmgceoqaqogqmuw; } public function kqmkicmuscsgqeoi(array $ywmkwiwkosakssii = []) : string { if (isset($ywmkwiwkosakssii['hide'])) { $ywmkwiwkosakssii[Constants::ieioeisgwcgysukw] = !$ywmkwiwkosakssii['hide']; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ieioeisgwcgysukw => false, Constants::qgqyauaqwqmqseim => IconInterface::cusyymqgcoccukom, Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::igssuqwuicwawgam => Constants::PRIMARY, Constants::qaioykeumkssukis => true, Constants::kekcgssiyagioocg => 'absolute', Constants::ooqkaeeeqyoyyiao => false, Constants::wwsacswioisomkui => '']); $ywmkwiwkosakssii['icon_attrs'] = ['class' => "icon-{$ywmkwiwkosakssii[Constants::waguuiqqgsysuukq]} icon-{$ywmkwiwkosakssii[Constants::igssuqwuicwawgam]}"]; return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . '/spinner', $ywmkwiwkosakssii); } public function igiawkoqiogocsau(array $ywmkwiwkosakssii, string $meqocwsecsywiiqs, array $wwgucssaecqekuek = []) : string { $wwgucssaecqekuek = $this->ymgmywskuwyiymwm($ywmkwiwkosakssii, $wwgucssaecqekuek); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia($meqocwsecsywiiqs, '#', $wwgucssaecqekuek, $meqocwsecsywiiqs); if (isset($ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu]) && $ywmkwiwkosakssii[Constants::qaacaqioeyiuakeu]) { echo $nsmgceoqaqogqmuw; } return $nsmgceoqaqogqmuw; } public function ymgmywskuwyiymwm(array $ywmkwiwkosakssii = [], array $wwgucssaecqekuek = []) : array { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wwgucssaecqekuek = (array) $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'pr-confirmable-action'); return (array) $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'data-config', $this->uskieqmcqyecigmy($ywmkwiwkosakssii)); } public function icqkogwskuwscskk(array $ywmkwiwkosakssii = [], array $gskauacumcmekigs = []) : string { $qsqwqsymmqeoqwcu = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($this->uskieqmcqyecigmy(array_merge($ywmkwiwkosakssii, [Constants::qmwqkaeamecekiso => false])), [Constants::uwycywkimsycqwcy => 'dialog', Constants::PREFIX => Constants::ioomakeyqiqowgmk, 'close_title' => __('Close', PR__CMN__FOUNDATION)]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (!$gkyciwoiiisgywcs->get($qsqwqsymmqeoqwcu, Constants::PREFIX, '')) { _doing_it_wrong(__FUNCTION__, __('please specify a prefix for for modal', PR__CMN__FOUNDATION), 1); } $qsqwqsymmqeoqwcu[Constants::aygyaiikmgsuccsg] = $this->kqmkicmuscsgqeoi(['container_class' => 'pr-modal-spinner']); $nsmgceoqaqogqmuw = $this->auqoykuwiywsocis(self::iuuysigyggsswiae . '/modal', $qsqwqsymmqeoqwcu); if ($gskauacumcmekigs) { $wwgucssaecqekuek = $gkyciwoiiisgywcs->get($gskauacumcmekigs, Constants::ysskgssgwuwmqwym, []); $meqocwsecsywiiqs = $gkyciwoiiisgywcs->get($gskauacumcmekigs, Constants::qescuiwgsyuikume); $kqywgoqsmuswammk = $gkyciwoiiisgywcs->get($gskauacumcmekigs, Constants::ELEMENT, Constants::gqmuoaykeqeuoukm); $wwgucssaecqekuek['data-modal'] = $gkyciwoiiisgywcs->get($qsqwqsymmqeoqwcu, Constants::PREFIX, Constants::ioomakeyqiqowgmk) . '_modal'; if ($kqywgoqsmuswammk === 'a' && !$gkyciwoiiisgywcs->get($wwgucssaecqekuek, 'href', false)) { $wwgucssaecqekuek['href'] = '#'; } $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'pr-confirmable-action'); $ewgwqamkygiqaawc = $gkyciwoiiisgywcs->unset($gskauacumcmekigs, Constants::ssmskyqgcmeiayco); if (!$ewgwqamkygiqaawc) { $ewgwqamkygiqaawc = $meqocwsecsywiiqs; } $nsmgceoqaqogqmuw .= $swqimwqeweekeusq->qgsekwygcgawekeq($kqywgoqsmuswammk, $wwgucssaecqekuek, true, $ewgwqamkygiqaawc); } return $nsmgceoqaqogqmuw; } public function wouimaqqweceiamk($iwamiguusayooguq, $wkaqekwwgqsqwcoi = '') : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if ($wkaqekwwgqsqwcoi) { $wwgucssaecqekuek = []; if (is_array($wkaqekwwgqsqwcoi)) { $wwgucssaecqekuek = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wkaqekwwgqsqwcoi, Constants::ysskgssgwuwmqwym, []); $wkaqekwwgqsqwcoi = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($wkaqekwwgqsqwcoi, Constants::qgqyauaqwqmqseim, ''); } $wwgucssaecqekuek = $swqimwqeweekeusq->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'my-auto icon-sm mr-2'); $wkaqekwwgqsqwcoi = $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, $wwgucssaecqekuek, [Constants::kicoscymgmgqeqgy => true]); } return $swqimwqeweekeusq->iaaacsuskiakkwui([$wkaqekwwgqsqwcoi, $swqimwqeweekeusq->gmqyuaqwgiayskei($iwamiguusayooguq, ['class' => 'my-auto'])], ['class' => 'pr-modal-guide d-flex']); } public function ueyuicgwuyuiioie($uamcoiueqaamsqma, $occymigcemkqucuw, $iqaosyayeiuaisqi = false) : string { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); if (is_array($uamcoiueqaamsqma)) { $uamcoiueqaamsqma = $swqimwqeweekeusq->gsamuciwkekemqqi([Constants::qwumqqyuasyskkkc => $uamcoiueqaamsqma]); } if (is_string($uamcoiueqaamsqma)) { if (!$iqaosyayeiuaisqi) { $iqaosyayeiuaisqi = $occymigcemkqucuw ? Constants::ckcawaoawwioqecq : Constants::wyaqwomqwwaoiwas; } $uamcoiueqaamsqma = $swqimwqeweekeusq->iaaacsuskiakkwui($uamcoiueqaamsqma, ['class' => "text-center modal-message modal-message-{$iqaosyayeiuaisqi}"]); } return $uamcoiueqaamsqma; } public function uskieqmcqyecigmy(array $ywmkwiwkosakssii = [], string $kqywgoqsmuswammk = Constants::gqmuoaykeqeuoukm) { $qsqwqsymmqeoqwcu = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qmwqkaeamecekiso => JSON_UNESCAPED_SLASHES, Constants::squoamkioomemiyi => Constants::smkwuwawwaqyimcq, Constants::waguuiqqgsysuukq => Constants::agaisgmugicmioge, Constants::qescuiwgsyuikume => __('Alert', PR__CMN__FOUNDATION), Constants::kekekeusyqkouowm => [], Constants::eoskkkieowogacws => '', Constants::ssmskyqgcmeiayco => '', Constants::icmukuayogkcwuwg => false]); if ($qyukicweqoisimwg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qsqwqsymmqeoqwcu, Constants::kekekeusyqkouowm, [])) { $qsqwqsymmqeoqwcu[Constants::kekekeusyqkouowm] = $this->uoqqeckymmmqmgiq($qyukicweqoisimwg, $kqywgoqsmuswammk); } if ($smgooosyoeqwcaeg = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($qsqwqsymmqeoqwcu, Constants::qmwqkaeamecekiso)) { $qsqwqsymmqeoqwcu = $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qsqwqsymmqeoqwcu, $smgooosyoeqwcaeg, true); } return $qsqwqsymmqeoqwcu; } public function uoqqeckymmmqmgiq(array $qyukicweqoisimwg = [], string $kqywgoqsmuswammk = Constants::gqmuoaykeqeuoukm) : array { if ($qyukicweqoisimwg) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ggauoeuaesiymgee = ['class' => 'pr-btn btn-outline-primary', Constants::gcscaoggkqysyckq => true]; foreach ($qyukicweqoisimwg as $momcykaoccoymeig => $gskauacumcmekigs) { if (is_string($gskauacumcmekigs)) { switch ($gskauacumcmekigs) { case Constants::OK: $gskauacumcmekigs = $ggauoeuaesiymgee; $gskauacumcmekigs[Constants::qescuiwgsyuikume] = __('OK', PR__CMN__FOUNDATION); break; case Constants::mosycwwoqguicaeo: $gskauacumcmekigs = $ggauoeuaesiymgee; $gskauacumcmekigs[Constants::qescuiwgsyuikume] = __('Cancel', PR__CMN__FOUNDATION); break; } } if (is_array($gskauacumcmekigs)) { if ($gkyciwoiiisgywcs->get($gskauacumcmekigs, Constants::gcscaoggkqysyckq, false)) { $gskauacumcmekigs[] = 'data-micromodal-close'; } $geecqyososceumsk = $gkyciwoiiisgywcs->get($gskauacumcmekigs, 'href'); $gskauacumcmekigs = $swqimwqeweekeusq->igmaewykumgwoaoy($gskauacumcmekigs, 'class', 'px-5'); if ($geecqyososceumsk) { $scwiymciagumsuiw = 'a'; } else { $scwiymciagumsuiw = $kqywgoqsmuswammk; } if ($scwiymciagumsuiw === Constants::gqmuoaykeqeuoukm && !isset($gskauacumcmekigs[Constants::squoamkioomemiyi])) { $gskauacumcmekigs[Constants::squoamkioomemiyi] = Constants::gqmuoaykeqeuoukm; } $qyukicweqoisimwg[$momcykaoccoymeig] = $swqimwqeweekeusq->qgsekwygcgawekeq($scwiymciagumsuiw, $gskauacumcmekigs, true, $gkyciwoiiisgywcs->get($gskauacumcmekigs, Constants::qescuiwgsyuikume)); } } } return $qyukicweqoisimwg; } public function yammmmogeegasyso(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => '', Constants::gcqgqqsiqcaosqqk => '', Constants::yawumiieikgwoqmw => '', Constants::ssmskyqgcmeiayco => '']); $ewgwqamkygiqaawc = $ywmkwiwkosakssii[Constants::ssmskyqgcmeiayco]; if ($ewgwqamkygiqaawc && is_string($ewgwqamkygiqaawc)) { $ywmkwiwkosakssii[Constants::ssmskyqgcmeiayco] = [$ewgwqamkygiqaawc]; } return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . '/card', $ywmkwiwkosakssii); } public function oockkqiqsssakuug($ywmkwiwkosakssii = []) { if (is_string($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qgqyauaqwqmqseim => true, Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '', Constants::ukmmooykymieiuec => 'strong']); if (is_bool($ywmkwiwkosakssii[Constants::qgqyauaqwqmqseim]) && $ywmkwiwkosakssii[Constants::qgqyauaqwqmqseim]) { switch ($ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { case Constants::wyaqwomqwwaoiwas: $wkaqekwwgqsqwcoi = IconInterface::kcyyouekgyaqyqak; break; case Constants::ckcawaoawwioqecq: $wkaqekwwgqsqwcoi = IconInterface::sucyqiucaqowyomk; break; case Constants::smkwuwawwaqyimcq: $wkaqekwwgqsqwcoi = IconInterface::uimgcyyaugqcacea; break; case Constants::ecioqysekgaasegg: default: $wkaqekwwgqsqwcoi = IconInterface::ksosaawiuaiosemw; break; } $ywmkwiwkosakssii[Constants::qgqyauaqwqmqseim] = $wkaqekwwgqsqwcoi; } return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . '/alert', $ywmkwiwkosakssii); } public function mumsqekeeuykyemy($ywmkwiwkosakssii = []) : string { if (is_string($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [Constants::ssmskyqgcmeiayco => $ywmkwiwkosakssii]; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => Constants::ioomakeyqiqowgmk, Constants::squoamkioomemiyi => Constants::ecioqysekgaasegg, Constants::qescuiwgsyuikume => '', Constants::kqeokggqcsesmqco => false, Constants::ssmskyqgcmeiayco => '', Constants::eekuioqeyeoyumym => true, Constants::ukmmooykymieiuec => 'strong']); return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . '/notice', $ywmkwiwkosakssii); } public function qgouuesqwwyqmcwg(array $ykiyyumywksqcisg = []) : array { $ygogqywsaqoukoqy = []; $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $kucqmymoesuasgou = $swqimwqeweekeusq->gmqyuaqwgiayskei('%1$s', ['class' => 'font-13 my-auto ml-2']); $gskuwmeemyeuwogc = $swqimwqeweekeusq->iaaacsuskiakkwui(['%2$s', $kucqmymoesuasgou], ['class' => 'd-flex justify-content-start']); foreach ($ykiyyumywksqcisg as $wkaqekwwgqsqwcoi => $pkyyagewkiyckmwy) { $ygogqywsaqoukoqy[$wkaqekwwgqsqwcoi] = sprintf($gskuwmeemyeuwogc, $pkyyagewkiyckmwy, $swqimwqeweekeusq->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, [], [Constants::ELEMENT => 'img'])); } return $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->sscegwueamckwmcy('escaped_icons_dropdown', $ygogqywsaqoukoqy, $gskuwmeemyeuwogc); } public function aemwscceysomkuea(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ykkwcyqesigeeaoe => '', Constants::wecqkaigumwuugca => '', Constants::qoquaeuooeycomks => '', Constants::ysgwugcqguggmigq => '', Constants::qsegwakiwaiyimyy => '', Constants::ucmueuwwcmocgmig => Constants::gewmeskawiqikkoc, Constants::wwgusigoaksqmwsm => '', Constants::wuowaiyouwecckaw => '', Constants::gqmskcacocowcwaw => '', Constants::kekcgssiyagioocg => 50]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $kayeigaiwieuugyg = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::wecqkaigumwuugca); $gumkuugeccqoaemq = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::ykkwcyqesigeeaoe); $eogowigeyucaauig = $ywmkwiwkosakssii[Constants::ucmueuwwcmocgmig] ?? ''; $wgaiuiysuegayseo = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qoquaeuooeycomks, '', false); $cmyoswawcimsecyy = $ywmkwiwkosakssii[Constants::ysgwugcqguggmigq] ?? ''; $kuysccmeoqgaiumc = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::qsegwakiwaiyimyy, $cmyoswawcimsecyy); $eomymqcmcwieomke = $ywmkwiwkosakssii[Constants::wuowaiyouwecckaw] ?? ''; $ekiuyucoiagmscgy = $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm] ?? false; $kuuiuigeacouwmaa = $ywmkwiwkosakssii[Constants::kekcgssiyagioocg] ?? 50; $kisaucuwwaaiwuqe = $ywmkwiwkosakssii[Constants::gqmskcacocowcwaw] ?? ''; if ($kisaucuwwaaiwuqe && !$this->caokeucsksukesyo()->owgcciayoweymuws()->skksumsyamssouqc($kisaucuwwaaiwuqe, 'dashicons-') && !$this->caokeucsksukesyo()->gyecsegqciqykomu()->wmcwegoisyeeosqu($kisaucuwwaaiwuqe)) { $kisaucuwwaaiwuqe = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($kisaucuwwaaiwuqe, [], [Constants::kicoscymgmgqeqgy => true, Constants::aisguagukaewucii => 'base64']); } $mqwwsgggokkiiceo = $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye(); $ewsqcacamuomwagw = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw(); if ($wgaiuiysuegayseo !== '') { if ($wgaiuiysuegayseo === null) { $wgaiuiysuegayseo = ''; } $iaakskwmyqceoscy = $ewsqcacamuomwagw->qokeeagcgucqmgco($wgaiuiysuegayseo, $cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $ekiuyucoiagmscgy, $kuuiuigeacouwmaa); parse_str("page={$eomymqcmcwieomke}", $uoomaookgsyciacm); if (empty($wgaiuiysuegayseo) && $kayeigaiwieuugyg) { $mqwwsgggokkiiceo->cecaguuoecmccuse('parent_file', function ($maccwayioakewkku) use($eomymqcmcwieomke, $kayeigaiwieuugyg) { global $_wp_menu_nopriv, $_wp_real_parent_file; $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if ($gcgsqcoqciockquc && $gcgsqcoqciockquc->id === "admin_page_{$eomymqcmcwieomke}") { $maccwayioakewkku = $kayeigaiwieuugyg; $_wp_menu_nopriv[$eomymqcmcwieomke] = true; $_wp_real_parent_file[$eomymqcmcwieomke] = $kayeigaiwieuugyg; } return $maccwayioakewkku; }, 99); $mqwwsgggokkiiceo->cecaguuoecmccuse('submenu_file', function ($wwwmkyqmkccyowii) use($eomymqcmcwieomke, $gumkuugeccqoaemq) { $gcgsqcoqciockquc = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->oequuauskyumwyau(); if ($gcgsqcoqciockquc && $gcgsqcoqciockquc->id === "admin_page_{$eomymqcmcwieomke}") { $wwwmkyqmkccyowii = $gumkuugeccqoaemq; } return $wwwmkyqmkccyowii; }, 99); } } else { global $admin_page_hooks; $iaakskwmyqceoscy = $ewsqcacamuomwagw->iyaokukyeukqokqe($cmyoswawcimsecyy, $kuysccmeoqgaiumc, $eogowigeyucaauig, $eomymqcmcwieomke, $ekiuyucoiagmscgy, $kisaucuwwaaiwuqe, $kuuiuigeacouwmaa); $admin_page_hooks[$eomymqcmcwieomke] = $eomymqcmcwieomke; if (empty($ekiuyucoiagmscgy)) { $mqwwsgggokkiiceo->qcsmikeggeemccuu('admin_head', function () use($eomymqcmcwieomke) { $this->koskoowkikggmmgy($eomymqcmcwieomke, $eomymqcmcwieomke); }, 99); } } return $iaakskwmyqceoscy; } public function koskoowkikggmmgy(string $aaokuekaimigoyue, string $ccwmwwqcgekcskqa = null) { if ($ccwmwwqcgekcskqa) { $qcgkuqesqqymcuui = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gskomckeekemaake($aaokuekaimigoyue, $ccwmwwqcgekcskqa); } else { $qcgkuqesqqymcuui = $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->gkyiimkoysuawmuq($aaokuekaimigoyue); } return $qcgkuqesqqymcuui; } public function sikqggwmmykuiymy($ywmkwiwkosakssii = []) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ['icon_attrs' => [], Constants::gouqcwikiiygyasc => '', Constants::okeuagwgwkmiokac => [], Constants::qgqyauaqwqmqseim => '', Constants::qescuiwgsyuikume => '', Constants::cacismqswgaewkuu => '', Constants::osiogououyayqyck => Constants::qayiiikwusguoask, Constants::wwgusigoaksqmwsm => '', Constants::iuqumwggccmcuyem => Constants::sgiwkasmqqockceq]); $meqocwsecsywiiqs = $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]; if ($wkaqekwwgqsqwcoi = $ywmkwiwkosakssii[Constants::qgqyauaqwqmqseim]) { $wwgucssaecqekuek = $ywmkwiwkosakssii['icon_attrs']; $wwgucssaecqekuek = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->igmaewykumgwoaoy($wwgucssaecqekuek, 'class', 'icon-sm'); $meqocwsecsywiiqs = $this->smawkkqgsoawiquc($meqocwsecsywiiqs, $wkaqekwwgqsqwcoi, $wwgucssaecqekuek); } $aokagokqyuysuksm = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc, $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(5)); $this->uwkmaywceaaaigwo()->ogciwyoqgciosgcw()->sikqggwmmykuiymy($aokagokqyuysuksm, $meqocwsecsywiiqs, $ywmkwiwkosakssii[Constants::wwgusigoaksqmwsm], $ywmkwiwkosakssii[Constants::cacismqswgaewkuu], $ywmkwiwkosakssii[Constants::osiogououyayqyck], $ywmkwiwkosakssii[Constants::iuqumwggccmcuyem], $ywmkwiwkosakssii[Constants::okeuagwgwkmiokac]); } public function ocegoqcckecwgays(array $ywmkwiwkosakssii = []) : ?Field\Field { $aiowsaccomcoikus = null; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc => '', Constants::squoamkioomemiyi => Constants::TEXT, Constants::qescuiwgsyuikume => '']); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($aokagokqyuysuksm = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gouqcwikiiygyasc)) { $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::squoamkioomemiyi, Constants::TEXT); switch ($sqeykgyoooqysmca) { case 'collection': $aiowsaccomcoikus = $this->qqmgmgasauucoago($aokagokqyuysuksm); break; case 'hidden': $aiowsaccomcoikus = $this->cwiuiiakukcsaakw($aokagokqyuysuksm); break; case Constants::semqugiuwygamias: $aiowsaccomcoikus = $this->wcwmusaouiqaqeww($aokagokqyuysuksm); break; case 'tel': case Constants::auqoykcmsiauccao: case Constants::TEXT: case Constants::muqaqimusmckkieq: case Constants::eymwucuaaiiciymc: $aiowsaccomcoikus = $this->ymuegqgyuagyucws($aokagokqyuysuksm); break; case Constants::yaiacqocwcgmooio: $aiowsaccomcoikus = $this->sciaycsmsiekqueg($aokagokqyuysuksm); break; case Constants::msmkiouagmwoseqk: $aiowsaccomcoikus = $this->uouyygwcgsmygaee($aokagokqyuysuksm); break; case 'media': case Constants::kekgqaemqessuwmq: case Constants::mkousmkiawwousws: $aiowsaccomcoikus = $this->quaegkgkucwyeiqg($aokagokqyuysuksm); break; case Constants::qgqyauaqwqmqseim: $aiowsaccomcoikus = $this->gosycecgwuesyysq($aokagokqyuysuksm); break; case Constants::SELECT: $aiowsaccomcoikus = $this->mccagaqeagiikkec($aokagokqyuysuksm); break; case 'select-role': $aiowsaccomcoikus = $this->mccagaqeagiikkec($aokagokqyuysuksm)->acauweqyyugwisqc($this->caokeucsksukesyo()->issssuygyewuaswa()->yagwwwqikmkuyicq(true)); break; case 'select-post': $aiowsaccomcoikus = $this->mccagaqeagiikkec($aokagokqyuysuksm)->ukqywcsoogkyoaoa(); break; case 'select-user': $aiowsaccomcoikus = $this->mccagaqeagiikkec($aokagokqyuysuksm)->umokgsqqogccoouo(); break; case 'select-term': $aiowsaccomcoikus = $this->mccagaqeagiikkec($aokagokqyuysuksm)->ikimooaieasgmeak(); break; } if ($aiowsaccomcoikus) { $gkyciwoiiisgywcs->unset($ywmkwiwkosakssii, [Constants::gouqcwikiiygyasc, Constants::squoamkioomemiyi, Constants::qescuiwgsyuikume]); $ciagusimogciiumg = ['add', 'set', '']; foreach ($ywmkwiwkosakssii as $wsmeuqcsyguikoci => $eqgoocgaqwqcimie) { $wuyimwscukmqqsqk = true; if (is_numeric($wsmeuqcsyguikoci)) { $wuyimwscukmqqsqk = false; $wsmeuqcsyguikoci = $eqgoocgaqwqcimie; } $wsmeuqcsyguikoci = $this->caokeucsksukesyo()->owgcciayoweymuws()->qoqowykumameucwa($wsmeuqcsyguikoci); $cgwqqcukiasoicmi = $this->caokeucsksukesyo()->ekkwaykokcgqkmoi(); foreach ($ciagusimogciiumg as $yuwymayicwwqiske) { $qgciuiagkkguykgs = $wsmeuqcsyguikoci; if ($yuwymayicwwqiske) { $qgciuiagkkguykgs = $yuwymayicwwqiske . ucfirst($qgciuiagkkguykgs); } $qgciuiagkkguykgs = $cgwqqcukiasoicmi->myagqecycsaiyqsk($aiowsaccomcoikus, $qgciuiagkkguykgs); if ($qgciuiagkkguykgs) { switch ($wsmeuqcsyguikoci) { case Constants::wceagkqgmeogkoig: foreach ($eqgoocgaqwqcimie as $oyumuuqqsmuacmak) { $aiowsaccomcoikus->qyucewwiggkyeaso($gkyciwoiiisgywcs->get($oyumuuqqsmuacmak, Constants::ykqyicwaggyuuuwo, []), $gkyciwoiiisgywcs->get($oyumuuqqsmuacmak, Constants::ymckmcsiymwqucoq, []), $gkyciwoiiisgywcs->get($oyumuuqqsmuacmak, Constants::REVERSE, false)); } break; default: if ($wuyimwscukmqqsqk) { if ($wsmeuqcsyguikoci === 'container' && is_array($eqgoocgaqwqcimie)) { $aiowsaccomcoikus->mkguiwagcqikiack(); } else { $aiowsaccomcoikus->{$qgciuiagkkguykgs}($eqgoocgaqwqcimie); } } else { $aiowsaccomcoikus->{$qgciuiagkkguykgs}(); } } break; } } } } } return $aiowsaccomcoikus; } public function yemoaoaqkmkigwis(array $ikgwqyuyckaewsow, array $icwicymcioeyeyek = []) : array { $cegwokqskcaoqewu = []; $wgksyimicsqyaiqu = []; if ($ikgwqyuyckaewsow) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field\Field) { $ymqmyyeuycgmigyo = $aiowsaccomcoikus->aakmagwggmkoiiyu(); $eqgoocgaqwqcimie = $icwicymcioeyeyek[$ymqmyyeuycgmigyo] ?? null; if ($aiowsaccomcoikus instanceof Field\Container) { [$_prepared, $_processed] = $this->yemoaoaqkmkigwis($aiowsaccomcoikus->ugmceccgwaaaigiy(), $icwicymcioeyeyek); $wgksyimicsqyaiqu += $_prepared; $cegwokqskcaoqewu += $_processed; } else { if ($icwicymcioeyeyek) { if ($aiowsaccomcoikus->agmmqsowmyywagcm()) { if ($aiowsaccomcoikus instanceof Field\Collection) { if (is_array($eqgoocgaqwqcimie) && $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = array_values($eqgoocgaqwqcimie); foreach ($eqgoocgaqwqcimie as $momcykaoccoymeig => $uiymkeeaukcyqqik) { if (is_array($uiymkeeaukcyqqik)) { if (!isset($uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm]) || empty($uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm])) { $uiymkeeaukcyqqik[Constants::ascagqcquwgmygkm] = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(); } $eqgoocgaqwqcimie[$momcykaoccoymeig] = $this->yemoaoaqkmkigwis($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uiymkeeaukcyqqik)[1]; } } } else { $eqgoocgaqwqcimie = []; } } else { $yiiiqewsseywemqu = $aiowsaccomcoikus->ikaukuqokwgsyeia(); if (is_callable($yiiiqewsseywemqu)) { $eqgoocgaqwqcimie = $yiiiqewsseywemqu($eqgoocgaqwqcimie); } } $wgksyimicsqyaiqu[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; $cegwokqskcaoqewu[$ymqmyyeuycgmigyo] = $eqgoocgaqwqcimie; } } else { $wgksyimicsqyaiqu[$ymqmyyeuycgmigyo] = $aiowsaccomcoikus; } } } } } return [$wgksyimicsqyaiqu, $cegwokqskcaoqewu]; } public function uiwgikskqiusqook($ikgwqyuyckaewsow, $icwicymcioeyeyek = null, bool $mkmssscwmeekwgqo = true) : array { if ($ikgwqyuyckaewsow && is_array($ikgwqyuyckaewsow)) { foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field\Field) { if ($aiowsaccomcoikus instanceof Field\Container) { $this->uiwgikskqiusqook($aiowsaccomcoikus->ugmceccgwaaaigiy(), $icwicymcioeyeyek, false); } else { $uiymkeeaukcyqqik = null; if (is_array($icwicymcioeyeyek)) { $uiymkeeaukcyqqik = $icwicymcioeyeyek[$aiowsaccomcoikus->aakmagwggmkoiiyu()] ?? ''; } else { if (is_callable($icwicymcioeyeyek)) { $uiymkeeaukcyqqik = $icwicymcioeyeyek($aiowsaccomcoikus); } } if (empty($aiowsaccomcoikus->qooeaookuemoqecm())) { if (empty($uiymkeeaukcyqqik) && !$aiowsaccomcoikus->agmmqsowmyywagcm() && !empty($aiowsaccomcoikus->oiswysuiioecsaae())) { $uiymkeeaukcyqqik = $aiowsaccomcoikus->oiswysuiioecsaae(); } $aiowsaccomcoikus->iygyugseyaqwywyg($uiymkeeaukcyqqik); } if ($mkmssscwmeekwgqo) { if ($aiowsaccomcoikus instanceof Field\Text || $aiowsaccomcoikus instanceof Field\Icon || $aiowsaccomcoikus instanceof Field\Select || ($aiowsaccomcoikus instanceof Field\Media || $aiowsaccomcoikus instanceof Field\Textarea) && !$aiowsaccomcoikus->mmukacawgocecuqg()) { $aiowsaccomcoikus->mkmssscwmeekwgqo(); } else { if ($aiowsaccomcoikus instanceof Field\Collection && $aiowsaccomcoikus->iqoyuqgssusgimwa()) { $this->uiwgikskqiusqook($aiowsaccomcoikus->ugmceccgwaaaigiy(), $uiymkeeaukcyqqik, $mkmssscwmeekwgqo); } } } } } } } return $ikgwqyuyckaewsow; } public function ywoasuyoaicwqqsu(array $ikgwqyuyckaewsow = [], array $oyigwoawqogioses = []) : string { $nsmgceoqaqogqmuw = ''; foreach ($ikgwqyuyckaewsow as $aiowsaccomcoikus) { if ($aiowsaccomcoikus instanceof Field\Field) { $nsmgceoqaqogqmuw .= $aiowsaccomcoikus->render([Constants::qaacaqioeyiuakeu => false]); } } if ($oyigwoawqogioses) { $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->iaaacsuskiakkwui($nsmgceoqaqogqmuw, $oyigwoawqogioses); } return $nsmgceoqaqogqmuw; } public function wywauoikuogkwqmq(string $yuwymayicwwqiske = '') : array { return [$this->ymuegqgyuagyucws($yuwymayicwwqiske . Constants::icmokuskwoskgace)->gswweykyogmsyawy(__('Title', PR__CMN__FOUNDATION)), $this->sciaycsmsiekqueg($yuwymayicwwqiske . Constants::oiuiymiygsoiasug)->gswweykyogmsyawy(__('Description', PR__CMN__FOUNDATION))->qsecygiycssgacqs(3)->gsomueooycksswcy(), $this->quaegkgkucwyeiqg($yuwymayicwwqiske . Constants::yokmicsmkgecycsa)->gswweykyogmsyawy(__('Background', PR__CMN__FOUNDATION))]; } public function kyquyqwwkoquqwwg(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ccyeycyyykwuymsy => []]); $ikgwqyuyckaewsow = [Constants::mikumsayiwgkmoas => $this->yyuwuqsiucweeoue(Constants::mikumsayiwgkmoas)->mkmssscwmeekwgqo()->eumecwmqmukqgyea()->gswweykyogmsyawy(__('Link To', PR__CMN__FOUNDATION))->kesomeowemmyygey(Constants::mswoacegomcucaik, __('Post', PR__CMN__FOUNDATION))->kesomeowemmyygey(Constants::yoayaissyomokiui, __('Term', PR__CMN__FOUNDATION))->kesomeowemmyygey(Constants::auqoykcmsiauccao, __('URL', PR__CMN__FOUNDATION))->qyucewwiggkyeaso(Constants::mswoacegomcucaik, Constants::mswoacegomcucaik)->qyucewwiggkyeaso(Constants::yoayaissyomokiui, Constants::yoayaissyomokiui)->qyucewwiggkyeaso(Constants::auqoykcmsiauccao, Constants::auqoykcmsiauccao), Constants::mswoacegomcucaik => $this->mccagaqeagiikkec(Constants::mswoacegomcucaik)->ukqywcsoogkyoaoa()->gswweykyogmsyawy(__('Post', PR__CMN__FOUNDATION)), Constants::yoayaissyomokiui => $this->mccagaqeagiikkec(Constants::yoayaissyomokiui)->ikimooaieasgmeak()->gswweykyogmsyawy(__('Term', PR__CMN__FOUNDATION)), Constants::auqoykcmsiauccao => $this->ymuegqgyuagyucws(Constants::auqoykcmsiauccao)->xkgcwkwsqysqamic()->gswweykyogmsyawy(__('URL', PR__CMN__FOUNDATION)), Constants::qescuiwgsyuikume => $this->ymuegqgyuagyucws(Constants::qescuiwgsyuikume)->gswweykyogmsyawy(__('Title', PR__CMN__FOUNDATION))->gucwmccyimoagwcm(sprintf(__('You can override %s by this field.', PR__CMN__FOUNDATION), __('Title', PR__CMN__FOUNDATION))), Constants::eqkeooqcsscoggia => $this->sciaycsmsiekqueg(Constants::eqkeooqcsscoggia)->qsecygiycssgacqs(3)->gswweykyogmsyawy(__('Description', PR__CMN__FOUNDATION))->gsomueooycksswcy()->gucwmccyimoagwcm(sprintf(__('You can override %s by this field.', PR__CMN__FOUNDATION), __('Description', PR__CMN__FOUNDATION))), Constants::egwoacukmsioosum => $this->quaegkgkucwyeiqg(Constants::egwoacukmsioosum)->ycueqsmmommygueu()->gswweykyogmsyawy(__('Thumbnail', PR__CMN__FOUNDATION))->gucwmccyimoagwcm(sprintf(__('You can override %s by this field.', PR__CMN__FOUNDATION), __('Thumbnail', PR__CMN__FOUNDATION)))]; if ($yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]) { foreach ($yemgmmgogcwccuky as $igqsaukqcqscimok) { unset($ikgwqyuyckaewsow[$igqsaukqcqscimok]); } } return $ikgwqyuyckaewsow; } public function eqmcwusgemkccwqc($icwicymcioeyeyek) : array { $qsqwqsymmqeoqwcu = []; if ($icwicymcioeyeyek && is_array($icwicymcioeyeyek)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($icwicymcioeyeyek as $igqsaukqcqscimok) { $meqocwsecsywiiqs = $ukwokcuqauuosmoo = $migiiksoiymissge = $uickqscmwgggsmgy = ''; $sqeykgyoooqysmca = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::mikumsayiwgkmoas); switch ($sqeykgyoooqysmca) { case Constants::mswoacegomcucaik: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($post = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::mswoacegomcucaik)) { $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($post); $migiiksoiymissge = $seumokooiykcomco->ycqquoiyyuesegsy($post); $uickqscmwgggsmgy = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->usieywkaugusugwm($post); $ukwokcuqauuosmoo = $seumokooiykcomco->masoymaamekuykso($post); } break; case Constants::yoayaissyomokiui: $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if ($iwewcwusemqaiggk = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::yoayaissyomokiui)) { $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($iwewcwusemqaiggk); $migiiksoiymissge = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($iwewcwusemqaiggk); $uickqscmwgggsmgy = $aoskwucuugeuaeus->usieywkaugusugwm($iwewcwusemqaiggk); $ukwokcuqauuosmoo = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->meqceykmywmqgoym($iwewcwusemqaiggk); } break; case Constants::auqoykcmsiauccao: $migiiksoiymissge = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::auqoykcmsiauccao); break; } $qsqwqsymmqeoqwcu[] = [Constants::squoamkioomemiyi => $sqeykgyoooqysmca, Constants::qescuiwgsyuikume => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::qescuiwgsyuikume, $meqocwsecsywiiqs), Constants::egwoacukmsioosum => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::egwoacukmsioosum, $uickqscmwgggsmgy), Constants::sauwwsocmukoaayu => $migiiksoiymissge, Constants::eqkeooqcsscoggia => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::syooqwmkmsmgwcqw, $ukwokcuqauuosmoo)]; } } return $qsqwqsymmqeoqwcu; } public function sksgugioemuysuqa($sciomagaqmgggsiu = []) : array { return [$this->ymuegqgyuagyucws(Constants::oeouaqyskusqoasi)->gswweykyogmsyawy(__('Action Text', PR__CMN__FOUNDATION)), $this->yyuwuqsiucweeoue(Constants::uiusqayqyqsskssg)->mkmssscwmeekwgqo()->eyygsasuqmommkua(Constants::wwmgeoymmaiymyym)->gswweykyogmsyawy(__('Action Link Type', PR__CMN__FOUNDATION))->kesomeowemmyygey(Constants::wwmgeoymmaiymyym, __('Internal Link', PR__CMN__FOUNDATION))->kesomeowemmyygey(Constants::wouqosqskyksymwy, __('External Link', PR__CMN__FOUNDATION))->qyucewwiggkyeaso(Constants::wwmgeoymmaiymyym, Constants::wwmgeoymmaiymyym)->qyucewwiggkyeaso(Constants::wouqosqskyksymwy, Constants::wouqosqskyksymwy), $this->mccagaqeagiikkec(Constants::wwmgeoymmaiymyym)->ukqywcsoogkyoaoa($sciomagaqmgggsiu)->gswweykyogmsyawy(__('Action Link', PR__CMN__FOUNDATION)), $this->ymuegqgyuagyucws(Constants::wouqosqskyksymwy)->xkgcwkwsqysqamic()->gswweykyogmsyawy(__('Action Link', PR__CMN__FOUNDATION))]; } public function kcskasowcemooeei(array $icwicymcioeyeyek) : array { $qsqwqsymmqeoqwcu = []; $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($icwicymcioeyeyek as $igqsaukqcqscimok) { $iwywmkygwewiamwm = ''; switch ($gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uiusqayqyqsskssg)) { case Constants::wwmgeoymmaiymyym: $post = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::wwmgeoymmaiymyym); $iwywmkygwewiamwm = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($post); break; case Constants::wouqosqskyksymwy: $iwywmkygwewiamwm = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::wouqosqskyksymwy); break; } $qsqwqsymmqeoqwcu[] = [Constants::TEXT => $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::oeouaqyskusqoasi), Constants::ogigqueukwysusii => $iwywmkygwewiamwm]; } return $qsqwqsymmqeoqwcu; } public function ywggokoaagwwqyak($ywmkwiwkosakssii = []) : string { if (!is_array($ywmkwiwkosakssii)) { $ywmkwiwkosakssii = [Constants::ckmqoekmugkggeym => $ywmkwiwkosakssii]; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ogigqueukwysusii => '', Constants::squoamkioomemiyi => Constants::mswoacegomcucaik, Constants::qescuiwgsyuikume => '', Constants::emkkgysokckswycs => null, Constants::ckmqoekmugkggeym => null, Constants::mgsccwumkcawaqcy => '', Constants::osiogououyayqyck => Constants::iickqyckyaqcaokm, Constants::iikosyqiawkweouo => []]); $nsmgceoqaqogqmuw = ''; $iwywmkygwewiamwm = $ywmkwiwkosakssii[Constants::ogigqueukwysusii]; $meqocwsecsywiiqs = $ywmkwiwkosakssii[Constants::qescuiwgsyuikume]; if ($mksyucucyswaukig = $ywmkwiwkosakssii[Constants::ckmqoekmugkggeym]) { $mgkceomocowocqyo = $ywmkwiwkosakssii[Constants::osiogououyayqyck]; switch ($ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { case Constants::emkkgysokckswycs: $meywaqqsugaoeyys = $ywmkwiwkosakssii[Constants::emkkgysokckswycs]; if ($meywaqqsugaoeyys instanceof Model) { $meqocwsecsywiiqs = $meywaqqsugaoeyys->uikgwcuascgeissw($mksyucucyswaukig); $iwywmkygwewiamwm = $meywaqqsugaoeyys->ckwicogmemcwawmy(Constants::awysmmukegasimmq, $meywaqqsugaoeyys->mwyqswsaeeewsosm($mksyucucyswaukig)); } break; case Constants::meksegaoamowuwoq: $yoiguusocukqeayg = $this->caokeucsksukesyo()->issssuygyewuaswa(); $iwywmkygwewiamwm = $yoiguusocukqeayg->yyykkcyiksewsoqy($mksyucucyswaukig); $meqocwsecsywiiqs = $yoiguusocukqeayg->ygwimyogyaqgumam($mksyucucyswaukig, Constants::cuyqkgecokgmcwqu, true); break; case Constants::mswoacegomcucaik: $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (Constants::qiaqeaemuukkikmi === $mgkceomocowocqyo) { $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->yyykkcyiksewsoqy($mksyucucyswaukig); } else { $iwywmkygwewiamwm = $seumokooiykcomco->ycqquoiyyuesegsy($mksyucucyswaukig); } $meqocwsecsywiiqs = $seumokooiykcomco->qcgakseyaikigqco($mksyucucyswaukig); break; case Constants::yoayaissyomokiui: $aoskwucuugeuaeus = $this->caokeucsksukesyo()->kckogqkiycqeumoa(); if (Constants::qiaqeaemuukkikmi === $mgkceomocowocqyo) { $iwywmkygwewiamwm = $this->uwkmaywceaaaigwo()->kckogqkiycqeumoa()->yyykkcyiksewsoqy($mksyucucyswaukig); } else { $iwywmkygwewiamwm = $aoskwucuugeuaeus->qmgcisuuikgmqcsu($mksyucucyswaukig); } $meqocwsecsywiiqs = $aoskwucuugeuaeus->qcgakseyaikigqco($mksyucucyswaukig); break; } } if ($iwywmkygwewiamwm && $meqocwsecsywiiqs) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $siquossayskcwkea = $swqimwqeweekeusq->igmaewykumgwoaoy($ywmkwiwkosakssii[Constants::iikosyqiawkweouo], 'class', 'text-decoration-none'); if (!empty($ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy])) { $siquossayskcwkea[Constants::mgsccwumkcawaqcy] = $ywmkwiwkosakssii[Constants::mgsccwumkcawaqcy]; } $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($meqocwsecsywiiqs, $iwywmkygwewiamwm, $siquossayskcwkea); $nsmgceoqaqogqmuw = $swqimwqeweekeusq->ciuuiyckmsygceis($iwywmkygwewiamwm); } return $nsmgceoqaqogqmuw; } public function sggkmaawiqsqikgu(string $aiamqeawckcsuaou, string $meqocwsecsywiiqs, array $icwicymcioeyeyek = [], array $wwgucssaecqekuek = []) { $ywmkwiwkosakssii = $wwgucssaecqekuek; $ywmkwiwkosakssii[Constants::squoamkioomemiyi] = Constants::gqmuoaykeqeuoukm; $ywmkwiwkosakssii[Constants::qescuiwgsyuikume] = $meqocwsecsywiiqs; $ywmkwiwkosakssii['data-ajax-action'] = $aiamqeawckcsuaou; if ($icwicymcioeyeyek) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); foreach ($icwicymcioeyeyek as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { if (Constants::yyamasygmiymuoce === $uusmaiomayssaecw) { $uusmaiomayssaecw = Constants::oomaageiyqkaiekk; $eqgoocgaqwqcimie = $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->ikkqcccaweckukug($eqgoocgaqwqcimie); } $ywmkwiwkosakssii = $swqimwqeweekeusq->igmaewykumgwoaoy($ywmkwiwkosakssii, "data-{$uusmaiomayssaecw}", $eqgoocgaqwqcimie); } } return $ywmkwiwkosakssii; } public function mkueecewewkqywey(array $ywmkwiwkosakssii = []) : string { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::uiwqcumqkgikqyue => [], Constants::ysskgssgwuwmqwym => [], Constants::uqgcmmosieyimiku => '']); $wwgucssaecqekuek = $this->sggkmaawiqsqikgu($ywmkwiwkosakssii[Constants::uqgcmmosieyimiku], $ywmkwiwkosakssii[Constants::qescuiwgsyuikume], $ywmkwiwkosakssii[Constants::uiwqcumqkgikqyue], $ywmkwiwkosakssii[Constants::ysskgssgwuwmqwym]); return $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qgsekwygcgawekeq('button', $wwgucssaecqekuek, true, $wwgucssaecqekuek[Constants::qescuiwgsyuikume]); } public function sggkkiiqkekaomig(array $ywmkwiwkosakssii = []) : string { return $this->auqoykuwiywsocis(self::iuuysigyggsswiae . '/progressbar', $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->okosscaokmeqkqiq($ywmkwiwkosakssii)); } }
