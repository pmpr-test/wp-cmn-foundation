<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d0192bbd7b2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper; use Pmpr\Common\Foundation\Interfaces\Constants; use WP_Comment; use WP_Post; use WP_Role; use WP_User; class User extends Common { public function homgcsoocssgwgym($smgioooysaacyigy = [], $eouokigcckggaywy = null, $qmiqqoqeakyeuuuw = null) : array { if (!is_array($eouokigcckggaywy)) { $eouokigcckggaywy = [$eouokigcckggaywy, "{$eouokigcckggaywy}s"]; } [$acasoawmkoksguqw, $qgmsmgywssakmiow] = $eouokigcckggaywy; $ggauoeuaesiymgee = ['edit_item' => 'edit_' . $acasoawmkoksguqw, 'read_item' => 'read_' . $acasoawmkoksguqw, 'delete_item' => 'delete_' . $acasoawmkoksguqw, 'delete_items' => 'delete_' . $qgmsmgywssakmiow, 'edit_items' => 'edit_' . $qgmsmgywssakmiow, 'edit_others_items' => 'edit_others_' . $qgmsmgywssakmiow, 'publish_items' => 'publish_' . $qgmsmgywssakmiow, 'read_private_items' => 'read_private_' . $qgmsmgywssakmiow]; if ($qmiqqoqeakyeuuuw) { $ggmysogesocycwio = ['read' => 'read', 'delete_items' => 'delete_' . $qgmsmgywssakmiow, 'delete_private_items' => 'delete_private_' . $qgmsmgywssakmiow, 'delete_published_items' => 'delete_published_' . $qgmsmgywssakmiow, 'delete_others_items' => 'delete_others_' . $qgmsmgywssakmiow, 'edit_private_items' => 'edit_private_' . $qgmsmgywssakmiow, 'edit_published_items' => 'edit_published_' . $qgmsmgywssakmiow]; $ggauoeuaesiymgee = array_merge($ggauoeuaesiymgee, $ggmysogesocycwio); } $smgioooysaacyigy = array_merge($ggauoeuaesiymgee, $smgioooysaacyigy); if (!isset($smgioooysaacyigy['create_items'])) { $smgioooysaacyigy['create_items'] = $smgioooysaacyigy['edit_items']; } if ($qmiqqoqeakyeuuuw) { global $metaCaps; foreach ($smgioooysaacyigy as $oaeyummsoqeweuce => $ugugagoguiycqeys) { if (in_array($oaeyummsoqeweuce, ['read_item', 'delete_item', 'edit_item'])) { $metaCaps[$oaeyummsoqeweuce] = $ugugagoguiycqeys; } } } return $smgioooysaacyigy; } public function gesoiqwieuaqaaqw(?string $gwqgmkqcgwwmweom = '') : string { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $kkmkcysyceyiwskq = $ekymkycgewkiouqe->gauymgyqasaqyqam(); } else { $kkmkcysyceyiwskq = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->gesoiqwieuaqaaqw(); } if ($gwqgmkqcgwwmweom) { $kkmkcysyceyiwskq = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::qsykmkmscqqawyaw, $gwqgmkqcgwwmweom, $kkmkcysyceyiwskq); } return $kkmkcysyceyiwskq; } public function syumyoqagcukicmu(?string $gwqgmkqcgwwmweom = '') : string { $ekymkycgewkiouqe = $this->caokeucsksukesyo()->wikusamwomuogoau(); if ($ekymkycgewkiouqe->ggocakcisguuokai()) { $yyksucsgisomecgg = $ekymkycgewkiouqe->gauymgyqasaqyqam(); } else { $yyksucsgisomecgg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->oqguicgeicwmikuy(); } if ($gwqgmkqcgwwmweom) { $yyksucsgisomecgg = $this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->yqymaqmqiqmmmsoo(Constants::qsykmkmscqqawyaw, $gwqgmkqcgwwmweom, $yyksucsgisomecgg); } return $yyksucsgisomecgg; } public function is($mkucggyaiaukqoce) : bool { return $mkucggyaiaukqoce instanceof WP_User; } public function iooowgsqoyqseyuu($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : ?int { $aokagokqyuysuksm = null; if (!$cwwowqyuwccuykom) { $aokagokqyuysuksm = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->qyeguewwsmosqcwc(); } if ($mkucggyaiaukqoce instanceof WP_User) { $aokagokqyuysuksm = $mkucggyaiaukqoce->ID ?? 0; } else { if (is_numeric($mkucggyaiaukqoce)) { $aokagokqyuysuksm = (int) $mkucggyaiaukqoce; } } return $aokagokqyuysuksm; } public function qgkaiyacogeeoegs() : bool { return $this->caokeucsksukesyo()->eiwcuqigayigimak()->yyccecocgwykyaeo(); } public function mikwgiscckkeomia($sqwmoeogqwooeukc = null) { $ksaameoqigiaoigg = null; if (is_numeric($sqwmoeogqwooeukc)) { $ksaameoqigiaoigg = $this->get(absint($sqwmoeogqwooeukc)); } elseif (is_string($sqwmoeogqwooeukc) && !strpos($sqwmoeogqwooeukc, '@md5.gravatar.com')) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc; } elseif ($sqwmoeogqwooeukc instanceof WP_User) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc; } elseif ($sqwmoeogqwooeukc instanceof WP_Post) { $ksaameoqigiaoigg = $this->get((int) $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->mguqscccckuywsya($sqwmoeogqwooeukc)); } elseif ($sqwmoeogqwooeukc instanceof WP_Comment) { if (is_avatar_comment_type(get_comment_type($sqwmoeogqwooeukc))) { if (!empty($sqwmoeogqwooeukc->user_id)) { $ksaameoqigiaoigg = $this->get((int) $sqwmoeogqwooeukc->user_id); } if (!empty($sqwmoeogqwooeukc->comment_author_email) || (!$ksaameoqigiaoigg || is_wp_error($ksaameoqigiaoigg))) { $ksaameoqigiaoigg = $sqwmoeogqwooeukc->comment_author_email; } } } return $ksaameoqigiaoigg; } public function mmscegoieayuaguo() { $kucumcusyyckayas = ''; if (isset($_SERVER)) { $kkeqqkkkqwkocsyu = ['HTTP_X_REAL_IP', 'HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR']; foreach ($kkeqqkkkqwkocsyu as $gygawogosumsgmme) { if ($eqgoocgaqwqcimie = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->giiecckwoyiawoyy($gygawogosumsgmme)) { if (filter_var($eqgoocgaqwqcimie, FILTER_VALIDATE_IP)) { $kucumcusyyckayas = $eqgoocgaqwqcimie; break; } $uomewyckeuqoqocu = explode(',', $eqgoocgaqwqcimie); if (is_array($uomewyckeuqoqocu) && $uomewyckeuqoqocu && isset($uomewyckeuqoqocu[0]) && filter_var($uomewyckeuqoqocu[0], FILTER_VALIDATE_IP)) { $kucumcusyyckayas = $uomewyckeuqoqocu[0]; break; } } } } return $kucumcusyyckayas; } public function eoyueosccuoeqkee() : bool { global $pagenow; return in_array($pagenow, ['user-edit.php', 'user-new.php', 'profile.php']); } public function dgmiwswakewguwgo(string $oeucsuyqysaciasy, array $smgioooysaacyigy = []) { $aismigqkakwaisuy = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aqciiewawiwecoou($oeucsuyqysaciasy); if ($aismigqkakwaisuy) { foreach ($smgioooysaacyigy as $gkswkiicccswksiq) { $aismigqkakwaisuy->add_cap($gkswkiicccswksiq); } } } public function ikcimmaqiwekowoi($ymqmyyeuycgmigyo) : ?WP_Role { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->aqciiewawiwecoou($ymqmyyeuycgmigyo); } public function ekqiayaoseqcygmo($mkucggyaiaukqoce) : ?string { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ekqiayaoseqcygmo($this->iooowgsqoyqseyuu($mkucggyaiaukqoce)); } public function yyykkcyiksewsoqy($mkucggyaiaukqoce) : ?string { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->yyykkcyiksewsoqy($this->iooowgsqoyqseyuu($mkucggyaiaukqoce)); } public function kuswmimkgmyuymiu($miowmmgaiagcuyoo = null) { if ($this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksgkoukcicwkkaum()) { $miowmmgaiagcuyoo = $this->iooowgsqoyqseyuu(); } else { if (!$miowmmgaiagcuyoo) { $miowmmgaiagcuyoo = $this->caokeucsksukesyo()->giiecckwoyiawoyy()->aukgyiaewiccooqw(Constants::qguaysoacmoeugio); } } return $miowmmgaiagcuyoo; } public function mmgsuuoossqmukqg($uagwmwoawiwkycao, array $ywmkwiwkosakssii = []) : array { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::eyqgmoumkowegyse => $uagwmwoawiwkycao])); } public function get($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) { if ($mkucggyaiaukqoce && is_numeric($mkucggyaiaukqoce)) { $mkucggyaiaukqoce = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->seyyiqmgwymyumoq($mkucggyaiaukqoce); } else { if (!$mkucggyaiaukqoce && !$cwwowqyuwccuykom) { $mkucggyaiaukqoce = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->immcwcemcmyosyoo(); } } if ($this->is($mkucggyaiaukqoce) && !$mkucggyaiaukqoce->exists()) { $mkucggyaiaukqoce = null; } return $mkucggyaiaukqoce; } public function myagqecycsaiyqsk($mkucggyaiaukqoce) : bool { return !empty($this->get($mkucggyaiaukqoce, true)); } public function yagwwwqikmkuyicq(bool $mcmaiqckgiuqayau = false) : array { $ewgmommeawggyaek = $this->uwkmaywceaaaigwo()->issssuygyewuaswa(); $uagwmwoawiwkycao = $ewgmommeawggyaek->yksywgmucwascgwk()->get_names(); if ($mcmaiqckgiuqayau) { foreach ($uagwmwoawiwkycao as $uusmaiomayssaecw => $oeucsuyqysaciasy) { $uagwmwoawiwkycao[$uusmaiomayssaecw] = $ewgmommeawggyaek->qykgecyqwasqwoek($oeucsuyqysaciasy); } } return $uagwmwoawiwkycao; } public function askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : bool { $uagwmwoawiwkycao = $this->yksywgmucwascgwk($mkucggyaiaukqoce, $cwwowqyuwccuykom); return in_array($oeucsuyqysaciasy, $uagwmwoawiwkycao, true); } public function eueceegwomaqgqca($mkucggyaiaukqoce, bool $cwwowqyuwccuykom = false) : ?string { $uagwmwoawiwkycao = ['administrator', 'admin', 'editor', 'author', 'customer', 'subscriber']; $skkyimqyswiesyqs = null; foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) { if ($this->askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) { $skkyimqyswiesyqs = $oeucsuyqysaciasy; break; } } return $skkyimqyswiesyqs; } public function yksywgmucwascgwk($mkucggyaiaukqoce = null, bool $cwwowqyuwccuykom = false) : array { $uagwmwoawiwkycao = []; $mkucggyaiaukqoce = $this->get($mkucggyaiaukqoce, $cwwowqyuwccuykom); if ($mkucggyaiaukqoce && !is_wp_error($mkucggyaiaukqoce)) { $uagwmwoawiwkycao = $mkucggyaiaukqoce->roles; } return $uagwmwoawiwkycao; } public function igawqaomowicuayw($uusmaiomayssaecw = null, $mkucggyaiaukqoce = null, bool $cuyooiakswegosog = true) { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->igawqaomowicuayw($uusmaiomayssaecw, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $cuyooiakswegosog); } public function smqukgcyacswysqa($uusmaiomayssaecw, $mkucggyaiaukqoce = null, $eqgoocgaqwqcimie = '') : bool { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->smqukgcyacswysqa($uusmaiomayssaecw, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $eqgoocgaqwqcimie); } public function giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $mkucggyaiaukqoce = null, bool $omasqoksqewuwwkq = true) { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->giwmekimakcaawsq($uusmaiomayssaecw, $eqgoocgaqwqcimie, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $omasqoksqewuwwkq); } public function ksmqawcowkmegigw($uusmaiomayssaecw = null, $eqgoocgaqwqcimie = '', $mkucggyaiaukqoce = null, $swwmymiaiosiyqis = '') { return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ksmqawcowkmegigw($uusmaiomayssaecw, $eqgoocgaqwqcimie, $this->iooowgsqoyqseyuu($mkucggyaiaukqoce), $swwmymiaiosiyqis); } public function qgisekcaywsmigga($uusmaiomayssaecw, $eqgoocgaqwqcimie, $uiuykcweuosgmwki = '=', $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii['meta_query'] = ['relation' => 'AND', ['key' => $uusmaiomayssaecw, 'value' => $eqgoocgaqwqcimie, 'compare' => $uiuykcweuosgmwki]]; return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function ygwimyogyaqgumam($mkucggyaiaukqoce = null, ?string $aiowsaccomcoikus = Constants::cuyqkgecokgmcwqu, bool $cwwowqyuwccuykom = false) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->get($mkucggyaiaukqoce, $cwwowqyuwccuykom), $aiowsaccomcoikus); } public function ogcwgigqwycqswms($sqwmoeogqwooeukc = null, $oiegiwogmwmawkeo = 64, $ywmkwiwkosakssii = [], $gkykacccamuwowwc = '', $ggauoeuaesiymgee = '') { if ($sqwmoeogqwooeukc instanceof WP_User) { $sqwmoeogqwooeukc = $this->iooowgsqoyqseyuu($sqwmoeogqwooeukc); } return $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ogcwgigqwycqswms($sqwmoeogqwooeukc, $oiegiwogmwmawkeo, $ggauoeuaesiymgee, $gkykacccamuwowwc, $ywmkwiwkosakssii); } public function quasyaqmmikeyoag($mkucggyaiaukqoce = null, $oiegiwogmwmawkeo = 64) { $mowgokyeuymuwiew = $this->ogcwgigqwycqswms($mkucggyaiaukqoce, $oiegiwogmwmawkeo); if ($mowgokyeuymuwiew) { $mowgokyeuymuwiew = $this->caokeucsksukesyo()->gkksucgseqqemesc()->waecsyqmwascmqoa($mowgokyeuymuwiew, 'img', 'src'); } return $mowgokyeuymuwiew; } public function esmswawesuyogmik(array $uagwmwoawiwkycao, $mkucggyaiaukqoce = null, $cwwowqyuwccuykom = false, $wocwawaaemuoqmig = Constants::iamiiekkgssgeaew) : bool { $umuecysoywoumgwo = false; foreach ($uagwmwoawiwkycao as $oeucsuyqysaciasy) { if ($this->askmkgcmgekiqwsg($oeucsuyqysaciasy, $mkucggyaiaukqoce, $cwwowqyuwccuykom)) { if ($wocwawaaemuoqmig === Constants::iamiiekkgssgeaew) { $umuecysoywoumgwo = true; break; } } else { if ($wocwawaaemuoqmig === Constants::skewaiwksksokmqo) { break; } } } return $umuecysoywoumgwo; } }
