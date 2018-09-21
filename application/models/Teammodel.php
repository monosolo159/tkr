<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Teammodel extends CI_Model
{



  public function teamInsert($input){
    //var_dump($input);
    $this->db->insert('team',$input);
  }

  public function teamList(){
    //var_dump($input);
    return $this->db
    ->order_by('team_order','ASC')
    ->get('team')
    ->result_array();
  }

  public function teamDelete($id){
    //var_dump($input);
    $this->db
    ->where('team_id',$id)
    ->delete('team');
  }













  public function homeInsert($input){
    //var_dump($input);
    // $this->db->insert('tb_home',$input);
    // $this->db->where('tb_home_id',$input['tb_home_id'])->update('tb_home');
    $this->db
		->where('tb_home_id',$input['tb_home_id'])
		->update('tb_home',$input);
  }

  public function memberEdit($input){
    $this->db
    ->where('tb_authen_ID',$input['tb_authen_ID'])
    ->update('tb_authen',$input);
  }

  public function memberDel($id){
    $this->db
    ->where('tb_authen_ID',$id)
    ->delete('tb_authen');
	}

  public function ScoreInsert($input){
    //var_dump($input);
    $this->db->insert('tb_score',$input);
  }

  public function QuizDel($id){
    $this->db
    ->where('tb_Quiz_ID',$id)
    ->delete('tb_quiz');
	}

  public function AnswerDel($lessonID,$QuizID){
    $this->db
    ->where('tb_lessonID',$lessonID)
    ->where('tb_Quiz_ID',$QuizID)
    ->delete('tb_answer');
  }

  public function quizInsert($input){
    //var_dump($input);
    $this->db->insert('tb_quiz',$input);
    return $this->db->insert_id();
  }

  public function AnswerInsert($input){
    //var_dump($input);
    $this->db->insert('tb_answer',$input);
  }

  // public function adminEdit($input){
  //   $this->db->where('tb_admin_id',$input['tb_admin_id'])->update('tb_admin',$input);
	// }
  //



}
