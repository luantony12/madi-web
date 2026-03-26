<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['num' => '150+', 'label' => 'Proyectos Completados'],
            ['num' => '10',   'label' => 'Años de Experiencia'],
            ['num' => '50',   'label' => 'Profesionales en Planilla'],
            ['num' => '5',   'label' => 'Ciudades Presentes'],
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
                'image'    => asset('images/projects/edi1.jpg'),
                'category' => 'Residencial',
                'year'     => '2024',
                'title'    => 'Vivienda Familiar , Calca - Cusco — 4 Pisos',
                'featured' => false,
            ],
            [
                'image'    => asset('images/projects/cm1.jpeg'),
                'category' => 'Comercial',
                'year'     => '2023',
                'title'    => 'Morena Peruvian Kitchen - Cusco',
                'featured' => false,
            ],

             [
                'image'    => asset('images/projects/edi3.jpg'),
                'category' => 'Residencial',
                'year'     => '2024',
                'title'    => 'Vivienda Familiar , Calca - Cusco — 4 Pisos',
                'featured' => false,
            ],
            [
                'image'    => 'https://images.unsplash.com/photo-1545324418-cc1a3fa10c00?w=600&q=80',
                'category' => 'Comercial',
                'year'     => '2024',
                'title'    => 'Oficinas Vértex - Lima',
                'featured' => false,
            ],
            [
                'image'    => asset('images/projects/edi2.jpg'),
                'category' => 'Residencial',
                'year'     => '2024',
                'title'    => 'Vivienda Familiar , Calca - Cusco — 4 Pisos',
                'featured' => false,
            ],
            [
                'image'    => asset('images/projects/ind1.jpg'),
                'category' => 'Industrial',
                'year'     => '2022',
                'title'    => 'Colegio Innova School - HUANCARO - CUSCO',
                'featured' => false,
            ],

            [
                'image'    => asset('images/projects/ind2.jpg'),
                'category' => 'Industrial',
                'year'     => '2022',
                'title'    => 'Colegio Innova School - LARAPA -CUSCO',
                'featured' => false,
            ],
            [
                'image'    => asset('images/projects/ind3.jpg'),
                'category' => 'Industrial',
                'year'     => '2022',
                'title'    => 'Popeyes - Cusco',
                'featured' => false,
            ],
            [
                'image'    => asset('images/projects/cm3.jpg'),
                'category' => 'Comercial',
                'year'     => '2025',
                'title'    => 'Morena Peruvian Kitchen - Cusco',
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
