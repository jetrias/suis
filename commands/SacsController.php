<?php
namespace app\commands;

use yii\console\Controller;
use app\components\WsSacs;
use app\models\Enfermera;
use app\models\Medico;
use app\models\Sexo;

/**
 *
 */
class SacsController extends Controller
{
    /**
     *
     */
    public function actionActualizarTodo()
    {
        echo 'Actualizando médicos...';
        $this->actionActMeds();
        echo 'Actualizando enfermeras...';
        $this->actionActEnfers();
        echo 'Actualización completa';
    }

    /**
     * Actualiza la tabla de medicos
     */
    public function actionActMeds()
    {
        $wsSacs = new WsSacs;

        $cantTotal = $wsSacs->cantMed();

        echo "Total: $cantTotal" . PHP_EOL;

        if ($cantTotal && $cantTotal > 0) {
            $cantXLote = 1000;
            $act = 0;

            while ($act < $cantTotal) {
                echo "Actualizar $cantXLote desde offset $act" . PHP_EOL;
                $res = $wsSacs->consultarMed($act, $cantXLote);

                if (!empty($res)) {
                    foreach ($res as $med) {
                        if (!ctype_digit($med['cedula'])) {
                            //echo $med['cedula'] . PHP_EOL;
                            continue;
                        }

                        $enferAct = Medico::find()->where([
                            'cedula' => $med['cedula'],
                            'licencia' => $med['licencia'],
                        ])->one();

                        if ($enferAct == null) {
                            $enferAct = new Medico;
                        }

                        $enferAct->cedula = $med['cedula'];
                        $enferAct->primer_nombre = $med['nombre1'];
                        $enferAct->segundo_nombre = $med['nombre2'];
                        $enferAct->primer_apellido = $med['apellido1'];
                        $enferAct->segundo_apellido = $med['apellido2'];
                        $enferAct->fecha_nac = $med['fecha_nac'];
                        $enferAct->id_sexo = ($med['sexo'] == Sexo::F) ? Sexo::F : Sexo::M;
                        $enferAct->licencia = $med['licencia'];
                        $enferAct->tipo_personal = Medico::TIPO_PERSONAL;
                        
                        if (!$enferAct->save()) {
                            var_dump($enferAct->getErrors());die;
                        }
                    }
                }

                $act += $cantXLote;
            }
        }
    }

    /**
     * Actualiza la tabla de enfermeras
     */
    public function actionActEnfers()
    {
        $wsSacs = new WsSacs;

        $cantTotal = $wsSacs->cantEnfer();

        echo "Total: $cantTotal" . PHP_EOL;

        if ($cantTotal && $cantTotal > 0) {
            $cantXLote = 1000;
            $act = 0;

            while ($act < $cantTotal) {
                echo "Actualizar $cantXLote desde offset $act" . PHP_EOL;
                $res = $wsSacs->consultarEnfer($act, $cantXLote);

                if (!empty($res)) {
                    foreach ($res as $enfer) {
                        if (!ctype_digit($enfer['cedula'])) {
                            //echo $med['cedula'] . PHP_EOL;
                            continue;
                        }

                        $enferAct = Enfermera::find()->where([
                            'cedula' => $enfer['cedula'],
                            'licencia' => $enfer['licencia'],
                        ])->one();

                        if ($enferAct == null) {
                            $enferAct = new Enfermera;
                        }

                        $enferAct->cedula = $enfer['cedula'];
                        $enferAct->primer_nombre = $enfer['nombre1'];
                        $enferAct->segundo_nombre = $enfer['nombre2'];
                        $enferAct->primer_apellido = $enfer['apellido1'];
                        $enferAct->segundo_apellido = $enfer['apellido2'];
                        $enferAct->fecha_nac = $enfer['fecha_nac'];
                        $enferAct->id_sexo = ($enfer['sexo'] == Sexo::F) ? Sexo::F : Sexo::M;
                        $enferAct->licencia = $enfer['licencia'];
                        $enferAct->tipo_personal = Enfermera::TIPO_PERSONAL;
                        
                        if (!$enferAct->save()) {
                            var_dump($enferAct->getErrors(), $enferAct->cedula);die;
                        }
                    }
                }

                $act += $cantXLote;
            }
        }
    }
}