<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f15f5710e7a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; class Taxonomy extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\x69\164", [$this, "\x6d\x6f\144\151\x66\171"], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\137\x74\145\x72\155\x73\137\141\162\x67\x73", [$this, "\163\147\x6b\x69\171\x65\167\143\157\x6f\x67\x67\143\x6d\153\163"])->cecaguuoecmccuse("\147\x65\x74\x5f\x74\145\x72\x6d\x73\137\x6f\162\144\145\162\x62\x79", [$this, "\153\x75\157\x79\151\161\x69\x75\x73\163\x65\171\145\x61\x65\x61"], 10, 2); } public function modify() { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->ciugwooasaqcywas(); $vewwuwosemqiwyaw = $this->ocksiywmkyaqseou("\164\141\170\x6f\x6e\157\x6d\171\x5f\x73\x69\156\147\x6c\145\137\166\x61\154\165\x65\x5f\155\x6f\144\151\x66\171\x5f\x69\x74\145\x6d\163", []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $ymqmyyeuycgmigyo = $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if (!($qyucoagsiyeieyiu || in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw, true))) { goto eakqkewcgqyewkee; } if ($qyucoagsiyeieyiu) { goto asgweagmgkwuaeey; } $kesssewsiegssiya->single_value = true; asgweagmgkwuaeey: if (!(false !== $kesssewsiegssiya->meta_box_cb)) { goto awqyqyqeqkciygcg; } $kesssewsiegssiya->meta_box_cb = [$this, "\x61\x75\x73\x79\x6d\155\147\163\153\163\157\161\167\165\x71\x6b"]; $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\x79\151\x69\x69\161\145\167\163\x73\145\x79\x77\145\x6d\161\165"]; awqyqyqeqkciygcg: $kesssewsiegssiya->rewrite[Constants::ikagyegqaweawkkc] = false; $cqcqsgykasiqwowi->register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya); eakqkewcgqyewkee: macuoqyigoeqkkwa: } cskuqsmksmimaewq: } public function sgkiyewcooggcmks($ywmkwiwkosakssii) { if (!is_admin()) { goto ggmkcyyawgwomqmo; } $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = Constants::gouqcwikiiygyasc; return $ywmkwiwkosakssii; ggmkcyyawgwomqmo: return $ywmkwiwkosakssii; } public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa) { if (is_array($uyuaosigqymaqsaa)) { goto keyoygyawmmuiysi; } if (!is_string($uyuaosigqymaqsaa)) { goto esyqewcegauewswi; } $uyuaosigqymaqsaa = [(int) $uyuaosigqymaqsaa]; esyqewcegauewswi: goto muamuiocsyikcmou; keyoygyawmmuiysi: $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa); muamuiocsyikcmou: return $uyuaosigqymaqsaa; } public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq) { if (!isset($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]) || !is_array($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac])) { goto eyeayegkquuoikii; } $ywmkwiwkosakssii = $uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]; goto omwseuoiosmmksik; eyeayegkquuoikii: $ywmkwiwkosakssii = []; omwseuoiosmmksik: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($kesssewsiegssiya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gmmygyiecgmggaam))) { goto caeakwsemagcwswc; } $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya); $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($kesssewsiegssiya); $ymmmmaiuoocagigk = $seumokooiykcomco->weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if (!$qyucoagsiyeieyiu) { goto ikaeueycwmsyseia; } $ymmmmaiuoocagigk = $gkyciwoiiisgywcs->get($ymmmmaiuoocagigk, 0); ikaeueycwmsyseia: $augiookssyeuewki = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec("\164\x61\x78\x5f\x69\x6e\x70\165\164\133{$ymqmyyeuycgmigyo}\x5d")->ikimooaieasgmeak($ymqmyyeuycgmigyo)->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, "\x74\x61\170\137\x69\156\160\x75\164\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk); $augiookssyeuewki->kakecegieeqyyayu()->qigsyyqgewgskemg("\x62\x6f\x72\144\x65\x72\x2d\x62\x6f\x78\x20\x70\x2d\x30"); if ($qyucoagsiyeieyiu) { goto waukqcouoysuesec; } $augiookssyeuewki->oikgogcweiiaocka(); waukqcouoysuesec: $augiookssyeuewki = $augiookssyeuewki->render(); $cowauqqkuseckgyy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($ymqmyyeuycgmigyo, [Constants::ackcaikowcokggsc => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]); $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\x6d\x65\164\141\137\x62\157\x78\x5f\160\157\160\x75\154\x61\162", [Constants::uiwqcumqkgikqyue => $cowauqqkuseckgyy, Constants::NAME => $ymqmyyeuycgmigyo]); $this->iuygowkemiiwqmiw("\x6d\145\164\141\x5f\142\157\x78\137\163\151\x6e\147\x6c\x65\x5f\x76\x61\x6c\165\x65", [Constants::okeuagwgwkmiokac => $this->caokeucsksukesyo()->kckogqkiycqeumoa()->esqgqsacwywoakok($kesssewsiegssiya, false), Constants::ugmwekegkosuuwii => $augiookssyeuewki, "\x70\157\160\165\154\x61\x72" => $cowauqqkuseckgyy, "\x65\x6d\160\164\171\x5f\155\x65\163\163\x61\147\145" => __("\124\x68\x65\x72\x65\x20\x61\162\145\40\x6e\157\164\x20\x25\163\40\171\145\x74\56", PR__CMN__FOUNDATION), Constants::NAME => $ymqmyyeuycgmigyo, Constants::mswoacegomcucaik => $seumokooiykcomco->iooowgsqoyqseyuu($post), Constants::gmmygyiecgmggaam => $kesssewsiegssiya], [Constants::qaacaqioeyiuakeu => true]); caeakwsemagcwswc: } public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string { if (!(Constants::ackcaikowcokggsc === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie))) { goto qwcmwosyocyqyomq; } $ooiewiwkegguusum = implode("\x2c", array_map("\x61\142\163\151\x6e\164", $ywmkwiwkosakssii[Constants::ackcaikowcokggsc])); $sikaymiwcesagayc = "\x46\111\105\114\x44\50\164\x2e\x74\x65\x72\155\137\151\144\54\x20{$ooiewiwkegguusum}\51"; qwcmwosyocyqyomq: return $sikaymiwcesagayc; } }
