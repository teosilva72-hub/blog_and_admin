<?php

namespace App\adms\Models;

if (!defined('URL')) {
    header("Location: /");
    exit();
}

/**
 * Description of AdmsVerPerfil
 *
 * @copyright (c) year, Cesar Szpak - Celke
 */
class AdmsVerPerfil
{

    private $Resultado;

    public function verPerfil()
    {
        $verPerfil = new \App\adms\Models\helper\AdmsRead();
        $verPerfil->fullRead("SELECT * FROM adms_usuarios WHERE id =:id LIMIT :limit", "id=" . $_SESSION['usuario_id'] . "&limit=1");
        $this->Resultado = $verPerfil->getResultado();
        return $this->Resultado;
    }

}
