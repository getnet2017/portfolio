<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>My Portfolio</title>
    <style>
    * {
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    body {
        background-color: #f0f0f0;
        font-family: Arial, sans-serif;
        padding: 20px;
    }

    .container {
        display: flex;
        flex-wrap: wrap;
        gap: 40px;
    }

    aside {
        flex: 1 1 200px;
        min-width: 200px;
    }

    aside h2 {
        font-size: 24px;
        margin-bottom: 20px;
        color: #333;
    }

    main {
        flex: 2 1 500px;
    }

    form {
        background: white;
        padding: 25px;
        border-radius: 12px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    }

    label {
        display: block;
        margin-top: 15px;
        font-weight: 600;
    }

    input,
    textarea {
        width: 100%;
        padding: 10px;
        margin-top: 6px;
        border: 1px solid #ccc;
        border-radius: 6px;
        font-size: 14px;
    }

    button {
        margin-top: 20px;
        padding: 12px 20px;
        background-color: #007BFF;
        color: #fff;
        border: none;
        border-radius: 6px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    button:hover {
        background-color: #0056b3;
    }

    @media (max-width: 768px) {
        .container {
            flex-direction: column;
        }

        aside,
        main {
            width: 100%;
        }

        form {
            margin-top: 10px;
        }
    }
    </style>
</head>

<body>

    <div class="container">
        <aside>
            <h2>Personal Information Form</h2>
        </aside>

        <main>
            <form action="/submit" method="POST">
                <label for="fullname">Full Name</label>
                <input type="text" id="fullname" name="fullname" required>

                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>

                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone">

                <label for="dob">Date of Birth</label>
                <input type="date" id="dob" name="dob">

                <label for="address">Address</label>
                <textarea id="address" name="address" rows="4"></textarea>

                <button type="submit">Submit</button>
            </form>
        </main>
    </div>

</body>

</html>