<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670da3806785e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post_Type; class PostType extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::meieskyuuegwwcsy => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::ccyeycyyykwuymsy => [], Constants::ackcaikowcokggsc => [], Constants::qcaeuoiiqagycyww => []]); $sogksuscggsicmac = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]; $ggauoeuaesiymgee = Constants::uuqqcaaoioaaimoa; if (!$ooiewiwkegguusum) { $gqgemcmoicmgaqie = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii[Constants::meieskyuuegwwcsy], ["\137\x62\x75\151\x6c\164\x69\x6e" => false, Constants::wuccaoymmygisoku => true, Constants::oiyqeoicceecwscs => true]); } else { $gqgemcmoicmgaqie = []; } $aqykuigiuwmmcieu = $sogksuscggsicmac; if (!in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; } $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $oammesyieqmwuwyi = $cwaqscoiqkokyase->ckscqqquyskscaaw($ggauoeuaesiymgee, $wgcaqkewqyygkgaa->ciugwooasaqcywas($gqgemcmoicmgaqie, $aqykuigiuwmmcieu)); if ($ooiewiwkegguusum) { $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi); } else { if ($yemgmmgogcwccuky) { $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky)); } } $ksaameoqigiaoigg = []; $ckgaeiyesoqoemic = $ywmkwiwkosakssii[Constants::qcaeuoiiqagycyww]; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu, Constants::gkmmeoeiqiewewoe, Constants::ouywiegeiyuaaawo], true)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($igqsaukqcqscimok); if ($ckgaeiyesoqoemic && !$wgcaqkewqyygkgaa->akwkkemsqyaykueg($ymqmyyeuycgmigyo, $ckgaeiyesoqoemic)) { continue; } if ($igqsaukqcqscimok = $this->imgymusqgccqsqqq($igqsaukqcqscimok)) { switch ($sogksuscggsicmac) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, $ymqmyyeuycgmigyo); break; case Constants::ouywiegeiyuaaawo: case Constants::gkmmeoeiqiewewoe: $igqsaukqcqscimok = $gkyciwoiiisgywcs->qamwegcyimgcqksw($igqsaukqcqscimok, "\162\145\x77\162\x69\164\145\56\163\154\165\x67", $ymqmyyeuycgmigyo); break; } $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok; } } } else { $ksaameoqigiaoigg = $oammesyieqmwuwyi; } return $ksaameoqigiaoigg; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function imgymusqgccqsqqq($useksmwkuswkwcqg = null) : ?WP_Post_Type { if (!$useksmwkuswkwcqg instanceof WP_Post_Type) { if (!$useksmwkuswkwcqg) { $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); } $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); } return $useksmwkuswkwcqg; } public function aakmagwggmkoiiyu($useksmwkuswkwcqg) : ?string { $ymqmyyeuycgmigyo = ''; if ($useksmwkuswkwcqg instanceof WP_Post_Type) { $ymqmyyeuycgmigyo = $useksmwkuswkwcqg->name; } elseif (is_string($useksmwkuswkwcqg)) { $ymqmyyeuycgmigyo = $useksmwkuswkwcqg; } return $ymqmyyeuycgmigyo; } public function myagyqumwekameww($useksmwkuswkwcqg) : string { return trailingslashit($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagyqumwekameww($this->aakmagwggmkoiiyu($useksmwkuswkwcqg))); } public function iowaquococsaccei($useksmwkuswkwcqg) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy("\145\x64\x69\x74\56\x70\x68\x70")); } public function migkyseymeomymmy($sqeykgyoooqysmca = '') : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs($sqeykgyoooqysmca); } public function auiemgkycsemicim($sqeykgyoooqysmca = null) : bool { $auiemgkycsemicim = false; if ($sqeykgyoooqysmca = $this->imgymusqgccqsqqq($sqeykgyoooqysmca)) { $auiemgkycsemicim = $sqeykgyoooqysmca->has_archive !== false; } return $auiemgkycsemicim; } public function cekoogweeooasayu($sqeykgyoooqysmca = null) : bool { $ogicwiwywaocosag = false; if ($gymyaysoqyimkwsa = $this->imgymusqgccqsqqq($sqeykgyoooqysmca)) { $ogicwiwywaocosag = $gymyaysoqyimkwsa->public; } return $ogicwiwywaocosag; } public function uikgwcuascgeissw($useksmwkuswkwcqg = null, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($useksmwkuswkwcqg), "\154\x61\142\145\154\163\x2e{$uusmaiomayssaecw}"); } public function gaywomkwewckiwuk(string $useksmwkuswkwcqg) : int { try { global $wpdb; $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg("\x53\x45\114\x45\103\x54\40\103\117\125\x4e\x54\x28\x63\x6f\x6d\x6d\145\x6e\164\137\111\x44\51\xa\11\11\x9\11\x9\106\x52\117\115\x20{$wpdb->comments}\40\x57\110\105\122\x45\40\143\157\x6d\155\x65\156\164\137\x70\157\x73\164\x5f\111\104\x20\151\156\x20\50\12\11\x9\x9\x9\x9\x53\x45\x4c\x45\103\x54\x20\111\104\40\x46\x52\x4f\x4d\x20{$wpdb->posts}\x20\127\110\x45\x52\x45\40\160\157\x73\x74\137\164\x79\160\x65\x20\x3d\x20\47{$useksmwkuswkwcqg}\47\12\11\x9\11\x9\x9\101\116\104\40\x70\x6f\163\164\137\x73\164\141\164\165\163\x20\x3d\40\47\x70\165\x62\x6c\x69\163\150\x27\51\40\101\x4e\x44\40\143\x6f\x6d\x6d\x65\156\x74\x5f\141\x70\x70\162\x6f\x76\x65\144\40\75\40\x27\61\x27"); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } return $gaeqamemwmwsyukm; } }
