<?php
require_once 'Conexao.php';
class Jogo extends Conexao
{
    public static function apiJogos(array $data)
    {
        if ($data['url']) {
            return json_decode(file_get_contents($data['url']));
        } else {
            return false;
        }
    }

    public static function apiBuscaDesc(array $data)
    {
        if ($data['id']) {
            return json_decode(file_get_contents("https://api.rawg.io/api/games/{$data['id']}?key=c537d7652ce545c784d3d97d98df1bbe"));
        } else {
            return false;
        }
    }

    public static function cadastrarJogo(array $data)
    {

        $banco = Conexao::conectar();
        $sql = "INSERT INTO jogos (nome, descricao, situacao, data_cadastro) VALUES('{$data['nomeNovoJogo']}', '{$data['descNovoJogo']}', 'A', '" . date('Y-m-d') . "')";
        $consulta = mysqli_query($banco, $sql);
        return mysqli_affected_rows($banco);
    }

    public static function atualizarJogo()
    {
        //Responsável por chamar a função que vai dar o update no banco
    }
}
