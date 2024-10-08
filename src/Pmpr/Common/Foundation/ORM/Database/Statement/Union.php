<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517460aacd             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\ORM\Database\Statement; use Illuminate\Database\Query\Builder; use Pmpr\Common\Foundation\ORM\Database\Query; class Union extends Statement { protected function run($siykeiywomwwuoiw) { if (!$this->muyycecygiagkouk()) { goto wasuquysysmqyegg; } $swwmymiaiosiyqis = null; foreach ($this->mmoaikqueyiwcesm() as $wcgsoqmmciswkmiq) { if (!$wcgsoqmmciswkmiq instanceof Query) { goto geoiegikocwmwosi; } $siykeiywomwwuoiw = $wcgsoqmmciswkmiq->mgogaykgkoogasim()->iekyeyicoyyawomk()->kqewyqqqiyiouaou($wcgsoqmmciswkmiq); if (!$swwmymiaiosiyqis) { goto qykcggwgkweasuii; } $siykeiywomwwuoiw->union($swwmymiaiosiyqis); qykcggwgkweasuii: $swwmymiaiosiyqis = $siykeiywomwwuoiw; geoiegikocwmwosi: ukmgwuiqwgyiouec: } sukcyismwageqgok: wasuquysysmqyegg: return $siykeiywomwwuoiw; } }
