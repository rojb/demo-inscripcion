<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    public function run(): void
    {
        /*
            $table->string('sigla');
            $table->string('nombre');
            $table->integer('creditos');
            $table->foreignId('nivel_id')->constrained('niveles')->onDelete('cascade'); //1 a 10
            $table->foreignId('tipo_id')->constrained('tipos')->onDelete('cascade');
            //Tipo solo tengo 2: normal y electiva
        */

        /*
            PRIMER SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                FISICA 1	FIS100	MODALIDAD DE INGRESO
                INTRODUCCIÓN A LA INFORMATICA	INF110	MODALIDAD DE INGRESO
                ESTRUCTURAS DISCRETAS	INF119	MODALIDAD DE INGRESO
                INGLÉS TECNICO 1	LIN100	MODALIDAD DE INGRESO
                CALCULO 1	MAT101	MODALIDAD DE INGRESO

            SEGUNDO SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                FISICA 2	FIS102	FIS100
                PROGRAMACIÓN 1	INF120	INF110
                INGLÉS TECNICO 2	LIN101	LIN100
                CALCULO 2	MAT102	MAT101
                ALGEBRA LINEAL	MAT103	INF119

            TERCER SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                FISICA 3	FIS200	FIS102
                ADMINISTRACIÓN	ADM100
                PROGRAMACIÓN 2	INF210	INF120, MAT103
                ARQUITECTURA DE COMPUTADORAS	INF211	INF120, FIS102
                ECUACIONES DIFERENCIALES	MAT207	MAT102

            CUARTO SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                CONTABILIDAD	ADM200	ADM100
                ESTRUCTURA DE DATOS 1	INF220	INF210, MAT101
                PROGRAMACIÓN ENSAMBLADOR	INF221	INF211
                PROBABILIDADES Y ESTADISTICAS 1	MAT202	MAT102
                METODOS NUMÉRICOS	MAT205	MAT207

            QUINTO SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                ESTRUCTURA DE DATOS 2	INF310	INF220
                BASE DE DATOS 1	INF312	INF220
                PROGRAMACIÓN LOGICA Y FUNCIONAL	INF318	INF220
                LENGUAJES FORMALES	INF319	INF220
                PROBABILIDADES Y ESTADISTICAS 2	MAT302	MAT202
                MODELACIÓN Y SIMULACIÓN DE SISTEMAS	ELC101	ELECTIVA
                PROGRAMACIÓN GRAFICA	ELC102	ELECTIVA

            SEXTO SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                BASE DE DATOS 2	INF322	INF312
                SISTEMAS OPERATIVOS 1	INF323	INF310
                COMPILADORES	INF329	INF319, INF310
                SISTEMAS DE INFORMACIÓN 1	INF342	INF312
                INVESTIGACIÓN OPERATIVA 1	MAT329	MAT302
                TOPICOS AVANZADOS DE PROGRAMACIÓN	ELC103	ELECTIVA
                PROGRAMACIÓN DE APLICACIONES EN TIEMPO REAL	ELC104	ELECTIVA

            SEPTIMO SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                MODALIDAD DE TITULACION A NIVEL TECNICO SUPERIOR	GRT001
                REDES 1	INF433	INF323
                SISTEMAS OPERATIVOS 2	INF413	INF323
                INVESTIGACION OPERATIVA 2	MAT419	MAT329
                INTELIGENCIA ARTIFICIAL	INF418	INF310, INF318
                SISTEMAS DE INFORMACIÓN 2	INF412	INF342, INF322
                SISTEMAS DISTRIBUIDOS	ELC105	ELECTIVA
                INTERACCIÓN HOMBRE - COMPUTADOR	ELC106	ELECTIVA

            OCTAVO SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                REDES 2	INF423	INF433
                PREPARACION Y EVALUACION DE PROYECTOS	ECO449	MAT419
                SISTEMAS EXPERTOS	INF428	INF 418, INF412
                INGENIERIA DE SOFTWARE 1	INF422	INF412
                SISTEMAS DE INFORMACIÓN GEOGRÁFICA	INF442	INF412
                CRIPTOGRAFIA Y SEGURIDAD	ELC107	ELECTIVA
                CONTROL Y AUTOMATIZACIÓN	ELC108	ELECTIVA

            NOVENO SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                TALLER DE GRADO 1	INF511	INF422
                INGENIERIA DE SOFTWARE 2	INF512	INF423
                TECNOLOGÍA WEB	INF513	INF428
                ARQUITECTURA DEL SOFTWARE	INF552	INF442, ECO449

            DECIMO SEMESTRE
                MATERIA	SIGLA	REQUISITOS
                MODALIDAD DE TITULACIÓN LICENCIATURA	GRL001	INF511, INF512, INF513, INF552

        */

            $materias = [
            // PRIMER SEMESTRE
            ['sigla' => 'FIS100', 'nombre' => 'FISICA 1', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF110', 'nombre' => 'INTRODUCCIÓN A LA INFORMATICA', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF119', 'nombre' => 'ESTRUCTURAS DISCRETAS', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'LIN100', 'nombre' => 'INGLÉS TECNICO 1', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT101', 'nombre' => 'CALCULO 1', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            // SEGUNDO SEMESTRE
            ['sigla' => 'FIS102', 'nombre' => 'FISICA 2', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF120', 'nombre' => 'PROGRAMACIÓN 1', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'LIN101', 'nombre' => 'INGLÉS TECNICO 2', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT102', 'nombre' => 'CALCULO 2', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT103', 'nombre' => 'ALGEBRA LINEAL', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            // TERCER SEMESTRE
            ['sigla' => 'FIS200', 'nombre' => 'FISICA 3', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'ADM100', 'nombre' => 'ADMINISTRACIÓN', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF210', 'nombre' => 'PROGRAMACIÓN 2', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF211', 'nombre' => 'ARQUITECTURA DE COMPUTADORAS', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT207', 'nombre' => 'ECUACIONES DIFERENCIALES', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            // CUARTO SEMESTRE
            ['sigla' => 'ADM200', 'nombre' => 'CONTABILIDAD', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF220', 'nombre' => 'ESTRUCTURA DE DATOS 1', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF221', 'nombre' => 'PROGRAMACIÓN ENSAMBLADOR', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT202', 'nombre' => 'PROBABILIDADES Y ESTADISTICAS 1', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT205', 'nombre' => 'METODOS NUMÉRICOS', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            // QUINTO SEMESTRE
            ['sigla' => 'INF310', 'nombre' => 'ESTRUCTURA DE DATOS 2', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF312', 'nombre' => 'BASE DE DATOS 1', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF318', 'nombre' => 'PROGRAMACIÓN LOGICA Y FUNCIONAL', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF319', 'nombre' => 'LENGUAJES FORMALES', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT302', 'nombre' => 'PROBABILIDADES Y ESTADISTICAS 2', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'ELC101', 'nombre' => 'MODELACIÓN Y SIMULACIÓN DE SISTEMAS', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 2, 'plan_estudio_id' => 1],
            ['sigla' => 'ELC102', 'nombre' => 'PROGRAMACIÓN GRAFICA', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 2, 'plan_estudio_id' => 1],
            // SEXTO SEMESTRE
            ['sigla' => 'INF322', 'nombre' => 'BASE DE DATOS 2', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF323', 'nombre' => 'SISTEMAS OPERATIVOS 1', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF329', 'nombre' => 'COMPILADORES', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF342', 'nombre' => 'SISTEMAS DE INFORMACIÓN 1', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT329', 'nombre' => 'INVESTIGACIÓN OPERATIVA 1', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'ELC103', 'nombre' => 'TOPICOS AVANZADOS DE PROGRAMACIÓN', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 2, 'plan_estudio_id' => 1],
            ['sigla' => 'ELC104', 'nombre' => 'PROGRAMACIÓN DE APLICACIONES EN TIEMPO REAL', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 2, 'plan_estudio_id' => 1],
            // SEPTIMO SEMESTRE
            ['sigla' => 'GRT001', 'nombre' => 'MODALIDAD DE TITULACION A NIVEL TECNICO SUPERIOR', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF433', 'nombre' => 'REDES 1', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF413', 'nombre' => 'SISTEMAS OPERATIVOS 2', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'MAT419', 'nombre' => 'INVESTIGACION OPERATIVA 2', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF418', 'nombre' => 'INTELIGENCIA ARTIFICIAL', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF412', 'nombre' => 'SISTEMAS DE INFORMACIÓN 2', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'ELC105', 'nombre' => 'SISTEMAS DISTRIBUIDOS', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 2, 'plan_estudio_id' => 1],
            ['sigla' => 'ELC106', 'nombre' => 'INTERACCIÓN HOMBRE - COMPUTADOR', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 2, 'plan_estudio_id' => 1],
            // OCTAVO SEMESTRE
            ['sigla' => 'INF423', 'nombre' => 'REDES 2', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'ECO449', 'nombre' => 'PREPARACION Y EVALUACION DE PROYECTOS', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF428', 'nombre' => 'SISTEMAS EXPERTOS', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF422', 'nombre' => 'INGENIERIA DE SOFTWARE 1', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF442', 'nombre' => 'SISTEMAS DE INFORMACIÓN GEOGRÁFICA', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'ELC107', 'nombre' => 'CRIPTOGRAFIA Y SEGURIDAD', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 2, 'plan_estudio_id' => 1],
            ['sigla' => 'ELC108', 'nombre' => 'CONTROL Y AUTOMATIZACIÓN', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 2, 'plan_estudio_id' => 1],
            // NOVENO SEMESTRE
            ['sigla' => 'INF511', 'nombre' => 'TALLER DE GRADO 1', 'creditos' => 5, 'nivel_id' => 9, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF512', 'nombre' => 'INGENIERIA DE SOFTWARE 2', 'creditos' => 5, 'nivel_id' => 9, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF513', 'nombre' => 'TECNOLOGÍA WEB', 'creditos' => 5, 'nivel_id' => 9, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            ['sigla' => 'INF552', 'nombre' => 'ARQUITECTURA DEL SOFTWARE', 'creditos' => 5, 'nivel_id' => 9, 'tipo_id' => 1, 'plan_estudio_id' => 1],
            // DECIMO SEMESTRE
            ['sigla' => 'GRL001', 'nombre' => 'MODALIDAD DE TITULACIÓN LICENCIATURA', 'creditos' => 5, 'nivel_id' => 10, 'tipo_id' => 1, 'plan_estudio_id' => 1],
        ];

        foreach ($materias as $materia) {
            Materia::create($materia);
        }
    }
}
