<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7b479de2e4             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; class File extends Common { public function qmgqwkwkuqaguewu(string $wkcwykowmmmwioqs, $yawwowoqosismgyq = null) : array { return wp_check_filetype($wkcwykowmmmwioqs, $yawwowoqosismgyq); } public function kyaosugwqwiyocgc($qogsmwakwacwqogk) { if (!function_exists('wp_read_video_metadata')) { require_once ABSPATH . 'wp-admin/includes/media.php'; } return wp_read_video_metadata($qogsmwakwacwqogk); } public function mkakmgoaemygaomc(string $wkcwykowmmmwioqs, array $qiouiwasaauyaaue = []) { return wp_json_file_decode($wkcwykowmmmwioqs, $qiouiwasaauyaaue); } public function uqwwsygscmsoiwym(string $qogsmwakwacwqogk, string $smaiamkswqkisawm) : bool { return wp_delete_file_from_directory($qogsmwakwacwqogk, $smaiamkswqkisawm); } public function oemywwmmmiywiqai() : array { return wp_upload_dir(); } public function wayeasoyaomiwwmc() : string { return get_home_path(); } public function cgwcgscqeqauaagi($mkomwsiykqigmqca) : string { return wp_normalize_path($mkomwsiykqigmqca); } public function qsyguaycgacaggsu($qogsmwakwacwqogk = null, $qysuisecuceywamu = true, $cqgoimumaewouews = false) : array { if (!function_exists('wp_handle_sideload')) { include_once ABSPATH . 'wp-admin/includes/file.php'; } return wp_handle_sideload($qogsmwakwacwqogk, $qysuisecuceywamu, $cqgoimumaewouews); } }
