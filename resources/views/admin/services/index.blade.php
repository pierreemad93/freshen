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
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>title</th>
                            <th>description</th>
                            <th>control</th>

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
                                <td class="d-flex">
                                    <a class="btn btn-info"
                                        href="{{ route('admin.services.show', $service->id) }}">{{ __('admin.show') }}</a>
                                    <a class="btn btn-warning"
                                        href="{{ route('admin.services.edit', $service->id) }}">{{ __('admin.edit') }}</a>
                                    <form method="POST" action="{{ route('admin.services.destroy', $service->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
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
