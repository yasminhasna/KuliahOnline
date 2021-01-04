<?php namespace App\Controllers;
  
use CodeIgniter\Controller;
use App\Models\Prodi_model;
  
class Prodi extends Controller
{
 
    public function index()
    {
        $model = new Prodi_model();
        $data['prodi'] = $model->getProdi();
        echo view('prodi/index', $data);
    }
    public function create()
{
    return view('prodi/create');
}
 
public function store()
{
    $validation =  \Config\Services::validation();
 
    $data = array(
        'prodi'     => $this->request->getPost('prodi'),
       
    );
 
    if($validation->run($data, 'prodi') == FALSE){
        session()->setFlashdata('inputs', $this->request->getPost());
        session()->setFlashdata('errors', $validation->getErrors());
        return redirect()->to(base_url('prodi/create'));
    } else {
        $model = new Prodi_model();
        $simpan = $model->insertProdi($data);
        if($simpan)
        {
            session()->setFlashdata('success', 'Created Prodi successfully');
            return redirect()->to(base_url('prodi')); 
        }
    }
}
public function edit($id)
{  
    $model = new Prodi_model();
    $data['prodi'] = $model->getProdi($id)->getRowArray();
    echo view('prodi/edit', $data);
}
 
public function update()
{
    $id = $this->request->getPost('prodi_id');
 
    $validation =  \Config\Services::validation();
 
    $data = array(
        'prodi'     => $this->request->getPost('prodi'),
        
    );
     
    if($validation->run($data, 'prodi') == FALSE){
        session()->setFlashdata('inputs', $this->request->getPost());
        session()->setFlashdata('errors', $validation->getErrors());
        return redirect()->to(base_url('prodi/edit/'.$id));
    } else {
        $model = new Prodi_model();
        $ubah = $model->updateProdi($data, $id);
        if($ubah)
        {
            session()->setFlashdata('info', 'Updated Prodi successfully');
            return redirect()->to(base_url('prodi')); 
        }
    }
}
public function delete($id)
{
    $model = new Prodi_model();
    $hapus = $model->deleteProdi($id);
    if($hapus)
    {
        session()->setFlashdata('warning', 'Deleted Prodi successfully');
        return redirect()->to(base_url('prodi')); 
    }
}
}
?>