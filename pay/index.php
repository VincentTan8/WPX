<?php
//header("Location: https://pay.airwallex.com/sghd5fu44rjz");
//exit;
?>

<!-- 
  hpp.html
  Airwallex Payment Demo - Static HTML.  Created by Charlie Lang and Josie Ku.

  @airwallex/components-sdk Hosted Payment Page integration in Static HTML
  Comments with "Example" demonstrate how states can be integrated
  with the element, they can be removed.

  Detailed guidance here: https://github.com/airwallex/airwallex-payment-demo/blob/master/docs/components-sdk/hpp.md
 -->

<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Airwallex Checkout Playground</title>
    <!-- 
      STEP #1: Import @airwallex/components-sdk bundle 
               - You MUST replace the bundle version to the latest NPM version
                 in order to import the package properly!
    -->
    <script src="https://static.airwallex.com/components/sdk/v1/index.js"></script>
</head>

<body>
    <h1>Hosted payment page (HPP) integration</h1>
    <p>
        The following button redirects the customer to an Airwallex payment page.
    </p>
    <!-- Insert fields here for item, currency  -->
    <!-- Itemand currency will correspond to a price -->

    <button id="hpp">Pay Now</button>
    <script async>
        (async () => {
            async function createPayment(currency) {
                const res = await fetch('create-payment-intent.php', {
                    method: 'POST',
                    headers: { 'Content-Type': 'application/json' },
                    body: JSON.stringify({
                        amount: 70,
                        currency: currency,
                        merchant_order_id: "OrderID_0001" //use randomizer
                    })
                });

                const data = await res.json();
                console.log(data);

                if (data.success) {
                    const intent = data.body.id;
                    const client_secret = data.body.client_secret;

                    return { intent, client_secret };
                } else {
                    console.error("Error:", data.error);
                }
            }

            const currency = "SGD";
            const mode = 'payment';

            const { payments } = await window.AirwallexComponentsSDK.init({
                env: 'demo', // Setup which Airwallex env('staging' | 'demo' | 'prod') to integrate with
                enabledElements: ['payments'],
            })

            const redirectHppForCheckout = (currency, intent_id, client_secret) => {
                payments.redirectToCheckout({
                    env: 'demo',
                    mode: 'payment',
                    currency,
                    intent_id, // Required, must provide intent details
                    client_secret, // Required
                    successUrl: 'https://www.airwallex.com', // Must be HTTPS sites
                    failUrl: 'https://www.google.com', // Must be HTTPS sites
                    // optional: customize the visual appearance of the HPP
                    appearance: {
                        mode: 'light', // choose between 'dark' and 'light'
                        variables: {
                            colorBrand: '#612FFF',
                        },
                    },
                    methods: ['googlepay', 'applepay', 'card', 'alipaycn', 'gcash', 'grabpay', 'kakaopay', 'wechatpay'],
                });
            }

            document.getElementById('hpp').addEventListener('click', async () => {
                //Call create PaymentIntent after selecting course package and currency, and filling out fields
                const { intent, client_secret } = await createPayment(currency);

                if (mode === 'payment') {
                    redirectHppForCheckout(currency, intent, client_secret);
                } else if (mode === 'recurring') {
                    redirectHppForRecurring();
                }
            });
        })();
    </script>
</body>

</html>