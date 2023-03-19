<style>
    .checkout-form {
  max-width: 600px;
  margin: 0 auto;
  padding: 20px;
  border: 1px solid #ddd;
  border-radius: 5px;
}

.checkout-form h2 {
  margin-top: 0;
}

.checkout-form label {
  display: block;
  margin-bottom: 5px;
}

.checkout-form input[type="text"],
.checkout-form input[type="email"],
.checkout-form select {
  width: 100%;
  padding: 10px;
  border: 1px solid #ddd;
  border-radius: 5px;
  margin-bottom: 15px;
}

.checkout-form select {
  margin-bottom: 30px;
}

.checkout-form button[type="submit"] {
  display: block;
  width: 100%;
  padding: 10px;
  background-color: #007bff;
  color: #fff;
  border: none;
  border-radius: 5px;
}
.checkout-form button[type="submit"]:hover {
background-color: #0069d9;
}

.payment-details {
margin-top: 15px;
}

.payment-method-details {
display: none;
}

.payment-method-details.show {
display: block;
}
</style>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="checkout-form">
        <h2>Checkout</h2>
        <form>
          <label for="name">Name</label>
          <input type="text" id="name" name="name" required>
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required>
          <label for="address">Address</label>
          <input type="text" id="address" name="address" required>
          <label for="payment-method">Payment Method</label>
          <select id="payment-method" name="payment-method" required>
            <option value="skrill">Skrill</option>
            <option value="paypal">PayPal</option>
            <option value="credit-card">Credit Card</option>
          </select>
          <div class="payment-details">
            <div id="skrill-details" class="payment-method-details">
              <label for="skrill-email">Skrill Email</label>
              <input type="email" id="skrill-email" name="skrill-email">
            </div>
            <div id="paypal-details" class="payment-method-details">
              <label for="paypal-email">PayPal Email</label>
              <input type="email" id="paypal-email" name="paypal-email">
            </div>
            <div id="credit-card-details" class="payment-method-details">
              <label for="card-number">Card Number</label>
              <input type="text" id="card-number" name="card-number" maxlength="16" required>
              <label for="expiry-date">Expiry Date</label>
              <input type="text" id="expiry-date" name="expiry-date" placeholder="MM/YY" pattern="(0[1-9]|1[0-2])/([0-9]{2})" required>
              <label for="cvv">CVV</label>
              <input type="text" id="cvv" name="cvv" maxlength="3" required>
            </div>
          </div>
          <button type="submit">Submit Payment</button>
        </form>
      </div>
<script>
const paymentMethod = document.getElementById('payment-method');
const skrillDetails = document.getElementById('skrill-details');
const paypalDetails = document.getElementById('paypal-details');
const creditCardDetails = document.getElementById('credit-card-details');

paymentMethod.addEventListener('change', function() {
  if (paymentMethod.value === 'skrill') {
    skrillDetails.classList.add('show');
    paypalDetails.classList.remove('show');
    creditCardDetails.classList.remove('show');
  } else if (paymentMethod.value === 'paypal') {
    skrillDetails.classList.remove('show');
    paypalDetails.classList.add('show');
    creditCardDetails.classList.remove('show');
  } else if (paymentMethod.value === 'credit-card') {
    skrillDetails.classList.remove('show');
    paypalDetails.classList.remove('show');
    creditCardDetails.classList.add('show');
  }
});

</script>
      
</body>
</html>