<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e1666776f24             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Wrapper; use WP_Scripts; use WP_Styles; class Asset extends Common { public function uusyqwgeiuicmasq() : ?WP_Styles { return $this->call('wp_styles', null); } public function jokqcscsomkceomu() : ?WP_Scripts { return $this->call('wp_scripts', null); } public function kwcmyyyeiegememu(string $eueuqacmukymcyya, string $suuagcecoyuweoqk = 'enqueued') : bool { return $this->call('wp_script_is', false, $eueuqacmukymcyya, $suuagcecoyuweoqk); } public function cawwmsmyseesuyee($eueuqacmukymcyya) { $this->call('wp_deregister_script', false, $eueuqacmukymcyya); } public function iqmcmgkyssqgoqok($eueuqacmukymcyya) { $this->call('wp_deregister_style', false, $eueuqacmukymcyya); } public function akwgkmcqykmiyayg(array $ywmkwiwkosakssii = []) { return $this->call('wp_enqueue_media', false, $ywmkwiwkosakssii); } public function oumggauwkogiasak(array $ywmkwiwkosakssii = []) { return $this->call('wp_enqueue_editor', false, $ywmkwiwkosakssii); } public function ousmawwywumikwwc(array $ywmkwiwkosakssii = []) { return $this->call('wp_enqueue_code_editor', false, $ywmkwiwkosakssii); } public function fowiaymccsmewemu(string $eueuqacmukymcyya, string $uakeqkmiycukseey, array $kuomuqkiouseymgq) : bool { return $this->call('wp_localize_script', false, $eueuqacmukymcyya, $uakeqkmiycukseey, $kuomuqkiouseymgq); } public function qkyugogwegiuiime(string $eueuqacmukymcyya) { $this->call('wp_dequeue_style', false, $eueuqacmukymcyya); } public function saisougiwmauksiy(string $eueuqacmukymcyya) { $this->call('wp_dequeue_script', false, $eueuqacmukymcyya); } public function keecueggosiqseiw(string $eueuqacmukymcyya, string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : bool { return $this->call('wp_script_add_data', false, $eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function ciuuyygmkuwgoiki(string $eueuqacmukymcyya, string $uusmaiomayssaecw, $eqgoocgaqwqcimie) : bool { return $this->call('wp_style_add_data', false, $eueuqacmukymcyya, $uusmaiomayssaecw, $eqgoocgaqwqcimie); } public function myyikeyuuomqoyew(string $eueuqacmukymcyya, $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = 'all') { $this->call('wp_enqueue_style', false, $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso); } public function mkaaikgsosqiaiqg(string $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $qsmqqqccagyuaiso = 'all') : bool { return $this->call('wp_register_style', false, $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $qsmqqqccagyuaiso); } public function oiqqguakwcieaioo(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '') : bool { return $this->call('wp_add_inline_style', false, $eueuqacmukymcyya, $icwicymcioeyeyek); } public function imsomwwswyoquoqk(string $eueuqacmukymcyya, ?string $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = null, $siucegisggggeiei = true) { $this->call('wp_enqueue_script', false, $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $siucegisggggeiei); } public function wyouyuiqisgqwgww(string $eueuqacmukymcyya, ?string $ogomymegcoacqisg = '', $ugmuiugkaygmsagq = [], $cksswamugeeeawgw = false, $siucegisggggeiei = true) : bool { return $this->call('wp_register_script', false, $eueuqacmukymcyya, $ogomymegcoacqisg, $ugmuiugkaygmsagq, $cksswamugeeeawgw, $siucegisggggeiei); } public function yocqwqycwegayowg(string $eueuqacmukymcyya, ?string $icwicymcioeyeyek = '', string $kuuiuigeacouwmaa = 'after') : bool { return $this->call('wp_add_inline_script', false, $eueuqacmukymcyya, $icwicymcioeyeyek, $kuuiuigeacouwmaa); } }
