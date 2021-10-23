@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        {{ __('Project Page') }}
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nomer Projek</th>
                                    <th scope="col">Tgl Project</th>
                                    <th scope="col">Client Name</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($projects as $project )
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>{{ $project->nomerPro }}</td>
                                        <td>{{ $project->tglPro }}</td>
                                        <td>{{ $project->userPostProject->name }}</td>
                                        <td><span class="badge badge-primary">{{ $project->statusPro }}</span></td>
                                        <td>
                                            <form action="{{ route('order') }}" method="post">
                                                @csrf
                                                <button type="submit" class="btn btn-primary">Take Project</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        no project available
                                    </tr>
                                @endforelse


                            </tbody>
                        </table>
                        <br>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
