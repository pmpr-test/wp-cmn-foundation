<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67cecaf054ce9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper\Post; class Attachment extends Common { public function delete($aiooqyausygaasqm, bool $cwwowqyuwccuykom = false) { return $this->call('wp_delete_attachment', false, $aiooqyausygaasqm, $cwwowqyuwccuykom); } public function oiucukewkckkwiqc($aiooqyausygaasqm) { return $this->call('wp_get_attachment_url', false, $aiooqyausygaasqm); } public function qucaqeskcaoqgkso($oiegiwogmwmawkeo = null) : array { $wyicceigkekkkwgs = wp_get_registered_image_subsizes(); if ($oiegiwogmwmawkeo) { return $wyicceigkekkkwgs[$oiegiwogmwmawkeo] ?? []; } return $wyicceigkekkkwgs; } public function ouaksagwsqimgqgy($eeamcawaiqocomwy) { return $this->call('attachment_url_to_postid', 0, $eeamcawaiqocomwy); } public function ikocqgeqiykwwyqs($aiooqyausygaasqm) { return $this->call('get_post_mime_type', false, $aiooqyausygaasqm); } public function ksmqawcowkmegigw($aiooqyausygaasqm, $icwicymcioeyeyek) { return wp_update_attachment_metadata($aiooqyausygaasqm, $icwicymcioeyeyek); } public function auuqeeusymcgeiqi() : array { return wp_get_additional_image_sizes(); } public function aiiaeiaqiayooqyi() : array { return get_intermediate_image_sizes(); } public function is(string $sqeykgyoooqysmca, $aiooqyausygaasqm) : bool { return $this->call('wp_attachment_is', false, $sqeykgyoooqysmca, $aiooqyausygaasqm); } public function smiqaaaecemiwugu($aiooqyausygaasqm, $qogsmwakwacwqogk) { return wp_generate_attachment_metadata($aiooqyausygaasqm, $qogsmwakwacwqogk); } public function qmgcisuuikgmqcsu($post, bool $mqsowqscuuoqyscy = false) : ?string { return get_attachment_link($post, $mqsowqscuuoqyscy); } public function kymakekgqcqyqgmy($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return wp_get_attachment_metadata($aiooqyausygaasqm, $beuoaqwyyugcgeas); } public function cqcsquysckuaewym($aiooqyausygaasqm) { return wp_get_attachment_caption($aiooqyausygaasqm); } public function ckoygqywcuqasqea($aiooqyausygaasqm, $beuoaqwyyugcgeas = false) { return get_attached_file($aiooqyausygaasqm, $beuoaqwyyugcgeas); } public function uikkssqcoewckces($cwgqkcumeaswoscu, $oiegiwogmwmawkeo = 'thumbnail', $wkaqekwwgqsqwcoi = false) { return wp_get_attachment_image_src($cwgqkcumeaswoscu, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function iaykyouimqoikagg($aiooqyausygaasqm, $oiegiwogmwmawkeo = 'thumbnail', $wkaqekwwgqsqwcoi = false) { return wp_get_attachment_image_url($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi); } public function qaeeusqkgwagwaqc($aiooqyausygaasqm, $oiegiwogmwmawkeo = 'thumbnail', $wisgiwskwawciiee = [], $wkaqekwwgqsqwcoi = false) : string { return wp_get_attachment_image($aiooqyausygaasqm, $oiegiwogmwmawkeo, $wkaqekwwgqsqwcoi, $wisgiwskwawciiee); } public function insert($ywmkwiwkosakssii, $qogsmwakwacwqogk = false, $omwmuycmeqcqokom = 0, $wpError = false, $kasykqiskucawsyc = true) { return wp_insert_attachment($ywmkwiwkosakssii, $qogsmwakwacwqogk, $omwmuycmeqcqokom, $wpError, $kasykqiskucawsyc); } public function iuwsgyqakicakuoq(string $wkcwykowmmmwioqs, ?array $gagiegssqiyawium = []) { return wp_getimagesize($wkcwykowmmmwioqs, $gagiegssqiyawium); } }
