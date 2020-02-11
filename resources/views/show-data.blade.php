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
        .bold-text{
            font-weight: bold !important;
            color: #d20000;
            background: #f7ecec;
        }
        .table-data{
            font-weight: bold !important;
            background: #f7ecec;
            text-align: center;
            font-size: large;
        }
        .center-align{
            text-align: center;
        }
        .bottom-header{
            background: #fcf8e35e;
        }
        .download-button{
            /*margin-left: 1080px !important;*/
            /*margin-bottom: 10px !important;*/
            margin-left: 1030px;
            margin-top: -62px;
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

<div class="container">
    <div class="row ">
        <div class="">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="row">
{{--                        <button type="button" class="btn btn-info"> <i class="fa fa-arrow-circle-o-left" style="font-size:48px;color:dodgerblue"></i></button>--}}
                        <h3 class="center-block panel-title header-style">ACMA Annual Retreat Registration 2020 </h3>

                        <a href='{{route('export')}}'>
                            <button type="button" class="btn btn-info download-button">
                               Download
                            </button>
                        </a>

                    </div>
                </div>
                <div>

                    <table class=" display table dataTable table-bordered" style="width:100%" id="acma_table">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Adults</th>
                            <th>Children</th>
                            <th>Persons</th>
                            <th>Amount</th>
                        </tr>
                        </thead>
                        @foreach($data as $details)
                            <tr>
                                <td>{{@$details->name}}</td>
                                <td>{{@$details->mobile}}</td>
                                <td>{{@$details->email}}</td>
                                <td class="center-align">{{@$details->adults}}</td>
                                <td class="center-align">{{@$details->children}}</td>
                                <td class="center-align">{{@$details->persons}}</td>
                                <td class="center-align">{{@$details->amount}}</td>
                            </tr>
                        @endforeach
                        <tr>
                            <th class="bottom-header">Name</th>
                            <th class="bottom-header">Phone</th>
                            <th class="bottom-header">Email</th>
                            <th class="bottom-header">Adults</th>
                            <th class="bottom-header">Children</th>
                            <th class="bottom-header">Persons</th>
                            <th class="bottom-header">Amount</th>
                        </tr>
                        <tr>
                            <td class="table-data" colspan="3">Total</td>
{{--                            <td class="bold-text"></td>--}}
{{--                            <td class="bold-text"></td>--}}
                            <td class="bold-text center-align">{{@$totalAdults}}</td>
                            <td class="bold-text center-align">{{@$totalChildren}}</td>
                            <td class="bold-text center-align">{{@$totalPersons}}</td>
                            <td class="bold-text center-align">{{@$totalAmount}}</td>

                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
