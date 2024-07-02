<?php 

class Games_model extends CI_Model {
    public function index() {

            // a mesma coisa de SELECT * FROM tb_games
        return $this->db->get('tb_games')->result_array();
    }

    public function store($game) {
        // a mesma coisa de INSERT INTO tb_games (name, description, price, developer, release_date) VALUES (?,?,?,?,?)
        $this->db->insert('tb_games', $game);
    }
}

?>