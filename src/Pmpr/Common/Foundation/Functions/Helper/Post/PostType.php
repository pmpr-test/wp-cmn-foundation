<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f1e295acabc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post_Type; class PostType extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::meieskyuuegwwcsy => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::ccyeycyyykwuymsy => [], Constants::ackcaikowcokggsc => [], Constants::qcaeuoiiqagycyww => []]); $sogksuscggsicmac = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]; $ggauoeuaesiymgee = Constants::uuqqcaaoioaaimoa; if (!$ooiewiwkegguusum) { goto oouwaqoyakqgqwam; } $gqgemcmoicmgaqie = []; goto ocqwquesqkeuaqss; oouwaqoyakqgqwam: $gqgemcmoicmgaqie = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii[Constants::meieskyuuegwwcsy], ["\137\x62\165\x69\154\x74\151\156" => false, Constants::wuccaoymmygisoku => true, Constants::oiyqeoicceecwscs => true]); ocqwquesqkeuaqss: $aqykuigiuwmmcieu = $sogksuscggsicmac; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto ieuawqgmecwsukqg; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; ieuawqgmecwsukqg: $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $oammesyieqmwuwyi = $cwaqscoiqkokyase->ckscqqquyskscaaw($ggauoeuaesiymgee, $wgcaqkewqyygkgaa->ciugwooasaqcywas($gqgemcmoicmgaqie, $aqykuigiuwmmcieu)); if ($ooiewiwkegguusum) { goto wuqgkeayuqmoiuyo; } if (!$yemgmmgogcwccuky) { goto kgoiagiewgoeuyym; } $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky)); kgoiagiewgoeuyym: goto swiqkgiecwkaegge; wuqgkeayuqmoiuyo: $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi); swiqkgiecwkaegge: $ksaameoqigiaoigg = []; $ckgaeiyesoqoemic = $ywmkwiwkosakssii[Constants::qcaeuoiiqagycyww]; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu, Constants::gkmmeoeiqiewewoe, Constants::ouywiegeiyuaaawo], true)) { goto ukoemwwgmqeggiai; } $ksaameoqigiaoigg = $oammesyieqmwuwyi; goto moscmqueqcmsuqaq; ukoemwwgmqeggiai: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($igqsaukqcqscimok); if (!($ckgaeiyesoqoemic && !$wgcaqkewqyygkgaa->akwkkemsqyaykueg($ymqmyyeuycgmigyo, $ckgaeiyesoqoemic))) { goto wkoguegaagqeqkeq; } goto sewckeyeiguewqki; wkoguegaagqeqkeq: if (!($igqsaukqcqscimok = $this->imgymusqgccqsqqq($igqsaukqcqscimok))) { goto gemkckmaeeoqyusu; } switch ($sogksuscggsicmac) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, $ymqmyyeuycgmigyo); goto iqeceuygmigawkoy; case Constants::ouywiegeiyuaaawo: case Constants::gkmmeoeiqiewewoe: $igqsaukqcqscimok = $gkyciwoiiisgywcs->qamwegcyimgcqksw($igqsaukqcqscimok, "\162\145\x77\162\151\x74\x65\x2e\163\x6c\165\147", $ymqmyyeuycgmigyo); goto iqeceuygmigawkoy; } ieuuecggquoakswk: iqeceuygmigawkoy: $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok; gemkckmaeeoqyusu: sewckeyeiguewqki: } qkesssukmqqcqikg: moscmqueqcmsuqaq: return $ksaameoqigiaoigg; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function imgymusqgccqsqqq($useksmwkuswkwcqg = null) : ?WP_Post_Type { if ($useksmwkuswkwcqg instanceof WP_Post_Type) { goto mymgcmggqauqoiee; } if ($useksmwkuswkwcqg) { goto yiiaeaqyyakeieqa; } $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); yiiaeaqyyakeieqa: $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); mymgcmggqauqoiee: return $useksmwkuswkwcqg; } public function aakmagwggmkoiiyu($useksmwkuswkwcqg) : ?string { $ymqmyyeuycgmigyo = ''; if ($useksmwkuswkwcqg instanceof WP_Post_Type) { goto ugkwkcaycececsay; } if (is_string($useksmwkuswkwcqg)) { goto wisgcoswiemiwicy; } goto hkyamaausyicywiq; ugkwkcaycececsay: $ymqmyyeuycgmigyo = $useksmwkuswkwcqg->name; goto hkyamaausyicywiq; wisgcoswiemiwicy: $ymqmyyeuycgmigyo = $useksmwkuswkwcqg; hkyamaausyicywiq: return $ymqmyyeuycgmigyo; } public function myagyqumwekameww($useksmwkuswkwcqg) : string { return trailingslashit($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagyqumwekameww($this->aakmagwggmkoiiyu($useksmwkuswkwcqg))); } public function iowaquococsaccei($useksmwkuswkwcqg) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy("\145\x64\x69\164\56\160\x68\160")); } public function migkyseymeomymmy($sqeykgyoooqysmca = '') : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs($sqeykgyoooqysmca); } public function auiemgkycsemicim($sqeykgyoooqysmca = null) : bool { $auiemgkycsemicim = false; if (!($sqeykgyoooqysmca = $this->imgymusqgccqsqqq($sqeykgyoooqysmca))) { goto qgkgmseosomqwicm; } $auiemgkycsemicim = $sqeykgyoooqysmca->has_archive !== false; qgkgmseosomqwicm: return $auiemgkycsemicim; } public function cekoogweeooasayu($sqeykgyoooqysmca = null) : bool { $ogicwiwywaocosag = false; if (!($gymyaysoqyimkwsa = $this->imgymusqgccqsqqq($sqeykgyoooqysmca))) { goto aewweoqsskseouck; } $ogicwiwywaocosag = $gymyaysoqyimkwsa->public; aewweoqsskseouck: return $ogicwiwywaocosag; } public function uikgwcuascgeissw($useksmwkuswkwcqg = null, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($useksmwkuswkwcqg), "\x6c\x61\x62\x65\x6c\163\x2e{$uusmaiomayssaecw}"); } public function gaywomkwewckiwuk(string $useksmwkuswkwcqg) : int { try { global $wpdb; $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg("\123\x45\114\x45\x43\124\40\x43\117\125\x4e\124\50\x63\157\x6d\155\x65\x6e\x74\x5f\x49\x44\51\12\11\11\11\11\x9\x46\122\x4f\x4d\x20{$wpdb->comments}\x20\127\110\x45\x52\105\40\x63\x6f\x6d\x6d\x65\x6e\x74\x5f\x70\x6f\163\164\x5f\x49\x44\40\x69\156\x20\50\12\x9\x9\x9\x9\11\123\x45\x4c\x45\103\124\40\111\104\x20\x46\x52\x4f\x4d\40{$wpdb->posts}\40\127\x48\105\x52\x45\40\160\x6f\x73\x74\137\x74\171\x70\145\x20\x3d\40\47{$useksmwkuswkwcqg}\47\12\11\11\x9\x9\11\101\116\104\40\160\157\163\x74\x5f\x73\164\141\x74\165\x73\x20\x3d\x20\x27\160\165\142\154\151\163\150\47\51\40\x41\116\104\40\143\x6f\155\155\145\156\164\137\141\160\160\x72\157\x76\x65\x64\40\x3d\x20\x27\x31\47"); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } return $gaeqamemwmwsyukm; } }
