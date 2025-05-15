<x-admin-layout>
    <x-slot name="content">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between ">

                    <h1 class="page-title">{{ __('admin.services') }}</h1>
                    <a class="btn btn-primary"
                        href="{{ route('admin.services.create') }}">{{ __('admin.addService') }}</a>
                </div>
            </div> <!-- .col-12 -->
        </div> <!-- .row -->
        <div class="card shadow">
            <div class="card-body">
                <h5 class="card-title">Simple Table</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>description</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($services as $index=>$service)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    @if (LaravelLocalization::getCurrentLocale() == 'en')
                                        {{ $service->title }}
                                    @else
                                        {{ $service->title_ar }}
                                    @endif
                                </td>
                                <td>
                                    @if (LaravelLocalization::getCurrentLocale() == 'en')
                                        {{ $service->description }}
                                    @else
                                        {{ $service->description_ar }}
                                    @endif

                                </td>
                            </tr>
                        @empty
                            <h1>No services added</h1>
                        @endforelse

                    </tbody>
                </table>
                {{ $services->links() }}
            </div>
        </div>

    </x-slot>
</x-admin-layout>
