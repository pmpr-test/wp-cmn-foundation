<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e169394df54             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Comment extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $ywmkwiwkosakssii = $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]; if (!isset($ywmkwiwkosakssii[Constants::ciywsqoeiymemsys])) { $ywmkwiwkosakssii[Constants::ciywsqoeiymemsys] = Constants::eucymkqyykekuymy; } $ywmkwiwkosakssii = $this->ocksiywmkyaqseou('get_comments_args', $ywmkwiwkosakssii); if ($eqgoocgaqwqcimie = $icwicymcioeyeyek[Constants::ciyoccqkiamemcmm]) { $ywmkwiwkosakssii[Constants::imskwqekukykaqwk] = $eqgoocgaqwqcimie; } else { if ($gcqseksiskwueksc = $ywmkwiwkosakssii[Constants::squoamkioomemiyi]) { $ywmkwiwkosakssii[Constants::kqigmeickowqiiyy] = $gcqseksiskwueksc; } else { $ywmkwiwkosakssii[Constants::yayciqueeakqwese] = $icwicymcioeyeyek[Constants::yayciqueeakqwese]; } } return $this->caokeucsksukesyo()->yagekskwwyqosqcs()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function rsysgcucogueguuk($igqsaukqcqscimok, string $qqscaoyqikuyeoaw) : array { $kuowggqsyksiyygi = $this->caokeucsksukesyo()->yagekskwwyqosqcs(); return [Constants::gouqcwikiiygyasc => $kuowggqsyksiyygi->iooowgsqoyqseyuu($igqsaukqcqscimok), Constants::kumuoysauoagaiiy => $kuowggqsyksiyygi->squyiyimquqicqke($igqsaukqcqscimok), Constants::uissasisiuymwsmu => $kuowggqsyksiyygi->uikgwcuascgeissw($igqsaukqcqscimok)]; } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->yagekskwwyqosqcs()->iooowgsqoyqseyuu($igqsaukqcqscimok); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->yagekskwwyqosqcs()->uikgwcuascgeissw($igqsaukqcqscimok); } }
