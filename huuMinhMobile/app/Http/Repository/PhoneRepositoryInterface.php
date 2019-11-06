<?php


namespace App\Http\Repository;


interface PhoneRepositoryInterface
{
    public function getAll();

    public function store($phone);

    public function findById($id);

    public function destroy($phone);

    public function search($keyword);
}
