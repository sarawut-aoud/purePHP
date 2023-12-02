<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS : Coffee</title>
    <?php print_r($this->data['another_css']) ?>
</head>

<body>


    <div class="wrapper">
        <div class="page-content">
            <?php include $this->data['content']; ?>
        </div>
    </div>




    <script src="<?php echo $this->data['base_url'] ?>/assets/js/jquery-3.6.0.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>/assets/js/ci_utilities.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>/assets/js/jquery-ui.min.js"></script>
    <script src="<?php echo $this->data['base_url'] ?>/assets/js/jquery.cookie.min.js"></script>
    <!-- another js -->
    <?php echo $this->data['another_js'] ?>
</body>

</html>