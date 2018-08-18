<?php
// Recebe uma string no formato JSON
	$usuario = "{ nome: 'Fulano da Silva', ativo: true, nascimento: '2009/05/12' }";
$meuUsuario = json_decode($usuario, true);
echo $meuUsuario['nome']; // Fulano da Silva
echo $meuUsuario['nascimento']; // 2009/05/12