<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1d7a86a94f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post_Type; class PostType extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::meieskyuuegwwcsy => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::ccyeycyyykwuymsy => [], Constants::ackcaikowcokggsc => [], Constants::qcaeuoiiqagycyww => []]); $sogksuscggsicmac = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]; $ggauoeuaesiymgee = Constants::uuqqcaaoioaaimoa; if (!$ooiewiwkegguusum) { goto yggkaqimymwgeusw; } $gqgemcmoicmgaqie = []; goto kygqqoowekeicswe; yggkaqimymwgeusw: $gqgemcmoicmgaqie = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii[Constants::meieskyuuegwwcsy], ["\137\142\x75\x69\x6c\164\151\156" => false, Constants::wuccaoymmygisoku => true, Constants::oiyqeoicceecwscs => true]); kygqqoowekeicswe: $aqykuigiuwmmcieu = $sogksuscggsicmac; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto eeicuakiuucqekwq; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; eeicuakiuucqekwq: $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $oammesyieqmwuwyi = $cwaqscoiqkokyase->ckscqqquyskscaaw($ggauoeuaesiymgee, $wgcaqkewqyygkgaa->ciugwooasaqcywas($gqgemcmoicmgaqie, $aqykuigiuwmmcieu)); if ($ooiewiwkegguusum) { goto kcswcoeaqiwuukiy; } if (!$yemgmmgogcwccuky) { goto mcgaeoqcascioikk; } $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky)); mcgaeoqcascioikk: goto miqqmoomyyiwcayu; kcswcoeaqiwuukiy: $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi); miqqmoomyyiwcayu: $ksaameoqigiaoigg = []; $ckgaeiyesoqoemic = $ywmkwiwkosakssii[Constants::qcaeuoiiqagycyww]; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu, Constants::gkmmeoeiqiewewoe, Constants::ouywiegeiyuaaawo], true)) { goto ocqwquesqkeuaqss; } $ksaameoqigiaoigg = $oammesyieqmwuwyi; goto ieuawqgmecwsukqg; ocqwquesqkeuaqss: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($igqsaukqcqscimok); if (!($ckgaeiyesoqoemic && !$wgcaqkewqyygkgaa->akwkkemsqyaykueg($ymqmyyeuycgmigyo, $ckgaeiyesoqoemic))) { goto qkmuqqwoyoykqwwy; } goto gmgacakgauwigcwa; qkmuqqwoyoykqwwy: if (!($igqsaukqcqscimok = $this->imgymusqgccqsqqq($igqsaukqcqscimok))) { goto oouwaqoyakqgqwam; } switch ($sogksuscggsicmac) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, $ymqmyyeuycgmigyo); goto uqeegayckqykygcg; case Constants::ouywiegeiyuaaawo: case Constants::gkmmeoeiqiewewoe: $igqsaukqcqscimok = $gkyciwoiiisgywcs->qamwegcyimgcqksw($igqsaukqcqscimok, "\x72\x65\x77\x72\151\x74\145\x2e\163\x6c\165\147", $ymqmyyeuycgmigyo); goto uqeegayckqykygcg; } kackciqogeecyokm: uqeegayckqykygcg: $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok; oouwaqoyakqgqwam: gmgacakgauwigcwa: } kseaceiacycsqkoo: ieuawqgmecwsukqg: return $ksaameoqigiaoigg; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function imgymusqgccqsqqq($useksmwkuswkwcqg = null) : ?WP_Post_Type { if ($useksmwkuswkwcqg instanceof WP_Post_Type) { goto wuqgkeayuqmoiuyo; } if ($useksmwkuswkwcqg) { goto kgoiagiewgoeuyym; } $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); kgoiagiewgoeuyym: $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); wuqgkeayuqmoiuyo: return $useksmwkuswkwcqg; } public function aakmagwggmkoiiyu($useksmwkuswkwcqg) : ?string { $ymqmyyeuycgmigyo = ''; if ($useksmwkuswkwcqg instanceof WP_Post_Type) { goto qkesssukmqqcqikg; } if (is_string($useksmwkuswkwcqg)) { goto sewckeyeiguewqki; } goto swiqkgiecwkaegge; qkesssukmqqcqikg: $ymqmyyeuycgmigyo = $useksmwkuswkwcqg->name; goto swiqkgiecwkaegge; sewckeyeiguewqki: $ymqmyyeuycgmigyo = $useksmwkuswkwcqg; swiqkgiecwkaegge: return $ymqmyyeuycgmigyo; } public function myagyqumwekameww($useksmwkuswkwcqg) : string { return trailingslashit($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagyqumwekameww($this->aakmagwggmkoiiyu($useksmwkuswkwcqg))); } public function iowaquococsaccei($useksmwkuswkwcqg) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy("\x65\144\151\x74\56\160\150\x70")); } public function migkyseymeomymmy($sqeykgyoooqysmca = '') : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs($sqeykgyoooqysmca); } public function auiemgkycsemicim($sqeykgyoooqysmca = null) : bool { $auiemgkycsemicim = false; if (!($sqeykgyoooqysmca = $this->imgymusqgccqsqqq($sqeykgyoooqysmca))) { goto wkoguegaagqeqkeq; } $auiemgkycsemicim = $sqeykgyoooqysmca->has_archive !== false; wkoguegaagqeqkeq: return $auiemgkycsemicim; } public function cekoogweeooasayu($sqeykgyoooqysmca = null) : bool { $ogicwiwywaocosag = false; if (!($gymyaysoqyimkwsa = $this->imgymusqgccqsqqq($sqeykgyoooqysmca))) { goto iqeceuygmigawkoy; } $ogicwiwywaocosag = $gymyaysoqyimkwsa->public; iqeceuygmigawkoy: return $ogicwiwywaocosag; } public function uikgwcuascgeissw($useksmwkuswkwcqg = null, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($useksmwkuswkwcqg), "\154\141\x62\x65\x6c\163\56{$uusmaiomayssaecw}"); } public function gaywomkwewckiwuk(string $useksmwkuswkwcqg) : int { try { global $wpdb; $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg("\x53\105\x4c\105\103\124\40\x43\117\125\x4e\x54\50\143\x6f\155\x6d\145\156\164\x5f\x49\104\x29\xa\11\x9\11\x9\x9\x46\122\x4f\115\x20{$wpdb->comments}\x20\127\x48\x45\122\x45\x20\143\157\155\x6d\145\x6e\x74\137\160\157\x73\164\x5f\x49\x44\40\x69\156\x20\50\12\11\x9\11\11\11\x53\105\x4c\x45\x43\124\40\111\104\x20\106\x52\117\115\40{$wpdb->posts}\x20\x57\x48\x45\x52\x45\x20\x70\157\x73\x74\x5f\164\x79\x70\145\40\x3d\x20\x27{$useksmwkuswkwcqg}\47\xa\x9\x9\x9\11\x9\101\x4e\x44\40\x70\x6f\163\x74\x5f\163\164\x61\x74\x75\x73\x20\x3d\x20\47\160\x75\x62\x6c\151\163\150\x27\x29\40\x41\x4e\x44\x20\143\157\155\x6d\145\156\164\137\x61\x70\x70\162\157\x76\145\144\x20\75\x20\x27\61\47"); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } return $gaeqamemwmwsyukm; } }
