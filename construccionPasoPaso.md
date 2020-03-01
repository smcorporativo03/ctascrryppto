# Contrucción del proyecto.

## Macrotareas
<div id='up'></div>

1. Construcción del entorno de desarrollo <a href='#01'>(Referencia.)</a>
1. Uso de Modelos para la intercción con la base de datos. <a href='#02'>(Referencia.)</a>

## Microtareas
<div id='01'></div>

### 01. Entorno de desarrollo
1. Descargar e instalar la suite de herramientas Laragon.
1. Descargar la última versión de PHP.
1. Descargar PhpMyAdmin para gestionar la Base de Datos MySQL.
1. Configurar la base de datos con usr root y pass 0033215
1. Reconfigurar Apache Tomcat para correr en el puerto 8090 (8080 usará php artisan para levantar el proyecto)
1. Descargar de forma local en Laragon composer.
1. Realizar el setup de Laravel. <a href='#0101'>(Referencia.)</a>
1. Instalar el proyecto y todos sus subelementos. <a href='#0102'>(Referencia.)</a>
1. Se reconfigura los parámetros de contexto. (.env) <a href='#0103'>(Referencia.)</a>
1. Pasamos a Ejecutar la migración del proyecto que en este caso sirve de instalación y conexión con la base de datos y migraciones de control que necesitará. <a href='#0104'>(Referencia.)</a>
1. Cambiamos Vue(default) por React - [Reemplazos de scaffoldings] <a href='#0105'>(Referencia.)</a>
1. Instalamos en el proyecto los elementos de interfaz para la autenticación. <a href='#0106'>(Referencia.)</a>

<a href='#up'>Return</a>
<div id='02'></div>

### 02. Modelado
<a href='#up'>Return</a>

1. Estableciento la conexión para pruebas unitarias. <a href='#0204'>(Referencia.)</a>
1. Creación de un modelo. <a href='#0201'>(Referencia.)</a>
1. Creación de data de prueba. <a href='#0202'>(Referencia.)</a>
1. Ejecución de pruebas de resultados. <a href='#0203'>(Referencia.)</a>
1. Ejecución de pruebas de resultados.(con data mue4stral definida) <a href='#0205'>(Referencia.)</a>
1. Realizando un primer deploy. <a href='#0206'>(Referencia.)</a>

## Consola
<div id='0101'></div><a href='#01'>Return</a>

``` dos
cd %LARAGON_PATH%/www
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('sha384', 'composer-setup.php') === 'e0012edf3e80b6978849f5eff0d4b4e4c79ff1609dd1e613307e16318854d24ae64f26d17af3ef0bf7cfb710ca74755a') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"
php composer-setup.php
php -r "unlink('composer-setup.php');"
```

<div id='0102'></div><a href='#01'>Return</a>

  ``` dos
  cd %LARAGON_PATH%/www
  composer create-project --prefer-dist laravel/laravel %NOMBRE_PROYECTO%
  rem composer create-project --prefer-dist laravel/laravel gestionctascorrppto
  ```
  

<div id='0104'></div><a href='#01'>Return</a>
  
  ``` dos
  php artisan migrate
  ```

<div id='0105'></div><a href='#01'>Return</a>

  ``` dos
  php artisan preset react
  npm install && npm run dev
  ```

<div id='0106'></div><a href='#01'>Return</a>
  
  ``` dos
  composer require laravel/ui
  php artisan ui react --auth
  npm install && npm run dev
  ```

  > Dentro de esta instalación, algunos antivirus consideran que su ejecución detro del servidor es una conducta sospechosa, por lo que se debe agregar a la lista blanca al archivo capturado de php por parte del antivirus.

<div id='010x'><a href='#01'>Return</a>

## Configuración
<div id='0103'></div><a href='#01'>Return</a>

  ``` text
  ./.env
  ...
  DB_CONNECTION=mysql
  DB_HOST=127.0.0.1
  DB_PORT=3306
  DB_DATABASE=gestionctascorrppto
  DB_USERNAME=root
  DB_PASSWORD=0033215
  ...
  ```

## Código
<div id='0201'><a href='#02'>Return</a>

``` dos
php artisan make:model %ClassName% -m
rem php artisan make:model Product -m
```
> ./database/migrations/[GenericNameReference(ClassName)]
``` php
  public function up()
  {
    Schema::create('products', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->text('codproducto');  /*Campo Nuevo a requerimiento*/
      $table->text('name');         /*Campo Nuevo a requerimiento*/
      $table->text('description');  /*Campo Nuevo a requerimiento*/
      $table->timestamps();
    });
  }
```
``` dos
php artisan migrate
rem php artisan migrate:refresh
```
<div id='0202'><a href='#02'>Return</a>

``` dos
php artisan make:factory %ClassName%Factory --model=%ClassName%
rem php artisan make:factory ProductFactory --model=Product
```
> ./database/factories/[ClassName+'Factory']
``` php
  $factory->define(Product::class, function (Faker $faker) {
    return [
      'codproduct' => $faker->text($maxNbChars = 5) + $faker->numberBetween($min = 10, $max = 99),
      'name' => $faker->text($maxNbChars = 50),
      'description' => $faker->text($maxNbChars = 200)
    ];
  });
```
<div id='0203'><a href='#02'>Return</a>

``` dos
vendor\bin\phpunit
rem Prueba la existencia de archivos test por default, se pueden eliminar.
rem para crear test se corre el sig. comando:
php artisan make:test ProductsTest
```
> ./tests/Feature/[ClassName+'Test']
``` php
  use App\Product;
  ...
  public function testGetProducts()
  {
    $products = factory(Product::class,5)->create(); /*Crea el elemento dentro de la base de datos.*/
    $response = $this->json('GET','/api/products'); /*Solicita la información a la ruta del api.*/
    // $response = $this->get('/');
    $response
      ->assertStatus(200)
      ->assertJsonStructure([ 
          '*' => [ /*Al ser un array, se debe de indicar que estamos validando todos que tengan esta estructura.*/
            'codproduct','name','description'
          ]
        ]);  /*Valida la respuesta y la estructura de la misma.*/
    $this->assertCount(5,$response->json());
  }
```
> ./routes/api
``` php
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
Route::get('/products','ProductsController@index');
```
``` dos
php artisan make:controller ProductsController
```
> ./app/http/Controllers/ProductsController
``` php
use App\Product;
...
class ProductsController extends Controller
{
  public function index(){
    $products = Product::get();
    return response()->json($products,200);
  }
}
```
> Especificando el modelo:

> ./app/Product

``` php
class Product extends Model
{
  public function product(){
    return $this->belongsTo('App\Product');
  }
}
```
``` dos
rem ejecuta las pruebas existentes y se empieza a realizar el debug respectivo de encontrar inconsistencias.
vendor\bin\phpunit
```
<div id='0204'><a href='#02'>Return</a>

> ./phpunit.xml

``` xml
  <server name="DB_CONNECTION" value="mysql"/>
  <!-- <server name="DB_CONNECTION" value="sqlite"/> -->
  <server name="DB_DATABASE" value="gestionctascorrppto"/>
```

<div id='0205'><a href='#02'>Return</a>

``` dos
php artisan make:seeder ProductTableSeeder
```
> ./database/seeds/ProductTableSeeder
``` php
    public function run()
    {
      /*Recordar que acá se está haciendo referencia a la estructura de la tabla, la cual es producto del migrate generado originalmente.*/
      DB::table('products')->insert([[
        'codproduct'=>'OBJPR01',
        'name'=>'Producto de prueba',
        'description'=>'Descripción que detalla muchas caracterísitcas del producto.',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ],[
        'codproduct'=>'OBJPR02',
        'name'=>'Producto de prueba 2',
        'description'=>'Descripción que detalla muchas caracterísitcas del producto 2.',
        'created_at'=> date("Y-m-d H:i:s"),
        'updated_at'=> date("Y-m-d H:i:s")
      ]]);
    }
```
> ./database/seeds/DatabaseSeeder
``` php
  /*Recordar que de haber alguna dependencia de llaves, se debe colocar las independientes primero y posteriormente las dependientes*/
  public function run()
  {
    $this->call(ProductTableSeeder::class);
  }
```
``` dos
php artisan db:seed
```
<div id='0206'><a href='#02'>Return</a>

``` dos
npm run dev
```
<div id='020x'><a href='#02'>Return</a>
