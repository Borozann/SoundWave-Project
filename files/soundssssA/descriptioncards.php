<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dark Mode Card Example</title>
    <style>
        body {
            background-color: #121212;
            color: #FFFFFF; /* Default text color for dark mode */
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        .card {
            background-color: #1E1E1E; /* Dark gray for the card */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            padding: 20px;
            max-width: 400px;
            width: 100%;
            text-align: center;
        }

        .card h2 {
            color: #FFD700; /* Gold text color for headings */
        }

        .card p {
            font-size: 16px;
            line-height: 1.5;
        }
    </style>
</head>

<body>
    <div class="card">
        <h2>Your Card Title</h2>
        <p>This is some sample content inside the card. You can customize it as needed.</p>
    </div>
</body>

</html>
