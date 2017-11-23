<?php if ( ! defined('APP_PATH')) exit('No direct script access allowed');
class JingcaiController extends Controller {
    public function levelAction()
    {
        Yaf_Dispatcher::getInstance()->disableView();
        $cid = (int)$_GET['cid'];
        $MJingCai = new JingcaiModel();
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
        $MJingCai = new JingcaiModel();
        $question = $MJingCai->question($id);
        $question['pic'] = 'http://' . $_SERVER['HTTP_HOST'] . $question['pic'];
        if (!$question) {
            $this->echoJson('2000');
            return;
        }
        $this->echoJson('1000', '', $question);
    }

}