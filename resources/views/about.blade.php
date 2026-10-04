<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f4f7f6;
            margin: 0;
            padding: 0;
            color: #333;
        }
        nav {
            background-color: #2c3e50;
            padding: 15px 30px;
            display: flex;
            gap: 20px;
        }
        nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 600;
            font-size: 16px;
            transition: color 0.2s;
        }
        nav a:hover {
            color: #1abc9c;
        }
        .container {
            max-width: 800px;
            margin: 60px auto;
            background: #ffffff;
            padding: 40px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.05);
        }
        h1 {
            color: #2c3e50;
            margin-top: 0;
        }
        p {
            line-height: 1.6;
            color: #555;
        }
    </style>
</head>
<body>

    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>

    <div class="container">
        <h1>About Us</h1>
        <p>This is the about page of the application, featuring background information and team details styled nicely for your lab results!</p>
    </div>

</body>
</html>