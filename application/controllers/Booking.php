<!-- https://itsolutionstuff.com/post/codeigniter-fullcalendar-exampleexample.html -->
<?php
	class Booking extends CI_Controller {
		
		public function __construct() {
			parent::__construct();
			$this->load->database();
		}

		public function index() {
			$data['result'] = $this->db->get("events")->result();
	
			foreach ($data['result'] as $key => $value) {
				$data['data'][$key]['title'] = $value->title;
				$data['data'][$key]['start'] = $value->start_date;
				$data['data'][$key]['end'] = $value->end_date;
				$data['data'][$key]['backgroundColor'] = "#00a65a";
			}
			
			$this->load->view('templates/header');
			$this->load->view('pages/bookingSystem', $data);
			$this->load->view('templates/footer');
		}
		
		public function bookingSystem() {
			if ($this->session->userdata('logged_in')) {
				// $this->load->view('templates/header');
				$this->load->view('pages/bookingSystem');
				// $this->load->view('templates/footer');
			} else {
				redirect('user/login');
			}
		}
		
		public function requestBooking() {
			$this->load->view('templates/header');
			$this->load->view('pages/requestBooking');
			$this->load->view('templates/footer');
		}

		public function eventsData() {
			$eventReselts = $this->Event_model->returnEventData();
			header('Content-Type: application/json');
    		echo json_encode( $eventReselts );
		}

		public function generateQuatation() {
			$internalStudent = $this->session->userdata('internalStudent');
			
			// calculation initialization
			$total = 0;
			$equipmentCost = 0;
			$hours = 0;

			// time inputs
			$fromDate = $this->input->post('fromDate');
			$fromTime = $this->input->post('fromTime');
			$toDate = $this->input->post('toDate');
			$toTime = $this->input->post('toTime');

			$datetime1 = new DateTime($fromDate);
			$datetime2 = new DateTime($toDate);
			$days = round(($datetime2->format("U") - $datetime1->format("U")) / 86400);

			// make sure it positive
			if ($days >= 0) {
			}

			if ($fromDate == $toDate) {
				$timDifference = (( strtotime($toTime) - strtotime($fromTime)) / 60 ) / 60;
				$total = $timDifference*50;
			} else {
				$total = $days*50; 
			}

			// equipment inputs 
			$DensityMeter = $this->input->post('DensityMeter');
			$DSC = $this->input->post('DSC');
			$InsituDSC = $this->input->post('InsituDSC');
			$CHNOS = $this->input->post('CHNOS');
			$GPC = $this->input->post('GPC');
			$HallEffect = $this->input->post('HallEffect');
			$HPLC = $this->input->post('HPLC');
			$IC = $this->input->post('IC');
			$ExsituFTIR = $this->input->post('ExsituFTIR');
			$InsituFTIR = $this->input->post('InsituFTIR');
			$FreezeDryer = $this->input->post('FreezeDryer');
			$TCDFID = $this->input->post('TCDFID');
			$GCMS = $this->input->post('GCMS');

			if ($DensityMeter) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($DSC) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($InsituDSC) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($CHNOS) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($GPC) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($HallEffect) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($IC) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($HPLC) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($ExsituFTIR) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($InsituFTIR) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($FreezeDryer) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($TCDFID) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}
			if ($GCMS) {
				if ($internalStudent === 1) {
					$equipmentCost += 50;
				} else {
					$equipmentCost += 60;
				}
			}

			// HACK
			$equipmentCost = 300;
			$total = 400;

			$data['total'] = $total;
			$data['equipmentCost'] = $equipmentCost;
			$data['fromDate'] = $fromDate;
			$data['toDate'] = $toDate;
			$data['fromTime'] = $fromTime;
			$data['toTime'] = $toTime;

			// var_dump('asdasd');die;

			// TODO HARIS
			$this->load->view('templates/header');
			$this->load->view('pages/sampleDetails', $data);
			// $this->load->view('pages/quatation', $data);
			$this->load->view('templates/footer');
		}

		public function inputSampleDetails() {

			// $this->dump($this->input->post('sampleId1'));
			// $this->dump($this->input->post('sampleDescription1'));
			// $this->dump($this->input->post('wavelengthRange1'));
			// $this->dump($this->input->post('sampleBackground1'));
			// die;

			$sampleId1 = $this->input->post('sampleId1');
			$sampleDescription1 = $this->input->post('sampleDescription1');
			$wavelengthRange1 = $this->input->post('wavelengthRange1');
			$sampleBackground1 = $this->input->post('sampleBackground1');

			$data['sampleDetails']['sampleId1'] = $sampleId1;
			$data['sampleDetails']['sampleDescription1'] = $sampleDescription1;
			$data['sampleDetails']['wavelengthRange1'] = $wavelengthRange1;
			$data['sampleDetails']['sampleBackground1'] = $sampleBackground1;

			$this->session->set_userdata($data);

			// $this->dump($this->session->all_userdata());


			// TODO HARIS
			// come out with the quotation details for the template so that the user can confirm the payment details
			$this->load->view('templates/header');
			$this->load->view('pages/quatation');
			$this->load->view('templates/footer');
		}

		public function confirmBooking() {

			$total = $this->input->post('total');
			$equipmentCost = $this->input->post('equipmentCost');
			$fromDate = $this->input->post('fromDate');
			$toDate = $this->input->post('toDate');
			$fromTime = $this->input->post('fromTime');
			$toTime = $this->input->post('toTime');

			$this->Event_model->addEventsData(
				$fromDate. ' '. $fromTime,
				$toDate. ' '. $toTime
			);

			$userId = $this->session->userdata('user_id');

			$this->Expenses_model->addExpensesData($total + $equipmentCost, $fromDate, $userId);

			redirect('booking/history');
		}

		public function history() {

			$userId = $this->session->userdata('user_id');
			$userData = $this->Expenses_model->returnEventData($userId);
			$data['userData'] = $userData;

			$this->load->view('templates/header');
			$this->load->view('pages/bookingHistory', $data);
			$this->load->view('templates/footer');
		}

		public function uploadDocuments($itemId) {
			$data['itemId'] = $itemId;

			$this->load->view('templates/header');
			$this->load->view('pages/uploadDocuments', $data);
			$this->load->view('templates/footer');
		}

		public function uploadDocumentsAction() {
			// Upload Image
			$config['upload_path'] = './assets/images/uploads/';
			$config['allowed_types'] = 'gif|jpg|png|jpeg';
			$config['max_size'] = '2048';
			$config['max_width'] = '2000';
			$config['max_height'] = '2000';

			$this->load->library('upload', $config);
			$this->upload->initialize($config); //Make this line must be here.

			if(!$this->upload->do_upload('image')){
				$errors = array('error' => $this->upload->display_errors());
				$post_image = 'noimage.jpg';
			} else {
				$data = array('upload_data' => $this->upload->data());
				$post_image = $_FILES['image']['name'];
			}

			$itemId = $this->input->post('itemId');

			$this->Expenses_model->uploadDocument($itemId, $post_image);
			redirect('booking/history');
		}

		public function equipmentSelected() {

			$equipmentSelection = $this->input->post('equipmentSelection');

			// sets the selected equipment in the sessions so that can be used by the next forms
			$data['equipmentSelection'] = $equipmentSelection;

			$this->session->set_userdata($data);

			redirect('booking/calendar');
		}

		public function calendar() {
			$data['result'] = $this->db->get("events")->result();
	
			foreach ($data['result'] as $key => $value) {
				$data['data'][$key]['title'] = $value->title;
				$data['data'][$key]['start'] = $value->start_date;
				$data['data'][$key]['end'] = $value->end_date;
				$data['data'][$key]['backgroundColor'] = "#00a65a";
			}

			// gets the selected equipment from the sessions and then sends to the template
			if ($this->session->userdata('equipmentSelection')) {
				$data['equipmentSelection'] = $this->session->userdata('equipmentSelection');
			}

			// var_dump($data);
			// die;

			$this->load->view('templates/header');
			$this->load->view('pages/calendar', $data);
			$this->load->view('templates/footer');
		}

		function reservationUpdate() {
			$id = $this->input->post('id');
			$start = $this->input->post('start');
			$end = $this->input->post('end');
			$title = $this->input->post('title');
			$room_id = $this->input->post('room_id');

			$data['calendarSelection']['id'] = $id;
			$data['calendarSelection']['start'] = $start;
			$data['calendarSelection']['end'] = $end;
			$data['calendarSelection']['title'] = $title;
			$data['calendarSelection']['room_id'] = $room_id;

			$this->session->set_userdata($data);

		}

		public function individualBooking() {
			$data = [];
			$this->load->view('templates/header');
			$this->load->view('pages/individualBooking', $data);
			$this->load->view('templates/footer');
		}

		public function exportQuoatation() {

			var_dump('exportQuoatation');die;

			// $this->load->view('templates/header');
			// $this->load->view('pages/individualBooking', $data);
			// $this->load->view('templates/footer');

		}
	}
