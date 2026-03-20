<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['num' => '350+', 'label' => 'Proyectos Completados'],
            ['num' => '20',   'label' => 'Años de Experiencia'],
            ['num' => '85',   'label' => 'Profesionales en Planilla'],
            ['num' => '12',   'label' => 'Ciudades Presentes'],
        ];

        $services = [
            [
                'num'   => '01',
                'icon'  => 'bi-house-door',
                'title' => 'Construcción Residencial',
                'desc'  => 'Diseño y construcción de casas unifamiliares, condominios y edificios de apartamentos con acabados premium y materiales de primera calidad.',
            ],
            [
                'num'   => '02',
                'icon'  => 'bi-building',
                'title' => 'Edificios Comerciales',
                'desc'  => 'Centros comerciales, oficinas corporativas, hoteles y locales comerciales diseñados para maximizar funcionalidad y rentabilidad.',
            ],
            [
                'num'   => '03',
                'icon'  => 'bi-gear',
                'title' => 'Obras Industriales',
                'desc'  => 'Plantas de producción, galpones, almacenes y naves industriales con infraestructura técnica especializada y normativas de seguridad.',
            ],
            [
                'num'   => '04',
                'icon'  => 'bi-pencil-square',
                'title' => 'Diseño y Arquitectura',
                'desc'  => 'Equipo de arquitectos e ingenieros que desarrollan proyectos desde el boceto inicial hasta los planos ejecutivos listos para construir.',
            ],
            [
                'num'   => '05',
                'icon'  => 'bi-hammer',
                'title' => 'Remodelación y Reformas',
                'desc'  => 'Renovación integral de espacios: ampliaciones, refacciones estructurales, cambio de acabados y actualización de instalaciones.',
            ],
            [
                'num'   => '06',
                'icon'  => 'bi-graph-up',
                'title' => 'Gerencia de Proyectos',
                'desc'  => 'Administración integral de obra: control de presupuesto, cronograma, supervisión técnica y coordinación de subcontratistas.',
            ],
        ];

        $projects = [
            [
                'image'    => 'https://images.unsplash.com/photo-1486325212027-8081e485255e?w=900&q=80',
                'category' => 'Residencial',
                'year'     => '2024',
                'title'    => 'Torre Mirador — 24 Pisos',
                'featured' => true,
            ],
            [
                'image'    => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=600&q=80',
                'category' => 'Comercial',
                'year'     => '2023',
                'title'    => 'Plaza Élite',
                'featured' => false,
            ],
            [
                'image'    => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=600&q=80',
                'category' => 'Comercial',
                'year'     => '2023',
                'title'    => 'Oficinas Vértex',
                'featured' => false,
            ],
            [
                'image'    => 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&q=80',
                'category' => 'Residencial',
                'year'     => '2022',
                'title'    => 'Residencia Lago Norte',
                'featured' => false,
            ],
            [
                'image'    => 'https://images.unsplash.com/photo-1565008576549-57569a49371d?w=600&q=80',
                'category' => 'Industrial',
                'year'     => '2022',
                'title'    => 'Planta Logística Sur',
                'featured' => false,
            ],
            [
                'image'    => 'https://images.unsplash.com/photo-1600607687939-ce8a6c25118c?w=600&q=80',
                'category' => 'Comercial',
                'year'     => '2021',
                'title'    => 'Hotel Grand Vista',
                'featured' => false,
            ],
        ];

        $process = [
            ['num' => '01', 'title' => 'Consulta Inicial',        'desc' => 'Reunión para entender sus necesidades, presupuesto y tiempos. Evaluamos la viabilidad técnica del proyecto.'],
            ['num' => '02', 'title' => 'Diseño y Planificación',   'desc' => 'Elaboramos planos arquitectónicos, presupuesto detallado y cronograma de obra con hitos claros.'],
            ['num' => '03', 'title' => 'Ejecución de Obra',        'desc' => 'Construcción supervisada con reportes semanales, control de calidad y gestión de proveedores.'],
            ['num' => '04', 'title' => 'Entrega y Post-Venta',     'desc' => 'Entrega formal con recorrido de inspección, documentación técnica y soporte post-obra garantizado.'],
        ];

        return view('home', compact('stats', 'services', 'projects', 'process'));
    }
}
