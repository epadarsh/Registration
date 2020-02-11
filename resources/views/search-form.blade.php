<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style>
        .header-style {
            font-weight: bold !important;
            font-size: 34px !important;
            margin-left: 234px !important;
        }

        .search-button {
            background: #19ad24 !important;
            border-color: #19ad24 !important;
        }
    </style>
</head>
<body>

<link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet">
<script src="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"></script>
<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>

{{--<script src={{asset("assets/css/bootstrap.min.css")}}></script>--}}
{{--<script src={{asset("assets/js/bootstrap.min.js")}}></script>--}}
{{--<script src={{asset("assets/js/bootstrap.min.js")}}></script>--}}
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="row ">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="center-block panel-title header-style">ACMA Annual Retreat Registration 2020 </h3>
                    </br>
                </div>
                <div>
                    <div class="panel-body">
                        <form name="search-form" id="search_form" action="{{route('number-search')}}" method="post"
                              role="form">
                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                            <div class="row">
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <div class="form-group">
                                    </div>
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        <label>Mobile Number:</label>
                                        <input required type="number" name="mobile" id="mobile_search"
                                               class="pull-right form-control input-sm"
                                               placeholder="Search By Mobile Number">
                                    </div>
                                </div>
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <label> </label>
                                    <div class="form-group">
                                        <button type="submit" class="pull-right btn btn-info search-button ">Search
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div class="panel-body">
                    <form role="form" name="update-form" id="update_form" action="{{route('store-data')}}"
                          method="POST">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        {{--                        {{ csrf_field() }}--}}
                        {{--                        <input type="hidden" name="_method" value="PUT">--}}
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label>Name: <span class="text-danger">*</span></label>
                                    <input type="text" name="name" id="name" class="form-control input-sm"
                                           placeholder="Enter Name" required value="{{@$query->name}}">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4 ">
                                <label>MobileNumber: <span class="text-danger">*</span></label>
                                <div class="form-group">
                                    <input type="number" name="mobile" id="mobile_number" class="form-control input-sm"
                                           placeholder="Enter Mobile Number" maxlength="13" minlength="10"
                                           value="{{@$query->mobile}}">
                                    {{--                                    @foreach($errors->get('mobile') as $error)--}}
                                    {{--                                        <span class="help-block">{{ $error }}</span>--}}
                                    {{--                                    @endforeach--}}
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label>Email:</label>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm"
                                           placeholder="Enter Email Address" value="{{@$query->email }}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label>Postal Code:</label>
                                <div class="form-group">
                                    <input type="number" name="post" id="post" class="form-control input-sm"
                                           placeholder="Enter Postal Code" value="{{@$query->post}}">
                                </div>
                            </div>
                            <div class="col-xs-8 col-sm-8 col-md-8">
                                <label>Street Name/ Address</label>
                                <div class="form-group">
                                    <input list="street" name="street" class="form-control"
                                           placeholder="Enter Street Name/ Address">
                                    <datalist id="street">
                                        <option value="Raffles Place">
                                        <option value="Cecil">
                                        <option value="Marina">
                                        <option value="People’s Park">
                                        <option value="Anson">
                                        <option value="Tanjong Pagar">
                                        <option value="Queenstown">
                                        <option value="Tiong Bahru">
                                        <option value="Telok Blangah">
                                        <option value="Harbourfront">
                                        <option value="Pasir Panjang">
                                        <option value="Hong Leong Garden">
                                        <option value="Clementi New Town">
                                        <option value="High Street">
                                        <option value="Beach Road">
                                        <option value="Middle Road">
                                        <option value="Golden Mile">
                                        <option value="Little India">
                                        <option value="Orchard">
                                        <option value="Cairnhil">
                                        <option value="River Valle">
                                        <option value="Ardmore">
                                        <option value="Bukit Timah">
                                        <option value="Holland Road">
                                        <option value="Tanglin">
                                        <option value="Watten Estate">
                                        <option value="Novena">
                                        <option value="Thomson">
                                        <option value="Balestier">
                                        <option value="Toa Payoh">
                                        <option value="Serangoon">
                                        <option value="Macpherson">
                                        <option value="Braddell">
                                        <option value="Geylang">
                                        <option value="Eunos">
                                        <option value="Katong">
                                        <option value="Joo Chiat">
                                        <option value="Amber Road">
                                        <option value="Bedok">
                                        <option value="Upper East Coast">
                                        <option value="Eastwood">
                                        <option value="Kew Drive">
                                        <option value="Loyang">
                                        <option value="Changi">
                                        <option value="Tampines">
                                        <option value="Pasir Ris">
                                        <option value="Serangoon Garden">
                                        <option value="Hougang">
                                        <option value="Punggol">
                                        <option value="Bishan">
                                        <option value="Ang Mo Kio">
                                        <option value="Upper Bukit Timah">
                                        <option value="Clementi Park">
                                        <option value="Ulu Pandan">
                                        <option value="Jurong">
                                        <option value="Hillview">
                                        <option value="Dairy Farm">
                                        <option value="Bukit Panjang">
                                        <option value="Choa Chu Kang">
                                        <option value="Lim Chu Kang">
                                        <option value="Tengah">
                                        <option value="ranji">
                                        <option value="Woodgrove">
                                        <option value="Upper Thomson">
                                        <option value="Springleaf">
                                        <option value="Yishun">
                                        <option value="Sembawang">
                                        <option value="Seletar">

                                    </datalist>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <div class="form-group">
                                    <label>How many Adults?</label>
                                    <input type="number" name="adults" id="adult" class="form-control input-sm"
                                           placeholder="How many Adults?" value="{{@$query->adults}}">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label>How many Children?</label>
                                <div class="form-group">
                                    <input type="number" name="children" id="children" class="form-control input-sm"
                                           placeholder="How many Children?" value="{{@$query->children}}">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm-4 col-md-4">
                                <label>Donation:</label>
                                <div class="form-group">
                                    <input type="number" name="donations" id="donations" class="form-control input-sm"
                                           placeholder="Donation" value="{{@$query->donations}}">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-4 col-sm- col-md-4">
                                <label>Gross Amount:</label>
                                <div class="form-group">
                                    <input type="number" name="amount" id="amount" class="form-control input-sm"
                                           placeholder="Gross Amount" value="{{@$query->amount}}" readonly>
                                </div>
                            </div>

                            <div class="col-xs-4 col-sm- col-md-4">
                                <label></label>
                                <div class="form-group">
                                </div>
                            </div>
                            <div class="col-xs-4 col-sm- col-md-4">
                                <label></label>
                                <div class="form-group">
                                    <button type="submit" class="pull-right btn btn-info">Submit</button>
                                </div>
                            </div>
                        </div>

                        <hr>

                    </form>
                    <div class="row"></div>
                    <table class=" display table dataTable table-bordered" style="width:100%" id="acma_table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Persons</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                    </table>
{{--                    <div class="row">--}}
{{--                        <a href='{{url('download-excel')}}'>--}}
{{--                            <button type="button" class="center-block btn btn-info">--}}
{{--                                Export--}}
{{--                            </button>--}}
{{--                        </a>--}}
{{--                    </div>--}}


                </div>

            </div>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">

    $(document).ready(function () {


        let table = $('#acma_table');
        $("#adult, #children, #donations").on('change', function () {
            let adult = (($("#adult").val()) * 20);
            let children = (($("#children").val()) * 15);
            let donation = (($("#donations").val()) * 1);
            console.log(donation + adult);
            let total = (adult) + (children) + (donation);
            let amount = ((($("#adult").val()) * 20) + (($("#children").val()) * 15) + ($("#donation").val()));
            $("#amount").val(total);
        });


        $('#update_form').validate({
            rules: {
                name: {
                    required: true,
                    class: "text-danger"
                },
                mobile: {
                    required: true,
                    digits: true
                }
            }

        });

        $("#update_form").submit(function (e) {

            table.DataTable();
        });


        table.DataTable({
            processing: true,
            serverSide: true,
            ajax: '{{ url('show-table') }}',
            columns: [
                {data: 'name'},
                {data: 'mobile'},
                {data: 'email'},
                {data: 'persons'},
                {data: 'amount'}
            ]
        });
    });
</script>
</body>

</html>
