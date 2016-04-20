	<?php
		$this->load->helper('form');
		$this->load->helper('url');
		
		if (empty($_POST['code'])) {
			//$label_id = array('id' => 'selectform',);
			$inputclass = 'class="formbox"';
			//$hidden = array('product_id'=>'1');
			//echo form_open('http://localhost/MPC-2/test/index.php/signup','');
			echo form_open('signup','');
			echo form_fieldset();
			//echo form_label('Code : ','code',$label_id);
			echo "<h4>Ready to sign up?<br>Enter and submit your promo code:</h4>";
			echo form_input('code',''. set_value('code') . '',$inputclass);
			echo "<br><br>";
			echo "<span style='font-size:12px;'>Don't have a promo code yet? <!--<a href='mailto:windowfilm@madico.com?SUBJECT=SUN-GARD Promo Code Request'>Click here.</a>--><a href='http://www.formstack.com/forms/?1495311-59h4ZFEcXU' target='_blank'>Click here.</a></span><br><br>";
			echo form_submit('submit', 'Submit');
			echo form_fieldset_close();
			echo form_close();
		} else {
			if ((strtolower($_POST['code']) == 'sg123') OR (strtolower($_POST['code']) == 'smx0410')){
				redirect('signup/submit/'.strtolower($_POST['code']).'', 'refresh');
			} 
			//if ($_POST['code'] == '123'){
			//	redirect('signup/submit/'.$_POST['code'].'', 'refresh');
			//} 
			//if ($_POST['code'] == '456'){
			//	redirect('signup/splash', 'refresh');
			//}
			else {
				redirect('signup', 'refresh');
			}
		}

	?>