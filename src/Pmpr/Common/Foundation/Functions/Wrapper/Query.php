<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae192c055a             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use WP_Post; use WP_Post_Type; use WP_Term; use WP_User; class Query extends Common { public function mcgoysmkqsqooceq() : bool { return $this->call("\x69\x73\x5f\x61\x6a\141\170"); } public function wweuwcaqkkowawsy() : bool { return $this->call("\151\x73\137\x6c\x6f\147\x69\x6e"); } public function wiawmgagsakmamyc() { return $this->call("\x77\160\137\144\157\x69\x6e\x67\x5f\x61\x6a\141\170"); } public function csgmuqmouayyweiu() : bool { return $this->call("\x77\160\x5f\x64\x6f\x69\156\147\x5f\x63\x72\157\x6e"); } public function mwyqswsaeeewsosm() : int { return $this->call("\x67\145\x74\137\161\165\x65\162\x69\145\144\x5f\x6f\x62\x6a\x65\143\164\137\151\144", 0); } public function imgymusqgccqsqqq() { return $this->call("\x67\145\x74\137\161\165\x65\162\151\145\144\x5f\x6f\x62\x6a\145\143\164", null); } public function kgkwyuuwwyoskcsq() : bool { return $this->call("\x69\163\x5f\155\x61\x69\156\137\161\165\145\x72\x79", false); } public function siiwuwaswckkuoya(bool $ygogqywsaqoukoqy = true) : string { return get_search_query($ygogqywsaqoukoqy); } public function kmmyuiwaogukwqqi() : bool { return $this->call("\151\x73\x5f\x34\x30\x34", false); } public function cukiusasccucgwqc($useksmwkuswkwcqg = '') : bool { return $this->call("\151\163\137\163\x69\x6e\x67\165\154\141\162", false, $useksmwkuswkwcqg); } public function kccakwkaqugygwmq($post = '') : bool { return is_single($post); } public function ocwoeosukggumggw() : bool { return is_tag(); } public function mykygowqgwcuecua() : bool { return is_author(); } public function qmssqeyayicowkgy($kesssewsiegssiya = '', $iwewcwusemqaiggk = '') : bool { return is_tax($kesssewsiegssiya, $iwewcwusemqaiggk); } public function sgayqmgoigoseaoo($guwumyyyakswawas = '') : bool { return is_category($guwumyyyakswawas); } public function seokosgecygsmqau() : bool { return is_home(); } public function yqymaqmqiqmmmsoo(...$ywmkwiwkosakssii) : string { return add_query_arg(...$ywmkwiwkosakssii); } public function oiamiqcuyksmmomm(...$ywmkwiwkosakssii) { return remove_query_arg(...$ywmkwiwkosakssii); } public function qaumqeeagueuqkcg(string $gygawogosumsgmme, $ggauoeuaesiymgee = '') { return get_query_var($gygawogosumsgmme, $ggauoeuaesiymgee); } public function gouusicsisumuiei() : bool { return is_search(); } public function qwakseskocsyiyks() : bool { return is_year(); } public function oowkceqysamwygwu() : bool { return is_date(); } public function wqscegcksyocaias() : bool { return is_day(); } public function mgkmukikygowogsm() : bool { return is_month(); } public function migkyseymeomymmy() : bool { return is_archive(); } public function sskgaouyswsqywgk() : bool { return is_feed(); } public function goecwaaykqoaaagg() : bool { return is_admin(); } public function aiiuacceawqsiiya() : bool { return in_the_loop(); } public function esqicqsuigywkaqw() : bool { return is_paged(); } public function ksocgccowyqqmeii() : bool { return is_preview(); } public function yycwkigueqwacmic() : bool { return is_customize_preview(); } public function eyokaicigoeymwoo() : bool { return in_the_loop(); } public function cgquaaukmyeomgms() : bool { return wp_doing_cron(); } public function takycgcamoacksqw() : bool { return is_front_page(); } public function aauyuieeeaakygki() : bool { return is_attachment(); } public function sgeaogakoscmysgc($suaemuyiacqyugsm = null) : bool { return is_page($suaemuyiacqyugsm); } public function moegwqkekcawsggs($sqeykgyoooqysmca = '') : bool { return is_post_type_archive($sqeykgyoooqysmca); } }
