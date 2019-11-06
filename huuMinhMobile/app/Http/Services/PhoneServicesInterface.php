<?php


namespace App\Http\Services;


interface PhoneServicesInterface
{
    public function index();
    public function create($request);
    public function findById($id);
    public function update($request,$id);
    public function delete($id);
    public function search($request);
}
