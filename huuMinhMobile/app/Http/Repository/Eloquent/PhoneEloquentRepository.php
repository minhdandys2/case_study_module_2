<?php


namespace App\Http\Repository\Eloquent;


use App\Http\Repository\PhoneRepositoryInterface;
use App\Phone;

class PhoneEloquentRepository implements PhoneRepositoryInterface
{
    public $phone;

    public function __construct(Phone $phone)
    {
        $this->phone = $phone;
    }

    public function getAll()
    {
        return $this->phone->paginate(6);
    }

    public function store($phone)
    {
        return $phone->save();
    }

    public function findById($id)
    {
        return $this->phone->findOrFail($id);
    }

    public function destroy($phone)
    {
        return $phone->delete();
    }

    public function search($keyword)
    {
        return $this->phone->where('name', 'like', "%$keyword%")->orwhere('ram', 'like', "%$keyword%")->paginate(6);
    }
}
