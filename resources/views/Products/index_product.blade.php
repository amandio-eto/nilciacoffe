@extends('Master.Master')
@section('title','Products')

@section('content')

{{-- Button Add Product --}}
<div class="mb-3">
    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createModal">
        <i class="bi bi-plus-circle"></i> Add Product
    </button>
</div>

<div class="row g-3">
    {{-- Product List --}}
    <div class="row">



<div class="position-fixed top-0 end-0 p-3" style="width:400px; z-index:1050;">
    <div class="card shadow rounded-3 p-3">
        <h5 class="fw-bold mb-3">Cart</h5>
        <form method="POST" action="{{ route('transaction.store') }}">
            @csrf
            <div style="max-height:400px; overflow-y:auto;">
                <table class="table table-sm">
                    <tbody id="cart-body"></tbody>
                </table>
            </div>

            <div class="mb-2">
                <small>Total</small>
                <h6 id="total_display">$0.00</h6>
            </div>

            <select name="payment_method" class="form-control mb-2">
                <option value="cash">Cash</option>
                <option value="qris">TI-OAN</option>
                <option value="transfer">Transfer</option>
            </select>

            <input type="number" name="paid_amount" id="paid_amount" class="form-control mb-2" placeholder="Paid Amount">

            <div class="mb-2">
                <small>Change</small>
                <h6 id="change_display">$0.00</h6>
            </div>

            <button type="submit" class="btn btn-success w-100">Checkout</button>
        </form>
    </div>
</div>

    </div>
    @foreach($products as $p)
        <div class="col-6 col-md-3">
            <div class="card shadow-sm rounded-3 h-100 hover-scale">

                {{-- Product Image --}}
                <img src="{{ $p->image ? asset('uploads/products/'.$p->image) : 'https://via.placeholder.com/150' }}" 
                     class="card-img-top rounded-top-3" 
                     style="height:130px; object-fit:cover;">

                <div class="card-body p-2 d-flex flex-column justify-content-between">

                    {{-- Product Info --}}
                    <div>
                        <h6 class="fw-bold text-truncate">{{ $p->name }}</h6>
                        <p class="mb-1 text-success fw-bold">$ {{ number_format($p->price,2) }}</p>

                        @if($p->stock > 10)
                            <span class="badge bg-success">{{ $p->stock }} in stock</span>
                        @elseif($p->stock>0)
                            <span class="badge bg-warning text-dark">Low: {{ $p->stock }}</span>
                        @else
                            <span class="badge bg-danger">Out</span>
                        @endif
                    </div>

                    {{-- Action Buttons --}}
                    <div class="mt-2 d-flex justify-content-between">
                        @if($p->stock>0)
                            <button class="btn btn-sm btn-dark add-to-cart"
                                    data-id="{{ $p->id }}"
                                    data-name="{{ $p->name }}"
                                    data-price="{{ $p->price }}">
                                <i class="bi bi-cart-plus"></i> Buy
                            </button>
                        @endif

                        <div class="btn-group">
                            <button class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#editModal{{ $p->id }}">
                                <i class="bi bi-pencil"></i> Edit
                            </button>
                            <a href="/products/delete/{{ $p->id }}" class="btn btn-sm btn-danger" onclick="return confirm('Delete this product?')">
                                <i class="bi bi-trash"></i> Delete
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>

        {{-- Edit Modal --}}
        <div class="modal fade" id="editModal{{ $p->id }}">
            <div class="modal-dialog">
                <form method="POST" action="/products/update/{{ $p->id }}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-content rounded-3 shadow-sm">
                        <div class="modal-header bg-warning text-dark">
                            <h5>Edit Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>
                        <div class="modal-body">
                            <input type="text" name="name" class="form-control mb-2" value="{{ $p->name }}" required>
                            <input type="number" name="price" class="form-control mb-2" value="{{ $p->price }}" required>
                            <input type="number" name="stock" class="form-control mb-2" value="{{ $p->stock }}" required>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-warning w-100">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endforeach
</div>

{{-- Create Product Modal --}}
<div class="modal fade" id="createModal">
    <div class="modal-dialog">
        <form method="POST" action="/products/store" enctype="multipart/form-data">
            @csrf
            <div class="modal-content rounded-3 shadow-sm">
                <div class="modal-header bg-primary text-white">
                    <h5>Add Product</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="text" name="name" class="form-control mb-2" placeholder="Product Name" required>
                    <input type="number" name="price" class="form-control mb-2" placeholder="Price" required>
                    <input type="number" name="stock" class="form-control mb-2" placeholder="Stock" required>
                    <input type="file" name="image" class="form-control">
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success w-100">Save</button>
                </div>
            </div>
        </form>
    </div>
</div>

{{-- Cart Sidebar --}}


{{-- JS Cart --}}
<script>
let cart=[];
document.querySelectorAll('.add-to-cart').forEach(btn=>{
    btn.addEventListener('click',function(){
        let id=this.dataset.id;
        let name=this.dataset.name;
        let price=parseFloat(this.dataset.price);
        let exist=cart.find(i=>i.id==id);
        if(exist){ exist.qty+=1; } else { cart.push({id,name,price,qty:1}); }
        renderCart();
    });
});

function renderCart(){
    let tbody=document.getElementById('cart-body');
    tbody.innerHTML='';
    let total=0;
    cart.forEach((i,index)=>{
        let t=i.price*i.qty;
        total+=t;
        tbody.innerHTML+=`
        <tr>
            <td>${i.name} x ${i.qty}
                <input type="hidden" name="products[${index}][id]" value="${i.id}">
                <input type="hidden" name="products[${index}][qty]" value="${i.qty}">
            </td>
            <td>$ ${t.toFixed(2)}</td>
        </tr>`;
    });
    document.getElementById('total_display').innerHTML='$ '+total.toFixed(2);
    calculateChange(total);
}

document.getElementById('paid_amount').addEventListener('input',function(){
    let total=parseFloat(document.getElementById('total_display').innerHTML.replace('$ ','')||0);
    calculateChange(total);
});

function calculateChange(total){
    let paid=parseFloat(document.getElementById('paid_amount').value)||0;
    let change=paid-total;
    document.getElementById('change_display').innerHTML='$ '+(change>0?change.toFixed(2):'0.00');
}
</script>

{{-- CSS --}}
<style>
.hover-scale:hover { transform: scale(1.05); transition: transform 0.2s; cursor:pointer; }
.card h6 { font-size:0.95rem; }
</style>

@endsection