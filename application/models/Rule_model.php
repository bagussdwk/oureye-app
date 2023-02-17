<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Rule_model extends CI_Model
{
  public function getRuleMiopia()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`, SUBSTRING(`rule`.`probabilitas`, 1,4) as `probabilitas` FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 1
                        ";
    return $this->db->query($queryRule)->result_array();
  }
  public function getRuleHipermetropia()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`,SUBSTRING(`rule`.`probabilitas`, 1,4) as `probabilitas`  FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 3
                        ";
    return $this->db->query($queryRule)->result_array();
  }
  public function getRuleAstigmatisma()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`,SUBSTRING(`rule`.`probabilitas`, 1,4) as `probabilitas`  FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 4
                        ";
    return $this->db->query($queryRule)->result_array();
  }
  public function getRulePresbiopi()
  {
    $queryRule = "SELECT `rule`.`id`,`penyakit`.`nama_penyakit`,`gejala`.`gejala`,SUBSTRING(`rule`.`probabilitas`, 1,4) as `probabilitas`  FROM `penyakit` JOIN `rule` ON `penyakit`.`id_penyakit`=`rule`.`id_penyakit` JOIN `gejala` ON `rule`.`id_gejala`=`gejala`.`id_gejala` WHERE `rule`.`id_penyakit` = 5
                        ";
    return $this->db->query($queryRule)->result_array();
  }
}
