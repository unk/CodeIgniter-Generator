<?php
/**
 * Created by IntelliJ IDEA.
 * User: Kim Naram a.k.a Unknown
 * Date: 2014. 1. 15.
 * Time: 오전 11:01
 */

class MY_Pagination extends CI_Pagination
{
	public function __construct()
	{
		parent::__construct();

		$this->num_links = 4;
		$this->use_page_numbers = TRUE;
		$this->full_tag_open = '<li>';
		$this->full_tag_close = '</li>';
		$this->cur_tag_open = '<li class="selected"><a href="">';
		$this->cur_tag_close = '</a></li>';
		$this->num_tag_open = '<li>';
		$this->num_tag_close = '</li>';

		$this->first_link = '&laquo;&laquo;';
		$this->first_tag_open = '<li>';
		$this->first_tag_close = '</li>';
		$this->prev_link = '&laquo;';
		$this->prev_tag_open = '<li>';
		$this->prev_tag_close = '</li>';
		$this->next_link = '&raquo;';
		$this->next_tag_open = '<li>';
		$this->next_tag_close = '</li>';
		$this->last_link = '&raquo;&raquo;';
		$this->last_tag_open = '<li>';
		$this->last_tag_close = '</li>';
	}
} 