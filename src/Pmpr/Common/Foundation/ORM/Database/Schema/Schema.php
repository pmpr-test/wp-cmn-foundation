<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d9f11bf9d9             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Schema; use Pmpr\Common\Foundation\ORM\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Functions\Traits\HelperTrait; use Pmpr\Common\Foundation\Functions\Traits\WrapperTrait; use Pmpr\Common\Foundation\Traits\ArgsTrait; class Schema { use ArgsTrait, HelperTrait, WrapperTrait; protected array $config = []; protected array $options = []; public function __construct(string $sqeykgyoooqysmca = null, string $aokagokqyuysuksm = null, ?string $meqocwsecsywiiqs = null) { $this->xauiwawimomcgksy($aokagokqyuysuksm)->aseocggwwegcmqes($sqeykgyoooqysmca)->gswweykyogmsyawy($meqocwsecsywiiqs); $this->mcacmissyeeqkeak(Constants::mcscqiqgkgemsaiq, true)->mcacmissyeeqkeak(Constants::swygucmgkigameoo, true); if (!$this->gwumsacwqiukkyie()) { $this->omqeokeyimawioym($sqeykgyoooqysmca); } } public function aceaeommyuooiqge() : array { return $this->config; } public function wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->config[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function megwuoouecmkuaqm(array $oyuikeusicgqgwak = []) : self { foreach ($oyuikeusicgqgwak as $uusmaiomayssaecw => $eqgoocgaqwqcimie) { $this->wcweamocuicuusky($uusmaiomayssaecw, $eqgoocgaqwqcimie); } return $this; } public function myacgeeekqcmemge() : bool { return !empty($this->gkwkqmwweiawigae()); } public function gkwkqmwweiawigae(string $aqykuigiuwmmcieu = Constants::kgmecoswscqqsymg) : ?array { $ksaameoqigiaoigg = []; $qiouiwasaauyaaue = $this->options; if ($this->mgogaykgkoogasim()) { $qiouiwasaauyaaue = $this->caokeucsksukesyo()->mmsykuomogaqoaye()->ocksiywmkyaqseou("{$this->mgogaykgkoogasim()}\137{$this->iooowgsqoyqseyuu()}\137\157\x70\164\x69\x6f\x6e\163", $qiouiwasaauyaaue); } if (Constants::eoaiagsgqsmskugs === $aqykuigiuwmmcieu) { foreach ($qiouiwasaauyaaue as $omkysikckkcieckq) { $ksaameoqigiaoigg[$omkysikckkcieckq[Constants::NAME]] = $omkysikckkcieckq[Constants::qescuiwgsyuikume]; } } else { $ksaameoqigiaoigg = $qiouiwasaauyaaue; } return $ksaameoqigiaoigg; } public function giiuwsmyumqwwiyq($uusmaiomayssaecw) { return $this->gkwkqmwweiawigae()[$uusmaiomayssaecw] ?? false; } public function kesomeowemmyygey($uusmaiomayssaecw, $eqgoocgaqwqcimie) : self { $this->options[$uusmaiomayssaecw] = $eqgoocgaqwqcimie; return $this; } public function acauweqyyugwisqc(array $qiouiwasaauyaaue = []) : self { foreach ($qiouiwasaauyaaue as $uusmaiomayssaecw => $omkysikckkcieckq) { $this->kesomeowemmyygey($uusmaiomayssaecw, $omkysikckkcieckq); } return $this; } public function asumqyigwsqmyeoc(string $meywaqqsugaoeyys) : self { return $this->igiywquyccyiaucw(Constants::emkkgysokckswycs, $meywaqqsugaoeyys); } public function mgogaykgkoogasim() : ?string { return $this->imkyoqyocosuqasu(Constants::emkkgysokckswycs); } public function ieswsgygcawakkyo() : self { return $this->igiywquyccyiaucw(Constants::iggmwsowgyooyoes, true); } public function umcwswocgeismgmo() : bool { return $this->imkyoqyocosuqasu(Constants::iggmwsowgyooyoes, false); } public function aaikegqyiyeoygce(callable $ekiuyucoiagmscgy) : self { return $this->igiywquyccyiaucw(Constants::mcscqiqgkgemsaiq, $ekiuyucoiagmscgy); } public function mscsweokoguamsgc($umwgoasiowmqcumw, bool $mqogqgswmasasmik = false) : self { return $this->aaikegqyiyeoygce(function ($gayacawoimeyykki) use($umwgoasiowmqcumw, $mqogqgswmasasmik) { if (is_string($umwgoasiowmqcumw)) { $umwgoasiowmqcumw = [$umwgoasiowmqcumw]; } foreach ($umwgoasiowmqcumw as $qqomumygoacsmsie) { if ($mqogqgswmasasmik) { if ($gayacawoimeyykki === $qqomumygoacsmsie) { return false; } } else { if ($gayacawoimeyykki === $qqomumygoacsmsie) { return true; } } } return $mqogqgswmasasmik; }); } public function gksokmqegsecssgq(string $qqomumygoacsmsie, $mksyucucyswaukig = null) : bool { $ciooooeuokmogsaq = $this->imkyoqyocosuqasu(Constants::mcscqiqgkgemsaiq); if (is_callable($ciooooeuokmogsaq)) { $ciooooeuokmogsaq = (bool) $ciooooeuokmogsaq($qqomumygoacsmsie, $mksyucucyswaukig); } else { $ciooooeuokmogsaq = true; } return $ciooooeuokmogsaq; } public function acokiqqgsmoqaeyu() : self { return $this->aaikegqyiyeoygce("\137\x5f\162\145\x74\x75\x72\156\x5f\x66\x61\x6c\x73\x65"); } public function gcgmwakaoecqcuwo(bool $uusmaiomayssaecw) : self { return $this->igiywquyccyiaucw(Constants::ascagqcquwgmygkm, $uusmaiomayssaecw); } public function qcgakseyaikigqco() : ?string { return $this->imkyoqyocosuqasu(Constants::qescuiwgsyuikume); } public function gswweykyogmsyawy(?string $meqocwsecsywiiqs) : self { return $this->igiywquyccyiaucw(Constants::qescuiwgsyuikume, $meqocwsecsywiiqs); } public function iooowgsqoyqseyuu() : ?string { return $this->imkyoqyocosuqasu(Constants::gouqcwikiiygyasc); } public function xauiwawimomcgksy(?string $aokagokqyuysuksm) : self { return $this->igiywquyccyiaucw(Constants::gouqcwikiiygyasc, $aokagokqyuysuksm); } public function omqeokeyimawioym(string $sqeykgyoooqysmca) : self { return $this->igiywquyccyiaucw(Constants::iykmwskoqqcqwsmm, $sqeykgyoooqysmca); } public function gwumsacwqiukkyie() : ?string { return $this->imkyoqyocosuqasu(Constants::iykmwskoqqcqwsmm); } public function gueasuouwqysmomu() : ?string { return $this->imkyoqyocosuqasu(Constants::squoamkioomemiyi); } public function aseocggwwegcmqes(?string $sqeykgyoooqysmca) : self { return $this->igiywquyccyiaucw(Constants::squoamkioomemiyi, $sqeykgyoooqysmca); } public function yywskysiycwkwsgw() : ?int { return $this->imkyoqyocosuqasu(Constants::iuqumwggccmcuyem); } public function jyumyyugiwwiqomk(int $sqqewmoeaekuyyas) : self { return $this->igiywquyccyiaucw(Constants::iuqumwggccmcuyem, $sqqewmoeaekuyyas); } public function oiswysuiioecsaae() : ?string { return $this->imkyoqyocosuqasu(Constants::wikgqsqysyuoykse); } public function eyygsasuqmommkua($ggauoeuaesiymgee) : self { return $this->igiywquyccyiaucw(Constants::wikgqsqysyuoykse, $ggauoeuaesiymgee); } public function sqoceewuaeaiqmco(bool $umkuayeugioqkaac) : self { return $this->igiywquyccyiaucw(Constants::wkumuiwcsaaugqwq, $umkuayeugioqkaac); } public function ogymmssscoqeuyye() : self { return $this->sqoceewuaeaiqmco(true); } public function qumigiaaeieaemgy() : ?bool { return $this->imkyoqyocosuqasu(Constants::wkumuiwcsaaugqwq); } public function migckeygiiaeogou(bool $emsmukwmouqwsywo) : self { return $this->igiywquyccyiaucw(Constants::wqwugeckugcywcyq, $emsmukwmouqwsywo); } public function easacyeoquiwamwq() : ?bool { return $this->imkyoqyocosuqasu(Constants::wqwugeckugcywcyq); } public function siamswkmsqckqgeu() : ?string { return $this->imkyoqyocosuqasu(Constants::giyocoieqoqykqmi); } public function imyyyeaaismecmwg(?string $yeiuyssiamkeoiwm) : self { return $this->igiywquyccyiaucw(Constants::giyocoieqoqykqmi, $yeiuyssiamkeoiwm); } public function gyecsegqciqykomu() : ?string { return $this->imkyoqyocosuqasu(Constants::yqemseykugmsyeqa); } public function kqycymyaykoacywo(?string $saqmwwmqiwmkiwaa) : self { return $this->igiywquyccyiaucw(Constants::yqemseykugmsyeqa, $saqmwwmqiwmkiwaa); } public function qamkswcgsoeggmau() : ?int { return $this->imkyoqyocosuqasu(Constants::wqymmegwwgsyuacs); } public function acceqyqygswoecwe(int $ykiwomimkkuiigoq) : self { return $this->igiywquyccyiaucw(Constants::wqymmegwwgsyuacs, $ykiwomimkkuiigoq); } public function yseywyqacmugimme() : ?bool { return $this->imkyoqyocosuqasu(Constants::swygucmgkigameoo); } public function qkwyekmiceaogwci(bool $iisoauwukouugkec) : self { return $this->igiywquyccyiaucw(Constants::swygucmgkigameoo, $iisoauwukouugkec); } public function qcssowoqeqysosca() : self { return $this->qkwyekmiceaogwci(true); } public function aguakyuusmksagai() : self { return $this->qkwyekmiceaogwci(false); } public function qcqeqimisiisswky($ywmkwiwkosakssii = true) : self { return $this->igiywquyccyiaucw(Constants::mqkoyssswuikaueg, $ywmkwiwkosakssii); } public function usyiuqmiaiosccca() { return $this->imkyoqyocosuqasu(Constants::mqkoyssswuikaueg, false); } public function qassieeyqwaysucq() : self { return $this->igiywquyccyiaucw(Constants::oiuwgkeekcuccmgm, true); } public function aceqsggkwkwimaie() : bool { return (bool) $this->imkyoqyocosuqasu(Constants::oiuwgkeekcuccmgm, false); } public function eccqsggkcosmqumc() : self { return $this->saquckwoqqowmqoo(true); } public function iqekkemuyuqokwqs() : ?bool { return $this->imkyoqyocosuqasu(Constants::ywgycmwesywaycws); } public function yusomaossiaeqoiu(bool $ceiwsaacewygcsqg) : self { return $this->igiywquyccyiaucw(Constants::ywgycmwesywaycws, $ceiwsaacewygcsqg); } public function mowcagqccyeiekqe(bool $wcciqoyscugmucms = true) : self { return $this->igiywquyccyiaucw(Constants::ooaiuaumyiuaaogc, $wcciqoyscugmucms); } public function oikqausqaykqkmqi() : ?bool { return $this->imkyoqyocosuqasu(Constants::ooaiuaumyiuaaogc); } public function ysmcmaosamoowgsu(bool $oycsmgwakcoowkyq) : self { return $this->imkyoqyocosuqasu(Constants::kcqiwikmkwksgkyu, $oycsmgwakcoowkyq); } public function pkkeieykmguakeuw() : ?bool { return $this->imkyoqyocosuqasu(Constants::kcqiwikmkwksgkyu); } public function ogmguwgoqkqkkisa() : ?string { return $this->imkyoqyocosuqasu(Constants::goayeyygsuqcukka); } public function womiayakiieiaiso(?string $guuwoyaeoeeaauug) : self { return $this->igiywquyccyiaucw(Constants::goayeyygsuqcukka, $guuwoyaeoeeaauug); } public function yuwwmewqqauckiky() : ?string { return $this->imkyoqyocosuqasu(Constants::siemqaacwoqmciis); } public function waaisgakayeuywsw(?string $kokmwkcqkgkewiuw) : self { return $this->igiywquyccyiaucw(Constants::siemqaacwoqmciis, $kokmwkcqkgkewiuw); } public function kweqqkiwiugikyam() : bool { return $this->imkyoqyocosuqasu(Constants::scmqaewukoeamkkq, false); } public function saquckwoqqowmqoo(bool $omasqoksqewuwwkq) : self { return $this->igiywquyccyiaucw(Constants::scmqaewukoeamkkq, $omasqoksqewuwwkq); } public function iwwmociiuayuwssq(callable $tsuauommsquiesmk) : self { return $this->igiywquyccyiaucw(Constants::kyyscqqmsikeuaea, $tsuauommsquiesmk); } public function ocsuumwkisuiyiki($eqgoocgaqwqcimie, &$mksyucucyswaukig = null, ?Model $meywaqqsugaoeyys = null) { $tsuauommsquiesmk = $this->imkyoqyocosuqasu(Constants::kyyscqqmsikeuaea); if ($tsuauommsquiesmk && is_callable($tsuauommsquiesmk)) { $eqgoocgaqwqcimie = $tsuauommsquiesmk($eqgoocgaqwqcimie, $mksyucucyswaukig, $meywaqqsugaoeyys, $this); } return $eqgoocgaqwqcimie; } public function umkwmemkiowegeuq() : void { } }
