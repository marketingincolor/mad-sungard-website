<?php 
	$data = $title;
	$this->load->view('includes/header_3',$data); ?>

<?php $this->load->view($main_content); ?>

<?php $this->load->view('includes/footer_3'); ?>