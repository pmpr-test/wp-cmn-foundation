<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             679154b81399c             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; class Attachment extends Common { public function oiucukewkckkwiqc($aiooqyausygaasqm) { return $this->call("\x77\x70\137\x67\145\x74\137\141\164\x74\141\143\150\x6d\145\x6e\164\137\165\x72\x6c", false, $aiooqyausygaasqm); } public function qucaqeskcaoqgkso($oiegiwogmwmawkeo = null) : array { $wyicceigkekkkwgs = wp_get_registered_image_subsizes(); if ($oiegiwogmwmawkeo) { return $wyicceigkekkkwgs[$oiegiwogmwmawkeo] ?? []; } return $wyicceigkekkkwgs; } public function ouaksagwsqimgqgy($eeamcawaiqocomwy) { return $this->call("\x61\164\164\141\143\150\x6d\x65\156\x74\x5f\165\162\154\x5f\x74\157\137\x70\x6f\163\x74\151\x64", 0, $eeamcawaiqocomwy); } public function ikocqgeqiykwwyqs($aiooqyausygaasqm) { return $this->call("\x67\145\164\137\x70\x6f\x73\x74\x5f\155\x69\155\x65\137\164\x79\160\x65", false, $aiooqyausygaasqm); } public function ksmqawcowkmegigw($aiooqyausygaasqm, $icwicymcioeyeyek) { return wp_update_attachment_metadata($aiooqyausygaasqm, $icwicymcioeyeyek); } public function auuqeeusymcgeiqi() : array { return wp_get_additional_image_sizes(); } public function aiiaeiaqiayooqyi() : array { return get_intermediate_image_sizes(); } public function is(string $sqeykgyoooqysmca, $aiooqyausygaasqm) : bool { return $this->call("\167\x70\x5f\x61\164\x74\141\x63\x68\155\145\x6e\164\137\151\163", false, $sqeykgyoooqysmca, $aiooqyausygaasqm); } public function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk) { return wp_generate_attachment_metadata($aiooqyausygaasqm, $qogsmwakwacwqogk); } public function qmgcisuuikgmqcsu($post, bool $mqsowqscuuoqyscy = false) : ?string { return get_attachment_link($post, $mqsowqscuuoqyscy); } public function kymakekgqcqyqgmy($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return wp_get_attachment_metadata($aiooqyausygaasqm, $beuoaqwyyugcgeas); } public function cqcsquysckuaewym($aiooqyausygaasqm) { return wp_get_attachment_caption($aiooqyausygaasqm); } public function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return get_attached_file($aiooqyausygaasqm, $beuoaqwyyugcgeas); } public function uikkssqcoewckces($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\164\x68\x75\x6d\x62\x6e\141\151\154", $wkaqekwwgqsqwcoi = false) { return wp_get_attachment_image_src($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function iaykyouimqoikagg($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\x68\165\155\142\x6e\141\x69\154", $wkaqekwwgqsqwcoi = false) { return wp_get_attachment_image_url($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo = "\x74\x68\165\155\142\156\x61\151\x6c", $wisgiwskwawciiee = [], $wkaqekwwgqsqwcoi = false) : string { return wp_get_attachment_image($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi, $wisgiwskwawciiee); } public function insert($ywmkwiwkosakssii, $qogsmwakwacwqogk = false, $omwmuycmeqcqokom = 0, $wpError = false, $kasykqiskucawsyc = true) { return wp_insert_attachment($ywmkwiwkosakssii, $qogsmwakwacwqogk, $omwmuycmeqcqokom, $wpError, $kasykqiskucawsyc); } public function iuwsgyqakicakuoq(string $wkcwykowmmmwioqs, ?array $gagiegssqiyawium = []) { return wp_getimagesize($wkcwykowmmmwioqs, $gagiegssqiyawium); } }
