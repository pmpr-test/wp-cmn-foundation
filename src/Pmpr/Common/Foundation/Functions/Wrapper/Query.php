<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67051cac7bda7             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use WP_Post; use WP_Post_Type; use WP_Term; use WP_User; class Query extends Common { public function mcgoysmkqsqooceq() : bool { return $this->call("\x69\x73\137\x61\152\141\x78"); } public function wweuwcaqkkowawsy() : bool { return $this->call("\151\163\137\154\157\147\151\156"); } public function wiawmgagsakmamyc() { return $this->call("\167\x70\x5f\144\x6f\151\156\147\x5f\141\x6a\141\x78"); } public function csgmuqmouayyweiu() : bool { return $this->call("\167\x70\137\x64\157\x69\156\147\137\143\x72\x6f\156"); } public function mwyqswsaeeewsosm() : int { return $this->call("\147\145\x74\x5f\161\165\145\162\x69\x65\144\x5f\157\142\152\x65\143\x74\x5f\x69\144", 0); } public function imgymusqgccqsqqq() { return $this->call("\147\145\164\x5f\x71\165\145\162\151\x65\x64\x5f\157\x62\152\145\143\x74", null); } public function kgkwyuuwwyoskcsq() : bool { return $this->call("\151\x73\x5f\x6d\141\x69\x6e\137\161\165\145\x72\x79", false); } public function siiwuwaswckkuoya(bool $ygogqywsaqoukoqy = true) : string { return get_search_query($ygogqywsaqoukoqy); } public function kmmyuiwaogukwqqi() : bool { return $this->call("\151\x73\137\x34\60\64", false); } public function cukiusasccucgwqc($useksmwkuswkwcqg = '') : bool { return $this->call("\x69\x73\x5f\163\x69\156\147\165\x6c\x61\x72", false, $useksmwkuswkwcqg); } public function kccakwkaqugygwmq($post = '') : bool { return is_single($post); } public function ocwoeosukggumggw() : bool { return is_tag(); } public function mykygowqgwcuecua() : bool { return is_author(); } public function qmssqeyayicowkgy($kesssewsiegssiya = '', $iwewcwusemqaiggk = '') : bool { return is_tax($kesssewsiegssiya, $iwewcwusemqaiggk); } public function sgayqmgoigoseaoo($guwumyyyakswawas = '') : bool { return is_category($guwumyyyakswawas); } public function seokosgecygsmqau() : bool { return is_home(); } public function yqymaqmqiqmmmsoo(...$ywmkwiwkosakssii) : string { return add_query_arg(...$ywmkwiwkosakssii); } public function oiamiqcuyksmmomm(...$ywmkwiwkosakssii) { return remove_query_arg(...$ywmkwiwkosakssii); } public function qaumqeeagueuqkcg(string $gygawogosumsgmme, $ggauoeuaesiymgee = '') { return get_query_var($gygawogosumsgmme, $ggauoeuaesiymgee); } public function gouusicsisumuiei() : bool { return is_search(); } public function qwakseskocsyiyks() : bool { return is_year(); } public function oowkceqysamwygwu() : bool { return is_date(); } public function wqscegcksyocaias() : bool { return is_day(); } public function mgkmukikygowogsm() : bool { return is_month(); } public function migkyseymeomymmy() : bool { return is_archive(); } public function sskgaouyswsqywgk() : bool { return is_feed(); } public function goecwaaykqoaaagg() : bool { return is_admin(); } public function aiiuacceawqsiiya() : bool { return in_the_loop(); } public function esqicqsuigywkaqw() : bool { return is_paged(); } public function ksocgccowyqqmeii() : bool { return is_preview(); } public function yycwkigueqwacmic() : bool { return is_customize_preview(); } public function eyokaicigoeymwoo() : bool { return in_the_loop(); } public function cgquaaukmyeomgms() : bool { return wp_doing_cron(); } public function takycgcamoacksqw() : bool { return is_front_page(); } public function aauyuieeeaakygki() : bool { return is_attachment(); } public function sgeaogakoscmysgc($suaemuyiacqyugsm = null) : bool { return is_page($suaemuyiacqyugsm); } public function moegwqkekcawsggs($sqeykgyoooqysmca = '') : bool { return is_post_type_archive($sqeykgyoooqysmca); } }
