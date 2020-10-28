<h1>Ficha de Desarrollo<h1>
<section>
    <h2>{{cuenta}} {{nombre}}</h2>
    <em>Correo: {{correo}}</em>
</section>
<section>
    <h2>Grados Adquiridos</h2>
    <table>
        <tr>
            <td>
                Código
            </td>
            <td>
                Año
            </td>
            <td>
                Estudio
            </td>
        </tr>
        {{foreach grados}}
        <tr>
            <td>
                {{id}}
            </td>
            <td>
                {{year}}
            </td>
            <td>
                {{grade}}
            </td>
        </tr>
        {{endfor grados}}
    </table>
</section>