<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d01ba572bba             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Functions\Helper\Plugin; use Pmpr\Common\Foundation\Interfaces\Constants; class Yoast extends Common { public function uckuueecsucykcaa($useksmwkuswkwcqg, array $ywmkwiwkosakssii = [], $uuyoeicyoayimaoa = 10, bool $eagyysyoiqawecmm = true) : array { $gwiwsycaaqgwmewg = '_yoast_wpseo_is_cornerstone'; $seumokooiykcomco = $this->caokeucsksukesyo()->ayueggmoqeeukqmq(); $ywmkwiwkosakssii[Constants::goqgcigmiawyauai] = $uuyoeicyoayimaoa; if ($eagyysyoiqawecmm) { $wyoiwuqokyeeuguk = $seumokooiykcomco->qgisekcaywsmigga($useksmwkuswkwcqg, $gwiwsycaaqgwmewg, '1', $ywmkwiwkosakssii); } else { $wyoiwuqokyeeuguk = $seumokooiykcomco->ciugwooasaqcywas($useksmwkuswkwcqg, $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw([Constants::awkcoioakcaougmq => Constants::omaksceqmigeaoko, Constants::gqiasegggowomgie => Constants::weyywqiacasssaww, Constants::osocaqqumyuooqyo => $gwiwsycaaqgwmewg], $ywmkwiwkosakssii)); if (count($wyoiwuqokyeeuguk) < $uuyoeicyoayimaoa) { $bsgyawiqyuquqmyy = count($wyoiwuqokyeeuguk) - $uuyoeicyoayimaoa; $ywmkwiwkosakssii[Constants::goqgcigmiawyauai] = $bsgyawiqyuquqmyy; $kskwowcuauecakgs = $seumokooiykcomco->qgisekcaywsmigga($useksmwkuswkwcqg, $gwiwsycaaqgwmewg, '1', $ywmkwiwkosakssii, 'NOT EXISTS'); $wyoiwuqokyeeuguk = array_merge($wyoiwuqokyeeuguk, $kskwowcuauecakgs); } } return $wyoiwuqokyeeuguk; } }
