<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Ласкаво просимо до нашого веб-додатку</title>
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
                color: #ffffff;
                line-height: 1.6;
            }
            .container {
                max-width: 800px;
                margin: 0 auto;
                padding: 40px 20px;
                text-align: center;
            }
            h1 {
                font-size: 3rem;
                margin-bottom: 20px;
                text-shadow: 2px 2px 4px rgba(0,0,0,0.1);
            }
            p {
                font-size: 1.2rem;
                margin-bottom: 30px;
            }
            .features {
                display: flex;
                justify-content: space-around;
                flex-wrap: wrap;
                margin-top: 50px;
            }
            .feature {
                background-color: rgba(255,255,255,0.1);
                border-radius: 10px;
                padding: 20px;
                margin: 10px;
                width: 200px;
                transition: transform 0.3s ease;
            }
            .feature:hover {
                transform: translateY(-5px);
            }
            .feature h2 {
                font-size: 1.5rem;
                margin-bottom: 10px;
            }
            .btn {
                display: inline-block;
                background-color: #ffffff;
                color: #764ba2;
                padding: 10px 20px;
                border-radius: 5px;
                text-decoration: none;
                font-weight: bold;
                transition: background-color 0.3s ease;
            }
            .btn:hover {
                background-color: #f0f0f0;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>Ласкаво просимо до нашого веб-додатку</h1>
            <p>Ми раді вітати вас на нашому інноваційному веб-сайті. Тут ви знайдете все необхідне для успішної роботи та розвитку.</p>
            <a href="#" class="btn">Розпочати</a>

            <div class="features">
                <div class="feature">
                    <h2>Швидкість</h2>
                    <p>Наш додаток працює блискавично швидко</p>
                </div>
                <div class="feature">
                    <h2>Безпека</h2>
                    <p>Ваші дані надійно захищені</p>
                </div>
                <div class="feature">
                    <h2>Зручність</h2>
                    <p>Інтуїтивно зрозумілий інтерфейс</p>
                </div>
            </div>
        </div>
    </body>
</html>