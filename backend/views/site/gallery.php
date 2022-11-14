<?php

use yii\helpers\Url;

?>

<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Gallery</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?=Url::to(['site/index']);?>">Home</a></li>
                    <li class="breadcrumb-item active">January</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <div class="card-title">
                            January 2022
                        </div>
                    </div>
                    <div class="card-body">
                        <div>
                            <div class="btn-group w-100 mb-2">
                                <a class="btn btn-info active" href="javascript:void(0)" data-filter="all"> All items </a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="1">NDVI</a>
                                <a class="btn btn-info" href="javascript:void(0)" data-filter="2">NDMI</a>
                            </div>
                            <div class="mb-2">

                            </div>
                        </div>
                        <div>
                            <div class="filter-container row">
                                <div class="filtr-item col-sm-2" data-category="1" data-sort="black sample">
                                    <a href="<?=Url::to(['/dist/img/analitics/month/jan/img1.png'])?>" data-toggle="lightbox" data-title="sample 2 - black">
                                        <img src="https://eos.com/wp-content/uploads/2021/06/interface-tablet.jpg" style="width: 216px; height: 216px;background-size: 100% 100%;background-position: center center" class="img-fluid mb-2" alt="black sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="2" data-sort="black sample">
                                    <a href="https://via.placeholder.com/1200/000000.png?text=2" data-toggle="lightbox" data-title="sample 2 - black">
                                        <img src="https://via.placeholder.com/300/000000?text=2" class="img-fluid mb-2" alt="black sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="1" data-sort="red sample">
                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=3" data-toggle="lightbox" data-title="sample 3 - red">
                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=3" class="img-fluid mb-2" alt="red sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="2" data-sort="red sample">
                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=4" data-toggle="lightbox" data-title="sample 4 - red">
                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=4" class="img-fluid mb-2" alt="red sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="1" data-sort="black sample">
                                    <a href="https://via.placeholder.com/1200/000000.png?text=5" data-toggle="lightbox" data-title="sample 5 - black">
                                        <img src="https://via.placeholder.com/300/000000?text=5" class="img-fluid mb-2" alt="black sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="2" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=6" data-toggle="lightbox" data-title="sample 6 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=6" class="img-fluid mb-2" alt="white sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=7" data-toggle="lightbox" data-title="sample 7 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=7" class="img-fluid mb-2" alt="white sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="2" data-sort="black sample">
                                    <a href="https://via.placeholder.com/1200/000000.png?text=8" data-toggle="lightbox" data-title="sample 8 - black">
                                        <img src="https://via.placeholder.com/300/000000?text=8" class="img-fluid mb-2" alt="black sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="1" data-sort="red sample">
                                    <a href="https://via.placeholder.com/1200/FF0000/FFFFFF.png?text=9" data-toggle="lightbox" data-title="sample 9 - red">
                                        <img src="https://via.placeholder.com/300/FF0000/FFFFFF?text=9" class="img-fluid mb-2" alt="red sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="2" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=10" data-toggle="lightbox" data-title="sample 10 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=10" class="img-fluid mb-2" alt="white sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                                    <a href="https://via.placeholder.com/1200/FFFFFF.png?text=11" data-toggle="lightbox" data-title="sample 11 - white">
                                        <img src="https://via.placeholder.com/300/FFFFFF?text=11" class="img-fluid mb-2" alt="white sample"/>
                                    </a>
                                </div>
                                <div class="filtr-item col-sm-2" data-category="2" data-sort="black sample">
                                    <a href="https://via.placeholder.com/1200/000000.png?text=12" data-toggle="lightbox" data-title="sample 12 - black">
                                        <img src="https://via.placeholder.com/300/000000?text=12" class="img-fluid mb-2" alt="black sample"/>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->