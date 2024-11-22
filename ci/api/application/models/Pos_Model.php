<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pos_Model extends CI_Model{


      public function getpos(){
            $transactions = $this->db->select('*')->get('transactions')->result();
            return [
                  'Transactions'=> $transactions
            ];
      } 

      /* 
      public function getpos(){
            $transactions = $this->db->select('*')->get('transactions')->result();
            $items = $this->db->select('*')->get('itemdetails')->result();
            $payments = $this->db->select('*')->get('paymentdetails')->result();
            
            return [
                  'Transactions'=> $transactions,
                  'ItemDetail'=> $items,
                  'PaymentDetail'=> $payments
            ];
      } */
}