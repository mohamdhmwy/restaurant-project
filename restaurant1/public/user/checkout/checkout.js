// This is your test secret API key.
const stripe = Stripe("pk_test_51PgXMFKXu4PwK4d583kPzF2kUNvezmFhnZnBLqTzivoxlo70WUQvk4cOB97VltyPTNCQv8Pq6yZNEyS9vlniAlcC00IOE9GaK7");

initialize();

// Create a Checkout Session
async function initialize() {
  const fetchClientSecret = async () => {
    const response = await fetch("/create-checkout-session", {
      method: "POST",
    });
    const { clientSecret } = await response.json();
    return clientSecret;
  };

  const checkout = await stripe.initEmbeddedCheckout({
    fetchClientSecret,
  });

  // Mount Checkout
  checkout.mount('#checkout');
}

  