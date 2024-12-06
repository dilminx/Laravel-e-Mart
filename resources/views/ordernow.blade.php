@extends('master')
@section('content')
    <div class="container mt-5" style="height:80vh">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card shadow-lg">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Order Summary</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Amount</span>
                                <span class="fw-bold">LKR {{ number_format($total, 2) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center">
                                <span>Delivery Charges (3%)</span>
                                <span class="fw-bold">LKR {{ number_format($total * 0.03, 2) }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center bg-light">
                                <span class="fw-bold">Final Amount</span>
                                <span class="fw-bold text-success">LKR
                                    {{ number_format($total + $total * 0.03, 2) }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <form action="/checkout" method="post">
                    @csrf
                    <h2>Payment Method</h2>
                    <div class="form-group">
                        <input type="radio" id="cod" value="cod" name="payment" class="payment-method">
                        <label for="caod">Cash On Delivery</label><br>
                
                        <input type="radio" value="online" id="online" name="payment" class="payment-method">
                        <label for="online">Online Payment</label><br>

                        <input type="radio" value="cash" id="cash" name="payment" class="payment-method">
                        <label for="cash">Cash</label>
                    </div>
                
                    <!-- Address Field (Initially Hidden) -->
                    <div id="cash-address" class="mt-3 d-none">
                        <label for="address">Delivery Address</label>
                        <textarea id="address" name="address" class="form-control" rows="3" placeholder="Enter your delivery address"></textarea>
                    </div>
                
                    <button type="submit" class="btn btn-primary mt-3">Submit</button>
                </form>
                
            </div>
        </div>
    </div>
@endsection
<script>
   document.addEventListener('DOMContentLoaded', () => {
    // Select radio buttons and the address section
    const codRadio = document.getElementById('cod');
    const onlineRadio = document.getElementById('online');
    const addressSection = document.getElementById('cash-address');

    codRadio.addEventListener('change', () => {
        addressSection.classList.remove('d-none'); // Show address field
    });
    onlineRadio.addEventListener('change', () => {
        addressSection.classList.remove('d-none'); // Show address field
    });

    document.getElementById('cash').addEventListener('change', () => {
        addressSection.classList.add('d-none'); // Hide address field
    });
});

</script>
