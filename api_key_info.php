<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>API Key Information</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; line-height: 1.6; }
        h1 { color: #333; }
        code { background: #f4f4f4; padding: 2px 5px; border-radius: 3px; }
    </style>
</head>
<body>
    <h1>API Key Information</h1>
    <p>
        This project uses an API key for external service integration.
        The API key is stored securely in Replit's <strong>Secrets (Environment Variables)</strong>
        and is <strong>never hardcoded</strong> in the repository.
    </p>
    <h3>How to Set Up:</h3>
    <ol>
        <li>Go to your Replit project.</li>
        <li>Click on the <strong>Secrets (Environment Variables)</strong> tab.</li>
        <li>Add a new secret with the key <code>API_KEY</code> and your actual API key as the value.</li>
    </ol>
    <p>
        The application will automatically read the API key from the environment variables.
    </p>
</body>
</html>