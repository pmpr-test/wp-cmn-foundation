<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f43a6c2def5             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation; use Pmpr\Common\Foundation\Container\Container; use Pmpr\Common\Foundation\Convert\Type\ConvertArray; use Pmpr\Common\Foundation\Interfaces\Constants; class Taxonomy extends Container { public function wigskegsqequoeks() { $this->qcsmikeggeemccuu("\x69\x6e\x69\x74", [$this, "\x6d\x6f\x64\x69\146\x79"], PHP_INT_MAX); } public function kgquecmsgcouyaya() { $this->cecaguuoecmccuse("\147\x65\x74\x5f\164\145\162\155\x73\137\x61\162\x67\163", [$this, "\x73\x67\153\151\x79\x65\x77\x63\157\157\147\x67\x63\155\x6b\x73"])->cecaguuoecmccuse("\147\x65\x74\x5f\164\145\162\x6d\x73\137\x6f\x72\144\x65\162\142\171", [$this, "\x6b\x75\x6f\171\151\x71\151\165\x73\163\x65\171\145\141\145\x61"], 10, 2); } public function modify() { $mqeowykqcggsieya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee(); $seyqqsmuaiegkeeq = $mqeowykqcggsieya->ciugwooasaqcywas(); $vewwuwosemqiwyaw = $this->ocksiywmkyaqseou("\164\x61\x78\x6f\x6e\x6f\155\x79\x5f\163\151\x6e\x67\x6c\x65\x5f\166\141\x6c\x75\145\137\155\157\144\x69\146\x79\x5f\151\x74\x65\x6d\163", []); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $cqcqsgykasiqwowi = $this->uwkmaywceaaaigwo()->yyoeeseewqmmyaee(); foreach ($seyqqsmuaiegkeeq as $kesssewsiegssiya) { $ymqmyyeuycgmigyo = $mqeowykqcggsieya->aakmagwggmkoiiyu($kesssewsiegssiya); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if (!($qyucoagsiyeieyiu || in_array($ymqmyyeuycgmigyo, $vewwuwosemqiwyaw, true))) { goto cwogqueiqawomkuc; } if ($qyucoagsiyeieyiu) { goto caeuciiioaqyuyug; } $kesssewsiegssiya->single_value = true; caeuciiioaqyuyug: if (!(false !== $kesssewsiegssiya->meta_box_cb)) { goto egkscycmsoysyukk; } $kesssewsiegssiya->meta_box_cb = [$this, "\141\165\163\171\x6d\155\x67\163\x6b\x73\157\161\x77\x75\x71\x6b"]; $kesssewsiegssiya->meta_box_sanitize_cb = [$this, "\171\151\x69\x69\x71\145\167\163\163\145\x79\x77\x65\155\x71\165"]; egkscycmsoysyukk: $kesssewsiegssiya->rewrite[Constants::ikagyegqaweawkkc] = false; $cqcqsgykasiqwowi->register(substr($kesssewsiegssiya->name, 0, 32), $kesssewsiegssiya->object_type, (array) $kesssewsiegssiya); cwogqueiqawomkuc: mcamcymgukiawmca: } askmmowgaoaeucmg: } public function sgkiyewcooggcmks($ywmkwiwkosakssii) { if (!is_admin()) { goto waekkoqkywowucqm; } $ywmkwiwkosakssii[Constants::gqiasegggowomgie] = Constants::gouqcwikiiygyasc; return $ywmkwiwkosakssii; waekkoqkywowucqm: return $ywmkwiwkosakssii; } public function yiiiqewsseywemqu($kesssewsiegssiya, $uyuaosigqymaqsaa) { if (is_array($uyuaosigqymaqsaa)) { goto qyauskeceyuommay; } if (!is_string($uyuaosigqymaqsaa)) { goto iyyoksuqkyayycyo; } $uyuaosigqymaqsaa = [(int) $uyuaosigqymaqsaa]; iyyoksuqkyayycyo: goto skuiqymemkkmcasa; qyauskeceyuommay: $uyuaosigqymaqsaa = ConvertArray::comkeiiwgwaqmcwe($uyuaosigqymaqsaa); skuiqymemkkmcasa: return $uyuaosigqymaqsaa; } public function ausymmgsksoqwuqk($post, $uoeiskamgscgeccq) { if (!isset($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]) || !is_array($uoeiskamgscgeccq[Constants::okeuagwgwkmiokac])) { goto mgqoggoasugsqoqm; } $ywmkwiwkosakssii = $uoeiskamgscgeccq[Constants::okeuagwgwkmiokac]; goto gquwcimccausouey; mgqoggoasugsqoqm: $ywmkwiwkosakssii = []; gquwcimccausouey: $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); if (!($kesssewsiegssiya = $gkyciwoiiisgywcs->get($ywmkwiwkosakssii, Constants::gmmygyiecgmggaam))) { goto rayeowssukccumsa; } $ymqmyyeuycgmigyo = esc_attr($kesssewsiegssiya); $kesssewsiegssiya = $this->caokeucsksukesyo()->yyoeeseewqmmyaee()->imgymusqgccqsqqq($kesssewsiegssiya); $ymmmmaiuoocagigk = $seumokooiykcomco->weescwwgqgiyumyw($post, $ymqmyyeuycgmigyo, [Constants::ymckmcsiymwqucoq => Constants::oyaoekcogwkcekcc]); $qyucoagsiyeieyiu = $gkyciwoiiisgywcs->get($kesssewsiegssiya, Constants::ckskigqewkgmyeog); if (!$qyucoagsiyeieyiu) { goto kwocuyyugaqsicqy; } $ymmmmaiuoocagigk = $gkyciwoiiisgywcs->get($ymmmmaiuoocagigk, 0); kwocuyyugaqsicqy: $augiookssyeuewki = $this->caokeucsksukesyo()->wmkogisswkckmeua()->mccagaqeagiikkec("\x74\x61\x78\x5f\x69\x6e\160\165\164\x5b{$ymqmyyeuycgmigyo}\x5d")->ikimooaieasgmeak($ymqmyyeuycgmigyo)->qcgocuceocquqcuw(Constants::gouqcwikiiygyasc, "\x74\x61\x78\x5f\151\156\x70\165\164\x5f{$ymqmyyeuycgmigyo}")->iygyugseyaqwywyg($ymmmmaiuoocagigk); $augiookssyeuewki->kakecegieeqyyayu()->qigsyyqgewgskemg("\x62\157\x72\144\x65\x72\x2d\x62\x6f\170\40\x70\55\60"); if ($qyucoagsiyeieyiu) { goto ckcsasciyamuyeak; } $augiookssyeuewki->oikgogcweiiaocka(); ckcsasciyamuyeak: $augiookssyeuewki = $augiookssyeuewki->render(); $cowauqqkuseckgyy = $this->caokeucsksukesyo()->kckogqkiycqeumoa()->ciugwooasaqcywas($ymqmyyeuycgmigyo, [Constants::ackcaikowcokggsc => wp_popular_terms_checklist($ymqmyyeuycgmigyo, 0, 0, false)]); $cowauqqkuseckgyy = $this->iuygowkemiiwqmiw("\x6d\x65\x74\141\137\142\x6f\x78\137\160\157\160\165\x6c\141\x72", [Constants::uiwqcumqkgikqyue => $cowauqqkuseckgyy, Constants::NAME => $ymqmyyeuycgmigyo]); $this->iuygowkemiiwqmiw("\x6d\145\x74\141\137\142\157\x78\x5f\163\151\x6e\x67\x6c\145\x5f\x76\x61\x6c\165\x65", [Constants::okeuagwgwkmiokac => $this->caokeucsksukesyo()->kckogqkiycqeumoa()->esqgqsacwywoakok($kesssewsiegssiya, false), Constants::ugmwekegkosuuwii => $augiookssyeuewki, "\x70\157\160\x75\x6c\x61\162" => $cowauqqkuseckgyy, "\145\155\x70\x74\x79\x5f\x6d\x65\163\163\141\147\145" => __("\124\x68\145\162\x65\x20\141\x72\145\40\156\157\164\40\45\x73\40\x79\145\x74\56", PR__CMN__FOUNDATION), Constants::NAME => $ymqmyyeuycgmigyo, Constants::mswoacegomcucaik => $seumokooiykcomco->iooowgsqoyqseyuu($post), Constants::gmmygyiecgmggaam => $kesssewsiegssiya], [Constants::qaacaqioeyiuakeu => true]); rayeowssukccumsa: } public function kuoyiqiusseyeaea($sikaymiwcesagayc, $ywmkwiwkosakssii) : string { if (!(Constants::ackcaikowcokggsc === $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($ywmkwiwkosakssii, Constants::gqiasegggowomgie))) { goto aumiwewkmkcyqsic; } $ooiewiwkegguusum = implode("\x2c", array_map("\141\142\163\151\156\x74", $ywmkwiwkosakssii[Constants::ackcaikowcokggsc])); $sikaymiwcesagayc = "\106\111\105\x4c\x44\x28\164\x2e\x74\x65\162\x6d\137\151\144\x2c\40{$ooiewiwkegguusum}\51"; aumiwewkmkcyqsic: return $sikaymiwcesagayc; } }
