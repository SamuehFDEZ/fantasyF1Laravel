<!DOCTYPE html>
<html>
<body>
<head>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<span style="color: red;">Texto en rojo</span>
   <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/F1.svg/150px-F1.svg.png" alt="F1 Logo"><br><br>
  Proyecto final del ciclo formativo de grado superior Desarrollo de Aplicaciones Web que trata de un juego de estrategia y gestión de equipos de Fórmula 1, trata de escoger a 5 pilotos y 2 constructores independientemente de si hay una relación de escudería o no con el objetivo de conseguir la mayor puntuación en la liga, la cual transcurre en la temporada real de la F1, para ganar suculentos premios.

  <h2>¿Aceptas el desafío? 🏎️🏁</h2>

  <h2>Tecnologías Utilizadas</h2>

  <h3>Backend</h3>
  <img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" alt="Laravel">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" alt="PHP">

  <h3>Frontend</h3>
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" alt="JavaScript">
  <img src="https://img.shields.io/badge/Vite-646CFF?style=for-the-badge&logo=vite&logoColor=white" alt="Vite">
  <img src="https://img.shields.io/badge/Blade-E34F26?style=for-the-badge&logo=blade&logoColor=white" alt="Blade">
  <img src="https://img.shields.io/badge/Bootstrap-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white" alt="Bootstrap">
  <img src="https://img.shields.io/badge/Sass-CC6699?style=for-the-badge&logo=sass&logoColor=white" alt="Sass">

  <h3>Base de datos</h3>
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" alt="MySQL">

  <h3>Despliegue</h3>
  <img src="https://img.shields.io/badge/AWS-232F3E?style=for-the-badge&logo=amazon-aws&logoColor=white" alt="AWS">

  <h3>Herramientas de Desarrollo</h3>
  <img src="https://img.shields.io/badge/PhpStorm-000000?style=for-the-badge&logo=phpstorm&logoColor=white" alt="PHPStorm">
  <img src="https://img.shields.io/badge/GitHub-181717?style=for-the-badge&logo=github&logoColor=white" alt="GitHub">
  <img src="https://img.shields.io/badge/Postman-FF6C37?style=for-the-badge&logo=postman&logoColor=white" alt="Postman">
  <img src="https://img.shields.io/badge/Docker-2496ED?style=for-the-badge&logo=docker&logoColor=white" alt="Docker">

  <h2>Características</h2>
  <ul>
    <li><strong>Gestión de Equipos:</strong> Crea y gestiona tus equipos de Fórmula 1 📊🏆.</li>
    <li><strong>Datos en Tiempo Real:</strong> Puntos y valor de mercado de los pilotos y constructores en tiempo real 📈🕒.</li>
    <li><strong>Competicion a nivel global:</strong> Compite con personas de todo el mundo 🏆🌐.</li>
    <li><strong>Interfaz Amigable:</strong> Diseño intuitivo y responsive con Bootstrap y Sass 🖥️📱🎨.</li>
    <li><strong>Accesibilidad Web:</strong> Disfruta de las mejores características de accesibilidad ♿️🧩🌈.</li>
  </ul>

  <h2>Instalación</h2>
  <ol>
    <li>Clonar el repositorio:
      <pre><code>git clone https://github.com/SamuehFDEZ/fantasyF1Laravel.git</code></pre>
    </li>
    <li>Posicionarse en la carpeta:
      <pre><code>cd fantasyF1Laravel</code></pre>
    </li>
    <li>Instalar las dependencias del backend con Composer:
      <pre><code>composer install</code></pre>
    </li>
    <li>Instalar las dependencias del frontend con npm:
      <pre><code>npm install</code></pre>
    </li>
    <li>Configurar el archivo .env con tus credenciales de base de datos
      <pre><code>DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=nombreDeLaBaseDeDatos
DB_USERNAME=usuario
DB_PASSWORD=contraseña</code></pre>
    </li>
    <li>Ejecutar las migraciones y seeders para la base de datos:
      <pre><code>php artisan migrate --seed</code></pre>
    </li>
    <li>Compilar los assets con Vite:
      <pre><code>npm run dev</code></pre>
    </li>
    <li>Iniciar el servidor de desarrollo:
      <pre><code>php artisan serve</code></pre>
    </li>
  </ol>
</body>
</html>
