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
                <?php
                  // var_dump($data);
                 ?>

                <?php foreach ($data as $key => $value): ?>
                  <li>
                      <?php
                      $current = $data['active'];

                      if ($key != 'active'): ?>
                        <a class="page-scroll <?=@$key == $current ? 'active':''?>" href="<?= $value; ?>">
                          <?= $key;  ?>
                        </a>
                      <?php endif; ?>

                  </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
