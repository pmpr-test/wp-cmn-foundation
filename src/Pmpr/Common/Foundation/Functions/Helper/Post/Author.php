<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; class Author extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { global $wpdb; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::gqiasegggowomgie => Constants::NAME, Constants::eymwucuaaiiciymc => '', Constants::ccyeycyyykwuymsy => '', Constants::ackcaikowcokggsc => '', Constants::mkucwyayaakigquq => true, "\145\x78\143\154\x75\144\145\137\141\144\155\151\156" => true]); $oekweckwiqmieous = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gymkigqseqemgeei($ywmkwiwkosakssii, [Constants::gqiasegggowomgie, Constants::awkcoioakcaougmq, Constants::eymwucuaaiiciymc, Constants::ccyeycyyykwuymsy, Constants::ackcaikowcokggsc]); $oekweckwiqmieous[Constants::ymckmcsiymwqucoq] = Constants::oyaoekcogwkcekcc; $gueemqeuuymqayqg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($oekweckwiqmieous); $gqgemcmoicmgaqie = $wpdb->get_results("\123\105\x4c\105\103\124\x20\x44\111\123\x54\111\x4e\x43\124\x20\160\x6f\163\x74\137\x61\x75\x74\150\x6f\x72\x2c\40\x43\x4f\x55\116\x54\x28\x49\104\51\x20\x41\x53\40\143\x6f\x75\x6e\x74\12\x9\11\11\106\x52\x4f\115\x20{$wpdb->posts}\xa\x9\x9\x9\x57\x48\x45\122\105\40" . $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->oyeigcesikakqqqi(Constants::mswoacegomcucaik) . "\12\11\x9\11\x47\122\x4f\125\x50\x20\x42\131\40\x70\157\163\164\137\x61\x75\x74\150\157\162"); $suuagcecoyuweoqk = []; foreach ((array) $gqgemcmoicmgaqie as $keuwuekioomqqaey) { $gaeqamemwmwsyukm = $keuwuekioomqqaey->count; if (!($ywmkwiwkosakssii[Constants::mkucwyayaakigquq] && $gaeqamemwmwsyukm < 1)) { goto qwyoggysuwmawqoo; } goto euqaykgiqkmkaack; qwyoggysuwmawqoo: $qscaoekmoooeuyqg = $keuwuekioomqqaey->post_author; if (in_array($qscaoekmoooeuyqg, $gueemqeuuymqayqg)) { goto yegecewiqewskmgm; } goto euqaykgiqkmkaack; yegecewiqewskmgm: $suuagcecoyuweoqk[$qscaoekmoooeuyqg] = $gaeqamemwmwsyukm; euqaykgiqkmkaack: } cyguswquuckqoqcu: return $suuagcecoyuweoqk; } }
