<?php 

class Mahasiswa_model{
    private $table = 'mahasiswa';
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

   
    public function getAllMhs(){
       $this->db->query('SELECT * FROM ' .$this->table);
       return $this->db->resultSet();

    }
    public function getMhsById($id){
        $this->db->query('SELECT * FROM ' .$this->table. ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->single();

    }
    public function tambahDataMhs($data){
        $query = "INSERT INTO mahasiswa VALUES('', :nrp,:nama, :email, :jurusan)";
        $this->db->query($query);
        $this->db->bind('nrp',$data['nrp']);
        $this->db->bind('nama',$data['nama']);
        $this->db->bind('email',$data['email']);
        $this->db->bind('jurusan',$data['jurusan']);

        $this->db->execute();
        return $this->db->rowCount();
    }
    public function hapusDataMhs($id){
        $query = 'DELETE FROM mahasiswa WHERE id=:id';
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
