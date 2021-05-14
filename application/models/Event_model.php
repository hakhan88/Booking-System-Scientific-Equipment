<?php
	class Event_model extends CI_Model{

        public function __construct(){
			$this->load->database();
		}

        public function returnEventData() {
			$query = $this->db->query("SELECT * FROM events;");
			return $query->result_object();
        }
        
        public function addEventsData($startDate, $endDate) {
            $data = array(
                'id' => '',
                'start_date' => date_format(date_create($startDate), "Y/m/d H:i:s"),
                'end_date' => date_format(date_create($endDate), "Y/m/d H:i:s"),
                'title' => 'My date'
            );
            $this->db->insert('events', $data);
        }
	}