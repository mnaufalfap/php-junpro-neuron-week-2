@extends('layouts.main')

@section('content')
<h3>Form New Data Drugs</h3>
    <div class="card">
        <div class="card-header">
            <button type="button" class="btn btn-sm btn-warning" onclick="window.location='{{ url('drugs') }}'">
                Back
            </button>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ url('drugs') }}">
                @csrf
                <div class="row mb-3">
                    <label for="drugs_id" class="col-sm-2 col-form-label">Drugs Id</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm @error('drugs_id') is-invalid @enderror" id="drugs_id" name="drugs_id" value="{{ old('drugs_id') }}">
                        @error('drugs_id')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="drugs_name" class="col-sm-2 col-form-label">Drugs Name</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control form-control-sm @error('drugs_name') is-invalid @enderror" id="drugs_name" name="drugs_name" value="{{ old('drugs_name') }}">
                      @error('drugs_name')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="drugs_class" class="col-sm-2 col-form-label">Drugs Class</label>
                    <div class="col-sm-4">
                      <select class="form-select form-select-sm @error('drugs_class') is-invalid @enderror" name="drugs_class" id="drugs_class">
                            <option value="" selected>-Pilih-</option>
                            <option value="Obat Bebas" {{ (old('drugs_class')=='Obat Bebas') ? 'selected' : ''}}>Obat Bebas</option>
                            <option value="Obat Bebas Terbatas" {{ (old('drugs_class')=='Obat Bebas Terbatas') ? 'selected' : ''}}>Obat Bebas Terbatas</option>
                            <option value="Obat Keras" {{ (old('drugs_class')=='Obat Keras') ? 'selected' : ''}}>Obat Keras</option>
                            <option value="Obat Golongan Narkotika" {{ (old('drugs_class')=='Obat Golongan Narkotika') ? 'selected' : ''}}>Obat Golongan Narkotika</option>
                            <option value="Obat Fitofarmaka" {{ (old('drugs_class')=='Obat Fitofarmaka') ? 'selected' : ''}}>Obat Fitofarmaka</option>
                            <option value="Obat Herbal Terstandar (OHT)" {{ (old('drugs_class')=='Obat Herbal Terstandar (OHT)') ? 'selected' : ''}}>Obat Herbal Terstandar (OHT)</option>
                            <option value="Obat Herbal (Jamu)" {{ (old('drugs_class')=='Obat Herbal (Jamu)') ? 'selected' : ''}}>Obat Herbal (Jamu)</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="drugs_type" class="col-sm-2 col-form-label">Drugs Type</label>
                    <div class="col-sm-4">
                      <select class="form-select form-select-sm @error('drugs_type') is-invalid @enderror" name="drugs_type" id="drugs_type">
                            <option value="" selected>-Pilih-</option>
                            <option value="Obat Cair" {{ (old('drugs_type')=='Obat Cair') ? 'selected' : ''}}>Obat Cair</option>
                            <option value="Tablet" {{ (old('drugs_type')=='Tablet') ? 'selected' : ''}}>Tablet</option>
                            <option value="Kapsul" {{ (old('drugs_type')=='Kapsul') ? 'selected' : ''}}>Kapsul</option>
                            <option value="Obat Oles" {{ (old('drugs_type')=='Obat Oles') ? 'selected' : ''}}>Obat Oles</option>
                            <option value="Supositoria" {{ (old('drugs_type')=='Supositoria') ? 'selected' : ''}}>Supositoria</option>
                            <option value="Obat Tetes" {{ (old('drugs_type')=='Obat Tetes') ? 'selected' : ''}}>Obat Tetes</option>
                            <option value="Inhaler" {{ (old('drugs_type')=='Inhaler') ? 'selected' : ''}}>Inhaler</option>
                            <option value="Obat Suntik" {{ (old('drugs_type')=='Obat Suntik') ? 'selected' : ''}}>Obat Suntik</option>
                            <option value="Implan" {{ (old('drugs_type')=='Implan') ? 'selected' : ''}}>Implan</option>
                            <option value="Tablet Bukal" {{ (old('drugs_type')=='Tablet Bukal') ? 'selected' : ''}}>Tablet Bukal</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="drugs_unit" class="col-sm-2 col-form-label">Drugs Unit</label>
                    <div class="col-sm-4">
                      <select class="form-select form-select-sm @error('drugs_unit') is-invalid @enderror" name="drugs_unit" id="drugs_unit">
                            <option value="" selected>-Pilih-</option>
                            <option value="mg" {{ (old('drugs_unit')=='mg') ? 'selected' : ''}}>mg</option>
                            <option value="ml" {{ (old('drugs_unit')=='ml') ? 'selected' : ''}}>ml</option>
                            <option value="pcs" {{ (old('drugs_unit')=='pcs') ? 'selected' : ''}}>pcs</option>
                            <option value="botol" {{ (old('drugs_unit')=='botol') ? 'selected' : ''}}>botol</option>
                            <option value="tube" {{ (old('drugs_unit')=='tube') ? 'selected' : ''}}>tube</option>
                            <option value="box" {{ (old('drugs_unit')=='box') ? 'selected' : ''}}>box</option>
                      </select>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="drugs_prices" class="col-sm-2 col-form-label">Drugs Prices</label>
                    <div class="col-sm-4">
                      <input type="number" class="form-control form-control-sm @error('drugs_prices') is-invalid @enderror" id="drugs_prices" name="drugs_prices" value="{{ old('drugs_prices') }}">
                      @error('drugs_prices')
                          <div class="invalid-feedback">
                            {{ $message }}
                          </div>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-6">
                      <button type="submit" class="btn btn-sm btn-success">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
