@extends('Master.Master')
@section('title','Coffee Bar POS')

@section('content')
<div class="container-fluid">
<div class="row">

    {{-- SIDEBAR CATEGORY & SEARCH --}}
    <div class="col-md-2 bg-white shadow-sm p-3" style="min-height:90vh;">
        <h5 class="fw-bold mb-4">Menu</h5>

        <input type="text" id="search" class="form-control mb-3" placeholder="Search product...">

        <div class="list-group">
            <button class="list-group-item list-group-item-action active category-btn" data-category="all">
                All
            </button>
            @foreach($categories ?? [] as $cat)
            <button class="list-group-item list-group-item-action category-btn"
                    data-category="{{ $cat->id }}">
                {{ $cat->name }}
            </button>
            @endforeach
        </div>
    </div>

    {{-- PRODUCT GRID --}}
    <div class="col-md-7 p-4">
        <div class="row" id="product-list">
            @foreach($products as $p)
            <div class="col-md-4 mb-4 product-item"
                 data-category="{{ $p->category_id }}"
                 data-name="{{ strtolower($p->name) }}">

                <div class="card border-0 shadow-sm rounded-4 h-100">
                    @if($p->image)
                        <img src="{{ asset('uploads/products/'.$p->image) }}"
                             class="card-img-top rounded-top-4"
                             style="height:160px; object-fit:cover;">
                    @else
                        <img src="https://via.placeholder.com/300x160"
                             class="card-img-top rounded-top-4">
                    @endif

                    <div class="card-body text-center">
                        <h6 class="fw-bold mb-1">{{ $p->name }}</h6>
                        <p class="text-muted small mb-2">$ {{ number_format($p->price,2) }}</p>

                        @if($p->stock > 0)
                        <button class="btn btn-dark btn-sm w-100 add-to-cart"
                                data-id="{{ $p->id }}"
                                data-name="{{ $p->name }}"
                                data-price="{{ $p->price }}">
                            Add to Order
                        </button>
                        @else
                        <span class="badge bg-danger w-100">Out of Stock</span>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    {{-- CART --}}
    <div class="col-md-3 bg-light p-4" style="min-height:90vh;">
        <div class="card border-0 shadow rounded-4">
            <div class="card-body">
                <h5 class="fw-bold mb-3">Current Order</h5>

                <form method="POST" action="{{ route('transaction.store') }}">
                @csrf

                <div style="max-height:300px; overflow-y:auto;">
                    <table class="table table-sm">
                        <tbody id="cart-body"></tbody>
                    </table>
                </div>

                <hr>

                <div class="mb-2">
                    <small>Total</small>
                    <h6 id="total_display">$ 0.00</h6>
                </div>

                <div class="mb-2">
                    <small>Tax (10%)</small>
                    <h6 id="tax_display">$ 0.00</h6>
                </div>

                <div class="mb-2">
                    <input type="number" name="discount"
                           id="discount"
                           class="form-control"
                           placeholder="Discount">
                </div>

                <div class="mb-2">
                    <small>Grand Total</small>
                    <h5 id="grand_total_display">$ 0.00</h5>
                </div>

                <select name="payment_method" class="form-control mb-2">
                    <option value="cash">Cash</option>
                    <option value="qris">QRIS</option>
                    <option value="transfer">Transfer</option>
                </select>

                <input type="number"
                       name="paid_amount"
                       id="paid_amount"
                       class="form-control mb-2"
                       placeholder="Paid Amount">

                <div class="mb-3">
                    <small>Change</small>
                    <h6 id="change_display">$ 0.00</h6>
                </div>

                <button class="btn btn-success w-100">
                    Complete Order
                </button>

                </form>
            </div>
        </div>
    </div>

</div>
</div>

{{-- JAVASCRIPT --}}
<script>
let cart = [];

document.querySelectorAll('.add-to-cart').forEach(button => {
    button.addEventListener('click', function(){
        let id = this.dataset.id;
        let name = this.dataset.name;
        let price = parseFloat(this.dataset.price);

        let existing = cart.find(item => item.id == id);
        if(existing){ existing.qty += 1; } 
        else { cart.push({id:id, name:name, price:price, qty:1}); }

        renderCart();
    });
});

function renderCart(){
    let tbody = document.getElementById('cart-body');
    tbody.innerHTML = "";
    let total = 0;

    cart.forEach((item,index) => {
        let itemTotal = item.price * item.qty;
        total += itemTotal;

        tbody.innerHTML += `
            <tr>
                <td>
                    ${item.name} x ${item.qty}
                    <input type="hidden" name="products[${index}][id]" value="${item.id}">
                    <input type="hidden" name="products[${index}][qty]" value="${item.qty}">
                </td>
                <td>$ ${itemTotal.toFixed(2)}</td>
            </tr>
        `;
    });

    let tax = total * 0.10;
    let discount = parseFloat(document.getElementById('discount').value) || 0;
    let grandTotal = total + tax - discount;

    document.getElementById('total_display').innerHTML = "$ " + total.toFixed(2);
    document.getElementById('tax_display').innerHTML = "$ " + tax.toFixed(2);
    document.getElementById('grand_total_display').innerHTML = "$ " + grandTotal.toFixed(2);

    calculateChange(grandTotal);
}

document.getElementById('discount').addEventListener('input', renderCart);
document.getElementById('paid_amount').addEventListener('input', function(){
    let grand = parseFloat(document.getElementById('grand_total_display').innerHTML.replace('$ ','') || 0);
    calculateChange(grand);
});

function calculateChange(grand){
    let paid = parseFloat(document.getElementById('paid_amount').value) || 0;
    let change = paid - grand;
    document.getElementById('change_display').innerHTML = "$ " + (change > 0 ? change.toFixed(2) : "0.00");
}

// Search Filter
document.getElementById('search').addEventListener('keyup', function(){
    let value = this.value.toLowerCase();
    document.querySelectorAll('.product-item').forEach(item=>{
        item.style.display = item.dataset.name.includes(value) ? "block" : "none";
    });
});
</script>

@endsection