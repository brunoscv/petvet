<div class="container-fluid">
    <!-- Bread crumb and right sidebar toggle -->
    <div class="row page-titles">
        <div class="col-md-5 col-8 align-self-center">
            <h3 class="text-themecolor m-b-0 m-t-0">Clinica Veterinária VETPET</h3>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item">Teresina</li>
                <li class="breadcrumb-item active">Piauí</li>
            </ol>
        </div>
        <div class="col-md-7 col-4 align-self-center">
            <div class="d-flex m-t-10 justify-content-end">
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Esse mês</small></h6>
                        <h4 class="m-t-0 text-info">58,356</h4></div>
                    <div class="spark-chart">
                        <div id="monthchart"></div>
                    </div>
                </div>
                <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                    <div class="chart-text m-r-10">
                        <h6 class="m-b-0"><small>Último Mês</small></h6>
                        <h4 class="m-t-0 text-info">48,356</h4></div>
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
    <!-- End Bread crumb and right sidebar toggle -->
    <style type="text/css">
        .breadcrumb a {
            color: #43A047;
        }
    </style>
    
    <section class="categoriesCards" style="margin: 4em 0;">
        <div class="container">
            <div class="row">
                <div class="col-8 m-t-30">
                    <!-- The slideshow -->
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="<?php echo base_url().'assets/images/vets/1.jpg';?>" style="width:100%;">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url().'assets/images/vets/2.png';?>"  style="width:100%;">
                            </div>
                            <div class="carousel-item">
                                <img src="<?php echo base_url().'assets/images/vets/3.jpg';?>" style="width:100%;" >
                            </div>
                        </div>
                    
                        <!-- Left and right controls -->
                        <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
                            <span class="carousel-control-prev-icon"></span>
                        </a>
                        <a class="carousel-control-next" href="#myCarousel" data-slide="next">
                            <span class="carousel-control-next-icon"></span>
                        </a>
                    </div>
                </div>
                <aside class="col-lg-4 col-md-4 col-sm-4 col-xs-12 m-t-30"> 
                    <div class="card card-outline-default">
                        <div class="card-body" style="min-height:34.2em;">
                            <p class="card-text"><i class="fa fa-gears"></i> Serviços</p>
                            <hr>
                            <form class="form-control-line">
                                <div class="form-body">
                                    <div class="row">
                                        <div class="col-sm-10" style="margin: 0 auto;">
                                            <div class="form-group">
                                                <select class="form-control" aria-invalid="false">
                                                    <option>Análises Clinicas</option>
                                                    <option>Consultas</option>
                                                    <option>Banhos e Tosas</option>
                                                    <option>Medicamentos</option>
                                                    <option>Rações</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <hr>
                            <div id="calendario"></div>
                            <a href="<?php echo site_url(). 'payments/';?>" class="btn btn-block btn-success text-white"> <i class="fa fa-calendar"></i></a>
                        </div>
                    </div>  
                </aside>
            </div>
        </div>
        <!-- End Row -->
    </section>

    <section class="categoriesCards">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span class="card-title" style="font-size: 1.2em">Clinica Veterinária VETPET</span>
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                            </div>
                        </div>
                        <div class="card-body collapse show">
                            <p class="card-text" style="text-indent:2em; text-align:justify;">                
                                Movida pela paixão à medicina veterinária e apelidada pelos seus clientes como Veveta, tem como missão proporcionar o melhor atendimento clínico, cirúrgico e diagnóstico ao seu amigo pet.
                                Equipamentos e instalações modernas, aliadas ao alto padrão de higiene, sempre foram a nossa preocupação.
                                Nosso atendimento vai além do consultório, onde você tem acesso ao médico veterinário 24 horas por dia através das mídias sociais, assim estamos à sua disposição principalmente nos momentos emergenciais.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="categoriesCards">
        <div class="container">
            <!-- Row -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <span><i class="fa fa-map-marker"></i> Localização da Clinica</span>
                            <div class="card-actions">
                                <a class="" data-action="collapse"><i class="ti-minus"></i></a>
                                <a class="btn-minimize" data-action="expand"><i class="mdi mdi-arrow-expand"></i></a>
                                <a class="btn-close" data-action="close"><i class="ti-close"></i></a>
                            </div>
                        </div>
                        <div class="card-body collapse show">
                            <img src="<?php echo base_url().'assets/images/maps.jpg';?>" style="width:100%;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>