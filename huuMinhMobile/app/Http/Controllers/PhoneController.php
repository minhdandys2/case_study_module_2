<?php

namespace App\Http\Controllers;

use App\Http\Requests\PhonesRequest;
use App\Http\Requests\SearchRequest;
use App\Http\Services\PhoneServicesInterface;
use Illuminate\Support\Facades\Gate;

class PhoneController extends Controller
{
    public $phoneService;

    public function __construct(PhoneServicesInterface $phoneService)
    {
        $this->phoneService = $phoneService;
        $this->middleware('auth');
    }

    public function index()
    {
        $phones = $this->phoneService->index();
        return view('phone.index', compact('phones'));
    }

    public function create()
    {
        if (Gate::allows('crud-user')) {
            return view('phone.create');
        }
        abort(403, 'Bạn không đủ quyền!');
    }

    public function store(PhonesRequest $request)
    {
        $this->phoneService->create($request);
        return redirect()->route('phone.index');
    }

    public function delete($id)
    {
        if (Gate::allows('crud-user')) {
            $this->phoneService->delete($id);
        return redirect()->route('phone.index');
        }
        abort(403, 'Bạn không đủ quyền!');
    }

    public function edit($id)
    {
        if (Gate::allows('crud-user')) {
            $phone = $this->phoneService->findById($id);
            return view('phone.edit', compact('phone'));
        }
        abort(403, 'Bạn không đủ quyền!');
    }

    public function update(PhonesRequest $request, $id)
    {
        $this->phoneService->update($request, $id);
        return redirect()->route('phone.index');
    }

    public function search(SearchRequest $request)
    {
        $phones = $this->phoneService->search($request);
        return view('phone.search', compact('phones'));
    }

    public function information($id)
    {
        $phone = $this->phoneService->findById($id);
        return view('phone.information', compact('phone'));
    }

}
