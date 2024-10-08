<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670520dfc3785             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\Database\Query; class Union extends Statement { protected function run($siykeiywomwwuoiw) { if (!$this->muyycecygiagkouk()) { goto ogciikaecauiwgyk; } $swwmymiaiosiyqis = null; foreach ($this->mmoaikqueyiwcesm() as $wcgsoqmmciswkmiq) { if (!$wcgsoqmmciswkmiq instanceof Query) { goto okawiaowosqickgq; } $siykeiywomwwuoiw = $wcgsoqmmciswkmiq->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($wcgsoqmmciswkmiq); if (!$swwmymiaiosiyqis) { goto eqsuaywswuesuika; } $siykeiywomwwuoiw->union($swwmymiaiosiyqis); eqsuaywswuesuika: $swwmymiaiosiyqis = $siykeiywomwwuoiw; okawiaowosqickgq: wasuquysysmqyegg: } geoiegikocwmwosi: ogciikaecauiwgyk: return $siykeiywomwwuoiw; } }
