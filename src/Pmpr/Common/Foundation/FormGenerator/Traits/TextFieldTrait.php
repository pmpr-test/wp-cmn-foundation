<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67b7aad01909e             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Traits; use Pmpr\Common\Foundation\Interfaces\Constants; trait TextFieldTrait { public function xkgcwkwsqysqamic() : self { return $this->kqqqugemmqagucuq()->uekikuwmokqsqoga(Constants::auqoykcmsiauccao); } public function yscssskqyicmogii() : self { return $this->kqqqugemmqagucuq()->uekikuwmokqsqoga('time'); } public function smigkcmumwkgamkk() : self { return $this->kqqqugemmqagucuq()->uekikuwmokqsqoga('tel'); } public function mkiaygiogeeyogqm() : self { return $this->kqqqugemmqagucuq()->uekikuwmokqsqoga(Constants::muqaqimusmckkieq); } public function sqsumkuougquscyg() : self { return $this->kqqqugemmqagucuq()->uekikuwmokqsqoga(Constants::akywgoyaseymiyka); } public function esakmaucmeoucami() : self { return $this->uekikuwmokqsqoga(Constants::yayciqueeakqwese); } public function escqqisecooswqgo($mwsawgusoeygascy = null, $giqggecqqikcysgq = null) : self { $this->lgwgcswaocouiuik($mwsawgusoeygascy, $giqggecqqikcysgq); return $this->kqqqugemmqagucuq()->uekikuwmokqsqoga(Constants::eymwucuaaiiciymc); } public function ougkuowgkuqmwkka($gaeqamemwmwsyukm) : self { return $this->kqqqugemmqagucuq()->askmmuauqcuuqsea('OTP')->igiywquyccyiaucw(Constants::qiyqwyiiwykeccmo, $gaeqamemwmwsyukm)->eskgwaywimqcwcyy(Constants::qiyqwyiiwykeccmo, $gaeqamemwmwsyukm); } public function lgwgcswaocouiuik($mwsawgusoeygascy = null, $giqggecqqikcysgq = null) : self { if ($mwsawgusoeygascy) { $this->qcgocuceocquqcuw('min', $mwsawgusoeygascy)->qcgocuceocquqcuw('minlength', $mwsawgusoeygascy); } if ($giqggecqqikcysgq) { $this->qcgocuceocquqcuw('max', $giqggecqqikcysgq)->qcgocuceocquqcuw('maxlength', $mwsawgusoeygascy); } return $this; } public function uagmgmommooaewkk(array $qiouiwasaauyaaue = [], bool $wickicgoyskysuuc = true) : self { $qiouiwasaauyaaue['placeholder'] = 'IR -- --- --- --- ---- ---- ----'; return $this->kqqqugemmqagucuq()->suaookwiwycuwmuk('iban')->mwcysoycumayoaca('IR 00 000 000 0000 0000 0000 0000', $qiouiwasaauyaaue, $wickicgoyskysuuc); } public function wykoackkeuuqeyss(array $qiouiwasaauyaaue = [], bool $wickicgoyskysuuc = true) : self { $qiouiwasaauyaaue['placeholder'] = '---- ---- ---- ----'; return $this->kqqqugemmqagucuq()->suaookwiwycuwmuk('debit-card')->mwcysoycumayoaca('0000 0000 0000 0000', $qiouiwasaauyaaue, $wickicgoyskysuuc); } public function ucwmaimegouwwocg(array $qiouiwasaauyaaue = []) : self { $qiouiwasaauyaaue['translation'] = ['Z' => ['pattern' => '[0-9]', 'optional' => true]]; return $this->kqqqugemmqagucuq()->mwcysoycumayoaca('0ZZ.0ZZ.0ZZ.0ZZ', $qiouiwasaauyaaue, false); } public function mouwuossggyiwems(array $qiouiwasaauyaaue = [], bool $wickicgoyskysuuc = true) : self { $qiouiwasaauyaaue['reverse'] = true; return $this->kqqqugemmqagucuq()->mwcysoycumayoaca('#,##0', $qiouiwasaauyaaue, $wickicgoyskysuuc); } public function iaggyqeqiyqgmgoo(array $qiouiwasaauyaaue = [], bool $wickicgoyskysuuc = true) : self { $qiouiwasaauyaaue['placeholder'] = '--'; return $this->kqqqugemmqagucuq()->mwcysoycumayoaca('##', $qiouiwasaauyaaue, $wickicgoyskysuuc); } public function mwcysoycumayoaca(string $wamcomkuwysqgwgk, array $qiouiwasaauyaaue = [], bool $wickicgoyskysuuc = true) : self { $this->qigsyyqgewgskemg('pr-field-maskable'); if ($wickicgoyskysuuc) { $this->qigsyyqgewgskemg('unmask'); } $this->igiywquyccyiaucw('maskable', ['mask' => $wamcomkuwysqgwgk, 'unmask' => $wickicgoyskysuuc, 'options' => $qiouiwasaauyaaue]); return $this->gmywsauuqwcmakuc('maskable', $wamcomkuwysqgwgk)->gmywsauuqwcmakuc('maskable-config', $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike($qiouiwasaauyaaue)); } public function iccqusgqmsqaiqow() : self { return $this->kqqqugemmqagucuq()->uekikuwmokqsqoga(Constants::cwewykcqimckqycw)->qigsyyqgewgskemg('pr-datepicker')->askmmuauqcuuqsea('Datepicker'); } public function ikaowoaikyaicgge() : self { $this->kqqqugemmqagucuq()->qigsyyqgewgskemg('pr-color-picker')->eskgwaywimqcwcyy('coloris', '')->askmmuauqcuuqsea('Colorpicker'); return $this; } }
