@extends('layout.app')
@section('content')

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" />

</head>
<style>
    .navigation {
        margin-left: -120px;
    }

    .main {
        width: 93%;
        left: 120px;
    }

    strong {
        vertical-align: text-top;
    }

    tr td:last-child {
        width: 310px;
    }
</style>
@if ($message = Session::get('success'))
<div id="not" class="alert alert-success">
    <p>{{ $message }}</p>
</div>
<script>
    setTimeout(function() {
    $('#not').fadeOut('fast');
}, 3000); //
</script>
@endif
@if ($errors->any())
<div class="alert alert-danger">
    <strong>Whoops!</strong> There were some problems with your input.<br><br>
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('orders.store') }}" method="POST" enctype="multipart/form-data" style="">
    {{ csrf_field() }}
    <div class="details" style="">
        <div class="recentOrders">
            <div class="cardHeader" style="padding-left:0;">
                <center>
                    <h2> Add new Order </h2>
                </center>
            </div>
            <div class="mt-4" style="font-weight:700;font-size:25px; border-top:none;">
                General Info
            </div>
            <hr class="border-0 mt-2 mb-4" style="height: 2px; background: rgb(219, 219, 219);">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Company:</strong>
                                </td>
                                <td>
                                    <select class="form-control">
                                        @foreach ($companies as $item)
                                        <option value="{{ $item->company_id }}">{{ $item->company_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Supplier:</strong>
                                </td>
                                <td>
                                    <select class="form-control">
                                        @foreach ($supplier as $item)
                                        <option value="{{ $item->supplier_id }}">{{ $item->supplier_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Shipper:</strong>
                                </td>
                                <td>
                                    <select class="form-control">
                                        @foreach ($shipper as $item)
                                        <option value="{{ $item->shipper_id }}">{{ $item->shipper_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Order Amount:</strong>
                                </td>
                                <td>
                                    <input class="form-control" type="number" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Payment Type:</strong>
                                </td>
                                <td>
                                    <select class="form-control" name="payment_type">
                                        <option value="no_code">Please select</option>
                                        <option value="LC">Letter of Credit</option>
                                        <option value="WU">Western Union</option>
                                        <option value="TT">Telegraphic Transfer</option>
                                        <option value="LG">Letter of Guarantee</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Shipping line:</strong>
                                </td>
                                <td>
                                    <input class="form-control"name="shipping_line" id="shipping_line" value="" />
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>BL Number:</strong>
                                </td>
                                <td>
                                    <input class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Production Time:</strong>
                                </td>
                                <td>
                                    <input class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Estimated Ship:</strong>
                                </td>
                                <td>
                                    <input type="date" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Origins:</strong>
                                </td>
                                <td>
                                    <input class="form-control"/>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                {{-- //////////////////////////////////// --}}
                <div class="col-md-6">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td>
                                    <strong>Broker:</strong>
                                </td>
                                <td>
                                    <select class="form-control">
                                        @foreach ($broker as $item)
                                        <option value="{{ $item->broker_id }}">{{ $item->broker_name }}</option>
                                        @endforeach
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Deposit Percent:</strong>
                                </td>
                                <td>
                                    <input class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <strong>Declaration Type:</strong>
                                </td>
                                <td>
                                    <input class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Shipping Way:</strong>
                                </td>
                                <td>
                                    <input class="form-control" type="number" name="" id="">
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>PI Number:</strong>
                                </td>
                                <td>
                                    <input class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Volume:</strong>
                                </td>
                                <td>
                                    <input class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Real Shipping:</strong>
                                </td>
                                <td>
                                    <input type="date" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Estimated Arrive:</strong>
                                </td>
                                <td>
                                    <input type="date" class="form-control"/>
                                </td>
                            </tr>
                            <tr>
                                <td style="">
                                    <strong>Contents:</strong>
                                </td>
                                <td>
                                    <textarea rows="3" class="form-control"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="btns row">
            <div class="d-flex mx-auto">
                <button type="submit" class="btn btn-success" event="{{ route('users.index')}}">Submit</button>
                <a class="ml-3 btn btn-primary" href="{{ route('users.index') }}"> Back</a></td>
            </div>
        </div>
    </div>

</form>
<script>
    let orders = document.querySelectorAll('.navigation li:nth-child(5)')[0];
orders.classList.add('hovered');
</script>
@endsection