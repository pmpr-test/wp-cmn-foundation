<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             677fc4e36cacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; class Author extends Common { public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { global $wpdb; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::gqiasegggowomgie => Constants::NAME, Constants::eymwucuaaiiciymc => '', Constants::ccyeycyyykwuymsy => '', Constants::ackcaikowcokggsc => '', Constants::mkucwyayaakigquq => true, "\x65\170\x63\154\x75\144\x65\137\141\144\155\151\156" => true]); $oekweckwiqmieous = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gymkigqseqemgeei($ywmkwiwkosakssii, [Constants::gqiasegggowomgie, Constants::awkcoioakcaougmq, Constants::eymwucuaaiiciymc, Constants::ccyeycyyykwuymsy, Constants::ackcaikowcokggsc]); $oekweckwiqmieous[Constants::ymckmcsiymwqucoq] = Constants::oyaoekcogwkcekcc; $gueemqeuuymqayqg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($oekweckwiqmieous); $gqgemcmoicmgaqie = $wpdb->get_results("\123\x45\x4c\105\x43\x54\x20\104\x49\x53\x54\111\x4e\x43\x54\x20\x70\157\163\x74\x5f\141\x75\x74\150\x6f\162\x2c\x20\x43\x4f\x55\x4e\124\50\x49\104\x29\40\101\123\40\x63\157\x75\156\164\12\11\11\x9\x46\x52\117\x4d\x20{$wpdb->posts}\12\x9\11\x9\127\110\105\x52\105\40" . $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->oyeigcesikakqqqi(Constants::mswoacegomcucaik) . "\xa\11\11\11\107\122\117\125\x50\40\102\x59\x20\x70\157\163\164\x5f\141\x75\x74\x68\157\x72"); $suuagcecoyuweoqk = []; foreach ((array) $gqgemcmoicmgaqie as $keuwuekioomqqaey) { $gaeqamemwmwsyukm = $keuwuekioomqqaey->count; if ($ywmkwiwkosakssii[Constants::mkucwyayaakigquq] && $gaeqamemwmwsyukm < 1) { continue; } $qscaoekmoooeuyqg = $keuwuekioomqqaey->post_author; if (!in_array($qscaoekmoooeuyqg, $gueemqeuuymqayqg)) { continue; } $suuagcecoyuweoqk[$qscaoekmoooeuyqg] = $gaeqamemwmwsyukm; } return $suuagcecoyuweoqk; } }
