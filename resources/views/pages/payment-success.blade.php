<!DOCTYPE html>
<html>

<head>
    <title>Payment Success</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow p-6 text-center">
            <h2 class="text-2xl font-bold text-green-600 mb-4">Payment Successful!</h2>
            <p class="mb-4">Your test payment was successful.</p>
            <a href="{{ route('payment.form') }}"
                class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Try Another Payment
            </a>
        </div>
    </div>
</body>

</html>

<!-- resources/views/payment-failed.blade.php -->
<!DOCTYPE html>
<html>

<head>
    <title>Payment Failed</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow p-6 text-center">
            <h2 class="text-2xl font-bold text-red-600 mb-4">Payment Failed</h2>
            <p class="mb-4">Your test payment was not successful.</p>
            <a href="{{ route('payment.form') }}"
                class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                Try Again
            </a>
        </div>
    </div>
</body>

</html>