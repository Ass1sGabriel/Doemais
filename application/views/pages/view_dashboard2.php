<div class="content">
  <div class="row">
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-money-coins text-success"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Total Doações</p>
                <p class="card-title"><?php echo 'R$ ' . number_format(floor($doacoes * 100) / 100, 2, ',', '.');; ?>
                <p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i> Atualizar
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-favourite-28 text-primary"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Total Usuários</p>
                <p class="card-title"><?= $usuarios ?>
                <p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i> Atualizar
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-vector text-danger"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Total Entidades</p>
                <p class="card-title"><?= $entidades ?>
                <p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i> Atualizar
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-lg-4 col-md-6 col-sm-6">
      <div class="card card-stats">
        <div class="card-body ">
          <div class="row">
            <div class="col-5 col-md-4">
              <div class="icon-big text-center icon-warning">
                <i class="nc-icon nc-globe text-warning"></i>
              </div>
            </div>
            <div class="col-7 col-md-8">
              <div class="numbers">
                <p class="card-category">Total Acessos**</p>
                <p class="card-title">150
                <p>
              </div>
            </div>
          </div>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-refresh"></i> Atualizar
          </div>
        </div>
      </div>
    </div> -->
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Novos usuários</h5>
          <p class="card-category">últimos 30 dias</p>
        </div>
        <div class="card-body ">
          <canvas id=chartHours width="400" height="100"></canvas>
        </div>
        <div class="card-footer ">
          <hr>
          <div class="stats">
            <i class="fa fa-history"></i> Updated 3 minutes ago
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-4">
      <div class="card ">
        <div class="card-header ">
          <h5 class="card-title">Email Statistics</h5>
          <p class="card-category">Last Campaign Performance</p>
        </div>
        <div class="card-body ">
          <canvas id="chartEmail"></canvas>
        </div>
        <div class="card-footer ">
          <div class="legend">
            <i class="fa fa-circle text-primary"></i> Opened
            <i class="fa fa-circle text-warning"></i> Read
            <i class="fa fa-circle text-danger"></i> Deleted
            <i class="fa fa-circle text-gray"></i> Unopened
          </div>
          <hr>
          <div class="stats">
            <i class="fa fa-calendar"></i> Number of emails sent
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-8">
      <div class="card card-chart">
        <div class="card-header">
          <h5 class="card-title">NASDAQ: AAPL</h5>
          <p class="card-category">Line Chart with Points</p>
        </div>
        <div class="card-body">
          <canvas id="speedChart" width="400" height="100"></canvas>
        </div>
        <div class="card-footer">
          <div class="chart-legend">
            <i class="fa fa-circle text-info"></i> Tesla Model S
            <i class="fa fa-circle text-warning"></i> BMW 5 Series
          </div>
          <hr />
          <div class="card-stats">
            <i class="fa fa-check"></i> Data information certified
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<footer class="footer footer-black  footer-white ">
  <div class="container-fluid">
    <div class="row">
      <nav class="footer-nav">
        <!-- <ul>
          <li><a href="" target="_blank">Algo</a></li>
          <li><a href="" target="_blank">Algo</a></li>
          <li><a href="" target="_blank">Algo</a></li>
        </ul> -->
      </nav>
      <div class="credits ml-auto">
        <span class="copyright">
          © <script>
            document.write(new Date().getFullYear())
          </script>Feito por DoeMais Tecnologias
        </span>
      </div>
    </div>
  </div>
</footer>
</div>
</div>
<!--   Core JS Files   -->
<script src="<?php echo base_url('public/assets/js/core/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('public/assets/js/core/popper.min.js'); ?>"></script>
<!-- <script src="public/assets/js/core/bootstrap.min.js"></script> -->
<script src="<?php echo base_url('public/assets/js/plugins/perfect-scrollbar.jquery.min.js'); ?>"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="<?php echo base_url('public/assets/js/plugins/chartjs.min.js'); ?>"></script>
<!--  Notifications Plugin    -->
<script src="<?php echo base_url('public/assets/js/plugins/bootstrap-notify.js'); ?>"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="<?php echo base_url('public/assets/js/paper-dashboard.min.js?v=2.0.1'); ?>" type="text/javascript"></script>
<!-- Paper Dashboard DEMO methods, don't include it in your project! -->
<script src="<?php echo base_url('public/assets/demo/demo.js'); ?>"></script>
<script>
  $(document).ready(function() {
    // Javascript method's body can be found in assets/assets-for-demo/js/demo.js
    demo.initChartsPages();
  });
</script>
</body>

</html>