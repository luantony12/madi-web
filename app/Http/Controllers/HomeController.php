<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $stats = [
            ['num' => '42+', 'label' => 'Proyectos Completados'],
            ['num' => '8',   'label' => 'Años de Experiencia'],
            ['num' => '8',   'label' => 'Profesionales en Planilla'],
            ['num' => '3',   'label' => 'Ciudades Presentes'],
        ];

        $services = [
            [
                'num'   => '01',
                'icon'  => 'bi-house-door',
                'title' => 'Arquitectura e Ingeniería',
                'desc'  => 'Proyectos integrales de arquitectura, estructuras e instalaciones.',
                'items' => [
                    'Proyectos integrales'      => 'Arquitectura, estructuras, instalaciones sanitarias, eléctricas y especiales',
                    'Diseño de interiores'      => 'Propuestas funcionales y estéticas adaptadas a cada espacio',
                    'Expedientes técnicos'      => 'Documentación completa para gestión y ejecución de obras',
                    'Licencias de construcción' => 'Asesoría y trámites para obtención de permisos',
                    'Declaratoria de fábrica'   => 'Regularización y formalización de edificaciones',
                    'Ejecución de proyectos'    => 'Dirección y supervisión de obras con estándares de calidad',
                ],
            ],
            [
                'num'   => '02',
                'icon'  => 'bi-tools',
                'title' => 'Mantenimiento y Remodelaciones',
                'desc'  => 'Soluciones integrales para conservar, mejorar y reparar edificaciones.',
                'items' => [
                    'Mantenimiento general'    => 'Soluciones integrales para conservar y mejorar edificaciones de cualquier tipo y escala',
                    'Mantenimiento predictivo' => 'Identificación temprana de fallas potenciales para garantizar continuidad operativa',
                    'Mantenimiento preventivo' => 'Planificación periódica para prolongar la vida útil de instalaciones y equipos',
                    'Mantenimiento correctivo' => 'Intervención inmediata para reparar y restablecer el funcionamiento de sistemas',
                ],
            ],
            [
                'num'   => '03',
                'icon'  => 'bi-map',
                'title' => 'Saneamiento Físico y Legal',
                'desc'  => 'Gestión técnica y legal para la correcta distribución, independización y documentación de predios.',
                'items' => [
                    'División y lotización'        => 'Planificación y ejecución de procesos para la correcta distribución de terrenos',
                    'Independización de predios'   => 'Gestión técnica y legal para la creación de unidades inmobiliarias independientes',
                    'Planos perimétricos'          => 'Elaboración de documentos técnicos que garantizan precisión en límites y referencias geográficas',
                ],
            ],
            [
                'num'   => '04',
                'icon'  => 'bi-clipboard2-check',
                'title' => 'Otros Servicios',
                'desc'  => 'Servicios complementarios para acompañar cada etapa de su proyecto con calidad y respaldo profesional.',
                'items' => [
                    'Supervisión de proyectos'        => 'Control y seguimiento técnico para garantizar calidad, plazos y cumplimiento normativo',
                    'Consultoría'                     => 'Asesoría especializada en arquitectura, ingeniería y gestión de obras',
                    'Venta de materiales'             => 'Suministro de productos de primera calidad para proyectos residenciales, comerciales e industriales',
                ],
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
            ['num' => '04', 'title' => 'Entrega y Post-Mantenimiento',     'desc' => 'Entrega formal con recorrido de inspección, documentación técnica y soporte post-obra garantizado.'],
        ];

        return view('home', compact('stats', 'services', 'projects', 'process'));
    }
}
