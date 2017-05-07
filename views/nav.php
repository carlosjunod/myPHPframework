<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <?php foreach ($data as $key => $value): ?>
                  <li>
                      <a class="page-scroll" href="<?php echo $value; ?>"><?php echo $key; ?></a>
                  </li>
                <?php endforeach; ?>

                <!-- <li>
                    <a class="page-scroll" href="#download"><?php echo $data['home']; ?></a>
                </li>
                <li>
                    <a class="page-scroll" href="#features">Features</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li> -->
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
