<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             673bbd8540fef             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; use WP_Role; use WP_User; class User extends Common { public function homgcsoocssgwgym($smgioooysaacyigy = [], $eouokigcckggaywy = null, $qmiqqoqeakyeuuuw = null) : array { if (!is_array($eouokigcckggaywy)) { $eouokigcckggaywy = [$eouokigcckggaywy, "{$eouokigcckggaywy}\x73"]; } [$acasoawmkoksguqw, $qgmsmgywssakmiow] = $eouokigcckggaywy; $ggauoeuaesiymgee = ["\145\x64\151\164\137\151\164\x65\155" => "\x65\x64\x69\164\x5f" . $acasoawmkoksguqw, "\162\x65\141\144\x5f\x69\164\145\x6d" => "\x72\x65\141\x64\x5f" . $acasoawmkoksguqw, "\x64\145\154\145\x74\145\137\151\x74\145\155" => "\x64\145\x6c\x65\x74\x65\137" . $acasoawmkoksguqw, "\144\145\154\x65\x74\145\137\x69\164\145\x6d\x73" => "\x64\145\154\x65\164\x65\137" . $qgmsmgywssakmiow, "\145\x64\x69\164\x5f\x69\x74\x65\x6d\x73" => "\145\144\151\164\137" . $qgmsmgywssakmiow, "\x65\x64\x69\x74\x5f\x6f\x74\x68\145\162\163\x5f\151\164\145\x6d\x73" => "\145\x64\x69\164\137\x6f\164\x68\x65\162\x73\x5f" . $qgmsmgywssakmiow, "\160\x75\142\x6c\151\x73\150\137\151\164\x65\x6d\x73" => "\160\165\142\x6c\151\x73\150\x5f" . $qgmsmgywssakmiow, "\x72\x65\x61\x64\x5f\x70\162\x69\166\141\164\x65\x5f\151\164\145\155\x73" => "\162\x65\x61\x64\137\x70\x72\151\166\141\x74\145\x5f" . $qgmsmgywssakmiow]; if ($qmiqqoqeakyeuuuw) { $ggmysogesocycwio = ["\x72\x65\141\x64" => "\162\x65\x61\144", "\144\x65\154\145\164\x65\x5f\151\x74\x65\155\x73" => "\x64\x65\x6c\145\164\145\x5f" . $qgmsmgywssakmiow, "\x64\145\x6c\x65\164\x65\137\160\162\x69\166\141\x74\145\137\x69\x74\x65\x6d\x73" => "\144\x65\x6c\x65\x74\x65\x5f\160\x72\151\x76\x61\164\145\137" . $qgmsmgywssakmiow, "\144\145\154\145\x74\145\x5f\160\x75\x62\154\x69\x73\x68\x65\144\137\x69\x74\x65\155\163" => "\144\145\x6c\145\x74\145\137\x70\x75\142\154\151\163\x68\x65\144\137" . $qgmsmgywssakmiow, "\144\145\154\x65\164\145\137\x6f\164\x68\x65\162\163\x5f\x69\164\145\x6d\x73" => "\144\x65\154\x65\164\x65\x5f\157\164\150\x65\162\x73\x5f" . $qgmsmgywssakmiow, "\145\144\x69\x74\x5f\160\x72\x69\166\x61\x74\x65\x5f\151\164\145\155\x73" => "\x65\144\151\164\137\160\162\x69\x76\141\164\x65\137" . $qgmsmgywssakmiow, "\x65\144\151\x74\x5f\x70\x75\x62\154\x69\163\x68\x65\x64\137\x69\x74\x65\x6d\x73" => "\x65\144\151\x74\137\x70\x75\142\154\x69\163\x68\145\144\x5f" . $qgmsmgywssakmiow]; $ggauoeuaesiymgee = array_merge($ggauoeuaesiymgee, $ggmysogesocycwio); } $smgioooysaacyigy = array_merge($ggauoeuaesiymgee, $smgioooysaacyigy); if (!isset($smgioooysaacyigy["\x63\162\145\141\x74\145\137\151\164\x65\155\163"])) { $smgioooysaacyigy["\143\x72\x65\x61\164\x65\x5f\151\x74\145\x6d\x73"] = $smgioooysaacyigy["\145\144\151\164\x5f\151\x74\145\155\x73"]; } if ($qmiqqoqeakyeuuuw) { global $metaCaps; foreach ($smgioooysaacyigy as $oaeyummsoqeweuce => $ugugagoguiycqeys) { if (in_array($oaeyummsoqeweuce, ["\x72\x65\x61\144\x5f\x69\x74\x65\155", "\144\145\154\145\x74\x65\x5f\151\x74\x65\x6d", "\145\x64\x69\164\137\151\x74\x65\x6d"])) { $metaCaps[$oaeyummsoqeweuce] = $ugugagoguiycqeys; } } } return $smgioooysaacyigy; } public function gesoiqwieuaqaaqw(?string $gwqgmkqcgwwmweom = '') : string { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $kkmkcysyceyiwskq = $ekymkycgewkiouqe->gauymgyqasaqyqam(); } else { $kkmkcysyceyiwskq = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->gesoiqwieuaqaaqw(); } if ($gwqgmkqcgwwmweom) { $kkmkcysyceyiwskq = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::qsykmkmscqqawyaw, $gwqgmkqcgwwmweom, $kkmkcysyceyiwskq); } return $kkmkcysyceyiwskq; } public function syumyoqagcukicmu(?string $gwqgmkqcgwwmweom = '') : string { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $yyksucsgisomecgg = $ekymkycgewkiouqe->gauymgyqasaqyqam(); } else { $yyksucsgisomecgg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->oqguicgeicwmikuy(); } if ($gwqgmkqcgwwmweom) { $yyksucsgisomecgg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::qsykmkmscqqawyaw, $gwqgmkqcgwwmweom, $yyksucsgisomecgg); } return $yyksucsgisomecgg; } public function is($mkucggyaiaukqoce) : bool { return $mkucggyaiaukqoce instanceof WP_User; } public function iooowgsqoyqseyuu($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : ?int { $aokagokqyuysuksm = null; if (!$cwwowqyuwccuykom) { $aokagokqyuysuksm = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(); } if ($mkucggyaiaukqoce instanceof WP_User) { $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0; } else { if (is_numeric($mkucggyaiaukqoce)) { $aokagokqyuysuksm = (int) $mkucggyaiaukqoce; } } return $aokagokqyuysuksm; } public function qgkaiyacogeeoegs() : bool { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->yyccecocgwykyaeo(); } public function mikwgiscckkeomia($sqwmoeogqwooeukc = null) { $ksaameoqigiaoigg = null; if (is_numeric($sqwmoeogqwooeukc)) { $ksaameoqigiaoigg = $this->get(absint($sqwmoeogqwooeukc)); } elseif (is_string($sqwmoeogqwooeukc) && !strpos($sqwmoeogqwooeukc, "\x40\155\x64\x35\56\147\x72\x61\166\x61\164\141\x72\56\x63\157\155")) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc; } elseif ($sqwmoeogqwooeukc instanceof WP_User) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc; } elseif ($sqwmoeogqwooeukc instanceof WP_Post) { $ksaameoqigiaoigg = $this->get((int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->mguqscccckuywsya($sqwmoeogqwooeukc)); } elseif ($sqwmoeogqwooeukc instanceof WP_Comment) { if (is_avatar_comment_type(get_comment_type($sqwmoeogqwooeukc))) { if (!empty($sqwmoeogqwooeukc->user_id)) { $ksaameoqigiaoigg = $this->get((int) $sqwmoeogqwooeukc->user_id); } if (!empty($sqwmoeogqwooeukc->comment_author_email) || (!$ksaameoqigiaoigg || is_wp_error($ksaameoqigiaoigg))) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc->comment_author_email; } } } return $ksaameoqigiaoigg; } public function mmscegoieayuaguo() { $kucumcusyyckayas = ''; if (isset($_SERVER)) { $kkeqqkkkqwkocsyu = ["\x48\x54\x54\120\137\x58\x5f\122\105\101\x4c\137\111\120", "\x48\x54\124\120\x5f\103\114\x49\x45\x4e\124\x5f\111\120", "\110\124\x54\120\x5f\130\x5f\x46\x4f\122\127\x41\122\x44\105\x44\137\106\117\122", "\122\x45\x4d\x4f\x54\x45\137\101\x44\104\x52"]; foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) { if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->giiecckwoyiawoyy($gygawogosumsgmme)) { if (filter_var($eqgoocgaqwqcimie, FILTER_VALIDATE_IP)) { $kucumcusyyckayas = $eqgoocgaqwqcimie; break; } $uomewyckeuqoqocu = explode("\54", $eqgoocgaqwqcimie); if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP)) { $kucumcusyyckayas = $uomewyckeuqoqocu[0]; break; } } } } return $kucumcusyyckayas; } public function eoyueosccuoeqkee() : bool { global $pagenow; return in_array($pagenow, ["\165\x73\x65\162\55\x65\x64\151\164\56\160\x68\x70", "\x75\163\x65\x72\55\156\x65\167\x2e\160\x68\x70", "\160\x72\157\146\x69\x6c\x65\56\x70\x68\160"]); } public function ikcimmaqiwekowoi($ymqmyyeuycgmigyo) : ?WP_Role { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aqciiewawiwecoou($ymqmyyeuycgmigyo); } public function ekqiayaoseqcygmo($mkucggyaiaukqoce) : ?string { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($this->iooowgsqoyqseyuu($mkucggyaiaukqoce)); } public function yyykkcyiksewsoqy($mkucggyaiaukqoce) : ?string { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->yyykkcyiksewsoqy($this->iooowgsqoyqseyuu($mkucggyaiaukqoce)); } public function kuswmimkgmyuymiu($miowmmgaiagcuyoo = null) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $miowmmgaiagcuyoo = $this->iooowgsqoyqseyuu(); } else { if (!$miowmmgaiagcuyoo) { $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(Constants::qguaysoacmoeugio); } } return $miowmmgaiagcuyoo; } public function mmgsuuoossqmukqg($uagwmwoawiwkycao, array $ywmkwiwkosakssii = []) : array { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::eyqgmoumkowegyse => $uagwmwoawiwkycao])); } public function get($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) { if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) { $mkucggyaiaukqoce = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->seyyiqmgwymyumoq($mkucggyaiaukqoce); } else { if (!$mkucggyaiaukqoce && !$cwwowqyuwccuykom) { $mkucggyaiaukqoce = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->immcwcemcmyosyoo(); } } if ($this->is($mkucggyaiaukqoce) && !$mkucggyaiaukqoce->exists()) { $mkucggyaiaukqoce = null; } return $mkucggyaiaukqoce; } public function myagqecycsaiyqsk($mkucggyaiaukqoce) : bool { return !empty($this->get($mkucggyaiaukqoce, true)); } public function yagwwwqikmkuyicq(bool $mcmaiqckgiuqayau = false) : array { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $uagwmwoawiwkycao = $ewgmommeawggyaek->yksywgmucwascgwk()->get_names(); if ($mcmaiqckgiuqayau) { foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) { $uagwmwoawiwkycao[$uusmaiomayssaecw] = $ewgmommeawggyaek->qykgecyqwasqwoek($oeucsuyqysaciasy); } } return $uagwmwoawiwkycao; } public function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : bool { $uagwmwoawiwkycao = $this->yksywgmucwascgwk($mkucggyaiaukqoce, $cwwowqyuwccuykom); return in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao, true); } public function eueceegwomaqgqca($mkucggyaiaukqoce, bool $cwwowqyuwccuykom = false) : ?string { $uagwmwoawiwkycao = ["\x61\x64\x6d\x69\x6e\151\x73\164\x72\x61\164\x6f\162", "\141\x64\155\x69\156", "\145\144\151\164\157\x72", "\x61\165\164\x68\x6f\x72", "\x63\165\163\x74\157\x6d\x65\x72", "\x73\165\x62\x73\143\x72\151\142\x65\162"]; $skkyimqyswiesyqs = null; foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) { if ($this->askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) { $skkyimqyswiesyqs = $oeucsuyqysaciasy; break; } } return $skkyimqyswiesyqs; } public function yksywgmucwascgwk($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : array { $uagwmwoawiwkycao = []; $mkucggyaiaukqoce = $this->get($mkucggyaiaukqoce, $cwwowqyuwccuykom); if ($mkucggyaiaukqoce) { $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles; } return $uagwmwoawiwkycao; } public function igawqaomowicuayw($uusmaiomayssaecw = null, $mkucggyaiaukqoce = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->igawqaomowicuayw($uusmaiomayssaecw, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $cuyooiakswegosog); } public function smqukgcyacswysqa($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->smqukgcyacswysqa($uusmaiomayssaecw, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $eqgoocgaqwqcimie); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mkucggyaiaukqoce = null, bool $omasqoksqewuwwkq = true) { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $omasqoksqewuwwkq); } public function ksmqawcowkmegigw($uusmaiomayssaecw = null, $eqgoocgaqwqcimie = '', $mkucggyaiaukqoce = null, $swwmymiaiosiyqis = '') { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $swwmymiaiosiyqis); } public function qgisekcaywsmigga($uusmaiomayssaecw, $eqgoocgaqwqcimie, $uiuykcweuosgmwki = "\x3d", $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii["\155\145\164\x61\x5f\161\x75\x65\162\171"] = ["\x72\x65\x6c\141\x74\x69\157\156" => "\x41\116\x44", ["\x6b\145\x79" => $uusmaiomayssaecw, "\166\x61\154\165\x65" => $eqgoocgaqwqcimie, "\143\x6f\155\160\141\162\145" => $uiuykcweuosgmwki]]; return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = Constants::cuyqkgecokgmcwqu, bool $cwwowqyuwccuykom = false) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus); } public function ogcwgigqwycqswms($sqwmoeogqwooeukc = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') { if ($sqwmoeogqwooeukc instanceof WP_User) { $sqwmoeogqwooeukc = $this->iooowgsqoyqseyuu($sqwmoeogqwooeukc); } return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ogcwgigqwycqswms($sqwmoeogqwooeukc, $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii); } public function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64) { $mowgokyeuymuwiew = $this->ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo); if ($mowgokyeuymuwiew) { $mowgokyeuymuwiew = $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($mowgokyeuymuwiew, "\151\x6d\x67", "\163\x72\143"); } return $mowgokyeuymuwiew; } public function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = Constants::iamiiekkgssgeaew) : bool { $umuecysoywoumgwo = false; foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) { if ($this->askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) { if ($wocwawaaemuoqmig === Constants::iamiiekkgssgeaew) { $umuecysoywoumgwo = true; break; } } else { if ($wocwawaaemuoqmig === Constants::skewaiwksksokmqo) { break; } } } return $umuecysoywoumgwo; } }
