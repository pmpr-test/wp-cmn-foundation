<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e17b763d23d             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class StaticImage extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $somsiuiquigiqsmk = []; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { goto wcwsogoecyummieu; } $ucasskoyoewwmmii = scandir($this->kuuguugqciskeymq()); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(strpos($qogsmwakwacwqogk, $icwicymcioeyeyek[Constants::yayciqueeakqwese]) !== false)) { goto cqiuouaccqyaiogc; } $somsiuiquigiqsmk[] = $qogsmwakwacwqogk; cqiuouaccqyaiogc: moqoommaoiemcoqk: } ysgecwqkekegmywg: goto ycaqgqcgsaogwqey; wcwsogoecyummieu: $somsiuiquigiqsmk = $eqgoocgaqwqcimie; ycaqgqcgsaogwqey: return $somsiuiquigiqsmk; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = [Constants::NAME => $igqsaukqcqscimok]; if (!($yyimiwcuegayoskq = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->iuwsgyqakicakuoq(trailingslashit($this->kuuguugqciskeymq()) . $igqsaukqcqscimok))) { goto eugsieawaqqskgam; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qookweymeqawmcwo = [Constants::NAME => $igqsaukqcqscimok, Constants::waguuiqqgsysuukq => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x62\151\164\163"), Constants::squoamkioomemiyi => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\155\151\155\145"), Constants::qomookamaskuoswk => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, 0), Constants::sogmkkcwuamuqegw => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, 1)]; eugsieawaqqskgam: return $qookweymeqawmcwo; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $igqsaukqcqscimok; } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $igqsaukqcqscimok; } private function kuuguugqciskeymq() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\x52\137\x53\124\x41\x54\x49\103\x5f\111\115\101\x47\105\x53\x5f\x50\101\x54\110"); } }
