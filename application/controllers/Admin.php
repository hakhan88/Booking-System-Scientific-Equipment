<?php
	class Admin extends CI_Controller {
		public function dashboard() {

            $eventData = $this->Expenses_model->returnAllEventData();
            $data['eventData'] = $eventData;

            $this->load->view('templates/header');
            $this->load->view('pages/adminDashboard', $data);
            $this->load->view('templates/footer');
        }

        public function pendingApproval($itemId) {
            $this->Expenses_model->approvePayment($itemId);
			redirect('admin/dashboard');
        }

        public function approvalStatusPage() {
            $eventData = $this->Expenses_model->returnAllEventData();
            $data['eventData'] = $eventData;

            $this->load->view('templates/header');
            $this->load->view('pages/approvalStatusPage', $data);
            $this->load->view('templates/footer');
        }

        public function reportPage() {
            $this->load->view('templates/header');
            $this->load->view('pages/reportPage');
            $this->load->view('templates/footer');
        }

        public function logsPage() {
            $this->load->view('templates/header');
            $this->load->view('pages/logsPage');
            $this->load->view('templates/footer');
        }

        public function maintainUser() {
            $this->load->view('templates/header');
            $data['users'] = [];
            $this->load->view('pages/maintainUser', $data);
            $this->load->view('templates/footer');
        }

        public function maintainUserSearch() {
            $email = $this->input->post('email');

            if ($email) {
				$data['users'] = $this->User_model->findUsers($email);
            }

            $this->load->view('templates/header');
            $this->load->view('pages/maintainUser', $data);
            $this->load->view('templates/footer');
        }

        public function updateUserRole() {
            $userId = $this->input->post('userId');
            $rolePermissions = $this->input->post('rolePermissions');
            $updateReselts = $this->User_model->updateUserPermission($userId, $rolePermissions);
        }

        public function reportsPage() {
            $this->load->view('templates/header');
            $this->load->view('pages/reportsPage');
            $this->load->view('templates/footer');
        } 

        public function sendUserMessage() {
            $this->load->view('templates/header');
            $this->load->view('pages/sendUserMessage');
            $this->load->view('templates/footer');
        }

        public function sendUserMessageDispatch() {
            redirect('admin/dashboard');
        }
	}
