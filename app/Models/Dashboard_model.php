<?php namespace App\Models;
use CodeIgniter\Model;
  
class Dashboard_model extends Model
{
    protected $table = 'transactions';
 
    // hitung total data pada category
    public function getCountCategory()
    {
        return $this->db->table("categories")->countAll();
    }

    // hitung total data pada prodi
    public function getCountProdi()
    {
        return $this->db->table("prodi")->countAll();
    }
 
    // hitung total data pada matakuliah
    public function getCountMatakuliah()
    {
        return $this->db->table("matakuliah")->countAll();
    }
 
    // hitung total data pada user
    public function getCountUser()
    {
        return $this->db->table("users")->countAll();
    }
 
    public function getGrafik()
    {
        $query = $this->db->query("SELECT trx_price, MONTHNAME(trx_date) as month, COUNT(matakuliah_id) as total FROM transactions GROUP BY MONTHNAME(trx_date) ORDER BY MONTH(trx_date)");
        $hasil = [];
        if(!empty($query)){
            foreach($query->getResultArray() as $data) {
                $hasil[] = $data;
            }
        }
        return $hasil;
    }
 
    public function getLatestTrx()
    {
        return $this->table('transactions')
            ->select('matakuliah.kode_matakuliah, transactions.*')
            ->join('matakuliah', 'matakuliah.matakuliah_id = transactions.matakuliah_id')
            ->orderBy('transactions.trx_id', 'desc')
            ->limit(5)
            ->get()
            ->getResultArray();
    }
}