<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67d0192bbd7b2             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Button extends Field { protected ?string $icon = null; public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm, Constants::gqmuoaykeqeuoukm); $this->qigsyyqgewgskemg('pr-btn'); $this->comqsuwokcsmkcau(Constants::gqmuoaykeqeuoukm); $this->miwiwwcgekukawqs(Constants::gqmuoaykeqeuoukm); } public function comqsuwokcsmkcau(string $kqywgoqsmuswammk) : self { return $this->igiywquyccyiaucw(Constants::ELEMENT, $kqywgoqsmuswammk); } public function sgweqwcgqgiyaqyk(string $geecqyososceumsk = '#') : self { return $this->comqsuwokcsmkcau('a')->igmaewykumgwoaoy('href', $geecqyososceumsk); } public function iuioaawasymkaiuc() : self { return $this->qigsyyqgewgskemg('as-link'); } public function muywawimuacwmkgw(bool $quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa('danger', $quyoyomkimissiqu); } public function miqekcqciusawwie(bool $quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa('info', $quyoyomkimissiqu); } public function gmscmskmuissgywk(bool $quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa('primary', $quyoyomkimissiqu); } public function goqoickiksqsaeyk(bool $quyoyomkimissiqu = false) : self { return $this->gioaiiyakuoimewa('secondary', $quyoyomkimissiqu); } private function gioaiiyakuoimewa(string $qoiwmokisgikggia, bool $quyoyomkimissiqu = false) : self { return $this->qigsyyqgewgskemg('btn-' . ($quyoyomkimissiqu ? 'outline-' : '') . $qoiwmokisgikggia); } public function ekyuiyywyoyksmuy() : self { return $this->qigsyyqgewgskemg('btn-mini'); } public function mswqgegakmgmewwq() : self { return $this->qigsyyqgewgskemg('btn-small'); } public function oaueacckiwkyeuyw() : self { return $this->qigsyyqgewgskemg('btn-large'); } public function ygagwkucacyassau() : self { return $this->qigsyyqgewgskemg('btn-action'); } public function ooqqgmyocscgmyae() : self { $this->miwiwwcgekukawqs(Constants::iueeekcmggceyscu); return $this; } public function miwiwwcgekukawqs(string $sqeykgyoooqysmca) : self { return $this->qcgocuceocquqcuw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function eyamqkqiykagecsw() : ?string { return $this->icon; } public function saemoowcasogykak(?string $wkaqekwwgqsqwcoi) : self { $this->icon = $wkaqekwwgqsqwcoi; return $this; } public function ckccqugcgucieugo(array $ywmkwiwkosakssii = []) : self { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, ['hide' => true]); $this->igiywquyccyiaucw('spinner', $ywmkwiwkosakssii); return $this; } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { parent::qgsieamsswkgysow($ywmkwiwkosakssii); if ($this->eyamqkqiykagecsw()) { if ($this->qcgakseyaikigqco()) { $this->qigsyyqgewgskemg('has-icon'); } else { $this->qigsyyqgewgskemg('as-icon'); } } } public function ukmcmuaawacquume(array $ywmkwiwkosakssii = [], string $kqywgoqsmuswammk = Constants::gqmuoaykeqeuoukm) : self { $this->qigsyyqgewgskemg('pr-confirmable-action'); return $this->gmywsauuqwcmakuc('config', $this->caokeucsksukesyo()->wmkogisswkckmeua()->uskieqmcqyecigmy($ywmkwiwkosakssii, $kqywgoqsmuswammk)); } }
