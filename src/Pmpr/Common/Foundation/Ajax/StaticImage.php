<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6723ec0bde9d3             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class StaticImage extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $somsiuiquigiqsmk = []; if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { $somsiuiquigiqsmk = $eqgoocgaqwqcimie; } else { $ucasskoyoewwmmii = scandir($this->kuuguugqciskeymq()); foreach ($ucasskoyoewwmmii as $qogsmwakwacwqogk) { if (strpos($qogsmwakwacwqogk, $icwicymcioeyeyek[Constants::yayciqueeakqwese]) !== false) { $somsiuiquigiqsmk[] = $qogsmwakwacwqogk; } } } return $somsiuiquigiqsmk; } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $qookweymeqawmcwo = [Constants::NAME => $igqsaukqcqscimok]; if ($yyimiwcuegayoskq = $this->uwkmaywceaaaigwo()->iqsmaqoiukeasukw()->iuwsgyqakicakuoq(trailingslashit($this->kuuguugqciskeymq()) . $igqsaukqcqscimok)) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $qookweymeqawmcwo = [Constants::NAME => $igqsaukqcqscimok, Constants::waguuiqqgsysuukq => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\142\151\x74\x73"), Constants::squoamkioomemiyi => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, "\x6d\151\x6d\145"), Constants::qomookamaskuoswk => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, 0), Constants::sogmkkcwuamuqegw => $gkyciwoiiisgywcs->get($yyimiwcuegayoskq, 1)]; } return $qookweymeqawmcwo; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $igqsaukqcqscimok; } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $igqsaukqcqscimok; } private function kuuguugqciskeymq() : string { return (string) $this->caokeucsksukesyo()->eiwcuqigayigimak()->cmaecekuqkwmemms("\x50\122\x5f\123\x54\x41\124\111\103\137\111\x4d\101\107\105\123\137\x50\101\x54\110"); } }
