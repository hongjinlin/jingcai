<?php if ( ! defined('APP_PATH')) exit('No direct script access allowed');
class JingcaiController extends Controller {
    public function levelAction()
    {
        Yaf_Dispatcher::getInstance()->disableView();
        $cid = (int)$_GET['cid'];
        if (!$cid) {
            $this->echoJson('2000');
            return;
        }
        $MJingCai = new JingCaiModel();
        $level = $MJingCai->level($cid);
        if (!$level) {
            $this->echoJson('2000');
            return;
        }
        $this->echoJson('1000', '', $level);
    }

    public function questionAction()
    {
        Yaf_Dispatcher::getInstance()->disableView();
        $id = (int)$_GET['id'];
        if (!$id) {
            $this->echoJson('2000');
            return;
        }
        $MJingCai = new JingCaiModel();
        $question = $MJingCai->question($id);

        if (!$question) {
            $this->echoJson('2000');
            return;
        }
        $question['pic'] = 'http://' . $_SERVER['HTTP_HOST'] . $question['pic'];
        $this->echoJson('1000', '', $question);
    }

}