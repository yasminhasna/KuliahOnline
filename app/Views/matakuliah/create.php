<?php echo view('_partials/header'); ?>
<?php echo view('_partials/sidebar'); ?>
 
<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0 text-blue">Create Matakuliah</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Create Matakuliah</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <?php 
            $inputs = session()->getFlashdata('inputs');
            $errors = session()->getFlashdata('errors');
            if(!empty($errors)){ ?>
            <div class="alert alert-danger" role="alert">
              Whoops! Ada kesalahan saat input data, yaitu:
              <ul>
              <?php foreach ($errors as $error) : ?>
                  <li><?= esc($error) ?></li>
              <?php endforeach ?>
              </ul>
            </div>
          <?php } ?>
          <?php echo form_open_multipart('matakuliah/store'); ?>
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group"> 
                    <?php 
                      echo form_label('Category', 'Category');
                      echo form_dropdown('category_id', $categories, $inputs['category_id'], ['class' => 'form-control']); 
                    ?>
                  </div>
                  <div class="form-group">
                    <?php 
                      echo form_label('Kode_matakuliah');
                      $kode_matakuliah = [
                        'type'  => 'text',
                        'name'  => 'kode_matakuliah',
                        'id'    => 'kode_matakuliah',
                        'value' => $inputs['kode_matakuliah'],
                        'class' => 'form-control',
                        'placeholder' => 'Kode Matakuliah'
                      ];
                      echo form_input($kode_matakuliah); 
                    ?>
                  </div>
                  <div class="form-group">
                    <?php 
                      echo form_label('Semester');
                      $semester = [
                        'type'  => 'number',
                        'name'  => 'semester',
                        'id'    => 'semester',
                        'value' => $inputs['semester'],
                        'class' => 'form-control',
                        'placeholder' => '0'
                      ];
                      echo form_input($semester); 
                    ?>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <?php 
                      echo form_label('SKS');
                      $sks = [
                        'type'  => 'text',
                        'name'  => 'sks',
                        'id'    => 'sks',
                        'value' => $inputs['sks'],
                        'class' => 'form-control',
                        'placeholder' => 'SKS'
                      ];
                      echo form_input($sks); 
                    ?>
                  </div>
                  <div class="form-group"> 
                    <?php 
                      echo form_label('Prodi', 'Prodi');
                      echo form_dropdown('prodi_id', $prodi, $inputs['prodi_id'], ['class' => 'form-control']); 
                    ?>
                  </div>
                  <div class="form-group">
                    <?php 
                      echo form_label('Status', 'Status');
                      echo form_dropdown('product_status', ['' => 'Pilih', 'Active' => 'Active', 'Inactive' => 'Inactive'], $inputs['product_status'], ['class' => 'form-control']); 
                    ?>
                  </div>
                  <div class="form-group">
                    <?php 
                      echo form_label('Document');
                      echo form_upload('document', '', ['class' => 'form-control']); 
                    ?>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <?php 
                      echo form_label('Description'); 
                      $description = [
                        'type'  => 'text',
                        'name'  => 'description',
                        'id'    => 'description',
                        'value' => $inputs['description'],
                        'class' => 'form-control',
                        'placeholder' => 'Description'
                      ];
                      echo form_textarea($description);
                    ?>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer">
                <a href="<?php echo base_url('matakuliah'); ?>" class="btn btn-outline-info">Back</a>
                <button type="submit" class="btn btn-primary float-right">Simpan</button>
            </div>
          </div>
          <?php echo form_close(); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php echo view('_partials/footer'); ?>