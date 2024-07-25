<?php
namespace App;

class PayPalPayment
{
    public function ui($montant): string
    {
        $client_id = 'ART50ZLUTRsApktCVHMF4i4KzbbnM7o5b80o6tpHwODyTaxZGHaxkFzoWf_P9DStGm4OmmEV9dYB0kJs';
        return <<<HTML
<script
    src="https://www.paypal.com/sdk/js?client-id={$client_id}&buyer-country=US&currency=USD&components=buttons&enable-funding=venmo"
    data-sdk-integration-source="developer-studio"
></script>
<div id="paypal-button-container" ></div>
<p id="result-message"></p>
<script>
    paypal.Buttons({
  // Sets up the transaction when a payment button is clicked
  createOrder: (data, actions) => {
    return actions.order.create({
      purchase_units: [{
        amount: {
          value: $montant // Can also reference a variable or function
        }
      }]
    });
  },
  // Finalize the transaction after payer approval
  onApprove: (data, actions) => {
    return actions.order.capture().then(function(orderData) {
      // Successful capture! For dev/demo purposes:
      console.log('Capture result', orderData, JSON.stringify(orderData, null, 2));
      const transaction = orderData.purchase_units[0].payments.captures[0];
      alert(`Transaction \${transaction.status}: \${transaction.id}\n\nSee console for all available details`);
      // When ready to go live, remove the alert and show a success message within this page. For example:
      const element = document.getElementById('paypal-button-container');
      element.innerHTML = '<h3>Thank you for your payment!</h3>';
    });
  }
}).render('#paypal-button-container');

</script>
HTML;
    }
}
?>
