<?php namespace App\Models;
use CodeIgniter\Model;
  
class Prodi_model extends Model
{
    protected $table = 'prodi';
      
    public function getProdi($id = false)
    {
        if($id === false){
            return $this->findAll();
        } else {
            return $this->getWhere(['prodi_id' => $id]);
        }   
    }
    public function insertProdi($data)
{
    return $this->db->table($this->table)->insert($data);
}
public function updateProdi($data, $id)
{
    return $this->db->table($this->table)->update($data, ['prodi_id' => $id]);
}
public function deleteProdi($id)
{
    return $this->db->table($this->table)->delete(['prodi_id' => $id]);
}
}
?>