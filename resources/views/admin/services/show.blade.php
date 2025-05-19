<x-admin-layout>
    <x-slot name="content">
        <div class="row">
            <div class="col-12">
                <h1 class="page-title">{{ __('admin.showService') }}</h1>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
        <div class="card shadow mb-4">

            <div class="card-body">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>{{ __('admin.title') }}</label>
                            <input type="text" class="form-control" value="{{ $service->title }}" disabled>

                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group mb-3">
                            <label>{{ __('admin.title_ar') }}</label>
                            <input type="text" class="form-control" value="{{ $service->title_ar }}" disabled>


                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label>{{ __('admin.description') }}</label>
                            <textarea class="form-control" id="example-textarea" rows="4" disabled>
                                {{ $service->description }}
                            </textarea>


                        </div>
                    </div> <!-- /.col -->
                    <div class="col-md-12">
                        <div class="form-group mb-3">
                            <label>{{ __('admin.description_ar') }}</label>
                            <textarea class="form-control" id="example-textarea" rows="4" disabled>
                                {{ $service->description_ar }}
                            </textarea>


                        </div>
                    </div> <!-- /.col -->

                </div>
                <a href="{{ route('admin.services.index') }}" class="btn mb-2 btn-outline-dark">
                    {{ __('admin.back') }}
                </a>
            </div>
        </div>


    </x-slot>
</x-admin-layout>
