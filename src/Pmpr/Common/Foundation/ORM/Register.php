<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66e1810bd5408             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\Interfaces\Constants; class Register extends RegisterPost { protected array $views = []; protected array $schema = []; protected array $notSchema = []; protected bool $isGlobal = false; protected ?string $prefix = null; protected ?bool $mapMetaCap = null; protected ?bool $logModel = false; protected ?bool $metaModel = false; protected array $notifiable = []; public function aeosueemgsygqese() : ?array { return $this->schema; } public function wgqmaeykgikqmyqo() : ?bool { return $this->logModel; } public function mqqqqyeoqaseamwo() : self { $this->metaModel = true; return $this; } public function kyquoysomeywsaci() : ?bool { return $this->metaModel; } public function egeywisiumiokmcm() : array { return $this->notifiable; } public function kcsywgyywsgqgawm(string $sqeykgyoooqysmca = Constants::miceosguuseyyuqe) : bool { return in_array($sqeykgyoooqysmca, $this->notifiable, true); } public function eesuqwkusmukgwma($gsgwomokyuwmqqkg = [Constants::miceosguuseyyuqe]) : self { $this->notifiable = $gsgwomokyuwmqqkg; return $this; } public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Schema { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->aeosueemgsygqese(), $uusmaiomayssaecw); } public function cquokmemekqqywgi(Schema $aaqqkgyougeiueyq) : self { if ($aaqqkgyougeiueyq->yywskysiycwkwsgw()) { goto ygkcacsyyckescqs; } $aaqqkgyougeiueyq->jyumyyugiwwiqomk(count($this->aeosueemgsygqese())); ygkcacsyyckescqs: $this->schema[$aaqqkgyougeiueyq->mwikyscisascoeea()] = $aaqqkgyougeiueyq; if (!$aaqqkgyougeiueyq->umcwswocgeismgmo()) { goto cuoqqgaygogsmmic; } $this->logModel = true; cuoqqgaygogsmmic: return $this; } public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self { foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Schema) { goto igymseewwyiocoug; } $this->cquokmemekqqywgi($aiowsaccomcoikus); igymseewwyiocoug: sukskmcwsoysiuqu: } cgewcsueoyaeikgm: return $this; } public function iegyckmmougkucya() : array { return $this->notSchema; } public function qokmgyacmymciaey(?string $uusmaiomayssaecw) : self { $this->notSchema[] = $uusmaiomayssaecw; return $this; } public function mqekkegckiiqoquu(?array $gmawcgiwcmsukeiu = []) : self { if (!is_array($gmawcgiwcmsukeiu)) { goto twkmiuomimomscew; } foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $this->qokmgyacmymciaey($oaukocmsckciqaok); eyiamcekkgkiawqy: } mqccmesakuemceqi: twkmiuomimomscew: return $this; } public function okgmqaeuaeymaocm(?string $yuwymayicwwqiske) : self { $this->prefix = $yuwymayicwwqiske; return $this; } public function iemucaoqaisiwise() { return $this->mapMetaCap; } public function aioqieywgykaaoec() : ?array { return $this->views; } public function cgswceaawqgeskua($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->aioqieywgykaaoec(), $uusmaiomayssaecw); } public function euqcuckiysmgaeak($uusmaiomayssaecw) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->aioqieywgykaaoec(), $uusmaiomayssaecw)); } public function ecmiqywsauuoccwo(string $uusmaiomayssaecw, array $ywmkwiwkosakssii = []) : self { if ($this->euqcuckiysmgaeak($uusmaiomayssaecw)) { goto qwcegcuowwgiccos; } $ggauoeuaesiymgee = [Constants::squoamkioomemiyi => $uusmaiomayssaecw, Constants::wuowaiyouwecckaw => $this->aakmagwggmkoiiyu(), Constants::ysgwugcqguggmigq => $this->qeeuwmmksmqiuywg(), Constants::qsegwakiwaiyimyy => $this->uikgwcuascgeissw("\x61\154\x6c\137\x69\x74\x65\x6d\163"), Constants::ciwqeuoqqskekckk => $this->egockcwgmeocqeqc(), Constants::yiuwgggacagyeqmo => $this->keyusaamwmwewmqi()]; if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) { goto kooskuwkuayiuose; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); kooskuwkuayiuose: $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii; qwcegcuowwgiccos: return $this; } public function qemeyueyiwgsokuc(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ausqeuugegoygouq => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(), Constants::soquiwyuimckgiow => []]); return $this->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq, $ywmkwiwkosakssii); } public function wkesqcmiekqoykag(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qoquaeuooeycomks => $this->aakmagwggmkoiiyu(), Constants::wuowaiyouwecckaw => "\x65\x64\151\164\137" . $this->aakmagwggmkoiiyu(), Constants::soquiwyuimckgiow => 2]); return $this->ecmiqywsauuoccwo(Constants::awysmmukegasimmq, $ywmkwiwkosakssii); } public function gemkqqguesukeocw(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qoquaeuooeycomks => $this->aakmagwggmkoiiyu(), Constants::wuowaiyouwecckaw => "\141\144\144\x5f" . $this->aakmagwggmkoiiyu(), Constants::soquiwyuimckgiow => 2]); return $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg, $ywmkwiwkosakssii); } public function aseucqksocwomwos(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qoquaeuooeycomks => $this->aakmagwggmkoiiyu(), Constants::wuowaiyouwecckaw => "\163\150\x6f\167\x5f" . $this->aakmagwggmkoiiyu(), Constants::soquiwyuimckgiow => []]); return $this->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw, $ywmkwiwkosakssii); } public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function iukgqamaqiamuosa() : self { $this->isGlobal = true; return $this; } public function ogqgmqymcwsqikme() : ?string { $yuwymayicwwqiske = $this->prefix; if (!$yuwymayicwwqiske) { goto qcessicwuikwqsis; } $yuwymayicwwqiske .= "\x5f"; qcessicwuikwqsis: return $yuwymayicwwqiske; } public function aakmagwggmkoiiyu() : ?string { return "{$this->ogqgmqymcwsqikme()}{$this->aiqioscoyukqgsgw()}"; } public function aiqioscoyukqgsgw() : ?string { return $this->name; } public function masyeqmaiuqwosei() : bool { return !empty($this->name); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gkyciwoiiisgywcs->unset($kkeqqkkkqwkocsyu, "\x6e\x6f\164\137\163\143\x68\145\x6d\141"); $aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($kkeqqkkkqwkocsyu, "\x73\143\x68\x65\x6d\141", []); if (!(is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq)) { goto siqagquguiemuoku; } $yygmoeguaqyumuui = array_map("\x73\164\162\154\145\156", array_keys($aaqqkgyougeiueyq)); array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq); foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) { if (!$ymaogssqccumcyqa instanceof Schema) { goto coywmiyqgsweuiic; } $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii); coywmiyqgsweuiic: ieumumsgyguceusy: } yssscwioiyygssec: $kkeqqkkkqwkocsyu["\163\143\150\x65\155\141"] = $aaqqkgyougeiueyq; siqagquguiemuoku: return $kkeqqkkkqwkocsyu; } }
