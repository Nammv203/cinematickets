<div class="list-group list-group-flush account-settings-links">
    <a class="list-group-item list-group-item-action {{ Route::is('auth.profile') ? 'active' : '' }}" data-toggle="list"
        href="{{ route('auth.profile') }}">
        Tài khoản</a>

    <a class="list-group-item list-group-item-action {{ Route::is('auth.ticket-purchase-history') ? 'active' : '' }}"
        data-toggle="list" href="{{ route('auth.ticket-purchase-history') }}">
        Lịch sử mua vé
    </a>
</div>