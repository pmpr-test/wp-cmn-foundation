<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d3e38c782d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; class Author extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { global $wpdb; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::gqiasegggowomgie => Constants::NAME, Constants::eymwucuaaiiciymc => '', Constants::ccyeycyyykwuymsy => '', Constants::ackcaikowcokggsc => '', Constants::mkucwyayaakigquq => true, "\145\170\x63\x6c\x75\x64\x65\x5f\141\x64\x6d\151\x6e" => true]); $oekweckwiqmieous = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gymkigqseqemgeei($ywmkwiwkosakssii, [Constants::gqiasegggowomgie, Constants::awkcoioakcaougmq, Constants::eymwucuaaiiciymc, Constants::ccyeycyyykwuymsy, Constants::ackcaikowcokggsc]); $oekweckwiqmieous[Constants::ymckmcsiymwqucoq] = Constants::oyaoekcogwkcekcc; $gueemqeuuymqayqg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($oekweckwiqmieous); $gqgemcmoicmgaqie = $wpdb->get_results("\123\105\114\105\103\124\40\104\111\123\x54\x49\x4e\x43\x54\x20\x70\x6f\x73\x74\137\x61\x75\x74\x68\x6f\x72\x2c\40\103\x4f\125\116\x54\50\x49\104\x29\40\x41\123\x20\143\x6f\165\x6e\x74\12\11\11\x9\x46\122\x4f\x4d\x20{$wpdb->posts}\xa\11\11\x9\127\110\x45\x52\x45\x20" . $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->oyeigcesikakqqqi(Constants::mswoacegomcucaik) . "\xa\x9\x9\x9\x47\x52\x4f\125\x50\x20\102\x59\40\160\157\x73\x74\x5f\x61\165\164\150\157\162"); $suuagcecoyuweoqk = []; foreach ((array) $gqgemcmoicmgaqie as $keuwuekioomqqaey) { $gaeqamemwmwsyukm = $keuwuekioomqqaey->count; if ($ywmkwiwkosakssii[Constants::mkucwyayaakigquq] && $gaeqamemwmwsyukm < 1) { continue; } $qscaoekmoooeuyqg = $keuwuekioomqqaey->post_author; if (!in_array($qscaoekmoooeuyqg, $gueemqeuuymqayqg)) { continue; } $suuagcecoyuweoqk[$qscaoekmoooeuyqg] = $gaeqamemwmwsyukm; } return $suuagcecoyuweoqk; } }
