<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Dashboard</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
            </div>
        </div>
        </div>
    </div>
 
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $total_matakuliah; ?></h3>
 
                            <p>Mata Kuliah</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-book"></i>
                        </div>
                        <a href="<?php echo base_url('matakuliah'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $total_category; ?></h3>
 
                            <p>Categories</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-bars"></i>
                        </div>
                        <a href="<?php echo base_url('category'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-blue">
                        <div class="inner">
                            <h3><?php echo $total_prodi; ?></h3>
 
                            <p>Prodi</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-file"></i>
                        </div>
                        <a href="<?php echo base_url('prodi'); ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3><?php echo $total_user; ?></h3>
 
                            <p>Users</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">Anggota</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>NPM</th>
                                            <th>Tugas</th>
                                        </tr>
                                            <th>1.</th>
                                            <th>Nia Nur Atika</th>
                                            <th>1817051015</th>
                                            <th>BACKEND</th>
                                        </tr>
                                        <tr>
                                            <th>2.</th>
                                            <th>Eka Intan Sari</th>
                                            <th>1817051022</th>
                                            <th>BACKEND</th>
                                        </tr>
                                        <tr>
                                            <th>3.</th>
                                            <th>Yasmin Hasna</th>
                                            <th>1817051018</th>
                                            <th>FRONT END</th>
                                        </tr>
                                        <tr>
                                            <th>4.</th>
                                            <th>Atika Indah</th>
                                            <th>1857051009</th>
                                            <th>DATABASE</th>
                                        </tr>
                                    </thead>
                                    </table>
                            </div>
                        </div>
                    </div>  
                </div>
                <div class="col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h5 class="m-0">List Mata Kuliah</h5>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hovered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Mata Kuliah</th>
                                            <th>Kode Matkul</th>
                                            <th>SKS</th>
                                            <th>Semester</th>
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php foreach($latest_trx as $key => $row){ ?>
                                        <tr>
                                            <td><?php echo $key + 1; ?></td>
                                            <td><?php echo $row['kode_matakuliah']; ?></td>
                                            <td><?php echo date('j F Y', strtotime($row['trx_date'])); ?></td>
                                            <td><?php echo number_format($row['trx_semester'], false, false, "."); ?></td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>