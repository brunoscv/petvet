
<!-- ============================================================== -->
<!-- Container fluid  -->
<!-- ============================================================== -->
<div class="container-fluid">
    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Buscar Clinicas</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Página Inicial</a></li>
                <li class="breadcrumb-item active">Buscar Clinicas</li>
            </ol>
        </div>
        <style type="text/css">
            .breadcrumb a {
                color: #43A047;
            }
        </style>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>THIS MONTH</small></h6>
                        <h4 class="m-t-0 text-info">$58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>LAST MONTH</small></h6>
                        <h4 class="m-t-0 text-primary">$48,356</h4></div>
                    <div class="spark-chart">
                        <div id="lastmonthchart"></div>
                    </div>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-success btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
        </div>
    </div>

    <!-- GALERIA DE CATEGORIAS -->
    <section class="categoriesCards" style="margin: 6em 0 0  0">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="section-title text-center">
                            <h1 style="margin-bottom:1em"> Nossas clínicas estão prontas para te atender. </h1>     
                        </div>
                    </div>
                </div>
                <div>
                    <form class="form-control-line" style="padding-top:2em">
                        <div class="form-body">
                            <div class="row">
                            <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="" for="pacientes_id">Cidade</label>
                                        <select class="form-control" aria-invalid="false">
                                            <option>Teresina, Piaui</option>
                                            <option>Teresina, Piaui</option>
                                            <option>Teresina, Piaui</option>
                                            <option>Teresina, Piaui</option>
                                            <option>Teresina, Piaui</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="" for="pacientes_id">Serviço</label>
                                        <select class="form-control" aria-invalid="false">
                                            <option>Análises Clinicas</option>
                                            <option>Consultas</option>
                                            <option>Banhos e Tosas</option>
                                            <option>Medicamentos</option>
                                            <option>Rações</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">
                                        <label class="" for="pacientes_id">Porte Animal</label>
                                        <select class="form-control" aria-invalid="false">
                                            <option>Toy</option>
                                            <option>Pequeno</option>
                                            <option>Médio</option>
                                            <option>Grande</option>
                                            <option>Extra Grande</option>
                                        </select>
                                    </div>
                                </div>
                        
                               
                            </div>
                            <p style="text-align:center; padding: 2em 0; text-transform: uppercase;"><a href="<?php echo site_url(). 'clinics/';?>" class="btn btn-success" style="text-transform: uppercase; padding: 1em; font-weight:700; color:#fff">Buscar clínicas parceiras aqui</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Start Page Content -->
    <!-- ============================================================== -->
    
    <!-- GALERIA DE CATEGORIAS -->
    <section class="categoriesCards" style="margin: 6em 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="section-title text-center">
                        <h1 style="margin-bottom:1em"> Nossos Melhores resultados:  </h1>     
                    </div>
                </div>
            </div>
            <div class="row"> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                        <!-- <h4 class="sub-category-card text-center">Nós temos as melhores opções.</h4>  -->
                        <div class="category-card" style="text-align:center; background: #fff;"> 
                            <img style="width:50%;" src="<?php echo base_url().'assets/images/pet_verde.png';?>" alt="">
                        </div>
                        <p style="text-align: center; font-weight:bold;">Clinica VetPet</p>
                        <p style="text-align:center; padding: 2em 0; text-transform: uppercase;">
                            <a class="btn btn-success" href="<?php echo site_url(). 'details/'; ?>" 
                            style="text-transform: uppercase; padding: 1em; font-weight:700; color: #fff;">Ver Detalhes</a>
                        </p>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                        <!-- <h4 class="sub-category-card text-center">A Seu Canto é comunicação!</h4>  -->
                        <div class="category-card" style="text-align:center; background: #fff;"> 
                            <img style="width:50%;" src="<?php echo base_url().'assets/images/pet_verde.png';?>" alt="">
                        </div>
                        <p style="text-align: center; font-weight:bold;">Clinica VetPet</p>
                        <p style="text-align:center; padding: 2em 0; text-transform: uppercase;">
                            <a class="btn btn-success" href="<?php echo site_url(). 'details/'; ?>" 
                            style="text-transform: uppercase; padding: 1em; font-weight:700; color: #fff;">Ver Detalhes</a>
                        </p>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                        <!-- <h4 class="sub-category-card text-center">Economize tempo.</h4>  -->
                        <div class="category-card" style="text-align:center; background: #fff;"> 
                            <img style="width:50%;" src="<?php echo base_url().'assets/images/pet_verde.png';?>" alt="">
                        </div>
                        <p style="text-align: center; font-weight:bold;">Clinica VetPet</p>
                        <p style="text-align:center; padding: 2em 0; text-transform: uppercase;">
                            <a class="btn btn-success" href="<?php echo site_url(). 'details/'; ?>" 
                            style="text-transform: uppercase; padding: 1em; font-weight:700; color: #fff;">Ver Detalhes</a>
                        </p>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                        <!-- <h4 class="sub-category-card text-center">Economize tempo.</h4>  -->
                        <div class="category-card" style="text-align:center; background: #fff;"> 
                            <img style="width:50%;" src="<?php echo base_url().'assets/images/pet_verde.png';?>" alt="">
                        </div>
                        <p style="text-align: center; font-weight:bold;">Clinica VetPet</p>
                        <p style="text-align:center; padding: 2em 0; text-transform: uppercase;">
                            <a class="btn btn-success" href="<?php echo site_url(). 'details/'; ?>" 
                            style="text-transform: uppercase; padding: 1em; font-weight:700; color: #fff;">Ver Detalhes</a>
                        </p>
                </div> 
            </div>
            <div class="row"> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                        <!-- <h4 class="sub-category-card text-center">Nós temos as melhores opções.</h4>  -->
                        <div class="category-card" style="text-align:center; background: #fff;"> 
                            <img style="width:50%;" src="<?php echo base_url().'assets/images/pet_verde.png';?>" alt="">
                        </div>
                        <p style="text-align: center; font-weight:bold;">Clinica VetPet</p>
                        <p style="text-align:center; padding: 2em 0; text-transform: uppercase;">
                            <a class="btn btn-success" href="<?php echo site_url(). 'details/'; ?>" 
                            style="text-transform: uppercase; padding: 1em; font-weight:700; color: #fff;">Ver Detalhes</a>
                        </p>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                        <!-- <h4 class="sub-category-card text-center">A Seu Canto é comunicação!</h4>  -->
                        <div class="category-card" style="text-align:center; background: #fff;"> 
                            <img style="width:50%;" src="<?php echo base_url().'assets/images/pet_verde.png';?>" alt="">
                        </div>
                        <p style="text-align: center; font-weight:bold;">Clinica VetPet</p>
                        <p style="text-align:center; padding: 2em 0; text-transform: uppercase;">
                            <a class="btn btn-success" href="<?php echo site_url(). 'details/'; ?>" 
                            style="text-transform: uppercase; padding: 1em; font-weight:700; color: #fff;">Ver Detalhes</a>
                        </p>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                        <!-- <h4 class="sub-category-card text-center">Economize tempo.</h4>  -->
                        <div class="category-card" style="text-align:center; background: #fff;"> 
                            <img style="width:50%;" src="<?php echo base_url().'assets/images/pet_verde.png';?>" alt="">
                        </div>
                        <p style="text-align: center; font-weight:bold;">Clinica VetPet</p>
                        <p style="text-align:center; padding: 2em 0; text-transform: uppercase;">
                            <a class="btn btn-success" href="<?php echo site_url(). 'details/'; ?>" 
                            style="text-transform: uppercase; padding: 1em; font-weight:700; color: #fff;">Ver Detalhes</a>
                        </p>
                </div> 
                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <!-- <span class="icon-category-card fa fa-calendar"></span>  -->
                        <!-- <h4 class="sub-category-card text-center">Economize tempo.</h4>  -->
                        <div class="category-card" style="text-align:center; background: #fff;"> 
                            <img style="width:50%;" src="<?php echo base_url().'assets/images/pet_verde.png';?>" alt="">
                        </div>
                        <p style="text-align: center; font-weight:bold;">Clinica VetPet</p>
                        <p style="text-align:center; padding: 2em 0; text-transform: uppercase;">
                            <a class="btn btn-success" href="<?php echo site_url(). 'details/'; ?>" 
                            style="text-transform: uppercase; padding: 1em; font-weight:700; color: #fff;">Ver Detalhes</a>
                        </p>
                </div> 
            </div>
        </div>
    </section>
    <!-- GALERIA DE CATEGORIAS -->

    <!-- Row -->
    <!-- <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Browser Stats</h4>
                    <table class="table browser m-t-30 no-border">
                        <tbody>
                            <tr>
                                <td style="width:40px"><img src="<?php echo base_url() ?>assets/images/browser/chrome-logo.png" alt=logo /></td>
                                <td>Google Chrome</td>
                                <td class="text-right"><span class="label label-light-info">23%</span></td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo base_url() ?>assets/images/browser/firefox-logo.png" alt=logo /></td>
                                <td>Mozila Firefox</td>
                                <td class="text-right"><span class="label label-light-success">15%</span></td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo base_url() ?>assets/images/browser/safari-logo.png" alt=logo /></td>
                                <td>Apple Safari</td>
                                <td class="text-right"><span class="label label-light-primary">07%</span></td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo base_url() ?>assets/images/browser/internet-logo.png" alt=logo /></td>
                                <td>Internet Explorer</td>
                                <td class="text-right"><span class="label label-light-warning">09%</span></td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo base_url() ?>assets/images/browser/opera-logo.png" alt=logo /></td>
                                <td>Opera mini</td>
                                <td class="text-right"><span class="label label-light-danger">23%</span></td>
                            </tr>
                            <tr>
                                <td><img src="<?php echo base_url() ?>assets/images/browser/internet-logo.png" alt=logo /></td>
                                <td>Microsoft edge</td>
                                <td class="text-right"><span class="label label-light-megna">09%</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div> -->
    
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->
    <!-- .right-sidebar -->
    <!-- ============================================================== -->
    <!-- End Right sidebar -->
    <!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Container fluid  -->
<!-- ============================================================== -->