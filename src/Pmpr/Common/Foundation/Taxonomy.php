<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d3647befc6             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; class Taxonomy extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\156\151\164", [$this, "\x6d\x6f\144\x69\x66\171"], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\145\x74\x5f\x74\x65\162\x6d\x73\137\141\162\147\163", [$this, "\x73\147\153\x69\x79\x65\167\x63\x6f\157\x67\x67\143\155\x6b\163"])->cecaguuoecmccuse("\147\145\164\137\164\145\162\155\163\137\157\x72\x64\x65\162\142\x79", [$this, "\153\165\157\x79\151\161\x69\165\x73\163\x65\x79\145\141\x65\141"], 10, 2); } public function modify() { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->ciugwooasaqcywas(); $vewwuwosemqiwyaw = $this->ocksiywmkyaqseou("\x74\x61\x78\157\x6e\157\155\x79\137\x73\x69\156\147\154\x65\x5f\x76\141\154\165\145\137\x6d\157\144\151\x66\171\x5f\151\x74\145\155\x73", []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $ymqmyyeuycgmigyo = $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu || in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw, true)) { if (!$qyucoagsiyeieyiu) { $kesssewsiegssiya->single_value = true; } if (false !== $kesssewsiegssiya->meta_box_cb) { $kesssewsiegssiya->meta_box_cb = [$this, "\x61\165\163\x79\155\155\x67\163\153\163\157\x71\x77\165\x71\153"]; $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\x79\x69\151\x69\161\145\167\x73\x73\x65\x79\x77\145\155\161\165"]; } $kesssewsiegssiya->rewrite[Constants::ikagyegqaweawkkc] = false; $cqcqsgykasiqwowi->register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya); } } } public function sgkiyewcooggcmks($ywmkwiwkosakssii) { if (is_admin()) { $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = Constants::gouqcwikiiygyasc; return $ywmkwiwkosakssii; } return $ywmkwiwkosakssii; } public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa) { if (is_array($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa); } else { if (is_string($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = [(int) $uyuaosigqymaqsaa]; } } return $uyuaosigqymaqsaa; } public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq) { if (!isset($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]) || !is_array($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac])) { $ywmkwiwkosakssii = []; } else { $ywmkwiwkosakssii = $uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($kesssewsiegssiya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gmmygyiecgmggaam)) { $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya); $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($kesssewsiegssiya); $ymmmmaiuoocagigk = $seumokooiykcomco->weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { $ymmmmaiuoocagigk = $gkyciwoiiisgywcs->get($ymmmmaiuoocagigk, 0); } $augiookssyeuewki = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec("\164\141\x78\x5f\151\156\160\x75\164\133{$ymqmyyeuycgmigyo}\x5d")->ikimooaieasgmeak($ymqmyyeuycgmigyo)->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, "\x74\141\x78\x5f\x69\x6e\x70\x75\164\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk); $augiookssyeuewki->kakecegieeqyyayu()->qigsyyqgewgskemg("\142\157\162\144\145\x72\55\142\157\170\x20\160\x2d\60"); if (!$qyucoagsiyeieyiu) { $augiookssyeuewki->oikgogcweiiaocka(); } $augiookssyeuewki = $augiookssyeuewki->render(); $cowauqqkuseckgyy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($ymqmyyeuycgmigyo, [Constants::ackcaikowcokggsc => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]); $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\155\145\164\141\137\142\x6f\170\x5f\x70\157\x70\x75\x6c\141\x72", [Constants::uiwqcumqkgikqyue => $cowauqqkuseckgyy, Constants::NAME => $ymqmyyeuycgmigyo]); $this->iuygowkemiiwqmiw("\155\x65\164\141\137\x62\x6f\x78\x5f\163\x69\x6e\x67\154\145\137\x76\x61\x6c\x75\x65", [Constants::okeuagwgwkmiokac => $this->caokeucsksukesyo()->kckogqkiycqeumoa()->esqgqsacwywoakok($kesssewsiegssiya, false), Constants::ugmwekegkosuuwii => $augiookssyeuewki, "\x70\x6f\160\x75\x6c\141\162" => $cowauqqkuseckgyy, "\145\155\160\164\x79\137\x6d\145\x73\x73\x61\x67\x65" => __("\x54\150\145\x72\x65\x20\x61\x72\x65\40\156\x6f\164\x20\x25\x73\x20\x79\x65\164\x2e", PR__CMN__FOUNDATION), Constants::NAME => $ymqmyyeuycgmigyo, Constants::mswoacegomcucaik => $seumokooiykcomco->iooowgsqoyqseyuu($post), Constants::gmmygyiecgmggaam => $kesssewsiegssiya], [Constants::qaacaqioeyiuakeu => true]); } } public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string { if (Constants::ackcaikowcokggsc === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie)) { $ooiewiwkegguusum = implode("\x2c", array_map("\141\x62\x73\x69\156\x74", $ywmkwiwkosakssii[Constants::ackcaikowcokggsc])); $sikaymiwcesagayc = "\x46\x49\x45\x4c\104\50\164\56\x74\145\x72\x6d\137\151\144\x2c\x20{$ooiewiwkegguusum}\x29"; } return $sikaymiwcesagayc; } }
