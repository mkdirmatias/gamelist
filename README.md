<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>


# Sobre el proyecto

La siguiente aplicación es un CRUD el cual almacena una lista de juegos con los siguientes datos:
- ID del juego
- Imagen referencial del juego
- Descripción del juego
- URL del juego
- Estado del juego

En el listado del CRUD se debería poder visualizar o tener una vista previa de la imagen del juego y además poder aperturarse la url del juego.
En la edición se debería poder actualizar todos los datos incluyendo la imagen.

# Listado de Juegos

- BAMBOO 
    - url: https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es
    - imagen: https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg

- REELS OF WEALTH
    - url: https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es
    - imagen: https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg

- DRAGON & PHOENIX
    - url: https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es

    - imagen: https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg

- TAKE THE BANK
    - url: https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es 
    - imagen: https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg

- CAISHEN’S ARRIVAL
    - url: https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es
    - imagen: https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg

- GEMMED!
    - url: https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es
    - imagen: https://winchiletragamonedas.com/public/images/games/gemmed.jpeg

# Instalación
La aplicación puede ser desplegada de la forma que más acomode, para este caso fue desarrollada en [VALET](https://laravel.com/docs/8.x/valet). Luego seguimos los siguientes pasos:

1.  Clonamos el repositorio

    ```
    git clone https://github.com/mkdirmatias/gamelist.git
    ```

2. Creamos el archivo de configuración
    ```
    mv .env.example .env
    ```

3. Creamos la **APP_KEY**
    ```
    php artisan key:generate
    ```

3. Configuramos la base de datos
    ```
    DB_CONNECTION=mysql o pgsql
    DB_HOST=127.0.0.1
    DB_PORT=3306(mysql) o 5432(pgsql)
    DB_DATABASE=
    DB_USERNAME=
    DB_PASSWORD=
    ```

4. Ejecutamos la migración
    ```
    php artisan migrate --seed
    ```

5. Iniciamos Sesión
    ```
    Email: matias@icodeart.cl
    Pass: admin
    ```

# Screenshot
![app](https://i.imgur.com/ZR6GTSD.png)