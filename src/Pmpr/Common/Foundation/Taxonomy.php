<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d172c3f1f6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; class Taxonomy extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\164", [$this, "\155\157\144\151\146\x79"], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\164\137\x74\x65\162\x6d\163\137\x61\162\147\163", [$this, "\x73\x67\x6b\x69\x79\145\167\143\x6f\x6f\x67\x67\143\x6d\x6b\163"])->cecaguuoecmccuse("\x67\x65\x74\137\x74\x65\x72\155\163\137\157\162\x64\x65\x72\142\171", [$this, "\153\165\x6f\x79\151\161\x69\x75\163\x73\145\171\145\141\x65\x61"], 10, 2); } public function modify() { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->ciugwooasaqcywas(); $vewwuwosemqiwyaw = $this->ocksiywmkyaqseou("\164\141\170\157\156\x6f\x6d\x79\137\x73\151\x6e\147\x6c\x65\137\x76\x61\x6c\165\x65\x5f\x6d\157\x64\x69\x66\x79\x5f\151\164\145\x6d\x73", []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $ymqmyyeuycgmigyo = $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu || in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw, true)) { if (!$qyucoagsiyeieyiu) { $kesssewsiegssiya->single_value = true; } if (false !== $kesssewsiegssiya->meta_box_cb) { $kesssewsiegssiya->meta_box_cb = [$this, "\x61\165\x73\171\155\x6d\147\x73\153\x73\x6f\161\x77\x75\161\x6b"]; $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\171\151\x69\151\x71\145\x77\x73\x73\145\x79\167\x65\x6d\x71\x75"]; } $kesssewsiegssiya->rewrite[Constants::ikagyegqaweawkkc] = false; $cqcqsgykasiqwowi->register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya); } } } public function sgkiyewcooggcmks($ywmkwiwkosakssii) { if (is_admin()) { $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = Constants::gouqcwikiiygyasc; return $ywmkwiwkosakssii; } return $ywmkwiwkosakssii; } public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa) { if (is_array($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa); } else { if (is_string($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = [(int) $uyuaosigqymaqsaa]; } } return $uyuaosigqymaqsaa; } public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq) { if (!isset($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]) || !is_array($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac])) { $ywmkwiwkosakssii = []; } else { $ywmkwiwkosakssii = $uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($kesssewsiegssiya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gmmygyiecgmggaam)) { $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya); $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($kesssewsiegssiya); $ymmmmaiuoocagigk = $seumokooiykcomco->weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { $ymmmmaiuoocagigk = $gkyciwoiiisgywcs->get($ymmmmaiuoocagigk, 0); } $augiookssyeuewki = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec("\x74\141\x78\x5f\x69\x6e\160\165\164\133{$ymqmyyeuycgmigyo}\x5d")->ikimooaieasgmeak($ymqmyyeuycgmigyo)->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, "\x74\x61\170\137\x69\156\x70\x75\164\x5f{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk); $augiookssyeuewki->kakecegieeqyyayu()->qigsyyqgewgskemg("\142\x6f\162\x64\145\162\x2d\x62\x6f\x78\40\160\55\60"); if (!$qyucoagsiyeieyiu) { $augiookssyeuewki->oikgogcweiiaocka(); } $augiookssyeuewki = $augiookssyeuewki->render(); $cowauqqkuseckgyy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($ymqmyyeuycgmigyo, [Constants::ackcaikowcokggsc => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]); $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\x6d\x65\164\141\137\x62\157\170\x5f\x70\x6f\x70\165\x6c\x61\x72", [Constants::uiwqcumqkgikqyue => $cowauqqkuseckgyy, Constants::NAME => $ymqmyyeuycgmigyo]); $this->iuygowkemiiwqmiw("\155\x65\164\141\x5f\142\157\170\137\163\x69\x6e\x67\x6c\x65\x5f\x76\x61\154\165\x65", [Constants::okeuagwgwkmiokac => $this->caokeucsksukesyo()->kckogqkiycqeumoa()->esqgqsacwywoakok($kesssewsiegssiya, false), Constants::ugmwekegkosuuwii => $augiookssyeuewki, "\160\x6f\160\165\154\141\x72" => $cowauqqkuseckgyy, "\145\155\x70\x74\x79\x5f\x6d\145\x73\163\141\147\145" => __("\x54\150\145\x72\x65\x20\141\162\x65\x20\x6e\157\x74\40\x25\163\x20\x79\145\164\x2e", PR__CMN__FOUNDATION), Constants::NAME => $ymqmyyeuycgmigyo, Constants::mswoacegomcucaik => $seumokooiykcomco->iooowgsqoyqseyuu($post), Constants::gmmygyiecgmggaam => $kesssewsiegssiya], [Constants::qaacaqioeyiuakeu => true]); } } public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string { if (Constants::ackcaikowcokggsc === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie)) { $ooiewiwkegguusum = implode("\54", array_map("\x61\x62\163\151\156\164", $ywmkwiwkosakssii[Constants::ackcaikowcokggsc])); $sikaymiwcesagayc = "\x46\111\105\x4c\x44\x28\x74\56\x74\145\162\x6d\137\x69\x64\x2c\40{$ooiewiwkegguusum}\x29"; } return $sikaymiwcesagayc; } }
