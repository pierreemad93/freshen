<x-admin-layout>
    <x-slot name="content">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title">{{ __('admin.editService') }}</h1>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
        <div class="card shadow mb-4">

            <div class="card-body">
                <form method="POST" action="{{ route('admin.services.update', $service->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>{{ __('admin.title') }}</label>
                                <input type="text" class="form-control" name="title" value="{{ $service->title }}">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />

                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group mb-3">
                                <label>{{ __('admin.title_ar') }}</label>
                                <input type="text" class="form-control" name="title_ar"
                                    value="{{ $service->title_ar }}">
                                <x-input-error :messages="$errors->get('title_ar')" class="mt-2" />

                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label>{{ __('admin.description') }}</label>
                                <textarea class="form-control" id="example-textarea" rows="4" name="description">
                                    {{ $service->description }}
                                </textarea>
                                <x-input-error :messages="$errors->get('description')" class="mt-2" />

                            </div>
                        </div> <!-- /.col -->
                        <div class="col-md-12">
                            <div class="form-group mb-3">
                                <label>{{ __('admin.description_ar') }}</label>
                                <textarea class="form-control" id="example-textarea" rows="4" name="description_ar">
                                    {{ $service->description_ar }}
                                </textarea>
                                <x-input-error :messages="$errors->get('description_ar')" class="mt-2" />

                            </div>
                        </div> <!-- /.col -->

                    </div>
                    <button type="submit" class="btn mb-2 btn-outline-primary">
                        {{ __('admin.update') }}
                    </button>
                </form>
            </div>
        </div>


    </x-slot>
</x-admin-layout>
