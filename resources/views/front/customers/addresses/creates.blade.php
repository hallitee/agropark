@extends('layouts.master')
@section('title', 'Accounts')
@section('content')

    <div class="shop-layout-1" id="page">
      <section class="box-sm">
        <div class="container">
        <div class="row">
            <div class="box-body">
                @include('layouts.errors-and-messages')
            </div>
            <div class="col-md-12">
                <h2> <i class="fa fa-home"></i> My Account - Create New Address</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
            <form action="{{ route('customer.address.store', $customer->id) }}" method="post" class="form" enctype="multipart/form-data">
                <input type="hidden" name="status" value="1">
                <div class="box-body">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="alias">Alias <span class="text-danger">*</span></label>
                        <input type="text" name="alias" id="alias" placeholder="Home or Office" class="form-control" value="{{ old('alias') }}">
                    </div>
                    <div class="form-group">
                        <label for="address_1">Address 1 <span class="text-danger">*</span></label>
                        <input type="text" name="address_1" id="address_1" placeholder="Address 1" class="form-control" value="{{ old('address_1') }}">
                    </div>
                    <div class="form-group">
                        <label for="address_2">Address 2 </label>
                        <input type="text" name="address_2" id="address_2" placeholder="Address 2" class="form-control" value="{{ old('address_2') }}">
                    </div>
                    <div class="form-group">
                        <label for="state">State </label>
                        <select name="state" id="states" class="form-control">
                        </select>
                    </div>					
                    <div class="form-group">
                        <label for="city">City </label>
                        <select name="city" id="lgas" class="form-control">
                        </select>
                    </div>										
                    <div class="form-group">
                        <label for="country_id">Country </label>
                        <select name="country_id" id="country_id" class="form-control">
                            @foreach($countries as $country)
                                <option @if(env('SHOP_COUNTRY_ID') == $country->id) selected="selected" @endif value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="zip">Zip Code </label>
                        <input type="text" name="zip" id="zip" placeholder="Zip code" class="form-control" value="{{ old('zip') }}">
                    </div>
                    <div class="form-group">
                        <label for="phone">Your Phone </label>
                        <input type="text" name="phone" id="phone" placeholder="Phone number" class="form-control" value="{{ old('phone') }}">
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <div class="btn-group">
                        <a href="{{ route('accounts', ['tab' => 'address']) }}" class="btn btn-default">Back</a>
                        <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                </div>
            </form>
      
			</div>
        </div>
  

        </div>
      </section>
    </div>
	<br>
	<br>
	<br>
	
<script>	
var option = '';

var states=$.nigeria.states();
for (var i=0;i<states.length;i++){
   option += '<option value="'+ states[i] + '">' + $.ucfirst(states[i]) + '</option>';
}
$('#states').append(option).on('change',function() {

var option = '';
option += '<option value="">Local government</option>';

var lgas=eval('$.nigeria.'+this.value);

for (var i=0;i<lgas.length;i++){
   option += '<option value="'+ lgas[i] + '">' + $.ucfirst(lgas[i]) + '</option>';
}

$('#lgas').find('option')
    .remove()
    .end().append(option);

}).trigger('change');

</script>	
	@endsection