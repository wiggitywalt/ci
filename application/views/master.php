<!DOCTYPE html>
<html>
  <head>
    <title><?php echo isset($title) ? "$title" : NULL; ?></title>
    <link rel="stylesheet" href="<?php echo asset_url() ?>bootstrap.min.css"  type="text/css" />
    <link rel="stylesheet" href="<?php echo asset_url() ?>site.css"  type="text/css" />
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="span12">
          <ul class="nav nav-tabs">
            <li><a href="/ci/">Home</a></li>
            <li><a href="/ci/about">About</a></li>
            <li><a href="/ci/contact">Contact</a></li>
            <li><a href="/ci/another">Another</a></li>
          </ul>
        </div>
      </div>
      <?php $this->load->view($content); ?>
    </div>
      <script type="text/javascript" src="jquery-2.1.4.min.js"></script>
  </body>
</html>
