<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e853d170784             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\FormGenerator\Backend\Field; use Pmpr\Common\Foundation\FormGenerator\Field; use Pmpr\Common\Foundation\Interfaces\Constants; class Editor extends Textarea { public function __construct(string $aokagokqyuysuksm = '') { parent::__construct($aokagokqyuysuksm); $this->aseocggwwegcmqes(Constants::yaiacqocwcgmooio)->qsecygiycssgacqs(5); $this->uwkmaywceaaaigwo()->mmsykuomogaqoaye()->qcsmikeggeemccuu('admin_enqueue_scripts', 'wp_enqueue_editor'); } public function iygyugseyaqwywyg($eqgoocgaqwqcimie) : self { return parent::iygyugseyaqwywyg($this->caokeucsksukesyo()->gyecsegqciqykomu()->uqceekiqqwygomou($eqgoocgaqwqcimie, false)); } public function gsomueooycksswcy() : self { return $this->igiywquyccyiaucw('media_buttons', false); } public function qsecygiycssgacqs(int $essikcmqiyqaqoaq) : self { $this->igiywquyccyiaucw('textarea_rows', $essikcmqiyqaqoaq); return parent::qsecygiycssgacqs($essikcmqiyqaqoaq); } public function qgsieamsswkgysow(array $ywmkwiwkosakssii = []) : void { $this->kakecegieeqyyayu()->eskgwaywimqcwcyy('editor-setting', $this->caokeucsksukesyo()->owgcciayoweymuws()->wegeuqkaeuusoike([])); $this->igiywquyccyiaucw('editor_class', $this->waecsyqmwascmqoa('class'))->igiywquyccyiaucw('textarea_name', $this->waecsyqmwascmqoa(Constants::NAME))->igiywquyccyiaucw('editor_name', str_replace(['[', ']'], '', $this->waecsyqmwascmqoa(Constants::NAME))); parent::qgsieamsswkgysow($ywmkwiwkosakssii); } }
