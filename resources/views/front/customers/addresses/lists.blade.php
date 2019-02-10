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
                <h2> <i class="fa fa-home"></i> My Account - Address List</h2>
                <hr>
            </div>
        </div>
        <div class="row">
    <!-- Main content -->
    <section class="content container">
    <!-- Default box -->
        @if($addresses)
            <div class="box">
                <div class="box-body">
          
                    @if(!$addresses->isEmpty())
                        <table class="table">
                        <tbody>
                        <tr>
                            <td>Alias</td>
                            <td>Address 1</td>
                            @if(isset($address->province))
                            <td>Province</td>
                            @endif
                            <td>State</td>
                            <td>City</td>
                            <td>Zip Code</td>
                            <td>Country</td>
                            <td>Status</td>
                            <td>Actions</td>
                        </tr>
                        </tbody>
                        <tbody>
                        @foreach ($addresses as $address)
                            <tr>
                                <td><a href="{{ route('admin.customers.show', $customer->id) }}">{{ $address->alias }}</a></td>
                                <td>{{ $address->address_1 }}</td>
                                @if(isset($address->province))
                                <td>{{ $address->province->name }}</td>
                                @endif
                                <td>{{ $address->state_code }}</td>
                                <td>{{ $address->city }}</td>
                                <td>{{ $address->zip }}</td>
                                <td>{{ $address->country->name }}</td>
                                <td>@include('layouts.status', ['status' => $address->status])</td>
                                <td>
                                    <form action="{{ route('admin.addresses.destroy', $address->id) }}" method="post" class="form-horizontal">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="delete">
                                        <div class="btn-group">
                                            <a href="{{ route('admin.addresses.edit', $address->id) }}" class="btn btn-primary btn-sm"><i class="fa fa-edit"></i> Edit</a>
                                            <button onclick="return confirm('Are you sure?')" type="submit" class="btn btn-danger btn-sm"><i class="fa fa-times"></i> Delete</button>
                                        </div>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                        <a href="{{ route('accounts', ['tab' => 'profile']) }}" class="btn btn-default">Back to My Account</a>
                    @else
                        <p class="alert alert-warning">No address created yet. <a href="{{ route('customer.address.create', auth()->id()) }}">Create</a></p>
                    @endif
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        @else
            <div class="box">
                <div class="box-body"><p class="alert alert-warning">No addresses found.</p></div>
            </div>
        @endif
    </section>
    <!-- /.content -->
</div>
  

        </div>
      </section>
    </div>
	<br>
	<br>
	<br>
	
	
	   <script type="text/javascript">

        function findProvinceOrState(countryId) {
            $.ajax({
                url : '/api/v1/country/' + countryId + '/province',
                contentType: 'json',
                success: function (res) {
                    if (res.data.length > 0) {
                        let html = '<label for="province_id">Provinces </label>';
                        html += '<select name="province_id" id="province_id" class="form-control select2">';
                        $(res.data).each(function (idx, v) {
                            html += '<option value="'+ v.id+'">'+ v.name +'</option>';
                        });
                        html += '</select>';

                        $('#provinces').html(html).show();
                        $('.select2').select2();

                        findCity(countryId, 1);

                        $('#province_id').change(function () {
                            var provinceId = $(this).val();
                            findCity(countryId, provinceId);
                        });
                    } else {
                        $('#provinces').hide().html('');
                        $('#cities').hide().html('');
                    }
                }
            });
        }

        function findCity(countryId, provinceOrStateId) {
            $.ajax({
                url: '/api/v1/country/' + countryId + '/province/' + provinceOrStateId + '/city',
                contentType: 'json',
                success: function (data) {
                    let html = '<label for="city_id">City </label>';
                    html += '<select name="city_id" id="city_id" class="form-control select2">';
                    $(data.data).each(function (idx, v) {
                        html += '<option value="'+ v.id+'">'+ v.name +'</option>';
                    });
                    html += '</select>';

                    $('#cities').html(html).show();
                    $('.select2').select2();
                },
                errors: function (data) {
                    console.log(data);
                }
            });
        }
        
        function findUsStates() {
            $.ajax({
                url : '/country/' + countryId + '/state',
                contentType: 'json',
                success: function (res) {
                    if (res.data.length > 0) {
                        let html = '<label for="state_code">States </label>';
                        html += '<select name="state_code" id="state_code" class="form-control select2">';
                        $(res.data).each(function (idx, v) {
                            html += '<option value="'+ v.state_code+'">'+ v.state +'</option>';
                        });
                        html += '</select>';

                        $('#provinces').html(html).show();
                        $('.select2').select2();

                        findUsCities('AK');

                        $('#state_code').change(function () {
                            let state_code = $(this).val();
                            findUsCities(state_code);
                        });
                    } else {
                        $('#provinces').hide().html('');
                        $('#cities').hide().html('');
                    }
                }
            });
        }

        function findUsCities(state_code) {
            $.ajax({
                url : '/state/' + state_code + '/city',
                contentType: 'json',
                success: function (res) {
                    if (res.data.length > 0) {
                        let html = '<label for="city">City </label>';
                        html += '<select name="city" id="city" class="form-control select2">';
                        $(res.data).each(function (idx, v) {
                            html += '<option value="'+ v.name+'">'+ v.name +'</option>';
                        });
                        html += '</select>';

                         $('#cities').html(html).show();
                         $('.select2').select2();

                        $('#state_code').change(function () {
                            let state_code = $(this).val();
                            findUsCities(state_code);
                        });
                    } else {
                        $('#provinces').hide().html('');
                        $('#cities').hide().html('');
                    }
                }
            });
        }

        let countryId = +"{{ env('SHOP_COUNTRY_ID') }}";

        $(document).ready(function () {

            if (countryId === 226) {
                findUsStates(countryId);
            } else {
                findProvinceOrState(countryId);
            }

            $('#country_id').on('change', function () {
                countryId = +$(this).val();
                if (countryId === 226) {
                    findUsStates(countryId);
                } else {
                    findProvinceOrState(countryId);
                }

            });

            $('#city_id').on('change', function () {
                cityId = $(this).val();
                findProvinceOrState(countryId);
            });

            $('#province_id').on('change', function () {
                provinceId = $(this).val();
                findProvinceOrState(countryId);
            });
        });
    </script>

	@endsection