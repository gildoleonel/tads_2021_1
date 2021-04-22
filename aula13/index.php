<?php
require_once 'util.php';

use Usuarios\Conta as ContaUsuario;
use Financas\Conta as ContaFinancas;
use Usuarios\Login;

ContaFinancas::obterDados();
echo '<br> ';
ContaUsuario::obterDados();
echo '<br>'.Login::$nome;
