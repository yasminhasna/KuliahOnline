<?php 
if(isset($grafik)){
foreach($grafik as $data){
    $total[] = $data['total'];
    $month[] = $data['month'];
}
}
?>
<aside class="control-sidebar control-sidebar-dark">
    <div class="p-3">
        <h5>Title</h5>
        <p>Sidebar content</p>
    </div>
</aside>
 
<footer class="main-footer">
    <div class="float-right d-none d-sm-inline">
        Aplikasi Kuliah Online
    </div>
    <strong><a href="<?php echo base_url('/'); ?>">Jurusan Ilmu Komputer, Fakultas Matematika dan Ilmu Pengetahuan Alam, Unila</a>.</strong> 2021.
</footer>
</div>
<script src="<?php echo base_url('themes/plugins'); ?>/jquery/jquery.min.js"></script>
<script src="<?php echo base_url('themes/plugins'); ?>/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?php echo base_url('themes/dist'); ?>/js/adminlte.min.js"></script>

</body>
</html>