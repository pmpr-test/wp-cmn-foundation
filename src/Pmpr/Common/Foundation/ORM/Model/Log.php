<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d9eb1f4f62f             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; class Log extends Common { const uoioosmmoaakkyuu = 'old_value'; const uugekaiouaeowkmy = 'new_value'; public function register() { $meywaqqsugaoeyys = $this->mgogaykgkoogasim(); $this->usuqmwksoeaayaig($meywaqqsugaoeyys->aakmagwggmkoiiyu() . '_log')->okgmqaeuaeymaocm($meywaqqsugaoeyys->ogqgmqymcwsqikme())->muuwuqssqkaieqge(sprintf(__('%s Logs', PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()))->guiaswksukmgageq(sprintf(__('%s Log', PR__CMN__FOUNDATION), $meywaqqsugaoeyys->giiayuqckuiecosm()))->saemoowcasogykak(IconInterface::egueqigeewosqmqu); $this->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq); parent::register(); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->qoemykoeuecmsmwe(Constants::meksegaoamowuwoq)->gswweykyogmsyawy(__('User', PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(0)->eyygsasuqmommkua(0)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { if (0 === $eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = __('System User', PR__CMN__FOUNDATION); } else { if ($eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $eqgoocgaqwqcimie]); } } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(Constants::meisqwykgaymauka)->gswweykyogmsyawy(__('Column', PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(5)->iwwmociiuayuwssq(function ($eqgoocgaqwqcimie) { $aaqqkgyougeiueyq = $this->mgogaykgkoogasim()->uqeoyqiwywwmsiew($eqgoocgaqwqcimie); if ($aaqqkgyougeiueyq) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->qcgakseyaikigqco(); } return $eqgoocgaqwqcimie; }))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::uoioosmmoaakkyuu)->gswweykyogmsyawy(__('Old Value', PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(10)->qcssowoqeqysosca()->iwwmociiuayuwssq([$this, 'iukqkygkscmaiaay']))->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::uugekaiouaeowkmy)->gswweykyogmsyawy(__('New Value', PR__CMN__FOUNDATION))->jyumyyugiwwiqomk(15)->qcssowoqeqysosca()->iwwmociiuayuwssq([$this, 'iukqkygkscmaiaay']))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq($this->meqwysqkeuyqiioi())->gswweykyogmsyawy($this->mgogaykgkoogasim()->giiayuqckuiecosm())->wuuqgaekqeymecag($this->mgogaykgkoogasim())->jyumyyugiwwiqomk(20))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__CMN__FOUNDATION))); parent::uwmqacgewuauagai(); } public function iukqkygkscmaiaay($eqgoocgaqwqcimie, $mksyucucyswaukig) { $qgoqiacsiccwoawi = $this->waecsyqmwascmqoa($mksyucucyswaukig, $eqgoocgaqwqcimie); if ($qgoqiacsiccwoawi) { $aaqqkgyougeiueyq = $this->mgogaykgkoogasim()->uqeoyqiwywwmsiew($qgoqiacsiccwoawi); if ($aaqqkgyougeiueyq) { $eqgoocgaqwqcimie = $aaqqkgyougeiueyq->ocsuumwkisuiyiki($eqgoocgaqwqcimie); if (!$eqgoocgaqwqcimie) { $eqgoocgaqwqcimie = '-'; } } } return $eqgoocgaqwqcimie; } }
