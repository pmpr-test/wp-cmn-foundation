<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; class Author extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { global $wpdb; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::gqiasegggowomgie => Constants::NAME, Constants::eymwucuaaiiciymc => '', Constants::ccyeycyyykwuymsy => '', Constants::ackcaikowcokggsc => '', Constants::mkucwyayaakigquq => true, "\x65\170\x63\x6c\x75\144\x65\137\x61\x64\x6d\x69\x6e" => true]); $oekweckwiqmieous = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gymkigqseqemgeei($ywmkwiwkosakssii, [Constants::gqiasegggowomgie, Constants::awkcoioakcaougmq, Constants::eymwucuaaiiciymc, Constants::ccyeycyyykwuymsy, Constants::ackcaikowcokggsc]); $oekweckwiqmieous[Constants::ymckmcsiymwqucoq] = Constants::oyaoekcogwkcekcc; $gueemqeuuymqayqg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($oekweckwiqmieous); $gqgemcmoicmgaqie = $wpdb->get_results("\123\x45\x4c\105\103\x54\40\104\x49\x53\x54\111\x4e\103\124\40\x70\x6f\x73\x74\x5f\141\165\x74\x68\157\162\54\40\103\x4f\125\x4e\124\x28\111\x44\51\x20\101\123\x20\x63\157\x75\156\x74\xa\x9\11\x9\106\122\117\115\x20{$wpdb->posts}\xa\11\11\11\127\x48\105\x52\x45\40" . $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->oyeigcesikakqqqi(Constants::mswoacegomcucaik) . "\12\11\x9\x9\107\x52\x4f\x55\x50\x20\102\x59\40\160\157\163\x74\137\x61\x75\x74\150\x6f\162"); $suuagcecoyuweoqk = []; foreach ((array) $gqgemcmoicmgaqie as $keuwuekioomqqaey) { $gaeqamemwmwsyukm = $keuwuekioomqqaey->count; if (!($ywmkwiwkosakssii[Constants::mkucwyayaakigquq] && $gaeqamemwmwsyukm < 1)) { goto uymqegkssemcqegk; } goto quecaykkiwwgqoay; uymqegkssemcqegk: $qscaoekmoooeuyqg = $keuwuekioomqqaey->post_author; if (in_array($qscaoekmoooeuyqg, $gueemqeuuymqayqg)) { goto mmmaegqwqsqomcso; } goto quecaykkiwwgqoay; mmmaegqwqsqomcso: $suuagcecoyuweoqk[$qscaoekmoooeuyqg] = $gaeqamemwmwsyukm; quecaykkiwwgqoay: } goemgwueaswqayue: return $suuagcecoyuweoqk; } }
