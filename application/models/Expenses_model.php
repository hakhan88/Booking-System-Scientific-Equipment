<?php
	class Expenses_model extends CI_Model{

        public function __construct(){
			$this->load->database();
		}

        public function returnEventData($userId) {
			$query = $this->db->query("SELECT * FROM expenses WHERE user_id = '$userId'");
			return $query->result_object();
        }

        public function returnAllEventData() {
			$query = $this->db->query("SELECT * FROM expenses");
			return $query->result_object();
        }

        public function addExpensesData($total, $date, $userId) {
            $data = array(
                'id' => '',
                'total' => $total,
                'date' => date_format(date_create($date), "Y/m/d H:i:s"),
                'user_id' => $userId,
                'status' => 3,
            );

            $this->db->insert('expenses', $data);
        }

        public function uploadDocument($itemId, $post_image) {
			$query = $this->db->query("UPDATE expenses SET status = '2' WHERE id = '$itemId'");
			$query2 = $this->db->query("UPDATE expenses SET image_path = '$post_image' WHERE id = '$itemId'");
        }

        public function approvePayment($itemId) {
			$query = $this->db->query("UPDATE expenses SET status = '1' WHERE id = '$itemId'");            
        }
	}