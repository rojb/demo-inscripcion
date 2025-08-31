<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    public function run(): void
    {
            $materias = [
            // PRIMER SEMESTRE
            ['sigla' => 'FIS100', 'nombre' => 'FISICA 1', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1],
            ['sigla' => 'INF110', 'nombre' => 'INTRODUCCIÓN A LA INFORMATICA', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1],
            ['sigla' => 'INF119', 'nombre' => 'ESTRUCTURAS DISCRETAS', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1],
            ['sigla' => 'LIN100', 'nombre' => 'INGLÉS TECNICO 1', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1],
            ['sigla' => 'MAT101', 'nombre' => 'CALCULO 1', 'creditos' => 5, 'nivel_id' => 1, 'tipo_id' => 1],
            // SEGUNDO SEMESTRE
            ['sigla' => 'FIS102', 'nombre' => 'FISICA 2', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1],
            ['sigla' => 'INF120', 'nombre' => 'PROGRAMACIÓN 1', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1],
            ['sigla' => 'LIN101', 'nombre' => 'INGLÉS TECNICO 2', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1],
            ['sigla' => 'MAT102', 'nombre' => 'CALCULO 2', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1],
            ['sigla' => 'MAT103', 'nombre' => 'ALGEBRA LINEAL', 'creditos' => 5, 'nivel_id' => 2, 'tipo_id' => 1],
            // TERCER SEMESTRE
            ['sigla' => 'FIS200', 'nombre' => 'FISICA 3', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1],
            ['sigla' => 'ADM100', 'nombre' => 'ADMINISTRACIÓN', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1],
            ['sigla' => 'INF210', 'nombre' => 'PROGRAMACIÓN 2', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1],
            ['sigla' => 'INF211', 'nombre' => 'ARQUITECTURA DE COMPUTADORAS', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1],
            ['sigla' => 'MAT207', 'nombre' => 'ECUACIONES DIFERENCIALES', 'creditos' => 5, 'nivel_id' => 3, 'tipo_id' => 1],
            // CUARTO SEMESTRE
            ['sigla' => 'ADM200', 'nombre' => 'CONTABILIDAD', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1],
            ['sigla' => 'INF220', 'nombre' => 'ESTRUCTURA DE DATOS 1', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1],
            ['sigla' => 'INF221', 'nombre' => 'PROGRAMACIÓN ENSAMBLADOR', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1],
            ['sigla' => 'MAT202', 'nombre' => 'PROBABILIDADES Y ESTADISTICAS 1', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1],
            ['sigla' => 'MAT205', 'nombre' => 'METODOS NUMÉRICOS', 'creditos' => 5, 'nivel_id' => 4, 'tipo_id' => 1],
            // QUINTO SEMESTRE
            ['sigla' => 'INF310', 'nombre' => 'ESTRUCTURA DE DATOS 2', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1],
            ['sigla' => 'INF312', 'nombre' => 'BASE DE DATOS 1', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1],
            ['sigla' => 'INF318', 'nombre' => 'PROGRAMACIÓN LOGICA Y FUNCIONAL', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1],
            ['sigla' => 'INF319', 'nombre' => 'LENGUAJES FORMALES', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1],
            ['sigla' => 'MAT302', 'nombre' => 'PROBABILIDADES Y ESTADISTICAS 2', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 1],
            ['sigla' => 'ELC101', 'nombre' => 'MODELACIÓN Y SIMULACIÓN DE SISTEMAS', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 2],
            ['sigla' => 'ELC102', 'nombre' => 'PROGRAMACIÓN GRAFICA', 'creditos' => 5, 'nivel_id' => 5, 'tipo_id' => 2],
            // SEXTO SEMESTRE
            ['sigla' => 'INF322', 'nombre' => 'BASE DE DATOS 2', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1],
            ['sigla' => 'INF323', 'nombre' => 'SISTEMAS OPERATIVOS 1', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1],
            ['sigla' => 'INF329', 'nombre' => 'COMPILADORES', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1],
            ['sigla' => 'INF342', 'nombre' => 'SISTEMAS DE INFORMACIÓN 1', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1],
            ['sigla' => 'MAT329', 'nombre' => 'INVESTIGACIÓN OPERATIVA 1', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 1],
            ['sigla' => 'ELC103', 'nombre' => 'TOPICOS AVANZADOS DE PROGRAMACIÓN', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 2],
            ['sigla' => 'ELC104', 'nombre' => 'PROGRAMACIÓN DE APLICACIONES EN TIEMPO REAL', 'creditos' => 5, 'nivel_id' => 6, 'tipo_id' => 2],
            // SEPTIMO SEMESTRE
            ['sigla' => 'GRT001', 'nombre' => 'MODALIDAD DE TITULACION A NIVEL TECNICO SUPERIOR', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1],
            ['sigla' => 'INF433', 'nombre' => 'REDES 1', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1],
            ['sigla' => 'INF413', 'nombre' => 'SISTEMAS OPERATIVOS 2', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1],
            ['sigla' => 'MAT419', 'nombre' => 'INVESTIGACION OPERATIVA 2', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1],
            ['sigla' => 'INF418', 'nombre' => 'INTELIGENCIA ARTIFICIAL', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1],
            ['sigla' => 'INF412', 'nombre' => 'SISTEMAS DE INFORMACIÓN 2', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 1],
            ['sigla' => 'ELC105', 'nombre' => 'SISTEMAS DISTRIBUIDOS', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 2],
            ['sigla' => 'ELC106', 'nombre' => 'INTERACCIÓN HOMBRE - COMPUTADOR', 'creditos' => 5, 'nivel_id' => 7, 'tipo_id' => 2],
            // OCTAVO SEMESTRE
            ['sigla' => 'INF423', 'nombre' => 'REDES 2', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1],
            ['sigla' => 'ECO449', 'nombre' => 'PREPARACION Y EVALUACION DE PROYECTOS', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1],
            ['sigla' => 'INF428', 'nombre' => 'SISTEMAS EXPERTOS', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1],
            ['sigla' => 'INF422', 'nombre' => 'INGENIERIA DE SOFTWARE 1', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1],
            ['sigla' => 'INF442', 'nombre' => 'SISTEMAS DE INFORMACIÓN GEOGRÁFICA', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 1],
            ['sigla' => 'ELC107', 'nombre' => 'CRIPTOGRAFIA Y SEGURIDAD', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 2],
            ['sigla' => 'ELC108', 'nombre' => 'CONTROL Y AUTOMATIZACIÓN', 'creditos' => 5, 'nivel_id' => 8, 'tipo_id' => 2],
            // NOVENO SEMESTRE
            ['sigla' => 'INF511', 'nombre' => 'TALLER DE GRADO 1', 'creditos' => 5, 'nivel_id' => 9, 'tipo_id' => 1],
            ['sigla' => 'INF512', 'nombre' => 'INGENIERIA DE SOFTWARE 2', 'creditos' => 5, 'nivel_id' => 9, 'tipo_id' => 1],
            ['sigla' => 'INF513', 'nombre' => 'TECNOLOGÍA WEB', 'creditos' => 5, 'nivel_id' => 9, 'tipo_id' => 1],
            ['sigla' => 'INF552', 'nombre' => 'ARQUITECTURA DEL SOFTWARE', 'creditos' => 5, 'nivel_id' => 9, 'tipo_id' => 1],
            // DECIMO SEMESTRE
            ['sigla' => 'GRL001', 'nombre' => 'MODALIDAD DE TITULACIÓN LICENCIATURA', 'creditos' => 5, 'nivel_id' => 10, 'tipo_id' => 1],
        ];

        foreach ($materias as $materia) {
            Materia::create($materia);
        }

        //Agregar la relacion con materia plan: Las primeras 20 materias estan en el plan 1, 2 y 3
        $materias = Materia::all();
        foreach ($materias as $index => $materia) {
            if ($index < 20) {
                $materia->materiaPlanes()->create(['plan_estudio_id' => 1]);
            }
            if ($index < 20) {
                $materia->materiaPlanes()->create(['plan_estudio_id' => 2]);
            }
            if ($index < 20) {
                $materia->materiaPlanes()->create(['plan_estudio_id' => 3]);
            }
        }

    }
}
