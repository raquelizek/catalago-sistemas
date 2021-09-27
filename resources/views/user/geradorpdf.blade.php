<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sistemas Cadastrados</title>

    <style type="text/css">
        * {
            font-family: Verdana, Arial, sans-serif;
        }

        table {
            font-size: x-small;
        }

        tfoot tr td {
            font-weight: bold;
            font-size: x-small;
        }

        .gray {
            background-color: lightgray
        }
    </style>

</head>

<body>

    <table width="100%">
        <tr>
            <td valign="top">
                <img src="./assets/img/brand/brasao-do-brasil-republica.png" alt="" width="90" /></td>
            <td align="left">
                <h3>Sistemas Cadastrados - Catálogo de Sistemas</h3>

            </td>
        </tr>

    </table>

    <br />

    @foreach ($gerarpdf as $row)
    <table class="bordered" style="table-layout: fixed" width="100%">
        <thead style="background-color: lightgray; ">
            <tr>

                <th>Nº Sistema</th>
                <th style="width: 100px">Nome do Sistema </th>
                <th style="width: 15px">Endereço do Sistema</th>
                <th style="width: 100px">Área Demandante</th>
                <th style="width: 100px">Status</th>
                <th>Responsáveis</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{$row->sistemasID}}</th>
                <td style="width: 250px; overflow: hidden;" align="left">{{$row->sistnm}}</td>
                <td style="width: -10px; overflow: hidden;" align="left">{{$row->endereco}}</td>
                <td style="width: 100px" align="center">{{$row->diretsi}}</td>
                <td style="width: 100px" align="center">{{$row->status}}</td>
            </tr>

        </tbody>

        <!-- <tfoot>
        <tr>
            <td colspan="3"></td>
            <td align="right">Subtotal $</td>
            <td align="right">1635.00</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Tax $</td>
            <td align="right">294.3</td>
        </tr>
        <tr>
            <td colspan="3"></td>
            <td align="right">Total $</td>
            <td align="right" class="gray">$ 1929.3</td>
        </tr>
    </tfoot>  código importante-->
    </table>
    @endforeach
</body>

</html>