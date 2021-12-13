<?php

namespace App\Repositories\Interfaces;

interface PostRepositoryInterface{

    public function getAll();
    public function store($data);
    public function findOne($id);
    public function update($data, $id);
    public function delete($id);


}
