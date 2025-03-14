<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/icon.png" type="image/svg+xml+png">
    <link rel="stylesheet" href="assets/css/pay.css">
    <title>Payment Page</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
</head>
<body>
    
    <!-- start: Payment -->
    <section class="payment-section">
        <div class="container">
            <div class="payment-wrapper">
                <div class="payment-left">
                    <div class="payment-header">
                        <div class="payment-header-icon"><i class="ri-flashlight-fill"></i></div>
                        <div class="payment-header-title">Order Summary</div>
                        <p class="payment-header-description">Your Payment Details are Safe with us.</p>
                    </div>
                    <div class="payment-content">
                        <div class="payment-body">
                            <div class="payment-plan">
                                <div class="payment-plan-type"><i class="fa-solid fa-plane-departure"></i></div>
                                <div class="payment-plan-info">
                                    <div class="payment-plan-info-name">Start your journey</div>
                                    <div class="payment-plan-info-price" id="total-price">$500</div>
                                </div>
                            </div>
                            <div class="payment-summary">
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Additional fee</div>
                                    <div class="payment-summary-price">$10</div>
                                </div>
                                <div class="payment-summary-item">
                                    <div class="payment-summary-name">Discount 10%</div>
                                    <div class="payment-summary-price">-$10</div>
                                </div>
                                <div class="payment-summary-divider"></div>
                                <div class="payment-summary-item payment-summary-total">
                                    <div class="payment-summary-name">Total</div>
                                    <div class="payment-summary-price" id="final-total">$500</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="payment-right">
                    <form id="payment-form" class="payment-form">
                        <h1 class="payment-title">Payment Details</h1>
                        <div class="payment-method">
                            <input type="radio" name="payment-method" id="method-1" checked required>
                            <label for="method-1" class="payment-method-item">
                                <img src="assets/images/visa.png" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-2" required>
                            <label for="method-2" class="payment-method-item">
                                <img src="assets/images/mastercard.png" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-3" required>
                            <label for="method-3" class="payment-method-item">
                                <img src="assets/images/paypal.png" alt="">
                            </label>
                            <input type="radio" name="payment-method" id="method-4" required>
                            <label for="method-4" class="payment-method-item">
                                <img src="assets/images/stripe.png" alt="">
                            </label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="name" required>
                            <label for="name" class="payment-form-label payment-form-label-required">Full name</label>
                        </div>
                        <div class="payment-form-group">
                            <input type="text" placeholder=" " class="payment-form-control" id="card-number" required>
                            <label for="card-number" class="payment-form-label payment-form-label-required">Card Number</label>
                        </div>
                        <div class="payment-form-group-flex">
                            <div class="payment-form-group">
                                <input type="date" placeholder=" " class="payment-form-control" id="expiry-date" required>
                                <label for="expiry-date" class="payment-form-label payment-form-label-required">Expiry Date</label>
                            </div>
                            <div class="payment-form-group">
                                <input type="text" placeholder=" " class="payment-form-control" id="cvv" required>
                                <label for="cvv" class="payment-form-label payment-form-label-required">CVV</label>
                            </div>
                        </div>
                        <button type="submit" class="payment-form-submit-button"><i class="ri-wallet-line"></i> Pay</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- end: Payment -->

    <script>
        document.getElementById('payment-form').addEventListener('submit', function(event) {
            event.preventDefault();
            alert('Payment Completed Successfully!');

            const { jsPDF } = window.jspdf;
            const doc = new jsPDF();

            

            doc.text(`Payment Summary`, 10, 10);
            doc.text(`Destination: ${destination}`, 10, 20);
            doc.text(`Total Amount: $${total}`, 10, 60);

            doc.save('payment-summary.pdf');

            // Redirect to the home page after a delay to allow PDF download
            setTimeout(() => {
                window.location.href = 'index - conected.php';
            }, 2000);
        });

        document.addEventListener('DOMContentLoaded', function() {
            const people = new URLSearchParams(window.location.search).get('people');
            const total = people * 400;

            document.getElementById('total-price').textContent = `$${total}`;
            document.getElementById('final-total').textContent = `$${total}`;
        });
    </script>
    
</body>
</html>
