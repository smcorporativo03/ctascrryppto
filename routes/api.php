<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/products','ProductsController@index');
Route::get('/bancos','tb_bancos_controller@index');

Route::get('/lineas','tb_lineas_controller@index');
Route::get('/sublineas','tb_sublineas_controller@index');
Route::get('/formaspago','tb_formapagos_controller@index');
Route::get('/marcas','tb_marcas_controller@index');
Route::get('/monedas','tb_monedas_controller@index');
Route::get('/tiposdocumentos','tb_tipodocumentos_controller@index');
Route::get('/tiposdocumentosidentidad','tb_tipodocumentoidentidads_controller@index');
Route::get('/undidadesmedida','tb_undidadmedidas_controller@index');
Route::get('/bancos','tb_bancos_controller@index');
Route::get('/condicionesventa','tb_condicionventas_controller@index');
Route::get('/productos','tb_productos_controller@index');
Route::get('/clientes','tb_clientes_controller@index');
Route::get('/proveedores','tb_proveedors_controller@index');
Route::get('/facurasclientes','tb_facuraclientes_controller@index');
Route::get('/facturasproveedores','tb_facturaproveedors_controller@index');
Route::get('/ingresosalmacen','tb_ingresoalmacens_controller@index');
Route::get('/salidasalmacen','tb_salidaalmacens_controller@index');
Route::get('/movimientosalmacen','tb_movimientoalmacens_controller@index');
Route::get('/movimientosfacturasproveedores','tb_movimientofacturaproveedors_controller@index');
Route::get('/presupuestos','tb_presupuestos_controller@index');
Route::get('/movimientospresupuestos','tb_movimientopresupuestos_controller@index');
Route::get('/detingresosalmacen','tb_detingresoalmacens_controller@index');
Route::get('/detsalidasalmacen','tb_detsalidaalmacens_controller@index');
Route::get('/movimientosfacturasclientes','tb_movimientofacturaclientes_controller@index');

Route::post('/linea','tb_linea_controller@store');
Route::post('/sublinea','tb_sublinea_controller@store');
Route::post('/formapago','tb_formapago_controller@store');
Route::post('/marca','tb_marca_controller@store');
Route::post('/moneda','tb_moneda_controller@store');
Route::post('/tipodocumento','tb_tipodocumento_controller@store');
Route::post('/tipodocumentoidentidad','tb_tipodocumentoidentidad_controller@store');
Route::post('/undidadmedida','tb_undidadmedida_controller@store');
Route::post('/banco','tb_banco_controller@store');
Route::post('/condicionventa','tb_condicionventa_controller@store');
Route::post('/producto','tb_producto_controller@store');
Route::post('/cliente','tb_cliente_controller@store');
Route::post('/proveedor','tb_proveedor_controller@store');
Route::post('/facuracliente','tb_facuracliente_controller@store');
Route::post('/facturaproveedor','tb_facturaproveedor_controller@store');
Route::post('/ingresoalmacen','tb_ingresoalmacen_controller@store');
Route::post('/salidaalmacen','tb_salidaalmacen_controller@store');
Route::post('/movimientoalmacen','tb_movimientoalmacen_controller@store');
Route::post('/movimientofacturaproveedor','tb_movimientofacturaproveedor_controller@store');
Route::post('/presupuesto','tb_presupuesto_controller@store');
Route::post('/movimientopresupuesto','tb_movimientopresupuesto_controller@store');
Route::post('/detingresoalmacen','tb_detingresoalmacen_controller@store');
Route::post('/detsalidaalmacen','tb_detsalidaalmacen_controller@store');
Route::post('/movimientofacturacliente','tb_movimientofacturacliente_controller@store');
// Route::post('/product','ProductController@store');