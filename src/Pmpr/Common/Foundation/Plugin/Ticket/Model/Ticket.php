<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67e169394df54             |
    |_______________________________________|
*/
 namespace Pmpr\Common\Foundation\Plugin\Ticket\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; use Pmpr\Common\Foundation\Plugin\Ticket\Ajax; use Pmpr\Common\Foundation\Plugin\Ticket\API; use Pmpr\Common\Foundation\Plugin\Ticket\Process; class Ticket extends Common { const cmiegiycgiucucgs = Constants::qgeesceacsmeqacu . Constants::mswocgcucqoaesaa; const miwkyequoaigisoa = Constants::imqkacyywmmamsqm . Constants::mswocgcucqoaesaa; const sckiycougcwcoomg = 'quote_request'; const sgsawoooocqwouiy = 'tracking_code'; public function register() { $sisssumicskyceeg = __('Support Ticket', PR__CMN__FOUNDATION); $this->guiaswksukmgageq($sisssumicskyceeg)->saemoowcasogykak(IconInterface::osaqwqwkkmocawgs)->muuwuqssqkaieqge(__('Support Tickets', PR__CMN__FOUNDATION))->uaywwyimkgwyqwya([Constants::qoquaeuooeycomks => 'pmpr-ir']); $this->ecmiqywsauuoccwo(Constants::ukwaycqmyyuekwqg)->ecmiqywsauuoccwo(Constants::ieioeisgwcgysukw)->ecmiqywsauuoccwo(Constants::weiosaewqequuyuq, [Constants::qsegwakiwaiyimyy => $sisssumicskyceeg, Constants::ysgwugcqguggmigq => $sisssumicskyceeg, Constants::qoquaeuooeycomks => 'pmpr-ir']); $this->esoauokkgywesoku(Constants::aqikuweekkucgqoy, __('Module', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::ykywsqyeckcgqyik, __('Cover', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::kqeokggqcsesmqco, __('Custom', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::awkcoioakcaougmq, __('Order', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::geykusaewkemcasi, __('Order ID/Quote ID', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::oeeocoksyeeakqgk, __('Order Date/Quote Date', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::akoscweoqiuiiooo, __('Plugin', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::kugymggycmsguyig, __('Plugin Name', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::memoaagcmqqowsoy, __('Theme', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::oogcuuweyckyageq, __('Theme Name', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::oguseymmyyoyaako, __('Product', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::oiuckgigqssyiagw, __('Site Link', PR__CMN__FOUNDATION))->esoauokkgywesoku(Constants::cmckeoksigiaqykc, __('Product Cat', PR__CMN__FOUNDATION)); $this->swsaakqseuaacagq(Constants::xgimwmogukqqcuky, [$this, 'ywgqgaomoekeewyg'])->swsaakqseuaacagq(Constants::kasgeoiieeaeekiy, [$this, 'scmmymqkoyckgkam'])->swsaakqseuaacagq(Constants::emsskyeoaqokwsoa, [$this, 'yeuyyckseoiokmmm'])->swsaakqseuaacagq(Constants::cauuugmucmiacwsy, [$this, 'ecmmcumsweoyokmi']); } public function wigskegsqequoeks() { $this->waqewsckuayqguos('before_enqueue_backend_assets', [$this, 'enqueue']); parent::wigskegsqequoeks(); } public function uwmqacgewuauagai() { $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $this->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::squoamkioomemiyi)->kesomeowemmyygey(1, Constants::kuygeqomywoykkai, __('Question', PR__CMN__FOUNDATION))->kesomeowemmyygey(2, Constants::cewoqokegcosikww, __('Criticism', PR__CMN__FOUNDATION))->kesomeowemmyygey(3, Constants::cosogwomwuugakcy, __('Suggestion', PR__CMN__FOUNDATION))->kesomeowemmyygey(4, Constants::imiuwqeccyaimyaw, __('Report', PR__CMN__FOUNDATION))->kesomeowemmyygey(5, Constants::ioeywemqoqcusomu, __('Complaint', PR__CMN__FOUNDATION))->kesomeowemmyygey(6, self::sckiycougcwcoomg, __('Quote Request', PR__CMN__FOUNDATION))->gswweykyogmsyawy(__('Type', PR__CMN__FOUNDATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::qkimemawswowsmoa)->kesomeowemmyygey(1, Constants::oguseymmyyoyaako, __('Pmpr Products', PR__CMN__FOUNDATION))->kesomeowemmyygey(2, Constants::cmckeoksigiaqykc, __('Pmpr Product Categories', PR__CMN__FOUNDATION))->kesomeowemmyygey(3, Constants::awkcoioakcaougmq, __('Your Shop Orders', PR__CMN__FOUNDATION))->kesomeowemmyygey(4, Constants::wqekaoqqacecmuyg, __('Pmpr Site', PR__CMN__FOUNDATION))->kesomeowemmyygey(5, Constants::aqikuweekkucgqoy, __('Pmpr Modules', PR__CMN__FOUNDATION))->kesomeowemmyygey(6, Constants::ykywsqyeckcgqyik, __('Pmpr Covers', PR__CMN__FOUNDATION))->kesomeowemmyygey(7, Constants::kqeokggqcsesmqco, __('Your Customs', PR__CMN__FOUNDATION))->kesomeowemmyygey(8, Constants::akoscweoqiuiiooo, __('Wordpress Plugins', PR__CMN__FOUNDATION))->kesomeowemmyygey(9, Constants::memoaagcmqqowsoy, __('Wordpress Themes', PR__CMN__FOUNDATION))->kesomeowemmyygey(10, Constants::gaquqqgusyeqgumw, __('Wordpress System', PR__CMN__FOUNDATION))->gswweykyogmsyawy(__('Subject', PR__CMN__FOUNDATION)))->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::ciywsqoeiymemsys)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->kesomeowemmyygey(1, Constants::miswkosqicsksgok, __('Open', PR__CMN__FOUNDATION))->kesomeowemmyygey(2, Constants::cemyyceucooociss, __('Closed', PR__CMN__FOUNDATION))->gswweykyogmsyawy(__('Status', PR__CMN__FOUNDATION))->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->yyuiuwgokmwioomq(Constants::iuqumwggccmcuyem)->mscsweokoguamsgc(Constants::ieioeisgwcgysukw)->kesomeowemmyygey(1, Constants::ymugckeogmscmacc, __('Low', PR__CMN__FOUNDATION))->kesomeowemmyygey(2, Constants::mcwaoqwywimcegca, __('Normal', PR__CMN__FOUNDATION))->kesomeowemmyygey(3, Constants::sgiwkasmqqockceq, __('High', PR__CMN__FOUNDATION))->gswweykyogmsyawy(__('Priority', PR__CMN__FOUNDATION))->qassieeyqwaysucq())->cquokmemekqqywgi($eqwoegegiamegqsm->usqseiuaeauwuwus(self::sgsawoooocqwouiy)->gswweykyogmsyawy(__('Tracking Code', PR__CMN__FOUNDATION))->acceqyqygswoecwe(10)->acokiqqgsmoqaeyu())->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::cmiegiycgiucucgs)->gswweykyogmsyawy(__('Requests', PR__CMN__FOUNDATION))->ckgquisaimmgwuyu(Request::class))->cquokmemekqqywgi($eqwoegegiamegqsm->eoaomaokwkwqyqiq(self::miwkyequoaigisoa)->gswweykyogmsyawy(__('Responses', PR__CMN__FOUNDATION))->ckgquisaimmgwuyu(Response::class))->cquokmemekqqywgi($eqwoegegiamegqsm->qwwuoqeeiyuoyogs(Constants::CREATED_AT)->gswweykyogmsyawy(__('Created At', PR__CMN__FOUNDATION))->qcqeqimisiisswky()); parent::uwmqacgewuauagai(); } public function aoqwywcqmoqaukkq() { $gsgwomokyuwmqqkg = $this->qaawomkouwoaoqma(Constants::ygyiacciqgemekwc, []); $giueegeuogwkqoog = $this->qaawomkouwoaoqma(Constants::ykywsqyeckcgqyik, []); $gmeiukgosesecyee = $this->qaawomkouwoaoqma(Constants::kqeokggqcsesmqco, []); $kuemsykessaoquoy = $this->qaawomkouwoaoqma(Constants::aqikuweekkucgqoy, []); $oksqskmgoqiqciis = $this->qaawomkouwoaoqma(Constants::oguseymmyyoyaako, []); $igegswkgwguamwaa = $this->qaawomkouwoaoqma(Constants::cmckeoksigiaqykc, []); $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $this->yyoqecggyacaseko()->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::squoamkioomemiyi)->lawggeskegeosicy(Constants::qkimemawswowsmoa, $gsgwomokyuwmqqkg))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::qkimemawswowsmoa)->eyygsasuqmommkua(Constants::oiuckgigqssyiagw)->qyucewwiggkyeaso(Constants::ykywsqyeckcgqyik, Constants::ykywsqyeckcgqyik)->qyucewwiggkyeaso(Constants::awkcoioakcaougmq, [Constants::geykusaewkemcasi, Constants::oeeocoksyeeakqgk])->qyucewwiggkyeaso(Constants::kqeokggqcsesmqco, Constants::kqeokggqcsesmqco)->qyucewwiggkyeaso(Constants::aqikuweekkucgqoy, Constants::aqikuweekkucgqoy)->qyucewwiggkyeaso(Constants::wqekaoqqacecmuyg, Constants::oiuckgigqssyiagw)->qyucewwiggkyeaso(Constants::oguseymmyyoyaako, Constants::oguseymmyyoyaako)->qyucewwiggkyeaso(Constants::cmckeoksigiaqykc, Constants::cmckeoksigiaqykc)->qyucewwiggkyeaso(Constants::memoaagcmqqowsoy, [Constants::memoaagcmqqowsoy, Constants::oogcuuweyckyageq])->qyucewwiggkyeaso(Constants::akoscweoqiuiiooo, [Constants::akoscweoqiuiiooo, Constants::kugymggycmsguyig]))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::oiuckgigqssyiagw)->xkgcwkwsqysqamic()->gswweykyogmsyawy(__('Site Link', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::oguseymmyyoyaako)->gswweykyogmsyawy(__('Pmpr Product', PR__CMN__FOUNDATION))->acauweqyyugwisqc($oksqskmgoqiqciis)->wywmmeyauqkeskeq(!empty($oksqskmgoqiqciis)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::cmckeoksigiaqykc)->gswweykyogmsyawy(__('Pmpr Product Category', PR__CMN__FOUNDATION))->acauweqyyugwisqc($igegswkgwguamwaa)->wywmmeyauqkeskeq(!empty($igegswkgwguamwaa)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::aqikuweekkucgqoy)->gswweykyogmsyawy(__('Pmpr Module', PR__CMN__FOUNDATION))->acauweqyyugwisqc($kuemsykessaoquoy)->wywmmeyauqkeskeq(!empty($kuemsykessaoquoy)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::ykywsqyeckcgqyik)->gswweykyogmsyawy(__('Pmpr Cover', PR__CMN__FOUNDATION))->acauweqyyugwisqc($giueegeuogwkqoog)->wywmmeyauqkeskeq(!empty($giueegeuogwkqoog)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::kqeokggqcsesmqco)->gswweykyogmsyawy(__('Your Custom', PR__CMN__FOUNDATION))->acauweqyyugwisqc($gmeiukgosesecyee)->wywmmeyauqkeskeq(!empty($gmeiukgosesecyee)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::geykusaewkemcasi)->kqqqugemmqagucuq()->gswweykyogmsyawy(__('Order ID/Quote ID', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::oeeocoksyeeakqgk)->iccqusgqmsqaiqow()->gswweykyogmsyawy(__('Order Date/Quote Date', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::akoscweoqiuiiooo)->yywmgmseeoamauce()->gswweykyogmsyawy(__('Plugin', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::kugymggycmsguyig)->gswweykyogmsyawy(__('Plugin Name', PR__CMN__FOUNDATION))->gucwmccyimoagwcm(__('If you can not found plugin, write it\'s name here.', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->mccagaqeagiikkec(Constants::memoaagcmqqowsoy)->ugicmkwcuywcwceg()->gswweykyogmsyawy(__('Theme', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->ymuegqgyuagyucws(Constants::oogcuuweyckyageq)->gswweykyogmsyawy(__('Theme Name', PR__CMN__FOUNDATION))->gucwmccyimoagwcm(__('If you can not found theme, write it\'s name here.', PR__CMN__FOUNDATION)))->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::TEXT)->gswweykyogmsyawy(__('Text', PR__CMN__FOUNDATION))->gsomueooycksswcy()); parent::aoqwywcqmoqaukkq(); } public function ywgqgaomoekeewyg($qqomumygoacsmsie) { if ($qqomumygoacsmsie === Constants::weiosaewqequuyuq) { if (empty($this->caokeucsksukesyo()->eiwcuqigayigimak()->myacgeeekqcmemge(self::iwkmsgmiukksyamy))) { Process::symcgieuakksimmu()->qsaqkwuakgcomwya(); } } } public function ecmmcumsweoyokmi(string $qqomumygoacsmsie, array $qookweymeqawmcwo = []) : array { if ($qqomumygoacsmsie === Constants::ieioeisgwcgysukw) { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); if (isset($qookweymeqawmcwo[Constants::qwumqqyuasyskkkc])) { $yygmoeguaqyumuui = [Constants::squoamkioomemiyi, Constants::qkimemawswowsmoa, Constants::ciywsqoeiymemsys, Constants::iuqumwggccmcuyem, Constants::CREATED_AT]; $qookweymeqawmcwo[Constants::uiwqcumqkgikqyue] = $gkyciwoiiisgywcs->gucyquqwoimkiiaq($qookweymeqawmcwo[Constants::qwumqqyuasyskkkc], $yygmoeguaqyumuui); } $uuyucgkyusckoaeq = $this->caokeucsksukesyo()->wmkogisswkckmeua(); $qookweymeqawmcwo[Constants::ygeqsmugcaeeeuwu] = $uuyucgkyusckoaeq->umocagoqumikakom('ticket_request')->mkksewyosgeumwsa($uuyucgkyusckoaeq->sciaycsmsiekqueg(Constants::qgeesceacsmeqacu)->qsecygiycssgacqs(3)->gsomueooycksswcy())->igiywquyccyiaucw(Constants::iueeekcmggceyscu, __('Send Request', PR__CMN__FOUNDATION))->render(); if ($mksyucucyswaukig = $gkyciwoiiisgywcs->get($qookweymeqawmcwo, Constants::ckmqoekmugkggeym)) { $qookweymeqawmcwo[Constants::qwumqqyuasyskkkc] = $this->ywqeqwaaqsqeiqau([Constants::yeaekcacwwyyqigq => $this->mwyqswsaeeewsosm($mksyucucyswaukig)]); } $qookweymeqawmcwo['empty_message'] = __('No messages here yet...', PR__CMN__FOUNDATION); $qookweymeqawmcwo[Constants::wksqmcukwwqwyuuc] = $this->caokeucsksukesyo()->eiwcuqigayigimak()->gkwkqmwweiawigae(self::iwkmsgmiukksyamy); } return $qookweymeqawmcwo; } public function yeuyyckseoiokmmm($icwicymcioeyeyek, $aokagokqyuysuksm = null) { if (empty($aokagokqyuysuksm)) { $camgsweqsqeqkcue = API::symcgieuakksimmu(); $sogksuscggsicmac = $camgsweqsqeqkcue->oocesgigeqqqyuog($icwicymcioeyeyek); if ($sogksuscggsicmac && !is_wp_error($sogksuscggsicmac)) { $icwicymcioeyeyek = $sogksuscggsicmac; } else { if (is_wp_error($sogksuscggsicmac)) { $this->gssiscqyqsacmeca()->msqsseeaasqysese($sogksuscggsicmac); } else { $this->gssiscqyqsacmeca()->msqsseeaasqysese(__('Can not submit ticket on server, please try again.', PR__CMN__FOUNDATION)); } } } return $icwicymcioeyeyek; } public function scmmymqkoyckgkam($aokagokqyuysuksm, $icwicymcioeyeyek) { Request::symcgieuakksimmu()->gssiscqyqsacmeca()->gsegsiocqmsoayii([Constants::TEXT => $icwicymcioeyeyek[Constants::TEXT], self::asywgyemkouimocw => $aokagokqyuysuksm]); } public function enqueue() { if ($this->qcaekwgmiswccowk(Constants::ieioeisgwcgysukw) || $this->qcaekwgmiswccowk(Constants::awysmmukegasimmq)) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->wwmusmkkcwsiciou(Constants::wyucqaeuuqkesque, Ajax::myikkigscysoykgy)->qeqgammgesiwiysc($meakksicouekcgoe->awgyqswkqywwmkye($this, 'ticket-conversation', 'ticket-conversation.css'))->qeqgammgesiwiysc($meakksicouekcgoe->owygwqwawqoiusis($this, 'ticket-conversation', 'ticket-conversation.js')->okawmmwsiuauwsiu(Constants::qiaqeaemuukkikmi)); } else { if ($this->qcaekwgmiswccowk(Constants::weiosaewqequuyuq)) { $meakksicouekcgoe = $this->caokeucsksukesyo()->usugyumcgeaaowsi(); $meakksicouekcgoe->qeqgammgesiwiysc($meakksicouekcgoe->awgyqswkqywwmkye($this, 'ticket-index', 'ticket-index.css')); } } } public function ywqeqwaaqsqeiqau(array $ywmkwiwkosakssii = []) : array { $ywmkwiwkosakssii = $this->caokeucsksukesyo()->gyecsegqciqykomu()->ckscqqquyskscaaw($ywmkwiwkosakssii, [self::yeaekcacwwyyqigq => 0, Constants::imywcsggckkcywgk => 1, Constants::ausqeuugegoygouq => 10]); $kqowykcomaagagow = $ywmkwiwkosakssii[self::yeaekcacwwyyqigq]; $kueeocmceokoouqa = Request::symcgieuakksimmu(); $eqwoegegiamegqsm = $this->caokeucsksukesyo()->skckwsgymkimyuwo(); $siykeiywomwwuoiw = $this->iekyeyicoyyawomk()->kqewyqqqiyiouaou([$eqwoegegiamegqsm->aackykokeekgaoyw()->pmouaioykaoceyag($eqwoegegiamegqsm->kyckwuuiqwmyoqma()->asumqyigwsqmyeoc($kueeocmceokoouqa)->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(self::asywgyemkouimocw, $kqowykcomaagagow))->qisiksoemmiiyeyk([$kueeocmceokoouqa->myywwqkyiwawwquy(Constants::gouqcwikiiygyasc), $kueeocmceokoouqa->myywwqkyiwawwquy(Constants::CREATED_AT), Constants::TEXT, $this->kmgukcsewikeswco(Constants::ckmsuwamgymouaeu, 'null')]))->pmouaioykaoceyag($eqwoegegiamegqsm->kyckwuuiqwmyoqma()->asumqyigwsqmyeoc(Response::symcgieuakksimmu())->mmiqqgoaeccgwoqs($eqwoegegiamegqsm->megqywqeuquawkim(self::asywgyemkouimocw, $kqowykcomaagagow))->qisiksoemmiiyeyk([Constants::gouqcwikiiygyasc, Constants::CREATED_AT, Constants::TEXT, Constants::ckmsuwamgymouaeu])), $eqwoegegiamegqsm->owogyemaccuymycq(Constants::CREATED_AT)->mcgisgoaksmyemyq()->kgyigewyuumysume()]); return $this->iekyeyicoyyawomk()->aeggeuqycwawueqy($siykeiywomwwuoiw, [Constants::imywcsggckkcywgk => $ywmkwiwkosakssii[Constants::imywcsggckkcywgk], Constants::ausqeuugegoygouq => $ywmkwiwkosakssii[Constants::ausqeuugegoygouq], Constants::wosqwewmqmyweqea => false]); } }
