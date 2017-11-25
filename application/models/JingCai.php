<?php

/**
 * Created by PhpStorm.
 * User: hongjinlin
 * Date: 2017/11/22
 * Time: 下午8:10
 */
class JingcaiModel
{
    public function __construct()
    {
        $this->dbr = load("Loader")->database('dbr');
    }

    public function level($cid)
    {
        $this->dbr->select('id');
        $this->dbr->from('level');
        $this->dbr->where('cid', $cid);
        $rzt = $this->dbr->get()->result();
        if (!$rzt) {
            return false;
        }
        return $rzt;
    }

    public function question($id)
    {
        $this->dbr->from('level');
        $this->dbr->where('id', $id);
        $rzt = $this->dbr->get()->row_array();
        if (!$rzt) {
            return false;
        }
        return $rzt;
    }

    public function getAllCorrectAnswer($cid, $id)
    {
        $this->dbr->select('correct_answer');
        $this->dbr->from('level');
        $this->dbr->where('cid', $cid);
        $this->dbr->where('id !=', $id);
        $rzt = $this->dbr->get()->result_array();
        if (!$rzt) {
            return false;
        }
        $data = array_map(function ($v) {
            return $v['correct_answer'];
        }, $rzt);
        $data = implode('', $data);
        return $data;
    }
}