<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e5ebdfa86cb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post_Type; class PostType extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::meieskyuuegwwcsy => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::ccyeycyyykwuymsy => [], Constants::ackcaikowcokggsc => [], Constants::qcaeuoiiqagycyww => []]); $sogksuscggsicmac = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]; $ggauoeuaesiymgee = Constants::uuqqcaaoioaaimoa; if (!$ooiewiwkegguusum) { goto sugmesswcyyuwame; } $gqgemcmoicmgaqie = []; goto kgkuyiqwqsyqques; sugmesswcyyuwame: $gqgemcmoicmgaqie = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii[Constants::meieskyuuegwwcsy], ["\137\x62\165\x69\x6c\x74\x69\156" => false, Constants::wuccaoymmygisoku => true, Constants::oiyqeoicceecwscs => true]); kgkuyiqwqsyqques: $aqykuigiuwmmcieu = $sogksuscggsicmac; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto deigmocesygywwwq; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; deigmocesygywwwq: $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $oammesyieqmwuwyi = $cwaqscoiqkokyase->ckscqqquyskscaaw($ggauoeuaesiymgee, $wgcaqkewqyygkgaa->ciugwooasaqcywas($gqgemcmoicmgaqie, $aqykuigiuwmmcieu)); if ($ooiewiwkegguusum) { goto rkqioecyciickiga; } if (!$yemgmmgogcwccuky) { goto awcawqaigquqqywo; } $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky)); awcawqaigquqqywo: goto hkcqsqgccmogcyim; rkqioecyciickiga: $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi); hkcqsqgccmogcyim: $ksaameoqigiaoigg = []; $ckgaeiyesoqoemic = $ywmkwiwkosakssii[Constants::qcaeuoiiqagycyww]; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu, Constants::gkmmeoeiqiewewoe, Constants::ouywiegeiyuaaawo], true)) { goto somiowsyicsqgggg; } $ksaameoqigiaoigg = $oammesyieqmwuwyi; goto aoyasgammyaegmqk; somiowsyicsqgggg: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($igqsaukqcqscimok); if (!($ckgaeiyesoqoemic && !$wgcaqkewqyygkgaa->akwkkemsqyaykueg($ymqmyyeuycgmigyo, $ckgaeiyesoqoemic))) { goto omusesiokggskasg; } goto mkqikqqsikqoqgwy; omusesiokggskasg: if (!($igqsaukqcqscimok = $this->imgymusqgccqsqqq($igqsaukqcqscimok))) { goto egcsgekkgiikcmsc; } switch ($sogksuscggsicmac) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, $ymqmyyeuycgmigyo); goto ygasycygmaumayys; case Constants::ouywiegeiyuaaawo: case Constants::gkmmeoeiqiewewoe: $igqsaukqcqscimok = $gkyciwoiiisgywcs->qamwegcyimgcqksw($igqsaukqcqscimok, "\x72\145\x77\x72\151\164\145\x2e\163\154\165\x67", $ymqmyyeuycgmigyo); goto ygasycygmaumayys; } cwcegeayeuuqccgs: ygasycygmaumayys: $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok; egcsgekkgiikcmsc: mkqikqqsikqoqgwy: } egukkoceuuaqqwqu: aoyasgammyaegmqk: return $ksaameoqigiaoigg; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function imgymusqgccqsqqq($useksmwkuswkwcqg = null) : ?WP_Post_Type { if ($useksmwkuswkwcqg instanceof WP_Post_Type) { goto omgqccwciyuekagc; } if ($useksmwkuswkwcqg) { goto wwagacmausicisuq; } $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); wwagacmausicisuq: $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); omgqccwciyuekagc: return $useksmwkuswkwcqg; } public function aakmagwggmkoiiyu($useksmwkuswkwcqg) : ?string { $ymqmyyeuycgmigyo = ''; if ($useksmwkuswkwcqg instanceof WP_Post_Type) { goto nmkyycyeioimqmcc; } if (is_string($useksmwkuswkwcqg)) { goto yoggkcicgggcyesq; } goto wuiecqogyoemkmyo; nmkyycyeioimqmcc: $ymqmyyeuycgmigyo = $useksmwkuswkwcqg->name; goto wuiecqogyoemkmyo; yoggkcicgggcyesq: $ymqmyyeuycgmigyo = $useksmwkuswkwcqg; wuiecqogyoemkmyo: return $ymqmyyeuycgmigyo; } public function myagyqumwekameww($useksmwkuswkwcqg) : string { return trailingslashit($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagyqumwekameww($this->aakmagwggmkoiiyu($useksmwkuswkwcqg))); } public function iowaquococsaccei($useksmwkuswkwcqg) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy("\x65\144\151\164\x2e\160\150\160")); } public function migkyseymeomymmy($sqeykgyoooqysmca = '') : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs($sqeykgyoooqysmca); } public function auiemgkycsemicim($sqeykgyoooqysmca = null) : bool { $auiemgkycsemicim = false; if (!($sqeykgyoooqysmca = $this->imgymusqgccqsqqq($sqeykgyoooqysmca))) { goto uqucqgwcgoqomyuk; } $auiemgkycsemicim = $sqeykgyoooqysmca->has_archive !== false; uqucqgwcgoqomyuk: return $auiemgkycsemicim; } public function cekoogweeooasayu($sqeykgyoooqysmca = null) : bool { $ogicwiwywaocosag = false; if (!($gymyaysoqyimkwsa = $this->imgymusqgccqsqqq($sqeykgyoooqysmca))) { goto eacucucugqmmwees; } $ogicwiwywaocosag = $gymyaysoqyimkwsa->public; eacucucugqmmwees: return $ogicwiwywaocosag; } public function uikgwcuascgeissw($useksmwkuswkwcqg = null, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($useksmwkuswkwcqg), "\x6c\x61\142\x65\154\163\56{$uusmaiomayssaecw}"); } public function gaywomkwewckiwuk(string $useksmwkuswkwcqg) : int { try { global $wpdb; $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg("\123\x45\x4c\x45\103\x54\x20\103\117\125\x4e\124\x28\x63\x6f\x6d\155\x65\x6e\x74\x5f\111\104\x29\xa\x9\11\11\x9\x9\106\x52\117\115\40{$wpdb->comments}\40\x57\110\105\122\x45\x20\143\x6f\155\155\145\156\x74\x5f\160\x6f\x73\164\137\111\104\x20\151\x6e\40\50\xa\x9\11\x9\x9\11\x53\105\x4c\105\103\x54\x20\111\104\40\x46\122\117\x4d\40{$wpdb->posts}\x20\127\110\x45\122\105\40\x70\x6f\x73\164\x5f\164\x79\x70\145\x20\75\x20\47{$useksmwkuswkwcqg}\x27\xa\11\11\x9\x9\x9\x41\x4e\x44\x20\160\x6f\x73\164\137\x73\164\141\x74\165\163\40\x3d\40\x27\x70\165\x62\154\151\x73\150\x27\51\x20\101\x4e\104\x20\143\157\x6d\x6d\x65\156\x74\x5f\x61\160\x70\162\x6f\x76\145\x64\40\75\40\47\61\x27"); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } return $gaeqamemwmwsyukm; } }
