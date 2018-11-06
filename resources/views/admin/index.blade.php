@extends('layouts.app')

@section('content')
    <div class="row mt-5">
        <div class="col-xl-12 mb-3">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Classes</h3>
                        </div>
                        <div class="col text-right">
                            {{-- <a href="#!" class="btn btn-sm btn-primary">Write to all of their students</a> --}}
                        </div>
                        <div class="table-responsive mt-4">
                            <table class="table align-items-center table-flush">
                                <thead class="thead-light">
                                    <tr>
                                        <th scope="col">Nom</th>
                                        <th scope="col">Action</th>
                                        {{-- <th scope="col">Unique users</th> --}}
                                        {{-- <th scope="col">Bounce rate</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($levels as $level)
                                    <tr>
                                        <th scope="row">
                                            {{ $level->name }}
                                        </th>
                                        <td>
                                            <form method="POST" action="{{ route('discussions.levels.create', $level->id) }}">
                                                @csrf
                                                <input type="hidden" name="level_id" value="{{ $level->id }}">
                                                <button type="submit" href="#!" class="btn btn-sm btn-primary">
                                                    Ecrire un message <i class="ni ni-email-83 ml-3"></i>
                                                </button>
                                            </form>
                                        </td>
                                        {{-- <td></td> --}}
                                        {{-- <td></td> --}}
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                  </div>
                </div>
            </div>
            <div class="card shadow mt-4">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Test</h3>
                        </div>
                        <div class="col text-right">
                            <a href="#!" class="btn btn-sm btn-primary">See all</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card shadow mt-4">
                <div class="card-header border-0">
                    <div class="row align-items-center">
                        <div class="col">
                            <h3 class="mb-0">Agents</h3>
                        </div>
                        <div class="col text-right">
                            <a href="#!" class="btn btn-sm btn-primary">See all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
