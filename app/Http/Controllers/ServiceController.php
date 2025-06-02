<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Trait\UploadFile;
use Illuminate\Support\Str;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\ServiceRequest;
use App\Http\Requests\UpdateServiceRequest;
use App\Services\StoreService;

class ServiceController extends Controller
{
    use UploadFile;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $services = Service::latest()->paginate(config('paginator.count'));
        return view('admin.services.index', ['services' => $services]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.services.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ServiceRequest $request ,StoreService $service )
    {
        $service->store($request);
        notyf()->success(__('admin.service_add_successfully'));
        return to_route('admin.services.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Service $service)
    {
        // $service = Service::findOrFail($id);

        return view('admin.services.show', ['service' => $service]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Service $service)
    {
        //
        return view('admin.services.edit', ['service' => $service]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ServiceRequest $request, Service $service)
    {
        //
        $service->update($request->validated());
        notyf()->success(__('admin.service_update_successfully'));
        return to_route('admin.services.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Service $service)
    {
        //
        $service->delete();
        notyf()->success(__('admin.service_delete_successfully'));
        return to_route('admin.services.index');
    }
}
