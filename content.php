<div class="container">
        <div class="checkout-container">
            <h2 class="page-title">Personal Information</h2>
            <div class="progress">
                <div class="progress-bar bg-warning" role="progressbar" style="width: 33%"></div>
            </div>
            
            <form action="process-information.php" method="POST">
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                    </div>
                    <div class="col-md-6">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                    </div>
                    <div class="col-12">
                        <label for="address" class="form-label">Address</label>
                        <input type="text" class="form-control" id="address" name="address" required>
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">City</label>
                        <input type="text" class="form-control" id="city" name="city" required>
                    </div>
                    <div class="col-md-3">
                        <label for="state" class="form-label">Country</label>
                        <select class="form-select" id="state" name="state" required>
                            <option value="">Choose...</option>
                            <option value="USA">United States Of America</option>
                            <option value="PHL">Philippines</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                    </div>
                    <div class="col-md-6">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                </div>
                <div class="mt-4 d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Continue to Payment</button>
                </div>
            </form>
        </div>
    </div>

    
<style>
        .checkout-container {
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            padding: 30px;
            margin: 40px auto;
            max-width: 800px;
        }
        .form-label {
            font-weight: 600;
            color: #333;
        }
        .progress {
            height: 8px;
            margin-bottom: 30px;
        }
        .btn-primary {
            background-color: #ffc107;
            border-color: #ffc107;
            color: #000;
            font-weight: 600;
        }
        .btn-primary:hover {
            background-color: #ffca2c;
            border-color: #ffca2c;
            color: #000;
        }
        .page-title {
            color: #333;
            margin-bottom: 30px;
            text-align: center;
        }
    </style>