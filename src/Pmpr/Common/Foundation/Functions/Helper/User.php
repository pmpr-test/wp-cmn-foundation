<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67955288a0e50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; use WP_Role; use WP_User; class User extends Common { public function homgcsoocssgwgym($smgioooysaacyigy = [], $eouokigcckggaywy = null, $qmiqqoqeakyeuuuw = null) : array { if (!is_array($eouokigcckggaywy)) { $eouokigcckggaywy = [$eouokigcckggaywy, "{$eouokigcckggaywy}\x73"]; } [$acasoawmkoksguqw, $qgmsmgywssakmiow] = $eouokigcckggaywy; $ggauoeuaesiymgee = ["\x65\x64\151\164\137\151\164\x65\155" => "\145\x64\x69\164\x5f" . $acasoawmkoksguqw, "\x72\145\141\144\137\151\x74\x65\x6d" => "\x72\x65\141\x64\x5f" . $acasoawmkoksguqw, "\x64\x65\x6c\x65\164\145\137\x69\164\145\x6d" => "\x64\145\x6c\x65\164\145\x5f" . $acasoawmkoksguqw, "\144\145\x6c\x65\164\x65\x5f\151\x74\145\x6d\x73" => "\x64\x65\x6c\x65\x74\x65\137" . $qgmsmgywssakmiow, "\145\144\x69\164\x5f\x69\x74\x65\x6d\x73" => "\x65\144\151\x74\x5f" . $qgmsmgywssakmiow, "\x65\x64\151\164\137\157\x74\150\145\162\x73\x5f\151\x74\145\x6d\x73" => "\x65\x64\151\164\x5f\157\x74\150\x65\x72\163\x5f" . $qgmsmgywssakmiow, "\x70\x75\x62\154\151\163\150\x5f\151\x74\x65\x6d\x73" => "\160\x75\x62\154\151\x73\150\137" . $qgmsmgywssakmiow, "\x72\145\x61\144\137\160\x72\151\166\141\164\145\137\x69\164\145\155\x73" => "\x72\x65\x61\144\x5f\x70\x72\151\166\141\x74\x65\x5f" . $qgmsmgywssakmiow]; if ($qmiqqoqeakyeuuuw) { $ggmysogesocycwio = ["\162\145\141\x64" => "\x72\x65\141\x64", "\x64\x65\x6c\145\164\x65\137\151\x74\145\155\163" => "\144\145\x6c\145\164\x65\137" . $qgmsmgywssakmiow, "\144\x65\154\145\164\145\137\x70\162\151\x76\x61\x74\x65\137\x69\164\x65\x6d\163" => "\144\145\154\x65\x74\145\x5f\x70\162\x69\x76\x61\x74\145\x5f" . $qgmsmgywssakmiow, "\144\x65\x6c\145\164\145\x5f\x70\165\x62\154\x69\163\x68\x65\x64\137\151\x74\145\155\163" => "\144\x65\154\145\x74\x65\x5f\160\x75\x62\x6c\x69\163\150\x65\144\x5f" . $qgmsmgywssakmiow, "\144\145\154\x65\x74\145\x5f\157\x74\x68\145\x72\163\x5f\x69\x74\145\x6d\x73" => "\144\145\154\x65\x74\145\137\157\x74\150\x65\162\x73\137" . $qgmsmgywssakmiow, "\x65\144\151\164\137\160\x72\x69\166\141\164\145\x5f\x69\x74\x65\155\x73" => "\145\144\151\x74\137\x70\162\151\x76\x61\x74\145\137" . $qgmsmgywssakmiow, "\x65\x64\151\164\x5f\x70\165\x62\x6c\151\163\x68\x65\x64\x5f\x69\164\145\x6d\163" => "\x65\x64\x69\164\137\160\165\x62\154\x69\x73\150\145\x64\137" . $qgmsmgywssakmiow]; $ggauoeuaesiymgee = array_merge($ggauoeuaesiymgee, $ggmysogesocycwio); } $smgioooysaacyigy = array_merge($ggauoeuaesiymgee, $smgioooysaacyigy); if (!isset($smgioooysaacyigy["\143\x72\x65\141\164\145\x5f\x69\x74\145\x6d\163"])) { $smgioooysaacyigy["\143\162\145\x61\164\x65\x5f\151\164\145\x6d\x73"] = $smgioooysaacyigy["\x65\144\151\164\x5f\x69\x74\x65\x6d\163"]; } if ($qmiqqoqeakyeuuuw) { global $metaCaps; foreach ($smgioooysaacyigy as $oaeyummsoqeweuce => $ugugagoguiycqeys) { if (in_array($oaeyummsoqeweuce, ["\x72\x65\x61\x64\137\151\x74\x65\x6d", "\x64\x65\154\x65\164\x65\x5f\x69\x74\x65\155", "\x65\x64\x69\164\x5f\x69\x74\145\x6d"])) { $metaCaps[$oaeyummsoqeweuce] = $ugugagoguiycqeys; } } } return $smgioooysaacyigy; } public function gesoiqwieuaqaaqw(?string $gwqgmkqcgwwmweom = '') : string { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $kkmkcysyceyiwskq = $ekymkycgewkiouqe->gauymgyqasaqyqam(); } else { $kkmkcysyceyiwskq = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->gesoiqwieuaqaaqw(); } if ($gwqgmkqcgwwmweom) { $kkmkcysyceyiwskq = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::qsykmkmscqqawyaw, $gwqgmkqcgwwmweom, $kkmkcysyceyiwskq); } return $kkmkcysyceyiwskq; } public function syumyoqagcukicmu(?string $gwqgmkqcgwwmweom = '') : string { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $yyksucsgisomecgg = $ekymkycgewkiouqe->gauymgyqasaqyqam(); } else { $yyksucsgisomecgg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->oqguicgeicwmikuy(); } if ($gwqgmkqcgwwmweom) { $yyksucsgisomecgg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::qsykmkmscqqawyaw, $gwqgmkqcgwwmweom, $yyksucsgisomecgg); } return $yyksucsgisomecgg; } public function is($mkucggyaiaukqoce) : bool { return $mkucggyaiaukqoce instanceof WP_User; } public function iooowgsqoyqseyuu($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : ?int { $aokagokqyuysuksm = null; if (!$cwwowqyuwccuykom) { $aokagokqyuysuksm = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(); } if ($mkucggyaiaukqoce instanceof WP_User) { $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0; } else { if (is_numeric($mkucggyaiaukqoce)) { $aokagokqyuysuksm = (int) $mkucggyaiaukqoce; } } return $aokagokqyuysuksm; } public function qgkaiyacogeeoegs() : bool { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->yyccecocgwykyaeo(); } public function mikwgiscckkeomia($sqwmoeogqwooeukc = null) { $ksaameoqigiaoigg = null; if (is_numeric($sqwmoeogqwooeukc)) { $ksaameoqigiaoigg = $this->get(absint($sqwmoeogqwooeukc)); } elseif (is_string($sqwmoeogqwooeukc) && !strpos($sqwmoeogqwooeukc, "\x40\155\x64\x35\x2e\147\162\x61\166\141\x74\141\x72\56\x63\157\x6d")) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc; } elseif ($sqwmoeogqwooeukc instanceof WP_User) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc; } elseif ($sqwmoeogqwooeukc instanceof WP_Post) { $ksaameoqigiaoigg = $this->get((int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->mguqscccckuywsya($sqwmoeogqwooeukc)); } elseif ($sqwmoeogqwooeukc instanceof WP_Comment) { if (is_avatar_comment_type(get_comment_type($sqwmoeogqwooeukc))) { if (!empty($sqwmoeogqwooeukc->user_id)) { $ksaameoqigiaoigg = $this->get((int) $sqwmoeogqwooeukc->user_id); } if (!empty($sqwmoeogqwooeukc->comment_author_email) || (!$ksaameoqigiaoigg || is_wp_error($ksaameoqigiaoigg))) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc->comment_author_email; } } } return $ksaameoqigiaoigg; } public function mmscegoieayuaguo() { $kucumcusyyckayas = ''; if (isset($_SERVER)) { $kkeqqkkkqwkocsyu = ["\x48\x54\x54\120\x5f\x58\137\x52\105\x41\x4c\137\111\x50", "\110\x54\124\120\x5f\x43\x4c\111\x45\x4e\124\x5f\x49\x50", "\110\124\124\x50\x5f\x58\x5f\x46\117\122\x57\101\122\104\x45\104\137\106\117\x52", "\x52\105\115\x4f\124\x45\x5f\x41\104\x44\122"]; foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) { if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->giiecckwoyiawoyy($gygawogosumsgmme)) { if (filter_var($eqgoocgaqwqcimie, FILTER_VALIDATE_IP)) { $kucumcusyyckayas = $eqgoocgaqwqcimie; break; } $uomewyckeuqoqocu = explode("\x2c", $eqgoocgaqwqcimie); if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP)) { $kucumcusyyckayas = $uomewyckeuqoqocu[0]; break; } } } } return $kucumcusyyckayas; } public function eoyueosccuoeqkee() : bool { global $pagenow; return in_array($pagenow, ["\165\163\145\x72\55\145\144\151\x74\x2e\x70\150\x70", "\x75\163\145\x72\x2d\156\145\x77\x2e\x70\x68\160", "\x70\x72\157\146\x69\154\x65\56\160\150\x70"]); } public function dgmiwswakewguwgo(string $oeucsuyqysaciasy, array $smgioooysaacyigy = []) { $aismigqkakwaisuy = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aqciiewawiwecoou($oeucsuyqysaciasy); if ($aismigqkakwaisuy) { foreach ($smgioooysaacyigy as $gkswkiicccswksiq) { $aismigqkakwaisuy->add_cap($gkswkiicccswksiq); } } } public function ikcimmaqiwekowoi($ymqmyyeuycgmigyo) : ?WP_Role { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aqciiewawiwecoou($ymqmyyeuycgmigyo); } public function ekqiayaoseqcygmo($mkucggyaiaukqoce) : ?string { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($this->iooowgsqoyqseyuu($mkucggyaiaukqoce)); } public function yyykkcyiksewsoqy($mkucggyaiaukqoce) : ?string { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->yyykkcyiksewsoqy($this->iooowgsqoyqseyuu($mkucggyaiaukqoce)); } public function kuswmimkgmyuymiu($miowmmgaiagcuyoo = null) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $miowmmgaiagcuyoo = $this->iooowgsqoyqseyuu(); } else { if (!$miowmmgaiagcuyoo) { $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(Constants::qguaysoacmoeugio); } } return $miowmmgaiagcuyoo; } public function mmgsuuoossqmukqg($uagwmwoawiwkycao, array $ywmkwiwkosakssii = []) : array { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::eyqgmoumkowegyse => $uagwmwoawiwkycao])); } public function get($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) { if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) { $mkucggyaiaukqoce = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->seyyiqmgwymyumoq($mkucggyaiaukqoce); } else { if (!$mkucggyaiaukqoce && !$cwwowqyuwccuykom) { $mkucggyaiaukqoce = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->immcwcemcmyosyoo(); } } if ($this->is($mkucggyaiaukqoce) && !$mkucggyaiaukqoce->exists()) { $mkucggyaiaukqoce = null; } return $mkucggyaiaukqoce; } public function myagqecycsaiyqsk($mkucggyaiaukqoce) : bool { return !empty($this->get($mkucggyaiaukqoce, true)); } public function yagwwwqikmkuyicq(bool $mcmaiqckgiuqayau = false) : array { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $uagwmwoawiwkycao = $ewgmommeawggyaek->yksywgmucwascgwk()->get_names(); if ($mcmaiqckgiuqayau) { foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) { $uagwmwoawiwkycao[$uusmaiomayssaecw] = $ewgmommeawggyaek->qykgecyqwasqwoek($oeucsuyqysaciasy); } } return $uagwmwoawiwkycao; } public function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : bool { $uagwmwoawiwkycao = $this->yksywgmucwascgwk($mkucggyaiaukqoce, $cwwowqyuwccuykom); return in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao, true); } public function eueceegwomaqgqca($mkucggyaiaukqoce, bool $cwwowqyuwccuykom = false) : ?string { $uagwmwoawiwkycao = ["\141\x64\155\x69\156\x69\163\x74\162\141\x74\x6f\162", "\x61\x64\x6d\x69\156", "\145\144\x69\164\157\162", "\141\165\164\150\x6f\x72", "\143\x75\163\164\157\155\145\162", "\163\x75\142\x73\143\162\x69\x62\x65\x72"]; $skkyimqyswiesyqs = null; foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) { if ($this->askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) { $skkyimqyswiesyqs = $oeucsuyqysaciasy; break; } } return $skkyimqyswiesyqs; } public function yksywgmucwascgwk($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : array { $uagwmwoawiwkycao = []; $mkucggyaiaukqoce = $this->get($mkucggyaiaukqoce, $cwwowqyuwccuykom); if ($mkucggyaiaukqoce) { $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles; } return $uagwmwoawiwkycao; } public function igawqaomowicuayw($uusmaiomayssaecw = null, $mkucggyaiaukqoce = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->igawqaomowicuayw($uusmaiomayssaecw, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $cuyooiakswegosog); } public function smqukgcyacswysqa($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->smqukgcyacswysqa($uusmaiomayssaecw, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $eqgoocgaqwqcimie); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mkucggyaiaukqoce = null, bool $omasqoksqewuwwkq = true) { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $omasqoksqewuwwkq); } public function ksmqawcowkmegigw($uusmaiomayssaecw = null, $eqgoocgaqwqcimie = '', $mkucggyaiaukqoce = null, $swwmymiaiosiyqis = '') { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $swwmymiaiosiyqis); } public function qgisekcaywsmigga($uusmaiomayssaecw, $eqgoocgaqwqcimie, $uiuykcweuosgmwki = "\x3d", $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii["\x6d\x65\x74\141\137\x71\x75\145\x72\171"] = ["\162\145\154\141\164\151\157\156" => "\x41\x4e\x44", ["\153\x65\171" => $uusmaiomayssaecw, "\166\x61\x6c\x75\145" => $eqgoocgaqwqcimie, "\x63\x6f\x6d\x70\141\162\x65" => $uiuykcweuosgmwki]]; return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = Constants::cuyqkgecokgmcwqu, bool $cwwowqyuwccuykom = false) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus); } public function ogcwgigqwycqswms($sqwmoeogqwooeukc = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') { if ($sqwmoeogqwooeukc instanceof WP_User) { $sqwmoeogqwooeukc = $this->iooowgsqoyqseyuu($sqwmoeogqwooeukc); } return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ogcwgigqwycqswms($sqwmoeogqwooeukc, $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii); } public function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64) { $mowgokyeuymuwiew = $this->ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo); if ($mowgokyeuymuwiew) { $mowgokyeuymuwiew = $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($mowgokyeuymuwiew, "\x69\155\147", "\x73\x72\143"); } return $mowgokyeuymuwiew; } public function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = Constants::iamiiekkgssgeaew) : bool { $umuecysoywoumgwo = false; foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) { if ($this->askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) { if ($wocwawaaemuoqmig === Constants::iamiiekkgssgeaew) { $umuecysoywoumgwo = true; break; } } else { if ($wocwawaaemuoqmig === Constants::skewaiwksksokmqo) { break; } } } return $umuecysoywoumgwo; } }
