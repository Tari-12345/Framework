<?php

namespace App\Models;

use CodeIgniter\Model;

class FilmModel extends Model
{
    protected $table              = 'film';
    protected $primaryKey         = 'id';
    protected $useAutoIncroment   = true;
    protected $allowedFields        = ['nama_film', 'id_genre', 'duration', 'cover'];

    public function getFilm()
{

        $data =[
            [
                "nama_film" => "Sewu Dino",
                "genre"     => "horor",
                "duration"  => "1 jam 43 menit",
            ],
            [
                "nama_film" => "Dilan 1990",
                "genre"     => "romantis",
                "duration"  => "1 jam 54 menit", 
            ],
            [
                "nama_film" => "Ayat ayat cinta",
                "genre"     => "romantis",
                "duration"  => "1 jam 30 menit", 
            ],
            [
                "nama_film" => "Miracle In Cell No 7",
                "genre"     => "Komedi, drama",
                "duration"  => "1 jam 44 menit", 
            ],
            [
                "nama_film" => "Susah Sinyal",
                "genre"     => "Komedi",
                "duration"  => "1 jam 59 menit", 
            ],
            ];

            return $data;
     }

     public function getAllDataJoin(){
        $query = $this ->db -> table('film')
        ->select("film.*,genre.nama_genre")
        ->join("genre","genre.id = film.id_genre");
        return $query->get()->getResultArray();
     }

     public function getAllData()
     {
        return $this->findAll();
     }

     public function getDataByID($id)
     {
        return $this->find($id);
     }

     public function getDataBy($data)
     {
        return $this->where('genre', $data)->findAll();
     }

     public function getOrderBy(){
        return $this->orderBy("created_at", "desc")->findAll();
     }

     public function getLimit(){
        return $this->Limit(5)->findAll();
     }
}
