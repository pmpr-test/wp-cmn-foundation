<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67bc35b0a9adb             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; class Author extends Common { public function meqceykmywmqgoym($qscaoekmoooeuyqg) : string { return $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->igawqaomowicuayw(Constants::eqkeooqcsscoggia, $qscaoekmoooeuyqg); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { global $wpdb; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::gqiasegggowomgie => Constants::NAME, Constants::eymwucuaaiiciymc => '', Constants::ccyeycyyykwuymsy => '', Constants::ackcaikowcokggsc => '', Constants::mkucwyayaakigquq => true, 'exclude_admin' => true]); $oekweckwiqmieous = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gymkigqseqemgeei($ywmkwiwkosakssii, [Constants::gqiasegggowomgie, Constants::awkcoioakcaougmq, Constants::eymwucuaaiiciymc, Constants::ccyeycyyykwuymsy, Constants::ackcaikowcokggsc]); $oekweckwiqmieous[Constants::ymckmcsiymwqucoq] = Constants::oyaoekcogwkcekcc; $gueemqeuuymqayqg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($oekweckwiqmieous); $gqgemcmoicmgaqie = $wpdb->get_results("SELECT DISTINCT post_author, COUNT(ID) AS count\n\t\t\tFROM {$wpdb->posts}\n\t\t\tWHERE " . $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->oyeigcesikakqqqi(Constants::mswoacegomcucaik) . '
			GROUP BY post_author'); $suuagcecoyuweoqk = []; foreach ((array) $gqgemcmoicmgaqie as $keuwuekioomqqaey) { $gaeqamemwmwsyukm = $keuwuekioomqqaey->count; if ($ywmkwiwkosakssii[Constants::mkucwyayaakigquq] && $gaeqamemwmwsyukm < 1) { continue; } $qscaoekmoooeuyqg = $keuwuekioomqqaey->post_author; if (!in_array($qscaoekmoooeuyqg, $gueemqeuuymqayqg)) { continue; } $suuagcecoyuweoqk[$qscaoekmoooeuyqg] = $gaeqamemwmwsyukm; } return $suuagcecoyuweoqk; } }
