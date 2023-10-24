<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GerencialModel extends Model
{
    use HasFactory;

   protected $table = 'apdata_gerencial';

    protected $fillable = [
        'Id_folha',
         'Folha',
         'Ano',
         'Mes',
         'Id_contratado',
         'Re',
         'Nome',
         'Id_cargo',
         'Cargo',
         'Dt_admissao',
         'Dt_rescisao',
         'Cpf',
         'Vl_salario',
         'Id_mdo',
         'Mdo',
         'Id_centrocusto',
         'Centro_custo',
         'Des_centrocusto',
         'Agrupamento_verba',
         'Des_agrupamentoverba',
         'Id_verba',
         'Verba',
         'Natureza_verba',
         'Qtde',
         'Valor',
         'Tipo',
         'Local',
         'Empresa',
         'Apelido',
         'Salario_hora',
         'Valor_em_horas_normais',
         'Quantidade_de_horas',
         'Valores_horas',
         'Observacao'

     ];

    public $timestamps= false;
}
