<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d0192bbd7b2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Post; use Pmpr\Common\Foundation\Interfaces\Constants; class Author extends Common { public function meqceykmywmqgoym($qscaoekmoooeuyqg) : string { return $this->uwkmaywceaaaigwo()->mguqscccckuywsya()->igawqaomowicuayw(Constants::eqkeooqcsscoggia, $qscaoekmoooeuyqg); } public function ciugwooasaqcywas(array $ywmkwiwkosakssii = []) : array { global $wpdb; $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::awkcoioakcaougmq => Constants::eeccqomoaqsawouy, Constants::gqiasegggowomgie => Constants::NAME, Constants::eymwucuaaiiciymc => '', Constants::ccyeycyyykwuymsy => '', Constants::ackcaikowcokggsc => '', Constants::mkucwyayaakigquq => true, 'exclude_admin' => true]); $oekweckwiqmieous = $this->uwkmaywceaaaigwo()->gyecsegqciqykomu()->gymkigqseqemgeei($ywmkwiwkosakssii, [Constants::gqiasegggowomgie, Constants::awkcoioakcaougmq, Constants::eymwucuaaiiciymc, Constants::ccyeycyyykwuymsy, Constants::ackcaikowcokggsc]); $oekweckwiqmieous[Constants::ymckmcsiymwqucoq] = Constants::oyaoekcogwkcekcc; $gueemqeuuymqayqg = $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->ciugwooasaqcywas($oekweckwiqmieous); $gqgemcmoicmgaqie = $wpdb->get_results("SELECT DISTINCT post_author, COUNT(ID) AS count\n\t\t\tFROM {$wpdb->posts}\n\t\t\tWHERE " . $this->uwkmaywceaaaigwo()->ayueggmoqeeukqmq()->oyeigcesikakqqqi(Constants::mswoacegomcucaik) . '
			GROUP BY post_author'); $suuagcecoyuweoqk = []; foreach ((array) $gqgemcmoicmgaqie as $keuwuekioomqqaey) { $gaeqamemwmwsyukm = $keuwuekioomqqaey->count; if ($ywmkwiwkosakssii[Constants::mkucwyayaakigquq] && $gaeqamemwmwsyukm < 1) { continue; } $qscaoekmoooeuyqg = $keuwuekioomqqaey->post_author; if (!in_array($qscaoekmoooeuyqg, $gueemqeuuymqayqg)) { continue; } $suuagcecoyuweoqk[$qscaoekmoooeuyqg] = $gaeqamemwmwsyukm; } return $suuagcecoyuweoqk; } public function uqwkkcooiakyeimy($qscaoekmoooeuyqg, string $kesssewsiegssiya, int $uuyoeicyoayimaoa) : array { global $wpdb; $qaqgaqikqmcmukem = $this->caokeucsksukesyo()->issssuygyewuaswa()->iooowgsqoyqseyuu($qscaoekmoooeuyqg); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $gqgemcmoicmgaqie = "\n\t\t\tSELECT DISTINCT tt.term_id, post_author, COUNT(ID) AS count\n\t        FROM {$wpdb->term_relationships} tr\n\t        INNER JOIN {$wpdb->term_taxonomy} tt ON tr.term_taxonomy_id = tt.term_taxonomy_id\n\t        INNER JOIN {$wpdb->terms} terms ON tt.term_id = terms.term_id\n\t        INNER JOIN {$wpdb->posts} posts ON tr.object_id = posts.ID\n\t        WHERE posts.post_author = %d \n\t        AND posts.post_status = 'publish'\n\t        AND tt.taxonomy = '%s'\n\t        GROUP BY terms.term_id\n\t        ORDER BY count DESC\n\t\t"; $ywmkwiwkosakssii = [$qaqgaqikqmcmukem, $kesssewsiegssiya]; if ($uuyoeicyoayimaoa > 0) { $gqgemcmoicmgaqie .= " LIMIT %d"; $ywmkwiwkosakssii[] = $uuyoeicyoayimaoa; } $gqgemcmoicmgaqie = $eqwoegegiamegqsm->prepare($gqgemcmoicmgaqie, ...$ywmkwiwkosakssii); return $eqwoegegiamegqsm->maewiqmcygmeuaso($gqgemcmoicmgaqie); } }
