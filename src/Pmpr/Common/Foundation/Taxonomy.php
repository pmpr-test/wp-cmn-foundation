<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038c53dd59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; class Taxonomy extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\151\x6e\151\x74", [$this, "\x6d\157\144\x69\146\x79"], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\x67\x65\x74\137\x74\145\162\x6d\163\x5f\141\162\147\163", [$this, "\163\x67\x6b\151\171\145\x77\143\157\157\x67\x67\143\x6d\153\x73"])->cecaguuoecmccuse("\147\145\164\x5f\x74\145\162\155\x73\x5f\157\162\x64\145\162\142\171", [$this, "\153\x75\x6f\171\151\161\x69\165\163\x73\x65\171\145\x61\145\141"], 10, 2); } public function modify() { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->ciugwooasaqcywas(); $vewwuwosemqiwyaw = $this->ocksiywmkyaqseou("\164\141\x78\157\156\x6f\155\x79\137\163\x69\x6e\x67\x6c\x65\137\166\141\154\x75\145\137\155\x6f\144\x69\x66\171\137\x69\x74\x65\x6d\x73", []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $ymqmyyeuycgmigyo = $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu || in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw, true)) { if (!$qyucoagsiyeieyiu) { $kesssewsiegssiya->single_value = true; } if (false !== $kesssewsiegssiya->meta_box_cb) { $kesssewsiegssiya->meta_box_cb = [$this, "\141\x75\x73\x79\x6d\x6d\147\x73\153\x73\157\161\167\165\x71\153"]; $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\x79\x69\x69\151\x71\145\167\x73\163\x65\171\x77\x65\x6d\x71\165"]; } $kesssewsiegssiya->rewrite[Constants::ikagyegqaweawkkc] = false; $cqcqsgykasiqwowi->register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya); } } } public function sgkiyewcooggcmks($ywmkwiwkosakssii) { if (is_admin()) { $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = Constants::gouqcwikiiygyasc; return $ywmkwiwkosakssii; } return $ywmkwiwkosakssii; } public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa) { if (is_array($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa); } else { if (is_string($uyuaosigqymaqsaa)) { $uyuaosigqymaqsaa = [(int) $uyuaosigqymaqsaa]; } } return $uyuaosigqymaqsaa; } public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq) { if (!isset($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]) || !is_array($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac])) { $ywmkwiwkosakssii = []; } else { $ywmkwiwkosakssii = $uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if ($kesssewsiegssiya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gmmygyiecgmggaam)) { $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya); $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($kesssewsiegssiya); $ymmmmaiuoocagigk = $seumokooiykcomco->weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if ($qyucoagsiyeieyiu) { $ymmmmaiuoocagigk = $gkyciwoiiisgywcs->get($ymmmmaiuoocagigk, 0); } $augiookssyeuewki = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec("\164\x61\170\137\x69\156\x70\165\x74\x5b{$ymqmyyeuycgmigyo}\x5d")->ikimooaieasgmeak($ymqmyyeuycgmigyo)->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, "\164\x61\170\137\x69\156\160\165\164\137{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk); $augiookssyeuewki->kakecegieeqyyayu()->qigsyyqgewgskemg("\142\157\162\x64\145\162\55\x62\157\x78\x20\x70\x2d\x30"); if (!$qyucoagsiyeieyiu) { $augiookssyeuewki->oikgogcweiiaocka(); } $augiookssyeuewki = $augiookssyeuewki->render(); $cowauqqkuseckgyy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($ymqmyyeuycgmigyo, [Constants::ackcaikowcokggsc => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]); $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\x6d\x65\164\141\x5f\x62\x6f\x78\x5f\160\157\160\x75\x6c\x61\162", [Constants::uiwqcumqkgikqyue => $cowauqqkuseckgyy, Constants::NAME => $ymqmyyeuycgmigyo]); $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\137\142\157\x78\x5f\163\151\156\147\154\x65\x5f\166\141\154\x75\145", [Constants::okeuagwgwkmiokac => $this->caokeucsksukesyo()->kckogqkiycqeumoa()->esqgqsacwywoakok($kesssewsiegssiya, false), Constants::ugmwekegkosuuwii => $augiookssyeuewki, "\x70\157\160\x75\x6c\141\x72" => $cowauqqkuseckgyy, "\x65\x6d\160\x74\x79\137\155\x65\x73\x73\141\147\145" => __("\x54\x68\x65\162\x65\x20\x61\x72\145\x20\x6e\157\x74\40\45\163\40\x79\145\x74\x2e", PR__CMN__FOUNDATION), Constants::NAME => $ymqmyyeuycgmigyo, Constants::mswoacegomcucaik => $seumokooiykcomco->iooowgsqoyqseyuu($post), Constants::gmmygyiecgmggaam => $kesssewsiegssiya], [Constants::qaacaqioeyiuakeu => true]); } } public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string { if (Constants::ackcaikowcokggsc === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie)) { $ooiewiwkegguusum = implode("\x2c", array_map("\141\142\163\x69\x6e\x74", $ywmkwiwkosakssii[Constants::ackcaikowcokggsc])); $sikaymiwcesagayc = "\106\111\105\x4c\104\50\164\56\164\145\162\x6d\x5f\x69\x64\x2c\40{$ooiewiwkegguusum}\x29"; } return $sikaymiwcesagayc; } }
