<?php
defined('BASEPATH') or exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';
use Restserver\Libraries\REST_Controller;
class Pos extends REST_Controller 
{
    public function __construct()
    {
        header("Access-Control-Allow-Origin: *");
        header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
        header("Access-Control-Allow-Headers: Content-Type, Content-Length, Accept-Encoding,Authorization");
        parent::__construct();
        $this->load->model('Pos_Model');
        $this->load->library('form_validation');
        $headers = $this->input->request_headers();
        if (isset($headers['Authorization'])) {
            $decodedToken = $this->authorization_token->validateToken($headers['Authorization']);
            if ($decodedToken['status'] === FALSE) {
                $this->response([
                    'status' => FALSE,
                    'message' => 'Unauthorized access'
                ], REST_Controller::HTTP_UNAUTHORIZED);
                exit; 
            }
        } else {
            $this->response([
                'status' => FALSE,
                'message' => 'Authorization token not found'
            ], REST_Controller::HTTP_UNAUTHORIZED);
            exit; 
        }
    }

    public function pos_get()
    {
        try{
            $res = $this->Pos_Model->getpos();
            $this->response([
                'status' => TRUE,
                'data' => $res
            ], REST_Controller::HTTP_UNAUTHORIZED);


        }catch(\Exception $e){
            $this->response([
                'status' => FALSE,
                'message' => $e->getMessage()
            ], REST_Controller::HTTP_UNAUTHORIZED);
        }
    
    }
    public function pos_post()
    {
        try{
            $this->form_validation->set_rules('receipt_no', 'Receipt Number', 'required|numeric');
            $this->form_validation->set_rules('invoice_date', 'Invoice Date', 'required');
            $this->form_validation->set_rules('invoice_amt', 'Invoice Amount', 'required|numeric');
            $this->form_validation->set_rules('tax_amt', 'Tax Amount', 'required|numeric');
            $this->form_validation->set_rules('taxable_sale', 'Taxable Sale', 'required');
            $this->form_validation->set_rules('transaction_status', 'Transaction Status', 'required');
            $this->form_validation->set_rules('payment_status', 'Payment Status', 'required');
            
            if($this->form_validation->run() == FALSE){
                $this->response([
                    'status' => FALSE,
                    'message' => $this->form_validation->error_array()
                ], REST_Controller::HTTP_UNAUTHORIZED);
            }else{
                $tran['receipt_no'] = $this->input->post('receipt_no') ?? NULL;
                $tran['invoice_date'] = $this->input->post('invoice_date') ?? NULL;
                $tran['invoice_amt'] = $this->input->post('invoice_amt') ?? NULL;
                $tran['tax_amt'] = $this->input->post('tax_amt') ?? NULL;
                $tran['taxable_sale'] = $this->input->post('taxable_sale') ?? NULL;
                $tran['transaction_status'] = $this->input->post('transaction_status') ?? NULL;
                $tran['payment_status'] = $this->input->post('payment_status') ?? NULL;
                $tran['status'] = '1';

                $tdata = $this->db->insert('transactions',$tran);
                 
                $this->response([
                    'status' => TRUE,
                    'data' => 'Data Inserted Successfully!'
                ], REST_Controller::HTTP_UNAUTHORIZED);
            }

        }catch(\Exception $e){
            $this->response([
                'status' => FALSE,
                'message' => $e->getMessage()
            ], REST_Controller::HTTP_UNAUTHORIZED);
        }
    
    }

    /*    
    public function pos2_post()
    {
        try{
            $this->form_validation->set_rules('RCPT_NUM', 'Receipt Number', 'required|numeric');
            $this->form_validation->set_rules('RCPT_DT', 'Invoice Date', 'required');
            $this->form_validation->set_rules('INV_AMT', 'Invoice Amount', 'required|numeric');
            $this->form_validation->set_rules('TAX_AMT', 'Tax Amount', 'required|numeric');
            $this->form_validation->set_rules('TRAN_STATUS', 'Transaction Status', 'required');
            $this->form_validation->set_rules('PAYMENT_STATUS', 'Payment Status', 'required');
            
            if($this->form_validation->run() == FALSE){
                $this->response([
                    'status' => FALSE,
                    'message' => $this->form_validation->error_array()
                ], REST_Controller::HTTP_UNAUTHORIZED);
            }else{
                $comm['RCPT_NUM'] = $this->input->post('RCPT_NUM') ?? NULL;
                $comm['LOCATION_CODE'] = $this->input->post('LOCATION_CODE') ?? NULL;
                $comm['TERMINAL_ID'] = $this->input->post('TERMINAL_ID') ?? NULL;
                $comm['SHIFT_NO'] = $this->input->post('SHIFT_NO') ?? NULL;
                $comm['BC_EXCH'] = $this->input->post('BC_EXCH') ?? NULL;
                $comm['OP_CUR'] = $this->input->post('OP_CUR') ?? NULL;

                $tran['RCPT_DT'] = $this->input->post('RCPT_DT') ?? NULL;
                $tran['BUSINESS_DT'] = $this->input->post('BUSINESS_DT') ?? NULL;
                $tran['RCPT_TM'] = $this->input->post('RCPT_TM') ?? NULL;
                $tran['INV_AMT'] = $this->input->post('INV_AMT') ?? NULL;
                $tran['RET_AMT'] = $this->input->post('RET_AMT') ?? NULL;
                $tran['TRAN_STATUS'] = $this->input->post('TRAN_STATUS') ?? NULL;


                $ptm['PAYMENT_NAME'] = $this->input->post('PAYMENT_NAME') ?? NULL;
                $ptm['CURRENCY_CODE'] = $this->input->post('CURRENCY_CODE') ?? NULL;
                $ptm['PAYMENT_NAME'] = $this->input->post('PAYMENT_NAME') ?? NULL;
                $ptm['EXCHANGE_RATE'] = $this->input->post('EXCHANGE_RATE') ?? NULL;
                $ptm['TENDER_AMOUNT'] = $this->input->post('TENDER_AMOUNT') ?? NULL;
                $ptm['PAYMENT_STATUS'] = $this->input->post('PAYMENT_STATUS') ?? NULL;

                $item['ITEM_CODE'] = $this->input->post('ITEM_CODE') ?? NULL;
                $item['ITEM_NAME'] = $this->input->post('ITEM_NAME') ?? NULL;
                $item['ITEM_QTY'] = $this->input->post('ITEM_QTY') ?? NULL;
                $item['ITEM_PRICE'] = $this->input->post('ITEM_PRICE') ?? NULL;
                $item['ITEM_CAT'] = $this->input->post('ITEM_CAT') ?? NULL;
                $item['ITEM_TAX'] = $this->input->post('ITEM_TAX') ?? NULL;
                $item['ITEM_TAX_TYPE'] = $this->input->post('ITEM_TAX_TYPE') ?? NULL;
                $item['ITEM_NET_AMT'] = $this->input->post('ITEM_NET_AMT') ?? NULL;
                $item['ITEM_STATUS'] = $this->input->post('ITEM_STATUS') ?? NULL;

                $trans_data = $tran + $comm;
                $ptm_data = $ptm + $comm;
                $item_data = $item + $comm;
                
                $idata = $this->db->insert('itemdetails',$item_data);
                $pdata = $this->db->insert('paymentdetails',$ptm_data);
                $tdata = $this->db->insert('transactions',$trans_data);
                 
                $this->response([
                    'status' => TRUE,
                    'data' => 'Data Inserted Successfully!'
                ], REST_Controller::HTTP_UNAUTHORIZED);
            }



        }catch(\Exception $e){
            $this->response([
                'status' => FALSE,
                'message' => $e->getMessage()
            ], REST_Controller::HTTP_UNAUTHORIZED);
        }
    
    } 
    */


}