@extends('layouts.app')

@section('content')
	<div class="row mt-5">
        <div class="col-xl-12 mb-5 mb-xl-0">
			<div class="card shadow">
				<div class="card-header border-1">
					<div class="row align-items-center">
						<div class="col">
							<h3 class="mb-0">Messages</h3>
						</div>
						<div class="col text-right">
							<a href="#!" class="btn btn-sm btn-primary">Details</a>
						</div>
					</div>
				</div>
				<div class="card-body">
					<div class="row">
						<div class="col-md-3 border-right">
							@forelse($discussions as $d)
								<a class="card p-2 mb-2 {{ ($d->id == ($discussion->id??0)) ? 'bg-gradient-default text-white':'text-default' }}" href="{{ route('discussions.show', $d->id) }}">
									{{ $d->title }}
								</a>
							@empty
								<div>
									Il n'y a aucune discussion en cours. <a href="{{ route('admin.index') }}">En créer!</a>
								</div>
							@endforelse
						</div>

						<div class="col-md-9">
							@forelse($discussion->messages ?? [] as $message)
								<div
									class="alert alert-secondary {{ $message->from->id == auth()->id() ?
										'offset-md-5':
										'col-md-7' }}"
									href="#">
									<div class="h5 mb-0">
										{{ $message->from->id == auth()->id() ? 'Moi':$message->from->fullName }}
									</div>

									<p class="mb-0">
										{{ $message->content }}
									</p>
								</div>
							@empty
								<div class="alert alert-default" role="alert">
									Aucun message pour l'instant - Envoyer un premier message
								</div>
							@endforelse

							<form method="POST" action="{{ route('messages.store', $discussion->id ) }}">
								@csrf
								<textarea name="content" rows="4" class="form-control form-control-alternative" placeholder="Votre message">{{ old('content') }}</textarea>

								<input type="submit" value="Envoyer le message" class="btn btn-primary btn-lg mt-2 px-4">
							</form>
						</div>
					</div>
				</div>
			</div>
        </div>
    </div>
@endsection()
