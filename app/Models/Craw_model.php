<?php
    class Craw_model extends CI_Model{
        var $tables = "";
        var $pk;
        public function getAll()
            {
                return $this->db->get($this->tables)->result();
            }
    }
?>