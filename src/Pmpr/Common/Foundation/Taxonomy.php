<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67580c648b6e4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; class Taxonomy extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\164", [$this, "\x6d\157\144\x69\146\x79"], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\x74\137\x74\145\x72\x6d\x73\137\x61\162\147\x73", [$this, "\163\x67\153\151\171\x65\167\x63\157\x6f\x67\147\x63\155\x6b\163"])->cecaguuoecmccuse("\x67\x65\x74\137\x74\x65\x72\155\163\x5f\157\x72\144\x65\x72\x62\171", [$this, "\x6b\x75\157\x79\151\x71\151\x75\163\163\145\x79\145\x61\x65\141"], 10, 2); } public function modify() { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->ciugwooasaqcywas(); $vewwuwosemqiwyaw = $this->ocksiywmkyaqseou("\x74\x61\170\x6f\156\157\155\x79\137\x73\x69\156\147\x6c\x65\x5f\x76\x61\x6c\x75\x65\x5f\x6d\157\144\151\x66\171\137\151\x74\145\155\163", []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $ymqmyyeuycgmigyo = $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu || in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw, true)) { if (!$qyucoagsiyeieyiu) { $kesssewsiegssiya->single_value = true; } if (false !== $kesssewsiegssiya->meta_box_cb) { $kesssewsiegssiya->meta_box_cb = [$this, "\141\x75\163\171\x6d\155\147\x73\153\163\x6f\161\x77\x75\x71\153"]; $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\x79\x69\151\151\161\145\167\x73\163\x65\x79\167\145\155\161\x75"]; } $kesssewsiegssiya->rewrite[Constants::ikagyegqaweawkkc] = false; $cqcqsgykasiqwowi->register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya); } } } public function sgkiyewcooggcmks($ywmkwiwkosakssii) { if (is_admin()) { $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = Constants::gouqcwikiiygyasc; return $ywmkwiwkosakssii; } return $ywmkwiwkosakssii; } public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa) { if (is_array($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa); } else { if (is_string($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = [(int) $uyuaosigqymaqsaa]; } } return $uyuaosigqymaqsaa; } public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq) { if (!isset($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]) || !is_array($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac])) { $ywmkwiwkosakssii = []; } else { $ywmkwiwkosakssii = $uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($kesssewsiegssiya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gmmygyiecgmggaam)) { $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya); $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($kesssewsiegssiya); $ymmmmaiuoocagigk = $seumokooiykcomco->weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { $ymmmmaiuoocagigk = $gkyciwoiiisgywcs->get($ymmmmaiuoocagigk, 0); } $augiookssyeuewki = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec("\x74\141\x78\137\151\x6e\x70\165\x74\x5b{$ymqmyyeuycgmigyo}\135")->ikimooaieasgmeak($ymqmyyeuycgmigyo)->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, "\164\x61\170\x5f\151\x6e\160\x75\x74\x5f{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk); $augiookssyeuewki->kakecegieeqyyayu()->qigsyyqgewgskemg("\x62\x6f\x72\144\145\162\55\142\x6f\x78\40\x70\55\60"); if (!$qyucoagsiyeieyiu) { $augiookssyeuewki->oikgogcweiiaocka(); } $augiookssyeuewki = $augiookssyeuewki->render(); $cowauqqkuseckgyy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($ymqmyyeuycgmigyo, [Constants::ackcaikowcokggsc => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]); $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\155\145\x74\141\x5f\x62\157\170\137\x70\x6f\x70\165\x6c\x61\x72", [Constants::uiwqcumqkgikqyue => $cowauqqkuseckgyy, Constants::NAME => $ymqmyyeuycgmigyo]); $this->iuygowkemiiwqmiw("\x6d\x65\164\141\137\x62\157\170\x5f\x73\151\156\x67\154\145\x5f\x76\x61\x6c\165\145", [Constants::okeuagwgwkmiokac => $this->caokeucsksukesyo()->kckogqkiycqeumoa()->esqgqsacwywoakok($kesssewsiegssiya, false), Constants::ugmwekegkosuuwii => $augiookssyeuewki, "\x70\157\x70\165\x6c\141\x72" => $cowauqqkuseckgyy, "\145\x6d\160\164\x79\137\155\145\x73\x73\x61\x67\x65" => __("\124\150\x65\162\x65\x20\x61\x72\x65\x20\156\157\x74\40\x25\x73\x20\x79\145\x74\56", PR__CMN__FOUNDATION), Constants::NAME => $ymqmyyeuycgmigyo, Constants::mswoacegomcucaik => $seumokooiykcomco->iooowgsqoyqseyuu($post), Constants::gmmygyiecgmggaam => $kesssewsiegssiya], [Constants::qaacaqioeyiuakeu => true]); } } public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string { if (Constants::ackcaikowcokggsc === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie)) { $ooiewiwkegguusum = implode("\54", array_map("\x61\142\163\151\156\164", $ywmkwiwkosakssii[Constants::ackcaikowcokggsc])); $sikaymiwcesagayc = "\106\x49\105\x4c\104\50\x74\56\164\145\x72\x6d\137\151\144\54\40{$ooiewiwkegguusum}\x29"; } return $sikaymiwcesagayc; } }
