<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67053ea9b9ccc             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\MobileApp\Backward; use Pmpr\Common\Foundation\Interfaces\Constants; class Backward extends Common { const igmwackauwsummys = 'footer_text'; protected ?string $randomID = ''; public function qqqsowcmmksagqoa() : ?string { if (!$this->randomID) { $this->randomID = $this->caokeucsksukesyo()->owgcciayoweymuws()->uniqid(8, Constants::kgguuaiguasicuwu); } return $this->randomID; } public function wigskegsqequoeks() { $this->qcsmikeggeemccuu('wp_head', [$this, 'cmwceoiqkcaoauge'], 999)->qcsmikeggeemccuu('template_redirect', [$this, 'ooagcwwgqqsuqkak']); $this->waqewsckuayqguos('license_information_fetched', [$this, 'kqewqkkewacmaqac']); } public function aqyikqugcomoqqqi() { PlugView::ksyueceqagwomguk(); if ($ggcusimcgowkewyk = $this->gcmiikmmsyooasmq()) { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ggcusimcgowkewyk, [Constants::ouywiegeiyuaaawo => '', Constants::qescuiwgsyuikume => '', Constants::ssmskyqgcmeiayco => '']); Pagination::symcgieuakksimmu($ywmkwiwkosakssii); } } public function iowusosyokeicyky() : bool { return $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou('allow_to_add_backlink', !$this->uwkmaywceaaaigwo()->owicscwgeuqcqaig()->goecwaaykqoaaagg()); } public function ooagcwwgqqsuqkak() { if ($this->iowusosyokeicyky()) { ob_start([$this, 'uqiseyugcwwmuomw']); } } public function cmwceoiqkcaoauge() { if ($this->iowusosyokeicyky()) { $qoiwmokisgikggia = $this->uqgakoiwwiesysii(); $qaekiyksksiswqgq = $this->wyomcacocymyugkm(); if ($qaekiyksksiswqgq === $qoiwmokisgikggia) { $qoiwmokisgikggia = self::wekmquwykoiqeekq; $qaekiyksksiswqgq = self::oykuuwggmycymcki; } else { $qoiwmokisgikggia = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imsywosuyawwkcws($qoiwmokisgikggia), Constants::igssuqwuicwawgam, self::wekmquwykoiqeekq); $qaekiyksksiswqgq = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($this->imsywosuyawwkcws($qaekiyksksiswqgq), Constants::igssuqwuicwawgam, self::oykuuwggmycymcki); } $yuumukkaswwoywya = $this->qqqsowcmmksagqoa(); echo $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->qiokaomckmywuwqo([".{$yuumukkaswwoywya} {", Constants::igssuqwuicwawgam . ": {$qoiwmokisgikggia};", Constants::akmgqeyqcecqukia . ": {$qaekiyksksiswqgq};", 'display: flex;', 'padding: 1rem 0;', 'align-items: center;', 'justify-content: center;', '}', ".{$yuumukkaswwoywya} > a {", Constants::igssuqwuicwawgam . ": {$qoiwmokisgikggia};", '}']); } } public function uqiseyugcwwmuomw($nsmgceoqaqogqmuw) { $okgiqegieoooemuq = $this->gcmiikmmsyooasmq(self::igmwackauwsummys); if ($okgiqegieoooemuq) { $swqimwqeweekeusq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo(); $iwywmkygwewiamwm = $swqimwqeweekeusq->yuawgssgauywkiia($okgiqegieoooemuq, Pagination::symcgieuakksimmu()->ycqquoiyyuesegsy()); $okgiqegieoooemuq = $swqimwqeweekeusq->iaaacsuskiakkwui($iwywmkygwewiamwm, ['class' => $this->qqqsowcmmksagqoa()]); $nsmgceoqaqogqmuw = $this->caokeucsksukesyo()->gkksucgseqqemesc()->pmouaioykaoceyag($nsmgceoqaqogqmuw, 'body', $okgiqegieoooemuq); } return $nsmgceoqaqogqmuw; } public function kqewqkkewacmaqac($keccaugmemegoimu) { if (is_array($keccaugmemegoimu) && $keccaugmemegoimu) { $qkqgcaykemoiecma = $this->uwkmaywceaaaigwo()->giiuwsmyumqwwiyq(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $ggcusimcgowkewyk = $gkyciwoiiisgywcs->get($keccaugmemegoimu, 'backlink', []); if (!$ggcusimcgowkewyk) { $ggcusimcgowkewyk = $gkyciwoiiisgywcs->qamwegcyimgcqksw($keccaugmemegoimu, 'data.backlink', []); } if ($ggcusimcgowkewyk) { $wksoawcgagcgoask = $gkyciwoiiisgywcs->get($ggcusimcgowkewyk, Constants::ocwsuwyiiasigqaa); if ($wksoawcgagcgoask && is_string($wksoawcgagcgoask)) { $qcioqakuekamgwkw = $qkqgcaykemoiecma->get(self::quacgsocsmycocig(1099512212819, "\x31\63\61\x31\x39\x31\62\60\60\x32\66\x37\62\62\x37\x31\62\70\x31\66\x35\x31\x34\64\x32\66\x37\62\61\64\x32\x32\x37\62\64\x38\61\67\x34\62\x31\x34\x32\x31\61"), []); if (!is_array($qcioqakuekamgwkw)) { $qcioqakuekamgwkw = []; } $qcioqakuekamgwkw[$wksoawcgagcgoask] = $ggcusimcgowkewyk; $qkqgcaykemoiecma->update(self::quacgsocsmycocig(1099512212819, "\x31\x32\65\61\x38\x37\62\x30\64\x32\x36\x31\x32\63\67\61\62\60\61\65\63\61\x34\x30\62\x36\x31\x32\x33\x30\62\63\67\x32\64\60\61\66\x38\x32\63\x30\62\x31\x31"), $qcioqakuekamgwkw); } } else { $qkqgcaykemoiecma->delete(self::quacgsocsmycocig(1099512212819, "\x31\x33\x39\x31\67\x39\61\71\70\62\66\61\62\63\71\61\x32\x32\61\x34\x39\61\x34\62\x32\66\x31\62\61\x38\x32\x33\71\x32\65\60\x31\66\64\x32\61\70\x32\x31\x33")); } } } }
