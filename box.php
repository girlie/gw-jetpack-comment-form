<?php
/*
Name: Jetpack Comment Form
Author: GirlieWorks, LLC
Description: Use Jetpack Comment Form
Version: 1.2
Class: gwthesis_jetpack_comment_form
*/

class gwthesis_jetpack_comment_form extends thesis_box {
	public function translate() {
		$this->title = __('Jetpack Comment Form', $this->_class);
	}
	
	public function html() {
		comment_form();
	 }
}