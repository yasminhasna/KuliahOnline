<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\Matakuliah_model;
use App\Models\Category_model;
Use App\Models\Prodi_model;
  
class Matakuliah extends Controller
{
    protected $helpers = [];
 
    public function __construct()
    {
        helper(['form']);
        $this->prodi_model = new Prodi_model();
        $this->category_model = new Category_model();
        $this->matakuliah_model = new Matakuliah_model();
    }
 
    public function index()
    {
        $data['matakuliah'] = $this->matakuliah_model->getMatakuliah();
        echo view('matakuliah/index', $data);
    }
    public function create()
    {
        $categories = $this->category_model->where('category_status', 'Active')->findAll();
        $data['categories'] = ['' => 'Pilih Category'] + array_column($categories, 'category_name_matakuliah', 'category_id');
        return view('matakuliah/create', $data);
    }
    
    public function store()
    {
        $validation =  \Config\Services::validation();
     
        // get file upload
        $image = $this->request->getFile('document');
        // random name file
        $name = $image->getRandomName();
     
        $data = array(
            'category_id'           => $this->request->getPost('category_id'),
            'kode_matakuliah'          => $this->request->getPost('kode_matakuliah'),
            'semester'         => $this->request->getPost('semester'),
            'sks'           => $this->request->getPost('sks'),
            'prodi_id'           => $this->request->getPost('prodi_id'),
            'status'        => $this->request->getPost('status'),
            'document'         => $name,
            'description'   => $this->request->getPost('description'),
        );
     
        if($validation->run($data, 'matakuliah') == FALSE){
            session()->setFlashdata('inputs', $this->request->getPost());
            session()->setFlashdata('errors', $validation->getErrors());
            return redirect()->to(base_url('matakuliah/create'));
        } else {
            // upload file 
            $image->move(ROOTPATH . 'public/uploads', $name);
            // insert
            $simpan = $this->matakuliah_model->insertMatakuliah($data);
            if($simpan)
            {
                session()->setFlashdata('success', 'Created Matakuliah successfully');
                return redirect()->to(base_url('matakuliah')); 
            }
        }
    }
}
?>