<html>
<head>
  <title>TravelGo</title>
  <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</head>
<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
     <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">Travellike</a>
      </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li><a class="nav-link" href="<?php echo base_url(); ?>">Home</a></li>
        <li><a class="nav-link" href="<?php echo base_url(); ?>index.php/about">About</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <?php if(!$this->session->userdata('logged_in')) : ?>
          <li><a class="nav-link" href="<?php echo base_url(); ?>index.php/users/login">Login</a></li>
          <li><a class="nav-link" href="<?php echo base_url(); ?>index.php/users/register">Register</a></li>
        <?php endif; ?>
        <?php if($this->session->userdata('logged_in')) : ?>
          <li><a class="nav-link" href="<?php echo base_url(); ?>users/logout">Logout</a></li>
        <?php endif; ?>
      </ul>

      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </div>
    </div>
  </nav>






  <div class="container">
    <!-- Flash messages -->
    <?php if($this->session->flashdata('user_registered')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_registered').'</p>'; ?>
    <?php endif; ?>
    <?php if($this->session->flashdata('login_failed')): ?>
      <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedin')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedin').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('user_loggedout')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('user_loggedout').'</p>'; ?>
    <?php endif; ?>

    <?php if($this->session->flashdata('category_deleted')): ?>
      <?php echo '<p class="alert alert-success">'.$this->session->flashdata('category_deleted').'</p>'; ?>
    <?php endif; ?>
    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Header extends CI_Controller {

     public function index()
     {
       $this->load->view('View File', $data, FALSE);
     }

   }
   
   /* End of file header.php */
   /* Location: ./application/views/templates/header.php */