<table>
  <tbody>
    <tr>
      <th>Id estudiante:</th>
      <td><?php echo $estudiante->getIdEstudiante() ?></td>
    </tr>
    <tr>
      <th>Nombres:</th>
      <td><?php echo $estudiante->getNombres() ?></td>
    </tr>
    <tr>
      <th>Apellidos:</th>
      <td><?php echo $estudiante->getApellidos() ?></td>
    </tr>
    <tr>
      <th>Email:</th>
      <td><?php echo $estudiante->getEmail() ?></td>
    </tr>
    <tr>
      <th>Telefono:</th>
      <td><?php echo $estudiante->getTelefono() ?></td>
    </tr>
    <tr>
      <th>Interesado:</th>
      <td><?php echo $estudiante->getInteresado() ?></td>
    </tr>
    <tr>
      <th>Contactado:</th>
      <td><?php echo $estudiante->getContactado() ?></td>
    </tr>
  </tbody>
</table>

<hr />

<a href="<?php echo url_for('registros/edit?id_estudiante='.$estudiante->getIdEstudiante()) ?>">Edit</a>
&nbsp;
<a href="<?php echo url_for('registros/index') ?>">List</a>
