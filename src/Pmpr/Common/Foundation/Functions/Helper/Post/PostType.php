<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723ec7e2db2b             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post_Type; class PostType extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::meieskyuuegwwcsy => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::ccyeycyyykwuymsy => [], Constants::ackcaikowcokggsc => [], Constants::qcaeuoiiqagycyww => []]); $sogksuscggsicmac = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]; $ggauoeuaesiymgee = Constants::uuqqcaaoioaaimoa; if (!$ooiewiwkegguusum) { $gqgemcmoicmgaqie = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii[Constants::meieskyuuegwwcsy], ["\137\142\x75\x69\154\x74\x69\x6e" => false, Constants::wuccaoymmygisoku => true, Constants::oiyqeoicceecwscs => true]); } else { $gqgemcmoicmgaqie = []; } $aqykuigiuwmmcieu = $sogksuscggsicmac; if (!in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; } $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $oammesyieqmwuwyi = $cwaqscoiqkokyase->ckscqqquyskscaaw($ggauoeuaesiymgee, $wgcaqkewqyygkgaa->ciugwooasaqcywas($gqgemcmoicmgaqie, $aqykuigiuwmmcieu)); if ($ooiewiwkegguusum) { $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi); } else { if ($yemgmmgogcwccuky) { $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky)); } } $ksaameoqigiaoigg = []; $ckgaeiyesoqoemic = $ywmkwiwkosakssii[Constants::qcaeuoiiqagycyww]; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu, Constants::gkmmeoeiqiewewoe, Constants::ouywiegeiyuaaawo], true)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($igqsaukqcqscimok); if ($ckgaeiyesoqoemic && !$wgcaqkewqyygkgaa->akwkkemsqyaykueg($ymqmyyeuycgmigyo, $ckgaeiyesoqoemic)) { continue; } if ($igqsaukqcqscimok = $this->imgymusqgccqsqqq($igqsaukqcqscimok)) { switch ($sogksuscggsicmac) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, $ymqmyyeuycgmigyo); break; case Constants::ouywiegeiyuaaawo: case Constants::gkmmeoeiqiewewoe: $igqsaukqcqscimok = $gkyciwoiiisgywcs->qamwegcyimgcqksw($igqsaukqcqscimok, "\x72\145\167\162\151\164\x65\56\163\x6c\165\x67", $ymqmyyeuycgmigyo); break; } $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok; } } } else { $ksaameoqigiaoigg = $oammesyieqmwuwyi; } return $ksaameoqigiaoigg; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function imgymusqgccqsqqq($useksmwkuswkwcqg = null) : ?WP_Post_Type { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { if (!$useksmwkuswkwcqg) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); } $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); } return $useksmwkuswkwcqg; } public function aakmagwggmkoiiyu($useksmwkuswkwcqg) : ?string { $ymqmyyeuycgmigyo = ''; if ($useksmwkuswkwcqg instanceof WP_Post_Type) { $ymqmyyeuycgmigyo = $useksmwkuswkwcqg->name; } elseif (is_string($useksmwkuswkwcqg)) { $ymqmyyeuycgmigyo = $useksmwkuswkwcqg; } return $ymqmyyeuycgmigyo; } public function myagyqumwekameww($useksmwkuswkwcqg) : string { return trailingslashit($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagyqumwekameww($this->aakmagwggmkoiiyu($useksmwkuswkwcqg))); } public function iowaquococsaccei($useksmwkuswkwcqg) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy("\x65\x64\x69\x74\56\x70\150\160")); } public function migkyseymeomymmy($sqeykgyoooqysmca = '') : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs($sqeykgyoooqysmca); } public function auiemgkycsemicim($sqeykgyoooqysmca = null) : bool { $auiemgkycsemicim = false; if ($sqeykgyoooqysmca = $this->imgymusqgccqsqqq($sqeykgyoooqysmca)) { $auiemgkycsemicim = $sqeykgyoooqysmca->has_archive !== false; } return $auiemgkycsemicim; } public function cekoogweeooasayu($sqeykgyoooqysmca = null) : bool { $ogicwiwywaocosag = false; if ($gymyaysoqyimkwsa = $this->imgymusqgccqsqqq($sqeykgyoooqysmca)) { $ogicwiwywaocosag = $gymyaysoqyimkwsa->public; } return $ogicwiwywaocosag; } public function uikgwcuascgeissw($useksmwkuswkwcqg = null, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($useksmwkuswkwcqg), "\154\x61\142\x65\154\163\x2e{$uusmaiomayssaecw}"); } public function gaywomkwewckiwuk(string $useksmwkuswkwcqg) : int { try { global $wpdb; $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg("\123\x45\114\105\x43\x54\40\x43\x4f\x55\116\124\50\x63\x6f\155\x6d\x65\x6e\x74\137\111\104\x29\12\11\11\11\11\x9\x46\x52\117\115\x20{$wpdb->comments}\x20\x57\110\105\122\105\40\x63\157\x6d\155\x65\x6e\164\137\x70\x6f\163\x74\137\111\x44\40\x69\156\x20\50\xa\x9\x9\11\x9\x9\x53\105\x4c\105\x43\124\40\x49\x44\x20\106\122\117\x4d\40{$wpdb->posts}\40\x57\x48\105\122\x45\x20\x70\x6f\x73\x74\x5f\164\x79\160\145\40\x3d\40\47{$useksmwkuswkwcqg}\47\12\x9\11\x9\11\x9\101\x4e\x44\40\x70\157\163\x74\137\x73\x74\141\x74\x75\163\x20\75\x20\47\x70\165\142\154\x69\x73\150\47\51\40\101\116\x44\x20\143\157\x6d\x6d\x65\x6e\164\x5f\x61\160\x70\162\157\166\145\144\x20\x3d\40\x27\x31\47"); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } return $gaeqamemwmwsyukm; } }
