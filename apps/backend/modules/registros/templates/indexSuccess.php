<h1>Estudiantes List</h1>

<table class="table table-bordered">
  <thead>
    <tr>
      <th>Id estudiante</th>
      <th>Nombres</th>
      <th>Apellidos</th>
      <th>Email</th>
      <th>Telefono</th>
      <th>Interesado</th>
      <th>Contactado</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($estudiantes as $estudiante): ?>
    <tr>
      <td><a href="<?php echo url_for('registros/show?id_estudiante='.$estudiante->getIdEstudiante()) ?>"><?php echo $estudiante->getIdEstudiante() ?></a></td>
      <td><?php echo $estudiante->getNombres() ?></td>
      <td><?php echo $estudiante->getApellidos() ?></td>
      <td><?php echo $estudiante->getEmail() ?></td>
      <td><?php echo $estudiante->getTelefono() ?></td>
      <td><?php echo $estudiante->getInteresado() ?></td>
        <td><a href="<?php echo url_for('registros/delete?id_estudiante='.$estudiante->getIdEstudiante()) ?>"><span class="glyphicon glyphicon-<?php echo ($estudiante->getContactado()==='1'?'ok':'remove') ?>" aria-hidden="true"></span></a></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


