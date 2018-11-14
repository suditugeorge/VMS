@extends('admin.layout')

@section('title', 'Rase animal')

@section('content')
	<div class="main-panel">
		@include('admin.components.top_bar', ['top_title' => 'Rase animal '. isset($rase_de_editat) ? $rase_de_editat['name'] : ''])

		<div class="content">
			<div class="col-md-12">
				<div class="card ">
					<div class="card-header ">
						<h4 class="card-title">Rasa animal {{isset($rase_de_editat) ? $rase_de_editat->name : ''}}</h4>
					</div>
					<div class="card-body">
						<div class="row">
							<div class="col-md-4 col-sm-12 col-xs-12">
								<label>Denumire rasa</label>
								<div class="form-group">
									@if(isset($rase_de_editat))
										<input type="text" class="form-control" id="rasa-nume" value="{{$rase_de_editat['name']}}">
										<input type="hidden" id="rasa-code" value="{{$rase_de_editat['code']}}">
									@else
										<input type="text" class="form-control" id="rasa-nume">
										<input type="hidden" id="rasa-code" value="">
									@endif
								</div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
								<label>Specie</label>
								<div class="form-group">
									<select title="Specie" id="rasa_parinte" name="rasa_parinte" data-api="{{$api_url}}">
										@if($rase_de_editat['specie'])
											<option value="{{$rase_de_editat['specie']['code']}}" selected="selected" selected>{{$rase_de_editat['specie']['name']}}</option>
										@endif
									</select>
								</div>
							</div>
							<div class="col-md-4 col-sm-12 col-xs-12">
								<label>Activ</label>
								<div class="form-group">
									@if($rase_de_editat != null)
										<input type="checkbox" {{$rase_de_editat['active'] ? 'checked' : ''}} name="rasa_active" class="bootstrap-switch" data-wrapper-class="align-middle" data-on-label="DA" data-off-label="NU" />
									@else
										<input type="checkbox" checked name="rasa_active" class="bootstrap-switch" data-wrapper-class="align-middle" data-on-label="DA" data-off-label="NU" />
									@endif
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<label>Descriere scurta</label>
								<div class="form-group">
									<textarea class="form-control" id="rasa-descriere" rows="25">{{isset($rase_de_editat) ? $rase_de_editat['description'] : ''}}</textarea>
								</div>
							</div>
						</div>


					</div>
					<div class="card-footer ">
						<button type="submit" class="btn btn-fill btn-primary" id="salveaza-rasa" data-url="{{$general_data['current_url']}}">
							<i class="fas fa-spinner fa-spin hidden"></i><span class="button-text">Salveaza</span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection

@push('styles')
	<link href="{{URL::asset('/admin/css/core/select2.min.css')}}" rel="stylesheet" />
	<link href="{{URL::asset('/admin/css/core/select2-bootstrap4.min.css')}}" rel="stylesheet" />
@endpush

@push('scripts')
	<script type="text/javascript" src="{{ URL::asset('/admin/js/core/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('/admin/js/features/rase_animale.js') }}"></script>
@endpush

