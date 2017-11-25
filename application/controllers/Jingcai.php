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
        $cid = $question['cid'];
        $allAnswer = $MJingCai->getAllCorrectAnswer($cid, $id);
        $len = mb_strlen($allAnswer);
        for ($i = 0; $i < $len; $i++) {
            $allAnswerArray[] = mb_substr($allAnswer,$i,1,'UTF-8');
        }
        $len = mb_strlen($question['correct_answer']);
        for ($i = 0; $i < $len; $i++) {
            $answerArray[] = mb_substr($question['correct_answer'],$i,1,'UTF-8');
        }
        $rzt = array_map(function ($v) use ($answerArray) {
            if (!in_array($v, $answerArray)) {
                return $v;
            }
            return null;
        }, $allAnswerArray);
        $rzt = array_filter($rzt);
        $rzt = array_slice($rzt, 0, (18 - count($answerArray)));
        $rzt = array_merge($rzt, $answerArray);
        shuffle($rzt);
        $question['question'] = implode(',', $rzt);
        $question['correct_answer'] = implode(',', $answerArray);
        $this->echoJson(1000, '', $question);
    }
}