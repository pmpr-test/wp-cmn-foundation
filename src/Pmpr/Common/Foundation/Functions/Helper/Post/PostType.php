<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053bb6ecfdb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post_Type; class PostType extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::meieskyuuegwwcsy => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::ccyeycyyykwuymsy => [], Constants::ackcaikowcokggsc => [], Constants::qcaeuoiiqagycyww => []]); $sogksuscggsicmac = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]; $ggauoeuaesiymgee = Constants::uuqqcaaoioaaimoa; if (!$ooiewiwkegguusum) { $gqgemcmoicmgaqie = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii[Constants::meieskyuuegwwcsy], ["\137\x62\x75\x69\154\164\151\156" => false, Constants::wuccaoymmygisoku => true, Constants::oiyqeoicceecwscs => true]); } else { $gqgemcmoicmgaqie = []; } $aqykuigiuwmmcieu = $sogksuscggsicmac; if (!in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; } $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $oammesyieqmwuwyi = $cwaqscoiqkokyase->ckscqqquyskscaaw($ggauoeuaesiymgee, $wgcaqkewqyygkgaa->ciugwooasaqcywas($gqgemcmoicmgaqie, $aqykuigiuwmmcieu)); if ($ooiewiwkegguusum) { $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi); } else { if ($yemgmmgogcwccuky) { $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky)); } } $ksaameoqigiaoigg = []; $ckgaeiyesoqoemic = $ywmkwiwkosakssii[Constants::qcaeuoiiqagycyww]; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu, Constants::gkmmeoeiqiewewoe, Constants::ouywiegeiyuaaawo], true)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($igqsaukqcqscimok); if ($ckgaeiyesoqoemic && !$wgcaqkewqyygkgaa->akwkkemsqyaykueg($ymqmyyeuycgmigyo, $ckgaeiyesoqoemic)) { continue; } if ($igqsaukqcqscimok = $this->imgymusqgccqsqqq($igqsaukqcqscimok)) { switch ($sogksuscggsicmac) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, $ymqmyyeuycgmigyo); break; case Constants::ouywiegeiyuaaawo: case Constants::gkmmeoeiqiewewoe: $igqsaukqcqscimok = $gkyciwoiiisgywcs->qamwegcyimgcqksw($igqsaukqcqscimok, "\162\145\167\x72\151\x74\145\56\163\154\165\x67", $ymqmyyeuycgmigyo); break; } $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok; } } } else { $ksaameoqigiaoigg = $oammesyieqmwuwyi; } return $ksaameoqigiaoigg; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function imgymusqgccqsqqq($useksmwkuswkwcqg = null) : ?WP_Post_Type { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { if (!$useksmwkuswkwcqg) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); } $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); } return $useksmwkuswkwcqg; } public function aakmagwggmkoiiyu($useksmwkuswkwcqg) : ?string { $ymqmyyeuycgmigyo = ''; if ($useksmwkuswkwcqg instanceof WP_Post_Type) { $ymqmyyeuycgmigyo = $useksmwkuswkwcqg->name; } elseif (is_string($useksmwkuswkwcqg)) { $ymqmyyeuycgmigyo = $useksmwkuswkwcqg; } return $ymqmyyeuycgmigyo; } public function myagyqumwekameww($useksmwkuswkwcqg) : string { return trailingslashit($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagyqumwekameww($this->aakmagwggmkoiiyu($useksmwkuswkwcqg))); } public function iowaquococsaccei($useksmwkuswkwcqg) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy("\145\x64\x69\164\56\160\x68\160")); } public function migkyseymeomymmy($sqeykgyoooqysmca = '') : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs($sqeykgyoooqysmca); } public function auiemgkycsemicim($sqeykgyoooqysmca = null) : bool { $auiemgkycsemicim = false; if ($sqeykgyoooqysmca = $this->imgymusqgccqsqqq($sqeykgyoooqysmca)) { $auiemgkycsemicim = $sqeykgyoooqysmca->has_archive !== false; } return $auiemgkycsemicim; } public function cekoogweeooasayu($sqeykgyoooqysmca = null) : bool { $ogicwiwywaocosag = false; if ($gymyaysoqyimkwsa = $this->imgymusqgccqsqqq($sqeykgyoooqysmca)) { $ogicwiwywaocosag = $gymyaysoqyimkwsa->public; } return $ogicwiwywaocosag; } public function uikgwcuascgeissw($useksmwkuswkwcqg = null, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($useksmwkuswkwcqg), "\x6c\141\x62\145\x6c\x73\x2e{$uusmaiomayssaecw}"); } public function gaywomkwewckiwuk(string $useksmwkuswkwcqg) : int { try { global $wpdb; $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg("\x53\x45\114\x45\103\x54\40\x43\117\125\116\x54\50\143\x6f\x6d\155\x65\156\x74\137\111\x44\x29\xa\x9\11\11\x9\11\x46\x52\117\115\40{$wpdb->comments}\x20\127\110\105\x52\105\40\x63\x6f\155\x6d\x65\156\164\137\x70\x6f\x73\164\137\111\104\40\151\x6e\40\x28\12\x9\x9\11\x9\11\x53\105\114\x45\103\124\x20\x49\104\40\x46\x52\x4f\x4d\x20{$wpdb->posts}\40\127\110\105\122\x45\x20\x70\157\x73\164\137\x74\171\160\x65\40\x3d\40\47{$useksmwkuswkwcqg}\x27\xa\11\11\11\11\x9\101\116\x44\40\160\157\x73\x74\x5f\163\x74\x61\x74\x75\x73\40\75\x20\47\160\x75\x62\x6c\x69\163\150\47\x29\x20\x41\116\x44\x20\x63\157\x6d\x6d\x65\x6e\164\137\141\x70\160\x72\157\x76\145\x64\40\x3d\40\47\x31\47"); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } return $gaeqamemwmwsyukm; } }
