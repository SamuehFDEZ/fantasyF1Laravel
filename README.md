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
<hr>
<img src="https://static-00.iconduck.com/assets.00/laravel-icon-1990x2048-xawylrh0.png" width="10%" height="auto" alt="Laravel">
<hr>
<h3>Frontend</h3>
<div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/6/6a/JavaScript-logo.png" width="10%" height="auto" alt="JavaScript">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://upload.wikimedia.org/wikipedia/commons/f/f1/Vitejs-logo.svg" width="10%" height="auto" alt="Vite">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://www.svgrepo.com/show/303672/laravel-1-logo.svg" width="10%" height="auto" alt="Blade">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b2/Bootstrap_logo.svg/512px-Bootstrap_logo.svg.png" width="10%" height="auto" alt="Bootstrap">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/Sass_Logo_Color.svg/2560px-Sass_Logo_Color.svg.png" width="10%" height="auto" alt="Sass">
</div>

<hr>
<h3>Database</h3>
<img src="https://cdn.icon-icons.com/icons2/2415/PNG/512/mysql_original_wordmark_logo_icon_146417.png" width="20%" height="auto" alt="MySQL">
<hr>
<h3>Deployment</h3>
<img src="https://cdn.inspireuplift.com/uploads/images/seller_products/31661/1702633077_AWSlogoAmazonWebServiceslogo.png"  width="15%" height="auto" alt="AWS">
<hr>
<h3>Development Tools</h3>
<div>
    <img src="https://upload.wikimedia.org/wikipedia/commons/d/d2/PhpStorm_Icon.png" width="12%" height="auto" alt="PHPStorm">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://cdn.icon-icons.com/icons2/2429/PNG/512/github_logo_icon_147285.png" width="12%" height="auto" alt="GitHub">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://cdn.worldvectorlogo.com/logos/postman.svg" alt="Postman" width="12%" height="auto">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <img src="https://upload.wikimedia.org/wikipedia/commons/7/79/Docker_%28container_engine%29_logo.png" width="45%" height="auto" alt="Docker">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</div>

<hr>
<h2>Features</h2>
  <ul>
    <li><strong>Team Management:</strong> Create and manage your Formula 1 teams 📊🏆.</li>
    <li><strong>Real-Time Data:</strong> Points and market value of drivers and constructors in real time 📈🕒.</li>
    <li><strong>Global Competition:</strong> Compete with people from around the world 🏆🌐.</li>
    <li><strong>User-Friendly Interface:</strong> Intuitive and responsive design with Bootstrap and Sass 🖥️📱🎨.</li>
    <li><strong>Web Accessibility:</strong> Enjoy the best accessibility features ♿️🧩🌈.</li>
  </ul>
<hr>
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
