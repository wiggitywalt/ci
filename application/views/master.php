<!DOCTYPE html>
<html>
  <head>
    <title><?php echo isset($title) ? "PHP Sandbox: $title" : NULL; ?></title>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
  </head>
  <body>
    <?php $this->load->view('layout/navigation'); ?>
    <div class="container">
      <?php $this->load->view($content); ?>
    </div>
      <script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>

  </body>
</html>
