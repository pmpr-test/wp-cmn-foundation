<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6794e7648968d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post_Type; class PostType extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::meieskyuuegwwcsy => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::ccyeycyyykwuymsy => [], Constants::ackcaikowcokggsc => [], Constants::qcaeuoiiqagycyww => []]); $sogksuscggsicmac = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]; $ggauoeuaesiymgee = Constants::uuqqcaaoioaaimoa; if (!$ooiewiwkegguusum) { $gqgemcmoicmgaqie = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii[Constants::meieskyuuegwwcsy], ["\x5f\142\x75\x69\x6c\164\x69\x6e" => false, Constants::wuccaoymmygisoku => true, Constants::oiyqeoicceecwscs => true]); } else { $gqgemcmoicmgaqie = []; } $aqykuigiuwmmcieu = $sogksuscggsicmac; if (!in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; } $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $oammesyieqmwuwyi = $cwaqscoiqkokyase->ckscqqquyskscaaw($ggauoeuaesiymgee, $wgcaqkewqyygkgaa->ciugwooasaqcywas($gqgemcmoicmgaqie, $aqykuigiuwmmcieu)); if ($ooiewiwkegguusum) { $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi); } if ($yemgmmgogcwccuky) { $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky)); } $ksaameoqigiaoigg = []; $ckgaeiyesoqoemic = $ywmkwiwkosakssii[Constants::qcaeuoiiqagycyww]; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu, Constants::gkmmeoeiqiewewoe, Constants::ouywiegeiyuaaawo], true)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($igqsaukqcqscimok); if ($ckgaeiyesoqoemic && !$wgcaqkewqyygkgaa->akwkkemsqyaykueg($ymqmyyeuycgmigyo, $ckgaeiyesoqoemic)) { continue; } if ($igqsaukqcqscimok = $this->imgymusqgccqsqqq($igqsaukqcqscimok)) { switch ($sogksuscggsicmac) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, $ymqmyyeuycgmigyo); break; case Constants::ouywiegeiyuaaawo: case Constants::gkmmeoeiqiewewoe: $igqsaukqcqscimok = $gkyciwoiiisgywcs->qamwegcyimgcqksw($igqsaukqcqscimok, "\x72\x65\167\162\151\164\x65\x2e\x73\154\165\x67", $ymqmyyeuycgmigyo); break; } $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok; } } } else { $ksaameoqigiaoigg = $oammesyieqmwuwyi; } return $ksaameoqigiaoigg; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function imgymusqgccqsqqq($useksmwkuswkwcqg = null) : ?WP_Post_Type { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { if (!$useksmwkuswkwcqg) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); } $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); } return $useksmwkuswkwcqg; } public function aakmagwggmkoiiyu($useksmwkuswkwcqg) : ?string { $ymqmyyeuycgmigyo = ''; if ($useksmwkuswkwcqg instanceof WP_Post_Type) { $ymqmyyeuycgmigyo = $useksmwkuswkwcqg->name; } else { if (is_string($useksmwkuswkwcqg)) { $ymqmyyeuycgmigyo = $useksmwkuswkwcqg; } } return $ymqmyyeuycgmigyo; } public function myagyqumwekameww($useksmwkuswkwcqg) : string { return trailingslashit($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagyqumwekameww($this->aakmagwggmkoiiyu($useksmwkuswkwcqg))); } public function iowaquococsaccei($useksmwkuswkwcqg) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy("\145\x64\151\x74\56\160\150\x70")); } public function migkyseymeomymmy($sqeykgyoooqysmca = '') : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs($sqeykgyoooqysmca); } public function auiemgkycsemicim($sqeykgyoooqysmca = null) : bool { $auiemgkycsemicim = false; if ($sqeykgyoooqysmca = $this->imgymusqgccqsqqq($sqeykgyoooqysmca)) { $auiemgkycsemicim = $sqeykgyoooqysmca->has_archive !== false; } return $auiemgkycsemicim; } public function cekoogweeooasayu($sqeykgyoooqysmca = null) : bool { $ogicwiwywaocosag = false; if ($gymyaysoqyimkwsa = $this->imgymusqgccqsqqq($sqeykgyoooqysmca)) { $ogicwiwywaocosag = $gymyaysoqyimkwsa->public; } return $ogicwiwywaocosag; } public function uikgwcuascgeissw($useksmwkuswkwcqg = null, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($useksmwkuswkwcqg), "\x6c\141\x62\x65\154\163\x2e{$uusmaiomayssaecw}"); } public function gaywomkwewckiwuk(string $useksmwkuswkwcqg) : int { try { global $wpdb; $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg("\x53\105\x4c\105\x43\x54\x20\x43\x4f\125\x4e\124\x28\x63\157\155\x6d\x65\x6e\164\x5f\x49\x44\x29\xa\11\11\11\11\x9\x46\122\117\115\40{$wpdb->comments}\x20\127\110\105\122\105\x20\x63\x6f\x6d\x6d\145\156\164\x5f\160\157\x73\x74\137\111\x44\40\151\156\x20\50\12\11\11\x9\11\11\123\105\x4c\105\x43\124\40\111\104\x20\x46\122\117\115\40{$wpdb->posts}\40\127\110\x45\122\105\x20\160\x6f\163\x74\x5f\164\171\160\x65\40\x3d\40\47{$useksmwkuswkwcqg}\x27\12\x9\11\11\x9\11\101\x4e\x44\x20\x70\157\163\164\x5f\x73\x74\x61\x74\x75\163\x20\75\x20\x27\160\165\x62\154\x69\163\x68\x27\51\40\101\x4e\x44\x20\143\157\155\x6d\145\x6e\x74\137\x61\160\160\x72\157\x76\x65\144\x20\75\40\x27\61\47"); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } return $gaeqamemwmwsyukm; } }
