<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             678038c53dd59             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; class Attachment extends Common { public function oiucukewkckkwiqc($aiooqyausygaasqm) { return $this->call("\x77\x70\137\147\145\164\137\141\164\164\141\x63\150\155\x65\x6e\x74\137\165\162\154", false, $aiooqyausygaasqm); } public function qucaqeskcaoqgkso($oiegiwogmwmawkeo = null) : array { $wyicceigkekkkwgs = wp_get_registered_image_subsizes(); if ($oiegiwogmwmawkeo) { return $wyicceigkekkkwgs[$oiegiwogmwmawkeo] ?? []; } return $wyicceigkekkkwgs; } public function ouaksagwsqimgqgy($eeamcawaiqocomwy) { return $this->call("\141\x74\164\x61\x63\x68\x6d\145\156\x74\137\x75\162\154\137\164\157\x5f\x70\x6f\x73\164\151\144", 0, $eeamcawaiqocomwy); } public function ikocqgeqiykwwyqs($aiooqyausygaasqm) { return $this->call("\147\x65\164\137\x70\x6f\x73\164\x5f\x6d\x69\155\145\137\164\x79\x70\x65", false, $aiooqyausygaasqm); } public function ksmqawcowkmegigw($aiooqyausygaasqm, $icwicymcioeyeyek) { return wp_update_attachment_metadata($aiooqyausygaasqm, $icwicymcioeyeyek); } public function auuqeeusymcgeiqi() : array { return wp_get_additional_image_sizes(); } public function aiiaeiaqiayooqyi() : array { return get_intermediate_image_sizes(); } public function is(string $sqeykgyoooqysmca, $aiooqyausygaasqm) : bool { return $this->call("\167\160\137\141\164\x74\141\143\150\155\x65\156\164\137\151\x73", false, $sqeykgyoooqysmca, $aiooqyausygaasqm); } public function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk) { return wp_generate_attachment_metadata($aiooqyausygaasqm, $qogsmwakwacwqogk); } public function qmgcisuuikgmqcsu($post, bool $mqsowqscuuoqyscy = false) : ?string { return get_attachment_link($post, $mqsowqscuuoqyscy); } public function kymakekgqcqyqgmy($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return wp_get_attachment_metadata($aiooqyausygaasqm, $beuoaqwyyugcgeas); } public function cqcsquysckuaewym($aiooqyausygaasqm) { return wp_get_attachment_caption($aiooqyausygaasqm); } public function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return get_attached_file($aiooqyausygaasqm, $beuoaqwyyugcgeas); } public function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\150\x75\155\142\x6e\141\151\x6c", $wkaqekwwgqsqwcoi = false) { return wp_get_attachment_image_src($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function iaykyouimqoikagg($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\x68\165\x6d\x62\156\141\151\154", $wkaqekwwgqsqwcoi = false) { return wp_get_attachment_image_url($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\150\165\x6d\x62\x6e\x61\x69\154", $wisgiwskwawciiee = [], $wkaqekwwgqsqwcoi = false) : string { return wp_get_attachment_image($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi, $wisgiwskwawciiee); } public function insert($ywmkwiwkosakssii, $qogsmwakwacwqogk = false, $omwmuycmeqcqokom = 0, $wpError = false, $kasykqiskucawsyc = true) { return wp_insert_attachment($ywmkwiwkosakssii, $qogsmwakwacwqogk, $omwmuycmeqcqokom, $wpError, $kasykqiskucawsyc); } public function iuwsgyqakicakuoq(string $wkcwykowmmmwioqs, ?array $gagiegssqiyawium = []) { return wp_getimagesize($wkcwykowmmmwioqs, $gagiegssqiyawium); } }
