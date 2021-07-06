# ScanDoc

# Integrantes del Equipo
- Italo Molina (ScrumMaster)
- Franklin Godoy (ProductOwner)
- Sebastian Recaman
- Alex Soto
- Italo Ercoli
- Benjamin Guzman

# Proyecto
ScanDoc es una sitio responsivo que permite:
- Capturar imágenes de documentos a través de cámara y cargar imágenes desde  archivo.
- Transformar a formato PDF
- Categorizar, nombrar el archivo (imagen) a subir..
- Almacenar en bd el documento en formato PDF.

# Instalación local
- Instalar XAMMP descargándolo del sitio https://www.apachefriends.org/
- Descargar https://github.com/al162/Scandoc la última versión de scandoc
- Descomprimir el archivo .rar en la carpeta xamp
- Activar base de datos de xamp
- Correr el comando “php artisan migrate” para migrar la BD
- Correr el comando “php artisan storage:link” que genera un enlace simbólico a la ruta “storage\app\public”
- Cambiar el nombre de la carpeta “public\storage” por  “public\public”
- Inicie XAMMP con el servidor y la base de datos



# Pagina WEB

https://www.simplesolucion.cl/scanbeta/public/index.php

En este link puede acceder a la pigina creado por el equipo
