<?php
class ModelExtensionPaymentEripExpressPay extends Model {
	public function getMethod($address, $total) {
		$this->load->language('extension/payment/erip_expresspay');
		
		$status = true;
				
		$method_data = array();
		
		if ($status) {
			$method_data = array(
				'code'       => 'erip_expresspay',
				'title'      => $this->language->get('text_title'),
				'terms'      => '',
				'sort_order' => $this->config->get('erip_expresspay_sort_order')
			);
		}
		
		return $method_data;
	}
}