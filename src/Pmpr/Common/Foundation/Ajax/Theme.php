<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9d4bb6af50             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Ajax; use Pmpr\Common\Foundation\Interfaces\Constants; class Theme extends Common { public function maewiqmcygmeuaso(array $icwicymcioeyeyek) : array { $ywmkwiwkosakssii = (array) $this->ocksiywmkyaqseou('get_themes_args', $icwicymcioeyeyek[Constants::meieskyuuegwwcsy]); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if ($eqgoocgaqwqcimie = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::ciyoccqkiamemcmm)) { $ywmkwiwkosakssii[Constants::ouywiegeiyuaaawo] = $eqgoocgaqwqcimie; } else { $qwcmueausqgiwigy = $gkyciwoiiisgywcs->get($icwicymcioeyeyek, Constants::yayciqueeakqwese); $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::imywcsggckkcywgk => 1, Constants::kuokyuesqeoaeeai => $this->uwkmaywceaaaigwo()->issssuygyewuaswa()->iyouigcsiacgwksc(), Constants::yayciqueeakqwese => $qwcmueausqgiwigy, Constants::ausqeuugegoygouq => 15]); } $ywmkwiwkosakssii[Constants::aisguagukaewucii] = Constants::ckmqoekmugkggeym; return $this->caokeucsksukesyo()->ogciwyoqgciosgcw()->ciugwooasaqcywas($ywmkwiwkosakssii); } public function muycisweeuoquemg($igqsaukqcqscimok) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::ouywiegeiyuaaawo); } public function keaewwiqiewaaigy($igqsaukqcqscimok) : string { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($igqsaukqcqscimok, Constants::NAME); } }
