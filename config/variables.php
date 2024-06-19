<?php

return [

    'boolean' => [
        '0' => 'No',
        '1' => 'Si',
    ],
    'estado' => [
        '1' => 'Activo',
        '2' => 'Inactivo',
    ],

    'tpdocumento' => [
        '0' => 'Facturacion',
        '1' => 'Contabilidad',
    ],

    'tptercero' => [
        '0' => 'Natural',
        '1' => 'Juridico',
    ],

    'tpregimen' => [
        '0' => 'Gran Contribuyente',
        '1' => 'Regimen Comun',
        '2' => 'Regimen Simplificado',
        '3' => 'Entidad Oficial',
        '4' => 'Regimen Especial',
        '5' => 'Persona Natural',
        '6' => 'Profesional Independiente',
    ],

    'autorete' => [
        '0' => 'No-Autorete',
        '1' => 'Autorete',
    ],

    'grancbte' => [
        '0' => 'No-Grancbte',
        '1' => 'Grancbte',
    ],

    'avatar' => [
        'public' => '/storage/avatar/',
        'folder' => 'avatar',

        'width'  => 400,
        'height' => 400,
    ],

    'imaproducto' => [
        'public' => '/storage/imaproducto/',
        'folder' => 'imaproducto',

        'width'  => 400,
        'height' => 400,
    ],

    'impuestoproducto' => [
        '6' => 'EXCLU',
        '5' => 'EXENTO',
        'C' => '5%',
        'A' => '19%',
        '8' => 'EXE417',
        '0' => 'NO GRAVADOS',
    ],

    'estrato' => [
        '1' => 'Uno',
        '2' => 'Dos',
        '3' => 'Tres',
        '4' => 'Cuatro',
        '5' => 'Cinco',
        '6' => 'Seis',
        '11' => 'Comercial',
        '12' => 'Oficial',
        '13' => 'Industrial',

    ],

    'is_estado' => [
        '0' => 'Contributivo',
        '1' => 'Subsidio',
        '2' => 'Igual',
    ],

    'is_escala' => [
        '0' => 'Sin Escala',
        '1' => 'Pr. Escala',
        '2' => 'Sg. Escala',
        '3' => 'Tc. Escala',
    ],

    'periodo_est' => [
        '0' => 'Ingreso Lecturas.',
        '1' => 'Cierre Lecturas.',
        '2' => 'Facturas Generadas.',
        '3' => 'Cierre Pagos.',
    ],

    'concepto_est' => [
        '0' => 'Debito',
        '1' => 'Credito',
    ],

    'tipocuenta_est' => [
        '0' => 'Gastos',
        '1' => 'Otros Activos',
        '2' => 'Otros Pasivos',
        '3' => 'Patrimonio',
        '4' => 'Ingresos',
        '5' => 'Gastos',
        '6' => 'Costo de Ventas',
        '7' => 'Costos de Produccion',
        '8' => 'Cuentas de Orden Deudores',
        '9' => 'Cuentas de Orden Acreedores',
        '11' => 'Bancos',
        '71' => 'Costos Materia Prima',
        '72' => 'Costos Mano de Obra',
    ],

    'grupocuenta_est' => [
        '0' => 'Impuesto al consumo',
        '1' => 'Normal',
        '2' => 'Retencion de Ica',
        '3' => 'Retencion de Iva',
        '4' => 'Retencion en la fuente',
        '5' => 'Tesoreria',
    ],

    'grupocuenta_est' => [
        '0' => 'Sin Manejotercero',
        '1' => 'Manejotercero',
    ],

    'ajusteinflacion_est' => [
        '0' => 'Sin Ajusteinflacion',
        '1' => 'Ajusteinflacion',
    ],

    'clasificacion_est' => [
        '0' => 'Sin Clasificacion',
        '1' => 'Activo Corriente',
        '2' => 'Activo no corriente',
        '3' => 'Pasivo corriente',
        '4' => 'Pasivo no corriente',
        '5' => 'Patrimonio',
    ],

    'oculto_est' => [
        '0' => 'Oculto',
        '1' => 'Sin Ocultar',
    ],

    'is_tpfactura' => [
        '1' => 'Mensual',
        '2' => 'Bimestral',
        '3' => 'Pago anticipado',
        '4' => 'Otros',
    ],

    'is_predial' => [
        '1' => 'Nro. predial nacional',
        '2' => 'Inf. predial de cada catastro',
        '3' => 'Predio sin homologar',
    ],

    'is_ubicacion' => [
        '1' => 'Urbano',
        '2' => 'Rural',
        '3' => 'Perifericos',
        '4' => 'Otros',
    ],

    'hg_comunitario' => [
        '0' => 'No es hogar comunitario o sustituto',
        '1' => 'Es un hogar comunitario o sustituto',
    ],

    'vip' => [
        '0' => 'No VIP',
        '1' => 'VIP',
    ],

    'predio_estt' => [
        '0' => 'Anulado',
        '1' => 'Activo',
        '2' => 'Inactivo',
        '3' => 'Suspendido',
        '4' => 'Cortado',
        '5' => 'Reconexion',
    ],

    'predio_est' => [
        '1' => 'Activo',
        '2' => 'Inactivo',
        '3' => 'Suspendido',
        '4' => 'Cortado',
        '5' => 'Reconexion',
    ],

    'matricula_est' => [
        '0' => 'Sin Matricular',
        '1' => 'Matriculado',
    ],

    'medidor_est' => [
        '1' => 'Buen estado',
        '2' => 'Dañado',
        '3' => 'Sin medidor',
    ],

    'factura_est' => [
        '0' => 'Elaborada',
        '1' => 'Pagada',
        '2' => 'En Mora',
        '3' => 'Abonada',
        '4' => 'Anulada',
    ],

    'estadot' => [
        '0' => 'Anulado',
        '1' => 'Activo',
        '2' => 'Inactivo',
    ],

    'dt_consumo' => [
        '0' => 'Medidor leído',
        '1' => 'Medición por promedio',
        '2' => 'Suscriptor suspendido',
        '3' => 'Suscriptor con corte del servicio',
        '4' => 'Pago anticipado'
    ],

    'caurefacturacion' => [
        '0' => 'No se presento refacturación',
        '1' => 'Si es reclamo directo del usuario',
        '2' => 'Si es solución de segunda instancia de la sspd',
        '3' => 'Si es una decisión de la empresa',
        '4' => 'Si no cumple ninguna de las anteriores'
    ],

    'financiacion_est' => [
        '1' => 'Elaborado',
        '2' => 'Inactivo',
        '3' => 'Activo',
        '4' => 'Pagado',
    ],

    'financiacion_estt' => [
        '0' => 'Anulado',
        '1' => 'Elaborado',
        '2' => 'Inactivo',
        '3' => 'Activo',
        '4' => 'Pagado',
    ],


    /*
    |------------------------------------------------------------------------------------
    | ENV of APP
    |------------------------------------------------------------------------------------
        'APP_ADMIN' => 'admin',
    'APP_TOKEN' => env('APP_TOKEN', 'admin123456'),

    */

];
