<x-admin-layout>
    <x-slot name="content">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between ">

                    <h1 class="page-title">{{ __('admin.services') }}</h1>
                    <a class="btn btn-primary" href="{{ route('admin.services.create') }}">{{ __('admin.addService') }}</a>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->


    </x-slot>
</x-admin-layout>
