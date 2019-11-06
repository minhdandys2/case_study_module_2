<?php


namespace App\Http\Services\Impl;


use App\Http\Repository\PhoneRepositoryInterface;
use App\Http\Services\PhoneServicesInterface;
use App\Phone;
use Illuminate\Support\Facades\Storage;

class PhoneServices implements PhoneServicesInterface
{
    public $phoneRepository;

    public function __construct(PhoneRepositoryInterface $phoneRepository)
    {
        $this->phoneRepository = $phoneRepository;
    }

    public function index(){
        return $this->phoneRepository->getAll();
    }

    public function create($request)
    {
        $phone = new Phone();
        $phone->name = $request->name;
        $phone->color = $request->color;
        $phone->ram = $request->ram;
        $phone->internal_memory = $request->internal_memory;
        $phone->sim = $request->sim;
        $phone->screen_size = $request->screen_size;
        $phone->price = $request->price;
        if ($request->hasFile('image')){
            $image = $request->image;
            $path = $image->store('images','public');
            $phone->image = $path;
        }
        $this->phoneRepository->store($phone);
    }

    public function findById($id)
    {
        return $this->phoneRepository->findById($id);
    }

    public function update($request, $id)
    {
        $phone = $this->phoneRepository->findById($id);
        $phone->name = $request->name;
        $phone->color = $request->color;
        $phone->ram = $request->ram;
        $phone->internal_memory = $request->internal_memory;
        $phone->sim = $request->sim;
        $phone->screen_size = $request->screen_size;
        $phone->price = $request->price;
        if ($request->hasFile('image')) {
            Storage::delete('public/'.$phone->image);
            $image = $request->file('image');
            $path = $image->store('images', 'public');
            $phone->image = $path;
        }
        return $this->phoneRepository->store($phone);
    }

    public function delete($id)
    {
        $phone = $this->phoneRepository->findById($id);
        Storage::delete('public/'.$phone->image);
        $this->phoneRepository->destroy($phone);
    }

    public function search($request)
    {
        $keyword = $request->search;
        return $this->phoneRepository->search($keyword);
    }

}
