<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670e55c5a76f1             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; class Taxonomy extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\151\x74", [$this, "\155\157\144\x69\146\x79"], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\164\137\164\x65\162\155\x73\x5f\x61\162\x67\x73", [$this, "\163\147\x6b\151\171\145\x77\143\x6f\157\147\x67\x63\155\153\x73"])->cecaguuoecmccuse("\147\145\x74\x5f\164\x65\162\155\163\x5f\157\162\144\145\162\142\171", [$this, "\153\165\x6f\171\151\x71\x69\x75\163\x73\x65\171\145\x61\x65\141"], 10, 2); } public function modify() { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->ciugwooasaqcywas(); $vewwuwosemqiwyaw = $this->ocksiywmkyaqseou("\164\x61\x78\157\156\157\155\x79\137\x73\151\156\147\x6c\145\x5f\x76\141\x6c\x75\x65\137\155\x6f\144\x69\x66\x79\x5f\x69\164\145\x6d\163", []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $ymqmyyeuycgmigyo = $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu || in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw, true)) { if (!$qyucoagsiyeieyiu) { $kesssewsiegssiya->single_value = true; } if (false !== $kesssewsiegssiya->meta_box_cb) { $kesssewsiegssiya->meta_box_cb = [$this, "\141\x75\163\x79\x6d\x6d\x67\163\x6b\163\157\x71\x77\165\161\x6b"]; $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\171\x69\151\151\x71\145\x77\x73\163\x65\x79\x77\x65\x6d\x71\x75"]; } $kesssewsiegssiya->rewrite[Constants::ikagyegqaweawkkc] = false; $cqcqsgykasiqwowi->register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya); } } } public function sgkiyewcooggcmks($ywmkwiwkosakssii) { if (is_admin()) { $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = Constants::gouqcwikiiygyasc; return $ywmkwiwkosakssii; } return $ywmkwiwkosakssii; } public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa) { if (is_array($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa); } else { if (is_string($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = [(int) $uyuaosigqymaqsaa]; } } return $uyuaosigqymaqsaa; } public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq) { if (!isset($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]) || !is_array($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac])) { $ywmkwiwkosakssii = []; } else { $ywmkwiwkosakssii = $uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($kesssewsiegssiya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gmmygyiecgmggaam)) { $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya); $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($kesssewsiegssiya); $ymmmmaiuoocagigk = $seumokooiykcomco->weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { $ymmmmaiuoocagigk = $gkyciwoiiisgywcs->get($ymmmmaiuoocagigk, 0); } $augiookssyeuewki = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec("\x74\x61\x78\137\x69\156\160\x75\164\133{$ymqmyyeuycgmigyo}\135")->ikimooaieasgmeak($ymqmyyeuycgmigyo)->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, "\164\141\170\x5f\x69\x6e\x70\x75\164\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk); $augiookssyeuewki->kakecegieeqyyayu()->qigsyyqgewgskemg("\x62\157\162\x64\x65\x72\55\x62\157\x78\x20\x70\55\x30"); if (!$qyucoagsiyeieyiu) { $augiookssyeuewki->oikgogcweiiaocka(); } $augiookssyeuewki = $augiookssyeuewki->render(); $cowauqqkuseckgyy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($ymqmyyeuycgmigyo, [Constants::ackcaikowcokggsc => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]); $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\155\x65\164\x61\x5f\142\x6f\170\137\160\157\160\165\x6c\x61\x72", [Constants::uiwqcumqkgikqyue => $cowauqqkuseckgyy, Constants::NAME => $ymqmyyeuycgmigyo]); $this->iuygowkemiiwqmiw("\x6d\x65\x74\x61\x5f\x62\157\x78\137\x73\151\x6e\147\154\x65\x5f\x76\x61\x6c\x75\145", [Constants::okeuagwgwkmiokac => $this->caokeucsksukesyo()->kckogqkiycqeumoa()->esqgqsacwywoakok($kesssewsiegssiya, false), Constants::ugmwekegkosuuwii => $augiookssyeuewki, "\x70\x6f\160\165\x6c\x61\x72" => $cowauqqkuseckgyy, "\x65\x6d\160\164\171\x5f\155\145\163\x73\x61\147\x65" => __("\x54\150\x65\162\145\x20\x61\x72\145\x20\x6e\157\x74\x20\x25\x73\x20\x79\145\164\x2e", PR__CMN__FOUNDATION), Constants::NAME => $ymqmyyeuycgmigyo, Constants::mswoacegomcucaik => $seumokooiykcomco->iooowgsqoyqseyuu($post), Constants::gmmygyiecgmggaam => $kesssewsiegssiya], [Constants::qaacaqioeyiuakeu => true]); } } public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string { if (Constants::ackcaikowcokggsc === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie)) { $ooiewiwkegguusum = implode("\x2c", array_map("\141\142\163\151\156\x74", $ywmkwiwkosakssii[Constants::ackcaikowcokggsc])); $sikaymiwcesagayc = "\x46\x49\x45\x4c\x44\50\x74\x2e\164\145\162\x6d\x5f\x69\x64\x2c\x20{$ooiewiwkegguusum}\51"; } return $sikaymiwcesagayc; } }
