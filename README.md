# Website Multi languages

Para utilizar este ejemplo debes realizar los siguiente:

1.- Habilitar ModRewrite en Apache

  a) Escribe en la terminal el comando: sudo a2enmod rewrite
  
  b) Para que surtan efecto los cambios escribe el comando: sudo service apache2 restart

2.- Modifica el archivo de configuración para permitir la sobreescritura

  a) Escribe en la terminal el comando: sudo nano /etc/apache2/sites-available/000-default.conf
  
  b) Agrega lo siguiente:
  
        <Directory /var/www/html/example>
                AllowOverride All
        </Directory>
  c) DocumentRoot deberá apuntar a la carpeta de tu sitio
  
3.- Para verificar que todo funciona usa las siguientes rutas:

  a) http://localhost/ ó http://localhost/es:
  
    visualiza el mensaje: BIENVENIDO!
    
  b) http://localhost/en
  
    visualiza el mensaje: WELCOME!
    
  c) http://localhost/products ó http://localhost/es/products
  
    visualiza el mensaje: Sombrero
    
  d) http://localhost/en/products
  
    visualiza el mensaje: Hat
    
 4.- El ejemplo está preparado para traducir a un tercer lenguaje, para verlo en acción deberas realizar lo siguiente:
 
  a) Agregar el archivo fr_traduction.php en la carpeta languages
  
  b) Copia lo siguiente dentro del archivo:
  
      define('WELCOME', 'BIENVENUE!');
      
      define('PRODUCT', 'Chapeau');
      
  c) Ahora prueba entrar a la ruta: http://localhost/fr/products y a la ruta http://localhost/fr

  NOTA: el archivo .htaccess contiene las expresiones utilizadas para lograr esta funcionalidad de multi lenguaje en el sitio web.
 