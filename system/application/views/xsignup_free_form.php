	<?php
		$this->load->helper('form');
		$this->load->helper('url');
		
		//if (empty($_POST['code'])) {
			$label_id = array('id' => 'sellerform',);
			$inputclass = 'class="formbox"';
			$hidden = array('product_id'=>'1',);
			echo form_open('http://localhost/MPC-2/test/index.php/signup','');
			echo form_fieldset('Your Information');
			echo form_label('First Name : ','fname',$label_id);
			echo form_input('fname',''. set_value('fname') . '',$inputclass);
			echo "<br>";
			echo form_label('Last Name : ','lname',$label_id);
			echo form_input('lname',''. set_value('lname') . '',$inputclass);
			echo "<br>";
			echo form_label('Email : ','email',$label_id);
			echo form_input('email',''. set_value('email') . '',$inputclass);
			echo "<br>";
			echo form_fieldset_close();
			//echo form_submit('submit', 'Submit');
			echo form_close();
		//} else {
			//if (($_POST['code'] == '123') OR ($_POST['code'] == '456')){
				//redirect('http://localhost/MPC-2/test/index.php/signup/submit/'.$_POST['code'].'', 'refresh');
			//} 

			//else {
				//redirect('http://localhost/MPC-2/test/index.php/signup', 'refresh');
			//}
		//}

	?>