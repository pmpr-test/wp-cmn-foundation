<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec0c61c8485             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Exception; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Post_Type; class PostType extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { $cwaqscoiqkokyase = $this->caokeucsksukesyo()->gyecsegqciqykomu(); $ywmkwiwkosakssii = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::meieskyuuegwwcsy => [], Constants::aisguagukaewucii => Constants::emgcgiseaoouacge, Constants::ccyeycyyykwuymsy => [], Constants::ackcaikowcokggsc => [], Constants::qcaeuoiiqagycyww => []]); $sogksuscggsicmac = $ywmkwiwkosakssii[Constants::aisguagukaewucii]; $ooiewiwkegguusum = $ywmkwiwkosakssii[Constants::ackcaikowcokggsc]; $yemgmmgogcwccuky = $ywmkwiwkosakssii[Constants::ccyeycyyykwuymsy]; $ggauoeuaesiymgee = Constants::uuqqcaaoioaaimoa; if (!$ooiewiwkegguusum) { goto quokmqgeweiggmag; } $gqgemcmoicmgaqie = []; goto wwoueyigeiukcwes; quokmqgeweiggmag: $gqgemcmoicmgaqie = $cwaqscoiqkokyase->ckscqqquyskscaaw($ywmkwiwkosakssii[Constants::meieskyuuegwwcsy], ["\137\x62\x75\x69\154\x74\x69\x6e" => false, Constants::wuccaoymmygisoku => true, Constants::oiyqeoicceecwscs => true]); wwoueyigeiukcwes: $aqykuigiuwmmcieu = $sogksuscggsicmac; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::emgcgiseaoouacge], true)) { goto wwuimucgqsyicsoi; } $aqykuigiuwmmcieu = Constants::ckmqoekmugkggeym; wwuimucgqsyicsoi: $wgcaqkewqyygkgaa = $this->uwkmaywceaaaigwo()->gscioiumssogceuc(); $oammesyieqmwuwyi = $cwaqscoiqkokyase->ckscqqquyskscaaw($ggauoeuaesiymgee, $wgcaqkewqyygkgaa->ciugwooasaqcywas($gqgemcmoicmgaqie, $aqykuigiuwmmcieu)); if ($ooiewiwkegguusum) { goto qeikaiueqcoiowse; } if (!$yemgmmgogcwccuky) { goto mqmeqiyoawukmesi; } $oammesyieqmwuwyi = array_diff_key($oammesyieqmwuwyi, array_flip($yemgmmgogcwccuky)); mqmeqiyoawukmesi: goto iukuugggmakeqqwe; qeikaiueqcoiowse: $oammesyieqmwuwyi = array_intersect_key($ooiewiwkegguusum, $oammesyieqmwuwyi); iukuugggmakeqqwe: $ksaameoqigiaoigg = []; $ckgaeiyesoqoemic = $ywmkwiwkosakssii[Constants::qcaeuoiiqagycyww]; if (in_array($sogksuscggsicmac, [Constants::ckmqoekmugkggeym, Constants::eoaiagsgqsmskugs, Constants::uissasisiuymwsmu, Constants::gkmmeoeiqiewewoe, Constants::ouywiegeiyuaaawo], true)) { goto cuaummwqgqwqeeak; } $ksaameoqigiaoigg = $oammesyieqmwuwyi; goto migcueeaqkeowqmw; cuaummwqgqwqeeak: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { $ymqmyyeuycgmigyo = $this->aakmagwggmkoiiyu($igqsaukqcqscimok); if (!($ckgaeiyesoqoemic && !$wgcaqkewqyygkgaa->akwkkemsqyaykueg($ymqmyyeuycgmigyo, $ckgaeiyesoqoemic))) { goto qgogmmwuycacecke; } goto guiqgcoeisukskww; qgogmmwuycacecke: if (!($igqsaukqcqscimok = $this->imgymusqgccqsqqq($igqsaukqcqscimok))) { goto aqyucckkqokygkmc; } switch ($sogksuscggsicmac) { case Constants::uissasisiuymwsmu: case Constants::eoaiagsgqsmskugs: $igqsaukqcqscimok = $gkyciwoiiisgywcs->get($igqsaukqcqscimok, Constants::uissasisiuymwsmu, $ymqmyyeuycgmigyo); goto meygqsoqsiieysca; case Constants::ouywiegeiyuaaawo: case Constants::gkmmeoeiqiewewoe: $igqsaukqcqscimok = $gkyciwoiiisgywcs->qamwegcyimgcqksw($igqsaukqcqscimok, "\162\x65\167\162\151\164\x65\56\163\154\x75\147", $ymqmyyeuycgmigyo); goto meygqsoqsiieysca; } iuwuwckwayyuyowa: meygqsoqsiieysca: $ksaameoqigiaoigg[$ymqmyyeuycgmigyo] = $igqsaukqcqscimok; aqyucckkqokygkmc: guiqgcoeisukskww: } oiycaieiumsmwscm: migcueeaqkeowqmw: return $ksaameoqigiaoigg; } public function mwyawsooaimmcwiu(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::eoaiagsgqsmskugs; return $this->ciugwooasaqcywas($ywmkwiwkosakssii); } public function imgymusqgccqsqqq($useksmwkuswkwcqg = null) : ?WP_Post_Type { if ($useksmwkuswkwcqg instanceof WP_Post_Type) { goto sgmqgegycguwamuc; } if ($useksmwkuswkwcqg) { goto amaiiayeosswqwmm; } $useksmwkuswkwcqg = $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->gueasuouwqysmomu(); amaiiayeosswqwmm: $useksmwkuswkwcqg = $this->uwkmaywceaaaigwo()->gscioiumssogceuc()->imgymusqgccqsqqq($useksmwkuswkwcqg); sgmqgegycguwamuc: return $useksmwkuswkwcqg; } public function aakmagwggmkoiiyu($useksmwkuswkwcqg) : ?string { $ymqmyyeuycgmigyo = ''; if ($useksmwkuswkwcqg instanceof WP_Post_Type) { goto kusweouquycaokkg; } if (is_string($useksmwkuswkwcqg)) { goto kaeguyeyckamaqum; } goto quuukywosagemmai; kusweouquycaokkg: $ymqmyyeuycgmigyo = $useksmwkuswkwcqg->name; goto quuukywosagemmai; kaeguyeyckamaqum: $ymqmyyeuycgmigyo = $useksmwkuswkwcqg; quuukywosagemmai: return $ymqmyyeuycgmigyo; } public function myagyqumwekameww($useksmwkuswkwcqg) : string { return trailingslashit($this->uwkmaywceaaaigwo()->gscioiumssogceuc()->myagyqumwekameww($this->aakmagwggmkoiiyu($useksmwkuswkwcqg))); } public function iowaquococsaccei($useksmwkuswkwcqg) : string { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::uouymeyqasaeckso, $useksmwkuswkwcqg, $this->uwkmaywceaaaigwo()->giiecckwoyiawoyy()->acewksgasymgwmcy("\x65\144\151\164\x2e\x70\150\x70")); } public function migkyseymeomymmy($sqeykgyoooqysmca = '') : bool { return $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->moegwqkekcawsggs($sqeykgyoooqysmca); } public function auiemgkycsemicim($sqeykgyoooqysmca = null) : bool { $auiemgkycsemicim = false; if (!($sqeykgyoooqysmca = $this->imgymusqgccqsqqq($sqeykgyoooqysmca))) { goto ukyucsogqyemmeck; } $auiemgkycsemicim = $sqeykgyoooqysmca->has_archive !== false; ukyucsogqyemmeck: return $auiemgkycsemicim; } public function cekoogweeooasayu($sqeykgyoooqysmca = null) : bool { $ogicwiwywaocosag = false; if (!($gymyaysoqyimkwsa = $this->imgymusqgccqsqqq($sqeykgyoooqysmca))) { goto cokamkuguggscwgk; } $ogicwiwywaocosag = $gymyaysoqyimkwsa->public; cokamkuguggscwgk: return $ogicwiwywaocosag; } public function uikgwcuascgeissw($useksmwkuswkwcqg = null, string $uusmaiomayssaecw = Constants::egyqyoogakommguc) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->qamwegcyimgcqksw($this->imgymusqgccqsqqq($useksmwkuswkwcqg), "\154\x61\x62\145\x6c\163\56{$uusmaiomayssaecw}"); } public function gaywomkwewckiwuk(string $useksmwkuswkwcqg) : int { try { global $wpdb; $gaeqamemwmwsyukm = (int) $this->caokeucsksukesyo()->skckwsgymkimyuwo()->qaumqeeagueuqkcg("\123\x45\x4c\x45\x43\x54\x20\103\x4f\125\x4e\124\x28\x63\157\x6d\x6d\145\156\164\137\x49\104\x29\12\x9\11\11\11\x9\x46\122\117\x4d\x20{$wpdb->comments}\40\127\x48\105\x52\105\x20\143\x6f\x6d\x6d\145\156\x74\137\x70\x6f\163\x74\x5f\x49\x44\40\x69\156\x20\x28\xa\11\x9\x9\11\x9\123\x45\x4c\105\x43\x54\40\111\104\x20\x46\x52\117\115\x20{$wpdb->posts}\x20\127\x48\105\x52\105\40\x70\157\x73\164\x5f\164\171\x70\145\x20\75\40\x27{$useksmwkuswkwcqg}\47\xa\x9\x9\11\11\x9\101\x4e\x44\40\x70\157\x73\x74\x5f\163\164\141\x74\165\163\x20\75\40\x27\x70\x75\142\154\x69\x73\x68\x27\51\40\101\116\104\40\x63\157\x6d\155\145\x6e\164\137\141\x70\x70\162\x6f\x76\145\x64\x20\75\x20\47\x31\x27"); } catch (Exception $wgaoewqkwgomoaai) { $gaeqamemwmwsyukm = 0; } return $gaeqamemwmwsyukm; } }
