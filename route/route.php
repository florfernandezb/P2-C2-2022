<?php

/**
 * Get array of navigation routes
 * @return string[][]
 */
function getRoutesSitio() {
    return [
        'home' => [
            'title' => 'Sobre Nosotros',
        ],
        'productList' => [
            'title' => 'Nuestros productos',
        ],
        'productDetail' => [
            'title' => 'Detalle del producto',
        ],
        'formContacto' => [
            'title' => 'Contactanos',
        ],
        '404' => [
            'title' => 'Página no encontrada',
        ],
        'gracias' => [
            'title' => 'Gracias por tu consulta',
        ],
    ];
}