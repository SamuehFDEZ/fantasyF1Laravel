<!DOCTYPE html>
<html lang="en">
<body>

<h1>
    <img src="https://fantasy.formula1.com/static-assets/build/images/master-header/f1-fantasy-white-logo.svg?v=20240622175236" alt="F1 Logo" style="filter: invert(50%) sepia(100%) saturate(10000%) hue-rotate(3deg) brightness(95%) contrast(95%); width: 80%">
</h1>

<p>Final project of the higher degree training cycle in Web Application Development, which is a strategy game and team management of Formula 1, where you choose 5 drivers and 2 constructors regardless of whether there is a team relationship or not, aiming to achieve the highest score in the league. The league runs during the actual F1 season, offering substantial prizes.</p>

<h2>Do you accept the challenge? 🏎️🏁</h2>

<h2>Technologies Used</h2>

<h3>Backend</h3>
<img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel"><img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">

<h3>Frontend</h3>
<img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript"><img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite"><img src="https://img.shields.io/badge/Blade-E34F26?style=for-the-badge&logo=blade&logoColor=white" alt="Blade"><img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap"><img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white" alt="Sass">

<h3>Database</h3>
<img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">

<h3>Deployment</h3>
<img src="https://img.shields.io/badge/AWS-232F3E?style=for-the-badge&logo=amazon-aws&logoColor=white" alt="AWS">

<h3>Development Tools</h3>
<img src="https://img.shields.io/badge/PhpStorm-000000?style=for-the-badge&logo=phpstorm&logoColor=white" alt="PHPStorm"><img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub"><img src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white" alt="Postman"><img src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white" alt="Docker">

<h2>Features</h2>
  <ul>
    <li><strong>Team Management:</strong> Create and manage your Formula 1 teams 📊🏆.</li>
    <li><strong>Real-Time Data:</strong> Points and market value of drivers and constructors in real time 📈🕒.</li>
    <li><strong>Global Competition:</strong> Compete with people from around the world 🏆🌐.</li>
    <li><strong>User-Friendly Interface:</strong> Intuitive and responsive design with Bootstrap and Sass 🖥️📱🎨.</li>
    <li><strong>Web Accessibility:</strong> Enjoy the best accessibility features ♿️🧩🌈.</li>
  </ul>

<h2>Installation</h2>
  <ol>
    <li>Clone the repository:
      <pre><code>git clone https://github.com/SamuehFDEZ/fantasyF1Laravel.git</code></pre>
    </li>
    <li>Navigate to the folder containing the docker-compose.yml file:
      <pre><code>cd fantasyF1Laravel</code></pre>
    </li>
    <li>Run Docker commands and access the container console:
      <pre><code>docker-compose up --build</code></pre>
      <pre><code>docker-compose up -d</code></pre>
      <pre><code>docker-compose exec web bash</code></pre>
    </li>
    <li>Go to the root folder of the project:
      <pre><code>cd fantasyF1</code></pre>
    </li>
    <li>Install backend dependencies with Composer:
      <pre><code>composer install</code></pre>
    </li>
    <li>Install frontend dependencies with npm:
      <pre><code>npm install</code></pre>
    </li>
    <li>Set up the .env file with your database credentials:
      <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=databaseName
DB_USERNAME=username
DB_PASSWORD=password</code></pre>
    </li>
    <li>Run migrations and seeders for the database:
      <pre><code>php artisan migrate --seed</code></pre>
    </li>
    <li>Compile assets with Vite:
      <pre><code>npm run dev</code></pre>
    </li>
    <li>Start the development server:
      <pre><code>php artisan serve</code></pre>
    </li>
  </ol>

</body>
</html>
