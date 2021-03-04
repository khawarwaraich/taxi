
<!-- Load Stripe.js on your website. -->
<script src="https://js.stripe.com/v3"></script>
<script src="https://code.jquery.com/jquery-1.9.1.min.js"></script>

<div id="error-message"></div>
<script>

$(window).load(function() {
    var stripe_publish_key = 'pk_test_0D5LVcQH8brCqqfXO5CXQdlK00T4XHtCV0'
    var stripe = Stripe(stripe_publish_key);

    // When the customer clicks on the button, redirect
    // them to Checkout.
    stripe.redirectToCheckout({
    sessionId: '{{ $session_id }}'
    })
    .then(function (result) {
      if (result.error) {
        // If `redirectToCheckout` fails due to a browser or network
        // error, display the localized error message to your customer.
        var displayError = document.getElementById('error-message');
        displayError.textContent = result.error.message;
      }
    });
});
</script>

