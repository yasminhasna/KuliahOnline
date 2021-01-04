<?php namespace App\Models;
use CodeIgniter\Model;
  
class Matakuliah_model extends Model
{
    protected $table = 'matakuliah';
      
    public function getMatakuliah($id = false)
    {
        if($id === false){
            return $this->table('matakuliah')
                        ->join('categories', 'categories.category_id = matakuliah.category_id')
                        ->join('prodi', 'prodi.prodi_id = matakuliah.prodi_id')
                        ->get()
                        ->getResultArray();
        } else {
            return $this->table('matakuliah')
                        ->join('categories', 'categories.category_id = matakuliah.category_id')
                        ->join('prodi', 'prodi.prodi_id = matakuliah.prodi_id')
                        ->where('matakuliah.matakuliah_id', $id)
                        ->get()
                        ->getRowArray();
        }   
    }
    public function insertMatakuliah($data)
{
    return $this->db->table($this->table)->insert($data);
}
}
?>