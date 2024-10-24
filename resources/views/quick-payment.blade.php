<!DOCTYPE html>
<html>

<head>
    <title>Quick Payment Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial;
            margin: 0;
            padding: 20px;
            background: #f0f0f0;
        }

        .container {
            max-width: 500px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .form-group {
            margin-bottom: 15px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        button {
            width: 100%;
            padding: 10px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        button:hover {
            background: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Test Payment</h2>
        <form action="{{ route('payment.initiate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label>Amount (KWD)</label>
                <input type="number" name="amount" value="1.000" step="0.001" required>
            </div>
            <button type="submit">Pay Now</button>
        </form>
    </div>
</body>

</html>