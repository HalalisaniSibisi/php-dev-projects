<nav>
    <ul class="nav-list">
        <li><a href="task1.php">Task 1</a></li>
        <li><a href="task2.php">Task 2</a></li>
        <li><a href="task3.php">Task 3</a></li>
        <li><a href="task4.php">Task 4</a></li>
    </ul>
</nav>

<style>

    .nav-list {
        list-style: none;
        padding: 0;
        margin: 10px auto;
        display: flex;
        justify-content: space-around;
        align-items: center;
        gap: 30px;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        font-weight: 500;
        text-transform: lowercase;
    }


    .nav-list a {
        text-decoration: none;
        color: #333;
        font-size: 16px;
        padding: 10px 30px;
        border-radius: 4px;
        transition: background-color 0.3s ease, color 0.3s ease;
    }


    .nav-list a:hover,
    .nav-list a:focus {
        background-color: #007BFF;
        color: white;
        outline: none;
    }


    .nav-list a.active {
        font-weight: 700;
        border-bottom: 2px solid #007BFF;
    }

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        font-family: 'Arial', sans-serif;
        background: linear-gradient(135deg, #f8f6f0 0%, #f4f1e8 100%);
        min-height: 100vh;
        color: #8b7355;
        line-height: 1.6;
    }

    .container_title {
        max-width: 800px;
        margin: 0 auto;
        padding: 60px 20px;
        text-align: center;
    }

    h1 {
        font-size: 2.5rem;
        color: #d4af37;
        font-weight: 300;
        letter-spacing: 2px;
        margin-bottom: 30px;
        text-shadow: 0 2px 4px rgba(212, 175, 55, 0.1);
    }

    h2 {
        font-size: 1.2rem;
        color: #b8986a;
        font-weight: 300;
        margin-bottom: 20px;
        opacity: 0.9;
    }

    .welcome-text {
        margin-bottom: 15px;
    }

    .accent-line {
        width: 60px;
        height: 2px;
        background: linear-gradient(to right, #d4af37, #f4d03f);
        margin: 30px auto;
        opacity: 0.7;
    }

    @media (max-width: 600px) {
        h1 {
            font-size: 2rem;
        }


        .container {
            padding: 40px 15px;
        }
    }

</style>

<body>
<div class="container_title">
    <h1>ICT2613 Assessment 4</h1>

    <div class="accent-line"></div>

    <h2 class="welcome-text">Welcome, make yourself at home</h2>
    <h2 class="nav-hint">Use the navigation to explore the tasks</h2>
</div>
</body>
