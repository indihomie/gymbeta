<?php  if ( ! defined("BASEPATH")) exit("No direct script access allowed");
	function generate_sidemenu()
	{
		return '<li>
		<a href="'.site_url('home').'">
		<i class="fa fa-home"></i> Home</a>
	</li>
	<li>
		<a href="'.site_url('customer').'">
		<i class="fa fa-user"></i> Customer</a>
	</li>
	<li>
		<a href="'.site_url('paket').'">
		<i class="fa fa-user"></i> Paket</a>
	</li>
	<li>
		<a href="'.site_url('pt').'">
		<i class="fa fa-user"></i> Personal Trainer</a>
	</li>
	<li>
		<a href="'.site_url('transaksi').'">
		<i class="fa fa-user"></i> Transaksi</a>
	</li>
	<li>
		<a href="'.site_url('adminlogin/logout').'">
		<i class="fa fa-user"></i> Logout</a>
	</li>
	';
	}

	function generate_sidemenu2()
	{
		return '
	<li>
		<a href="'.site_url('transaksi2').'">
		<i class="fa fa-user"></i> Transaksi</a>
	</li>
	<li>
		<a href="'.site_url('adminlogin/logout').'">
		<i class="fa fa-user"></i> Logout</a>
	</li>
	';
	}