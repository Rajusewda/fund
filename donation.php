<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="styledon.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donation</title>
</head>

<body>
    <div>
        <h2>Donation Details</h2>

        <form action="process_donation.php" method="post">
            <!-- YOUR DETAILS -->
            <fieldset>
                <legend>Your Details</legend>

                <label for="fullName">Full Name*</label>
                <input type="text" id="fullName" name="fullName" placeholder="Full Name" required>

                <label for="email">Email*</label>
                <input type="email" id="email" name="email" placeholder="Email" required>

                <label for="billAddress">Bill Address</label>
                <input type="text" id="billAddress" name="billAddress" placeholder="Bill Address">
            </fieldset>

            <!-- DONATION AMOUNT -->
            <fieldset>
                <legend>Donation Amount</legend>

                <label for="amount">Amount (INR)*</label>
                <input type="number" id="amount" name="amount" min="1" required placeholder="Donation Amount (INR)">
            </fieldset>

            <!-- PAYMENT METHOD -->
            <fieldset>
                <legend>Payment Method</legend>
                <label for="paymentMethod">Choose a payment method:</label>
                <select id="paymentMethod" name="paymentMethod" required>
                    <option value="creditCard">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <!-- Add more options for different payment methods -->
                </select>
            </fieldset>

            <!-- TERMS AND CONDITIONS -->
            <div class="term">
                <input type="checkbox" id="agreeTerms" name="agreeTerms" required>
                <label for="agreeTerms">I agree to the terms and conditions</label>
            </div>

            <!-- DONATE BUTTON -->
            <input type="submit" value="DONATE NOW">
        </form>
    </div>
</body>

</html>
