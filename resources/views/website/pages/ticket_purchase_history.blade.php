@extends('website.layouts.layout2')

@section('title', 'Lịch sử mua vé')

@push('css')
    <style>
        .table {
            background-color: white
        }
    </style>
@endpush

@section('page-content')

    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead>
                    <tr>
                        <th>Ngày giao dịch</th>
                        <th>Mã số vé</th>
                        <th>Tên phim</th>
                        <th>Số tiền</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ticketOrders as $ticketOrder)
                        <tr>
                            <td>{{ $ticketOrder->created_at->format('d/m/Y') }}</td>
                            <td>{{ $ticketOrder->ticket_number }}</td>
                            <td>{{ optional($ticketOrder->film->first())->name }}</td>
                            <td>{{ number_format($ticketOrder->grand_total) }}</td>
                            <td>
                                <a href="#" class="btn btn-primary">Xem chi tiết</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection