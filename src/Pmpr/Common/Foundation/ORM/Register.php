<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ec04c26714e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM; use Pmpr\Common\Foundation\ORM\DB\Schema\Schema; use Pmpr\Common\Foundation\Register\RegisterPost; use Pmpr\Common\Foundation\Interfaces\Constants; class Register extends RegisterPost { protected array $views = []; protected array $schema = []; protected array $notSchema = []; protected bool $isGlobal = false; protected ?string $prefix = null; protected ?bool $mapMetaCap = null; protected ?bool $logModel = false; protected ?bool $metaModel = false; protected array $notifiable = []; public function aeosueemgsygqese() : ?array { return $this->schema; } public function wgqmaeykgikqmyqo() : ?bool { return $this->logModel; } public function mqqqqyeoqaseamwo() : self { $this->metaModel = true; return $this; } public function kyquoysomeywsaci() : ?bool { return $this->metaModel; } public function egeywisiumiokmcm() : array { return $this->notifiable; } public function kcsywgyywsgqgawm(string $sqeykgyoooqysmca = Constants::miceosguuseyyuqe) : bool { return in_array($sqeykgyoooqysmca, $this->notifiable, true); } public function eesuqwkusmukgwma($gsgwomokyuwmqqkg = [Constants::miceosguuseyyuqe]) : self { $this->notifiable = $gsgwomokyuwmqqkg; return $this; } public function uqeoyqiwywwmsiew($uusmaiomayssaecw) : ?Schema { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->aeosueemgsygqese(), $uusmaiomayssaecw); } public function cquokmemekqqywgi(Schema $aaqqkgyougeiueyq) : self { if ($aaqqkgyougeiueyq->yywskysiycwkwsgw()) { goto mgiykamgwsemmiio; } $aaqqkgyougeiueyq->jyumyyugiwwiqomk(count($this->aeosueemgsygqese())); mgiykamgwsemmiio: $this->schema[$aaqqkgyougeiueyq->mwikyscisascoeea()] = $aaqqkgyougeiueyq; if (!$aaqqkgyougeiueyq->umcwswocgeismgmo()) { goto iwkyewqeogaamiou; } $this->logModel = true; iwkyewqeogaamiou: return $this; } public function ckaemmoueyosqqkq(array $qssskwiqeumgkago) : self { foreach ($qssskwiqeumgkago as $aiowsaccomcoikus) { if (!$aiowsaccomcoikus instanceof Schema) { goto iioauiogmamumiym; } $this->cquokmemekqqywgi($aiowsaccomcoikus); iioauiogmamumiym: uaaiuqickwysiqiy: } yqqwweuisgoskcwa: return $this; } public function iegyckmmougkucya() : array { return $this->notSchema; } public function qokmgyacmymciaey(?string $uusmaiomayssaecw) : self { $this->notSchema[] = $uusmaiomayssaecw; return $this; } public function mqekkegckiiqoquu(?array $gmawcgiwcmsukeiu = []) : self { if (!is_array($gmawcgiwcmsukeiu)) { goto suokacgwamyumagy; } foreach ($gmawcgiwcmsukeiu as $oaukocmsckciqaok) { $this->qokmgyacmymciaey($oaukocmsckciqaok); cgkaoiyoqwmkaqck: } gmwcqkgsaesmsuea: suokacgwamyumagy: return $this; } public function okgmqaeuaeymaocm(?string $yuwymayicwwqiske) : self { $this->prefix = $yuwymayicwwqiske; return $this; } public function iemucaoqaisiwise() { return $this->mapMetaCap; } public function aioqieywgykaaoec() : ?array { return $this->views; } public function cgswceaawqgeskua($uusmaiomayssaecw) { return $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->aioqieywgykaaoec(), $uusmaiomayssaecw); } public function euqcuckiysmgaeak($uusmaiomayssaecw) : bool { return !empty($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->aioqieywgykaaoec(), $uusmaiomayssaecw)); } public function ecmiqywsauuoccwo(string $uusmaiomayssaecw, array $ywmkwiwkosakssii = []) : self { if ($this->euqcuckiysmgaeak($uusmaiomayssaecw)) { goto ysicqksgomomkoek; } $ggauoeuaesiymgee = [Constants::squoamkioomemiyi => $uusmaiomayssaecw, Constants::wuowaiyouwecckaw => $this->aakmagwggmkoiiyu(), Constants::ysgwugcqguggmigq => $this->qeeuwmmksmqiuywg(), Constants::qsegwakiwaiyimyy => $this->uikgwcuascgeissw("\x61\x6c\x6c\137\x69\x74\x65\x6d\163"), Constants::ciwqeuoqqskekckk => $this->egockcwgmeocqeqc(), Constants::yiuwgggacagyeqmo => $this->keyusaamwmwewmqi()]; if (!(is_array($ywmkwiwkosakssii) && $ywmkwiwkosakssii)) { goto gscckcagyggagway; } $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, $ggauoeuaesiymgee); gscckcagyggagway: $this->views[$uusmaiomayssaecw] = $ywmkwiwkosakssii; ysicqksgomomkoek: return $this; } public function qemeyueyiwgsokuc(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::ausqeuugegoygouq => $this->caokeucsksukesyo()->eiwcuqigayigimak()->kasoumcmomkcwwyg(), Constants::soquiwyuimckgiow => []]); return $this->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq, $ywmkwiwkosakssii); } public function wkesqcmiekqoykag(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qoquaeuooeycomks => $this->aakmagwggmkoiiyu(), Constants::wuowaiyouwecckaw => "\x65\144\151\x74\x5f" . $this->aakmagwggmkoiiyu(), Constants::soquiwyuimckgiow => 2]); return $this->ecmiqywsauuoccwo(Constants::awysmmukegasimmq, $ywmkwiwkosakssii); } public function gemkqqguesukeocw(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qoquaeuooeycomks => $this->aakmagwggmkoiiyu(), Constants::wuowaiyouwecckaw => "\141\144\x64\x5f" . $this->aakmagwggmkoiiyu(), Constants::soquiwyuimckgiow => 2]); return $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg, $ywmkwiwkosakssii); } public function aseucqksocwomwos(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [Constants::qoquaeuooeycomks => $this->aakmagwggmkoiiyu(), Constants::wuowaiyouwecckaw => "\163\150\x6f\x77\137" . $this->aakmagwggmkoiiyu(), Constants::soquiwyuimckgiow => []]); return $this->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw, $ywmkwiwkosakssii); } public function cykmceoageywgkqs() : bool { return $this->isGlobal; } public function iukgqamaqiamuosa() : self { $this->isGlobal = true; return $this; } public function ogqgmqymcwsqikme() : ?string { $yuwymayicwwqiske = $this->prefix; if (!$yuwymayicwwqiske) { goto ocgsiomyyckcausy; } $yuwymayicwwqiske .= "\137"; ocgsiomyyckcausy: return $yuwymayicwwqiske; } public function aakmagwggmkoiiyu() : ?string { return "{$this->ogqgmqymcwsqikme()}{$this->aiqioscoyukqgsgw()}"; } public function aiqioscoyukqgsgw() : ?string { return $this->name; } public function masyeqmaiuqwosei() : bool { return !empty($this->name); } public function uqawesackiomqgga($kkeqqkkkqwkocsyu, array $ywmkwiwkosakssii = []) : ?array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $gkyciwoiiisgywcs->unset($kkeqqkkkqwkocsyu, "\156\x6f\x74\137\163\x63\150\x65\x6d\141"); $aaqqkgyougeiueyq = $gkyciwoiiisgywcs->get($kkeqqkkkqwkocsyu, "\163\x63\150\x65\x6d\141", []); if (!(is_array($aaqqkgyougeiueyq) && $aaqqkgyougeiueyq)) { goto uwswkegomekswkus; } $yygmoeguaqyumuui = array_map("\x73\x74\x72\x6c\145\156", array_keys($aaqqkgyougeiueyq)); array_multisort($yygmoeguaqyumuui, SORT_ASC, $aaqqkgyougeiueyq); foreach ($aaqqkgyougeiueyq as $uusmaiomayssaecw => $ymaogssqccumcyqa) { if (!$ymaogssqccumcyqa instanceof Schema) { goto yuqiqaquoygggoqc; } $aaqqkgyougeiueyq[$uusmaiomayssaecw] = $ymaogssqccumcyqa->sacmkccceuywoqsq(true, $ywmkwiwkosakssii); yuqiqaquoygggoqc: swqkyoemiswegyci: } ccegsywqocccgegu: $kkeqqkkkqwkocsyu["\x73\x63\x68\x65\155\141"] = $aaqqkgyougeiueyq; uwswkegomekswkus: return $kkeqqkkkqwkocsyu; } }
