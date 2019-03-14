<?php
 
namespace app\commands;

use Yii; 
use yii\console\Controller;
use yii\db\Query;/*
use common\models\Organizacion;
use common\models\Pedido;
use common\models\PedidoMedicamento;
use common\models\Solicitud;*/
 
/**
 * Controlador general para la consola, se utiliza ejecutando el archivo yii y
 * pasando como parametros el controlador/acion y otros parametros adicionales, por ejemplo:
 * ./yii console/generar-pedido llaveParaGenerar
 */
class ComunidadController extends Controller {
    public function actionComunidadCache()
    {
        $query = (new \yii\db\Query)
            ->select(['cod_comunidad', 'nombre' ])
            ->from(\app\modules\ev25\models\Comunidad::tableName() . ' comu')
            ->orderBy('nombre');
        
        $res = $query->all();

        $archivo = Yii::getAlias('@appweb') . '/cache/comunidades.csv';
        $file = fopen($archivo, 'w');

        if (!empty($res)) {
            foreach ($res as $comu) {
                fwrite($file, "{$comu['cod_comunidad']}|\"{$comu['nombre']}" . PHP_EOL);
            }
        }

        fclose($file);
        echo "Actualización del archivo $archivo culminada" . PHP_EOL;
    }

    /*public function actionActualizarCache()
    {
        $query = (new \yii\db\Query)
            ->select(['id' => '(MAX(prod.id))', 'nombre' => "(TRIM(UPPER(prod.nombre)) || COALESCE(' '||TRIM(UPPER(prod.concentracion)), '') ||' ('||UPPER(dci.nb_dci)||')')", 'id_dci' => 'MAX(dci.id_dci)'])
            ->from(\common\models\PrPresentaciones::tableName() . ' pre')
            ->innerJoin(\common\models\PrProductos::tableName() . ' prod', 'prod.id = pre.id_producto')
            ->innerJoin(\common\models\PrDci::tableName() . ' dci', 'dci.id_dci = prod.id_dci')
            ->where(['not ilike', 'dci.nb_dci', '%NO TIENE%'])
            ->groupBy('UPPER(dci.nb_dci), TRIM(UPPER(prod.nombre)), TRIM(UPPER(prod.concentracion))')
            ->orderBy('nombre');
        
        $res = $query->all();

        $archivo = Yii::getAlias('@frontendwebroot') . '/meds/medicamentos.csv';
        $file = fopen($archivo, 'w');

        if (!empty($res)) {
            foreach ($res as $med) {
                fwrite($file, "{$med['id']}|\"{$med['nombre']}\"|{$med['id_dci']}" . PHP_EOL);
            }
        }

        fclose($file);
        echo "Actualización del archivo $archivo culminada" . PHP_EOL;
    }*/

    /*public function actionActualizarCache()
    {
        $query = (new \yii\db\Query)
            ->select(['id', 'nombre' => 'nb_presentacion'])
            ->from(\frontend\models\Medicamento::tableName())
            ->orderBy('nombre');
        $res = $query->all();

        $archivo = Yii::getAlias('@frontendwebroot') . '/meds/medicamentos.csv';
        $file = fopen($archivo, 'w');

        if (!empty($res)) {
            foreach ($res as $med) {
                fwrite($file, "{$med['id']}|\"{$med['nombre']}\"" . PHP_EOL);
            }
        }

        fclose($file);
        echo "Actualización del archivo $archivo culminada" . PHP_EOL;
    }*/

}