<?php namespace App\Controllers;
 
use App\Models\Dashboard_model;
 
class Dashboard extends BaseController
{
    public function __construct()
    {
        $this->dashboard_model = new Dashboard_model();
    }
     
    public function index()
    {
       
        $data['total_matakuliah']      = $this->dashboard_model->getCountMatakuliah();
        $data['total_category']     = $this->dashboard_model->getCountCategory();
        $data['total_prodi']     = $this->dashboard_model->getCountProdi();
        $data['total_user']         = $this->dashboard_model->getCountUser();
        $data['latest_trx']         = $this->dashboard_model->getLatestTrx();
 
        $chart['grafik']            = $this->dashboard_model->getGrafik();
 
        echo view('dashboard', $data);
        echo view('_partials/footer', $chart);
    }
     
}