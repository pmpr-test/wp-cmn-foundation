<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66fa76ba63557             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class StaticImage extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $somsiuiquigiqsmk = []; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { goto weecgesamaiayuqo; } $ucasskoyoewwmmii = scandir($this->kuuguugqciskeymq()); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (!(strpos($qogsmwakwacwqogk, $icwicymcioeyeyek[Constants::yayciqueeakqwese]) !== false)) { goto ucgagqogckeuiewi; } $somsiuiquigiqsmk[] = $qogsmwakwacwqogk; ucgagqogckeuiewi: gsyagiygoyamakyu: } caicmucqkokaecsg: goto eusygaeoggqeuuki; weecgesamaiayuqo: $somsiuiquigiqsmk = $eqgoocgaqwqcimie; eusygaeoggqeuuki: return $somsiuiquigiqsmk; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = [Constants::NAME => $igqsaukqcqscimok]; if (!($yyimiwcuegayoskq = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->iuwsgyqakicakuoq(trailingslashit($this->kuuguugqciskeymq()) . $igqsaukqcqscimok))) { goto skqiqqeyqokasmeg; } $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qookweymeqawmcwo = [Constants::NAME => $igqsaukqcqscimok, Constants::waguuiqqgsysuukq => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x62\x69\164\x73"), Constants::squoamkioomemiyi => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\155\x69\x6d\145"), Constants::qomookamaskuoswk => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, 0), Constants::sogmkkcwuamuqegw => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, 1)]; skqiqqeyqokasmeg: return $qookweymeqawmcwo; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $igqsaukqcqscimok; } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $igqsaukqcqscimok; } private function kuuguugqciskeymq() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\122\x5f\123\x54\101\x54\111\x43\x5f\111\x4d\101\107\105\x53\137\120\101\x54\x48"); } }
